<?php
	session_start();
	// Check for session validity.
	if($_SESSION['role']=='4' || $_SESSION['role']=='3' ||
	   $_SESSION['role']=='2' || $_SESSION['role']=='1') {
	   
	// Connect to the database.
	include("config.php");
	
	// Assign value of id to a variable 
	$id = $_GET['id'];
	
	// Verify if it is numeric.
	if(!is_numeric($id)) {
		echo ("
			<script type='text/javascript'>
			alert('Data is not a number');
			window.location='books.php';
			</script>
		");
	}
	
	// Search for the database on the 'id' criteria
	$result = "SELECT * FROM tblbooks WHERE accnum='$id'";
	$trans = mysql_query($result);
	
	// Display the value using fetch.
	$row = mysql_fetch_object($trans);
?>

<html>
<head>
<title>Basic View</title>
<link rel="stylesheet" type="text/css" href="embelish/basicview_decor.css"></link>
</head>
<body>
	<form method="GET">
	<div id="wraper">
		<div id="header">Basic information</div>
		<div id="content">
		
		<img src="IMG/BG/basicview.jpg">
		<div id="msg">
			<span class="lab">Title&nbsp;:&nbsp;</span><?php echo $row->title;?><br>
			<span class="lab">Author&nbsp;:&nbsp;</span><?php echo $row->author;?><br>
			<span class="lab">Category&nbsp;:&nbsp;</span><?php echo $row->category;?><br>
			<span class="lab">Subject&nbsp;:&nbsp;</span><?php echo $row->subject;?><br>
		</div>
		
		</div>
		<br><br>
		<div id="btn">
		<a href="details.php?id=<?php echo $id;?>" style="text-decoration:none">
		<input type="button" value="&laquo;&nbsp;&nbsp;Back">
		</a>
		</div>
	
		<div id="footer">Programmer: Eyestrain [Tapar]</div>
	</div>
	</form>
</body>
</html>



<?php
	}
	else {
		header("location:index.php");
	}
?>
	