<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
	include("config.php");
	
	$q1 = "SELECT count(*) as total FROM tblbooks;";
	$q2 = mysql_query($q1);
	
	$r1 = "SELECT count(*) as total FROM tblmagazine";
	$r2 = mysql_query($r1);
	
	$s1 = "SELECT count(*) as total FROM tbluser WHERE gtype='College'";
	$s2 = mysql_query($s1);
	
	$t1 = "SELECT count(*) as total FROM tbluser WHERE gtype='professor'";
	$t2 = mysql_query($t1);
	
	$u1 = "SELECT count(*) as total FROM tbluser WHERE gtype='highschool'";
	$u2 = mysql_query($u1);
	
	$v1 = "SELECT count(word) as total FROM tbldictionary";
	$v2 = mysql_query($v1);
	
?>
<html>
<head>
<title>Merge Documents</title>
<link rel="stylesheet" type="text/css" href="embelish/merge_doc_decor.css"></link>
<script type="text/javascript" src="impress/library_color.js"></script>
<script type='text/javascript'>
<!-- Print function
function pagers(elementId) 
{
	var printContent = document.getElementById(elementId);
	var windowUrl = 'about:blank';
	var uniqueName = new Date();
	var windowName = 'Print' + uniqueName.getTime();
	
	var printWindow = window.open(windowUrl, windowName, 'left=50000,top=50000,width=40000,height=40000');
	
	printWindow.document.write(printContent.innerHTML);
	printWindow.document.close();
	printWindow.focus();
	printWindow.print();
	printWindow.close();
	}
	// -->
</script>
</head>
<body>
	<div id="wraper">
	<div id="header">Merge Documents</div>
	
		<form method="POST" name="form1" id="form1">
		<div id="content">
		<div id='print1'>
		<table>
			<tr><td rowspan="5"><img src="IMG/sjcb.jpg" height="100" width="100"></td></tr>
			<tr><td id="lip1">Saint Joseph College of Bulacan</td></tr>
			<tr><td id="lip2">San Jose Patag, Sta. Maria Bulacan Philippines</td>	</tr>
			<tr><td id="lip3">(044) 641-4872 / 641-4395</td></tr>
			<tr><td id="lip4"><?php echo(date('F d, Y'));?></td></tr>
		</table>
		
		<!--Book details-->
		<table border="0" id="split">
			<?php 
				$row = mysql_fetch_array($q2); 
				$rod = mysql_fetch_array($r2);
				$rox = mysql_fetch_array($s2);
				$roy = mysql_fetch_array($t2);
				$roz = mysql_fetch_array($u2);
				$ros = mysql_fetch_array($v2);
			?>
			<tr id="liver1">
				<td colspan="3">Summary Reports</td>
			</tr>
			<tr id="liver2">
				<td>Total books:</td>
				<td><?php echo $row['total']; ?></td>
			</tr>
			<tr id="liver2" style="background:#00FF00">
				<td>Total magazines:</td>
				<td><?php echo $rod['total']; ?></td>
			</tr>
			<tr id="liver2">
				<td>Total college students:</td>
				<td><?php echo $rox['total']; ?></td>
			</tr>
			<tr id="liver2" style="background:#00FF00">
				<td>Total instructors:</td>
				<td><?php echo $roy['total']; ?></td>
			</tr>
			<tr id="liver2">
				<td>Total highschool students:</td>
				<td><?php echo $roz['total']; ?></td>
			</tr>
			<tr id="liver2" style="background:#00FF00">
				<td>Total word entries:</td>
				<td><?php echo $ros['total']; ?></td>
			</tr>
			
			
		</table>			
		
		</div>		
		</form>
		
		</div>
		
		<table border="0" width="100%">
		<tr>
		<td width="30%" style="text-align:left"></td>
		<td><a href="transact.php" style="text-decoration:none" title="Back to main page">
			<input type="submit" value="&laquo;&nbsp;&nbsp;Back">&nbsp;&nbsp;&nbsp;
			</a>
		</td>
		<td style="text-align:right">
			<a href="#"><img height="70px" width="70px" src="IMG/canon.png" onclick="JavaScript:pagers('print1');"></a>
		</td>
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