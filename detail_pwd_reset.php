<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
include("config.php");   

$id = $_GET['id'];
if(!is_numeric($id)) {
	die("Data is not a number");
}
	$q1 = "SELECT * FROM tbluser WHERE id='$id'";
	$q2 = mysql_query($q1);
	

?>


<html>
<head>
<title>Detail Request</title>
<link rel="stylesheet" type="text/css" href="embelish/detail_pwd_reset_decor.css"></link>
<script type="text/javascript" src="impress/library_color.js"></script>
</head>
<body>
	<div id="wraper">
	<div id="header2">Details </div>
	
		<div id="content">
		<?php $row = mysql_fetch_object($q2); ?>
		<form method="POST" name="form1" id="form1">
			<table>
				<tr>
					<td>ID:&nbsp;</td>
					<td><input type="text" size="4" value="<?php echo $row->id?>" readonly></td>
				</tr>
				<tr>
					<td>Fullname:&nbsp;</td>
					<td><input type="text" size="35" value="<?php echo $row->fname.' '.$row->mname.' '.$row->lname ?>" readonly></td>
				</tr>
				<tr>
					<td>Username:&nbsp;</td>
					<td><input type="text" size="35" value="<?php echo $row->username?>" readonly></td>
				</tr>
				<tr>
					<td>Group:&nbsp;</td>
					<td><input type="text" size="35" value="<?php echo $row->gtype?>" readonly></td>
				</tr>
				<tr>
					<td>Role:&nbsp;</td>
					<td><input type="text" size="35" value="<?php echo $row->role?>" readonly></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:right">
						<a href="pwd_reset.php" style="text-decoration:none" title="Back to main page">
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