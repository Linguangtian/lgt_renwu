<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="description" content="" />
	<!--JQ-->
	<script type="text/javascript" src="/tpl/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/tpl/Public/js/jquery-form.js"></script>
	<script type="text/javascript" src="/tpl/Public/js/layer_mobile2/layer.js?<?php echo ($version); ?>"></script>
	<script type="text/javascript" src="/tpl/Public/js/swiper.min.js"></script>
	<script src="/tpl/Public/js/jquery.simplesidebar.js"></script>
	<script type="text/javascript" src="/tpl/Public/js/func.js"></script>
	<link rel="stylesheet" href="/tpl/Public/css/share.css?8" />
	<link rel="stylesheet" href="/tpl/Public/css/font.css?3" />
	<style>
		.index_xslb_a {background: url(/Public/statics/images/dp.png) 0 0 no-repeat;background-size: 100% 100%;}
		.index_xslb_b {background: url(/Public/statics/images/kp.png) 0 0 no-repeat;background-size: 100% 100%;}
		.index_xslb_c {background: url(/Public/statics/images/2.xhs.png) 0 0 no-repeat;background-size: 100% 100%;}
		.index_xslb_d {background: url(/Public/statics/images/2.hs.png) 0 0 no-repeat;background-size: 100% 100%;}
		.index_xslb_e {background: url(/Public/statics/images/2.tt.png) 0 0 no-repeat;background-size: 100% 100%;}
		.index_lb img {border-radius: 6px}
		.row .col {float: left;box-sizing: border-box;}
		.category .col {loat: left;width: 20% !important;;}
		.category .content img {width: 50px;}
		.category .content {text-align: center;}
		.category .content span {display: block;margin-top: 1px;margin-bottom: 5px;}
		/**/
		.chart-child .s8 span {font-size: 10px;}
		/*首页项目统计*/
		.home-chart h3 {font-size: 18px;}
		.chart-child h3 {color: #fff;}
		.chart-child .s8 span {font-size: 10px}
		.chart-child .s8 p {font-size: 12px;margin: 0}
		.chart-child .s4 img {width: 40px;height: 40px;margin-top: 9px;border-radius: 50%;}
		/*首页项目统计*/
		.index_tjrw {margin-top: 10px;height: 100%;}
		.index_rwxq img {width: 4rem; /* margin: 1rem 0.5rem; */height: 4rem;}
		.index_wzns {width: 55%;padding-top: 0.6rem}
		.index_title {display: -webkit-box;min-height: 33px;-webkit-box-orient: vertical;-webkit-line-clamp: 2;overflow: hidden;}

		.index_rw_zxmss p {width: 49%;height: 2rem;line-height: 2rem;display: inline-block;text-align: center;font-size: 10px;}
		.index_syyys span{ border-bottom:1px solid #00F; color:#00F}

	</style>
</head>

<body class="index_body">

	<!--标题内容-->
	<div class="index_bt">
		<p class="index_hyxx">Hi,欢迎来到任务行</p>
	</div>

	<!--头部余额内容-->
	<div class="index_ye">
		<p class="index_ztsy">账户余额</p>
		<p class="index_ztsy_dd">0.00 元</p>
		<!--<a class="index_tssy" href="<?php echo U('Member/vip');?>">提升收益</a>-->

		<div class="index_zhyehsy">
			<p class="index_syyys">
					平台用户总数<?php echo ($virual["total_member"]); ?>人
			</p>
			<p class="index_syyys">
					<!--平台提现总金额<?php echo ($virual["total_tixian"]); ?>元-->
					任务达标<?php echo ($virual["total_tixian"]); ?>单
		</div>
	</div>

	<div data-v-4444cd4b="" class="lamp flex js" style="margin: 0px; margin-top: 10px;margin-bottom: -10px;">
		<img style="margin:5px 20px;width:20px" data-v-4444cd4b="" src="https://o2o.mfapi.cn/addons/nxb_community//newui/images/notice.png" class="lamp-img">
		<div data-v-4444cd4b="" class="move-warp" style="margin-left: -0.5rem;">
			<div data-v-4444cd4b="" class="move move-start">
				<div data-v-4444cd4b="" class="move-item ell">
					<span data-v-4444cd4b="">【任务行】 用户</span>
					<span data-v-4444cd4b="" class="org">彭芳</span>
					<span data-v-4444cd4b="">完成悬赏提现成功</span>
					<span data-v-4444cd4b="" class="org">20.00元</span>
				</div>
				<div data-v-4444cd4b="" class="move-item ell">
					<span data-v-4444cd4b="">【任务行】 用户</span>
					<span data-v-4444cd4b="" class="org">李明</span>
					<span data-v-4444cd4b="">完成悬赏提现成功</span>
					<span data-v-4444cd4b="" class="org">20.00元</span>
				</div>
				<div data-v-4444cd4b="" class="move-item ell">
					<span data-v-4444cd4b="">【任务行】 用户</span>
					<span data-v-4444cd4b="" class="org">于文</span>
					<span data-v-4444cd4b="">完成悬赏提现成功</span>
					<span data-v-4444cd4b="" class="org">60.00元</span>
				</div>
				<div data-v-4444cd4b="" class="move-item ell">
					<span data-v-4444cd4b="">【任务行】 用户</span>
					<span data-v-4444cd4b="" class="org">刘燕</span>
					<span data-v-4444cd4b="">完成悬赏提现成功</span>
					<span data-v-4444cd4b="" class="org">50.00元</span>
				</div>
				<div data-v-4444cd4b="" class="move-item ell">
					<span data-v-4444cd4b="">【任务行】 用户</span>
					<span data-v-4444cd4b="" class="org">方涛</span>
					<span data-v-4444cd4b="">完成悬赏提现成功</span>
					<span data-v-4444cd4b="" class="org">30.00元</span>
				</div>
				<div data-v-4444cd4b="" class="move-item ell">
					<span data-v-4444cd4b="">【任务行】 用户</span>
					<span data-v-4444cd4b="" class="org">陈芳</span>
					<span data-v-4444cd4b="">完成悬赏提现成功</span>
					<span data-v-4444cd4b="" class="org">20.00元</span>
				</div>
				<div data-v-4444cd4b="" class="move-item ell">
					<span data-v-4444cd4b="">【任务行】 用户</span>
					<span data-v-4444cd4b="" class="org">陈清</span>
					<span data-v-4444cd4b="">完成悬赏提现成功</span>
					<span data-v-4444cd4b="" class="org">10.00元</span>
				</div>
				<div data-v-4444cd4b="" class="move-item ell">
					<span data-v-4444cd4b="">【任务行】 用户</span><span data-v-4444cd4b="" class="org">张怀秀</span>
					<span data-v-4444cd4b="">完成悬赏提现成功</span><span data-v-4444cd4b="" class="org">50.00元</span>
				</div>
				<div data-v-4444cd4b="" class="move-item ell">
					<span data-v-4444cd4b="">【任务行】 用户</span>
					<span data-v-4444cd4b="" class="org">罗群</span>
					<span data-v-4444cd4b="">完成悬赏提现成功</span><span data-v-4444cd4b="" class="org">200.00元</span>
				</div>
				<div data-v-4444cd4b="" class="move-item ell">
					<span data-v-4444cd4b="">【任务行】 用户</span>
					<span data-v-4444cd4b="" class="org">李晨</span><span data-v-4444cd4b="">完成悬赏提现成功</span>
					<span data-v-4444cd4b="" class="org">50.00元</span>
				</div>
				<!---->
			</div>
		</div>
	</div>


	<div id="body">

			<div class="index_xslb" style="width: 100%">
				<a href="<?php echo U('Home/Page/show/id/6');?>"    style="width: 46%"  class="index_xslb_c"></a>
			<!--	<a href="/tpl/Home/shouye/1.html"    style="width: 46%"  class="index_xslb_c"></a>-->
				<a href="<?php echo U('Public/share');?>"  style="width: 46%"  class="index_xslb_d"></a>
				<!--		<a href="<?php echo U('index/about');?>" class="index_xslb_d"></a>
		<a href="/Home/Member/sale.html" class="index_xslb_e"></a>-->
			</div>
			<!--成为会员-->

		<!--	<div class="index_cwhy">
				<a href="<?php echo U('Public/share');?>">
					<p class="index_cw_xrfl">邀请好友送现金</p>
				</a>
			</div>-->
			<!--
		<div style="padding: 3%">
			<div class="row category">
				<?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col s3 col-5x">
						<div class="content">
							<a href="<?php echo U('Index/serach',array('cid'=>$vo['id']));?>">
								<img src="<?php echo ($vo['ico']); ?>" alt="">
								<span><?php echo ($vo['name']); ?></span>
							</a>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<div style="clear: both"></div>
			</div>
		</div> -->

			<div class="index_xslb" style="display: none;">
				<a href="<?php echo U('Task/lists_lb',array('lb'=>2));?>" class="index_xslb_a"></a>
				<a href="<?php echo U('Task/lists_lb',array('lb'=>1));?>" class="index_xslb_b"></a>
				<a href="/tpl/Home/shouye/1.html" class="index_xslb_c"></a>
				<a href="/tpl/Home/shouye/2.html" class="index_xslb_d"></a>
				<a href="/tpl/Home/shouye/3.html" class="index_xslb_e"></a>
			</div>


			<div class="index_rwlb task_index_rwlbfl" style="margin-top: -8px;">
				<p class="index_tjrw">推荐任务
					<span><a href="<?php echo U('Index/serach');?>">更多&gt;</a></span>
				</p>
				<?php if(is_array($task_list)): $i = 0; $__LIST__ = $task_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Task/show',array('id'=>$vo['id']));?>">
						<div style="box-shadow:0px 1px 10px #ccc ;border-radius: 6px;">
							<div class="index_rwxq" style="background: #FFFFF0;">
								<img src="/tpl/Public/images/ks.png?v=2"/>

								<div class="index_wzns" style="width: 42%;margin-left: 0.5rem;">
									<p class="index_title" ><?php echo ($vo["title"]); ?></p>
									<!-- <p class="index_ffl"> -->
									<!-- <span><?php echo ($vo["name"]); ?></span> -->
									<!-- <span class="index_gjrw"><?php echo ($vo["levelname"]); ?></span>
									</p> -->
									<p class="index_syrw" style="margin-top: 0.5rem;font-size: 13px;">剩余数量：<span><?php echo ($vo["leftnum"]); ?></span></p>
								</div>

								<p class="index_qqq" style="font-size: 15px;">
									奖励<text style="color: red;font-size: 20px;"><?php echo ($vo["jinbin"]); ?></text>圈币
									<!-- <span></span> -->
								</p>
							</div>
							<!-- <div class="index_rw_zxmss">
								<p>【任务行】 用户等级：<span><?php echo ($vo["levelname"]); ?></span> </p>
								<p>任务名额：<?php echo ($vo["leftnum"]); ?></p>
							</div> -->
						</div>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<!-- 底部联系部分 开始 -->
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
		</div>


</body>

</html>

<script>
	//回车直接搜索
	$('#serachInput').keydown(function (e) {
		if (e.keyCode == 13) {
			if ($('#serachInput').val() != "") {
				var indexReload = layer.open({ type: 2 });
				window.location.href = '/Home/Index/serach.html' + "?key=" + $('#serachInput').val();
			}
		}
	});

	// 获取弹窗
	var modal = document.getElementById('myModal');


	$(document).ready(function () {
		if (getCookie('notice') == '23') {
			modal.style.display = "none";
		}
	});

	var swiper1 = new Swiper('.swiper-banner', {
		pagination: {
			el: '.swiper-pagination',
		},
		autoplay: true
	});

	//    var swiper2 = new Swiper('.swiper-roll', {
	//        direction: 'vertical',
	//        pagination: {
	//            clickable: true,
	//        },
	//        autoplay: true,
	//        loop:true
	//    });




	// 获取 <span> 元素，用于关闭弹窗 that closes the modal
	var span = document.getElementsByClassName("close-img")[0];


	// 点击 <span> (x), 关闭弹窗
	span.onclick = function () {
		modal.style.display = "none";
		setCookie('notice', 23);
	}

	// 在【任务行】 用户点击其他地方时，关闭弹窗
	window.onclick = function (event) {
		if (event.target == modal) {
			modal.style.display = "none";
			setCookie('notice', 23);
		}
	}

	function setCookie(name, value) {
		var mins = 60;
		var exp = new Date();
		exp.setTime(exp.getTime() + mins * 60 * 1000);
		document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
	}

	function getCookie(name) {
		var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
		if (arr = document.cookie.match(reg))
			return unescape(arr[2]);
		else
			return null;
	}


	var nStart = 10;
	var isbool = true;

	$(window).scroll(function () {
		var scrollTop = $(this).scrollTop();
		var scrollHeight = $(document).height();
		var windowHeight = $(this).height();
		if (scrollTop + windowHeight >= scrollHeight && isbool == true) {
			isbool = false;
			jiazai();
		}
	});

	function jiazai() {
		if (nStart >= 61) {
			layer.open({
				content: '没有更多的任务'
				, skin: 'msg'
				, time: 2
			});
			return false;
		} else {
			var _this = $(".task_index_rwlbfl");
			var taskname;
			var iconame;
			var levelname;
			// layer.open({
			// 	type: 2,
			// 	content: '加载中...'
			// });
			$.post("/index.php/Home/Index/index.html", { start: nStart }, function (res) {
				$.each(res['info'], function (i, item) {
					_this.append('<a href="/home/Task/show/id/' + item.id + '.html">\
<div class="index_rwxq" ><img src="'+ item.ico + '"/>\
<div class="index_wzns">\
<p class="index_title">'+ item.title + '</p>\
<p class="index_ffl"> <span>'+ item.name + ' </span> <span class="index_gjrw">' + item.levelname + '</span> </p>\
<p class="index_syrw">剩余数量：<span>'+ item.leftnum + '</span>/' + item.max_num + '</p>\
</div>\
<p class="index_qqq">+'+ item.price + '<span></span></p>\
</div>\
</a>');
				});
				isbool = true;
				layer.closeAll();
			});
			nStart += 10;
		}
	};





//    $(document).ready(function () {
//        //幻灯片
//        var swiper = new Swiper('.swiper-container', {
//            pagination: '.swiper-pagination',
//            nextButton: '.swiper-button-next',
//            prevButton: '.swiper-button-prev',
//            paginationClickable: true,
//            spaceBetween: 30,
//            centeredSlides: true,
//            autoplay: 4000,
//            autoplayDisableOnInteraction: false
//        });
//    });
</script>