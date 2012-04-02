<?php

if( !defined('IN_SI') )
	die('Access Denial.');

/**
 * 神图片 - 载入.
 */

global $siteurl;
	

$uri = $_SERVER['REQUEST_URI'];

$pt = get_page_type($uri);

switch($pt)
{
	case 'home':
	case 'upload':
	case 'show':
		require_once( SIINC . '/pages/'.$pt.'.php' );
		break;
	default:	// 404
		handle_404();
		break;
}

?>