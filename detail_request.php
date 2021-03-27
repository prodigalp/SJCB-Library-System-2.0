<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
include("config.php");   

$id = $_GET['id'];
if(!is_numeric($id)) {
	die("Data is not a number");
}
	$q1 = "SELECT * FROM tblborrow WHERE id='$id'";
	$q2 = mysql_query($q1);
	

?>

<?php
	if(isset($_POST['btnUpd'])) {
		if("Update Transaction"==$_POST['btnUpd']) {
			$com = $_POST['txtCom'];
			$hid = $_POST['txtHid'];
			
			$q1 = "UPDATE tblborrow SET comments='$com' WHERE id='$hid'";
			mysql_query($q1);
			echo("
			<script type='text/javascript'>
				alert('Comments successfully inserted');
				window.location='request.php';
			</script>
			");
			
		}
	}
?>
<html>
<head>
<title>Detail Request</title>
<link rel="stylesheet" type="text/css" href="embelish/detail_request_decor.css"></link>
<script type="text/javascript" src="impress/library_color.js"></script>
</head>
<body>
	<div id="wraper">
	<div id="header2">Transaction Detail </div>
	
		<div id="content">
		<?php $row = mysql_fetch_object($q2); ?>
		<form method="POST" name="form1" id="form1">
			<table>
				<tr>
					<td><input type="hidden" name="txtHid" id="txtHid" size="4" value="<?php echo $row->id?>" readonly></td>
				</tr>
				<tr>
					<td>Borrowers number:&nbsp;</td>
					<td><input type="text" size="4" value="<?php echo $row->ctrlnum?>" readonly></td>
				</tr>
				<tr>
					<td>Borrowers name:&nbsp;</td>
					<td><input type="text" size="50" value="<?php echo $row->fname.' '.$row->mname.' '.$row->lname ?>" readonly></td>
				</tr>
				<tr>
					<td>Book number:&nbsp;</td>
					<td><input type="text" size="50" value="<?php echo $row->accnum?>" readonly></td>
				</tr>
				<tr>
					<td>Book title:&nbsp;</td>
					<td><input type="text" size="50" value="<?php echo $row->title?>" readonly></td>
				</tr>
				<tr>
					<td>Book Author:&nbsp;</td>
					<td><input type="text" size="50" value="<?php echo $row->author?>" readonly></td>
				</tr>
				<tr>
					<td>Time of entry:&nbsp;</td>
					<td><input type="text" size="50" value="<?php echo $row->timer?>" readonly></td>
				</tr>
				<tr>
					<td>Borrowed date:&nbsp;</td>
					<td><input type="text" size="50" value="<?php echo $row->dater1?>" readonly></td>
				</tr>
				<tr>
					<td>Expiration date:&nbsp;</td>
					<td><input type="text" size="50" value="<?php echo $row->dater2?>" readonly></td>
				</tr>
				<tr>
					<td>Mode:&nbsp;</td>
					<td><input type="text" size="50" value="<?php echo $row->mode?>" readonly></td>
				</tr>
				<tr>
					<td>Remarks:&nbsp;</td>
					<td><input type="text" size="50" value="<?php echo $row->remarks?>" readonly></td>
				</tr>
				<tr>
					<td>Comment:&nbsp;</td>
					<td><input type="text" name="txtCom" id="txtCom" size="50" value="<?php echo $row->comments?>" placeholder="Insert something here" ></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:right">
						<input type="submit" name="btnUpd" id="btnUpd" value="Update Transaction">
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:right">
						<a href="request.php" style="text-decoration:none" title="Back to main page">
							<input type="button" value="&laquo;&nbsp;&nbsp;Back">&nbsp;&nbsp;&nbsp;
						</a>
					</td>
				</tr>
				
			</table>
		
		</form>
			
			
		</div>
		
		
		<div id="footer">Programmer: Eyestrain [Tapar]</div>
	</div>
</body>
</html>
<?php
	}
else {
	header("location:index.php");
	}
?>