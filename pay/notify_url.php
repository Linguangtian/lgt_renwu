<?php
/**
 * ---------------------通知异步回调接收页-------------------------------
 * 此页就是您之前传给pay.020zf.com的notify_url页的网址
 * 支付成功，020支付会根据您之前传入的网址，回调此页URL，post回参数
 * --------------------------------------------------------------
 */
    
    //必填项目, 后台中看到的商户 token 值 ,不可写在客户端.
    $token = "EFWJDQZI8B0XD713J93EA3B8M6NRATLQ"; 

    //回调过来的post值
    $bill_no = $_POST["bill_no"];                  //一个24位字符串，是此订单在020ZF服务器上的唯一编号
    $orderid = $_POST["orderid"];                  //是您在发起付款接口传入的您的自定义订单号
    $price = $_POST["price"];                      //单位：分。是您在发起付款接口传入的订单价格
    $actual_price = $_POST["actual_price"];        //单位：分。一定存在。表示用户实际支付的金额。
    $orderuid = $_POST["orderuid"];                //如果您在发起付款接口带入此参数，我们会原封不动传回。
    $key = $_POST["key"];                       
    
    $notify_key = md5($actual_price.$bill_no.$orderid.$orderuid.$price.$token);
    if($key == $notify_key){
        //校验key成功，防止篡改,伪造。
        //在此位置编写成功支付后需要执行的逻辑，如加余额，订单付款成功，装备购买成功等等。
        //
        //



       //在成功执行完通知逻辑后，020支付后台需要得到"success"，则不再通知此订单的成功支付信息。
       //否则会相隔一定时间连续通知到此notify_url页面.       
       echo "success";	   //请不要修改或删除	
    }

?>