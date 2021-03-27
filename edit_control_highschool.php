<?php
	session_start();
	if($_SESSION['role']=='4') {
	include("config.php");
	require('calendar/tc_calendar.php');
	
	$id = $_GET['id'];
	if(!is_numeric($id)) {
		echo("
				<script type='text/javascript'>
				alert('Data is not a number!');
				window.location='user_control_highschool.php';
				</script>
			");
	}
	
	$q1  = "SELECT * FROM tbluser t1, tblhigh t2 WHERE t1.id='$id' && t2.ctrlnum='$id'";
	$q2  = mysql_query($q1);
	$row = mysql_fetch_object($q2);
	
	if(isset($_POST['btnUpd'])) {
		if("Update"==$_POST['btnUpd']) {
			// First sets of value
			$fnm = $_POST['txtFnm'];
			$lnm = $_POST['txtLnm'];
			$mnm = $_POST['txtMnm'];
			$usr = $_POST['txtUsr'];
			//$pwd = md5($_POST['txtPwd']);
			$typ = $_POST['Typ'];
			$rol = $_POST['Rol'];
			
			// Second sets of value
			$adr = $_POST['txtAdr'];
			$std = $_POST['txtStd'];
			// Use for date value
			$bdy = $_POST['txtbdy'];
			$gdr = $_POST['txtGdr'];
			$lvl = $_POST['txtLvl'];
			$sec = $_POST['txtSec'];
			$ctk = $_POST['txtCtk'];
			$eml = $_POST['txtEml'];
			$fad = $_POST['txtFad'];
			$mad = $_POST['txtMad'];
			
			$q1 = " UPDATE tbluser SET 
					fname='$fnm',
					mname='$mnm',
					lname='$lnm',
					username='$usr',
					gtype='$typ',
					role='$rol'
					WHERE id='$id' ";
			mysql_query($q1);
			
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
			
			$q2 = " UPDATE tblhigh SET
					address='$adr',
					studnum='$std',
					bday='$bdy',
					gender='$gdr',
					yearlevel='$lvl',
					section='$sec',
					contactnum='$ctk',
					email='$eml',
					fathersname='$fad',
					mothersname='$mad'
					WHERE ctrlnum='$id' ";
			mysql_query($q2);
			
			echo (" 
				<script type='text/javascript'>
				alert('Record Successfully Updated!');
				window.location='user_control_highschool.php';
				</script>
			");
		}
	}
mysql_close($con);
?>


<html>
<head>
<title>Highschool Setting</title>
<link rel="stylesheet" type="text/css" href="embelish/edit_control_highschool_decor.css"></link>
<script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript">
	function validate() {
		var x = confirm("Do you really want to update this record?");
		if(x==false) {
			alert("Operation cancelled!");
			return false;
		}
		else if(x==true) {
			alert("Press OK for verification");
			return true;
		}
	}
</script>
</head>
<div id="wraper">
	<body>
		<form method="POST" name="form1" id="form1" onsubmit="return validate();">
			<div id="header">Highschool</div>
			<div id="content">
			<table id="t1">
				<tr>
					<td>FirstName:&nbsp;</td>
					<td><input type="text" name="txtFnm" id="txtFnm" size="35" 
						autocomplete="off" value="<?php echo $row->fname;?>"></td>
				</tr>
				<tr>
					<td>MiddleName:&nbsp;</td>
					<td><input type="text" name="txtMnm" id="txtMnm" size="35" 
						autocomplete="off" value="<?php echo $row->mname;?>"</td>
				</tr>
				<tr>
					<td>LastName:&nbsp;</td>
					<td><input type="text" name="txtLnm" id="txtLnm" size="35" 
						autocomplete="off" value="<?php echo $row->lname;?>"></td>
				</tr>
				<tr>
					<td>Username:&nbsp;</td>
					<td><input type="text" name="txtUsr" id="txtUsr" size="35" 
						autocomplete="off" value="<?php echo $row->username;?>"></td>
				</tr>
				<tr>
					<td>Group Type:&nbsp;</td>
					<td><input type="text" name="Typ" id="Typ" size="15" 
						autocomplete="off" value="Highschool" readonly></td>
				</tr>
				<tr>
					<td>Role:&nbsp;</td>
					<td><input type="text" name="Rol" id="Rol" size="15" 
						autocomplete="off" value="2" readonly></td>
				</tr>
				<tr>
					<td>Address #:&nbsp;</td>
					<td><input type="text" name="txtAdr" id="txtAdr" size="35" 
						autocomplete="off" value="<?php echo $row->address;?>"></td>
				</tr>
				<tr>
					<td>Studnum:&nbsp;</td>
					<td><input type="text" name="txtStd" id="txtStd" size="35" 
						autocomplete="off" value="<?php echo $row->studnum;?>"></td>
				</tr>
				<tr>
					<td>Birthday:&nbsp;</td>
					<td><input type="text" name="txtbdy" id="txtbdy" size="35" 
						autocomplete="off" value="<?php echo $row->bday;?>"></td>
					
				</tr>
				<tr>
					<td>Gender:&nbsp;</td>
					<td><input type="text" name="txtGdr" id="txtGdr" size="35" 
						autocomplete="off" value="<?php echo $row->gender;?>"></td>
				</tr>
				<tr>
					<td>Year Level:&nbsp;</td>
					<td><input type="text" name="txtLvl" id="txtLvl" size="35" 
						autocomplete="off" value="<?php echo $row->yearlevel;?>"></td> 
				</tr>
				<tr>
					<td>Section:&nbsp;</td>
					<td><input type="text" name="txtSec" id="txtSec" size="35" 
						autocomplete="off" value="<?php echo $row->section;?>"></td>
				</tr>
				<tr>
					<td>Contact #:&nbsp;</td>
					<td><input type="text" name="txtCtk" id="txtCtk" size="35" 
						autocomplete="off" value="<?php echo $row->contactnum;?>"></td>
				</tr>
				<tr>
					<td>Email Address:&nbsp;</td>
					<td><input type="text" name="txtEml" id="txtEml" size="35" 
					autocomplete="off" value="<?php echo $row->email;?>"></td>
				</tr>
				<tr>
					<td>Father's name:&nbsp;</td>
					<td><input type="text" name="txtFad" id="txtFad" size="35" 
					autocomplete="off" value="<?php echo $row->fathersname;?>"></td>
				</tr>
				<tr>
					<td>Mother's name:&nbsp;</td>
					<td><input type="text" name="txtMad" id="txtMad" size="35" 
						autocomplete="off" value="<?php echo $row->mothersname;?>"></td>
				</tr>
				<tr id="btn">
					<td colspan="2">
						<a href="user_control_highschool.php" style="text-decoration:none">
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



