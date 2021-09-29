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
<title>Pre Incorporation Assessment Page</title>
<link href="css/dcmegamenu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
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
          <li><a href="#">Assessment For Private Limited Companies (LLC)</a>
             <ul>
             <div align="left">
                  <li><a href="pre-incorporation/assessment-for-private-limited-companies.php">Assessment For Private Limited Companies (LLC)</a></li>
             </div>
             </ul>
          </li>
          <li><a href="#">Assessment For Public Limited Companies (PLC)</a>
             <ul>
             <div align="left">
                  <li><a href="pre-incorporation/assessment-for-public-limited-companies.php">Assessment For Public Limited Companies (PLC)</a></li>
             </div>
             </ul>
          </li>
          <li><a href="#">Assessment For Companies Limited By Guarantee</a>
             <ul>
             <div align="left">
                  <li><a href="pre-incorporation/assessment-for-companies-limited-by-guarantee.php">Assessment For Companies Limited By Guarantee</a></li>
             </div>
             </ul>
          </li>
          <li><a href="#">Search Values Entered</a>
             <ul>
             <div align="left">
                  <li><a href="pre-incorporation/check-llc-values-entered.php">Check LLC Values Entered</a></li>
                  <li><a href="pre-incorporation/check-plc-values-entered.php">Check PLC Values Entered</a></li>
                  <li><a href="pre-incorporation/check-lgte-values-entered.php">Check LGTE Values Entered</a></li>
             </div>
             </ul>
          </li>
       </ul>
     </li>
	<li><a href="#">Business Names</a>
      <ul>
         <li><a href="#">Business Name Assessment</a>
             <ul>
             <div align="left">
                  <li><a href="pre-incorporation/registration-of-business-name-and-branch-address.php">Registration Of Business Name & Address Branch</a></li>
                  <li><a href="pre-incorporation/change-of-business-name.php">Change Of Business Name</a></li>
                  <li><a href="pre-incorporation/change-of-proprietors-name.php">Change Of Proprietors Name</a></li>
                  <li><a href="pre-incorporation/change-of-address-of-proprietor-change-of-office-address.php">Change Of Address Of Proprietor/Change Of Office Address</a></li>
                  <li><a href="pre-incorporation/change-in-nature-of-business.php">Change In Nature Of Business</a></li>
                  <li><a href="pre-incorporation/removal-addition-resignation-of-partners.php">Removal/Addition/Resignation Of Partners</a></li>
                  <li><a href="pre-incorporation/ctc-of-documents-change-of-occupation.php">C.T.C Of Documents/Change Of Occupation</a></li>
                  <li><a href="pre-incorporation/pre-bn-miscellaneous.php">Miscellaneous</a></li>
                  </div>
             </ul>
         </li>
    </ul>
    </li>
<li><a href="#">Incorporated Trustees</a>
      <ul>
         <li><a href="#">I.T Assessment</a>
             <ul>
             <div align="left">
                  <li><a href="pre-incorporation/registration-of-it.php">Registration Of Incorporated Trustees</a></li>
                  <li><a href="pre-incorporation/change-of-name-it.php">Change Of Name</a></li>
                  <li><a href="pre-incorporation/change-of-trustees.php">Change Of Trustees</a></li>
                  <li><a href="pre-incorporation/it-search.php">Incorporated Trustees Search</a></li>
                  <li><a href="pre-incorporation/ctc-of-certificate.php">Certified True Copy Of Certificate</a></li>
                  <li><a href="pre-incorporation/ctc-of-all-other-documents.php">Certified True Copy Of All Other Documents</a></li>
                  <li><a href="pre-incorporation/filing-of-dissolution-of-trustees.php">Filing Of Dissolution Of Trustees</a></li>
                  <li><a href="pre-incorporation/amendment-of-constitution.php">Amemdment Of Constitution</a></li>
                  <li><a href="pre-incorporation/pre-it-miscellaneous.php">Miscellaneous</a></li>
                  </div>
             </ul>
         </li>
    </ul>
</li>
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
<br />
<img src="images/pre.png" style="outline:none; border:none;" />
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