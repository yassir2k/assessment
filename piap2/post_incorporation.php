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
<title>Post Incorporation Assessment Page</title>
<link href="css/dcmegamenu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='js/jquery.dcmegamenu.1.3.3.js'></script>
<link rel="stylesheet" type="text/css" href="css/aascss.css"/>
<link href="css/skins/green.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(document).ready(function($)
{
	$('#mega-menu-7').dcMegaMenu({
		rowItems: '3',
		speed: 'slow',
		effect: 'slide'
	});
});
</script>
</head>

<body>
<div id="page">
<div id="banner">
<div id="topbg">
</div>
</div>
<center>
<div class="wrap">
<div class="demo-container">
<div class="green">  
<ul id="mega-menu-7" class="mega-menu">
	<li><a href="index.php">Home</a></li>
	<li><a href="#">Limited Liability Company/PLC</a>
		<ul>
			<li><a href="#">Filings With Flat Rate Penalty</a>
				<ul>
                <div align="left">
					<li><a href="post-incorporation/change-of-name.php">Change Of Name</a></li>
					<li><a href="post-incorporation/conversion-and-re-registration.php">Conversion & Re-Registration</a></li>
					<li><a href="post-incorporation/appointment-of-secretaries.php">Appointment Of Secretaries</a></li>
                    <li><a href="post-incorporation/appointment-of-directors.php">Appointment Of Directors</a></li>
                    <li><a href="post-incorporation/declaration-of-solvency.php">Declaration of Solvency</a></li>
                    </div>
				</ul>
			</li>
			<li><a href="#">Filings With Penalty Against Company Only</a>
			    <ul>
                <div align="left">
					<li><a href="post-incorporation/increase-in-share-capital.php">Increase In Share Capital</a></li>
                    </div>
				</ul>
			</li>
			<li><a href="#">Filings With Penalties Against Officers Only</a>
			    <ul>
                <div align="left">
					<li><a href="post-incorporation/appointment-of-recevier.php">Appointment Of Receiver</a></li>
					<li><a href="post-incorporation/appointment-of-liquidator.php">Appointment Of Liquidator</a></li>
					<li><a href="post-incorporation/return-of-allotment.php">Return Of Allotment</a></li>
                    </div>
				</ul>
			</li>
			<li><a href="#">Filings With Penalty Against Company & Officers</a>
			    <ul>
                <div align="left">
					<li><a href="post-incorporation/alteration-of-memo-and-article-of-association.php">Alteration Of Memo & Article Of Association</a></li>
					<li><a href="post-incorporation/appointment-of-auditors.php">Appointment Of Auditors</a></li>
                    <li><a href="post-incorporation/removal-of-auditors.php">Removal Of Auditors</a></li>
                    <li><a href="post-incorporation/winding-up-voluntarily.php">Winding Up Voluntarily</a></li>
                    <li><a href="post-incorporation/change-of-registered-office-address.php">Change Of Registered Office Address</a></li>
                    <li><a href="post-incorporation/half-yearly-returns.php">Half Yearly Returns</a></li>
                    </div>
				</ul>
			</li>
			<li><a href="#">Filings With No Penalty &amp; Miscelleaneous Filings </a>
			  <ul>
              <div align="left">
				<li><a href="post-incorporation/filings-with-no-penalty.php">Filings With No Penalty &amp; Miscelleaneous Filings </a></li>
                </div>
			  </ul>
			</li>
            <li><a href="#">Annual Returns</a>
			  <ul>
              <div align="left">
				<li><a href="#">Annual Returns</a></li>
                </div>
			  </ul>
			</li>
		</ul>
	</li>
	<li><a href="post-incorporation/post-incorporation-business-name.php">Business Names</a></li>
<li><a href="post-incorporation/post-incorporation-it.php">Incorporated Trustees</a></li>
<li><a href="#">Report Listing</a></li>
</ul>
</div>
</div>
</div>
<table width="950">
<tr>
<td style="font:'Times New Roman', Times, serif; font-weight:bold; font-size:12px; color:#900" width="907" align="right">
Welcome, <?php echo $_SESSION['Admin']; ?></td>
<td style="font:'Arial Black', Gadget, sans-serif; font-weight:bolder; font-size:12px; color:#000" width="10" align="center">|</td>
<td width="32" align="left"><a href="logout.php" class="signout">Signout</a></td>
</tr>
</table>
<br />
<br />
<br />
<img src="images/post.png" style="outline:none; border:none;" />
<br />
<br />
<br />
<br />
</center>
</div>
<div id="footer">
</div>
</body>
</html>