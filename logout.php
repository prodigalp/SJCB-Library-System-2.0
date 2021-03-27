<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3' ||
   $_SESSION['role']=='2' || $_SESSION['role']=='1') {
require("config.php");
// Use to delete current user from tblcurrent
$act = $_POST['txtNme'];
$usr = $_POST['txtUsr'];
$pwd = $_POST['txtPwd'];
$del = "DELETE FROM tblcurrent WHERE fname='$act' && username='$usr' && password='$pwd'";
mysql_query($del);
// Clear session
unset($_SESSION['ctrl']);
unset($_SESSION['name']);
unset($_SESSION['gtyp']);
unset($_SESSION['role']);
unset($_SESSION['usr']);
unset($_SESSION['pwd']);
?>

<html>
<head>
<title>Log-out</title>
</head>
<body>
	<center>
	<br><br><br><br><br>
	<?php echo "<b>" .$act. "</b>" ?>
	<label>&nbsp;Successfully Log-out!</label></br>
	<label><a href="index.php">Log-in Again</a></label></br>
	</center>
</body>
</html>

<?php
	}
else {
	header("location:index.php");
}
?>