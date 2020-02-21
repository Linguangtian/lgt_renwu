<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>020支付 php demo</title>
</head>
<body>
    <form>
        <p><input id="inputprice" type="text" name="inputprice" class="form-control" placeholder="请输入金额" required></p>
        <div class="radio">
            <label>
                <p><input type="radio" name="demo" id="demo-weixin" value="option1" checked="" >
                微信支付</p>
            </label>
        </div>        
        <div class="radio">
            <label>            
                <p><input type="radio" name="demo" id="demo-alipay" value="option2" >
                支付宝支付</p>
            </label>
        </div>        
        <button type="button" id="demoBtn">确认购买</button>        
    </form>

    <form style='display:none;' id='formpay' name='formpay' method='post' action='https://pay.020zf.com/'>
        <input name='goodsname' id='goodsname' type='text' value='' />
        <input name='type' id='type' type='text' value='' />
        <input name='key' id='key' type='text' value=''/>
        <input name='notify_url' id='notify_url' type='text' value=''/>
        <input name='orderid' id='orderid' type='text' value=''/>
        <input name='orderuid' id='orderuid' type='text' value=''/>
        <input name='price' id='price' type='text' value=''/>
        <input name='return_url' id='return_url' type='text' value=''/>
        <input name='identification' id='identification' type='text' value=''/>
        <input type='submit' id='submitdemo'>
    </form>

<!-- Jquery files -->
<script type="text/javascript" src="https://cdn.staticfile.org/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$().ready(function(){
    function gettype(){
        return ($("#demo-weixin").is(':checked') ? "1" : "2" ); 
    }

    $("#demoBtn").click(function(){
        $.post(
            "/pay/pay.php",
            {
                price : $("#inputprice").val(), 
                type : gettype()
            },
            function(data){                 
		    $('#identification').val(data.identification);
                    $('#price').val(data.price);
                    $("#type").val(data.type);
                    $('#notify_url').val(data.notify_url);
                    $('#return_url').val(data.return_url);
                    $('#orderid').val(data.orderid);
                    $('#orderuid').val(data.orderuid);
                    $("#goodsname").val(data.goodsname);            
                    $('#key').val(data.key);
                    $('#submitdemo').click();                 
            }, "json"
        );
    });
});
</script>    

</body>
</html>