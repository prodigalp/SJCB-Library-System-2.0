<?php
	session_start();
	if($_SESSION['role']=='4') {
	require("config.php");
	
		$id = $_GET['id'];
		if(!is_numeric($id)) {
			die("Data is not a number");
		}
		
		if(isset($_POST['btnYes'])) {
			if("Yes"==$_POST['btnYes']) {
				$q1 = "DELETE FROM tbldictionary WHERE id='$id' ";
				mysql_query($q1);
				
				echo("
					<script type='text/javascript'>
					alert('Record successfully deleted!');
					window.location='setting_vocabulary.php';
					</script>
				");
			}
		}
		
		if(isset($_POST['btnNo'])) {
			if("No"==$_POST['btnNo']) {
				echo("
					<script type='text/javascript'>
					alert('Operation cancelled!');
					window.location='setting_vocabulary.php';
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
<title>Delete College Record</title>
<link rel="stylesheet" type="text/css" href="embelish/delete_vocabulary_setting_decor.css"></link>
</head>
<body>
	<form name="form1" id="form1" method="POST">
	<div id="wraper">
	<div id="header">Confirmation</div>
		<div id="content">
			<table>
				<tr>
					<td colspan="2">Do you really want to delete this record?</td>
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


