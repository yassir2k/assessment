<?php
session_start();
if ($_SESSION['Admin'] == null)
{
	header("Location:loginpage.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<noscript>
  <meta http-equiv="refresh" content="0; URL=error.php">
</noscript>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/aascss.css"/>
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<title>Home Page</title>
</head>

<body>
<div id="page">
<div id="banner">
<div id="topbg">
</div>
</div>
<center>
<table width="900px">
<tr>
<td align="center"><a href="pre_incorporation.php" style="outline:0px">
<img src="images/aas_offbutton.png" id="swapPre" width="350" height="350" style="outline:none; border:none;" />
</a></td>
<td align="center" ><a href="post-incorporation/" style="outline:0px">
<img  src="images/aas_offbutton.png" id="swapPost" width="350" height="350" style="outline:none; border:none;" />
</a></td>
</tr>
<tfoot>
<td align="center"><a id="swapPreLink" href="pre_incorporation.php" style="outline:none" class="mainLink">Pre Incorporation Assessment</a></td>
<td align="center"><a id="swapPostLink" href="post-incorporation/" style="outline:none" class="mainLink">Post Incorporation Assessment</a></td>
</tfoot>
</table>
</center>
</div>
<div id="footer">
</div>
</body>
<script>
//function getSecurityCode(){
//dat = "dat="+$("#msg").val();
//alert(dat);
//$.ajax(
//			{
//				   type: "POST",
//				   url: "redirect.php",
//				   data: dat,
//				   success: function(msg){  
//				   $('#cHoto').ajaxComplete(function(event, request, settings)
//				   {
//						   window.location "redirect.php";
//				   });
//				   }
//				   
//			 });
//         }
$(document).ready(function()
{
	$("#swapPre").mouseover(function()
	{
            $("#swapPre").attr('src','images/aas_pre_onbutton.png').fadeIn(500);
    }).mouseout(function(){
            $("#swapPre").attr('src','images/aas_offbutton.png');
    });
	$("#swapPreLink").mouseenter(function()
	{
            $("#swapPre").attr('src','images/aas_pre_onbutton.png').fadeIn(500);
    }).mouseout(function(){
            $("#swapPre").attr('src','images/aas_offbutton.png');
    });
	/*--------------------------------------------------------------------------------------*/
	$("#swapPost").mouseenter(function()
	{
            $("#swapPost").attr('src','images/aas_post_onbutton.png');
    }).mouseout(function(){
            $("#swapPost").attr('src','images/aas_offbutton.png');
    });
	$("#swapPostLink").mouseenter(function()
	{
            $("#swapPost").attr('src','images/aas_post_onbutton.png');
    }).mouseout(function(){
            $("#swapPost").attr('src','images/aas_offbutton.png');
    });

});
</script>
</html>