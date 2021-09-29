
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
		      $('#postBnCN1').show();
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
			 $('#postBnCN2').show();
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
			 $('#postBnCN3').show();
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
			 $('#postBnCN4').show();
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
			 var officers = $('#officers').val();
			 var penalty = 1000 * (parseInt(officers));
			 $('.prices').hide();			 
		
			 var x = document.getElementById("postBnCN5");
			 x.innerHTML = "=N=" + (penalty + 2000);
			 check = 1;
			 $('#postBnCN5').show();
			 $('#details05').show();
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
			 var officers = $('#officers').val();
			 var penalty = 1000 * (parseInt(officers));
			 $('.prices').hide();			 
		
			 var x = document.getElementById("postBnCN6");
			 x.innerHTML = "=N=" + (penalty + 2000);
			 check = 1;
			 $('#postBnCN6').show();
			 $('#details05').show();
			 
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
			 var officers = $('#officers').val();
			 var penalty = 1000 * (parseInt(officers));
			 $('.prices').hide();			 
		
			 var x = document.getElementById("postBnCN7");
			 x.innerHTML = "=N=" + (penalty + 2000);
			 check = 1;
			 $('#postBnCN7').show();
			 $('#details05').show();
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
			 var officers = $('#officers').val();
			 var penalty = 1000 * (parseInt(officers));
			 $('.prices').hide();			 
		
			 var x = document.getElementById("postBnCN8");
			 x.innerHTML = "=N=" + (penalty + 2000);
			 check = 1;
			 $('#postBnCN8').show();
			 $('#details05').show();
		  }
	  });
	$('#select-transaction_9').change(function()
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
			 var officers = $('#officers').val();
			 var penalty = 1000 * (parseInt(officers));
			 $('.prices').hide();			 
		
			 var x = document.getElementById("postBnCN9");
			 x.innerHTML = "=N=" + (penalty + 2000);
			 check = 1;
			 $('#postBnCN9').show();
			 $('#details05').show();
		  }
	  });
	$('#select-transaction_0').change(function()
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
			 var officers = $('#officers').val();
			 var penalty = 1000 * (parseInt(officers));
			 $('.prices').hide();			 
		
			 var x = document.getElementById("postBnCN0");
			 x.innerHTML = "=N=" + (penalty + 2000);
			 check = 1;
			 $('#postBnCN0').show();
			 $('#details05').show();
		  }
	  });
	  
	$('#select-transaction_01').change(function()
	  {
		  
		  
		  var filing = 0;
		  var penalty = 0;
		  $('.prices').hide();
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") ||  ($("#officers").val()=="") ||($("#company").val()=="") || 
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			 check = 1;
			 var temp = $("#post_llc_changeOfName_resDate").val();
			 var today = new Date();
			 var selected = new Date(temp);
			 var result = DateDiff(today,selected);
			 filing = 7000;			 
			 if(result > 28)
			 {
				 var elapsed = parseInt(result) - 28;
				 var officers = $('#officers').val();
				 var penalty = (50  * (parseInt(officers))) * elapsed;
				
				 
				 
			 }
			 var x = document.getElementById("postBnCN01");
			 x.innerHTML = "=N=" + (filing + penalty);
			 check = 1;
			 $('#postBnCN01').show();
			 
			 var y = document.getElementById("penalty01");
			 y.innerHTML = "Penalty =" + (penalty);			 
			 $('#penalty01').show();
			 $('#details01').show();
			 
	
		  }
	  });
	  
	  $('#select-transaction_02').change(function()
	  {
		  
		  
		  var filing = 0;
		  var penalty = 0;
		  $('.prices').hide();
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") ||  ($("#officers").val()=="") ||($("#company").val()=="") || 
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			 check = 1;
			 var temp = $("#post_llc_changeOfName_resDate").val();
			 var today = new Date();
			 var selected = new Date(temp);
			 var result = DateDiff(today,selected);
			 filing = 8000;			 
			 if(result > 28)
			 {
				 var elapsed = parseInt(result) - 28;
				 var officers = $('#officers').val();
				 var penalty = (50  * (parseInt(officers))) * elapsed;
				
				 
				 
			 }
			 var x = document.getElementById("postBnCN02");
			 x.innerHTML = "=N=" + (filing + penalty);
			 check = 1;
			 $('#postBnCN02').show();
			 
			 var y = document.getElementById("penalty02");
			 y.innerHTML = "Penalty =" + (penalty);			 
			 $('#penalty02').show();
			 $('#details02').show();
			 
	
		  }
	  });
	  
	  $('#select-transaction_03').change(function()
	  {
		  
		  
		  var filing = 0;
		  var penalty = 0;
		  $('.prices').hide();
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") ||  ($("#officers").val()=="") ||($("#company").val()=="") || 
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			 check = 1;
			 var temp = $("#post_llc_changeOfName_resDate").val();
			 var today = new Date();
			 var selected = new Date(temp);
			 var result = DateDiff(today,selected);
			 filing = 8000;			 
			 if(result > 28)
			 {
				 var elapsed = parseInt(result) - 28;
				 var officers = $('#officers').val();
				 var penalty = (50  * (parseInt(officers))) * elapsed;
				
				 
				 
			 }
			 var x = document.getElementById("postBnCN03");
			 x.innerHTML = "=N=" + (filing + penalty);
			 check = 1;
			 $('#postBnCN03').show();
			 
			 var y = document.getElementById("penalty03");
			 y.innerHTML = "Penalty =" + (penalty);			 
			 $('#penalty03').show();
			 $('#details03').show();
			 
	
		  }
	  });
	  
	  $('#select-transaction_04').change(function()
	  {
		  
		  
		  var filing = 0;
		  var penalty = 0;
		  $('.prices').hide();
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") ||  ($("#officers").val()=="") ||($("#company").val()=="") || 
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			 check = 1;
			 var temp = $("#post_llc_changeOfName_resDate").val();
			 var today = new Date();
			 var selected = new Date(temp);
			 var result = DateDiff(today,selected);
			 filing = 3000;			 
			 if(result > 28)
			 {
				 var elapsed = parseInt(result) - 28;
				 var officers = $('#officers').val();
				 var penalty = (50  * (parseInt(officers))) * elapsed;
				
				 
				 
			 }
			 var x = document.getElementById("postBnCN04");
			 x.innerHTML = "=N=" + (filing + penalty);
			 check = 1;
			 $('#postBnCN04').show();
			 
			 var y = document.getElementById("penalty04");
			 y.innerHTML = "Penalty =" + (penalty);			 
			 $('#penalty04').show();
			 $('#details04').show();
			 
	
		  }
	  });
	  
	  $('#select-transaction_05').change(function()
	  {
		  
		  
		  var filing = 0;
		  var penalty = 0;
		  $('.prices').hide();
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") ||  ($("#officers").val()=="") ||($("#company").val()=="") || 
		  ($(  "#post_llc_changeOfName_resDate").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  check = 0;
			  this.checked = false;
		  }
		  else
		  {
			 check = 1;
			 var temp = $("#post_llc_changeOfName_resDate").val();
			 var today = new Date();
			 var selected = new Date(temp);
			 var result = DateDiff(today,selected);
			 filing = 1000;			 
			 if(result > 90)
			 {
				 var elapsed = parseInt(result) - 28;
				 var officers = $('#officers').val();
				 var penalty = (50  * (parseInt(officers))) * elapsed;
				
				 
				 
			 }
			 var x = document.getElementById("postBnCN05");
			 x.innerHTML = "=N=" + (filing + penalty);
			 check = 1;
			 $('#postBnCN05').show();
			 
			 var y = document.getElementById("penalty05");
			 y.innerHTML = "Penalty =" + (penalty);			 
			 $('#penalty05').show();
			 $('#details05').show();
			 
	
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
				 document.getElementById("menu").style.display = "none";
				 document.getElementById("print").style.display = "none";
				 document.getElementById("disp").style.display = "block";
				 window.print();
				 location.reload();
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
Post Registration Business Name
</legend>
<table width="500" style="font-family:cambria; font-size:15px; color:#333333" height="auto" cellpadding="4" cellspacing="1"> 
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
<input name="rcno" type="text" id="rcno" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Agent ID:*
</td>
<td align="left">
<input name="agentID" type="text" id="agentID" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Company Name:*
</td>
<td align="right">
<input name="company" type="text" id="company" style="width:300px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Application Date:
</td>
<td align="left">
<input readonly="readonly" type="text" id="post_llc_changeOfName_resDate" style="width:185px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Number of proprietors (if applicable):
</td>
<td align="left">
<input name="officers" type="text" id="officers" style="width:200px;" maxlength="100"/>
</td>
</tr>
</table>

<fieldset style="width:780px; background-color:#f5f5f5">
<legend align="left" style="font-size:20px; font-family:Cambria; color:#9ac119; font-weight:bold">
Select Transaction
</legend>

<form id="form1" name="form1" method="post" action="">
  <table width="550" cellpadding="4"  style="font-family:cambria; font-size:15px; color:#333333">
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="rc-bn" id="select-transaction_01" />
        Filing of notice of change of business name</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN01" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">

        </div>
        </td>
    </tr>
	
	<tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="rc-bn" id="select-transaction_02" />
        Filing of notice of change in business address</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN02" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 8,000
        </div>
        </td>
    </tr>
	
	<tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="rc-bn" id="select-transaction_03" />
        Filing of notice of change of object</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN03" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 8,000
        </div>
        </td>
    </tr>
	
	<tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="rc-bn" id="select-transaction_04" />
        Filing of notice of change in proprietorship</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN04" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 3,000
        </div>
        </td>
    </tr>
	
	<tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="rc-bn" id="select-transaction_05" />
        Filing of notice of cessation of business</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN05" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 1,000
        </div>
        </td>
    </tr>
  
  
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="rc-bn" id="select-transaction_1" />
        CTC of Annual Returns</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN1" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-n" id="select-transaction_2" />
        Filing of other documents (miscellaneous)</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN2" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 1,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-p" id="select-transaction_3" />
        CTC of Business Name Certificate of Registration</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN3" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 5,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-a" id="select-transaction_4" />
        CTC of other documents</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN4" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000 (Per Document)
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="ctc-bn" id="select-transaction_5" />
        Correction of proprietors name</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN5" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_6" />
        Proper placement of passport photograph</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN6" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
       
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="bn-search" id="select-transaction_7" />
        Change of proprietors signature</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN7" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-b" id="select-transaction_8" />
        Change/Correction proprietors residential address</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN8" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="jacket" id="select-transaction_9" />
        Change/Correction proprietors email</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN9" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="filing-ar" id="select-transaction_0" />
        Change/Correction proprietors phone number</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN0" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        
        </div>
        </td>
    </tr>
	
	<tr>
        <td align="right" colspan="2">
        <div class="prices" id="details01" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        CTC of BN Form = 2,000
		<div class="prices" id="penalty01" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
		</div> 
        </div>
		<div class="prices" id="details02" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        Filing = 1,000 | Certificate = 5,000 | CTC of Form = 2,000
		<div class="prices" id="penalty02" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
		</div> 
        </div>
		<div class="prices" id="details03" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        Filing = 1,000 | Certificate = 5,000 | CTC of Form = 2,000
		<div class="prices" id="penalty03" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
		</div> 
        </div>
		<div class="prices" id="details04" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        Filing = 1,000 | CTC of Form = 2,000
		<div class="prices" id="penalty04" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
		</div> 
        </div>
		<div class="prices" id="details05" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        Filing = 1,000
		<div class="prices" id="penalty05" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
		</div> 
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