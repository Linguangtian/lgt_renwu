<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>任务中心</title>
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
		<link rel="stylesheet" href="/tpl/Public/css/task.css" />
	</head>
	<body>
		
		<div class="found-home">
			<ul>
				<li>
					<img src="/tpl/Public/images/3b0a8f8cb9ac6ee20722691ea5077656_wDEkwb5U4ObbAAAAABJRU5ErkJggg==.png"/>
					<p>普通用户</p>
					<a href="<?php echo U('lists_sub',array('level'=>0));?>">GO <i></i></a>
				</li>
				
				<li>
					<img src="/tpl/Public/images/2db7bc1361e32522118937b4658c3173_Eww0gADgi0AAAAASUVORK5CYII=.png"/>
					<p>高级会员</p>
					<a href="<?php echo U('lists_sub',array('level'=>1));?>">GO <i></i></a>
				</li>
				
				<li>
					<img src="/tpl/Public/images/lu.png"/>
					<p>尊享会员</p>
					<a href="<?php echo U('lists_sub',array('level'=>2));?>">GO <i></i></a>
				</li>
              <li>
					<img src="/tpl/Public/images/c7812764d5d7e905a0695d78c3d518da_f4.png"/>
					<p>高级代理</p>
					<a href="<?php echo U('lists_sub',array('level'=>3));?>">GO <i></i></a>
				</li>

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
		
	</body>
</html>