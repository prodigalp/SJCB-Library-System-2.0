<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
	include("config.php");
	
	// Use for displaying book by category
	$q1 = "SELECT t1.fname,t1.mname,t1.lname,t2.email
		   FROM tbluser t1, tblprof t2
		   WHERE t1.id=t2.ctrlnum && gtype='professor'";
	$q2 = mysql_query($q1);
	
	
	// Use for displaying total number of books
	$r1 = "SELECT count(*) as total from tbluser WHERE gtype='professor';";
	$r2 = mysql_query($r1);
	

?>
<html>
<head>
<title>College Counter</title>
<link rel="stylesheet" type="text/css" href="embelish/instructor_count_decor.css"></link>
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
	<div id="header">High School Students</div>
		
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
		
		<div id="header2">Instructors</div>
		
		
			<!--Display by book categories -->
			<table> 
				<tr><td colspan="2">List of registered instructors</td></tr>
				<tr id="liver1">
					<td>Name</td>
					<td>Email</td>
				</tr>
			
				<?php
				$row2 = mysql_fetch_array($r2);
				$cntr=0;
				while($row = mysql_fetch_array($q2)) {
				$cntr++;
				?>
				<tr id="liver2">
					<td><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname']; ?></td>
					<td><?php echo $row['email']; ?></td>
				</tr>
				<?php }	?>
				<tr id="liver3">
					<td>Total Instructors:</td>
					<td><?php echo $row2['total'];?> </td>
				</tr>
			</table>
			
		
			
		</div>
		
		<table border="0" width="100%">
		<tr>
		<td width="30%" style="text-align:left"></td>
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