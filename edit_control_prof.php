<?php
	session_start();
	if($_SESSION['role']=='4') {
	include("config.php");
	
	$id = $_GET['id'];
	if(!is_numeric($id)) 
		die("Data is not a number");
	
	$q1  = "SELECT * FROM tbluser t1, tblprof t2 WHERE t1.id='$id' && t2.ctrlnum='$id'";
	$q2  = mysql_query($q1);
	$row = mysql_fetch_object($q2);
	
	if(isset($_POST['btnUpd'])) {
		if("Update"==$_POST['btnUpd']) {
			$fnm = $_POST['txtFnm'];
			$lnm = $_POST['txtLnm'];
			$mnm = $_POST['txtMnm'];
			$usr = $_POST['txtUsr'];
			$typ = $_POST['Typ'];
			$rol = $_POST['Rol'];
			$emp = $_POST['txtEmp'];
			$eml = $_POST['txtEml'];
			$ctk = $_POST['txtCtk'];
			
			$loc1 = " UPDATE tbluser SET
				fname='$fnm',
				mname='$mnm',
				lname='$lnm',
				username='$usr',
				gtype='$typ',
				role='$rol' WHERE id='$id' ";
			mysql_query($loc1);
			
			// For junk update
			$r1 = " UPDATE tbljunk SET 
					fname='$fnm',
					mname='$mnm',
					lname='$lnm',
					debit='$usr',
					gtype='$typ',
					role='$rol'
					WHERE ctrlnum='$id' ";
			mysql_query($r1);
			
			$loc2 = " UPDATE tblprof SET
				empnum='$emp',
				email='$eml',
				contactnum='$ctk' WHERE ctrlnum='$id'";
			mysql_query($loc2);
			echo("
				<script type='text/javascript'>
				alert('Record Successfully Updated!');
				window.location='user_control_prof.php';
				</script> 
				");
			}
	}
?>

<html>
<head>
<title>Professor's Application Form</title>
<link rel="stylesheet" type="text/css" href="embelish/edit_control_prof_decor.css"></link>
<script type="text/javascript">
	function validate() {
		var x = confirm("Do you really want to update this record?");
		if(x==false) {
			alert("Operation cancelled!");
			return false;
		}
		else if(x==true) {
			alert("Press OK for verification.");
			return true;
		}
	}
</script>
</head>
<div id="wraper">
	<body>
		<form method="POST" name="form1" id="form1" onsubmit="return validate();">
			<div id="header">Professor</div>
			<div id="content">
			<table>
				<tr>
					<td>FirstName:&nbsp;</td>
					<td><input type="text" name="txtFnm" id="txtFnm" size="40" value="<?php echo $row->fname;?>" autocomplete="off"></td>
				</tr>
				<tr>
					<td>MiddleName:&nbsp;</td>
					<td><input type="text" name="txtMnm" id="txtMnm" size="40" value="<?php echo $row->mname;?>" autocomplete="off"></td>
				</tr>
				<tr>
					<td>LastName:&nbsp;</td>
					<td><input type="text" name="txtLnm" id="txtLnm" size="40" value="<?php echo $row->lname;?>" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Username:&nbsp;</td>
					<td><input type="text" name="txtUsr" id="txtUsr" size="40" value="<?php echo $row->username;?>" autocomplete="off"></td>
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
					<td><input type="text" name="txtEmp" id="txtEmp" size="40" value="<?php echo $row->empnum;?>" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Email Address:&nbsp;</td>
					<td><input type="text" name="txtEml" id="txtEml" size="40" value="<?php echo $row->email;?>" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Contact #:&nbsp;</td>
					<td><input type="text" name="txtCtk" id="txtCtk" size="40" value="<?php echo $row->contactnum;?>"autocomplete="off"></td>
				</tr>
				<tr>
					<td colspan="2">
						<a href="user_control_prof.php" style="text-decoration:none">
							<input type="button" value="Back">
						</a>
						<input type="submit" name="btnUpd" id="btnUpd" value="Update">
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