<?php
/**
 * ---------------------参数生成页-------------------------------
 * 在您自己的服务器上生成新订单，并把计算好的订单信息传给您的前端网页。
 * 注意：
 * 1.key一定要在服务端计算，不要在网页中计算。
 * 2.token只能存放在服务端，不可以以任何形式存放在网页代码中（可逆加密也不行），也不可以通过url参数方式传入网页。
 * --------------------------------------------------------------
 */

    //从网页传入,包括支付价格price,单位:元;  支付渠道type,1-微信；2-支付宝   
    $price = $_POST["price"];
    $type = $_POST["type"];
    
    //支付业务中的相关订单信息。包括支付用户orderuid(选填),购买商品名goodsname(选填),订单号orderid(必填)
    $orderuid = "username";       
    $goodsname = "商品名称";
    //必填,用户订单号, 这里使用时间戳代替做测试。
    $orderid = time();  
    
    //必填，填写登陆后台查看到的Token及identification。严禁在客户端计算key，严禁在客户端存储Token。
    $token = "EFWJDQZI8B0XD713J93EA3B8M6NRATLQ";  
    $identification = "A48PSOPKM6UVUY3R";   
    
    //必填，填写支付成功后的回调通知地址及用户转向页面
    $return_url = "http://47.114.74.253/return_url.php";
    $notify_url = "http://47.114.74.253/notify_url.php";      
    $return_url = htmlspecialchars($return_url);
    $notify_url = htmlspecialchars($notify_url);    
    //验证key,不可以更改参数顺序。
	$price = $price*100;    //注意：020支付需要的参数单元为分; 
    $key = md5($goodsname. $identification. $notify_url. $orderid. $orderuid. $price. $return_url. $token. $type  );
    $returndata['price'] = $price;     
    $returndata['type'] = $type;
    $returndata['orderuid'] =$orderuid;
    $returndata['goodsname'] = $goodsname;
    $returndata['orderid'] = $orderid;
    $returndata['identification'] = $identification;
    $returndata['notify_url'] = $notify_url;
    $returndata['return_url'] = $return_url;
    $returndata['key'] = $key; 
    echo json_encode($returndata);

?>