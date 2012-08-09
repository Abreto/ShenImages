<?php

/**
 * 处理上传图片.
 */

global $SI;
global $siteurl;

$i = -1;

$pics = array();
$t2n = array('image/gif'=>0, 'image/jpeg'=>1, 'image/pjpeg'=>1, 'image/png'=>2);

// 处理每个上传的文件.
while(isset($_FILES["pics"]["name"][++$i]))
{
	// 检查文件类型
	if (	($_FILES["pics"]["type"][$i] != "image/gif")
		 && ($_FILES["pics"]["type"][$i] != "image/jpeg")
		 && ($_FILES["pics"]["type"][$i] != "image/pjpeg")
		 && ($_FILES["pics"]["type"][$i] != "image/png")	)
		break;
	$pics[$i]['type'] = $_FILES['pics']['type'][$i];
	$pics[$i]['tn'] = $t2n[$pics[$i]['type']];
	
	// 填充
	$pics[$i]['name'] = md5(file_get_contents($_FILES['pics']['tmp_name'][$i]));	// 文件名
	$pics[$i]['show'] = $pics[$i]['name'] . '-' . $pics[$i]['tn'];	// 显示的文件名
	$pics[$i]['path'] = $SI['UPLOAD_DIR'] . $pics[$i]['name'];
	$pics[$i]['uri'] = $siteurl . '/s/' . base64_encode(str_replace('/', '|', $SI['BASE_URI'] . '/' . $pics[$i]['show'] ));
	
	if( file_exists($pics[$i]['path']) )	// 如果文件存在
	{
		continue;	// 不用移动文件了.
	}
	move_uploaded_file($_FILES['pics']['tmp_name'][$i], $pics[$i]['path']);
	
}

//print_r($pics);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>上传成功 - 神图片外链系统2.0</title>
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
			<div class="nav-collapse">
			<ul class="nav">
				<li><a href="<?php echo $siteurl; ?>/">首页</a></li>
				<li class="active"><a>上传</a></li>
			</ul>
			</div>
	  		<div class="nav-collapse pull-right">
			<ul class="nav">
		   		<li><a href="http://blog.abreto.net" target="_blank">我的博客</a></li>
			</ul>
	  		</div>
        </div>
      	</div>
    	</div>
    	
    	<div class="container">
    		<header class="jumbotron subhead" id="overview">
    			<h1><?php 
    			if( count($pics) > 0 )
    				echo '上传成功!';
    			else
    				echo '你搞毛呢?';
    			?></h1>
    		</header>
    		
    		<section>
    			<?php 
    			foreach ($pics as $p)
    			{
    				echo '<div class="well">';
    				echo '<div class="control-group">';
    				echo '	<label class="control-label">图片外链</label>';
    				echo '	<div class="controls">';
    				echo '	<a href="'. $p['uri'] . '/.png" target="_blank" class="btn">PNG</a>';
    				echo '	<a href="'. $p['uri'] . '/.jpg" target="_blank" class="btn">JPEG</a>';
    				echo '	<a href="'. $p['uri'] . '/.gif" target="_blank" class="btn">GIF</a>';
    				echo '	</div>';
    				echo '</div>';
    				echo '</div>';
    			}
    			?>
    		</section>
    		
    		<footer>
    			<hr />
    			<p>Copyleft &copy; 2012 Abreto. <a href="https://github.com/Abreto/ShenImages" target="_blank">源</a>.</p>
    		</footer>
    	</div>
    	
	</body>
</html>
