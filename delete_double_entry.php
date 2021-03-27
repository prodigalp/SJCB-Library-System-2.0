<?php
	session_start();
	if($_SESSION['role']=='4') {
	require("config.php");
	
		$id = $_GET['id'];
		if(!is_numeric($id)) {
			echo("
					<script type='text/javascript'>
					alert('Data is not a number!');
					window.location='double_entry.php';
					</script>
				");
		}
		
		if(isset($_POST['btnYes'])) {
			if("Yes"==$_POST['btnYes']) {
				$q1 = "DELETE FROM tblcurrent WHERE id='$id' ";
				mysql_query($q1);
				
				echo("
					<script type='text/javascript'>
					alert('Record successfully deleted!');
					window.location='double_entry.php';
					</script>
				");
			}
		}
		
		if(isset($_POST['btnNo'])) {
			if("No"==$_POST['btnNo']) {
				echo("
					<script type='text/javascript'>
					alert('Operation cancelled!');
					window.location='double_entry.php';
					</script>
				");
			}
		}
	}
	else {
		header("location:index.php");
	}
?>
<html>
<head>
<title>Delete User Record</title>
<link rel="stylesheet" type="text/css" href="embelish/delete_college_record_decor.css"></link>
</head>
<body>
	<form name="form1" id="form1" method="POST">
	<div id="wraper">
	<div id="header">Confirmation</div>
		<div id="content">
			<table>
				<tr>
					<td colspan="2">Do you really want to Erase this account?</td>
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
