<?php
	session_start();
	if($_SESSION['role']=='4' || $_SESSION['role']=='3' ||
       $_SESSION['role']=='2' || $_SESSION['role']=='1' ) {
	
	require("config.php");
	$lname = $_GET['q'];
	
	$qstring = "SELECT * FROM tbldictionary WHERE word like concat('$lname','%')";
	mysql_query($qstring);
	
	$result = mysql_query($qstring);
		// If there is an error, display this.
		if(!$result){
			die(mysql_error());
		}
?>
<html>
<head>
<title>Display</title>
<body>
	<form>
	<table width='100%'  style='text-align:center;font-size:18px;text-transform:capitalize;font-family:monospace;border:1px SOLID #000'>
			<tr bgcolor='#306EFF' style="color:#FFF">
				<td 
					style="text-decoration:blink;
					text-transform:uppercase;
					font-weight:bold">
				found result:</td>
			</tr>
		<?php
			$cntr=0;
			while($row=mysql_fetch_array($result)) {
			$cntr++;
		?>
		<tr style="background:#00FF00;" id="r<?php echo $cntr;?>" onmouseover="c_ON(<?php echo $cntr;?>);" onmouseout="c_OFF(<?php echo $cntr;?>);">
			<td id="c<?php echo $cntr;?>" onclick="warn(<?php echo $cntr;?>);" ><?php echo $row['word'];?></td>
		</tr>
		<?php
		}
		?>
	</table>
	
	</form>
</body>
</html>
<?php
	}
else {
	header("location:index.php");
}
?>