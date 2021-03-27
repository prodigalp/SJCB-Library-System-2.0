<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3') {  
?>

<html>
<head>
<title>Add User Menu</title>
<link rel="stylesheet" type="text/css" href="embelish/add_user_menu_decor.css"></link>
</head>
<body>
	<div id="wraper">
		<div id="header">New Profile</div>
		<div id="content">
		<form name="main" id="main" method="POST">
			<!-- First Layer -->
			<div id="outside">
				<a href="add_highschool.php"><img src="IMG/ICN/set (7).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">Highschool</div>
			</div>
			<div id="outside">
				<a href="add_college.php"><img src="IMG/ICN/set (22).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">College</div>
			</div>
			<div id="outside">
				<a href="add_professor.php"><img src="IMG/ICN/set (21).png"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">Instructors</div>
			</div>
			<div id="reset"></div><br>
			
			<a href="transact.php" style="text-decoration:none">
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
	header("location: index.php");
}
?>