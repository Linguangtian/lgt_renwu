<?php
/**
 * ---------------------参数生成页-------------------------------
 * Author:Leo
 * Project:PaysApi.com
 *
 * 在您自己的服务器上生成新订单，并把计算好的订单信息传给您的前端网页。
 * 注意：
 * 1.key一定要在服务端计算，不要在网页中计算。
 * 2.token只能存放在服务端，不可以以任何形式存放在网页代码中（可逆加密也不行），也不可以通过url参数方式传入网页。
 * 3.接口跑通后，如果发现收款二维码是我们官方的，请检查APP是否正在运行。为保障您收款功能正常，如果您的收款手机APP掉线超过一分钟，就会触发代收款机制，详情请看网站帮助。
 * --------------------------------------------------------------
 */

//从网页传入price:支付价格， istype:支付渠道：1-支付宝；2-微信支付
$price      = $_POST["price"];
$type      = $_POST["istype"];
$type = $type=='1' ? 'alipay' :'qqpay';
$HOST_URL  = "http://pay.r3o.cn/submit.php?";
$order_no = 'VS10101';
$goodsname = "充值";
$return_url = 'http://47.114.74.253/payreturn.php';
$notify_url = 'http://www.demo.com/paynotify.php';

$uid = "904163";
$KEY = "2794274BA32106BC77B94192AC5C98F5";


$parameter = array(
    "pid"            => $uid,//平台ID号
    "type"          => $type,//支付方式 alipay	qqpay:QQ钱包,wxpay:微信支付
    "out_trade_no"  => $order_no,  //订单号
    "notify_url"    => $notify_url, // 付款成功通知地址
    "return_url"    => $return_url, // 页面跳转通知地址
    "name"         => $goodsname,//商品名称
    "money"        => $price,//自定义参数
    "sitename"      => "赞多多",
);

ksort($parameter); //重新排序$parameter数组
reset($parameter); //内部指针指向数组中的第一个元素
$sign = '';
$urls = '';
foreach ($parameter AS $key => $val) {
    if ($val == '') continue;
    if ($key != 'sign') {
        if ($sign != '') {
            $sign .= "&";
            $urls .= "&";
        }
        $sign .= "$key=$val";  //拼接为url参数形式
        $urls .= "$key=" . urlencode($val); //拼接为url参数形式
    }
}
$key = md5($sign . $KEY);// MD5签名
$query = $urls . '&sign=' . $key . "&sign_type=MD5"; // 创建订单所需的参数

$url = $HOST_URL . $query; //构造请求url

$parameter['sign']=$key;
$parameter['sign_type']='MD5';


echo jsonSuccess("OK",$parameter,"");
//返回正确
function jsonSuccess($message = '',$data = '',$url=null)
{
    $return['msg']  = $message;
    $return['data'] = $data;
    $return['code'] = 1;
    $return['url'] = $url;
    return json_encode($return);
}
?>