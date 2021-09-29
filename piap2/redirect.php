<?php
session_start();
if ($_SESSION['Admin'] == null)
{
	header("Location:loginpage.php");
}
if(!isset($_POST["rcnum"]))
{
	echo "Illegal Access Not Possible";
}
else
{
	$theRC = NULL;
	$theRC = $_POST["rcnum"];
	if($theRC == NULL)
	{
		echo "The RC IS NULL ";
	}
	else
	{
		$_SESSION['docname'] = $theRC;
		header("Location:download.php");
	}
}
?>
