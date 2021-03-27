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
		echo "Data is not a number";
		exit;
	}
			
	// Use to find book entry in tblborrow
	$q1 = "SELECT accnum,title,author FROM tblborrow WHERE accnum='$id1'";
	$q2 = mysql_query($q1);
	// Count number of rows
	$c1 = mysql_num_rows($q2);
	
	// Use to find user entry in tblborrow
	$r1 = "SELECT ctrlnum,fname,mname,lname FROM tblborrow WHERE ctrlnum='$id2'";
	$r2 = mysql_query($r1);
		// Count number of rows
	$c2 = mysql_num_rows($r2);
	
	// Check if the book is already borrowed
	if($c1>=1) {
		die(" 
		<script type='text/javascript'>
		alert('Not yet available, Book already in use!');
		window.location='sindex.php';
		</script>
		");
	}
	// Check if the user already borrowed 3 books
	if($c2>=3) {
		die(" 
		<script type='text/javascript'>
		alert('You already borrowed 3 books!');
		window.location='sindex.php';
		</script>
		");
	}
	// If no error found, Insert books and user information into tblborrow
	else {
		$s1 = "SELECT accnum,title,author FROM tblbooks WHERE accnum='$id1'";
		$s2 = mysql_query($s1);
		
		$t1 = "SELECT id,fname,mname,lname FROM tbluser WHERE id='$id2'";
		$t2 = mysql_query($t1);
		
		// Display the value using fetch.
		$row1 = mysql_fetch_object($s2);
		$row2 = mysql_fetch_object($t2);
		
		
		
		$rp1 = "INSERT INTO tblborrow(accnum,title,author,ctrlnum,fname,mname,lname,timer,dater1,mode,remarks)
				VALUES('$row1->accnum','$row1->title','$row1->author','$row2->id','$row2->fname','$row2->mname',
				'$row2->lname',current_time(),current_date(),'Borrow','HOLD')";
		mysql_query($rp1);
		
		die(" 
		<script type='text/javascript'>
		alert('Transaction submitted to the server!');
		window.location='sindex.php';
		</script>
		");
		
	}
?>


<html>
<head>
<title>Book borrowing properties</title>
<link rel="stylesheet" type="text/css" href="embelish/borrow_decor.css"></link>
</head>
<body>
	<form method="GET" >
	<div id="wraper">
	<div id="header">Verification Area</div>
	
	<div id="t3">
		<table>
			<tr>
			<td>
				<!-- Check to verify the book borrowing request -->
				<a href="verify.php?id=<?php echo $row->accnum; ?>&id2=<?php echo $bow->id ?>" style="text-decoration:none">
				<input type="button" name="btnVal" id="btnVal" value="Validate">
				</a>
				<!-- Back to the previous page -->
				<a href='borrow.php?id=<?php echo $id1?>&id2=<?php echo $id2?>' style='text-decoration:none'>
				<input type="button" name="btnBck" id="btnBck" value="&laquo;&nbsp;&nbsp;Back">
				</a>
			</td>
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