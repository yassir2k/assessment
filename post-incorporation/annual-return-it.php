
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
				  else if((yr >= 1991) && (yr <= 1993))
				  {
					  filing += 250;
					  penalty += 5000;
				  }
				  else if((yr >= 1994) && (yr <= 2002))
				  {
					  filing += 500;
					  penalty += 5000;
				  }
				  else if((yr >= 2003) && (yr <= 2012))
				  {
					  filing += 1000;
					  penalty += 5000;
				  }
				  else if((yr >= 2013) && (yr <= (currentyear - 1)))
				  {
					  filing += 5000;
					  penalty += 5000;
				  }
				  
				  else if(yr == currentyear )
				  {
					  
					  if(currentmonth > 6)//Meaning can only file from july
						  {
							  filing += 5000;
						  }
						  else
						  {
							  alert("Filing for " + year + " is not due yet. ");
							  $("#arYear0").val("");
							  $("#arYear1").val("");
							  this.checked = false;
							  check = 0;
							  return;
						  }				 			 
						  
				  }
				  
			
			}
			
			
			if((datebegin >= 1914) && (datebegin <= 1990))				
				{
					  var dif = (dateend - datebegin) + 1;
					  var div = parseInt(dif/5);
					  var mod = (dif%5);
					  if(div > 0){
						  filing += (div * 1000);
						  penalty += (div * 5000);
					  }
					  if(mod > 0){
						  
						  filing +=1000;
						  penalty +=5000;
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
<div id="printarea">
<fieldset style="width:800px; background-color:#f5f5f5">
<legend align="left" style="font-size:25px; font-family:Cambria; color:#9ac119; font-weight:bold">
Annual Returns Filing for IT
</legend>
<table width="500" style="font-family:cambria; font-size:15px; color:#333333" height="auto" cellpadding="4" cellspacing="1"> 
<tr>
<td colspan="2">
<caption style="color:#900">Fields Marked With Asterisk (*) Are Mandatory</caption>
</td>
</tr>
<tr>
<td align="left">
IT Number:*
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
IT Name:*
</td>
<td align="right">
<input name="company" type="text" id="company" style="width:300px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Due Year (From):*
</td>
<td align="right">
<input type="text" name="Bdate" id="arYear0" style="width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
End Year (To):*
</td>
<td align="right">
<input type="text" name="Bdate" id="arYear1" style="width:200px;" maxlength="100"/>
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
        <input type="radio" name="select-transaction" value="filing-ar" id="select-transaction_0" />
        Filing of Annual Returns</label>
        </td>
        <td align="right">
        <div class="prices" id="postBnCN0" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        
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
</div>
<br />
</center>
</div>
<div id="footer">
</div>
</body>
</html>