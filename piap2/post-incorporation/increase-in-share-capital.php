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
<title>Increase In Share Capital</title>
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
	$('#mega-menu-7').dcMegaMenu({
		rowItems: '3',
		speed: 'slow',
		effect: 'slide'
	});
	var check = 0;
	function DateDiff(date1,date2)
	{
		var diff = date1.getTime() - date2.getTime();
		var num_days = Math.floor(Math.abs(diff / 86400000));
		return Math.floor(num_days);
	}
	
	$('#print').click(function()
	 { 
        if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#post_llc_changeOfName_resDate').val()=="") 
		  || ($('#type').val()=="") || ($('#current_shares').val()=="") || ($('#amount_inc').val()=="") || ($('#stamp').val()==""))
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
		if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#post_llc_changeOfName_resDate').val()=="")
		  || ($('#type').val()=="") || ($('#current_shares').val()=="") || ($('#amount_inc').val()=="") || ($('#stamp').val()==""))
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
			 if( $('#type').val()== "LLC" )
			 {
				 if( ($('#current_shares').val() >= 10000) && ($('#current_shares').val() <= 999999))
				 {
					 if( parseInt($('#amount_inc').val()) <= 1000000 )
					 {
					    $('#filing').val(10000);
					 }
					 if( parseInt($('#amount_inc').val()) > 1000000 && parseInt($('#amount_inc').val()) <= 500000000 )
					 {
						var fee = $('#amount_inc').val() - $('#current_shares').val();
						var subtracted = 1000000 - $('#current_shares').val();
						var charges = 10000 + (Math.ceil((parseFloat(fee) - parseFloat(subtracted))/1000000) * 5000);
						$('#filing').val(parseInt(charges));
					 }
					 if(  parseInt($('#amount_inc').val()) > 500000000 )
					 {
						var fee = $('#amount_inc').val() - $('#current_shares').val();
						var subtracted = 1000000 - $('#current_shares').val();
						var extra = Math.ceil( (parseFloat($('#amount_inc').val()) - 500000000) / 1000000 );
						var charges = 10000 + (499 * 5000) + (parseInt(extra) * 7500);
						$('#filing').val(charges);
					 }
						
				 }
				 if( ($('#current_shares').val() >= 1000000) && ($('#current_shares').val() <= 500000000))
				 {
					 if(parseInt($('#amount_inc').val()) <= 500000000)
					 {
					    var temp1 = Math.ceil(( parseFloat($('#amount_inc').val()) - parseFloat($('#current_shares').val()))/1000000) * 5000;
					    $('#filing').val(temp1);
					 }
					 else
					 {
					    var fee = 500000000 - parseInt($('#current_shares').val());
					    var inc = parseInt($('#amount_inc').val()) - 500000000;
					    var a = Math.ceil(( parseFloat(fee) / 1000000) * 5000);
					    var b = Math.ceil(( parseFloat(inc) / 1000000) * 7500);
					    var charges = a+b;
					    $('#filing').val(charges);
					 }
				 }
				 if(($('#current_shares').val() >= 500000001))
				 {
					 var fee = $('#amount_inc').val() - $('#current_shares').val();
					 var charges = Math.ceil((parseFloat(fee))/1000000) * 7500;
					 $('#filing').val(charges);
				 }
			 }//End Of LLC Section
			 ;
			 if(($('#type').val()== "PLC") )
			 {
                 if( ($('#current_shares').val() >= 10000) && ($('#current_shares').val() <= 999999))
				 {
					 if( parseInt($('#amount_inc').val()) <= 1000000 )
					 {
					    $('#filing').val(20000);
					 }
					 if( parseInt($('#amount_inc').val()) > 1000000 && parseInt($('#amount_inc').val()) <= 500000000 )
					 {
						var fee = $('#amount_inc').val() - $('#current_shares').val();
						var subtracted = 1000000 - $('#current_shares').val();
						var charges = 20000 + (Math.ceil((parseFloat(fee) - parseFloat(subtracted))/1000000) * 10000);
						$('#filing').val(parseInt(charges));
					 }
					 if(  parseInt($('#amount_inc').val()) > 500000000 )
					 {
						var fee = $('#amount_inc').val() - $('#current_shares').val();
						var subtracted = 1000000 - $('#current_shares').val();
						var extra = Math.ceil( (parseFloat($('#amount_inc').val()) - 500000000) / 1000000 );
						var charges = 20000 + (499 * 10000) + (parseInt(extra) * 15000);
						$('#filing').val(charges);
					 }
						
				 }
				 if( ($('#current_shares').val() >= 1000000) && ($('#current_shares').val() <= 500000000))
				 {
					 if(parseInt($('#amount_inc').val()) <= 500000000)
					 {
					    var temp1 = Math.ceil(( parseFloat($('#amount_inc').val()) - parseFloat($('#current_shares').val()))/1000000) * 10000;
					    $('#filing').val(temp1);
					 }
					 else
					 {
					    var fee = 500000000 - parseInt($('#current_shares').val());
					    var inc = parseInt($('#amount_inc').val()) - 500000000;
					    var a = Math.ceil(( parseFloat(fee) / 1000000) * 10000);
					    var b = Math.ceil(( parseFloat(inc) / 1000000) * 15000);
					    var charges = a+b;
					    $('#filing').val(charges);
					 }
				 }
				 if(($('#current_shares').val() >= 500000001))
				 {
					 var fee = $('#amount_inc').val() - $('#current_shares').val();
					 var charges = Math.ceil((parseFloat(fee))/1000000) * 15000;
					 $('#filing').val(charges);
				 } 
			 }//End Of PLC Section
			 ;
			 if(result > 15)
			 {
				 if(($('#type').val()== "LLC"))
				 {
					 $('#penalty').val(5000);
				 }
				 else
				 {
					 $('#penalty').val(10000);
				 }
			 }
			 else
			 {
				 $('#penalty').val(0);
			 }
			 var total = parseInt($('#filing').val()) + parseInt($('#penalty').val());
			 alert(total);
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
Increase In Share Capital
</legend>
<table style="font-family:cambria; font-size:13px; color:#333333" width="auto" height="auto" cellpadding="4" cellspacing="1">
<tr>
<td align="left">
RC Number:
</td>
<td align="right">
<input type="text" id="rcno" style="width:200px;" maxlength="100" onkeypress="return isNumberKey(event)" />
</td>
</tr>

<tr>
<td align="left">
Customer ID:
</td>
<td align="right">
<input type="text" id="custId" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Company Name:
</td>
<td align="right">
<input type="text" id="company" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Company Type:
</td>
<td align="left">
<select id="type"  style="width:50px;" >
    <option value=""></option>
    <option value="LLC">LLC</option>
    <option value="PLC">PLC</option>
    </select>
</td>
</tr>

<tr>
<td align="left">
Resolution Date:
</td>
<td align="left">
<input readonly="readonly" name="post_llc_changeOfName" type="text" id="post_llc_changeOfName_resDate" style="width:185px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Current Shares (In Naira):
</td>
<td align="right">
<input type="text" id="current_shares" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Amount Increased (In Naira):
</td>
<td align="right">
<input type="text" id="amount_inc" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Stamp Duty Receipt No:
</td>
<td align="right">
<input type="text" id="stamp" style="width:200px;" maxlength="100"/>
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