<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

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
<html>
	<head>
		<meta charset="UTF-8">
		<title>关于我们</title>
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
				text-decoration: none;
			}
			.about{
				width: 100%;

				background: #fff;
			}
			.about img{
              width: 300px;
				height: 300px;
				display: block;
				margin: 0 auto;
			}
			.about_Ss{
				width: 100%;
				background: #fff;
				border-top: 1px solid #ededed;
				border-bottom: 1px solid #ededed;
			}
			.about_Ss p{
				width: 100%;
				box-sizing:border-box;
				height: 4rem;
				line-height: 4rem;
				padding-left: 6%;
				padding-right: 6%;
				border-bottom: 1px solid #ededed;
			}

			.about_Ss img{ width:80%; display:block; margin:10px auto;}
		</style>
	</head>
	<body style="background: #ededed;">
	<header class="top_header">
		<div class="left"><a href="javascript:" data-url="<?php echo U('Home/index/index');?>" class="return go-back" ></a></div>
		<div class="title">刷手征集中</div>
		<div class="right">

		</div>
	</header>
	<div style="height: 40px;"> </div>
		
		<div class="about">
			
			<img  width="300px" height="300px" src="/tpl/Public/images/rwxq2.png"/>
			
		</div>



		<div class="about_Ss">
			<p style="line-height:2rem;height: 2rem;" >
				刷手征集中：<br/>
			</p>
			<p style="line-height:2rem;height: 2rem; color:#f03851; ">平台不收取刷手任何费用，无需加盟费，业余轻松赚钱</p>





			<p>QQ群:   1060782447 </p>
			<p>QQ客服: <?php echo ($sys_config["qq_kf"]); ?></p>
		</div>
		
		
	</body>
</html>