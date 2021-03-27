<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3' || 
   $_SESSION['role']=='2' || $_SESSION['role']=='1') {
 ?>
<html>
<head>
<title>Quick guide</title>
<link rel="stylesheet" type="text/css" href="embelish/help_decor.css"></link>
</head>
<body>
	<div id="wraper">
		<form name="main" id="main" method="POST" action="sindex.php">
		<div id="header">Help</div>
		<div id="content">
			<img src="IMG/BG/guide.jpg"></br>
			
			<input type="submit" name="btnbck" id="btnbck" value="&laquo;&nbsp;Back">
		</form>
		</div>
		<div id="footer">Copyright: 2014-2015</div>
	</div>
</body>
</html>
<?php
	}
	else {
	header("location:index.php");
}
?>