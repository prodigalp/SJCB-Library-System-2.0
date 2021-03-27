<?php 
	session_start();
	/* Check for allowed user session */
	if($_SESSION['role']=='3' || $_SESSION['role']=='4') {
	require("config.php");
	require('calendar/tc_calendar.php');
?>

<html>
<head>
<title>New Books</title>
<link rel="stylesheet" type="text/css" href="embelish/add_books_decor.css"></link>
<script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript">
<!--
	<!-- Checking for blank entry -->
	function validate() {
		/* Assign data to variables */
		var x = document.getElementById('txtAcc').value;
		var y = document.getElementById('txtTle').value;
		var z = document.getElementById('txtAut').value;
		var a = document.getElementById('txtCat');
		var b = document.getElementById('txtClr');
		if(x=='' || y=='' || z=='') {
			alert("WARNING: Blank entry is not allowed!")
			return false;
			}
		else if(a.options.selectedIndex==0 || b.options.selectedIndex==0) {
			alert("WARNING: Blank entry is not allowed!")
			return false;
			}
		else {
			alert("Press OK for verification!");
			return true;
		}
	}
	
	<!-- Color Yellow -->
	function c_ON(str) {
		document.getElementById('txt'+str).style.backgroundColor = "#FFFF00";
	}
	<!-- Color White -->
	function c_OFF(str) {
		document.getElementById('txt'+str).style.backgroundColor = "#FFF";
	}
	
	<!-- Clear screen -->
	function wiper() {
		form1.txtAcc.value=""; form1.txtTle.value=""; form1.txtAut.value=""; 
		form1.txtPic.value=""; form1.txtVol.value=""; form1.txtCpy.value=""; 
		form1.txtPag.value=""; form1.txtPub.value=""; form1.txtCst.value=""; 
		form1.txtRem.value=""; form1.txtSof.value=""; form1.txtCrd.value=""; 
		form1.txtCal.value=""; form1.txtCat.value="-"; form1.txtClr.value="-"; 
		form1.txtEdi.value=""; form1.txtSub.value=""; form1.picfile.value="";
	}
-->
</script>
</head>
<body>
	<form name="form1" id="form1" enctype="multipart/form-data" method="POST" action="add_books_verify.php" onsubmit="return validate();">
	<div id="wraper">
	<div id="header">new books</div>
		<div id="content">
			<!---- Start of data entry here ---->
			<table>
				<tr>
					<td>Accession #:&nbsp;</td>
					<td><input type="text" name="txtAcc" id="txtAcc" size="10" autocomplete="off" 
					     onclick="c_ON('Acc');" onblur="c_OFF('Acc');"></td>
				</tr>
				<tr>
					<td>Title:&nbsp;</td>
					<td><input type="text" name="txtTle" id="txtTle" size="40" autocomplete="off"
						  onclick="c_ON('Tle');" onblur="c_OFF('Tle');"></td>
				</tr>
				<tr>
					<td>Author:&nbsp;</td>
					<td><input type="text" name="txtAut" id="txtAut" size="40" autocomplete="off"
					     onclick="c_ON('Aut');" onblur="c_OFF('Aut');"></td>
				</tr>
				<tr>
					<td><label for="file">Add Photos</label></td>
					<td><input type="file" name="picfile" id="picfile"></td>
				</tr>
				<tr>
					<td>Picture name:&nbsp;</td>
					<td><input type="text" name="txtPic" id="txtPic" size="40" autocomplete="off"
						 onclick="c_ON('Pic');" onblur="c_OFF('Pic');"></td>
				</tr>
				<tr>
					<td>Volume:&nbsp;</td>
					<td><input type="text" name="txtVol" id="txtVol" size="40" autocomplete="off"
						 onclick="c_ON('Vol');" onblur="c_OFF('Vol');"></td>
				</tr>
				<tr>
					<td>Copyright:&nbsp;</td>
					<td><input type="text" name="txtCpy" id="txtCpy" size="40" autocomplete="off"
						 onclick="c_ON('Cpy');" onblur="c_OFF('Cpy');"></td>
				</tr>
				<tr>
					<td>Pages:&nbsp;</td>
					<td><input type="text" name="txtPag" id="txtPag" size="40" autocomplete="off"
						 onclick="c_ON('Pag');" onblur="c_OFF('Pag');"></td>
				</tr>
				<tr>
					<td>Publisher:&nbsp;</td>
					<td><input type="text" name="txtPub" id="txtPub" size="40" autocomplete="off"
						 onclick="c_ON('Pub');" onblur="c_OFF('Pub');"></td>
				</tr>
				<tr>
					<td>Cost Price:&nbsp;</td>
					<td><input type="text" name="txtCst" id="txtCst" size="40" autocomplete="off"
						 onclick="c_ON('Cst');" onblur="c_OFF('Cst');"></td>
				</tr>
				<tr>
					<td>Remarks:&nbsp;</td>
					<td><input type="text" name="txtRem" id="txtRem" size="40" autocomplete="off"
						 onclick="c_ON('Rem');" onblur="c_OFF('Rem');"></td>
				</tr>
				<tr>
					<td>Fundings:&nbsp;</td>
					<td><input type="text" name="txtSof" id="txtSof" size="40" autocomplete="off"
						 onclick="c_ON('Sof');" onblur="c_OFF('Sof');"></td>
				</tr>
				<tr>
					<td>Card #:&nbsp;</td>
					<td><input type="text" name="txtCrd" id="txtCrd" size="40" autocomplete="off"
						 onclick="c_ON('Crd');" onblur="c_OFF('Crd');"></td>
				</tr>
				<tr>
					<td>Call / Class #:&nbsp;</td>
					<td><input type="text" name="txtCal" id="txtCal" size="40" autocomplete="off"
						onclick="c_ON('Cal');" onblur="c_OFF('Cal');"></td>
				</tr>
				<tr>
					<!--- Use for date picker --->
					<td>Date Received:&nbsp;</td>
					<td><?php
						  $myCalendar = new tc_calendar("dater1",true,false);
						  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
						  $myCalendar->setPath("calendar/");
						  $myCalendar->setYearInterval(1940, date("Y"));
						  //$myCalendar->dateAllow("2008-05-13", date("Y-m-d"));
						  $myCalendar->setAlignment("right", "bottom");
						  $myCalendar->writeScript();
						?>
					</td>
				</tr>
				<tr>
					<td>Category:&nbsp;</td>
					<td><select name="txtCat" id="txtCat" size="1"
title="000-099 = General References
100-199 = Philosophy,Psychology 
200-299 = Religion 		
300-399 = Social Sciences		
400-499 = Languages		
500-599 = Pure Sciences		
600-699 = Applied Sciences	
700-799 = Fine Arts		
800-899 = Literature		
900-999 = History">
						<option>-</option>
						<option>General References</option>
						<option>Philosophy,Psychology</option>	
						<option>Social Sciences</option>		
						<option>Religion</option>
						<option>Languages</option>
						<option>Pure Sciences</option>
						<option>Applied Sciences</option>
						<option>Fine Arts</option>
						<option>Literature</option>
						<option>History</option>
					</select> </td>
				</tr>
				<tr>
					<td>Color Code:&nbsp;</td>
					<td><select name="txtClr" id="txtClr" size="1"
title="000-099 = Ligth Blue 
100-199 = Red	
200-299 = Yellow 		
300-399 = Pink 			
400-499 = Green 		
500-599 = Dark Blue		
600-699 = Brown 		
700-799 = Orange 		
800-899 = Violet		
900-999 = Black">

						<option>-</option>
						<option>Ligth Blue</option>
						<option>Red</option>
						<option>Yellow</option>
						<option>Pink</option>
						<option>Green</option>
						<option>Dark Blue</option>
						<option>Brown</option>
						<option>Orange</option>
						<option>Violet</option>
						<option>Black</option>
					</select> </td>
				</tr>
				<tr>
					<td>Edition:&nbsp;</td>
					<td><input type="text" name="txtEdi" id="txtEdi" size="40" autocomplete="off"
						 onclick="c_ON('Edi');" onblur="c_OFF('Edi');"></td>
				</tr>
				<tr>
					<td>Subject:&nbsp;</td>
					<td><input type="text" name="txtSub" id="txtSub" size="40" autocomplete="off"
						 onclick="c_ON('Sub');" onblur="c_OFF('Sub');"></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center">
						<a href="transact.php" style="text-decoration:none"><input type="button" value="&laquo;&nbsp;Back"></a>
						<input type="submit" name="btnSnd" id="btnSnd" value="Send">
						<input type="button" name="btnRst" id="btnRst" value="Reset" onclick="wiper();">
					</td>
				</tr>
			</table>
		</form>
			<div id="footer">Programmer: Eyestrain [Tapar]</div>
		</div>
	</div>
</body>
</html>
<?php 
	}
	else {
	header("location:index.php");
}
?>