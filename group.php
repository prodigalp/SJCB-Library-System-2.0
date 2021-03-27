<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3' || 
   $_SESSION['role']=='2' || $_SESSION['role']=='1') {
 ?>
<html>
<head>
<title>Organization</title>
<link rel="stylesheet" type="text/css" href="embelish/group_decor.css"></link>
</head>
<body>
	<div id="wraper">
		<form name="main" id="main" method="POST" action="sindex.php">
		<div id="header">Organizational Chart</div>
		<div id="content">
			<img src="IMG/BG/group.jpg"></br>
		</div>
		
		<div id="footer">
			<input type="submit" value="&laquo;&nbsp;Back">
			Copyright: 2014-2015
		</div>
		</form>
	</div>
</body>
</html>
<?php
	}
	else {
	header("location:index.php");
}
?>