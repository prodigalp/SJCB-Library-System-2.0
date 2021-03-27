<?php
session_start();
if($_SESSION['role']=='4') {  
?>

<html>
<head>
<title>User Control Menu</title>
<link rel="stylesheet" type="text/css" href="embelish/user_control_menu_decor.css"></link>
</head>
<body>
	<div id="wraper">
		<div id="header">User Choices</div>
		<div id="content">
		<form name="main" id="main" method="POST">
			<!-- First Layer -->
			<div id="outside">
				<a href="user_control_highschool.php"><img src="IMG/ICN/set (19).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">Highschool</div>
			</div>
			<div id="outside">
				<a href="user_control_college.php"><img src="IMG/ICN/set (20).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">College</div>
			</div>
			<div id="outside">
				<a href="user_control_prof.php"><img src="IMG/ICN/set (11).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">Professor</div>
			</div>
			<div id="reset"></div><br>
			
			<a href="setting.php" style="text-decoration:none">
				<input type="button" value="Back">
			</a>	
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