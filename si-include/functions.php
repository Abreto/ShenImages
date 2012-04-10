<?php

/**
 * 神图片 - 函数.
 */

function get_page_type($uri)
{
	if( $uri == '/' )
		return 'home';
	if( $uri == '/upfile' )
		return 'upload';
	$us = explode('/', $uri);
	if( $us[1] == 's' )
		return 'show';
	return '404';
}

function imagejpg($image)
{
	imagejpeg($image);
}

function handle_404()
{
	// 处理404
	header("http/1.1 404 Not Found");
	header('Content-Type: text/html; charset=utf-8');
	die('404了,泥煤..。');
}

?>