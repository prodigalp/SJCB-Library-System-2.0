<?php 
	session_start();
	if($_SESSION['role']=='4') {
	require("config.php");
	
	$id = $_GET['id'];
	if(!is_numeric($id)) { 
		echo('Data is not a number');
	}
	
	$q1  = "SELECT * FROM tbldictionary WHERE id='$id'";
	$q2  = mysql_query($q1);
	$row = mysql_fetch_object($q2);
	
	if(isset($_POST['btnUpd'])) {
		if("Update"==$_POST['btnUpd']) {
			$voc = $_POST['txtVoc'];
			$mea = $_POST['txtMea'];
			
			$q1 = " UPDATE tbldictionary SET
				word='$voc',
				meaning='$mea'
				WHERE id='$id' ";
			mysql_query($q1);
			echo("
				<script type='text/javascript'>
				alert('Word Successfully Updated!');
				window.location='setting_vocabulary.php';
				</script>
			");
		}
	}
	
?>

<html>
<head>
<title>Edit Vocabulary</title>
<link rel="stylesheet" type="text/css" href="embelish/edit_vocabulary_setting_decor.css"></link>
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
<body>
	<form name="form1" id="form1" method="POST" onsubmit="return validate();">
	<div id="wraper">
	<div id="header">Edit Vocabulary</div>
		<div id="content">
			<table>
				<tr>
					<td>Word:&nbsp;</td>
					<td><input type="text" name="txtVoc" id="txtVoc" size="36" autocomplete="off" value="<?php echo $row->word;?>"></td>
				</tr>
				<tr>
					<td>Meaning:&nbsp;</td>
					<td>
						<textarea id="meaning" cols="30" rows="10" name="txtMea" id="txtMea" autocomplete="off"><?php echo $row->meaning;?></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center">
						<a href="setting_vocabulary.php" style="text-decoration:none"><input type="button" value="&laquo;&nbsp;Back"></a>
						<input type="submit" name="btnUpd" id="btnUpd" value="Update">
					</td>
				</tr>
			</table>
		</form>
			<div id="footer">Programmer: Eyestrain [Tapar]</div>
		</div>
	</div>
</body>
</html>
<?php 
	}
	else {
	header("location:index.php");
}
?>