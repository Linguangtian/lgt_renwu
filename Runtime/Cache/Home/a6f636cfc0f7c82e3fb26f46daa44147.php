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
<body class="gray_bg" style="background: #fff;">
<!-- 头部部分 开始 -->
<style>
	.roll {
		background: #51a3ff;
		color: #ffffff;
		padding: 1vw 3vw;
		margin: 3vw;
		justify-content: flex-start;
		border-radius: 5vw;
	}
	.wrap-flex-row{
		display: flex;
		display: -webkit-flex;
		flex-direction: row;
		justify-content: space-around;
		align-items: center;
		flex-wrap: wrap;
	}
	.swiper-roll{
		height:8vw;
		margin:0 2vw;
		position: relative;
		overflow: hidden;
		width: 65vw;
	}
	.swiper-roll .swiper-wrapper{
		line-height: 8vw;
	}
	.swiper-roll .swiper-wrapper .swiper-slide .org{
		padding:0 5px;
		color:#f03851;
	}


	.gray_bg .nav{
		margin:3vw;
		background: #f4f4f4;
		border-radius: 2vw;
		flex-wrap: wrap;
	}
	.gray_bg .nav .item{
		padding: 3vw 0;
		width: 25%;
		text-align: center;
	}
	.gray_bg .nav .item.select{
		color: #0254fa;
	}

	.found-home{
		width: 95%;
		margin-top: 2rem;
		padding-bottom:30rem;
	}

	.found-home li{
		width: 96%;
		height: 6rem;
		/*background: yellow;*/
		float: left;
		margin-left: 4%;
		position: relative;
		margin-bottom: 1rem;
	}

	.found-home li img{
		width: 100%;
		height: 6rem;
	}

	.found-home li p{
		position: absolute;
		top: 1rem;
		left: 0.8rem;
		font-size: 18px;
		color: #fff;
		font-weight: bold;

	}

	.found-home li a{
		position: absolute;
		top: 35%;
		border: 1px #fff solid;
		left: 15rem;
		width: 3rem;
		display: block;
		height: 1.8rem;
		border-radius: 1.8rem;
		text-align: center;
		line-height: 1.8rem;
		color: #fff;
	}

</style>

<div class="task_top">

</div>

<div class="task_nav">
	<ul>
      <a href="/index.php/Home/task/task_list.html">
		<li>
			<img src="/tpl/Public/images/HTB1FC0scMaH3KVjSZFj763FWpXab.png"/>
			<p>会员说明</p>
		</li>
        </a>

		<a href="/index.php/Home/member/vip.html">
			<li>
			<img src="/tpl/Public/images/HTB1IGdvcL1G3KVjSZFk761K4XXaq.png"/>
			<p>开通会员</p>
		</li>
		</a>

		<a href="/index.php/Home/Public/share">
		<li>
			<img src="/tpl/Public/images/HTB1R2BvcUGF3KVjSZFv762_nXXa6.png"/>
			<p>邀请好友</p>
		</li>
		</a>

		<!--<a href="/index.php/Home/Page/show/id/12.html">-->
		<a href="/index.php/Home/Page/kefu">
			<li>
			<img src="/tpl/Public/images/HTB1M2hDcHus3KVjSZKb760qkFXax.png"/>
			<p>联系客服</p>
		</li>
		</a>

	</ul>
</div>


<div class="roll wrap-flex-row">任务大厅：
	<div class="swiper-roll ell swiper-container-vertical swiper-container-android">
		<div class="swiper-wrapper" style="transition-duration: 300ms; transform: translate3d(0px, -392px, 0px);"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="16" style="height: 28px;">恭喜1*********6获得任务奖励1圈币。</div>
			<div class="swiper-slide" data-swiper-slide-index="0" style="height: 28px;">恭喜1*********6获得下级返佣奖励0.2{...</div><div class="swiper-slide" data-swiper-slide-index="1" style="height: 28px;">恭喜1*********7获得下级返佣奖励0.6{...</div><div class="swiper-slide" data-swiper-slide-index="2" style="height: 28px;">恭喜1*********8获得任务奖励2圈币。</div><div class="swiper-slide" data-swiper-slide-index="3" style="height: 28px;">恭喜1*********6获得下级返佣奖励0.2{...</div><div class="swiper-slide" data-swiper-slide-index="4" style="height: 28px;">恭喜1*********7获得下级返佣奖励0.6{...</div><div class="swiper-slide" data-swiper-slide-index="5" style="height: 28px;">恭喜1*********8获得任务奖励2圈币。</div><div class="swiper-slide" data-swiper-slide-index="6" style="height: 28px;">恭喜1*********6获得下级返佣奖励0.2{...</div><div class="swiper-slide" data-swiper-slide-index="7" style="height: 28px;">恭喜1*********7获得下级返佣奖励0.6{...</div><div class="swiper-slide" data-swiper-slide-index="8" style="height: 28px;">恭喜1*********8获得任务奖励2圈币。</div><div class="swiper-slide" data-swiper-slide-index="9" style="height: 28px;">恭喜1*********6获得下级返佣奖励0.2{...</div><div class="swiper-slide" data-swiper-slide-index="10" style="height: 28px;">恭喜1*********7获得下级返佣奖励0.6{...</div><div class="swiper-slide" data-swiper-slide-index="11" style="height: 28px;">恭喜1*********8获得任务奖励2圈币。</div><div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="12" style="height: 28px;">恭喜1*********8获得任务奖励2圈币。</div><div class="swiper-slide swiper-slide-active" data-swiper-slide-index="13" style="height: 28px;">恭喜1*********8获得任务奖励2圈币。</div><div class="swiper-slide swiper-slide-next" data-swiper-slide-index="14" style="height: 28px;">恭喜1*********6获得任务奖励5圈币。</div><div class="swiper-slide" data-swiper-slide-index="15" style="height: 28px;">恭喜1*********6获得任务奖励1圈币。</div><div class="swiper-slide" data-swiper-slide-index="16" style="height: 28px;">恭喜1*********6获得任务奖励1圈币。</div>				<div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="height: 28px;">恭喜1*********6获得下级返佣奖励0.2{...</div></div>
		<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
	</div>
</div>


<div class="task_news" style="display: none">
	<p class="task_news_title">{$sys_config.website}新闻</p>
	<div class="task_news_nr">
		<ul>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<a href="<?php echo U('showw',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?><span>&nbsp;</span></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>

	<div class="found-home">
		<ul>
			<li style="background: #ED9C4B;">
				<!-- <img src="/tpl/Public/images/3b0a8f8cb9ac6ee20722691ea5077656_wDEkwb5U4ObbAAAAABJRU5ErkJggg==.png"/> -->
				<p>铜圈会员</p>
				<p style="margin-top:2rem">赚钱任务区</p>
				<a href="<?php echo U('lists_sub',array('level'=>0));?>">GO <i></i></a>
			</li>

			<li style="background: #d4d5d9;">
				<!-- <img src="/tpl/Public/images/2db7bc1361e32522118937b4658c3173_Eww0gADgi0AAAAASUVORK5CYII=.png"/> -->
				<p>银圈会员</p>
				<p style="margin-top:2rem">赚钱任务区</p>
				<a href="<?php echo U('lists_sub',array('level'=>1));?>">GO <i></i></a>
			</li>

			<li style="background: rgba(234, 217, 12,0.8);">
				<!-- <img src="/tpl/Public/images/lu.png"/> -->
				<p>金圈会员</p>
				<p style="margin-top:2rem">赚钱任务区</p>
				<a href="<?php echo U('lists_sub',array('level'=>2));?>">GO <i></i></a>
			</li>
			<!-- <li>
				<img src="/tpl/Public/images/c7812764d5d7e905a0695d78c3d518da_f4.png"/>
				<p>高级代理</p>
				<a href="<?php echo U('lists_sub',array('level'=>3));?>">GO <i></i></a>
			</li> -->

			<!--
            <li>
                  <img src="http://dj.mmfdpp.cn/f3.png"/>
                  <p>达人任务</p>
                  <a href="<?php echo U('lists_sub',array('level'=>2));?>">GO <i></i></a>
              </li>
              <li>
                  <img src="http://dj.mmfdpp.cn/f4.png"/>
                  <p>敬请期待</p>
                  <a href="#">GO <i></i></a>
              </li>
              -->
		</ul>
	</div>


	<!--<div class="task_zwnr">-->
		<!--<img src="/tpl/Public/images/HTB1wYXxcMKG3KVjSZFL761MvXXaA.png"/>-->
		<!--<p>没有更多啦</p>-->
	<!--</div>-->

<script src="http://zan.0766city.com/tpl/Public/js/swiper.min.js"></script>
<script>
    var swiper2 = new Swiper('.swiper-roll', {
        direction: 'vertical',
        pagination: {
            clickable: true,
        },
        autoplay: true,
        loop:true
    });

    $('.goto').click(function () {
        location.href = $(this).attr('url');
    });

</script>

<style type="text/css">
    .footer {
        height: 3.5rem;
        border-top: 1px #f5f5f5 solid;
        background: #fff;
        osition: fixed;
        bottom: 0;
        width: 100%;
        margin: 0 auto;
        text-align: center;
        color: #666666;
    }
    .footer ul {
        overflow: hidden;
    }
    .footer li {
        text-align: center;
        width: 20%;
        padding: 0;
        height: 3.5rem;
        float: left;
    }
    .footer li img {
        width: 1.5rem;
        height: 1.5rem;
        margin-top: 0.5rem;
        text-align: center;
    }
    .active {
       color: #f72844;font-size: 12px;
    }

    .footer li p {
        margin-top: 0.2rem;
        font-size: 12px;
        line-height: 12px;
        width: 100%;
    }
</style>
<!--<footer class="footer">
    <ul>
        <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="active"<?php endif; ?> >
            <a href="<?php echo U('Index/index');?>">
                <span><i class="icon_home" style="width: 20px;height: 20px;"></i></span>
                <p style="color: #e21330;font-size: 12px;">首页</p>
            </a>
        </li>
&lt;!&ndash;<li <?php if(CONTROLLER_NAME == 'Task'): ?>class="active"<?php endif; ?> >
            <a href="<?php echo U('Task/index');?>">
                <span><i class="icon_task" style="width: 20px;height: 20px;"></i></span>
              <p>VIP</p>
            </a>
        </li>&ndash;&gt;



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

        &lt;!&ndash; <li <?php if(CONTROLLER_NAME == 'Member' and ACTION_NAME == 'notice'): ?>class="active"<?php endif; ?> >
           <a href="<?php echo U('Member/notice');?>">
                <span><i class="icon_xiaoxi" style="width: 20px;height: 20px;"></i></span>
             <p>消息 </p>
               <span class="divright <?php echo ($_SESSION['weidu_xiaoxi'] ? 'show':'hide'); ?>"><?php echo ($_SESSION['weidu_xiaoxi']); ?></span>
            </a>
        </li>

        &ndash;&gt;
        <li <?php if(CONTROLLER_NAME == 'Member' and ACTION_NAME == 'index' ): ?>class="active"<?php endif; ?> >
            <a href="<?php echo U('Member/index');?>">
                <span><i class="icon_user" style="width: 20px;height: 20px;"></i></span>
                <p>我的</p>
            </a>
        </li>
    </ul>
</footer>-->
<footer class="footer">
    <ul>
        <a href="<?php echo U('Index/index');?>">
            <li>
                <?php if(CONTROLLER_NAME2 == 'home_index'): ?><img src="/tpl/Public/images/home_b.png?v=1"/>
                        <p class="active">首页</p>
                    <?php else: ?>
                        <img src="/tpl/Public/images/home_a.png?v=1"/>
                        <p >首页</p><?php endif; ?>
            </li>
        </a>


        <a href="<?php echo U('Home/Page/show/id/6');?>">
            <li>

                <?php if(CONTROLLER_NAME == 'Page'): ?><img src="/tpl/Public/images/page_b.png?v=1"/>
                    <p class="active">加盟</p>
                    <?php else: ?>
                    <img src="/tpl/Public/images/page_a.png?v=1"/>
                    <p >加盟</p><?php endif; ?>
            </li>
        </a>



        </li>
        <a href="<?php echo U('Task/handle');?>">
            <li class="task_shop">
                <img class="foot_shop" src="/tpl/Public/images/f_add_1.png?v=1"/>
                <p>发布</p>
            </li>
        </a>

        <a href="<?php echo U('Index/serach');?>">
            <li>
                <?php if(CONTROLLER_NAME2 == 'search'): ?><img src="/tpl/Public/images/task_b.png"/>
                    <p class="active">大厅</p>
                    <?php else: ?>
                    <img src="/tpl/Public/images/task_a.png"/>
                    <p>大厅</p><?php endif; ?>

            </li>
        </a>

        <a href="<?php echo U('Member/index');?>">
            <li>
                <?php if(CONTROLLER_NAME == 'Member' and ACTION_NAME == 'index' ): ?><img src="/tpl/Public/images/user_b.png"/>
                <p class="active">我的</p>
                 <?php else: ?>
                    <img src="/tpl/Public/images/user_a.png"/>
                    <p>大厅</p><?php endif; ?>
            </li>
        </a>

    </ul>
</footer>
<script>
    $(function () {
        $('.footer').prev('div').css('margin-bottom','150px')
    })

</script>
</body>
</html>