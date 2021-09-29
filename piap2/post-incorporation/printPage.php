<?php
session_start();
?>

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
<script type="text/javascript">
function printPage() {
	
	window.print()
	//window.close()

	
}

</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body onload="printPage()">
<center>
<fieldset style="width:800px; background-color:#f5f5f5">
<legend align="left" style="font-size:20px; font-family:Cambria; color:#9ac119; font-weight:bold">
Conversion & Re-Registration
</legend>
<table style="font-family:cambria; font-size:13px; color:#333333" width="auto" height="auto" cellpadding="4" cellspacing="1">


<tr>
<td align="left">
RC Number:*
</td>
<td>
<input type="text" id="rcno" style="width:200px;" maxlength="10" value="<?php echo $_SESSION['rcno'];  ?>" onkeypress="return isNumberKey(event)" />
</td>
</tr>

<tr>
<td align="left">
Customer ID:*
</td>
<td><input type="text" id="custId" value=" <?php echo $_SESSION['custId'];  ?>" style="width:200px;" maxlength="20"/></td>
</tr>

<tr>
<td align="left">
Company Name:*
</td>
<td >
<input type="text" id="company" style="width:200px;" value="<?php echo $_SESSION['company'];  ?>" maxlength="200"/>
</td>
</tr>

<tr>
<td align="left">
Resolution Date:*
</td>
<td align="left">
<input readonly="readonly" type="text" value="<?php echo $_SESSION['resDate'];  ?>" id="post_llc_changeOfName_resDate" style="width:185px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Filing Fee (=N=):
</td>
<td align="left">
<input readonly="readonly"  type="text" id="filing" value="<?php echo $_SESSION['filling'];  ?>" style="background-color:#eee; color:red; width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Penalty Fee (=N=):
</td>
<td align="left">
<input readonly="readonly"  type="text" id="penalty" value="<?php echo $_SESSION['penalty'];  ?>" style="background-color:#eee; color:red; width:200px;" maxlength="100"/>
</td>
</tr>

<tr>
<td align="left">
Total Fee (=N=):
</td>
<td align="left">
<input type="text" id="total" value="<?php echo $_SESSION['total'];  ?>" style="background-color:#eee; color:red; width:200px;" maxlength="100"/>

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
</center>


</body>
</html>