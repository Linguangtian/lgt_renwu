<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>

<html>

<head>

    <?php
 $version = time(); ?>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <meta name="keywords" content=""/>

    <meta name="description" content=""/>

    <title><?php echo ($title); ?></title>

    <link rel="stylesheet" href="/tpl/Public/css/share.css?<?php echo ($version); ?>">

    <link rel="stylesheet" href="/tpl/Public/css/font.css?<?php echo ($version); ?>" />
    
    <link rel="stylesheet" href="/tpl/Public/css/ystep.css" type="text/css" />

    <!--JQ-->

    <script type="text/javascript" src="/tpl/Public/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/jquery-form.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/layer_mobile2/layer.js?<?php echo ($version); ?>"></script>
    <!--<script type="text/javascript" src="/tpl/Public/js/swiper.3.1.7.min.js"></script>-->



    <!--<script src="/tpl/Public/js/jquery.simplesidebar.js"></script>-->

    <!--<script src="/tpl/Public/js/jquery.SuperSlide.2.1.1.js"></script>-->

    <!--<script src="/tpl/Public/js/TouchSlide.1.0.js"></script>-->



    <script type="text/javascript" src="/tpl/Public/js/func.js?<?php echo ($version); ?>"></script>

    <script>

        var SITE_URL  = 'https:' == document.location.protocol ?'https://' : 'http://' + "<?php echo $_SERVER['HTTP_HOST'];?>";

    </script>

</head>

<body>

<div id="body">
    <header class="top_header">
        <div class="left"><a href="javascript:" data-url="<?php echo U('Member/index');?>" class="return go-back"></a></div>
        <div class="title"><?php echo ($title); ?></div>
    </header>
    <div class="body_main">
        <form class="submit-ajax" action="<?php echo U('bdwx');?>">
            <div class="form_reg" style="margin-top:40px">
                <p>
                    <input value="<?php echo ($weixin); ?>" type="text" name="weixin" id="weixin" placeholder="请输入微信号" class="input-text" />
                </p>

            </div>
            <div class="reg_btn">
                <button type="submit" id="submit" class="" disabled>确认修改</button>
            </div>
        </form>
    </div>
</div>
</body>


<script>
    $(function(){
        $('.input-text').keyup(function(){
            if( $('#phone').val() != '' && $('#password').val() != '' && $('#code').val() != '' ) {
                $('#submit').addClass('active');
                $('#submit').removeAttr("disabled");
            } else {
                $('#submit').removeClass('active');
                $('#submit').attr("disabled","disabled");
            }
        })
    });

</script>