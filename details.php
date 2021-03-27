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
		echo "Data is not a number";
		exit;
	}
	
	// Search for the database on the 'id' criteria
	$result = "SELECT * FROM tblbooks WHERE accnum='$id'";
	$trans = mysql_query($result);
	
	// Display the value using fetch.
	$row = mysql_fetch_object($trans);
?>

<html>
<head>
<title>Book Details</title>
<!--Use for lightbox effects-->
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" />
<link rel="stylesheet" type="text/css" href="embelish/details_decor.css"></link>

</head>
<body method="GET">
	<div id="wraper">
	<div id="header">Book Information</div>
	<div id="content">
		<div id="bots">
			<a href="<?php echo 'portrait/'.$row->pichref?>" rel="lightbox" title="<?php echo $row->pichref?>">
				<img id="flip" src="<?php echo 'portrait/'.$row->pichref?>" alt="NO PICTURE DETECTED!">
			</a>
			<!-- Use session to hide button to specific user -->
			<?php include("details_link.php");?>
			
		</div>
	</div>
	
	<table id="t4">
			<tr>
				<td>ACCN #:&nbsp;</td>
				<td><input id="dent" type="text" name="txtAcc" id="txtAcc" size="6" value="<?php echo $row->accnum?>" readonly></td>
			</tr>
			
			<tr>
				<td>Title:&nbsp;</td>
				<td><input id="dent" type="text" name="txtTle" id="txtTle" size="50" value="<?php echo $row->title?>" readonly></td>
			</tr>
			
			<tr>
				<td>Author:&nbsp;</td>
				<td><input id="dent" type="text" name="txtAut" id="txtAut" size="50" value="<?php echo $row->author?>" readonly></td>
			</tr>
			
			<tr>
				<td>Category:&nbsp;</td>
				<td><input id="dent" type="text" name="txtCat" id="txtCat" size="50" value="<?php echo $row->category?>" readonly></td>
			</tr>
			
			<tr>
				<td>Publisher:&nbsp;</td>
				<td><input id="dent" type="text" name="txtPub" id="txtPub" size="50" value="<?php echo $row->publisher?>" readonly></td>
			</tr>
			
			<tr>
				<td>Edition:&nbsp;</td>
				<td><input id="dent" type="text" name="txtEdi" id="txtEdi" size="50" value="<?php echo $row->edition?>" readonly></td>
			</tr>
			
			<tr>
				<td>Location:&nbsp;</td>
				<td><input id="dent" type="text" name="txtLoc" id="txtLoc" size="50" value="<?php echo $row->classloc?>" readonly></td>
			</tr>
			
			<tr>
				<td>Dater:&nbsp;</td>
				<td><input id="dent" type="text" name="txtDrc" id="txtDrc" size="50" value="<?php echo $row->daterec?>" readonly></td>
			</tr>
			
			<tr>
				<td>Funding:&nbsp;</td>
				<td><input id="dent" type="text" name="txtFnd" id="txtFnd" size="50" value="<?php echo $row->sofund?>" readonly></td>
			</tr>
			
			<tr>
				<td>Price:&nbsp;</td>
				<td><input id="dent" type="text" name="txtPri" id="txtPri" size="50" value="<?php echo $row->costprice?>" readonly></td>
			</tr>
			
			<tr>
				<td>Copyright:&nbsp;</td>
				<td><input id="dent" type="text" name="txtCop" id="txtCop" size="50" value="<?php echo $row->copyright?>" readonly></td>
			</tr>
			
			<tr>
				<td>Remarks:&nbsp;</td>
				<td><input id="dent" type="text" name="txtRem" id="txtRem" size="50" value="<?php echo $row->remarks?>" readonly></td>
			</tr>
			
			<tr>
				<td>Color-G:&nbsp;</td>
				<td><input id="dent" type="text" name="txtCol" id="txtCol" size="50" value="<?php echo $row->colorcode?>" readonly></td>
			</tr>
			
			<tr>
				<td>Card #:&nbsp;</td>
				<td><input id="dent" type="text" name="txtCrd" id="txtCrd" size="50" value="<?php echo $row->cardnum ?>" readonly></td>
			</tr>
			
			<tr>
				<td>Subject:&nbsp;</td>
				<td><input id="dent" type="text" name="txtSub" id="txtSub" size="50" value="<?php echo $row->subject ?>" readonly></td>
			</tr>
			
			<tr>
				<td>Quantity:&nbsp;</td>
				<td><input id="dent" type="text" name="txtQua" id="txtQua" size="50" value="<?php echo $row->quantity?>" readonly></td>
			</tr>
			
			<tr>
				<td>Volume:&nbsp;</td>
				<td><input id="dent" type="text" name="txtVol" id="txtVol" size="50" value="<?php echo $row->volume?>" readonly></td>
			</tr>
			
			<tr>
				<td>Pages:&nbsp;</td>
				<td><input id="dent" type="text" name="txtPag" id="txtPag" size="50" value="<?php echo $row->pages?>" readonly></td>
			</tr>
			
	</table>
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
	