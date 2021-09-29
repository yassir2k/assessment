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
<title>Post Incorporation Incorporated Trustees</title>
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
		     $('#postItCN1').show();
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
		     $('#postItCN2').show();
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
		     $('#postItCN3').show();
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
		     $('#postItCN4').show();
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
		     $('#postItCN5').show();
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
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			 $('.prices').hide();
		     $('#postItCN6').show();
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
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			 $('.prices').hide();
		     $('#postItCN7').show();
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
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			 $('.prices').hide();
		     $('#postItCN8').show();
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
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			 $('.prices').hide();
		     $('#postItCN9').show();
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
			  check = 0;
			  this.checked = false;
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
				  if(shekaru[i] < 1900)
				  {
					  alert(shekaru[i] + " is less than Year 1900. You Must enter the year(s) from 1900 to " + currentYear);
					  this.checked = false;
					  check = 0;
					  return;
				  }
				  else if((shekaru[i] >= 1900) && (shekaru[i] <= 2012))
				  {
					  total+=6000;
				  }
				  else if((shekaru[i] > currentYear))
				  {
					  alert("Annual returns cannot be calculated for the year "+shekaru[i]+".\n Enter a Year between 1900 and "+currentYear);
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
							  total+=6000;
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
			 var x = document.getElementById("postItCN0");
			 x.innerHTML = "=N=" + total;
			 $('#postItCN0').show();
			 check = 1;
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
Post Incorporation Incorporated Trustees
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
<input name="rcno" type="text" id="rcno" style="width:200px;" maxlength="100" onkeypress="return isNumberKey(event)" />
</td>
</tr>

<tr>
<td align="left">
Agent ID:*
</td>
<td align="right">
<input name="agentID" type="text" id="agentID" style="width:200px;" maxlength="100" />
</td>
</tr>

<tr>
<td align="left">
Company Name:*
</td>
<td align="right">
<input name="company" type="text" id="company" style="width:200px;" maxlength="100" />
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
Year(s) Of Annual Returns (If applicable):*
</td>
<td align="right">
<input name="arYear" type="text" id="arYear" style="width:200px;" maxlength="100" />
</td>
</tr>
</table>

<fieldset style="width:780px; background-color:#f5f5f5">
<legend align="left" style="font-size:20px; font-family:Cambria; color:#9ac119; font-weight:bold">
Select Transaction
</legend>

<form id="form1" name="form1" method="post" action="">
  <table width="520" cellpadding="4" cellspacing="1"  style="font-family:cambria; font-size:13px; color:#333333">
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="rc-bn" id="select-transaction_0" />
        Registration Of Incorporated  Trustees</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN1" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 30,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-n" id="select-transaction_1" />
        Change Of Name</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN2" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-p" id="select-transaction_2" />
        Change Of Trustees</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN3" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-a" id="select-transaction_3" />
        Incorporated Trustees Search</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN4" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="ctc-it" id="select-transaction_4" />
        CTC Of Incorporated Trustees Certificate</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN5" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="ctc-docs" id="select-transaction_5" />
        CTC Of Other Documents</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN6" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000 (Per Document)
        </div>
        </td>
    </tr>
    
<tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="ctc-docs" id="select-transaction_5" />
        Constitution</label>
      </td>
        <td align="right">
        <div class="prices" id="postItConst" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 5,000 
        </div>
        </td>
    </tr>
    
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="filing-dot" id="select-transaction_6" />
        Filing Of Dissolution Of Trustees</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN7" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 5,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="a-o-c" id="select-transaction_7" />
        Amendment Of Constitution</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN8" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 6,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="miscellaneous" id="select-transaction_8" />
        Miscellaneous</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN9" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 1,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="filing-ar-it" id="select-transaction_9" />
        Filing Of Annual Returns</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN0" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        
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