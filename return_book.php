<?php
	session_start();
	if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
?>
<html>
<head>
<title>Book Request Corner</title>
<link rel="stylesheet" type="text/css" href="embelish/request_decor.css"></link>
<script language="javascript">

function checkall(x) {
	for(var i=1; i<=x; i++) {
		document.getElementById('chk'+i).checked = true;
	}
}

function uncheckall(x) {
	for(var i=1; i<=x; i++) {
		document.getElementById('chk'+i).checked = false;
	}
}

</script>

</head>
<body>
	<div id="wraper">
	<div id="header2">Returned Books</div>
	
		<form method="POST" name="form1" id="form1">
		<div id="content">
				<table>
					<tr>
						<td>Category:</td>
						<td>
							<select name="txtCat" id="txtCat" size="1" title="Choose a preference">
								<option>-</option><option>All</option>
								<option>Title</option>
								<option>Date</option>
								<option>Name</option>
							</select>
						</td>
						<td><input type="text" name="txtTle" id="txtTle" size="32" autocomplete="off" placeholder="Enter book title"></td>
						<td><input type="submit" name="btnSnd" id="btnSnd" value="Search" onclick="check()"></td>
						<td><input type="submit" name="btnRfr" id="btnRfr" value="Refresh"></td>
					</tr>
				</table>
				
				<?php
					include("config.php");
					
					// Use 1 isset for both search and delete button
					if(isset($_POST['btnSnd'])) {
						if("Search"==$_POST['btnSnd']) {
							$cat = $_POST['txtCat'];
							$tle = $_POST['txtTle'];
							
							// If title is blank execute this
							if($tle=='') {
								// If there is no entry in the category, execute this.
								if($cat=='-') {	exit();	}
								// If category is ALL
								else if($cat=='All') {
									$trans1 = "SELECT * FROM tblreturn ORDER BY dater1 DESC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Title') {
									$trans1 = "SELECT * FROM tblreturn ORDER BY title ASC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Name') {
									$trans1 = "SELECT * FROM tblreturn ORDER BY fname ASC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Date') {
									$trans1 = "SELECT * FROM tblreturn ORDER BY dater1 DESC";
									$trans2 = mysql_query($trans1);
								}
							}
							
							// If category is title and textbox is not blank
							else if($cat=='Title' && $tle<>' ') { //------------ Search by title if textbox is not blank
								$trans1 = "SELECT * FROM tblreturn WHERE title like concat ('$tle','%') ORDER BY title ASC";
								$trans2 = mysql_query($trans1);
							}
							// If category is title and textbox is not blank
							else if($cat=='Name' && $tle<>' ') { // ----------- Search by author if textbox is not blank
								$trans1 = "SELECT * FROM tblreturn WHERE fname like concat('$tle','%') ORDER BY fname ASC";
								$trans2 = mysql_query($trans1);
							}
							
							else{
							if($cat<>'All'){
								$trans1 = "SELECT * FROM tblreturn WHERE title like concat('$tle','%') ORDER BY title asc"; 
								$trans2 = mysql_query($trans1);
							}
							$trans1 = "SELECT * FROM tblreturn WHERE title like concat('$tle','%') ORDER BY title asc "; 
							$trans2 = mysql_query($trans1);	
							}
						}
						
						// If delete button is clicked, perform book deletion. -->
						if(isset($_POST['btnSnd'])) {
							if("Delete"==$_POST['btnSnd']) {
							    
								// but if checkbox is not clicked, display an error message -->
								if(!isset($_POST['chk'])) {
									echo("
										<script type='text/javascript'>
										alert('ERROR: No value selected!');
										window.location='return_book.php';
										</script>
									");
								}
							
								// If checkbox is clicked, delete the specified item(s) -->
								$dent = $_POST['chk'];
								// Deleting item one by one -->
								foreach($dent as $wiper) {
									$q1 = "DELETE FROM tblreturn WHERE id='$wiper'";
									mysql_query($q1);
									// Display of data after deletion
									$trans1 = "SELECT * FROM tblreturn"; 
									$trans2 = mysql_query($trans1);	
								}
							}
						}
					}
					
					else {
						$trans1 = "SELECT * FROM tblreturn WHERE title='__'"; 
						$trans2 = mysql_query($trans1);	
					}
				?>
				
			
			<!------Display of data------->
			
			<table id="bgrnd"  border='0' width='100%' style='text-align:center;font-size:12px'>
				
					<tr id="headup"> 
						<th width='9%'>Borrow date</th>
						<th width='9%'>Return date</th>
						<th width='30%'>Book</th>
						<th width='15%'>Borrower</th>
						<th width='8%'>Remarks</th>
					</tr>
				
			
			<?php
				$cntr = 0;
				while($disp=mysql_fetch_array($trans2)) {
				$cntr++;
			?>			
				<tr id="r<?php echo $cntr;?>" onmouseover="c_ON(<?php echo $cntr;?>)" onmouseout="c_OFF(<?php echo $cntr;?>)">
					<td id="shade"> 
						<input type="checkbox" name="chk[]" id="chk<?php echo $cntr;?>" value="<?php echo $disp['id'];?>">
						<?php echo $disp['dater1'];?>
					</td>
					<td id="shade"><?php echo $disp['dater2'];?></td>
					<td id="shade"><?php echo $disp['title'];?></td>
					<td id="shade"><?php echo $disp['fname'].' ' ?><?php echo $disp['lname'];?></td>
					<td id="shade"><?php echo $disp['remarks'];?></td>
				</tr>
			<?php
			 }
			?>
			
			</table>
			
				<input type="button" value="Check all" onclick="checkall(<?php echo $cntr;?>);">
				<input type="button" value="Uncheck all" onclick="uncheckall(<?php echo $cntr;?>);">
				<input type="submit" name="btnSnd" id="btnSnd" value="Delete" onclick="checker()">
			</form>
			<!------Display of data------->
			
		</div>
		<a href="transact.php" style="text-decoration:none" title="Back to transaction page">
			<input type="submit" value="&laquo;&nbsp;&nbsp;Back">&nbsp;&nbsp;&nbsp;
		</a>
		Total result found: <?php echo "<b>". $cntr."</b>"?>
		
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