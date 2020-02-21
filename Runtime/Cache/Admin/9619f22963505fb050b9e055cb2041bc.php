<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>上传图片</title>
<link rel="stylesheet" type="text/css" href="/tpl/Public/js/swfupload/style.css?0517">
<script src="/tpl/Public/js/jquery.min-1.8.js"></script>
<script>var P="http://<?php echo $_SERVER['HTTP_HOST'];?>";</script>
</head>

<body>


  <script type="text/javascript" src="/tpl/Public/js/swfupload/swfupload.js"></script>
  <script type="text/javascript" src="/tpl/Public/js/swfupload/plugins/swfupload.queue.js"></script>
  <script type="text/javascript" src="/tpl/Public/js/swfupload/fileprogress.js"></script>
  <script type="text/javascript" src="/tpl/Public/js/swfupload/handlers.js"></script>


<!--container-->

<div id="container"> 
  <!-- container left-->
  <div class="bd-create-case">
    <div class="bd-work-wrap">
                <form id="form1" action="#" method="post" enctype="multipart/form-data">
            <div class="case-que-hd"> <span class="filename">图片文件名</span> <span class="filesize">大小</span> <span class="filedel">删除?</span> </div>
            <!-- 上传队列-->
            <div class="fieldset flash" id="fsUploadProgress"></div>
            <div class="case-que-foot" id="que-foot"> <span class="filename">共<i id="totalnum"></i>张图片 <a href="javascript:;" id="continue-add">继续添加案例图片</a></span> <span class="filedel">文件大小：<i id="totalsize"></i></span> </div>
            <div id="upload-btn"><span id="spanButtonPlaceHolder"></span></div>
        </form>
        <p id="upload-tips"><!--提示：每次最多可以批量上传二十张照片，按着 "ctrl" 键可以一次选择多张照片--></p>
        <div id="upload-start" style="display:none">
          <button id="upload" class="btn">开始上传</button>
          &nbsp; <a href="#">取消上传</a> </div>
             </div>
               
             <div id="thumbnails"></div>
             <input type="hidden" id="returnValue" value="" />
  </div>
</div>
</div>
<script type="text/javascript">
	var swfu, WID = "13";
	window.onload = function() {
		var conf = {
			flash_url : P + "/tpl/Public/js/swfupload/swfupload.swf",
			upload_url : P + "/index.php/Admin/Public/upload",
			post_params: {
				"path": "<?php echo $path; ?>",
				"thumb_width": "<?php echo $thumb_width; ?>",
				"thumb_height": "<?php echo $thumb_height; ?>",
			},
			
			file_size_limit : "2000 MB",
			file_upload_limit:'20',
			file_types : "<?php echo ($file_types); ?>",
			file_types_description : "Web Image Files",
			file_upload_limit : 100,
			file_queue_limit : 0,
			custom_settings : {
				progressTarget : "fsUploadProgress",
				cancelButtonId : "btnCancel"
			},
			debug : false,

			// Button settings
			button_image_url : P + "/tpl/Public/js/swfupload/images/upload-btns.png",
			button_width : "97",
			button_height : "29",
			button_placeholder_id : "spanButtonPlaceHolder",
			button_action : SWFUpload.BUTTON_ACTION.SELECT_FILES,

			// The event handler functions are defined in handlers.js
			file_queued_handler : fileQueued,
			file_queue_error_handler : fileQueueError,
			file_dialog_complete_handler : fileDialogComplete,
			upload_start_handler : uploadStart,
			upload_progress_handler : uploadProgress,
			upload_error_handler : uploadError,
			upload_success_handler : uploadSuccess,
			upload_complete_handler : uploadComplete,
			queue_complete_handler : queueComplete	// Queue plugin event
		};

		swfu = new SWFUpload(conf);
	};
	
	//上传
	$('#upload').click(function(){
		swfu.startUpload();
	})
	
	//继续添加
	$('#continue-add').click(function(){
		$('#que-foot').hide();
		$('#upload-btn').css({'opacity':1,'height':30});
		$('#upload-btn object').css({'height':29});
		
	})
	
	$('#thumbnails img').live('click',function(){
		$(this).addClass('sel').siblings().removeClass("sel");
		$('#returnValue').val($(this).attr('src'));
	})
</script><!--foot-->
<div class="clearfix"></div>
</body>
</html>