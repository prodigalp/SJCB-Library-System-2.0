<?php 
	session_start();
	if($_SESSION['role']=='3' || $_SESSION['role']=='4') {
	require("config.php");
	require('calendar/tc_calendar.php');
?>

<html>
<head>
<title>New Magazine</title>
<link rel="stylesheet" type="text/css" href="embelish/add_magazine_decor.css"></link>
<script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript">
<!--
	<!-- Checking for blank entry -->
	function validate() {
		var x = document.getElementById('txtAcc').value;
		var y = document.getElementById('txtTle').value;
		var z = document.getElementById('dater1').value;
		var w = document.getElementById('dater2').value;
		if(x=='' || y=='' || z=='0000-00-00' || w=='0000-00-00') {
			alert("WARNING: Blank entry is not allowed!")
			return false;
			}
		else {
			alert("Press OK for verification!");
			return true;
		}
	}
	
	<!-- Color ON -->
	function c_ON(str) {
		document.getElementById('txt'+str).style.backgroundColor = "#FFFF00";
	}
	<!-- Color OFF -->
	function c_OFF(str) {
		document.getElementById('txt'+str).style.backgroundColor = "#FFF";
	}
	
	<!-- Clear screen -->
	function wiper() {
		form1.txtAcc.value=""; 
		form1.txtTle.value=""; 
	}
-->
</script>
</head>
<body>
	<form name="form1" id="form1" method="POST" action="add_magazine_verify.php" onsubmit="return validate();">
	<div id="wraper">
	<div id="header">new magazine</div>
		<div id="content">
			<table>
				<tr>
					<td>Magazine Date:&nbsp;</td>
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
					<td>Date Issued:&nbsp;</td>
					<td><?php
						  $myCalendar = new tc_calendar("dater2",true,false);
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