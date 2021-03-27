<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
	include("config.php");
	
	// Use for displaying book by category
	$q1 = "SELECT category,count(*) as total FROM tblbooks GROUP BY category ORDER BY total DESC";
	$q2 = mysql_query($q1);
	
	// Use for displaying total number of books
	$r1 = "SELECT count(*) as total FROM tblbooks";
	$r2 = mysql_query($r1);
	
	// Use for displaying book by subjects
	$s1 = "SELECT subject,count(*) as subtotal FROM tblbooks GROUP BY subject order by subtotal DESC";
	$s2 = mysql_query($s1);
	
	// Use for displaying total number of books by subject
	$t1 = "SELECT count(subject) as total FROM tblbooks";
	$t2 = mysql_query($t1)

?>
<html>
<head>
<title>Annual Reports</title>
<link rel="stylesheet" type="text/css" href="embelish/book_summary_decor.css"></link>
<script type="text/javascript" src="impress/library_color.js"></script>
<script type="text/javascript">
function pagers(elementId) {
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
</script>

</head>
<body>
	<div id="wraper">
	<div id="header">Book Summary</div>
		
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
		
		<div id="header2">Book Summary</div>
		
		
			<!--Display by book categories -->
			<table border="1" width="100%">
				<tr id="liver1">
					<td width="4%">#</td>
					<td width="75%">Book Category</td>
					<td width="10%">Total</td>
				</tr>
			
				<?php
				$row2 = mysql_fetch_array($r2);
				$cntr=0;
				while($row = mysql_fetch_array($q2)) {
				$cntr++;
				?>
				<tr id="liver2">
					<td><?php echo $cntr.'.'; ?></td>
					<td><?php echo $row['category']; ?></td>
					<td><?php echo $row['total']; ?></td>
				</tr>
				<?php }	?>
				<tr id="liver3">
					<td colspan="2">Total number of books:</td>
					<td><?php echo $row2['total'];?> </td>
				</tr>
			</table>
			
		
			<!--Display by book subjects -->
			<table border="1" width="100%">
				<tr id="liver1">
					<td width="4%">#</td>
					<td width="75%">Book Subject</td>
					<td width="10%">Total</td>
				</tr>
			
				<?php
				$rowd = mysql_fetch_array($t2);
				$cntr=0;
				while($rows = mysql_fetch_array($s2)) {
				$cntr++;
				?>
				<tr id="liver2">
					<td><?php echo $cntr.'.'; ?></td>
					<td><?php echo $rows['subject']; ?></td>
					<td><?php echo $rows['subtotal']; ?></td>
				</tr>
				<?php }	?>
				
				<tr id="liver3">
					<td colspan="2">Total number of books:</td>
					<td><?php echo $rowd['total'];?> </td>
				</tr>
			</table>	
		</div>
		
		<table border="0" width="100%">
		<tr>
		<td width="30%" style="text-align:left">Total result found: <?php echo "<b>". $cntr."</b>"?></td>
		<td><a href="transact.php" style="text-decoration:none" title="Back to main page">
			<input type="button" value="&laquo;&nbsp;&nbsp;Back">&nbsp;&nbsp;&nbsp;
			</a>
		</td>
		<td style="text-align:right">
			<a href="#"><img height="70px" width="70px" src="IMG/canon.png" onclick="JavaScript:pagers('print1');"></a>
		</td>
		</tr>
		</table>
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