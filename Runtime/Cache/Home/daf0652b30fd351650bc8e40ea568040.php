<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>联系客服</title>
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
		<link rel="stylesheet" href="/tpl/Public/css/share.css?1562721555">
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
				text-decoration: none;
			}
			.about{
				width: 100%;
				height: 200px;
				background: #fff;
			}
			.about img{
              width: 200px;
				height: 200px;
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
			.about_Ss span{
				float: right;
				height: 2rem;
				background: #1cb500;
				margin-top: 1rem;
				line-height: 2rem;
				padding: 0 10px;
				color: #fff;
				border-radius: 2rem;
			}
			.about_Ss img{ width:80%; display:block; margin:65px auto;}
		</style>
	</head>
	<body style="background: #ededed;">
	<header class="top_header">
		<div class="left"><a href="javascript: history.back(-1)" class="return go-back"></a></div>
		<div class="title">联系客服</div>
	</header>
		
		<div class="about_Ss">
			<img src="<?php echo ($wx_qrcode); ?>" alt="">
		</div>
		
		
	</body>
</html>