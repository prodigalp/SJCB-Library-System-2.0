<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3' ||
   $_SESSION['role']=='2' || $_SESSION['role']=='1')  {
?>
<html>
<head>
<title>Library Search</title>
<link rel="stylesheet" type="text/css" href="embelish/books_decor.css"></link>
<script type="text/javascript" src="impress/library_color.js"></script>
</head>
<body>
	<div id="wraper">
	<div id="header"><?php echo "&nbsp;&nbsp;<b>".$_SESSION['name']."'s&nbsp;&nbsp;Book Corner</b>"?></div>
	<div id="header2">Book Finder</div>
		<div id="content">
		
		<form method="POST" name="form1" id="form1">
				<table>
					<tr>
						<td>Preference:</td>
						<td>
							<select name="txtCat" id="txtCat" size="1" title="Choose a preference">
								<option>-</option><option>All</option>
								<option>Title</option>
								<option>Author</option>
								<option>Category</option>
								<option>General References</option>
								<option>Philosophy,Psychology</option>
								<option>Religion</option>
								<option>Social Sciences</option>
								<option>Languages</option>
								<option>Pure Sciences</option>
								<option>Applied Sciences</option>
								<option>Fine Arts</option>
								<option>Literature</option>
								<option>History</option>
								<option>Subject</option>
							</select>
						</td>
						<td><input type="text" name="txtTle" id="txtTle" size="25" autocomplete="off" placeholder="Enter book title"></td>
						<td><input type="submit" name="btnSnd" id="btnSnd" value="Search" onclick="check()"></td>
						<td><input type="submit" name="btnRst" id="btnRst" value="Refresh"></td>
						<td>
							<a href="magazine.php">
							 <img id="mag" src="IMG/BG/Action6.png" title="Click here for magazine search.">
							</a>
						</td>
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
									$trans1 = "SELECT * FROM tblbooks ORDER BY ctrlnum DESC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Title') {
									$trans1 = "SELECT * FROM tblbooks ORDER BY title ASC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Author') {
									$trans1 = "SELECT * FROM tblbooks ORDER BY author ASC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Category') {
									$trans1 = "SELECT * FROM tblbooks ORDER BY category ASC";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Subject') {
									$trans1 = "SELECT * FROM tblbooks ORDER BY subject ASC";
									$trans2 = mysql_query($trans1);
								}
								else {
									$trans1 = "SELECT * FROM tblbooks WHERE category like concat('$cat','%') ORDER BY title ASC";
									$trans2 = mysql_query($trans1);
								}
								
							}
							else if($cat=='Title' && $tle<>' ') { //------------ Search by title if textbox is not blank
								$trans1 = "SELECT * FROM tblbooks WHERE title like concat ('$tle','%') ORDER BY title ASC";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='Author' && $tle<>' ') { // ----------- Search by author if textbox is not blank
								$trans1 = "SELECT * FROM tblbooks WHERE author like concat('$tle','%') ORDER BY author ASC";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='Category' && $tle<>' ') { //----------- Search by Category if textbox is not blank
								$trans1 = "SELECT * FROM tblbooks WHERE category like concat('$tle','%') ORDER BY category ASC";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='Subject' && $tle<>' ') { //----------- Search by Category if textbox is not blank
								$trans1 = "SELECT * FROM tblbooks WHERE subject like concat('$tle','%') ORDER BY category ASC";
								$trans2 = mysql_query($trans1);
							}
							else{
							if($cat<>'All'){
								$trans1 = "SELECT * from tblbooks WHERE title like concat('$tle','%') && category like concat('$cat','%') ORDER BY title asc"; 
								$trans2 = mysql_query($trans1);
							}
						$trans1 = "SELECT * from tblbooks WHERE title like concat('$tle','%') ORDER BY title asc "; 
						$trans2 = mysql_query($trans1);	
						}
							
						}	
					}
					else {
						$trans1 = "SELECT * from tblbooks where title='__'"; 
						$trans2 = mysql_query($trans1);	
					}
				?>
				
				
			</form>
			<!------Display of data------->
			
			<table id="bgrnd"  border='0' width='95%' style='text-align:center;font-size:12px'>
			
					<tr id="headup"> 
						<th width='7%'>ACCN</th>
						<th width='43%'>TITLE</th>
						<th width='15%'>AUTHOR</th>
						<th width='16%'>CATEGORY</th>
						<th width='14%'>SUBJECT</th>
					</tr>
				
			<?php
				$cntr = 0;
				while($disp=mysql_fetch_array($trans2)) {
				$cntr++;
			?>			
				<tr id="r<?php echo $cntr;?>" onmouseover="c_ON(<?php echo $cntr;?>)" onmouseout="c_OFF(<?php echo $cntr;?>)">
					<td id="shade"><?php echo $disp['accnum'];?></td>
					<td id="shade" title="Click to see details"><a href="details.php?id=<?php echo $disp['accnum'];?>">
						<?php echo $disp['title'];?></a>
					</td>
					<td id="shade"><?php echo $disp['author'];?></td>
					<td id="shade"><?php echo $disp['category'];?></td>
					<td id="shade"><?php echo $disp['subject'];?></td>
				</tr>
			<?php
			 }
			?>
			
			</table>
			
			<!------Display of data------->
			
		</div>
		<a href="sindex.php" style="text-decoration:none" title="Back to main page">
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
	header("location: index.php");
	}
?>