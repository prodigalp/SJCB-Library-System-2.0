<?php
	session_start();
	if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
?>
<html>
<head>
<title>Book Request Corner</title>
<link rel="stylesheet" type="text/css" href="embelish/request_decor.css"></link>
<script type="text/javascript" src="impress/library_color.js"></script>
</head>
<body>
	<div id="wraper">
	<div id="header2">Book Request</div>
	
		<div id="content">
		<form method="POST" name="form1" id="form1">
				<table>
					<tr>
						<td>Sort by:</td>
						<td>
							<select name="txtCat" id="txtCat" size="1" title="Choose a preference">
								<option>-</option><option>All</option>
								<option>Title</option>
								<option>Date</option>
								<option>Name</option>
								<option>Hold</option>
								<option>Granted</option>
								<option>Rejected</option>
								<option>Overdue</option>
								<!--<option>Returned</option>-->
								<option>Loss</option>
								<option>Watchlist</option>
							</select>
						</td>
						<td><input type="text" name="txtTle" id="txtTle" size="32" autocomplete="off" placeholder="Enter book title"></td>
						<td><input type="submit" name="btnSnd" id="btnSnd" value="Search" onclick="check()"></td>
						<td><input type="submit" name="btnRst" id="btnRst" value="Refresh"></td>
					</tr>
				</table>
				
				<?php echo 'Current date:&nbsp;&nbsp;' . date('M d, Y '); ?>
								
				<?php
					include("config.php");
					
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
									$trans1 = "SELECT * FROM tblborrow ORDER BY dater1 DESC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Title') {
									$trans1 = "SELECT * FROM tblborrow ORDER BY title ASC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Name') {
									$trans1 = "SELECT * FROM tblborrow ORDER BY fname ASC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Date') {
									$trans1 = "SELECT * FROM tblborrow ORDER BY dater1 DESC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Hold') {
									$trans1 = "SELECT * FROM tblborrow WHERE remarks='hold' ORDER BY dater1 DESC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Granted') {
									$trans1 = "SELECT * FROM tblborrow WHERE remarks='granted' ORDER BY dater1 DESC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Rejected') {
									$trans1 = "SELECT * FROM tblborrow WHERE remarks='rejected' ORDER BY dater1 DESC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Overdue') {
									$trans1 = "SELECT * FROM tblborrow WHERE remarks='overdue' ORDER BY dater1 DESC";
									$trans2 = mysql_query($trans1);
								}
								//else if($cat=='Returned') {
								//	$trans1 = "SELECT * FROM tblreturn WHERE remarks='returned' ORDER BY dater1 DESC";
								//	$trans2 = mysql_query($trans1);
								//}
								else if($cat=='Loss') {
									$trans1 = "SELECT * FROM tblborrow WHERE remarks='loss' ORDER BY dater1 DESC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Watchlist') {
									$trans1 = "SELECT * FROM tblborrow WHERE remarks='watchlist' ORDER BY dater1 DESC";
									$trans2 = mysql_query($trans1);
								}
								else {
									$trans1 = "SELECT * FROM tblborrow WHERE title like concat('$cat','%') ORDER BY title ASC";
									$trans2 = mysql_query($trans1);
								}
								
							}
							// If category is title and textbox is not blank
							else if($cat=='Title' && $tle<>' ') { //------------ Search by title if textbox is not blank
								$trans1 = "SELECT * FROM tblborrow WHERE title like concat ('$tle','%') ORDER BY title ASC";
								$trans2 = mysql_query($trans1);
							}
							// If category is name and textbox is not blank
							else if($cat=='Name' && $tle<>' ') { // ----------- Search by author if textbox is not blank
								$trans1 = "SELECT * FROM tblborrow WHERE fname like concat('$tle','%') ORDER BY fname ASC";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='Hold' && $tle<>' ') { //----------- Search by Category if textbox is not blank
								$trans1 = "SELECT * FROM tblborrow WHERE remarks='hold' && title like concat('$tle','%') ORDER BY dater1 DESC";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='Granted' && $tle<>' ') { //----------- Search by Category if textbox is not blank
								$trans1 = "SELECT * FROM tblborrow WHERE remarks='granted' && title like concat('$tle','%') ORDER BY dater1 DESC";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='Rejected' && $tle<>' ') { //----------- Search by Category if textbox is not blank
								$trans1 = "SELECT * FROM tblborrow WHERE remarks='rejected' && title like concat('$tle','%') ORDER BY dater1 DESC";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='Overdue' && $tle<>' ') { //----------- Search by Category if textbox is not blank
								$trans1 = "SELECT * FROM tblborrow WHERE remarks='overdue' && title like concat('$tle','%') ORDER BY dater1 DESC";
								$trans2 = mysql_query($trans1);
							}
							//else if($cat=='Returned' && $tle<>' ') { //----------- Search by Category if textbox is not blank
							//	$trans1 = "SELECT * FROM tblreturn WHERE remarks='returned' && title like concat('$tle','%') ORDER BY dater1 DESC";
							//	$trans2 = mysql_query($trans1);
							//}
							else if($cat=='Loss' && $tle<>' ') { //----------- Search by Category if textbox is not blank
								$trans1 = "SELECT * FROM tblborrow WHERE remarks='loss' && title like concat('$tle','%') ORDER BY dater1 DESC";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='Watchlist' && $tle<>' ') { //----------- Search by Category if textbox is not blank
								$trans1 = "SELECT * FROM tblborrow WHERE remarks='watchlist' && title like concat('$tle','%') ORDER BY dater1 DESC";
								$trans2 = mysql_query($trans1);
							}
							else{
							if($cat<>'All'){
								$trans1 = "SELECT * FROM tblborrow WHERE title like concat('$tle','%') ORDER BY title asc"; 
								$trans2 = mysql_query($trans1);
							}
						$trans1 = "SELECT * FROM tblborrow WHERE title like concat('$tle','%') ORDER BY title asc "; 
						$trans2 = mysql_query($trans1);	
						}
							
						}	
					}
					else {
						$trans1 = "SELECT * from tblborrow where title=' '"; 
						$trans2 = mysql_query($trans1);	
					}
				?>
				
				
			</form>
			<!------Display of data------->
			
			<table id="bgrnd"  border='0' width='100%' style='text-align:center;font-size:12px'>
				
					<tr id="headup"> 
						<th width='9%'>Borrow date</th>
						<th width='9%'>Return date</th>
						<th width='30%'>Book</th>
						<th width='15%'>Borrower</th>
						<th width='8%'>Remarks</th>
						<th width='18%'>action</th>
					</tr>
				
			
			<?php
				$cntr = 0;
				while($disp=mysql_fetch_array($trans2)) {
				$cntr++;
			?>			
				<tr id="r<?php echo $cntr;?>" onmouseover="c_ON(<?php echo $cntr;?>)" onmouseout="c_OFF(<?php echo $cntr;?>)">
					<td id="shade"><?php echo $disp['dater1'];?></td>
					<td id="shade"><?php echo $disp['dater2'];?></td>
					<td id="shade" title="Click to see details"><?php echo $disp['title'];?></td>
					<td id="shade"><?php echo $disp['fname'].' '. $disp['mname'].' '. $disp['lname'];?></td>
					<td id="shade"><?php echo $disp['remarks'];?></td>
					<td id="shade">
					<a href="accept_request.php?id=<?php echo $disp['id'];?>"><img id="action" src="IMG/BG/Action2.png" title="Accept a request"></a>
					<a href="delete_request.php?id=<?php echo $disp['id'];?>"><img id="action" src="IMG/BG/Action3.png" title="Delete item request"></a>
					<a href="overdue_request.php?id=<?php echo $disp['id'];?>"><img id="action" src="IMG/BG/Action4.png" title="Item overdue!"></a>
					<a href="return_request.php?id=<?php echo $disp['id'];?>"><img id="action" src="IMG/BG/Action5.png" title="Returned"></a>
					<a href="loss_request.php?id=<?php echo $disp['id'];?>"><img id="action" src="IMG/BG/Action6.png" title="Loss"></a>
					<a href="watch_request.php?id=<?php echo $disp['id'];?>"><img id="action" src="IMG/BG/Action7.png" title="Watchlist"></a>
					<a href="detail_request.php?id=<?php echo $disp['id'];?>"><img id="action" src="IMG/BG/Action1.png" title="View Detail Transaction"></a>
					</td>
				</tr>
			<?php
			 }
			?>
			
			</table>
			
			
			<!------Display of data------->
			
		</div>
		<a href="transact.php" style="text-decoration:none" title="Back to main page">
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