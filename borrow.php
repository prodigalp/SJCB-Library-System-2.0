<?php
	session_start();
	// Check for session validity.
	if($_SESSION['role']=='4' || $_SESSION['role']=='3' ||
	   $_SESSION['role']=='2' || $_SESSION['role']=='1') {
	   
	// Connect to the database.
	include("config.php");
	
	// Assign value of id to a variable 
	$id1 = $_GET['id'];
	$id2 = $_GET['id2'];
	
	// Verify if it's numeric.
	if(!is_numeric($id1) || !is_numeric($id2)) {
		echo("
			<script type='text/javascript'>
			alert('Data is not a number');
			window.location='books.php';
			</script>
		");
	}
			
	// Use for book details
	$result1 = "SELECT * FROM tblbooks WHERE accnum='$id1'";
	$trans1 = mysql_query($result1);
			
	// Use for user information
	$result2 = "SELECT * FROM tbluser WHERE id='$id2'";
	$trans2 = mysql_query($result2);
			
	// Display value using fetch.
	$row = mysql_fetch_object($trans1);
	$bow = mysql_fetch_object($trans2);
?>


<html>
<head>
<title>Book Borrowing Properties</title>
<link rel="stylesheet" type="text/css" href="embelish/borrow_decor.css"></link>
</head>
<body>
	<form method="GET" >
	<div id="wraper">
	<div id="header">Library Slip</div>
	<div id="notes">
		<p><span class="tag">Note:</span> This serves as your barrowing form, please click the validate button to verify your transaction.</p>
	</div>
	
	<div id="t1">
		<table>
			<tr>
				<th colspan="2">Part 1 - Book Details</th>
			</tr>
			<tr>
				<td>ACC#:&nbsp;</td>
				<td><input type="text" name="txtAC" id="txtAC" size="10" value="<?php echo $row->accnum; ?>" readonly></td>
			</tr>
			<tr>
				<td>Title:&nbsp;</td>
				<td><input type="text" name="txtTL" id="txtTL" size="40" value="<?php echo $row->title; ?>" readonly></td>
			</tr>
			<tr>
				<td>Author:&nbsp;</td>
				<td><input type="text" name="txtAU" id="txtAU" size="40" value="<?php echo $row->author; ?>" readonly"></td>
			</tr>
			<tr>
				<td>Category:&nbsp;</td>
				<td><input type="text" name="txtCT" id="txtCT" size="40" value="<?php echo $row->category ?>" readonly></td>
			</tr>
		</table>
	</div>
	
	<div id="t2">
		<table>
			<tr>
				<th colspan="2">Part 2 - Student Information</th>
			</tr>
			<tr>
				<td>CTRL#:&nbsp;</td>
				<td><input type="text" name="txtCL" id="txtCL" size="10" value="<?php echo $bow->id ?>" readonly></td>
			</tr>
			<tr>
				<td>First:&nbsp;</td>
				<td><input type="text" name="txtFN" id="txtFN" size="40" value="<?php echo $bow->fname ?>" readonly></td>
			</tr>
			<tr>
				<td>Middle:&nbsp;</td>
				<td><input type="text" name="txtMN" id="txtMN" size="40" value="<?php echo $bow->mname ?>" readonly></td>
			</tr>
			<tr>
				<td>LastName:&nbsp;</td>
				<td><input type="text" name="txtLN" id="txtLN" size="40" value="<?php echo $bow->lname ?>" readonly></td>
			</tr>
		</table>
	</div>
	
	<div id="t3">
		<table>
			<tr>
			<td>
				<!-- Check to verify the book borrowing request -->
				<a href="verify.php?id=<?php echo $row->accnum; ?>&id2=<?php echo $bow->id ?>" style="text-decoration:none">
				<input type="button" name="btnVal" id="btnVal" value="Validate">
				</a>
				<!-- Back to the previous page -->
				<a href="details.php?id=<?php echo $row->accnum; ?>" style="text-decoration:none">
				<input type="button" name="btnBck" id="btnBck" value="&laquo;&nbsp;&nbsp;Back">
				</a>
			</td>
			</tr>
		</table>
	</div>
	</div>
	</form>
</body>
</html>
<?php 
	}
else {
	header("location:index.php");
}