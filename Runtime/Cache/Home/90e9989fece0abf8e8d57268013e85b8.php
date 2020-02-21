<?php if (!defined('THINK_PATH')) exit(); $title = "购买会员";?>

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



<body style="background-color:#ffffff;">

<!-- 头部部分 开始 -->
<header class="top_header">
    <div class="left"><a href="<?php echo U('index');?>" class="return"></a></div>
    <div class="title">开通会员</div>
</header>

<section class="grade-main mt">
    <form id="form1" class="" data-callback="1" name="form1" method="post" action="<?php echo U('vip');?>" >
        <input type="hidden" name="price" id="price" value="" />
        <input type="hidden" name="level" id="level" value="" />
        

        <div class="btm">
            <!--<div class="tit">
                <span class="long01"></span>
                <p>升级会员</p>
                <span class="long02"></span>
            </div>-->

            <div class="list" id="vip_sel">
                <?php if(is_array($member_level)): $i = 0; $__LIST__ = $member_level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="sub <?php if($vo['level'] > $member['level']): ?>lv<?php endif; ?>" data-id="<?php echo ($vo["level"]); ?>" data-price="<?php echo ($vo["price"]); ?>" style="margin-bottom:20px">
                        <p class="img"><img src="/tpl/Public/images/medal_icon_<?php echo ($vo["level"]); ?>.png"  /></p>
                        <p class=""><?php echo ($vo["name"]); ?></p>
                        <span>￥<?php echo ($vo["price"]); ?></span>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        <div class="dx_line"><span>选择支付方式</span></div>

            <div class="recharge_box" style="margin-top: 0;border-top: 0; padding-bottom: 40px;">
                <input type="hidden" name="payment_type" id="payment_type" value="">
                <!--<p>选择支付方式：</p>-->
                <label data-key="alipay">
                    <i class="alipay"></i> 支付宝支付 <span></span>
                  
                </label>
               <label data-key="wxpay">
               
                  <i class="wxpay"></i>微信支付<span></span>
                </label>
            </div>

        </div>

        <button type="submit" id="submit" >立即开通<span id="show_price_1"></span></button>
    </form>
</section>

</body>

</html>



<script>
    $(document).ready(function(){
        $('.recharge_box label').click(function(){
            $('.recharge_box label span').removeClass('active');
            $(this).find('span').addClass('active');
            var payment_type = $(this).attr('data-key');
            $('#payment_type').val(payment_type);
        });

        $('#vip_sel .sub.lv').click(function(){
            var price = $(this).attr('data-price');
            var level = $(this).attr('data-id');
            $(this).addClass('active').siblings().removeClass('active');
            $('#show_price_1').html("（￥" +price+"）");
            $('#price').val(price);
            $('#level').val(level);
        });

        $('#submit').click(function(){
            var payment_type = $('#payment_type').val();
            var level = $('#level').val();

            if( level == '' ) {
                sp_tip('请选择要升级的级别.');
                return false;
            }
            if( payment_type == '' ) {
                sp_tip('请选择支付渠道.');
                return false;
            }
        })
        $('#form1').submit();
    });

    function submit_callback(data){
        if( data.status == 1 ) {
            window.location.href = data.url;
        } else {
            sp_tip(data.info);
        }
    }
</script>