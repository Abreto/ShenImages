<?php

if( !defined('IN_SI') )
	die('Access Denial.');

global $SI;

$toyear = date("Y");
$tomonthnum = date("m");
$today = date("d");

$SI['UPLOAD_DIR'] = SICON . '/' . BASE_UPLOAD_DIR . "{$toyear}/{$tomonthnum}/{$today}/";

?>