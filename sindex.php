<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3' || 
   $_SESSION['role']=='2' || $_SESSION['role']=='1') {
 ?>
<html>
<head>
<title>Library System Main Menu</title>
<link rel="stylesheet" type="text/css" href="embelish/index_decor.css"></link>
<script type="text/javascript" src="impress/index_clock.js"></script>
</head>
<body onload="mF()">
	<div id="wraper">
		<form name="main" id="main" method="POST" action="logout.php">
		<div id="header">SJCB Library System 4.0</div>
		<div id="content">
		<table>
				<tr>
					<td>Active User:&nbsp;</td>
					<td style="text-align:center"><input type="text" name="txtNme" id="txtNme" size="20" value="<?php echo $_SESSION['name']; ?>" readonly></td>
					<td id="placetime" style="text-align:left"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="txtUsr" id="txtUsr" size="15" value="<?php echo $_SESSION['usr']; ?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="txtPwd" id="txtPwd" size="15" value="<?php echo $_SESSION['pwd']; ?>"></td>
				</tr>
		</table>
			
			<div id="outside">
				<a href="books.php"><img src="IMG/cs.jpg"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">Library</div>
			</div>
			
			<div id="outside">
				<a href="define.php"><img src="IMG/contacts.jpg"
				   onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"></a>
				<div id="label">Dictionary</div>
			</div>
			
			<div id="reset"></div>
			<div id="outsider">
			<ul>
			<?php include("index_link.php"); ?>
			</ul>
			</div>
			<div id="reset"></div>
			<input type="submit" name="btnOut" id="btnOut" value="Logout">
		</form>
		</div>
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