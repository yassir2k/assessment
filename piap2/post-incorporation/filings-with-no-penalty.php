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
<title>Filings With No Penalty</title>
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
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			   $('.prices').hide();
			   if( $('#company_type').val() == "LLC" )
			   {
				   if(result > 90)
				   {
				       $('#postBnCN1_LLC_P').show();
				   }
				   else
				   {
					   $('#postBnCN1').show();
				   }
			   }
			   else
			   {
				   if(result > 90)
				   {
					   $('#postBnCN_PLC_P').show();
				   }
				   else
				   {
				       $('#postBnCN').show();
				   }
			   }
		  }
	  });
	$('#select-transaction_1').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			   $('.prices').hide();
			  if( $('#company_type').val() == "LLC" )
			   {
				   if(result > 14)
				   {
				       $('#postBnCN2_LLC_P').show();
				   }
				   else
				   {
					   $('#postBnCN2').show();
				   }
			   }
			   else
			   {
				   if(result > 14)
				   {
					   $('#postBnCN2_PLC_P').show();
				   }
				   else
				   {
				       $('#postBnCN2_PLC').show();
				   }
			   }
		  }
	  });
	$('#select-transaction_2').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			   $('.prices').hide();
			   if(result >14)
			   {
				   $('#postBnCN3_P').show();
			   }
			   else
			   {
			      $('#postBnCN3').show();
			   }
		  }
	  });
	$('#select-transaction_3').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			  $('.prices').hide();
			  $('#postBnCN4').show();
		  }
	  });
	$('#select-transaction_4').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN5').show();
		  }
	  });
	
	$('#select-transaction_5').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			 $('.prices').hide();
			 $('#postBnCN6').show();
		  }
	  });
	
     $('#select-transaction_5_M').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			 $('.prices').hide();
			 $('#postBnCN6_M').show();
		  }
	  });
	$('#select-transaction_6').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN7').show();
		  }
	  });
	$('#select-transaction_7').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			 $('.prices').hide();
			 $('#postBnCN8').show();
		  }
	  });
	$('#select-transaction_8').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			 $('.prices').hide();
			 $('#postBnCN9').show();
		  }
	  });
	$('#select-transaction_9').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN0').show();
		  }
	  });
	$('#select-transaction_10').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			   $('.prices').hide();
			   if(result > 14)
			   {
				   $('#postBnCN10_P').show();
			   }
			   else
			   {
			       $('#postBnCN10').show();
			   }
		  }
	  });
	$('#select-transaction_11').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN11').show();
		  }
	  });
	$('#select-transaction_12').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN12').show();
		  }
	  });
	 $('#select-transaction_13').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN13').show();
		  }
	  });
	$('#select-transaction_14').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN14').show();
		  }
	  });
	
	$('#print').click(function()
	 {
		 if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		 || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
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
<fieldset style="width:800px; background-color:#f5f5f5">
<legend align="left" style="font-size:20px; font-family:Cambria; color:#9ac119; font-weight:bold" >
Filings With No Penalty &amp; Miscelleaneous Filings </legend>
<table width="400" style="font-family:cambria; font-size:13px; color:#333333" height="auto" cellpadding="4" cellspacing="1">
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
<input type="text" id="rcno" style="width:200px;" maxlength="100" onkeypress="return isNumberKey(event)" />
</td>
</tr>

<tr>
<td align="left">
Customer ID:*
</td>
<td align="right">
<input type="text" id="custId" style="width:200px;" maxlength="100" />
</td>
</tr>

<tr>
<td align="left">
Company Name:*
</td>
<td align="right">
<input type="text" id="company" name="company" style="width:200px;" maxlength="100" />
</td>
</tr>

<tr>
<td align="left">
Amount Secured:*
</td>
<td align="right">
<input type="text" id="amount_sec" style="width:200px" maxlength="100" onkeypress="return isNumberKey(event)" />
</td>
</tr>

<tr>
<td align="left">
Resolution Date:*
</td>
<td align="right">
<input readonly="readonly" type="text" id="post_llc_changeOfName_resDate" style="width:185px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Company Type:*
</td>
<td align="right">
<select id="company_type" style="width:110px;" >
    <option value=""></option>
    <option value="LLC">LLC</option>
    <option value="PLC">PLC</option>
    </select>
</td>
</tr>

<tr>
<td align="left">
Stamp Duty Receipt:*
</td>
<td align="right">
<input type="text" id="stamp" style="width:200px;" maxlength="100" />
</td>
</tr>
</table>

<fieldset style="width:750px; background-color:#f5f5f5">
<legend align="left" style="font-size:20px; font-family:Cambria; color:#9ac119; font-weight:bold">
Select Transaction
</legend>

<form id="form1" name="form1" method="post" action="">
  <table width="400" cellpadding="4" cellspacing="1"  style="font-family:cambria; font-size:13px; color:#333333">
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="charges" id="select-transaction_0" />
        Charges</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN1" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
        </div>
        <div class="prices" id="postBnCN1_LLC_P" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 15,000
        </div>
        <div class="prices" id="postBnCN" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 20,000
        </div>
        <div class="prices" id="postBnCN_PLC_P" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 30,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="d-o-r" id="select-transaction_1" />
        Deed Of Release</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN2" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 5,000
        </div>
        <div class="prices" id="postBnCN2_LLC_P" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
        </div>
        <div class="prices" id="postBnCN2_PLC" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
        </div>
        <div class="prices" id="postBnCN2_PLC_P" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 15,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="t-o-s" id="select-transaction_2" />
        Transfer Of Shares</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN3" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000
        </div>
        <div class="prices" id="postBnCN3_P" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 4,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="m-o-p" id="select-transaction_3" />
        Memorandum Of Pledge/Hypothecation</label>
      </td>
         <td align="right">
        <div class="prices" id="postBnCN4" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="r-o-c" id="select-transaction_4" />
        Reinstatement Of Company Within 20 Years</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN5" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 25,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="searches" id="select-transaction_5" />
        Online Search</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN6" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 1,000
        </div>
        </td>
    </tr>
    
       <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="searches" id="select-transaction_5_M" />
        Manual Search</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN6_M" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000
        </div>
        </td>
    </tr>    
    
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-cert" id="select-transaction_6" />
        CTC Of Certificates</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN7" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-inc" id="select-transaction_7" />
        CTC Of Increase & Mortgages</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN8" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-mem" id="select-transaction_8" />
        CTC Of Memorandum & Article</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN9" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 3,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_9" />
        CTC Of Forms</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN0" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000
        </div>
        </td>
    </tr>
    
     <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_10" />
        Other Miscellaneous</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN10" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000
        </div>
         <div class="prices" id="postBnCN10_P" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 7,000
        </div>       
        </td>
    </tr>    
    
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_11" />
        Filing Of Notice Of Merger</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN11" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 50,000
        </div>
        </td>
    </tr>
    
    
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_12" />
        Filing Special Resolution For Merger</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN12" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 20,000
        </div>       
        </td>
    </tr>
    
    
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_13" />
        Filing of Other Documents Relating To Merger</label>
        </td>
    <td align="right"><div class="prices" id="postBnCN13" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
           =N= 10,000
         </div>       
        </td>
    </tr>
    
    
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_14" />
        Letter Of Good Standing</label></td>
    <td align="right"><div class="prices" id="postBnCN14" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
           =N= 10,000
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