<?php
	session_start();
	if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
	include("config.php");
	
	$id = $_GET['id'];
	if(!is_numeric($id)) {
		echo("
				<script type='text/javascript'>
				alert('Data is not a number!');
				window.location='pwd_reset.php';
				</script>
			");
	}
	
	if(isset($_POST['btnYes'])) {
		if("Yes"==$_POST['btnYes']) {
			$pwd = md5($_POST['txtpwd']);
			// Password reseting to 12345
			$q1 = "UPDATE tbluser SET password='$pwd' WHERE id='$id'";
			mysql_query($q1);
			
			echo "<script type='text/javascript'>
				alert('Password successfully reset!');
				window.location='sindex.php';
				</script>";
		}
	}
	else {
		$q2 = "SELECT * FROM tblborrow WHERE title='___'"; 
		mysql_query($q2);
	}
	
	if(isset($_POST['btnNo'])) {
		if("No"==$_POST['btnNo']) {
			echo "<script type='text/javascript'>
				alert('Operation cancelled!');
				window.location='pwd_reset.php';
				</script>";
		}
	}
		
?>
<html>
<head>
<title>Password Reset</title>
<link rel="stylesheet" type="text/css" href="embelish/delete_college_record_decor.css"></link>
</head>
<body>
	<form name="form1" id="form1" method="POST">
	<input type="hidden" name="txtpwd" id="txtpwd" value="12345">
	<div id="wraper">
	<div id="header">Confirmation</div>
		<div id="content">
			<table>
				<tr>
					<td colspan="2">Do you really want to reset the password of this user?</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="btnYes" id="btnYes" value="Yes">
						<input type="submit" name="btnNo" id="btnNo" value="No">
					</td>
				</tr>
			</table>
		</div>
	</div>
	</form>
</body>
</html>


<?php
	}
	else {
	header("location:index.php");
}
?>
	