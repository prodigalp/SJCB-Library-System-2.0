<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3') {
	include("config.php");
	
	// Use to view total number of word entries by letters
	$q1 = "SELECT SUBSTR(word,1,1) as letter,COUNT(SUBSTR(word,1,1)) as total FROM
	       tbldictionary GROUP BY SUBSTR(word,1,1)";
	$q2 = mysql_query($q1);
	
	$r1 = "SELECT count(word) as total FROM tbldictionary";
	$r2 = mysql_query($r1);
	
	

?>
<html>
<head>
<title>Word Entries</title>
<link rel="stylesheet" type="text/css" href="embelish/word_entry_decor.css"></link>
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
	<div id="header">Word Entries</div>
	
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
		
		<div id="header2">Word Entries</div>
		
		<!--Book details-->
		<table border="1" id="limit">
			<tr id="liver1">
				<td width="4%">#</td>
				<td width="25%">Letter</td>
				<td width="25%">Total</td>
			</tr>
		
			<?php
			$cntr=0;
			while($row = mysql_fetch_array($q2)) {
			$cntr++;
			?>
			<tr id="liver2">
				<td><?php echo $cntr.'.'; ?></td>
				<td style="text-transform:uppercase"><?php echo $row['letter']; ?></td>
				<td><?php echo $row['total']; ?></td>
			</tr>
			
			<?php
			}
			?>
			<tr id="liver3">
				<?php $ros = mysql_fetch_assoc($r2) ?>
				<td colspan="2">Total Words:</td>
				<td> <?php echo $ros['total'];?></td>
				
			</tr>
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
	header("location:index.php");
	}
?>