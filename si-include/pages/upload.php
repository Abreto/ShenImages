<?php

/**
 * 处理上传图片.
 */

global $SI;

$i = -1;

$pics = array();
$t2n = array('image/gif'=>0, 'image/jpeg'=>1, 'image/pjpeg'=>1, 'image/png'=>2);

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
	
	
	
	print_r($pics);
}

?>