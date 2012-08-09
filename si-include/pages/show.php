<?php

/**
 * 显示图片.
 */

$uri = ltrim($_SERVER['REQUEST_URI'], '/');

$us = explode('/', $uri);

$n2t = array(0=>'gif', 1=>'jpeg', 2=>'png');

// 分割图片信息
$from = str_replace('|', '/', base64_decode($us[1]));

$pab = explode('-', $from);

$pab[1] = $n2t[$pab[1]];


$path = SICON . '/' . BASE_UPLOAD_DIR . urldecode($pab[0]);

//echo $path;

if(!file_exists($path))
{
	handle_404();
}

$imgcreatefun = 'imagecreatefrom' . $pab[1];
$imgshowfun = 'image' . ltrim($us[2], '.');

//echo $imgshowfun;

$img = $imgcreatefun($path);

header('Content-Type: image/'.$us[2]);
$imgshowfun($img);

?>
