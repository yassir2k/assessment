
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<noscript>
  <meta http-equiv="refresh" content="0; URL=../error.php">
</noscript>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/jquery.ui.all.css">
<title>Half Yearly Returns</title>
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
	 var current = new Date();
	 var day = current.getDate();
	 var month = current.getMonth() + 1;
	 var year = current.getFullYear();
	 var dateString = month + "/" + day + "/" + year;
	 $('#post_llc_changeOfName_resDate').val(dateString)
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
		 if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#yearly').val()=="")
		 || ($('#officers').val()==""))
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
				 document.getElementById("menu").style.display = "none";
				 document.getElementById("print").style.display = "none";
				document.getElementById("disp").style.display = "block";
				 window.print();
				 location.reload();
			 }
		 }
	 });
	
	$('#verify').click(function()
	 { 
		 check = 0;
		 var first_half_start = new Date ("02/04/2019");
		 var first_half_stop = new Date ("08/05/2019");
		 var second_half_start = new Date ("08/06/2019");
		 var second_half_stop = new Date ("02/02/2020");
		 var today = new Date (dateString);
		 if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#yearly').val()=="")
		 || ($('#officers').val()=="") || ($('#post_llc_changeOfName_resDate').val() == ""))
		 {
			 alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			 $('#filing').val('');
			 $('#penalty').val('');
			 $('#total').val('');
		 }
		 else if (parseInt($('#officers').val()) < 2){
			 alert("A company must have at least two directors.");
			 $('#filing').val('');
			 $('#penalty').val('');
			 $('#total').val('');
			 $('#officers').val('');
		 }
		 else
		 {
			 check = 1;
			 $('#filing').val(10000);
			 if( $('#yearly').val() == "first-half")
			 {
				 if(today.getTime() == first_half_start.getTime())//Filing Date equals a day before penalty starts applying
				 {
					 $('#penalty').val(0);
					 var total = parseInt($('#filing').val()) + parseInt($('#penalty').val()) + 2000;
					 $('#total').val(total);
				 }
				 else if( (today > first_half_start) && (today >= first_half_stop) )//Maximum Penalty First Half
				 {
					 var days_difference = DateDiff(first_half_stop,first_half_start);
					 var pen = (1 + 1 + parseInt ($('#officers').val())) * (100 * (parseInt(days_difference)-1));//sub 1 day from due date
					 //(Company + Secretary + Number of Officers) * (100 For Each Day Elapsed)
					 $('#penalty').val(pen);
					 var total = parseInt($('#filing').val()) + parseInt($('#penalty').val()) + 2000;
					 $('#total').val(total);
				 }
				 else if((today > first_half_start) && (today < first_half_stop))
				 {
					 var days_difference = DateDiff(today,first_half_start);
					 var pen = (1 + 1 + parseInt ($('#officers').val())) * (100 * (parseInt(days_difference)-1));
					 //(Company + Secretary + Number of Officers) * (100 For Each Day Elapsed)
					 $('#penalty').val(pen);
					 var total = parseInt($('#filing').val()) + parseInt($('#penalty').val()) + 2000;
					 $('#total').val(total);
				 }
				 else
				 {
					 $('#filing').val('');
					 $('#penalty').val('');
					 $('#total').val('');					 
				 }
			 }
			 else //Second Half
			 {
				 if(today.getTime() == second_half_start.getTime())//Filing Date equals a day before penalty starts applying
				 {
					 alert("equal");
					 $('#filing').val(10000);
					 $('#penalty').val(0);
				     var total = parseInt($('#filing').val()) + parseInt($('#penalty').val()) + 2000;
			         $('#total').val(total);
				 }
				 else if( (today > second_half_start) && (today >= second_half_stop) )//Maximum Penalty First Half
				 {
					 var days_difference = DateDiff(second_half_stop,second_half_start);
					 var pen = (1 + 1 + parseInt ($('#officers').val())) * (100 * (parseInt(days_difference)-1));
					 //(Company + Secretary + Number of Officers) * (100 For Each Day Elapsed)
					 $('#penalty').val(pen);
				     var total = parseInt($('#filing').val()) + parseInt($('#penalty').val()) + 2000;
			         $('#total').val(total);
				 }
				 else if((today > second_half_start) && (today < second_half_stop))
				 {
					 var days_difference = DateDiff(today,second_half_start);
					 var pen = (1 + 1 + parseInt ($('#officers').val())) * (100 * (parseInt(days_difference)-1));
					 //(Company + Secretary + Number of Officers) * (100 For Each Day Elapsed)
					 $('#penalty').val(pen);
				     var total = parseInt($('#filing').val()) + parseInt($('#penalty').val()) + 2000;
			         $('#total').val(total);
				 }
				 else
				 {
					 $('#filing').val('');
					 $('#penalty').val('');
					 $('#total').val('');	
				 }
			 }
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
<div class="green" id="menu">  

<?php include("menu.php"); ?>

</div>
</div>
</div>

<br />
<h1 id='disp' align="center" style="display: none;font-family: Calligrapher;
font-size: 45px; ">Corporate Affairs Commission</h1>
<fieldset style="width:800px; background-color:#f5f5f5">
<legend align="left" style="font-size:25px; font-family:Cambria; color:#9ac119; font-weight:bold">
Statement of Affairs (S553)
</legend>
<table style="font-family:cambria; font-size:15px; color:#333333" width="auto" height="auto" cellpadding="4" cellspacing="1">
<tr>
<td colspan="2">
<caption style="color:#900">Fields Marked With Asterisk (*) Are Mandatory</caption>
</td>
</tr>
<tr>
<td align="left">
RC Number:*
</td>
<td align="left">
<input type="text" id="rcno" style="width:200px;" maxlength="100" onkeypress="return isNumberKey(event)"/>
</td>
</tr>

<tr>
<td align="left">
Customer ID:*
</td>
<td align="left">
<input type="text" id="custId" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Company Name:*
</td>
<td align="right">
<input type="text" id="company" style="width:300px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Resolution Date:*
</td>
<td align="left">
<input disabled="disabled" readonly="readonly" type="text" id="post_llc_changeOfName_resDate" style="width:185px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
No Of Directors:*
</td>
<td align="right">
<input type="text" id="officers" style="width:200px;" maxlength="2" onkeypress="return isNumberKey(event)" />
</td>
</tr>

<tr>
<td align="left">
S.553:*
</td>
<td align="left"><select name="yearly" id="yearly" style="width:110px;" >
  <option value=""></option>
  <option value="first-half">February</option>
  <option value="Second-half">August</option>
</select></td>
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
CTC Fee (=N=):
</td>
<td align="left">
<input readonly="readonly" placeholder="2000" type="text" id="ctc" style="background-color:#eee; color:red; width:200px;" maxlength="100"/>
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