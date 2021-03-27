<?php 
	session_start();
	if($_SESSION['role']=='4') {
	require("config.php");
	
	$id = $_GET['id'];
	if(!is_numeric($id)) { die('Data is not a number');}
	
	$q1  = "SELECT * FROM tblmagazine WHERE id='$id'";
	$q2  = mysql_query($q1);
	$row = mysql_fetch_object($q2);
	
	if(isset($_POST['btnUpd'])) {
		if("Update"==$_POST['btnUpd']) {
			$acc = $_POST['txtAcc'];
			$tle = $_POST['txtTle'];
			$dt1 = $_POST['txtd1'];
			$dt2 = $_POST['txtd2'];
			
			$r1 = "UPDATE tblmagazine SET
				accnum='$acc',
				title='$tle',
				dater1='$dt1',
				dater2='$dt2'
				WHERE id='$id'";
			mysql_query($r1);
			echo("
				<script type='text/javascript'>
				alert('Record Successfully Updated!');
				window.location='magazine_menu.php';
				</script>
			");
		}
	}
			
?>

<html>
<head>
<title>New Magazine</title>
<link rel="stylesheet" type="text/css" href="embelish/edit_magazine_decor.css"></link>
<script type="text/javascript">
<!--
	<!-- Checking for blank entry -->
	function validate() {
		var x = document.getElementById('txtAcc').value;
		var y = document.getElementById('txtTle').value;
		var z = document.getElementById('txtd1').value;
		var w = document.getElementById('txtd2').value;
		if(x=='' || y=='' || z=='0000-00-00' || w=='0000-00-00') {
			alert("WARNING: Blank entry is not allowed!")
			return false;
		}
		
		var a = confirm("Do you really want to update this record?");
		if(a==false) {
			alert("Operation cancelled");
			return false;
		}
		else if(a==true) {
			alert("Press OK for verification!");
			return true;
		}
	}
	
	<!-- Color ON -->
	function c_ON(str) {
		document.getElementById('txt'+str).style.backgroundColor = "#FFFF00";
	}
	<!-- Color OFF -->
	function c_OFF(str) {
		document.getElementById('txt'+str).style.backgroundColor = "#FFF";
	}
-->
</script>
</head>
<body>
	<form name="form1" id="form1" method="POST" onsubmit="return validate();">
	<div id="wraper">
	<div id="header">new magazine</div>
		<div id="content">
			<table>
				
				<tr>
					<td>Accession #:&nbsp;</td>
					<td><input type="text" name="txtAcc" id="txtAcc" size="10" value="<?php echo $row->accnum;?>" readonly
						autocomplete="off" onclick="c_ON('Acc');" onblur="c_OFF('Acc');"></td>
				</tr>
				<tr>
					<td>Title:&nbsp;</td>
					<td><input type="text" name="txtTle" id="txtTle" size="35" value="<?php echo $row->title;?>"
						autocomplete="off" onclick="c_ON('Tle');" onblur="c_OFF('Tle');"></td>
				</tr>
				<tr>
					<td>Magazine Date:&nbsp;</td>
					<td><input type="text" name="txtd1" id="txtd1" size="10" value="<?php echo $row->dater1;?>"
						autocomplete="off" onclick="c_ON('d1');" onblur="c_OFF('d1');"></td>
				</tr>
				<tr>
					<td>Date Issued:&nbsp;</td>
					<td><input type="text" name="txtd2" id="txtd2" size="10" value="<?php echo $row->dater2;?>"
						autocomplete="off" onclick="c_ON('d2');" onblur="c_OFF('d2');"></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center">
						<a href="magazine_menu.php" style="text-decoration:none"><input type="button" value="&laquo;&nbsp;Back"></a>
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