<?php
header('Content-Type: text/html; charset=utf-8');

global $siteurl;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>自助图片上传 - 神图片外链系统2.0</title>
		<link href="<?php echo $siteurl; ?>/si-include/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
      	body {
        	padding-top: 60px;
        	padding-bottom: 40px;
      	}
    	</style>
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          	</a>
			<a class="brand" href="#">神图片</a>
	  		<div class="nav-collapse pull-right">
			<ul class="nav">
		   		<li><a href="http://blog.abreto.net" target="_blank">我的博客</a></li>
			</ul>
	  		</div>
        </div>
      	</div>
    	</div>
    	
    	<div class="container">
    		<!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0027_Simplified Chinese.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]--> 
    		<header class="hero-unit">
    			<h1>神图片外链系统</h1><hr />
    			<p>您可以上传GIF/JPEG/PNG格式的图片, 请自觉.</p>
    		</header>
    		
    		<section id="result">
    		<iframe id="upresult" name="upresult" style="border:none;display:none;"></iframe>
    		</section>
    		
    		<section>
    			<p>在此处上传文件:</p>
    			<form id="upform" action="<?php echo $siteurl;?>/upfile" method="post" enctype="multipart/form-data">
    				<div id="upaera">
    					<input type="file" name="pics[]" />
    				</div>
    			</form>
    			<div class="form-actions">
    				<button id="up" class="btn btn-primary btn-large"><i class="icon-arrow-up icon-white"></i>&nbsp;上传!</button>
    				<button id="addone" class="btn btn-large"><i class="icon-plus"></i>&nbsp;我还要再上传一个.</button>
    			</div>
    		</section>
    		
    		<footer>
    			<hr />
    			<p>Copyleft &copy; 2012 Abreto. <a href="https://github.com/Abreto/ShenImages" target="_blank">源</a>.</p>
    		</footer>
    	</div>

		<script type="text/javascript" src="<?php echo $siteurl; ?>/si-include/jQuery/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="<?php echo $siteurl; ?>/si-include/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript">
$("#addone").click(function(){
	$("#upaera").append('<br /><input type="file" name="pics[]" />');
});
$("#up").click(function(){
	$("#upform").submit();
});
		</script>
	</body>
</html>