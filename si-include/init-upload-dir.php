<?php

if( !defined('IN_SI') )
	die('Access Denial.');

global $SI;

$toyear = date("Y");
$tomonthnum = date("m");
$today = date("d");

$SI['BASE_URI'] = "/{$toyear}/{$tomonthnum}/{$today}";
$SI['UPLOAD_DIR'] = SICON . '/' . BASE_UPLOAD_DIR . "{$toyear}/{$tomonthnum}/{$today}/";

if( !file_exists($SI['UPLOAD_DIR']) )
	mkdir($SI['UPLOAD_DIR'], 0777, TRUE);

?>