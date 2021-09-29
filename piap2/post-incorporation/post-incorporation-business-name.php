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
<title>Post Incorporation Business Name</title>
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
	var current = new Date();
	var day = current.getDate();
	var month = current.getMonth() + 1;
	var year = current.getFullYear();
	var dateString = month + "/" + day + "/" + year;
	$('#post_llc_changeOfName_resDate').val(dateString)
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
	$('.prices').hide();
	$('#select-transaction_0').change(function()
	  {
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") || 
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			  $('.prices').hide();
		      $('#postBnCN1').show();
			  check = 1;
		  }
	  });
	$('#select-transaction_1').change(function()
	  {
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") ||
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			 $('.prices').hide();
			 $('#postBnCN2').show();
			 check = 1;
		  }
	  });
	$('#select-transaction_2').change(function()
	  {
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") || 
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			 $('.prices').hide();
			 $('#postBnCN3').show();
			 check = 1;
		  }
	  });
	$('#select-transaction_3').change(function()
	  {
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") || 
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			 $('.prices').hide();
			 $('#postBnCN4').show();
			 check = 1;
		  }
	  });
	$('#select-transaction_4').change(function()
	  {
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") ||
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			 $('.prices').hide();
			 $('#postBnCN5').show();
			 check = 1;
		  }
	  });
	$('#select-transaction_5').change(function()
	  {
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") || 
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  this.checked = false;
			  check = 0;
		  }
		  else
		  {
			 $('.prices').hide();
			 $('#postBnCN6').show();
			 check = 1;
		  }
	  });
	$('#select-transaction_6').change(function()
	  {
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") || 
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  this.checked = false;
			  check = 0;
		  }
		  else
		  {
			 $('.prices').hide();
			 $('#postBnCN7').show();
			 check = 1;
		  }
	  });
	$('#select-transaction_7').change(function()
	  {
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") || 
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  this.checked = false;
			  check = 0;
		  }
		  else
		  {
			 $('.prices').hide();
			 $('#postBnCN8').show();
			 check = 1;
		  }
	  });
	$('#select-transaction_8').change(function()
	  {
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") || 
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  this.checked = false;
			  check = 0;
		  }
		  else
		  {
			 $('.prices').hide();
			 $('#postBnCN9').show();
			 check = 1;
		  }
	  });
	$('#select-transaction_9').change(function()
	  {
		  $('.prices').hide();
		  var total = 0;
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
		  var currentYear = today.getFullYear();
		  var currentMonth = today.getMonth();
	      var selected = new Date(temp);
		  var dateString = $("#arYear").val();
		  var dateArray = dateString.split(",");
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") || ($("#arYear").val()=="") || 
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  this.checked = false;
			  check = 0;
		  }
		  else
		  {
			  var i = 0;
			  while(dateArray[i]!= null)
			  {
				  if( (dateArray[i].length != 4) || (isNaN(dateArray[i])))
				  {
	alert("Illegal Year(s) of annual returns.\nPlease enter a valid format for the years as indicated on the right side of the entry box");
					  $("#arYear").val("");
					  this.checked = false;
					  check = 0;
					  return;
				  }
				  else
				  {
				      i++;
				  }
			  }
			  //Now Calculating Annual Returns For Each Year
			  var count = i;
			  var sabonYear = new Date(dateArray[0]);
			  var shekaru = new Array();
			  for(i=0;i<count;i++)
			  {
				  sabonYear = new Date(dateArray[i]);
				  shekaru[i] = sabonYear.getFullYear();
				  if(shekaru[i] < 2003)
				  {
					  alert(shekaru[i] + " is less than 2003. You Must enter the year(s) from 2003 to " + currentYear);
					  check = 0;
					  return;
				  }
				  else if((shekaru[i] >= 2003) && (shekaru[i] <= 2012))
				  {
					  total+=2800;
					  alert(shekaru[i]+" Annual Returns total is = 2800")
				  }
				  else if((shekaru[i] > currentYear))
				  {
					  alert("Annual returns cannot be calculated for the year "+shekaru[i]+".\n Enter a Year between 2003 and "+currentYear);
					  this.checked = false;
					  check = 0;
					  return;
				  }
				  else//From 2013 onward
				  {
					  if(shekaru == (currentYear - 1))
					  {
						  if(currentMonth >= 7)//Meaning Penalty is due from july down to december of the following year
						  {
							  total+=3500;
						  }
						  else
						  {
							  total+=1000;
						  }
					  }
					  else //Current Year
					  {
						  total+=1000;
					  }
				  }
			  }
			 var x = document.getElementById("postBnCN0");
			 x.innerHTML = "=N=" + total;
			 check = 1;
			 $('#postBnCN0').show();
		  }
	  });
$('#print').click(function()
	 {
		 if(check < 1)
		 {
			 alert("Select A Transaction First Before Printing");
			 return false;
		 }
		 else
		 {
			 window.print();
		 }
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
Post Incorporation Business Name
</legend>
<table width="500" style="font-family:cambria; font-size:13px; color:#333333" height="auto" cellpadding="4" cellspacing="1"> 
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
<input name="rcno" type="text" id="rcno" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Agent ID:*
</td>
<td align="right">
<input name="agentID" type="text" id="agentID" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Company Name:*
</td>
<td align="right">
<input name="company" type="text" id="company" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Resolution Date:*
</td>
<td align="right">
<input disabled="disabled" readonly="readonly" type="text" id="post_llc_changeOfName_resDate" style="width:188px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Year(s) Of Annual Returns (if applicable):*
</td>
<td align="right">
<input name="arYear" type="text" id="arYear" style="width:200px;" maxlength="100"/>
</td>
</tr>
</table>

<fieldset style="width:780px; background-color:#f5f5f5">
<legend align="left" style="font-size:20px; font-family:Cambria; color:#9ac119; font-weight:bold">
Select Transaction
</legend>

<form id="form1" name="form1" method="post" action="">
  <table width="550" cellpadding="4"  style="font-family:cambria; font-size:13px; color:#333333">
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="rc-bn" id="select-transaction_0" />
        Registration Of Business Name</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN1" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-n" id="select-transaction_1" />
        Change Of Name</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN2" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 7,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-p" id="select-transaction_2" />
        Change Of Partnership</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN3" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 3,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-a" id="select-transaction_3" />
        Change Of Business Address</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN4" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 7,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="ctc-bn" id="select-transaction_4" />
        CTC Of Business Name Certificate</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN5" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 7,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_5" />
        CTC Of Form II Or Form CAC/A1</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN6" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000 (Per Document)
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="bn-search" id="select-transaction_6" />
        Business Name Search</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN7" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 1,000 (Per Business Name)
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-b" id="select-transaction_7" />
        Cessation Of Business</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN8" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 1,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="jacket" id="select-transaction_8" />
        Purchase Of Business Name Registration File Jacket</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN9" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 250
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="filing-ar" id="select-transaction_9" />
        Filing Of Annual Returns</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN0" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        
        </div>
        </td>
    </tr>

    <tr>
    <td colspan="2" align="center">
    <input type="button" style="color:#333; font-family:cambria;" value="Print" id="print"  />
    </td>
    </tr>
  </table>
</form>
</fieldset>
</fieldset>
<br />
</center>
</div>
<div id="footer">
</div>
</body>
</html>