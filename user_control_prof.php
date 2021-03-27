<?php
session_start();
if($_SESSION['role']=='4')  {
?>
<html>
<head>
<title>Professor Settings</title>
<link rel="stylesheet" type="text/css" href="embelish/user_control_prof_decor.css"></link>
<script type="text/javascript" src="impress/library_color.js"></script>
</head>
<body>
	<div id="wraper">
	<div id="header">Professor</div>
		<div id="content">
		<form method="POST" name="form1" id="form1">
				<table>
					<tr>
						<td><input type="text" name="txtTle" id="txtTle" size="25" autocomplete="off" placeholder="Enter first name"></td>
						<td><input type="submit" name="btnSnd" id="btnSnd" value="Search" onclick="check()"></td>
					</tr>
				</table>
				<?php
					include("config.php");
					
					if(isset($_POST['btnSnd'])) {
						if("Search"==$_POST['btnSnd']) {
							$tle = $_POST['txtTle'];
							
							$trans1 = "SELECT * FROM tbluser WHERE gtype='Professor' && fname like concat('$tle','%')";
							$trans2 = mysql_query($trans1);
						}	
					}
					else {
						$trans1 = "SELECT * FROM tbluser WHERE id=' '"; 
						$trans2 = mysql_query($trans1);	
					}
				?>
			</form>
			<!------Display of data------->
			<table width='90%' style='text-align:center;font-size:12px'>
					<tr id="headup"> 
						<th width='7%'>ID</th>
						<th width='45%'>Name</th>
						<th width='25%'>Action</th>
					</tr>
			<?php
				$cntr = 0;
				while($disp=mysql_fetch_array($trans2)) {
				$cntr++;
			?>			
				<tr id="r<?php echo $cntr;?>" onmouseover="c_ON(<?php echo $cntr;?>)" onmouseout="c_OFF(<?php echo $cntr;?>)">
					<td id="shade"><?php echo $disp['id'];?></td>
					<td id="shade" title="Click to see details">
						<?php echo $disp['fname'].' '. $disp['mname'].' '. $disp['lname'];?>
					</td>
					<td id="shade">
						<a href="edit_control_prof.php?id=<?php echo $disp['id'];?>"><img id="action" src="IMG/ICN/set (15).png" title="Click to update record"></a>
						<a href="delete_prof_record.php?id=<?php echo $disp['id'];?>"><img id="action" src="IMG/ICN/set (5).png" title="Click to delete record" ></a>
					
					</td>
					
				</tr>
			<?php
			 }
			?>
			
			</table>
			<!------Display of data------->
			
		</div>
		<a href="user_control_menu.php" style="text-decoration:none" title="Back to main page">
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