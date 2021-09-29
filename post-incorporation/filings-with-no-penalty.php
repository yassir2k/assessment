
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   if( $('#company_type').val() == "LLC" )
			   {
				   if(result > 90)
				   {
				       $('#postBnCN1_LLC_P').show();
					   check = 1;
				   }
				   else
				   {
					   $('#postBnCN1').show();
					   check = 1;
				   }
			   }
			   else
			   {
				   if(result > 90)
				   {
					   $('#postBnCN_PLC_P').show();
					   check = 1;
				   }
				   else
				   {
				       $('#postBnCN').show();
					   check = 1;
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			  if( $('#company_type').val() == "LLC" )
			   {
				   if(result > 14)
				   {
				       $('#postBnCN2_LLC_P').show();
					   check = 1;
				   }
				   else
				   {
					   $('#postBnCN2').show();
					   check = 1;
				   }
			   }
			   else
			   {
				   if(result > 14)
				   {
					   $('#postBnCN2_PLC_P').show();
					   check = 1;
				   }
				   else
				   {
				       $('#postBnCN2_PLC').show();
					   check = 1;
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   if(result >14)
			   {
				   $('#postBnCN3_P').show();
				   check = 1;
			   }
			   else
			   {
			      $('#postBnCN3').show();
				  check = 1;
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
			  check = 0;
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
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
			  check = 0;
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
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
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
			  check = 0;
		  }
		  else
		  {
			 $('.prices').hide();
			 $('#postBnCN6_M').show();
			 check = 1;
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
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
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
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
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
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#rcno').val()=="") || ($('#custId').val()=="") || ($('#company').val()=="") || ($('#amount_sec').val()=="") 
		  || ($('#company_type').val()=="") || ($('#stamp').val()=="") || ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN0').show();
			   check = 1;
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   if(result > 14)
			   {
				   $('#postBnCN10_P').show();
				   check = 1;
			   }
			   else
			   {
			       $('#postBnCN10').show();
				   check = 1;
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN11').show();
			   check = 1;
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN12').show();
			   check = 1;
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN13').show();
			   check = 1;
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN14').show();
			   check = 1;
		  }
	  });
	  
	  $('#select-transaction_16').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN16').show();
			   check = 1;
		  }
	  });
	  
	  $('#select-transaction_17').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN17').show();
			   check = 1;
		  }
	  });
	  
	  $('#select-transaction_18').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN18').show();
			   check = 1;
		  }
	  });
	  
	  $('#select-transaction_19').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN19').show();
			   check = 1;
		  }
	  });
	  
	  $('#select-transaction_20').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN20').show();
			   check = 1;
		  }
	  });
	  
	  $('#select-transaction_21').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN21').show();
			   check = 1;
		  }
	  });
	  
	  $('#select-transaction_22').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN22').show();
			   check = 1;
		  }
	  });
	  
	  $('#select-transaction_23').change(function()
	  {
		  var temp = $("#post_llc_changeOfName_resDate").val();
	      var today = new Date();
	      var selected = new Date(temp);
	      var result = DateDiff(today,selected);
		  if( ($('#custId').val()=="") || ($('#company').val()=="") || ($('#company_type').val()=="") 
			|| ($('#post_llc_changeOfName_resDate').val()==""))
		  {
			  alert("Field(s) Missing. Ensure Mandatory Fields Are Properly Entered");
			  this.checked = false;
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN23').show();
			   check = 1;
		  }
	  });
	  
	  $('#select-transaction_24').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN24').show();
			   check = 1;
		  }
	  });
	  
	  $('#select-transaction_25').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN25').show();
			   check = 1;
		  }
	  });
	  
	  $('#select-transaction_26').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN26').show();
		  }
	  });
	  
	  $('#select-transaction_27').change(function()
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
			   $('#postBnCN27').show();
			   check = 1;
		  }
	  });
	  
	  $('#select-transaction_28').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN28').show();
			   check = 1;
		  }
	  });
	  
	  $('#select-transaction_29').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN29').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_30').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN30').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_31').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN31').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_32').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN32').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_33').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN33').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_34').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN34').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_35').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN35').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_36').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN36').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_37').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN37').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_38').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN38').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_39').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN39').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_40').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN40').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_41').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN41').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_42').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN42').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_43').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN43').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_44').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN44').show();
			   check = 1;
		  }
	  });
	  
	  	  $('#select-transaction_45').change(function()
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
			  check = 0;
		  }
		  else
		  {
			   $('.prices').hide();
			   $('#postBnCN45').show();
			   check = 1;
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
				 alert("Fill in the necessary fields Before Printing");
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
<h1 id='disp' align="center" style="display: none;font-family: Calligrapher;
font-size: 45px; ">Corporate Affairs Commission</h1>
<fieldset style="width:800px; background-color:#f5f5f5">
<legend align="left" style="font-size:25px; font-family:Cambria; color:#9ac119; font-weight:bold" >
Filings With No Penalty &amp; Miscelleaneous Filings </legend>
<table width="600" style="font-family:cambria; font-size:15px; color:#333333" height="auto" cellpadding="4" cellspacing="1">
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
<input type="text" id="rcno" style="width:200px;" maxlength="100" onkeypress="return isNumberKey(event)" />
</td>
</tr>

<tr>
<td align="left">
Customer ID:*
</td>
<td align="left">
<input type="text" id="custId" style="width:200px;" maxlength="100" />
</td>
</tr>

<tr>
<td align="left">
Company Name:*
</td>
<td align="left">
<input type="text" id="company" name="company" style="width:350px;" maxlength="100" />
</td>
</tr>

<tr>
<td align="left">
Resolution Date:*
</td>
<td align="left">
<input readonly="readonly" type="text" id="post_llc_changeOfName_resDate" style="width:185px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Company Type:*
</td>
<td align="left">
<select id="company_type" style="width:110px;" >
    <option value=""></option>
    <option value="LLC">LLC</option>
    <option value="PLC">PLC</option>
    </select>
</td>
</tr>


</table>

<fieldset style="width:750px; background-color:#f5f5f5">
<legend align="left" style="font-size:20px; font-family:Cambria; color:#9ac119; font-weight:bold">
Select Transaction
</legend>

<form id="form1" name="form1" method="post" action="">
  <table width="750" cellpadding="1" cellspacing="1"  style="font-family:cambria; font-size:15px; color:#333333">
   
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
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_16" />
        Filing of special resolution for merger</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN16" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 20,000
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
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_17" />
        Filing of each document relating to merger</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN17" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
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
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_18" />
        Notice of Merger</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN18" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 50,000
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
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_19" />
        Notice of reduction in share capital LLC</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN19" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
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
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_20" />
        Notice of reduction in share capital PLC</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN20" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 20,000
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
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_21" />
        Extension of time of holding AGM LLC</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN21" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 5,000
        </div>
		</td>
		
    </tr>
    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-inc" id="select-transaction_7" />
        CTC Of Increase & Mortgages Certs</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN8" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
        </div>
        </td>
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_22" />
        Extension of time of holding AGM PLC</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN22" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
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
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_23" />
        Filing of Consent</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN23" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 5,000
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
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_24" />
        Correction of Certificate</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN24" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
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
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_25" />
        Correction of CAC 1.1</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN25" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 4,000
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
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_26" />
        Correction of Memat</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN26" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 8,000
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
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_27" />
        Filing of Conversion</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN27" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 20,000
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
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_28" />
        Deed of Receiver</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN28" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
        </div>
		</td>
		
    </tr>
	
	<tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_10" />
        Other Miscellaneous & CTC</label>
        </td>
         <td align="right">
        <div class="prices" id="postBnCN10" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 4,000
        </div>
         <div class="prices" id="postBnCN10_P" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 9,000
        </div>       
        </td>
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_29" />
        Deed of Trustee</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN29" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
        </div>
		</td>
		
    </tr>   

    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_30" />
        Discharge of Receiver</label></td>
    <td align="right"><div class="prices" id="postBnCN30" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
           =N= 5,000
         </div>       
        </td>
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_31" />
        Statutory Report</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN31" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 5,000
        </div>
		</td>
		
    </tr>	
	
	    <tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_32" />
        Filing of Pledge</label></td>
    <td align="right"><div class="prices" id="postBnCN32" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
           =N= 2,000
         </div>       
        </td>
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_33" />
        Certificate of Deed of Variation </label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN33" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 10,000
        </div>
		</td>
		
    </tr>
    </tr>	
	
	<tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_34" />
        Filing Deed of Variation </label></td>
    <td align="right"><div class="prices" id="postBnCN34" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
           =N= 2,000
         </div>       
        </td>
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_35" />
        Return of Final Meeting & Account of Liquidation  </label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN35" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 5,000
        </div>
		</td>
		
    </tr>
	<tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_36" />
        Filing of supplementary Deed </label></td>
    <td align="right"><div class="prices" id="postBnCN36" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
           =N= 2,000
         </div>       
        </td>
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_37" />
        Filing of Deed of Discharge of Receiver </label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN37" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 5,000
        </div>
		</td>
		
    </tr>
	
	<tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_38" />
        Filing of Receiver Abstract  </label></td>
    <td align="right"><div class="prices" id="postBnCN38" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
           =N= 5,000
         </div>       
        </td>
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_39" />
        Filing of Cessation of Receiver  </label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN39" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 5,000
        </div>
		</td>
		
    </tr>
	
	<tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_40" />
        Filing of Deed of Affirmation </label></td>
    <td align="right"><div class="prices" id="postBnCN40" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
           =N= 10,000
         </div>       
        </td>
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_41" />
        Notice of Dissolution for Court Order </label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN41" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 2,000
        </div>
		</td>
		
    </tr>
	
	<tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_42" />
        Deed of Share Charge </label></td>
    <td align="right"><div class="prices" id="postBnCN42" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
           =N= 10,000
         </div>       
        </td>
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_43" />
        Final Account </label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN43" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 5,000
        </div>
		</td>
		
    </tr>
	
		<tr>
      <td align="left">
      <label>
        <input type="radio" name="select-transaction" value="ctc-form" id="select-transaction_44" />
        Reduction in Premium Shares </label></td>
    <td align="right"><div class="prices" id="postBnCN44" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
           =N= 2,000
         </div>       
        </td>
		
		<td align="left">
		<label>
        <input type="radio" name="select-transaction" value="" id="select-transaction_45" />
        Filing of Relisting of Company</label>
		</td>
		<td align="right">
		<div class="prices" id="postBnCN45" style="font-family:cambria; background-color:#f5f5f5; font-weight:bold; color:#900">
        =N= 25,000
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