<?php
	session_start();
	// Check for allowed user session.
	if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
	include("config.php");
	require('calendar/tc_calendar.php');
	
	// Assign value to the variables if button 'Send' is clicked 
	if(isset($_POST['btnSnd'])) {
		if("Send"==$_POST['btnSnd']) {
			// First sets of value, use to insert values to tbluser
			$fnm = $_POST['txtFnm'];
			$lnm = $_POST['txtLnm'];
			$mnm = $_POST['txtMnm'];
			$usr = $_POST['txtUsr'];
			$jnk = $_POST['txtPwd'];
			$pwd = md5($_POST['txtPwd']);
			$typ = $_POST['Typ'];
			$rol = $_POST['Rol'];
			
			// Second sets of value, use to insert values to tblhigh
			$adr = $_POST['txtAdr'];
			$std = $_POST['txtStd'];
			// Use to get date value came from date picker variable
			$bdy = isset($_REQUEST["dater1"]) ? $_REQUEST["dater1"] : "";
			$gdr = $_POST['txtGdr'];
			$lvl = $_POST['txtLvl'];
			$sec = $_POST['txtSec'];
			$ctk = $_POST['txtCtk'];
			$eml = $_POST['txtEml'];
			$fad = $_POST['txtFad'];
			$mad = $_POST['txtMad'];
			
			// Insert first set of values to tbluser
			$loc1 = "INSERT INTO tbluser(fname,lname,mname,username,password,gtype,role)
					 VALUES('$fnm','$lnm','$mnm','$usr','$pwd','$typ','$rol')";
			mysql_query($loc1);
			
			
			// Check for the current highest ID to track data from the other table
			$x = "SELECT id FROM tbluser ORDER BY id DESC LIMIT 1";
			$a = mysql_query($x);
			$b = mysql_fetch_array($a);
			$c = $b['id'];
			
			// Insert value to tbljunk, along with the current highest id, use for password viewer
			$log1 = "INSERT INTO tbljunk(fname,lname,mname,debit,credit,gtype,role,ctrlnum)
					 VALUES('$fnm','$lnm','$mnm','$usr','$jnk','$typ','$rol','$c')";
			mysql_query($log1);
			
			// Insert value to tblhigh along with the current highest id.
			$loc2 = "INSERT INTO tblhigh(address,studnum,bday,gender,yearlevel,section,contactnum,email,fathersname,mothersname,ctrlnum)
			         VALUES('$adr','$std','$bdy','$gdr','$lvl','$sec','$ctk','$eml','$fad','$mad','$c')";
			mysql_query($loc2);
			/* display successful message on the screen, return to add user menu afterwards. */
			echo (" 
				<script type='text/javascript'>
				alert('Successful Highschool Sign-up!');
				window.location='add_user_menu.php';
				</script>
			");
		}
	}
mysql_close($con);
?>


<html>
<head>
<title>Highschool Application Form</title>
<link rel="stylesheet" type="text/css" href="embelish/high_decor.css"></link>
<script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript">
	<!-- Assign value to the variables to check for blank entry -->
	function validate() {
		var a = document.getElementById('txtFnm').value;
		var b = document.getElementById('txtMnm').value;
		var c = document.getElementById('txtLnm').value;
		var d = document.getElementById('txtUsr').value;
		var e = document.getElementById('txtPwd').value;
		var f = document.getElementById('Typ').value;
		var g = document.getElementById('Rol').value;
		var h = document.getElementById('txtAdr').value;
		var i = document.getElementById('txtStd').value;
		var j = document.getElementById('dater1').value;  // date
		var k = document.getElementById('txtGdr').value;
		var l = document.getElementById('txtLvl').value;
		var m = document.getElementById('txtSec').value;
		var n = document.getElementById('txtCtk').value;
		var o = document.getElementById('txtEml').value;
		var p = document.getElementById('txtFad').value;
		var q = document.getElementById('txtMad').value;
		if(a=='' || b=='' || c=='' || d=='' || e=='' || f=='' || g=='' || h=='' || i=='' ||
			j=='0000-00-00' || k=='---' || l=='---' || m=='' || n=='' || o=='' || p=='' || q=='') {
			alert("WARNING: Blank entry is not allowed!");
			return false;
		}
		alert("Press OK for verification!");
		return true;
	}
	
	/* Clear the screen */
	function wiper() {
		form1.txtFnm.value=""; form1.txtMnm.value=""; form1.txtLnm.value=""; form1.txtUsr.value=""; form1.txtPwd.value="";
		form1.txtAdr.value=""; form1.txtStd.value=""; form1.txtGdr.value=""; form1.txtLvl.value=""; form1.txtSec.value="";
		form1.txtMad.value=""; form1.txtFad.value=""; form1.txtEml.value=""; form1.txtCtk.value="";
	}
</script>
</head>
<div id="wraper">
	<body>
		<form method="POST" name="form1" id="form1" onsubmit="return validate();">
			<div id="header">Highschool </div>
			<div id="content">
			<!--- Gathering of data --->
			<table>
				<tr>
					<td>FirstName:&nbsp;</td>
					<td><input type="text" name="txtFnm" id="txtFnm" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<td>MiddleName:&nbsp;</td>
					<td><input type="text" name="txtMnm" id="txtMnm" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<td>LastName:&nbsp;</td>
					<td><input type="text" name="txtLnm" id="txtLnm" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Username:&nbsp;</td>
					<td><input type="text" name="txtUsr" id="txtUsr" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Password:&nbsp;</td>
					<td><input type="password" name="txtPwd" id="txtPwd" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Group Type:&nbsp;</td>
					<td><input type="text" name="Typ" id="Typ" size="15" value="Highschool" readonly></td>
				</tr>
				<tr>
					<td>Role:&nbsp;</td>
					<td><input type="text" name="Rol" id="Rol" size="15" value="2" readonly></td>
				</tr>
				<tr>
					<td>Address #:&nbsp;</td>
					<td><input type="text" name="txtAdr" id="txtAdr" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Studnum:&nbsp;</td>
					<td><input type="text" name="txtStd" id="txtStd" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<!--- Use for data picker --->
					<td>Birthday:&nbsp;</td>
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
					<td>Gender:&nbsp;</td>
					<td>
						<select size="1" name="txtGdr" id="txtGdr">
							<option>---</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Year Level:&nbsp;</td>
					<td> 
						<select name="txtLvl" id="txtLvl" size="1">
							<option>---</option>
							<option>1st</option>
							<option>2nd</option>
							<option>3rd</option>
							<option>4th</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Section:&nbsp;</td>
					<td><input type="text" name="txtSec" id="txtSec" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Contact #:&nbsp;</td>
					<td><input type="text" name="txtCtk" id="txtCtk" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Email Address:&nbsp;</td>
					<td><input type="text" name="txtEml" id="txtEml" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Father's name:&nbsp;</td>
					<td><input type="text" name="txtFad" id="txtFad" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Mother's name:&nbsp;</td>
					<td><input type="text" name="txtMad" id="txtMad" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<td colspan="2">
						<a href="add_user_menu.php" style="text-decoration:none">
							<input type="button" value="Back">
						</a>
						<input type="submit" name="btnSnd" id="btnSnd" value="Send">
						<input type="button" name="btnRst" id="btnRst" value="Reset" onclick="wiper();">
					</td>
				</tr>
			</table>
			</div>
		</form>
	</body>
</div>
</html>
<?php 
	}
	else {
	header("location:index.php");
}
?>


