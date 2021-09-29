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
<link rel="stylesheet" href="../css/jquery.ui.all.css">
<title>Alteration Of Memo & Article Of Association</title>
<script src="../js/jquery-1.8.3.js"></script>
<script src="../js/jquery.ui.core.js"></script>
<script src="../js/jquery.ui.widget.js"></script>
<script src="../js/jquery.ui.datepicker.js"></script>
<link rel="stylesheet" href="../css/demos.css">

<script type='text/javascript' src='../js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='../js/jquery.dcmegamenu.1.3.3.js'></script>
<link rel="stylesheet" type="text/css" href="../css/aascss.css"/>
<link href="../css/skins/green.css" rel="stylesheet" type="text/css" />
<link href="../css/dcmegamenu.css" rel="stylesheet" type="text/css" />
	<script>
	$(function() {
		$( "#post_llc_changeOfName_resDate" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
	</script>
<script type="text/javascript">
function isNumberKey(evt)
{
 var charCode = (evt.which) ? evt.which : event.keyCode
 if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;

 return true;
}
$(document).ready(function($)
{
	var check = 0;
	function DateDiff(date1,date2)
	{
		var diff = date1.getTime() - date2.getTime();
		var num_days = Math.floor(Math.abs(diff / 86400000)); 
		return Math.floor(num_days);
	}
	$('#mega-menu-7').dcMegaMenu({
		rowItems: '3',
		speed: 'slow',
		effect: 'slide'
	});
$('#print').click(function()
	 {
		 if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#post_llc_changeOfName_resDate').val()=="") ||          ($('#officers').val()==""))
		 {
			 alert("Empty Field(s) Found. Ensure Mandatory Fields Are Properly Entered");
		 }
		 else
		 {
			 if(check < 1)
			 {
				 alert("Verify First Before Printing");
				 return false;
			 }
			 else
			 {
				 window.print();
			 }
		 }
	 });
	
	$('#verify').click(function()
	 {
		 check = 0;
		 if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#post_llc_changeOfName_resDate').val()=="") || ($('#officers').val()==""))
		 {
			 alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			 $('#filing').val('');
			 $('#penalty').val('');
			 $('#total').val('');
		 }
		 else
		 {
			 check = 1;
			 var temp = $("#post_llc_changeOfName_resDate").val();
			 var today = new Date();
			 var selected = new Date(temp);
			 var result = DateDiff(today,selected);
			 $('#filing').val(5000);
			 if(result > 43)
			 {
				 $('#penalty').val(5000);
			 }
			 else
			 {
				 $('#penalty').val(0);
			 }
			 var total = parseInt($('#filing').val()) + parseInt($('#penalty').val());
			 $('#total').val(total);
		 }//
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
			<li><a href="#">Filings With Flat Rate Penalty</a>
				<ul>
                <div align="left">
					<li><a href="change-of-name.php">Change Of Name</a></li>
					<li><a href="conversion-and-re-registration.php">Conversion & Re-Registration</a></li>
					<li><a href="appointment-of-secretaries.php">Appointment Of Secretaries</a></li>
                    <li><a href="appointment-of-directors.php">Appointment Of Directors</a></li>
                    <li><a href="declaration-of-solvency.php">Declaration of Solvency</a></li>
                    </div>
				</ul>
			</li>
			<li><a href="#">Filings With Penalty Against Company Only</a>
			    <ul>
                <div align="left">
					<li><a href="increase-in-share-capital.php">Increase In Share Capital</a></li>
                    </div>
				</ul>
			</li>
			<li><a href="#">Filings With Penalties Against Officers Only</a>
			    <ul>
                <div align="left">
					<li><a href="appointment-of-recevier.php">Appointment Of Receiver</a></li>
					<li><a href="appointment-of-liquidator.php">Appointment Of Liquidator</a></li>
					<li><a href="return-of-allotment.php">Return Of Allotment</a></li>
                    </div>
				</ul>
			</li>
			<li><a href="#">Filings With Penalty Against Company & Officers</a>
			    <ul>
                <div align="left">
					<li><a href="alteration-of-memo-and-article-of-association.php">Alteration Of Memo & Article Of Association</a></li>
					<li><a href="appointment-of-auditors.php">Appointment Of Auditors</a></li>
                    <li><a href="removal-of-auditors.php">Removal Of Auditors</a></li>
                    <li><a href="winding-up-voluntarily.php">Winding Up Voluntarily</a></li>
                    <li><a href="change-of-registered-office-address.php">Change Of Registered Office Address</a></li>
                    <li><a href="half-yearly-returns.php">Half Yearly Returns</a></li>
                    </div>
				</ul>
			</li>
			<li><a href="#">Filings With No Penalty &amp; Miscelleaneous Filings </a>
			  <ul>
              <div align="left">
				<li><a href="filings-with-no-penalty.php">Filings With No Penalty &amp; Miscelleaneous Filings </a></li>
                </div>
			  </ul>
			</li>
            <li><a href="#">Others</a>
			  <ul>
              <div align="left">
				<li><a href="#">Annual Returns</a></li>
                </div>
			  </ul>
			</li>
		</ul>
	</li>
	<li><a href="post-incorporation-business-name.php">Business Names</a></li>
<li><a href="post-incorporation-it.php">Incorporated Trustees</a></li>
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
<td width="32" align="left"><a href="../logout.php" class="signout">Signout</a></td>
</tr>
</table>
<br />
<fieldset style="width:800px; background-color:#f5f5f5">
<legend align="left" style="font-size:20px; font-family:Cambria; color:#9ac119; font-weight:bold">
Alteration Of Memo & Article Of Association
</legend>
<table style="font-family:cambria; font-size:13px; color:#333333" width="auto" height="auto" cellpadding="4" cellspacing="1">
<tr>
<td colspan="2">
<caption style="color:#900">Fields Marked With Asterisk (*) Are Mandatory</caption>
</td>
</tr>

<tr>
<td align="left">
RC Number:*
</td>
<td align="right">
<input type="text" id="rcno" style="width:200px;" maxlength="10" onkeypress="return isNumberKey(event)" />
</td>
</tr>

<tr>
<td align="left">
Customer ID:*
</td>
<td align="right">
<input type="text" id="custId" style="width:200px;" maxlength="20"/>
</td>
</tr>

<tr>
<td align="left">
Company Name:*
</td>
<td align="right">
<input type="text" id="company" style="width:200px;" maxlength="200"/>
</td>
</tr>

<tr>
<td align="left">
Resolution Date:*
</td>
<td align="left">
<input readonly="readonly" type="text" id="post_llc_changeOfName_resDate" style="width:185px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
No Of Officers:
</td>
<td align="left">
<input type="text" id="officers" style="width:100px;" maxlength="2" onkeypress="return isNumberKey(event)" />
</td>
</tr>

<tr>
<td align="left">
Filing Fee (=N=):
</td>
<td align="left">
<input readonly="readonly"  type="text" id="filing" style="background-color:#eee; color:red; width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Penalty Fee (=N=):
</td>
<td align="left">
<input readonly="readonly"  type="text" id="penalty" style="background-color:#eee; color:red; width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Total Fee (=N=):
</td>
<td align="left">
<input readonly="readonly" value="" type="text" id="total" style="background-color:#eee; color:red; width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="button" style="color:#333; font-family:cambria;" value="Verify" id="verify" />
<input type="button" style="color:#333; font-family:cambria;" value="Print" id="print"  />
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