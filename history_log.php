<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3' ||  $_SESSION['role']=='2' ) {
   include("config.php");
   
   $q1 = "SELECT * FROM tblhistory WHERE fname='$_SESSION[name]' &&  gtype='$_SESSION[gtyp]' &&
		  role= '$_SESSION[role]' && username='$_SESSION[usr]'  && password='$_SESSION[pwd]' ORDER BY dater DESC";
   $q2 = mysql_query($q1);
   
   if(isset($_POST['btnClr'])) {
		if("Clear Log"==$_POST['btnClr']) {
			$r1 = "DELETE FROM tblhistory WHERE fname='$_SESSION[name]' &&  gtype='$_SESSION[gtyp]' &&
				   role= '$_SESSION[role]' && username='$_SESSION[usr]'  && password='$_SESSION[pwd]' ";
			mysql_query($r1);
			echo ("<script type='text/javascript'>
				alert('Data Successfully Deleted!');
				window.location='sindex.php';
			</script>
			");
			
		}
	}
			
?>
<html>
<head>
<title>History Log</title>
<link rel="stylesheet" type="text/css" href="embelish/books_decor.css"></link>
<script type="text/javascript" src="impress/library_color.js"></script>
</head>
<body>
	<div id="wraper">
	<div id="header"><?php echo "&nbsp;&nbsp;<b>".$_SESSION['name']."'s&nbsp;&nbsp;Log-in History</b>"?>
	
	</div>
	<div id="header2">History Log</div>
		<div id="content">
		<form method="POST">
		
		
			<!------Display of data------->
			
			<table id="bgrnd"  border='0' width='100%' style='text-align:center;font-size:12px'>
				
					<tr id="headup"> 
						<th width='30%'>NAME</th>
						<th width='15%'>USERNAME</th>
						<th width='15%'>DATE</th>
						<th width='20%'>Log-in TIME</th>
						<th width='15%'>GROUP</th>
					</tr>
				
			
			<?php
				$cntr = 0;
				while($row = mysql_fetch_assoc($q2)) {
				$cntr++;
			?>			
				<tr id="r<?php echo $cntr;?>" onmouseover="c_ON(<?php echo $cntr;?>)" onmouseout="c_OFF(<?php echo $cntr;?>)">
					<td id="shade"><?php echo $row['fname'].' '. $row['mname'].' '.$row['lname'];?></td>
					<td id="shade"><?php echo $row['username'];?></td>
					<td id="shade"><?php echo $row['dater'];?></td>
					<td id="shade"><?php echo $row['timer'];?></td>
					<td id="shade"><?php echo $row['gtype'];?></td>
				</tr>
				
			<?php
			 }
			?>
			
			</table>
			<table width="100%" border="0" style="text-align:center">
				<tr><td style="text-align:left" width="10%">Total result found: <?php echo "<b>". $cntr."</b>"?></td>
					<td style="text-align:center" width="20%">
						<a href="sindex.php" style="text-decoration:none" title="Back to main page">
						<input type="button" value="&laquo;&nbsp;&nbsp;Back">&nbsp;&nbsp;&nbsp;
						</a>
					</td>
					<td style="text-align:left" width="20%"><input type="submit" name="btnClr" id="btnClr" value="Clear Log"></td>
				</tr>
			</table>
		
		<!------Display of data------->
		</form>	
		</div>
		
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