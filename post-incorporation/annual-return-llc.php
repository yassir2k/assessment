
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
	
<script type="text/javascript">

$(document).ready(function($)
{
	var check = 0;
	var current = new Date();
	var day = current.getDate();
	var month = current.getMonth() + 1;
	var year = current.getFullYear();
	var currentmonth = current.getMonth() + 1;
	var currentyear = current.getFullYear();
	
	var dateString = month + "/" + day + "/" + year;
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
	
//small company	
	$('#select-transaction_0').change(function()
	  {
		  $('#select-transaction_1').prop('checked', false); 
		  $('#select-transaction_2').prop('checked', false);
		  $('#select-transaction_3').prop('checked', false);
		  $('.prices').hide();
		  $('#details').hide();
		  var filing = 0;
		  var penalty = 0;
		  var sumfiling = 0;
		  
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") || ($("#arYear0").val()=="") || 
		  ($("#arYear1").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  this.checked = false;
			  check = 0;
		  }
		  else
		  {
			  
			  var datebegin = $("#arYear0").val();
			  var dateend = $("#arYear1").val();
			  var i = 0;

			if( (datebegin.length != 4) || (isNaN(datebegin)) || (dateend.length != 4) || (isNaN(dateend)) || (datebegin > dateend) )
				{
	                  alert("Illegal Year(s) of annual returns.\nPlease enter a valid format for the years.");
					  $("#arYear0").val("");
					  $("#arYear1").val("");
					  this.checked = false;
					  check = 0;
					  return;
				}
			  //Now Calculating Annual Returns For Each Year
			  var yr = 0;
			  for ((yr = datebegin); (yr <= dateend); (yr++))
			  {
				  //sabonYear = new Date(dateArray[i]);
				  //shekaru[i] = sabonYear.getFullYear();
				 
				  if((yr < 1914) || (dateend >  year) || (datebegin >  year))
				  {
					  alert("You Must enter the year(s) between 1914 to " + year);
					  $("#arYear0").val("");
					  $("#arYear1").val("");
					  this.checked = false;
					  check = 0;
					  return;
				  }
				  else if((yr >= 1914) && (yr <= 1986))
				  {
					  filing +=1;
					  penalty +=3000;
					 // alert(shekaru[i]+" Annual Returns total is = 2800")
				  }
				  else if((yr >= 1987) && (yr <= 1990))
				  {					  
					  filing +=25;
					  penalty +=3000;					  
					  
					  //alert("Annual returns cannot be calculated for the year "+shekaru[i]+".\n Enter a Year between 2003 and "+currentYear);
					  //this.checked = false;
					  //check = 0;
					  //return;
				  }
				  else if((yr >= 1991) && (yr <= 1993))
				  {					  
					  filing +=250;
					  penalty +=3000;
				  }
				  else if((yr >= 1994) && (yr <= 2002))
				  {					  
					  filing +=500;
					  penalty +=3000;
				  }
				  else if((yr >= 2003) && (yr <= 2012))
				  {					  
					  filing +=1000;
					  penalty +=3000;
				  }
				  else if((yr >= 2013) && (yr <= (year - 2)))
				  {					  
					  filing +=2000;
					  penalty +=3000;
				  }
				  else//From 2013 onward
				  {
					  if(yr == (year - 1))
					  {
						filing +=2000;
					  }
					  else //Current Year
					  {
						  alert("Cannot file for " + year);
						  return;
					  }
				  }
			  }
			 
			 var x = document.getElementById("postBnCN0");
			 x.innerHTML = "=N=" + (filing + penalty);
			 check = 1;
			 $('#postBnCN0').show();
			 
			 var y = document.getElementById("details");
			 y.innerHTML = "Filing Fee: " + filing +" | Penalty: " + penalty;
			 $('#details').show();
		  }
	  });//end small company	  
	
//Big Company	
	$('#select-transaction_1').change(function()
	  {
		  $('#select-transaction_0').prop('checked', false); 
		  $('#select-transaction_2').prop('checked', false);
		  $('#select-transaction_3').prop('checked', false);
		  $('.prices').hide();
		  $('#details').hide();
		  var filing = 0;
		  var penalty = 0;
		  var sumfiling = 0;
		  
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") || ($("#arYear0").val()=="") || 
		  ($("#arYear1").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  this.checked = false;
			  check = 0;
		  }
		  else
		  {
			  
			  var datebegin = $("#arYear0").val();
			  var dateend = $("#arYear1").val();
			  var i = 0;

			if( (datebegin.length != 4) || (isNaN(datebegin)) || (dateend.length != 4) || (isNaN(dateend)) || (datebegin > dateend) )
				{
	                  alert("Illegal Year(s) of annual returns.\nPlease enter a valid format for the years.");
					  $("#arYear0").val("");
					  $("#arYear1").val("");
					  this.checked = false;
					  check = 0;
					  return;
				}
			  //Now Calculating Annual Returns For Each Year
			  var yr = 0;
			  for ((yr = datebegin); (yr <= dateend); (yr++))
			  {
				  //sabonYear = new Date(dateArray[i]);
				  //shekaru[i] = sabonYear.getFullYear();
				 
				  if((yr < 1914) || (dateend >  year) || (datebegin >  year))
				  {
					  alert("You Must enter the year(s) between 1914 to " + year);
					  $("#arYear0").val("");
					  $("#arYear1").val("");
					  this.checked = false;
					  check = 0;
					  return;
				  }
				  else if((yr >= 1914) && (yr <= 1986))
				  {
					  filing +=1;
					  penalty +=5000;
					 // alert(shekaru[i]+" Annual Returns total is = 2800")
				  }
				  else if((yr >= 1987) && (yr <= 1990))
				  {					  
					  filing +=25;
					  penalty +=5000;					  
					  
					  //alert("Annual returns cannot be calculated for the year "+shekaru[i]+".\n Enter a Year between 2003 and "+currentYear);
					  //this.checked = false;
					  //check = 0;
					  //return;
				  }
				  else if((yr >= 1991) && (yr <= 1993))
				  {					  
					  filing +=250;
					  penalty +=5000;
				  }
				  else if((yr >= 1994) && (yr <= 2002))
				  {					  
					  filing +=500;
					  penalty +=5000;
				  }
				  else if((yr >= 2003) && (yr <= 2012))
				  {					  
					  filing +=1000;
					  penalty +=5000;
				  }
				  else if((yr >= 2013) && (yr <= (year - 2)))
				  {					  
					  filing +=3000;
					  penalty +=5000;
				  }
				  else//From 2013 onward
				  {
					  if(yr == (year - 1))
					  {
						filing +=3000;
					  }
					  else //Current Year
					  {
						  alert("Cannot file for " + year);
						  return;
					  }
				  }
			  }
			 
			 var x = document.getElementById("postBnCN1");
			 x.innerHTML = "=N=" + (filing + penalty);
			 check = 1;
			 $('#postBnCN1').show();
			 
			 var y = document.getElementById("details");
			 y.innerHTML = "Filing Fee: " + filing +" | Penalty: " + penalty;
			 $('#details').show();
		  }
	  });//End Big Company	  
//LTD/GTE

	$('#select-transaction_2').change(function()
	  {
		  $('#select-transaction_1').prop('checked', false); 
		  $('#select-transaction_0').prop('checked', false);
		  $('#select-transaction_3').prop('checked', false);
		  $('.prices').hide();
		  $('#details').hide();
		  var filing = 0;
		  var penalty = 0;
		  var sumfiling = 0;
		  
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") || ($("#arYear0").val()=="") || 
		  ($("#arYear1").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  this.checked = false;
			  check = 0;
		  }
		  else
		  {
			  
			  var datebegin = $("#arYear0").val();
			  var dateend = $("#arYear1").val();
			  var i = 0;

			if( (datebegin.length != 4) || (isNaN(datebegin)) || (dateend.length != 4) || (isNaN(dateend)) || (datebegin > dateend) )
				{
	                  alert("Illegal Year(s) of annual returns.\nPlease enter a valid format for the years.");
					  $("#arYear0").val("");
					  $("#arYear1").val("");
					  this.checked = false;
					  check = 0;
					  return;
				}
			  //Now Calculating Annual Returns For Each Year
			  var yr = 0;
			  for ((yr = datebegin); (yr <= dateend); (yr++))
			  {
				  //sabonYear = new Date(dateArray[i]);
				  //shekaru[i] = sabonYear.getFullYear();
				 
				  if((yr < 1914) || (dateend >  year) || (datebegin >  year))
				  {
					  alert("You Must enter the year(s) between 1914 to " + year);
					  $("#arYear0").val("");
					  $("#arYear1").val("");
					  this.checked = false;
					  check = 0;
					  return;
				  }
				  else if((yr >= 1914) && (yr <= 1986))
				  {
					  filing +=1;
					  penalty +=5000;
					 // alert(shekaru[i]+" Annual Returns total is = 2800")
				  }
				  else if((yr >= 1987) && (yr <= 1990))
				  {					  
					  filing +=25;
					  penalty +=5000;					  
					  
					  //alert("Annual returns cannot be calculated for the year "+shekaru[i]+".\n Enter a Year between 2003 and "+currentYear);
					  //this.checked = false;
					  //check = 0;
					  //return;
				  }
				  else if((yr >= 1991) && (yr <= 1993))
				  {					  
					  filing +=250;
					  penalty +=5000;
				  }
				  else if((yr >= 1994) && (yr <= 2002))
				  {					  
					  filing +=500;
					  penalty +=5000;
				  }
				  else if((yr >= 2003) && (yr <= 2012))
				  {					  
					  filing +=1000;
					  penalty +=5000;
				  }
				  else if((yr >= 2013) && (yr <= (year - 2)))
				  {					  
					  filing +=5000;
					  penalty +=5000;
				  }
				  else//From 2013 onward
				  {
					  if(yr == (year - 1))
					  {
						filing +=5000;
					  }
					  else //Current Year
					  {
						  alert("Cannot file for " + year);
						  return;
					  }
				  }
			  }
			 
			 var x = document.getElementById("postBnCN2");
			 x.innerHTML = "=N=" + (filing + penalty);
			 check = 1;
			 $('#postBnCN2').show();
			 
			 var y = document.getElementById("details");
			 y.innerHTML = "Filing Fee: " + filing +" | Penalty: " + penalty;
			 $('#details').show();
		  }
	  });//END LTD/GTE
 //PLC
		$('#select-transaction_3').change(function()
	  {
		  $('#select-transaction_1').prop('checked', false); 
		  $('#select-transaction_2').prop('checked', false);
		  $('#select-transaction_0').prop('checked', false);
		  $('.prices').hide();
		  $('#details').hide();
		  var filing = 0;
		  var penalty = 0;
		  var sumfiling = 0;
		  
		  if( ($("#rcno").val()=="") || ($("#agentID").val()=="") || ($("#company").val()=="") || ($("#arYear0").val()=="") || 
		  ($("#arYear1").val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  $('.prices').hide();
			  this.checked = false;
			  check = 0;
		  }
		  else
		  {
			  
			  var datebegin = $("#arYear0").val();
			  var dateend = $("#arYear1").val();
			  var i = 0;

			if( (datebegin.length != 4) || (isNaN(datebegin)) || (dateend.length != 4) || (isNaN(dateend)) || (datebegin > dateend) )
				{
	                  alert("Illegal Year(s) of annual returns.\nPlease enter a valid format for the years.");
					  $("#arYear0").val("");
					  $("#arYear1").val("");
					  this.checked = false;
					  check = 0;
					  return;
				}
			  //Now Calculating Annual Returns For Each Year
			  var yr = 0;
			  for ((yr = datebegin); (yr <= dateend); (yr++))
			  {
				  //sabonYear = new Date(dateArray[i]);
				  //shekaru[i] = sabonYear.getFullYear();
				 
				  if((yr < 1914) || (dateend >  year) || (datebegin >  year))
				  {
					  alert("You Must enter the year(s) between 1914 to " + year);
					  $("#arYear0").val("");
					  $("#arYear1").val("");
					  this.checked = false;
					  check = 0;
					  return;
				  }
				  else if((yr >= 1914) && (yr <= 1986))
				  {
					  filing +=1;
					  penalty +=10000;
					 // alert(shekaru[i]+" Annual Returns total is = 2800")
				  }
				  else if((yr >= 1987) && (yr <= 1990))
				  {					  
					  filing +=25;
					  penalty +=10000;					  
					  
					  //alert("Annual returns cannot be calculated for the year "+shekaru[i]+".\n Enter a Year between 2003 and "+currentYear);
					  //this.checked = false;
					  //check = 0;
					  //return;
				  }
				  else if((yr >= 1991) && (yr <= 1993))
				  {					  
					  filing +=250;
					  penalty +=10000;
				  }
				  else if((yr >= 1994) && (yr <= 2002))
				  {					  
					  filing +=500;
					  penalty +=10000;
				  }
				  else if((yr >= 2003) && (yr <= 2012))
				  {					  
					  filing +=1000;
					  penalty +=10000;
				  }
				  else if((yr >= 2013) && (yr <= (year - 2)))
				  {					  
					  filing +=5000;
					  penalty +=10000;
				  }
				  else//From 2013 onward
				  {
					  if(yr == (year - 1))
					  {
						filing +=5000;
					  }
					  else //Current Year
					  {
						  alert("Cannot file for " + year);
						  return;
					  }
				  }
			  }
			 
			 var x = document.getElementById("postBnCN3");
			 x.innerHTML = "=N=" + (filing + penalty);
			 check = 1;
			 $('#postBnCN3').show();
			 
			 var y = document.getElementById("details");
			 y.innerHTML = "Filing Fee: " + filing +" | Penalty: " + penalty;
			 $('#details').show();
		  }
	  });//END PLC
 

	  
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

<!--menu -->
<div class="wrap">
<div class="demo-container">
<div class="green" id="menu">  

<?php include("menu.php"); ?>

</div>
</div>
</div>
<!---end menu --->


<br />
<h1 id='disp' align="center" style="display: none;font-family: Calligrapher;
font-size: 45px; ">Corporate Affairs Commission</h1>
<fieldset style="width:800px; background-color:#f5f5f5">
<legend align="left" style="font-size:25px; font-family:Cambria; color:#9ac119; font-weight:bold">
Annual Returns Filing for Company
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
<td align="left">
<input name="company" type="text" id="company" style="width:300px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Due Year (From):*
</td>
<td align="left">
<input type="text" name="Bdate" id="arYear0" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
End Year (To):*
</td>
<td align="left">
<input type="text" name="Bdate" id="arYear1" style="width:200px;" maxlength="100"/>
</td>
</tr>

</table>

<fieldset style="width:780px; background-color:#f5f5f5">
<legend align="left" style="font-size:20px; font-family:Cambria; color:#9ac119; font-weight:bold">
Select Company Type
</legend>

<form id="form1" name="form1" method="post" action="">
  <table width="550" cellpadding="4"  style="font-family:cambria; font-size:13px; color:#333333">
    
    <tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction" value="filing-ar" id="select-transaction_0" />
        Small Company</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN0" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        
        </div>
        </td>
    </tr>
	
	<tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction1" value="filing-ar" id="select-transaction_1" />
        Big Company</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN1" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        
        </div>
        </td>
    </tr>
	
	<tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction2" value="filing-ar" id="select-transaction_2" />
        LTD/GTE</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN2" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        
        </div>
        </td>
    </tr>
	
	<tr>
      <td align="left"><label>
        <input type="radio" name="select-transaction3" value="filing-ar" id="select-transaction_3" />
        PLC</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN3" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        
        </div>
        </td>
    </tr>
	
	<tr>
	<td>&nbsp;</td>
	<td align="right"><div id="details" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold;"></div></td>
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