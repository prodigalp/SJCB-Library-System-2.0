<?php
	session_start();
	if($_SESSION['role']=='4') {
	require("config.php");
	
	$id = $_GET['id'];
	$gp = $_GET['id2'];
	
	if($gp=='Professor') {
		
		}
	else if($gp=='College') {
		echo "College";
	}
	else if($gp=='Highschool') {
		echo "Highschool";
	}

?>


<?php
	}
	else {
	header("location:index.php");
}
