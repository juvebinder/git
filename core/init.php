<?php
ob_start(); session_start();
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');
define("PATH",$_SERVER['DOCUMENT_ROOT']); 
define("URL",'https://www.sandalye.com'); 
require_once(PATH."/classes/allclass.php");

$db = new \xyz\db\Database();
$db=null;
?>