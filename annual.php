<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
	include("config.php");
	
	$q1 = "SELECT title,author,copyright,count(*) as total FROM tblbooks GROUP BY title ORDER BY TITLE ASC";
	$q2 = mysql_query($q1);
	
	$r1 = "SELECT title,dater1,accnum,count(title) total FROM tblmagazine GROUP BY title DESC;";
	$r2 = mysql_query($r1);

?>
<html>
<head>
<title>Annual Reports</title>
<link rel="stylesheet" type="text/css" href="embelish/annual_decor.css"></link>
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
	<div id="header">Annual Reports</div>
	
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
		
		<div id="header2">Books</div>
		
		<!--Book details-->
		<table border="1" width="100%">
			<tr id="liver1">
				<td>#</td>
				<td width="25%">Author</td>
				<td width="50%">Title</td>
				<td width="15%">Date</td>
				<td width="10%">Total</td>
			</tr>
		
			<?php
			$cntr=0;
			while($row = mysql_fetch_array($q2)) {
			$cntr++;
			?>
			<tr id="liver2">
				<td><?php echo $cntr.'.'; ?></td>
				<td><?php echo $row['author']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td>&nbsp;<?php echo $row['copyright']; ?></td>
				<td><?php echo $row['total']; ?></td>
			</tr>
			
			<?php
			}
			?>
		</table>			
		
		<!--Magazine details-->
		<div id="header2">Magazine</div>
		<table border="1" width="100%">
			<tr id="liver1">
				<td>#</td>
				<td width="55%">Title</td>
				<td width="20%">Date</td>
				<td width="15%">ACCN</td>
				<td width="10%">Total</td>
			</tr>
		
			<?php
			$cntr=0;
			while($ros = mysql_fetch_array($r2)) {
			$cntr++;
			?>
			<tr id="liver2">
				<td><?php echo $cntr.'.'; ?></td>
				<td><?php echo $ros['title']; ?></td>
				<td><?php echo $ros['dater1']; ?></td>
				<td>&nbsp;<?php echo $ros['accnum']; ?></td>
				<td><?php echo $ros['total']; ?></td>
			</tr>
			
			<?php
			}
			?>
		</table>

		</div>		
		</form>
		
		</div>
		
		<table border="0" width="100%">
		<tr>
		<td width="30%" style="text-align:left">Total result found: <?php echo "<b>". $cntr."</b>"?></td>
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
	header("location: index.php");
	}
?>