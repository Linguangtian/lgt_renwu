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
<script type="text/javascript" src="/tpl/Public/js/clipboard.min.js"></script>
<link rel="stylesheet" href="/tpl/Public/css/cdn.css">
<style>
    body {
        font: 14px Helvetica Neue, Helvetica, PingFang SC, Tahoma, Arial, sans-serif;
    }

    .show_rwbbzz img {
        width: 100%;
    }

    .show_lllqqqe {
        height: auto;
    }

    .show_dypl {
        padding: 0;
        margin-top: 0;
        font-size: 13px;
        height: auto;
        line-height: normal;
        width: 71%
    }

    .show_tips span {
        width: 31%;
        display: inline-block;
        font-size: 11px;
        color: #a7a4a4;
        text-align: left;
    }

    .show_index_sss p {
        line-height: normal;
        height: auto;
        font-size: 12px;
        ;
        ;
    }

    .show_djfzz {
        border: 1px #ffa71c solid;
        color: #f03851;
        background: #fff;
        line-height: 25px;
        height: 30px;
        width: auto;
        padding: 0 10px;
        margin-top: 15px;
    }

    .show_sssss img {
        width: 15px;
        height: 15px;
        ;
        ;
    }

    .show_sssss {
        font-size: 12px;
        height: 2rem;
        margin-top: -10px;
        width: 31%;
        line-height: 2.2rem;
    }

    .show_zpllj {
        height: 2.5rem;
        line-height: 2.5rem;
    }

    .task_need label {
        margin-left: 0;
        float: left;
        border: 1px solid #9e9797;
        padding: 4px 8px;
        font-size: 10px !important;
        -webkit-transform: scale(0.8);
    }

    .task_need label.select {
        border: 1px solid #f92e4a;
        color: #f92e4a;
    }

    .show_srwssss {
        margin-bottom: 45px;
    }

    .buzhou>p>span.active {
        color:#f03851;
    }

    .step_desc {
        font-size: 15px;
        font-weight: bold;
    }

    .step_img {
        padding: 15px 20px;
    }

    .bala-btn {
        margin: 0
    }
</style>

<body>
    <header class="top_header">
        <div class="left"><a href="javascript:" data-url="/index.php/Home/Page/show/id/6.htm" class="return go-back"></a></div>
        <div class="title">任务详情</div>
        <div class="right">
            <a href="<?php echo U('Task/showw', ['id' => 1]);?>">新手指南</a></div>
    </header>

    <div class="body_main" style="margin-top: 45px">
        <!-- 头部部分 开始 -->

        <div class="show_index_top">
            <div class="se-kl clear" <?php if($is_ling == 0): ?>style="display: none;"
                <?php else: ?> style="display: block;"<?php endif; ?> >
                <div class="se-info">距离结束还剩</div>
                <div class="se-count">
                    <div class="se-day"></div>
                    <div class="se-hour"><span class="se-txt">00</span></div>
                    <div class="maohao">:</div>
                    <div class="se-min"><span class="se-txt">00</span></div>
                    <div class="maohao">:</div>
                    <div class="se-sec"><span class="se-txt">00</span></div>
                </div>
            </div>

            <!--提醒-->
            <p class="shop_index_ts" style="text-decoration:none;text-align: left;height:2.0rem;line-height: 2.0rem;">
                <img src="/tpl/Public/images/safe.png" width="20" style="vertical-align: middle;margin-left:3%">
                <span style="color: #39c773;font-size: 10px;font-weight: initial">广告商任务佣金已支付到金朋友圈平台,赚钱有保障! </span>
            </p>

            <div class="show_index_f" style="padding: 10px 0;height: auto;">
                <!--<img src="<?php echo ($sys_config["web_logo"]); ?>"/>-->
                <p class="show_dypl" style="padding-left:3%;"><?php echo ($show["title"]); ?></p>
                <p class="show_wqq show_dypl" style="width: 20%;padding-right: 3%">+<?php echo ($show["jinbin"]); ?>圈币</p>
                <div style="clear: both;"></div>
                <div style="padding: 3% 3% 0 3%;" class="show_tips">
                    <span><?php echo ($show["apply_num"]); ?>人已赚到</span>
                    <span>剩余<?php echo ($show['max_num'] - $show['apply_num']); ?>个名额</span>
                    <!-- <span>12小时内审核</span> -->
                </div>
            </div>

            <div class="show_index_sss" style="height: auto;">
                <p style="padding:3%"> <span>任务描述：</span> <?php echo ($show["info"]); ?></p>
            </div>
            <p style="width: 100%;height: 10px;background: #ededed;margin-top: 10px;"></p>
            <!-- <div class="show_index_sss" style="height: 60px;line-height:60px;border-bottom: 1px solid #ccc;">
                <img src="<?php echo ($sys_config["web_logo"]); ?>" width="60" style="float: left;margin-left: 3%;" />
                <span
                    style="display: inline-block;color: #39c773;font-size: 15px;margin-top: -20px;font-weight: initial"><?php echo ($show["username"]); ?></span>
                <button type="button" class="show_djfzz">关注</button>
                <button type="button" class="show_djfzz">店铺</button>
            </div> -->


            <div class="show_renws" style="height: auto;">
                <!-- <p class="show_shbz">
                    <span>审核标准</span>
                </p>
                <p class="show_sssss" style="padding-left: 3%">
                    <img src="/tpl/Public/images/HTB1zHXJcLWG3KVjSZPc762kbXXav.png" />
                    有头像
                </p>

                <p class="show_sssss">
                    <img src="/tpl/Public/images/HTB1zHXJcLWG3KVjSZPc762kbXXav.png" />
                    有作品
                </p>

                <p class="show_sssss">
                    <img src="/tpl/Public/images/HTB1zHXJcLWG3KVjSZPc762kbXXav.png" />
                    案例标准
                </p>
                <div style="clear: both;padding-top:5px"></div>
                <div class="task_need" style="padding-left:3%">
                    <label class="<?php echo ($show['is_shouji']?'select':''); ?>">手机认证</label>
                    <label class="<?php echo ($show['is_weixin']?'select':''); ?>">微信认证</label>
                    <label class="<?php echo ($show['is_shiming']?'select':''); ?>">实名认证</label>
                    <label class="<?php echo ($show['is_idcard']?'select':''); ?>">身份证认</label>
                </div>
-->
                <div class="copy_btn">
                    <div class="t3" style="display:n;color:#fff;height: 20px;background: ;overflow: hidden;">
                        <?php echo ($show["taskuser"]); ?><input id="foo" type="text" value="<?php echo ($show["taskuser"]); ?>"
                            style="height: 1px;width: 1px;position: absolute;top: 0;left: 0;"></div>
                    <p class="show_zpllj" style="overflow: hidden;" id="text"><?php echo ($show["taskuser"]); ?> <input id="foo"
                            type="text" value="<?php echo ($show["taskuser"]); ?>"
                            style="height: 1px;width: 1px;position: absolute;top: 0;left: 0;">
                </div> 
                </p>
                <button type="button" class="show_djfzz copy" data-clipboard-action="copy" data-clipboard-target="#foo"
                    style="background:#fff;width:30%;margin-left: 4.5rem;">直接打开</button>
                <button type="button" class="show_djfzz copy" data-clipboard-action="copy" data-clipboard-target="#foo"
                    style="background:#fff;width:30%">点击复制</button>
                <?php if($member_client_info['platform'] == 'app'): endif; ?>
            </div>
        </div>
        <div style="clear: both;"></div>

        <p style="width: 100%;height: 10px;background: #ededed;margin-top: 10px;"></p>
        <?php if($btn_status == 1): ?><a href="#" class="show_lllqqqe">
                <button type="button" class="bala-btn get_task"
                    style="width:100%;margin:0;background:#f03851; ;border: none;"><?php echo ($status_text); ?></button>
            </a>
            <?php else: ?>
            <a href="<?php echo ($redirect_url); ?>" class="show_lllqqqe">
                <button type="button" class="bala-btn"
                    style="width:100%;;background: #fff;background: #f03851;;border: none;"><?php echo ($status_text); ?></button>
            </a><?php endif; ?>

        <div class="show_srwssss buzhou">
            <p class="show_rwbbzz">
                <span class="buzhou2 active" style="display: inline-block;width: 45%;text-align: center">任务步骤</span>
                <span class="tushi2" style="display: inline-block;width: 45%;text-align: center">审核样例</span>
            </p>
            <!--<?php echo ($show["content"]); ?>-->
            <div class="showContent show_buzhou2" style="display: block;padding:10px">
                <?php
 if(isset($show['step_info'])){ $imgs = unserialize($show['step_info']); if ( isset($imgs['step_desc']) && count($imgs['step_desc']) > count($imgs['step_img']) ) { $data = $imgs['step_desc']; $data2 = $imgs['step_img']; }else{ $data = $imgs['step_img']; $data2 = $imgs['step_desc']; } foreach ($data as $key=>$img ){ $key2 = $key+1; $stepId = 'step'.$key2; $text = isset($data2[$key]) ? $data2[$key] :''; echo "<span class='step_desc'>第".$key2."步：".$text.'</span>'; echo "<div class='step_img'><img style='width: 100%' src=$img  /></div>"; } } ?>
            </div>

            <div class="showContent show_tushi2" style="display: none;padding:10px">
                <?php
 if(isset($show['tushi'])){ $imgs = unserialize($show['tushi']); foreach ($imgs as $key=>$img ){ if (!$img) continue; $key+=1; $tushiId = 'tushi'. $key; echo "
                <div class='step_img'><img src=$img onclick='addImgs(\"$tushiId\")'  width='100%'></div>
                "; } } ?>
            </div>
        </div>



        <!-- 底部联系部分 开始 -->

</body>

</html>
<script>
    $(function () {
        $('.buzhou span').click(function () {
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            if ($(this).hasClass('buzhou2')) {
                $('.buzhou').attr('data-tab', 'email');
                $('.show_buzhou2').show();
                $('.show_tushi2').hide();
            } else {
                $('.buzhou').attr('data-tab', 'phone');
                $('.show_buzhou2').hide();
                $('.show_tushi2').show();
            }
        });
    })
</script>
<script type="text/javascript">
    $(document).ready(function () {
        var oDate = new Date();
        var nowTime = oDate.getTime(); //现在的毫秒数
        oDate.setDate(oDate.getDate() + 1); // 设定截止时间为第二天
        var targetDate = new Date(oDate.toLocaleDateString());
        run(targetDate);
    });

    function run(enddate) {
        getDate(enddate);
        setInterval("getDate('" + enddate + "')", 500);
    }

    function getDate(enddate) {
        var oDate = new Date(); //获取日期对象

        var nowTime = oDate.getTime(); //现在的毫秒数
        var enddate = new Date(enddate);
        // var targetTime = enddate.getTime(); // 截止时间的毫秒数
        var targetTime = "<?php echo ($show["end_time"]); ?>" * 1000; // 截止时间的毫秒数
        var second = Math.floor((targetTime - nowTime) / 1000); //截止时间距离现在的秒数

        var day = Math.floor(second / 24 * 60 * 60); //整数部分代表的是天；一天有24*60*60=86400秒 ；
        // second = second % 86400; //余数代表剩下的秒数；
        var hour = Math.floor(second / 3600); //整数部分代表小时；
        second %= 3600; //余数代表 剩下的秒数；
        var minute = Math.floor(second / 60);
        second %= 60;

        // var spanD = $('.se-txt')[0];
        var spanH = $('.se-txt')[0];
        var spanM = $('.se-txt')[1];
        var spanS = $('.se-txt')[2];

        // spanD.innerHTML = tow(day);
        spanH.innerHTML = tow(hour);
        spanM.innerHTML = tow(minute);
        spanS.innerHTML = tow(second);
    }

    function tow(n) {
        return n >= 0 && n < 10 ? '0' + n : '' + n;
    }
</script>
<script>
    //复制文案
    var clipboard = new ClipboardJS('.copy');
    clipboard.on('success', function (e) {
        sp_alert('复制成功');
    });

    clipboard.on('error', function (e) {
        sp_alert('复制信息出错，请手动复制');
    });

    //领取任务
    $('.get_task').click(function () {
        var task_id = "<?php echo ($show["id"]); ?>";
        var url = "<?php echo U('get_task');?>";
        $.post(url, { id: task_id }, function (data) {
            if (data.status == 1) {
                sp_alert(data.info);
                $('.bala-btn').css('background-color', '#FA9240').html('任务已领取');
                $('.se-kl').show();
            } else {
                sp_alert(data.info);
            }
        }, 'json')
    })

    function save_img() {
        var http_host = "http://<?php echo $_SERVER['HTTP_HOST']?>";
        var num = 0;
        $(".content img").each(function () {
            num = num + 1;
            var img_path = $(this).attr("src");
            if (img_path.indexOf('http') == -1) {
                img_path = http_host + img_path;
            }
            lbuilder.Native.saveImage(img_path, function (message) {

            }, function (err) {
                sp_alert("save fail" + err);
            })
        });

        sp_alert('图片已经保存到相册，数量（' + num + '张）');

        //保存图片到相册
        /*lbuilder.Native.saveImage(img, function(message){
            sp_alert('二维码已经保存到相册');
        }, function(err){
            sp_alert("save fail"+err);
        });*/
    }

    function test() {
        //保存图片到相册
        /*lbuilder.Native.saveImage("http://www.lbuilder.com/index/assets/images/logo.png", function(message){
            alert("save success");
        }, function(err){
            alert("save fail"+err);
        });*/


        Wechat.share({
            message: {
                title: "Hi, here",
                description: "That is description.",
                thumb: "http://www.svip56.cn/tpl/Public/images/banner.png",
                mediaTagName: "TEST-TAG-002",
                messageExt: "这是第三方带的测试字段ddd",
                messageAction: "<action>dotalist</action>",
                media: {
                    type: Wechat.Type.WEBPAGE,
                    webpageUrl: "http://bb.szwangyesheji.com/"
                }
            },
            scene: Wechat.Scene.TIMELINE   // share to Timeline
        }, function (data) {
            alert("Success" + JSON.stringify(data));
        }, function (reason) {
            alert("Failed: " + JSON.stringify(reason));
        });

        /*Wechat.share({
            message: {
                title: "Hi, there",
                description: "This is description.",
                thumb: "http://bb.szwangyesheji.com/tpl/Public/images/banner.png",
                mediaTagName: "TEST-TAG-001",
                messageExt: "这是第三方带的测试字段",
                messageAction: "<action>dotalist</action>",
                media:{
                    type:  Wechat.Type.IMAGE,
                    image: "http://bb.szwangyesheji.com/tpl/Public/images/banner.png"
                }
            },
            scene: Wechat.Scene.TIMELINE   // share to Timeline
        }, function (data) {
            alert("Success"+JSON.stringify(data));
        }, function (reason) {
            alert("Failed: " + JSON.stringify(reason));
        });*/

    }
</script>