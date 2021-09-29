<?php
session_start();
define('LOG_DOWNLOADS',true);
define('LOG_FILE','downloads.log');
if(empty($_SESSION['docname']))
{
	echo "Shuru Ai";
}
else
{
	$str = "Content-disposition: attachment; filename=".$_SESSION['docname']."";
	echo $str."<br />";
	echo $_SESSION['docname']."<br />";
	header($str);
	readfile("downloads/".$_SESSION['docname']);
	if (!LOG_DOWNLOADS) die();
	$f = @fopen(LOG_FILE, 'a+');
	if ($f) {
	  @fputs($f, date("m.d.Y g:ia")."  ".$_SERVER['REMOTE_ADDR']."  ".$_SESSION['docname']."  ". $_SESSION['Admin'] ."\n");
	  @fclose($f);
	}
	$_SESSION['docname'] = NULL;
}
?>