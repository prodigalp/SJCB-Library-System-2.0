<?php
session_start();
if($_SESSION['role']=='4')  {
?>
<html>
<head>
<title>User Control</title>
<link rel="stylesheet" type="text/css" href="embelish/user_control_decor.css"></link>
<script type="text/javascript" src="impress/library_color.js"></script>
</head>
<body>
	<div id="wraper">
	<div id="header">User Control</div>
		<div id="content">
		
		<form method="POST" name="form1" id="form1">
				<table>
					<tr>
						<td>Sort by:</td>
						<td>
							<select name="txtCat" id="txtCat" size="1" title="Choose a preference">
								<option>-</option>
								<option>All</option>
								<option>Highschool</option>
								<option>College</option>
								<option>Professor</option>
							</select>
						</td>
						<td><input type="text" name="txtTle" id="txtTle" size="25" autocomplete="off" placeholder="Enter name"></td>
						<td><input type="submit" name="btnSnd" id="btnSnd" value="Search" onclick="check()"></td>
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
									$trans1 = "SELECT * FROM tbluser";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Highschool') {
									$trans1 = "SELECT * FROM tbluser WHERE gtype='Highschool'";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='College') {
									$trans1 = "SELECT * FROM tbluser WHERE gtype='College'";
									$trans2 = mysql_query($trans1);
								}
								else if($cat=='Professor') {
									$trans1 = "SELECT * FROM tbluser WHERE gtype='Professor'";
									$trans2 = mysql_query($trans1);
								}
							}
							else if($cat=='Highschool' && $tle<>' ') { //------------ Search by title if textbox is not blank
								$trans1 = "SELECT * FROM tbluser WHERE fname like concat ('$tle','%') ORDER BY fname ASC";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='College' && $tle<>' ') { // ----------- Search by author if textbox is not blank
								$trans1 = "SELECT * FROM tbluser WHERE fname like concat('$tle','%') ORDER BY fname ASC";
								$trans2 = mysql_query($trans1);
							}
							else if($cat=='Professor' && $tle<>' ') { //----------- Search by Category if textbox is not blank
								$trans1 = "SELECT * FROM tbluser WHERE fname like concat('$tle','%') ORDER BY fname ASC";
								$trans2 = mysql_query($trans1);
							}
							else {
							if($cat<>'All'){
								$trans1 = "SELECT * FROM tbluser WHERE fname like concat('$tle','%') ORDER BY fname ASC"; 
								$trans2 = mysql_query($trans1);
							}
						$trans1 = "SELECT * FROM tbluser WHERE fname like concat('$tle','%') ORDER BY fname ASC "; 
						$trans2 = mysql_query($trans1);	
						}
							
						}	
					}
					else {
						$trans1 = "SELECT * FROM tbluser WHERE id=' '"; 
						$trans2 = mysql_query($trans1);	
					}
				?>
				
				
			</form>
			<!------Display of data------->
			
			<table id="bgrnd"  border='0' width='75%' style='text-align:center;font-size:12px'>
				
					<tr id="headup"> 
						<th width='7%'>ID</th>
						<th width='45%'>Name</th>
						<th width='25%'>Group</th>
						<th width='15%'>Action</th>
					</tr>
				
			
			<?php
				$cntr = 0;
				while($disp=mysql_fetch_array($trans2)) {
				$cntr++;
			?>			
				<tr id="r<?php echo $cntr;?>" onmouseover="c_ON(<?php echo $cntr;?>)" onmouseout="c_OFF(<?php echo $cntr;?>)">
					<td id="shade"><?php echo $disp['id'];?></td>
					<td id="shade" title="Click to see details"><a href="details.php?id=<?php echo $disp['id'];?>">
						<?php echo $disp['fname'].' '. $disp['mname'].' '. $disp['lname'];?></a>
					</td>
					<td id="shade"><?php echo $disp['gtype']; ?></td>
					<td id="shade">
						<a href="update_record.php?id=<?php echo $disp['id'];?>&id2=<?php echo $disp['gtype']; ?>"><img id="action" src="IMG/BG/brush8.png" title="Click to Update this record"></a>
						<a href="#?id=<?php echo $disp['id'];?>"><img id="action" src="IMG/BG/action3.png" title="Click to Delete this record"></a>
					</td>
				</tr>
			<?php
			 }
			?>
			
			</table>
			<!------Display of data------->
			
		</div>
		<a href="setting.php" style="text-decoration:none" title="Back to main page">
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