<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>上传图片</title>
<!--<link rel="stylesheet" type="text/css" href="/tpl/Public/js/swfupload/style.css?0517">-->
<script src="/tpl/Public/js/jquery.min-1.8.js"></script>
<script>var P="http://<?php echo $_SERVER['HTTP_HOST'];?>";</script>

  <link rel="stylesheet" type="text/css" href="/tpl/Public/js/fex/webuploader.css">
  <link rel="stylesheet" type="text/css" href="/tpl/Public/js/fex/style.css">
  <script type="text/javascript" src="/tpl/Public/js/fex/webuploader.js"></script>
  <script type="text/javascript" src="/tpl/Public/js/fex/upload.js"></script>
  <script type="text/javascript" src="/tpl/Public/js/layer_mobile2/layer.js"></script>

</head>


<body>

<div id="wrapper">
  <div id="container">
    <!--头部，相册选择和格式选择-->

    <div id="uploader">
      <div class="queueList">
        <div id="dndArea" class="placeholder">
          <div id="filePicker"></div>
          <p>或将照片拖到这里，单次最多可选1张</p>
        </div>
      </div>
      <div class="statusBar" style="display:none;">
        <div class="progress">
          <span class="text">0%</span>
          <span class="percentage"></span>
        </div><div class="info"></div>
        <div class="btns">
          <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
        </div>
        <input type="hidden" id="returnValue" value="" />
        <input type="hidden" id="path" value="<?php echo $path; ?>" />
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
    // 实例化
    $(function () {

    })

</script><!--foot-->
<div class="clearfix"></div>
</body>
</html>