<?php
	session_start();
	/* Check for valid user session */
	if($_SESSION['role']=='3' || $_SESSION['role']=='4') {
	include("config.php");
	require('calendar/tc_calendar.php');
	
	/*Assign value to the variables if button 'Send' is clicked */
	if(isset($_POST['btnSnd'])) {
		if("Send"==$_POST['btnSnd']) {
			// First set value, use to insert data to tbluser.
			$fnm = $_POST['txtFnm'];
			$lnm = $_POST['txtLnm'];
			$mnm = $_POST['txtMnm'];
			$usr = $_POST['txtUsr'];
			$jnk = $_POST['txtPwd'];
			$pwd = md5($_POST['txtPwd']);
			$typ = $_POST['Typ'];
			$rol = $_POST['Rol'];
			
			// Second set value, use to insert data to tblcollege.
			$adr = $_POST['txtAdr'];
			$std = $_POST['txtStd'];
			$bdy = isset($_REQUEST["dater1"]) ? $_REQUEST["dater1"] : "";
			$gdr = $_POST['txtGdr'];
			$crs = $_POST['txtCrs'];
			$lvl = $_POST['txtLvl'];
			$ctk = $_POST['txtCtk'];
			$eml = $_POST['txtEml'];
			$fad = $_POST['txtFad'];
			$mad = $_POST['txtMad'];
			
			
			// Data inserted to tbluser (first set value)
			$loc1 = "INSERT INTO tbluser(fname,lname,mname,username,password,gtype,role)
					 VALUES('$fnm','$lnm','$mnm','$usr','$pwd','$typ','$rol')";
			mysql_query($loc1);
			
			/* Get the highest value of id, use to track other data to the other tables */
			$x = "SELECT id FROM tbluser ORDER BY id DESC LIMIT 1";
			$a = mysql_query($x);
			$b = mysql_fetch_array($a);
			$c = $b['id'];
			
			// Data inserted to tbljunk, along with the current highest id number, Use for password viewer
			$log1 = "INSERT INTO tbljunk(fname,lname,mname,debit,credit,gtype,role,ctrlnum)
					 VALUES('$fnm','$lnm','$mnm','$usr','$jnk','$typ','$rol','$c')";
			mysql_query($log1);
			
			// Data inserted to tblcollege, along with the current highest id number (second set value)
			$loc2 = "INSERT INTO tblcollege(address,studnum,bday,gender,course,yearlevel,contactnum,email,fathersname,mothersname,ctrlnum)
			         VALUES('$adr','$std','$bdy','$gdr','$crs','$lvl','$ctk','$eml','$fad','$mad','$c')";
			mysql_query($loc2);
			// Display a successfull message on the screen, return to add user menu afterwards.
			echo (" 
				<script type='text/javascript'>
				alert('Successful College Sign-up!');
				window.location='add_user_menu.php';
				</script>
			");

		}
	}
mysql_close($con);
?>


<html>
<head>
<title>College Application Form</title>
<link rel="stylesheet" type="text/css" href="embelish/college_decor.css"></link>
<script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript">
	<!-- Assign value to the variables to check if the user entry is blank -->
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
		var j = document.getElementById('dater1').value; 
		var k = document.getElementById('txtGdr').value;
		var m = document.getElementById('txtLvl').value; 
		var n = document.getElementById('txtCtk').value;
		var o = document.getElementById('txtEml').value;
		var p = document.getElementById('txtFad').value;
		var q = document.getElementById('txtMad').value;
		var r = document.getElementById('txtCrs').value;
		if(a=='' || b=='' || c=='' || d=='' || e=='' || f=='' || g=='' || h=='' || i=='' ||
			j=='0000-00-00' || k=='---' || m=='---' || n=='' || o=='' || p=='' || q=='' || r=='') {
			alert("WARNING: Blank entry is not allowed!");
			return false;
		}
		alert("Press OK for verification!");
		return true;
	}
	
	<!-- Clear textbox -->
	function wiper() {
		form1.txtFnm.value=""; form1.txtMnm.value=""; form1.txtLnm.value=""; form1.txtUsr.value=""; form1.txtPwd.value="";
		form1.txtAdr.value=""; form1.txtStd.value=""; form1.txtMad.value=""; form1.txtFad.value=""; 
		form1.txtEml.value=""; form1.txtCtk.value="";
	}
</script>
</head>
<div id="wraper">
	<body>
		<form method="POST" name="form1" id="form1" onsubmit="return validate();">
			<div id="header">College</div>
			<div id="content">
			<!-- Gathering of data -->
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
					<td><input type="text" name="Typ" id="Typ" size="15" value="College" readonly></td>
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
					<!-- Use for date picker -->
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
					<td>Course:&nbsp;</td>
					<td>
						<select name="txtCrs" id="txtCrs" size="1">
						<option>---</option>
						<option>AB</option>
						<option>ACT</option>
						<option>BEED</option>
						<option>BSA</option>
						<option>BSBA</option>     
						<option>BSCS</option>
						<option>BSED</option>
						<option>BSHRM</option>
						<option>BSIS</option>
						<option>BSN</option>
						<option>BSPE</option>
						<option>BSTM</option>
						<option>Caregiver</option>
						<option>DHRM</option>
						<option>DM</option>
						<option>HCS</option>
						<option>TCP</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td>Year Level:&nbsp;</td>
					<td> 
						<select name="txtLvl" id="txtLvl" size="1">
							<option>---</option>
							<option>I</option>
							<option>II</option>
							<option>III</option>
							<option>IV</option>
						</select>
					</td>
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
	header("location: index.php");
	}
?>