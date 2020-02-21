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
<style>
	.index_rwxq{width: 92%;
		margin-left: 4%;}
	.index_title{min-height: 30px}
	.index_tjrw{margin-top:10px;
		height:100%;}
	.index_rwxq img{
		width: 4rem;
		height:4rem;;}
	.index_wzns{
		width:55%;padding-top:5px}
	.index_title{
		display: -webkit-box;
		-webkit-box-orient: vertical;
		-webkit-line-clamp: 2;
		overflow: hidden;
	}
</style>
<div class="body_main task_box mt tline" style="margin-top: 0px;border: none;">
   <header class="top_header">
    <div class="left"><a href="<?php echo U('Task/index');?>" class="return"></a></div>
    <div class="title">会员大厅</div>
   </header>
    <div class="task_list task_index_rwlbfl" data-level="<?php echo ($level); ?>">
        <?php if(is_array($task_list)): $i = 0; $__LIST__ = $task_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Task/show',array('id'=>$vo['id']));?>">
        	  	<div class="index_rwxq" style="width: 92%;margin-left: 4%;">
        		<img src="<?php echo ($vo["ico"]); ?>"/>
        		
        		<div class="index_wzns">
        			<p class="index_title"><?php echo ($vo["title"]); ?></p>
        			<p class="index_ffl">
						<span><?php echo ($vo["name"]); ?></span>
						<span class="index_gjrw"><?php echo ($vo["level_name"]); ?></span>
					</p>
        			<p class="index_syrw">剩余数量：<span><?php echo ($vo['max_num'] - $vo['apply_num']); ?>/<?php echo ($vo['max_num']); ?></span></p>
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
<script>
    var nStart = 10;
    var isbool = true;

    $(window).scroll(function(){
        var scrollTop = $(this).scrollTop();
        var scrollHeight = $(document).height();
        var windowHeight = $(this).height();
        if(scrollTop + windowHeight >= scrollHeight && isbool == true){
            isbool = false;
            jiazai();
        }
    });

    function jiazai(){
        if(nStart >= 61) {
            layer.open({
                content: '没有更多的任务'
                ,skin: 'msg'
                ,time: 2
            });
            return false;
        }else{
            var _this = $(".task_index_rwlbfl");
            var taskname;
            var iconame;
            var levelname;
            layer.open({
                type: 2,
                content: '加载中...'
            });
            $.post("/index.php/Home/Task/lists_sub.html",{start: nStart,level:$('.task_index_rwlbfl').attr('data-level')},function(res){
                $.each(res['info'], function(i,item){
                    _this.append('<a href="/home/Task/show/id/'+item.id+'.html">\
<div class="index_rwxq" "><img src="'+item.ico+'"/>\
<div class="index_wzns">\
<p class="index_title">'+item.title+'</p>\
<p class="index_ffl"> <span>'+item.name+' </span> <span class="index_gjrw">'+item.level_name+'</span> </p>\
<p class="index_syrw">剩余数量：<span>'+item.leftnum+'</span>/'+item.max_num+'</p>\
</div>\
<p class="index_qqq">+'+item.price+'<span></span></p>\
</div>\
</a>');
                });
                isbool = true;
                layer.closeAll();
            });
            nStart += 10;
        }
    };
</script>

<style type="text/css">
	.footer li{
		width: 25%;
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
        <li <?php if(CONTROLLER_NAME == 'Task'): ?>class="active"<?php endif; ?> >
            <a href="<?php echo U('Task/index');?>">
                <span><i class="icon_task" style="width: 20px;height: 20px;"></i></span>
              <p>VIP</p>
            </a>
        </li>



        <li <?php if(CONTROLLER_NAME == 'Member' and ACTION_NAME == 'notice'): ?>class="active"<?php endif; ?> >
        <a href="<?php echo U('Home/Page/show/id/6');?>">
            <span><i class="icon_xiaoxi" style="width: 20px;height: 20px;"></i></span>
            <p>加盟 </p>
            <span class="divright <?php echo ($_SESSION['weidu_xiaoxi'] ? 'show':'hide'); ?>"><?php echo ($_SESSION['weidu_xiaoxi']); ?></span>
        </a>
        </li>



        <!-- <li <?php if(CONTROLLER_NAME == 'Task2'): ?>class="active"<?php endif; ?> >
        <div class="fabu">
            <a href="<?php echo U('Task/handle');?>" style="font-size: 25px">+</a>
        </div>

        </li> -->
		<!-- <li <?php if(CONTROLLER_NAME == 'Member' and ACTION_NAME == 'notice'): ?>class="active"<?php endif; ?> >
           <a href="<?php echo U('Member/notice');?>">
                <span><i class="icon_xiaoxi" style="width: 20px;height: 20px;"></i></span>
             <p>消息 </p>
               <span class="divright <?php echo ($_SESSION['weidu_xiaoxi'] ? 'show':'hide'); ?>"><?php echo ($_SESSION['weidu_xiaoxi']); ?></span>
            </a>
        </li> -->
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