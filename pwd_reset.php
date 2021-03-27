<?php
	session_start();
	if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
?>
<html>
<head>
<title>Password Reset</title>
<link rel="stylesheet" type="text/css" href="embelish/pwd_reset_decor.css"></link>
<script type="text/javascript" src="impress/library_color.js"></script>
</head>
<body>
	<div id="wraper">
	<div id="header2">Password Reset</div>
		<div id="content">
		<form method="POST" name="form1" id="form1">
				<table>
					<tr>
						<td><input type="text" name="txtTle" id="txtTle" size="35" autocomplete="off" placeholder="Enter username"></td>
						<td><input type="submit" name="btnSnd" id="btnSnd" value="Search" onclick="check()"></td>
					</tr>
				</table>
		</form>
				
				<?php
					include("config.php");
					
					if(isset($_POST['btnSnd'])) {
						if("Search"==$_POST['btnSnd']) {
							$tle = $_POST['txtTle'];
							$trans1 = "SELECT * FROM tbluser WHERE username!='Administrator' && username like concat('$tle','%') ORDER BY username ASC";
							$trans2 = mysql_query($trans1);		
						}
					}
					else {
						$trans1 = "SELECT * FROM tbluser where username='__'"; 
						$trans2 = mysql_query($trans1);	
					}
				?>
				
			<table id="bgrnd"  border='0' width='100%' style='text-align:center;font-size:12px'>
				
					<tr id="headup"> 
						<th width='15%'>Username</th>
						<th width='10%'>action</th>
					</tr>
			<?php
				$cntr = 0;
				while($disp=mysql_fetch_array($trans2)) {
				$cntr++;
			?>			
				<tr id="r<?php echo $cntr;?>" onmouseover="c_ON(<?php echo $cntr;?>)" onmouseout="c_OFF(<?php echo $cntr;?>)">
					<td id="shade" ><?php echo $disp['username'];?></td>
					<td id="shade">
					<a href="reset_pwd_request.php?id=<?php echo $disp['id'];?>"><img id="action" src="IMG/BG/Action2.png" title="Update Password"></a>
					<a href="detail_pwd_reset.php?id=<?php echo $disp['id'];?>"><img id="action" src="IMG/BG/Action7.png" title="View Details"></a>
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