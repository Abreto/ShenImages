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
	
}

function handle_404()
{
	// 处理404
}

?>