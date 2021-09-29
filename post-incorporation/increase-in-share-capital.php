
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
		  || ($('#type').val()=="") || ($('#current_shares').val()=="") || ($('#amount_inc').val()==""))
		 {
			 alert("Empty or Inappropriate Field(s) Found. Ensure Mandatory Fields Are Properly Entered");
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
		 var charges = 0;
		if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#post_llc_changeOfName_resDate').val()=="")
		  || ($('#type').val()=="") || ($('#current_shares').val()=="") || ($('#amount_inc').val()=="") || (isNaN($('#current_shares').val())) || (isNaN($('#amount_inc').val())))
		 {
			 alert("Empty or Inappropriate Field(s) Found. Ensure Mandatory Fields Are Properly Entered");
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
				 if( (parseInt($('#current_shares').val()) >= 10000) && (parseInt($('#current_shares').val()) < 1000000))
				 {
					 
					 if( parseInt($('#amount_inc').val()) <= 1000000 )
					 {
						charges += 10000;
						$('#filing').val(10000);
					 }
					 if((parseInt($('#amount_inc').val()) > 1000000) && (parseInt($('#amount_inc').val()) <= 500000000)  ){
						 
						  var fee = $('#amount_inc').val() - 1000000;
						  var div = parseInt(fee/1000000);
						  var mod = (fee%1000000);
						  charges += 10000;
						  if(div > 0){
							  
							  charges += (div * 5000);
						  }
						  if(mod > 0){
							  
							  charges += 5000;
						  }
						 					 
					 }
					 
					 if(parseInt($('#amount_inc').val()) > 500000000){
						 

						 	  var ddd = 500000000 - $('#current_shares').val();

						 	  var div1 = parseInt(ddd/1000000);
							  var mod1 = (ddd%1000000);
							 
							  
							  if(div1 > 0){
								  
								  charges += (div1 * 5000);
							  }
							  if(mod1 > 0){
								  
								  charges += 5000;
							  }

							  var fee = $('#amount_inc').val() - 500000000;
							  var div = parseInt(fee/1000000);
							  var mod = (fee%1000000);
							  
							  if(div > 0){
								  
								  charges += (div * 7500);
							  }
							  if(mod > 0){
								  
								  charges += 7500;
							  }
							 				 
						}
					 
				 }
				
				if( parseInt($('#current_shares').val()) >= 1000000 && parseInt($('#current_shares').val()) <= 499999999 )
					 {
						
						 
						 if(parseInt($('#amount_inc').val()) <= 500000000){
						  
						   //alert("here");
							  var fee = $('#amount_inc').val() - $('#current_shares').val();
							  var div = parseInt(fee/1000000);
							  var mod = (fee%1000000);
							 
							  
							  if(div > 0){
								  
								  charges += (div * 5000);
							  }
							  if(mod > 0){
								  
								  charges += 5000;
							  }
							
							 
							 
						 
						 }
						 
						if(parseInt($('#amount_inc').val()) > 500000000){
						 

						 	  var ddd = 500000000 - $('#current_shares').val();

						 	  var div1 = parseInt(ddd/1000000);
							  var mod1 = (ddd%1000000);
							 
							  
							  if(div1 > 0){
								  
								  charges += (div1 * 5000);
							  }
							  if(mod1 > 0){
								  
								  charges += 5000;
							  }

							  var fee = $('#amount_inc').val() - 500000000;
							  var div = parseInt(fee/1000000);
							  var mod = (fee%1000000);
							  
							  if(div > 0){
								  
								  charges += (div * 7500);
							  }
							  if(mod > 0){
								  
								  charges += 7500;
							  }
							 				 
						}
						
						 
					 }
				 
				 if(($('#current_shares').val() >= 500000000))
				 {
					  var fee = $('#amount_inc').val() - $('#current_shares').val();
					  var div = parseInt(fee/1000000);
					  var mod = (fee%1000000);
					  if(div > 0){
						  
						  charges += (div * 7500);
					  }
					  if(mod > 0){
						  
						  charges += 7500;
					  }
					 
				 }
				 
			 $('#filing').val(charges);
			 
			 }//End Of LLC Section
			 ;
			 if(($('#type').val()== "PLC") )
			 {
					 if( (parseInt($('#current_shares').val()) >= 10000) && (parseInt($('#current_shares').val()) < 1000000))
				 {
					 
					 if( parseInt($('#amount_inc').val()) <= 1000000 )
					 {
						charges += 20000;
						$('#filing').val(20000);
					 }
					 if(parseInt($('#amount_inc').val()) > 1000000 ){
						 
						  var fee = $('#amount_inc').val() - 1000000;
						  var div = parseInt(fee/1000000);
						  var mod = (fee%1000000);
						  charges += 20000;
						  if(div > 0){
							  
							  charges += (div * 10000);
						  }
						  if(mod > 0){
							  
							  charges += 10000;
						  }
						 $('#filing').val(charges);					 
					 }
				 }
				
				if( parseInt($('#current_shares').val()) >= 1000000 && parseInt($('#current_shares').val()) <= 499999999 )
					 {
						
						 
						 if(parseInt($('#amount_inc').val()) <= 500000000){
						  
						   //alert("here");
							  var fee = $('#amount_inc').val() - $('#current_shares').val();
							  var div = parseInt(fee/1000000);
							  var mod = (fee%1000000);
							 
							  
							  if(div > 0){
								  
								  charges += (div * 10000);
							  }
							  if(mod > 0){
								  
								  charges += 10000;
							  }
							
							 $('#filing').val(charges);
							 
						 
						 }
						 
						if(parseInt($('#amount_inc').val()) > 500000000){


							var ddd = 500000000 - $('#current_shares').val();

						 	  var div1 = parseInt(ddd/1000000);
							  var mod1 = (ddd%1000000);
							 
							  
							  if(div1 > 0){
								  
								  charges += (div1 * 10000);
							  }
							  if(mod1 > 0){
								  
								  charges += 10000;
							  }
						 
							  var fee = $('#amount_inc').val() - 500000000;
							  var div = parseInt(fee/1000000);
							  var mod = (fee%1000000);
							  //charges += 10000; why is this here?
							  if(div > 0){
								  
								  charges += (div * 15000);
							  }
							  if(mod > 0){
								  
								  charges += 15000;
							  }
							 $('#filing').val(charges);					 
						}
						
						 
					 }
				 
				 if(($('#current_shares').val() >= 500000000))
				 {
					  var fee = $('#amount_inc').val() - $('#current_shares').val();
					  var div = parseInt(fee/1000000);
					  var mod = (fee%1000000);
					  if(div > 0){
						  
						  charges += (div * 15000);
					  }
					  if(mod > 0){
						  
						  charges += 15000;
					  }
					 $('#filing').val(charges);
				 }
			 };//End Of PLC Section
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
Increase In Share Capital
</legend>
<table style="font-family:cambria; font-size:15px; color:#333333" width="auto" height="auto" cellpadding="4" cellspacing="1">
<tr>
<td align="left">
RC Number:
</td>
<td align="left">
<input type="text" id="rcno" style="width:200px;" maxlength="100" onkeypress="return isNumberKey(event)" />
</td>
</tr>

<tr>
<td align="left">
Customer ID:
</td>
<td align="left">
<input type="text" id="custId" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Company Name:
</td>
<td align="right">
<input type="text" id="company" style="width:300px;" maxlength="100"/>
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
Current Shares:
</td>
<td align="left">
<input type="text" id="current_shares" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Proposed Shares:
</td>
<td align="left">
<input type="text" id="amount_inc" style="width:200px;" maxlength="100"/>
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