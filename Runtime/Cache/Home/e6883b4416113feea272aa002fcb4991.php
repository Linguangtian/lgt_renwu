<?php if (!defined('THINK_PATH')) exit(); $title = $show['title'];?>
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
<div class="body_main">
    <!-- 头部部分 开始 -->
    <header class="top_header">
        <div class="left"><a href="javascript:" class="return go-back"></a></div>
        <div class="title"><?php echo ($title); ?></div>
    </header>
    <!--主体部分 开始-->
    <div class="page_main tline mt">
        <!--头部部分 开始-->
        <div class="tit" style="margin:0 auto;width: 90%;font-size: 16px;">
            <h1 style="text-align: center;font-size: 20px;">新手必读</h1>

            <!--        <p style="font-size: 20px;color: #000;">1.圈币是什么？</p>
           <P style="font-size: 15px;color: #000;">&nbsp &nbsp 圈币是金朋友圈平台的通行虚拟币，做完任务后以圈币的形式返还佣金，100圈币≈1元人民币，圈币也可以提现。</P>
           <p style="font-size: 20px;color: #000;">2.圈币怎么获得？</p>
           <P style="font-size: 15px;color: #000;">&nbsp &nbspA。新注册用户系统随机赠送100-10000圈币；</P>
           <P style="font-size: 15px;color: #000;">&nbsp &nbspB。注册成功的用户可以在app接任务，每个任务对应圈币奖励数额，用户完成任务以后，系统审核成功，即可获得圈币。</P>
           <P style="font-size: 15px;color: #000;">&nbsp &nbspC。邀请朋友加入金朋友圈会员，可以获得一定数额的圈币奖励。</P>
           <p style="font-size: 20px;color: #000;">3.佣金如何提现，多久可以到账? </p>
           <P style="font-size: 15px;color: #000;">&nbsp &nbsp金朋友圈与支付宝及全国各大银行合作对接，满50元起即可申请提现，用户每星期一申请，48小时内支付。
           推荐各位用户支付宝申请提现（财务审核/到账速度最快）请各位用户在每天做任务的时候，全部按照要求来做。
           提现之前，认真核对自己的支付宝/银行卡账号跟姓名是否正确无误。</P>-->
            <p style="font-size: 20px;color: #000;">   平台开放时间预计2020.03.01日</p>
            <br/>
            <P style="font-size: 17px;color: #000;">   全网刷手征集中：QQ群 1060782447</P>

            <P style="font-size: 17px;color: #000;">  进群免费升级VIP</P>



            <!-- <h2><?php echo ($show["title"]); ?></h2>
            <p>最近：<?php echo (date('Y-m-d H:i',$show["update_time"])); ?></p>
        </div>
        <div class="txt">
            <?php echo ($show["content"]); ?> -->
        </div>
    </div>
</div>

<!-- 底部联系部分 开始 -->
<style type="text/css">
	.footer li{
		width: 20%;
        padding:5px 0;
	}

    .fabu{
        /*font-size: 20px;display: block;border-radius: 50%;margin: 0 auto;*/
        /*width:50px;height: 50px;border: 1px solid red;*/
        /*margin-top: -30px;*/
        /*z-index: 999;;position:absolute;*/

        border: 1px solid gainsboro;
        border-radius: 50%;
        background: #f7f7f7;
        width: 48px;
        line-height: 48px;
        margin:0 auto;
        height: 48px;
        font-size: 2.5rem;
        margin-top: -5px;
    }
    .user_index_shza{
        margin-bottom:150px;
    }
    .divright{
        position: relative;
        right: 10px;;
        top: -35px;;
        background:#c72c4f;
        width: 15px;
        height: 15px!important;
        float: right;
        border-radius: 50%;
        color: #fff;
    }
    .body_main{
        margin-bottom: 76px;;}
    .footer li span.hide{display: none}

</style>
<footer class="footer">
    <ul>
        <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="active"<?php endif; ?> >
            <a href="<?php echo U('Index/index');?>">
                <span><i class="icon_home" style="width: 20px;height: 20px;"></i></span>
                <p>首页</p>
            </a>
        </li>
<!--<li <?php if(CONTROLLER_NAME == 'Task'): ?>class="active"<?php endif; ?> >
            <a href="<?php echo U('Task/index');?>">
                <span><i class="icon_task" style="width: 20px;height: 20px;"></i></span>
              <p>VIP</p>
            </a>
        </li>-->



        <li <?php if(CONTROLLER_NAME == 'Member' and ACTION_NAME == 'notice'): ?>class="active"<?php endif; ?> >
        <a href="<?php echo U('Home/Page/show/id/6');?>">
            <span><i class="icon_xiaoxi" style="width: 20px;height: 20px;"></i></span>
            <p>加盟 </p>
            <span class="divright <?php echo ($_SESSION['weidu_xiaoxi'] ? 'show':'hide'); ?>"><?php echo ($_SESSION['weidu_xiaoxi']); ?></span>
        </a>
        </li>



       <li <?php if(CONTROLLER_NAME == 'Task2'): ?>class="active"<?php endif; ?> >
        <div class="fabu">
            <a href="<?php echo U('Task/handle');?>" style="font-size: 25px">+</a>
        </div>

        </li>


        <li <?php if(CONTROLLER_NAME == 'Member' and ACTION_NAME == 'notice'): ?>class="active"<?php endif; ?> >
        <a href="<?php echo U('Member/notice');?>">
            <span><i class="task_a" style="width: 20px;height: 20px;"></i></span>
            <p>大厅 </p>
            <span class="divright <?php echo ($_SESSION['weidu_xiaoxi'] ? 'show':'hide'); ?>"><?php echo ($_SESSION['weidu_xiaoxi']); ?></span>
        </a>
        </li>

        <!-- <li <?php if(CONTROLLER_NAME == 'Member' and ACTION_NAME == 'notice'): ?>class="active"<?php endif; ?> >
           <a href="<?php echo U('Member/notice');?>">
                <span><i class="icon_xiaoxi" style="width: 20px;height: 20px;"></i></span>
             <p>消息 </p>
               <span class="divright <?php echo ($_SESSION['weidu_xiaoxi'] ? 'show':'hide'); ?>"><?php echo ($_SESSION['weidu_xiaoxi']); ?></span>
            </a>
        </li>

        -->
        <li <?php if(CONTROLLER_NAME == 'Member' and ACTION_NAME == 'index' ): ?>class="active"<?php endif; ?> >
            <a href="<?php echo U('Member/index');?>">
                <span><i class="icon_user" style="width: 20px;height: 20px;"></i></span>
                <p>我的</p>
            </a>
        </li>
    </ul>
</footer>

<script>
    $(function () {
        $('.footer').prev('div').css('margin-bottom','150px')
    })

</script>
</body>
</html>