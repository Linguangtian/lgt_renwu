<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title><?php echo sp_cfg('website');?></title>
        <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/Public/statics/bootstrap-3.3.5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/Public/statics/bootstrap-3.3.5/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="/Public/statics/font-awesome-4.4.0/css/font-awesome.min.css" />

    <!--[if IE 7]>
        <link rel="stylesheet" href="/tpl/Admin/Public/aceadmin/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="/tpl/Admin/Public/aceadmin/css/ace.min.css" />
    <link rel="stylesheet" href="/tpl/Admin/Public/aceadmin/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/tpl/Admin/Public/aceadmin/css/ace-skins.min.css" />
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="/tpl/Admin/Public/aceadmin/css/ace-ie.min.css" />
    <![endif]-->
    <script src="/tpl/Admin/Public/aceadmin/js/ace-extra.min.js"></script>
    <!--[if lt IE 9]>
        <script src="/tpl/Admin/Public/aceadmin/js/html5shiv.js"></script>
        <script src="/tpl/Admin/Public/aceadmin/js/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/tpl/Public/css/base.css" />
    <link rel="stylesheet" href="/tpl/Public/js/artDialog/skins/default.css" />
        <link rel="stylesheet" href="/Public/statics/iCheck-1.0.2/skins/all.css">

    <?php
 if($info['id'] > 0) { $handle_type = "编辑"; } else { $handle_type = "添加"; } ?>

    <link rel="stylesheet" href="/Public/statics/webuploader-0.1.5/xb-webuploader.css">
<script src="/Public/statics/js/jquery-1.10.2.min.js"></script>
    <script>
    var BASE_URL = '/Public/statics/webuploader-0.1.5';
</script>
<script src="//cdn.staticfile.org/webuploader/0.1.5/webuploader.min.js"></script>
</head>
<body>

<!-- 导航栏开始 -->
<div class="bjy-admin-nav">
    <i class="fa fa-home"></i> 首页
    &gt;
    内容列表
    &gt;
    <?php echo ($handle_type); ?>
</div>
<!-- 导航栏结束 -->
<ul id="myTab" class="nav nav-tabs">
   <li>
         <a href="<?php echo U('index');?>">内容列表</a>
   </li>
   <li class="active">
        <a href="javascript:"><?php echo ($handle_type); ?>内容</a>
    </li>
</ul>
<form class="form-inline" method="post">
    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
    <table class="table table-striped table-bordered table-hover table-condensed">
        <!--<tr>
            <th>所属分类</th>
            <td>
                <select name="cid" class="input col-xs-12 col-sm-5">
                    <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" <?php if($info['cid'] == $key): ?>selected<?php endif; ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </td>
        </tr>-->
        <tr>
            <th>内容标题</th>
            <td>
                <input class="col-xs-12 col-sm-5" type="text" name="title" value="<?php echo ($info["title"]); ?>">
            </td>
        </tr>
        <tr>
            <th>详细介绍</th>
            <td>
                <textarea id="page_content" class="col-xs-10 col-sm-10" style="height: 250px;" name="content"><?php echo ($info["content"]); ?></textarea>
            </td>
        </tr>
        <tr>
            <th>排序</th>
            <td>
                <input class="col-xs-12 col-sm-5" type="text" name="sort" value="<?php echo ($info["sort"]); ?>" style="width: 80px;">
            </td>
        </tr>
        <tr>
            <th>推送到公告</th>
            <td>
                <label style="display: block"><input class="" style="height: 12px;" type="checkbox" name="recommend" <?php if($info['recommend'] == 1): ?>checked<?php endif; ?> value="1">公告</label>
            </td>
        </tr>

        <tr>
            <th>推送到首页弹窗</th>
            <td>
                <label style="display: block"><input class="" style="height: 12px;" type="checkbox" name="recommend2" <?php if($info['recommend2'] == 1): ?>checked<?php endif; ?> value="1">
                    首页弹窗

                    <span style="color: #8a8e8e;font-size: 12px">首页弹窗只允许有一条,多条随机弹出</span>
                </label>

            </td>
        </tr>
        <!--<tr>
            <th>更新时间</th>
            <td>
                <input class="col-xs-12 col-sm-5" type="text" name="update_time" value="<?php echo ($info["time"]); ?>">
            </td>
        </tr>-->
        <tr>
            <th></th>
            <td>
                <input class="btn btn-success" type="submit" value="提交">
            </td>
        </tr>
    </table>
</form>

<!-- 引入bootstrjs部分开始 -->
<script src="/Public/statics/js/jquery-1.10.2.min.js"></script>
<script src="/Public/statics/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="/tpl/Public/js/artDialog/artDialog.js"></script>
<script src="/tpl/Public/js/artDialog/iframeTools.js"></script>
<script src="/tpl/Public/js/bootbox.js"></script>
<script src="/tpl/Public/js/base.js"></script>

<link rel="stylesheet" href="/tpl/Public/js/datepicker/css/bootstrap-datepicker3.min.css" />
<link rel="stylesheet" href="/tpl/Public/js/datepicker/css/bootstrap-datetimepicker.min.css" />
<script src="/tpl/Public/js/datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/tpl/Public/js/datepicker/js/bootstrap-timepicker.min.js"></script>

<script src="/Public/statics/layer/layer.js"></script>
<script src="/Public/statics/layer/extend/layer.ext.js"></script>

<script src="/Public/statics/iCheck-1.0.2/icheck.min.js"></script>
<script>
$(document).ready(function(){
    $('.xb-icheck').iCheck({
        checkboxClass: "icheckbox_minimal-blue",
        radioClass: "iradio_minimal-blue",
        increaseArea: "20%"
    });
});
</script>

<script type="text/javascript" src="/Public/kindeditor/kindeditor.js"></script><script type="text/javascript" src="/Public/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript">
    $(function(){
        //引入编辑器
        var  content;
        KindEditor.ready(function(K) {
            content = K.create('#page_content');
        });
    });
</script>
</body>
</html>