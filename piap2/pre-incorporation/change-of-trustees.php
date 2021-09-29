<?php
session_start();
if ($_SESSION['Admin'] == null)
{
	header("Location:../loginpage.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<noscript>
  <meta http-equiv="refresh" content="0; URL=../error.php">
</noscript>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Of Trustees</title>
<script src="../js/jquery-1.8.3.js"></script>
<script src="../js/jquery.ui.core.js"></script>
<script src="../js/jquery.ui.widget.js"></script>
<script src="../js/jquery.ui.datepicker.js"></script>
<link rel="stylesheet" href="../css/demos.css">
<link rel="stylesheet" href="../css/jquery.ui.all.css">
<script type='text/javascript' src='../js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='../js/jquery.dcmegamenu.1.3.3.js'></script>
<link rel="stylesheet" type="text/css" href="../css/aascss.css"/>
<link href="../css/skins/green.css" rel="stylesheet" type="text/css" />
<link href="../css/dcmegamenu.css" rel="stylesheet" type="text/css" />
	<script>
	$(function() {
		$( "#pre-lgte-date" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
	</script>
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
	<li><a href="../index.php">Home</a></li>
	<li><a href="#">Limited Liability Company/PLC</a>
      <ul>
          <li><a href="#">Assessment For Private Limited Companies (LLC)</a>
             <ul>
             <div align="left">
                  <li><a href="assessment-for-private-limited-companies.php">Assessment For Private Limited Companies (LLC)</a></li>
             </div>
             </ul>
          </li>
          <li><a href="#">Assessment For Public Limited Companies (PLC)</a>
             <ul>
             <div align="left">
                  <li><a href="assessment-for-public-limited-companies.php">Assessment For Public Limited Companies (PLC)</a></li>
             </div>
             </ul>
          </li>
          <li><a href="#">Assessment For Companies Limited By Guarantee</a>
             <ul>
             <div align="left">
                  <li><a href="assessment-for-companies-limited-by-guarantee.php">Assessment For Companies Limited By Guarantee</a></li>
             </div>
             </ul>
          </li>
          <li><a href="#">Search Values Entered</a>
             <ul>
             <div align="left">
                  <li><a href="check-llc-values-entered.php">Check LLC Values Entered</a></li>
                  <li><a href="check-plc-values-entered.php">Check PLC Values Entered</a></li>
                  <li><a href="check-lgte-values-entered.php">Check LGTE Values Entered</a></li>
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
                  <li><a href="registration-of-business-name-and-branch-address.php">Registration Of Business Name & Address Branch</a></li>
                  <li><a href="change-of-business-name.php">Change Of Business Name</a></li>
                  <li><a href="change-of-proprietors-name.php">Change Of Proprietors Name</a></li>
                  <li><a href="change-of-address-of-proprietor-change-of-office-address.php">Change Of Address Of Proprietor/Change Of Office Address</a></li>
                  <li><a href="change-in-nature-of-business.php">Change In Nature Of Business</a></li>
                  <li><a href="removal-addition-resignation-of-partners.php">Removal/Addition/Resignation Of Partners</a></li>
                  <li><a href="ctc-of-documents-change-of-occupation.php">C.T.C Of Documents/Change Of Occupation</a></li>
                  <li><a href="pre-bn-miscellaneous.php">Miscellaneous</a></li>
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
                  <li><a href="registration-of-it.php">Registration Of Incorporated Trustees</a></li>
                  <li><a href="change-of-name-it.php">Change Of Name</a></li>
                  <li><a href="change-of-trustees.php">Change Of Trustees</a></li>
                  <li><a href="it-search.php">Incorporated Trustees Search</a></li>
                  <li><a href="ctc-of-certificate.php">Certified True Copy Of Certificate</a></li>
                  <li><a href="ctc-of-all-other-documents.php">Certified True Copy Of All Other Documents</a></li>
                  <li><a href="filing-of-dissolution-of-trustees.php">Filing Of Dissolution Of Trustees</a></li>
                  <li><a href="amendment-of-constitution.php">Amemdment Of Constitution</a></li>
                  <li><a href="pre-it-miscellaneous.php">Miscellaneous</a></li>
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
<br />
<fieldset style="width:800px; background-color:#f5f5f5">
<legend align="left" style="font-size:20px; font-family:Cambria; color:#9ac119; font-weight:bold">
Change Of Trustees
</legend>
<table style="font-family:cambria; font-size:13px; color:#333333" width="auto" height="auto" cellpadding="4" cellspacing="1">

<tr>
<td align="left">
Customer ID:
</td>
<td align="right">
<input name="pre-lgte-cust-id" type="text" id="pre-lgte-cust-id" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Availability Code:
</td>
<td align="right">
<input name="pre-lgte-avail-code" type="text" id="pre-lgte-avail-code" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Approved Company Name:
</td>
<td align="right">
<input name="pre-lgte-appr-name" type="text" id="pre-lgte-appr-name" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Date:
</td>
<td align="left">
<input readonly="readonly" name="pre-lgte-date" type="text" id="pre-lgte-date" style="width:185px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Amount Payable
</td>
<td align="left">
<input value="10000" type="text" name="bn_payable" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900" readonly="readonly" />
</td>
</tr>

<tr>
<td align="right">
<input type="button" style="color:#333; font-family:cambria;" value="Print" />
</td>
<td align="left">
<input type="reset" style="color:#333; font-family:cambria;" value="Cancel" />
</td>
</tr>
</table>
</fieldset>
<br />
</center>
</div>
<div id="footer">
</div>
</body>
</html>