<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="images/cac_icon.ico"/>
<head>
<noscript>
  <meta http-equiv="refresh" content="0; URL=error.php">
</noscript>
<link rel="stylesheet" type="text/css" href="css/aascss.css"/>
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>
</head>
<?php
session_start();
if(isset($_POST['verify']))
{
	header("Location: post_incorporation.php");
	$_SESSION['Admin'] = "Test";
	/*$user = $_POST['user'];
	$pass = $_POST['pass'];
    include("conn.php");
	$query = mysqli_query($db,"SELECT * FROM tblogin WHERE userName = '$user' AND passCode = '$pass'");
	if(mysqli_num_rows($query) > 0)
	{
		echo"<script>alert('Hello');</script>";
		session_start();
		$_SESSION['Admin'] = $user;
		header("Location: index.php");
	}*/
}
?>
<body>
<Form id="arLogin" name="arLogin" method="post" action="loginpage.php">
<div id="page">
<div id="banner">
<div id="topbg">
</div>
</div>
<center>
<br />
<br />
<br />
<br />
<br />
<table style="border:3px ridge #009900; background-color:white; height:100px; width:300px">
<tr>
<td colspan="2" align="center"><img src="images/login-tag.png"/></td>
</tr>
<tr>
<td valign="top"><img src="images/CAC_New_Logo.png" /></td>
<td> 
<table cellpadding="2" cellspacing="2">
<tr>
<td align="right" style="font-family:cambria; font-size:16px; font-weight:bold; color: #006600"> User ID: </td>
<td align="left"><input type="text" name="user" id="user" maxlength="12" /></td>
<td align="left" title="User ID Required" style="font-family:cambria; color:red"><div class="error" id="un">*</div></td>
</tr>
<tr>
<td align="right" style="font-family:cambria; font-size:16px; font-weight:bold; color: #006600">Password:  </td>
<td align="left"><input type="password" name="pass" id="pass" maxlength="12"/></td>
<td align="left" title="Password Required" style="font-family:cambria; color:red"><div class="error" id="pw">*</div></td>
</tr>
<tr>
<td align="right"><input type="submit" value="Login" id="verify" name="verify" class="btnSubmit"/></td>
<td align="left"><input type="reset" value="Clear" /></td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan="2" style="font-family:cambria; font-size:12px; color: red; font-weight:600" align="center">
<?php
if(isset($_POST['user']) && isset($_POST['pass']))
{
	if(!empty($_POST['user']) || !empty($_POST['pass']))
	if(mysql_num_rows($query) <= 0)
	{
		echo("Invalid User ID or Password. Please try again.");
	} 
}
?>
</td>
</tr>
<tr>
<td colspan="2" style="font-family:cambria; font-size:10px; color:#999" align="center";> &copy; 2013 Corporate Affairs Commission (ICT Department)</td>
</tr>
</table>
<br />
<br />
<br />
<br />
<br />
<br />
</center>
<div id="footer">
</div>
</div>
</Form>
</body>
<script>
$(document).ready(function()
{
	$('.error').hide();
	$('#verify').click(function()
	{
		$('.error').hide();
		if( $('#user').val() == "" )
		{
		   $('#un').show();
		}
		if( $('#pass').val() == "" )
		{
		   $('#pw').show();
		}
		if( ($('#user').val() == "") || ($('#pass').val() == "") )
		   return false;
	});
});
</script>
</html>