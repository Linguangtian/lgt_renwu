<?php if (!defined('THINK_PATH')) exit(); $title = "任务记录";?>

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

<script src="/tpl/Public/js/countdown.js"></script>

<body class="gray_bg" style="background:#f8f8f8">

<!-- 头部部分 开始 -->

  <!-- 头部部分 开始 -->

    <header class="top_header">

        <div class="left"><a href="javascript:" data-url="<?php echo U('index');?>" class="return go-back"></a></div>

        <div class="title"><?php echo ($title); ?></div>

    </header>
<div style="height:55px"></div>
<div class="task_box mt " style="margin-top: -0px;">

    <div class="con">

        <?php if(!empty($list)): ?><ul>

                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>

                        <a href="<?php echo U('submission_task_do',array('id'=>$vo['id']));?>" class="link">

                            <p class="clear">
                            
                                <span class="t"><?php echo ($vo["title"]); ?></span>
                             
                                <span class="zhuangtai">进行中</span>
                            </p>
                            
                            <div class="djsbox clear">
                                <span class="djsspan">任务倒计时：</span>
                                <div class="container timeBar ys3" data="<?php echo ($vo["cha_time"]); ?>" ></div>
                            </div>

                            </a>
                            <?php if($vo['status'] == 0): ?><span class="lq chakan" data-id="<?php echo ($vo["id"]); ?>">放弃任务</span><?php endif; ?>

                            <?php if($vo['status'] == -1): ?><span class="lq">审核失败</span><?php endif; ?>

                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>

        <?php else: ?>

            <div class="none">

                <div class="none_box">

                    <img src="/tpl/Public/images/none.png" alt="">

                    <span>您并没有待完成的任务</span>

                </div>

            </div><?php endif; ?>

    </div>

</div>

 <div class="bg" data-id="">
     <div class="box">
         <div class="xxkkuang">
             <h2>提示</h2>
             <p>是否放弃该任务？</p>
         </div>
         <div class="anniu">
             <button class="queding">确定</button>
             <button class="quxiao">取消</button>
         </div>
     </div>
 </div>
<script type="text/javascript">
	$(function(){
		$(".timeBar").each(function () {
			$(this).countdownsync({
				dayTag: "",
				hourTag: "<label class='tt hh dib vam'>00</label><span>时</span>",
				minTag: "<label class='tt mm dib vam'>00</label><span>分</span>",
				secTag: "<label class='tt ss dib vam'>00</label><span>秒</span>",
				dayClass: ".dd",
				hourClass: ".hh",
				minClass: ".mm",
				secClass: ".ss",
				isDefault: false,
				showTemp:1

			}, function () {
				location.reload();
			});
		});
	});
	
</script>

<script>
   $(".chakan").click(function(){
       var id = $(this).attr('data-id');
       $('.bg').attr('data-id', id);
	   $(".bg").show();
   })

   $('.queding').click(function () {
       var id = $('.bg').attr('data-id');
       $.post("<?php echo U('abandon');?>", {id: id}, function (result) {
           if (result.status == 1) {
               window.location.reload();
           } else {
               layer.msg('操作失败');
           }
       });
       $(".bg").hide();
   })

   $('.quxiao').click(function () {
       $(".bg").hide();
   })
	
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