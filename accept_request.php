<?php
	session_start();
	if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
	include("config.php");
	
	/* Transfer data to $id variable */
	$id = $_GET['id'];
	/* if data is not a number, error will appear */
	if(!is_numeric($id)) {
		echo("
				<script type='text/javascript'>
				alert('Data is not a number!');
				window.location='request.php';
				</script>
			");
	}
	
		/* If button Yes is clicked, Accept data */
		if(isset($_POST['btnYes'])) {
			if("Yes"==$_POST['btnYes']) {
				// Item Accepted, add 3 days  to the date of request.
				$q1 = "UPDATE tblborrow SET dater2 = DATE_ADD(dater1,INTERVAL 3 DAY) WHERE id = '$id'";
				mysql_query($q1);
				
				// Remarks will be set to 'Granted '
				$q2 = "UPDATE tblborrow SET remarks = 'Granted' WHERE id = '$id'";
				mysql_query($q2);
					
				echo "<script type='text/javascript'>
					alert('Data successfully Accepted!');
					window.location='request.php';
					</script>";
			}
		}
		
		/* If button No is clicked, Request cancelled */
		if(isset($_POST['btnNo'])) {
			if("No"==$_POST['btnNo']) {
				echo "<script type='text/javascript'>
					alert('Request cancelled!');
					window.location='request.php';
					</script>";
			}
		}
	}
	else {
		//session not recognized, return to main
		header("location:index.php");
	}
?>
<html>
<head>
<title>Accept Request Query</title>
<link rel="stylesheet" type="text/css" href="embelish/delete_college_record_decor.css"></link>
</head>
<body>
	<form name="form1" id="form1" method="POST">
	<div id="wraper">
	<div id="header">Confirmation</div>
		<div id="content">
			<table>
				<tr>
					<td colspan="2">Do you really want to Accept this request?</td>
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
