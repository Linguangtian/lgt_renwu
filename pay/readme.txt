  020支付配置运行帮助
  https://www.020zf.com
  


  运行配置步骤

    1.登陆020支付后台,获取到 token, identification值;

    2.在pay.php文件中,填写 $token, $identification, $return_url, $notify_url 值;

    3.在notify_url.php文件中,填写 $token 值;

    4.运行支付首页 index.html。 


  注意事项

    1.微信,支付宝的当前使用帐户,需要录入至少一个无设置金额二维码。录入方式可以通过网站后台，或者020支付手机监控app端采集录入。

    2.key一定要在服务端计算，不要在网页中通过js计算。  

    3.token只能存放在服务端，不可以以任何形式存放在网页代码中（可逆加密也不行），也不可以通过url参数方式传入网页。

