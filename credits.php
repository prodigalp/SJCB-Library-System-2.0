<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3' || 
   $_SESSION['role']=='2' || $_SESSION['role']=='1') {
 ?>
<html>
<head>
<title>Library System Main Menu</title>
<link rel="stylesheet" type="text/css" href="embelish/credits_decor.css"></link>
</head>
<body>
	<div id="wraper">
		<form name="main" id="main" method="POST">
		<div id="header">Credits</div>
		<div id="content">
			<img src="IMG/BG/emblem.jpg"></br>
		</form>
		</div>
		
		<div id="footer"><a href="sindex.php">&laquo;&nbsp;Back&nbsp;</a></div>
		
	</div>
</body>
</html>
<?php
	}
	else {
	header("location:index.php");
}
?>