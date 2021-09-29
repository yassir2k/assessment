
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
		     $('#postItCN0').show();
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
		     $('#postItCN1').show();
			  $('#details06').show();
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
		     $('#postItCN2').show();
			 $('#details07').show();
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
		     $('#postItCN3').show();
			
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
		     $('#postItCN4').show();
			  $('#details01').show();
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
		     $('#postItCN5').show();
			 $('#details05').show();
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
		     $('#postItCN6').show();
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
		     $('#postItCN7').show();
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
		     $('#postItCN8').show();
			 check = 1;
		  }
	  });
	  	$('#select-transaction_9').change(function()
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
	  	$('#select-transaction_10').change(function()
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
		     $('#postItCN10').show();
			 check = 1;
		  }
	  });
	  	$('#select-transaction_11').change(function()
	  {
		 if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#officers").val()=="") || ($("#company").val()=="") || 
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
		
			 var x = document.getElementById("postItCN11");
			 x.innerHTML = "=N=" + (penalty + 2000);
			 check = 1;
			 $('#postItCN11').show();
			 $('#details04').show();
			
		  }
	  });
	  	$('#select-transaction_12').change(function()
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
		     $('#postItCN12').show();
			 
			 check = 1;
		  }
	  });
	  
	  $('#select-transaction_13').change(function()
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
		     $('#postItCN13').show();
			 $('#details05').show();
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
<fieldset style="width:800px; background-color:#f5f5f5">
<legend align="left" style="font-size:25px; font-family:Cambria; color:#9ac119; font-weight:bold">
Post Incorporation Incorporated Trustees
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
<input name="rcno" type="text" id="rcno" style="width:200px;" maxlength="100" onkeypress="return isNumberKey(event)" />
</td>
</tr>

<tr>
<td align="left">
Agent ID:*
</td>
<td align="left">
<input name="agentID" type="text" id="agentID" style="width:200px;" maxlength="100" />
</td>
</tr>

<tr>
<td align="left">
Company Name:*
</td>
<td align="right">
<input name="company" type="text" id="company" style="width:300px;" maxlength="100" />
</td>
</tr>

<tr>
<td align="left">
Resolution Date:*
</td>
<td align="left">
<input disabled="disabled" readonly="readonly" type="text" id="post_llc_changeOfName_resDate" style="width:188px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Number of trustees (if applicable):
</td>
<td align="left">
<input name="officers" type="text" id="officers" style="width:200px;" maxlength="100"/>
</td>
</tr>


</table>
<h1 id='disp' align="center" style="display: none;font-family: Calligrapher;
font-size: 45px; ">Corporate Affairs Commission</h1>
<fieldset style="width:780px; background-color:#f5f5f5">
<legend align="left" style="font-size:20px; font-family:Cambria; color:#9ac119; font-weight:bold">
Select Transaction
</legend>

<form id="form1" name="form1" method="post" action="">
  <table width="520" cellpadding="4" cellspacing="1"  style="font-family:cambria; font-size:15px; color:#333333">
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="rc-bn" id="select-transaction_0" />
        Filing of notice of change of name</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN0" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 15,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-n" id="select-transaction_1" />
        Filing of notice of change in trustees</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN1" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 12,000
        </div>
        </td>
    </tr>
	<tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-n" id="select-transaction_13" />
        Filing of notice of change in address</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN13" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 3,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-p" id="select-transaction_2" />
        Filing of notice of amendment of constitution</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN2" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 11,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="c-o-a" id="select-transaction_3" />
        Notice of court order for dissolution of incorporated trustees</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN3" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 5,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="ctc-it" id="select-transaction_4" />
        Filing of other documents (miscellaneous)</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN4" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 3,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="ctc-docs" id="select-transaction_5" />
        Filing of IT Form</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN5" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 3,000
        </div>
        </td>
    </tr>
    
<tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="ctc-docs" id="select-transaction_6" />
        Certified true copy of certificate of incorporation</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN6" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000 
        </div>
        </td>
    </tr>
    
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="filing-dot" id="select-transaction_7" />
        Certified true copy of constitution</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN7" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 5,000
        </div>
        </td>
    </tr>
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="a-o-c" id="select-transaction_8" />
        Certified true copy of incorporation form</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN8" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000
        </div>
        </td>
    </tr>
    
    
	<tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="filing-ar-it" id="select-transaction_10" />
        Certified true copies of other documents</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN10" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000 (Per Document)
        </div>
        </td>
    </tr>
	
	<tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="filing-ar-it" id="select-transaction_11" />
        Change of signature</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN11" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        
        </div>
        </td>
    </tr>
	
	<tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="filing-ar-it" id="select-transaction_12" />
        Correction on Certificate</label>
      </td>
        <td align="right">
        <div class="prices" id="postItCN12" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
        </div>
        </td>
    </tr>
	
	<tr>
		<td align="right" colspan="2">
        <div class="prices" id="details01" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        CTC of Form Inclusive
        </div>
		<div class="prices" id="details02" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        Filing = 1,000 | CTC of Certificate = 5,000 | CTC of Form = 2,000
        </div>
		<div class="prices" id="details03" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        Filing = 1,000 | CTC of Certificate = 5,000 | CTC of Form = 2,000
        </div>
		<div class="prices" id="details04" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        Filing = 1,000 | CTC of Form = 2,000
        </div>
		<div class="prices" id="details05" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        Filing = 1,000 | CTC of Form = 2,000
        </div>
		<div class="prices" id="details06" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        Filing = 10,000 | CTC of Form = 2,000
        </div>
		<div class="prices" id="details07" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        Filing = 6,000 | CTC = 5,000
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