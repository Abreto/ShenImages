<?php

/**
 * 神图片轻量级配置文件.
 */

if( !defined('IN_SI') )
	die('Access Denial.');

/** 图片上传相对根路径(相对于si-content的位置,请务必保证程序对之有写权限.末尾要加'/') */
define('BASE_UPLOAD_DIR', 'files/');

/** 网站地址(末尾不加'/') */
$siteurl = 'http://si.ab.localdomain';

// 还想设置什么?..不需要了..。
// 下面的请勿改动.

if (!defined('ABSPATH'))
	define('ABSPATH', dirname( __FILE__ ) . '/');

require_once( ABSPATH . 'si-settings.php' );
