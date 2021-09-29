
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<noscript>
  <meta http-equiv="refresh" content="0; URL=../error.php">
</noscript>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/jquery.ui.all.css">
<title>Post Incorporation</title>
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
	function DateDiff(date1,date2)
	{
		var diff = date1 - date2;
		var num_days = ((diff % 31536000000) % 2628000000) / 86400000;
		return Math.floor(num_days);
	}
	$('#mega-menu-7').dcMegaMenu({
		rowItems: '3',
		speed: 'slow',
		effect: 'slide'
	});
	
	$('#print').click(function()
	 {
	     if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#availability').val()=="") || ($('#current').val()=="") || 
		 ($('#proposed').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
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
		
				 window.print();
				 location.reload();
			 }
		 }
	 });
	
	$('#verify').click(function()
	 {
		 check = 0;
         if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#availability').val()=="") || ($('#current').val()=="") || 
		 ($('#proposed').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		 {
			 alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			 $('#filing').val('');
			 $('#penalty').val('');
			 $('#total').val('');
		 }
		 else
		 {   
	 
			if( $('#type').val()== "LLC" ) {
			 check = 1;
			 var temp = $("#post_llc_changeOfName_resDate").val();
			 var today = new Date();
			 var selected = new Date(temp);
			 var result = DateDiff(today,selected);
			 $('#filing').val(10000);
			 if(result > 14)
			 {
				 $('#penalty').val(5000);
			 }
			 else
			 {
				 $('#penalty').val(0);
			 }
			 var total = parseInt($('#filing').val()) + parseInt($('#penalty').val()) + 3000;
			 $('#total').val(total);
			}
			
			if( $('#type').val()== "PLC" ) {
			 check = 1;
			 var temp = $("#post_llc_changeOfName_resDate").val();
			 var today = new Date();
			 var selected = new Date(temp);
			 var result = DateDiff(today,selected);
			 $('#filing').val(20000);
			 if(result > 14)
			 {
				 $('#penalty').val(10000);
			 }
			 else
			 {
				 $('#penalty').val(0);
			 }
			 var total = parseInt($('#filing').val()) + parseInt($('#penalty').val()) + 3000;
			 $('#total').val(total);
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
<br />
<br />
<br />
<br />
<img src="../images/post.png" style="outline:none; border:none;" />
<br />
<br />
<br />
<br />
<br /><br />
</center>
</div>
<div id="footer">
</div>
</body>
</html>