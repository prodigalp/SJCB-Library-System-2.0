<?php
	session_start();
	if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
	include("config.php");
	
	$id = $_GET['id'];
	if(!is_numeric($id)) {
		echo("
				<script type='text/javascript'>
				alert('Data is not a number!');
				window.location='request.php';
				</script>
			");
	}
	
	if(isset($_POST['btnYes'])) {
		if("Yes"==$_POST['btnYes']) {
			// Item on watchlist
			$q1 = "UPDATE tblborrow SET remarks='Watchlist' WHERE id = '$id'";
			mysql_query($q1);
			
			echo "<script type='text/javascript'>
				alert('Borrowers need to be inform immediately!');
				window.location='request.php';
				</script>";
		}
	}
	
	if(isset($_POST['btnNo'])) {
		if("No"==$_POST['btnNo']) {
			echo "<script type='text/javascript'>
				alert('Operation Cancelled!');
				window.location='request.php';
				</script>";
		}
	}
?>
<html>
<head>

<title>Book returned!</title>
<link rel="stylesheet" type="text/css" href="embelish/delete_college_record_decor.css"></link>
</head>
<body>
	<form name="form1" id="form1" method="POST">
	<div id="wraper">
	<div id="header">Confirmation</div>
		<div id="content">
			<table>
				<tr>
					<td colspan="2">Transfer borrower to watchlist?</td>
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
	