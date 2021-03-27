<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3' ||
   $_SESSION['role']=='2' || $_SESSION['role']=='1')  {
?>
<html>
<head>
<title>Library Search</title>
<link rel="stylesheet" type="text/css" href="embelish/magazine_decor.css"></link>
<script type="text/javascript" src="impress/library_color.js"></script>
</head>
<body>
	<div id="wraper">
	<div id="header"><?php echo "&nbsp;&nbsp;<b>".$_SESSION['name']."'s&nbsp;&nbsp;Book Corner</b>"?>
	
	</div>
	<div id="header2">Magazine Finder</div>
		<div id="content">
		
		<form method="POST" name="form1" id="form1">
				<table>
					<tr>
						<td>Sort by:</td>
						<td>
							<select name="txtCat" id="txtCat" size="1">
								<option>-</option><option>All</option>
								<option>Date</option>
								<option>Accession</option>
								<option>Title</option>
								<option>Date Issued</option>
								
								
							</select>
						</td>
						<td><input type="text" name="txtTle" id="txtTle" size="35" autocomplete="off" placeholder="Enter magazine title"></td>
						<td><input type="submit" name="btnSnd" id="btnSnd" value="Search" onclick="check()"></td>
						<td><input type="submit" name="btnRst" id="btnRst" value="Refresh"></td>
					</tr>
				</table>
								
				<?php
					include("config.php");
					
					if(isset($_POST['btnSnd'])) {
						if("Search"==$_POST['btnSnd']) {
							$cat = $_POST['txtCat'];
							$tle = $_POST['txtTle'];
							
							if($tle=='') {
								if($cat=='-') {	exit();	}
								else if($cat=='All') {
									$trans1 = "SELECT * FROM tblmagazine ORDER BY id ASC LIMIT 200";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Date') {
									$trans1 = "SELECT * FROM tblmagazine ORDER BY dater1 DESC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Accession') {
									$trans1 = "SELECT * FROM tblmagazine ORDER BY accnum ASC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Title') {
									$trans1 = "SELECT * FROM tblmagazine ORDER BY title ASC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Date Issued') {
									$trans1 = "SELECT * FROM tblmagazine ORDER BY dater2 DESC";
									$trans2 = mysql_query($trans1);
								}
								else {
									$trans1 = "SELECT * FROM tblmagazine WHERE title like concat('$cat','%') ORDER BY title ASC";
									$trans2 = mysql_query($trans1);
								}
								
							}
							else if($cat=='All' && $tle<>' ') { //------------ Search by title if textbox is not blank
								$trans1 = "SELECT * FROM tblmagazine WHERE title like concat ('$tle','%') ORDER BY title ASC";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='Date' && $tle<>' ') { // ----------- Search by author if textbox is not blank
								$trans1 = "SELECT * FROM tblmagazine WHERE dater1='$tle'";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='Accession' && $tle<>' ') { //----------- Search by Category if textbox is not blank
								$trans1 = "SELECT * FROM tblmagazine WHERE accnum='$tle'";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='Title' && $tle<>' ') { //----------- Search by Category if textbox is not blank
								$trans1 = "SELECT * FROM tblmagazine WHERE title like concat('$tle','%') ORDER BY title ASC";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='Date Issued' && $tle<>' ') { //----------- Search by Category if textbox is not blank
								$trans1 = "SELECT * FROM tblmagazine WHERE dater2='$tle'";
								$trans2 = mysql_query($trans1);
							}
							else{
							if($cat<>'All'){
								$trans1 = "SELECT * FROM tblmagazine WHERE title like concat('$tle','%') ORDER BY title ASC LIMIT 200"; 
								$trans2 = mysql_query($trans1);
							}
						$trans1 = "SELECT * FROM tblmagazine WHERE title like concat('$tle','%') ORDER BY title ASC LIMIT 200 "; 
						$trans2 = mysql_query($trans1);	
						}
							
						}	
					}
					else {
						$trans1 = "SELECT * FROM tblmagazine WHERE title='___'"; 
						$trans2 = mysql_query($trans1);	
					}
				?>
				
				
			</form>
			<!------Display of data------->
			
			<table id="bgrnd"  border='0' width='90%' style='text-align:center;font-size:12px'>
				
					<tr id="headup"> 
						<th width='5%'>ID</th>
						<th width='10%'>DATE</th>
						<th width='40%'>TITLE</th>
						<th width='5%'>ACCN</th>
						<th width='10%'>ISSUED</th>
					</tr>
				
			
			<?php
				$cntr = 0;
				while($disp=mysql_fetch_array($trans2)) {
				$cntr++;
			?>			
				<tr id="r<?php echo $cntr;?>" onmouseover="c_ON(<?php echo $cntr;?>)" onmouseout="c_OFF(<?php echo $cntr;?>)">
					<td id="shade"><?php echo $disp['id'];?></td>
					<td id="shade"><?php echo $disp['dater1'];?></td>
					<td id="shade" style="font-size:15px"><?php echo $disp['title'];?></td>
					<td id="shade" title="Click to see details"><?php echo $disp['accnum'];?></td>
					<td id="shade"><?php echo $disp['dater2'];?></td>
				</tr>
			<?php
			 }
			?>
			
			</table>
			
			
			<!------Display of data------->
			
		</div>
		<a href="books.php" style="text-decoration:none" title="Back to main page">
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