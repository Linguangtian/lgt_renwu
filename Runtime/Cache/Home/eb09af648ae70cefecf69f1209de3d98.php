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
 <link rel="stylesheet" href="/tpl/Public/css/share.css?3"/>
<body class="gray_bg">
<!-- 头部部分 开始 -->

<div class="body_main task_box mt tline" style="margin-top: 0px;border: none;">
  <header class="top_header">
    <div class="left"><a href="<?php echo U('Index/index');?>" class="return"></a></div>
    <!-- <div class="title">任务大厅</div> -->
</header>
   <div class="category-header flex"></div>
  
    <div class="task_list">
		啊哈哈
        <?php if(is_array($task_list["type_0"])): $i = 0; $__LIST__ = $task_list["type_0"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Task/show',array('id'=>$vo['id']));?>">
        	  	<div class="index_rwxq" style="width: 92%;margin-left: 4%;">
        		<img src="<?php echo ($sys_config["web_logo"]); ?>"/>
        		
        		<div class="index_wzns">
        			<p class="index_title"><?php echo ($vo["title"]); ?></p>
        			<p class="index_ffl"> <span><?php if($vo["tasklb"] == '3'): ?>快手关注<?php else: ?>抖音关注<?php endif; ?></span> <span class="index_gjrw">优质任务</span> </p>
        			<p class="index_syrw">剩余数量：<span><?php echo ($vo["max_num"]); ?></span></p>
        		</div>
        		
        		<p class="index_qqq">
        			<?php echo ($vo["price"]); ?>元
        			<span></span>
        		</p>
        		
        	</div>
        	</a><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>

   

    
</div>

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
                    <img id="notice"  src="/tpl/Public/images/page_a.png"/>
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
        var intx=1;
        function release_notice(){
            if(intx == 1)   {
                intx = 2;
                path=  '/tpl/Public/images/page_b.png';
            }else{
                intx = 1;
                path=  '/tpl/Public/images/page_a.png';
            }
            $("#notice").attr('src',path);
        }


        setInterval(release_notice,800);
    })




</script>
</body>
</html>