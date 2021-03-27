<?php
session_start();
if($_SESSION['role']=='4') {  
?>

<html>
<head>
<title>Library Settings</title>
<link rel="stylesheet" type="text/css" href="embelish/setting_decor.css"></link>
</head>
<body>
	<div id="wraper">
		<div id="header">Settings</div>
		<div id="content">
		<form name="main" id="main" method="POST">
			<!-- First Layer -->
			<div id="outside">
				<a href="user_control_menu.php"><img src="IMG/ICN/set (6).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">User Control</div>
			</div>
			<div id="outside">
				<a href="setting_vocabulary.php"><img src="IMG/ICN/set (16).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">Vocabulary</div>
			</div>
			<div id="outside">
				<a href="magazine_menu.php"><img src="IMG/ICN/set (9).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">Magazine</div>
			</div>
			
			<div id="reset"></div>
			
			<div id="outside">
				<a href="book_menu.php"><img src="IMG/ICN/set (10).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">Books</div>
			</div>
			<div id="outside">
				<a href="double_entry.php"><img src="IMG/ICN/set (2).jpg"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">Double entry</div>
			</div>
			<div id="outside">
				<a href="#"><img src="IMG/ICN/set (12).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">Bounce back</div>
			</div>
			
			<div id="reset"></div><br>
			
			
			
			<a href="sindex.php" style="text-decoration:none">
				<input type="button" value="Home">
			</a>	
		</form>
		</div>
		<div id="footer">Programmer: Eyestrain</div>
	</div>
</body>
</html>
<?php
	}
	else {
	header("location:index.php");
}
?>