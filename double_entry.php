<?php
session_start();
if($_SESSION['role']=='4')  {
?>
<html>
<head>
<title>Double Entry</title>
<link rel="stylesheet" type="text/css" href="embelish/double_entry_decor.css"></link>
<script type="text/javascript" src="impress/library_color.js"></script>
</head>
<body>
	<div id="wraper">
	<div id="header">Double Entry</div>
		<div id="content">
		<form method="POST" name="form1" id="form1">
				<table>
					<tr>
						<td><input type="text" name="txtTle" id="txtTle" size="30" autocomplete="off" placeholder="Enter username"></td>
						<td><input type="submit" name="btnSnd" id="btnSnd" value="Search" onclick="check()"></td>
					</tr>
				</table>
				<?php
					include("config.php");
					
					if(isset($_POST['btnSnd'])) {
						if("Search"==$_POST['btnSnd']) {
							$tle = $_POST['txtTle'];
							$trans1 = "SELECT * FROM tblcurrent WHERE username like concat('$tle','%') ORDER BY username ASC";
							$trans2 = mysql_query($trans1);
						}	
					}
					else {
						$trans1 = "SELECT * FROM tblcurrent WHERE id=' '"; 
						$trans2 = mysql_query($trans1);	
					}
				?>
			</form>
			<!------Display of data------->
			<table width='100%' style='text-align:center;font-size:12px;'>
					<tr id="headup"> 
						<th width='25%'>Username</th>
						<th width='35%'>Name</th>
						<th width='20%'>Group</th>
						<th width='25%'>Action</th>
					</tr>
			<?php
				$cntr = 0;
				while($disp=mysql_fetch_array($trans2)) {
				$cntr++;
			?>			
				<tr id="r<?php echo $cntr;?>" onmouseover="c_ON(<?php echo $cntr;?>)" onmouseout="c_OFF(<?php echo $cntr;?>)">
					<td id="shade"><?php echo $disp['username'];?></td>
					<td id="shade"><?php echo $disp['fname'].' '. $disp['mname'].' '. $disp['lname'];?></td>
					<td id="shade"><?php echo $disp['gtype'];?></td>
					<td id="shade">
						<a href="delete_double_entry.php?id=<?php echo $disp['id'];?>">Erase</a>
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