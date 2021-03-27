<?php
	session_start();
	if($_SESSION['role']=='3' || $_SESSION['role']=='4') {
	include("config.php");
	
	if(isset($_POST['btnSnd'])) {
		if("Send"==$_POST['btnSnd']) {
			$fnm = $_POST['txtFnm'];
			$lnm = $_POST['txtLnm'];
			$mnm = $_POST['txtMnm'];
			$usr = $_POST['txtUsr'];
			$jnk = $_POST['txtPwd'];
			$pwd = md5($_POST['txtPwd']);
			$typ = $_POST['Typ'];
			$rol = $_POST['Rol'];
			$emp = $_POST['txtEmp'];
			$eml = $_POST['txtEml'];
			$ctk = $_POST['txtCtk'];
			
			$loc1 = "INSERT INTO tbluser(fname,lname,mname,username,password,gtype,role)
					 VALUES('$fnm','$lnm','$mnm','$usr','$pwd','$typ','$rol')";
			mysql_query($loc1);
			
			$x = "SELECT id FROM tbluser ORDER BY id DESC LIMIT 1";
			$y = mysql_query($x);
			$z = mysql_fetch_array($y);
			$a = $z['id'];
			
			// use for password viewer
			$log1 = "INSERT INTO tbljunk(fname,lname,mname,debit,credit,gtype,role,ctrlnum)
					 VALUES('$fnm','$lnm','$mnm','$usr','$jnk','$typ','$rol','$a')";
			mysql_query($log1);
			
			$loc2 = "INSERT INTO tblprof(empnum,email,contactnum,ctrlnum)
			         VALUES('$emp','$eml','$ctk','$a')";
			mysql_query($loc2);
			echo("
				<script type='text/javascript'>
				alert('New Professor Successfully Added!');
				window.location='transact.php';
				</script> 
				");
		}
	}
?>

<html>
<head>
<title>Professor's Application Form</title>
<link rel="stylesheet" type="text/css" href="embelish/prof_decor.css"></link>
<script type="text/javascript">
	function validate() {
		var a = document.getElementById('txtFnm').value;
		var b = document.getElementById('txtMnm').value;
		var c = document.getElementById('txtLnm').value;
		var d = document.getElementById('txtUsr').value;
		var e = document.getElementById('txtPwd').value;
		var f = document.getElementById('txtEmp').value;
		var g = document.getElementById('txtEml').value;
		var h = document.getElementById('txtCtk').value;
		if(a=='' || b=='' || c=='' || d=='' || e=='' || f=='' || g=='' || h=='') {
			alert("WARNING: Blank entry is not allowed!");
			return false;
		}
		else {
			alert("Press OK for verification!");
			return true;
		}
	}
	
	function wiper() {
		form1.txtFnm.value=""; form1.txtMnm.value=""; form1.txtLnm.value="";
		form1.txtUsr.value=""; form1.txtPwd.value=""; form1.txtEmp.value="";
		form1.txtEml.value=""; form1.txtCtk.value="";
		
	}
</script>
</head>
<div id="wraper">
	<body>
		<form method="POST" name="form1" id="form1" onsubmit="return validate();">
			<div id="header">Instructors</div>
			<div id="content">
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
					<td><input type="text" name="Typ" id="Typ" size="15" value="Professor" readonly></td>
				</tr>
				<tr>
					<td>Role:&nbsp;</td>
					<td><input type="text" name="Rol" id="Rol" size="15" value="2" readonly></td>
				</tr>
				<tr>
					<td>Employee #:&nbsp;</td>
					<td><input type="text" name="txtEmp" id="txtEmp" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Email Address:&nbsp;</td>
					<td><input type="text" name="txtEml" id="txtEml" size="40" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Contact #:&nbsp;</td>
					<td><input type="text" name="txtCtk" id="txtCtk" size="40" autocomplete="off"></td>
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