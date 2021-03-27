<?php 
	session_start();
	if($_SESSION['role']=='3' || $_SESSION['role']=='4') {
	require("config.php");
?>

<html>
<head>
<title>New Vocabulary</title>
<link rel="stylesheet" type="text/css" href="embelish/add_words_decor.css"></link>
<script type="text/javascript">
<!--
	<!-- Checking for blank entry -->
	function validate() {
		var x = document.getElementById('txtVoc').value;
		var y = document.getElementById('txtMea').value;
		if(x=='' || y=='') {
			alert("WARNING: Blank entry is not allowed!")
			return false;
			}
		else {
			alert("Press OK for verification!");
			return true;
		}
	}
	
	<!-- Color ON -->
	function c_ON(str) {
		document.getElementById('txt'+str).style.backgroundColor = "#FFFF00";
	}
	<!-- Color OFF -->
	function c_OFF(str) {
		document.getElementById('txt'+str).style.backgroundColor = "#FFF";
	}
	
	<!-- Clear screen -->
	function wiper() {
		form1.txtVoc.value=""; 
		form1.txtMea.value=""; 
	}
-->
</script>
</head>
<body>
	<form name="form1" id="form1" method="POST" action="add_words_verify.php" onsubmit="return validate();">
	<div id="wraper">
	<div id="header">new vocabulary</div>
		<div id="content">
			<table>
				<tr>
					<td>New Word:&nbsp;</td>
					<td><input type="text" name="txtVoc" id="txtVoc" size="32" autocomplete="off" 
					     onclick="c_ON('Voc');" onblur="c_OFF('Voc');"></td>
				</tr>
				<tr>
					<td>Meaning:&nbsp;</td>
					<td><textarea cols="30" rows="10" name="txtMea" id="txtMea" autocomplete="off"
						  onclick="c_ON('Mea');" onblur="c_OFF('Mea');"></textarea></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center">
						<a href="transact.php" style="text-decoration:none"><input type="button" value="&laquo;&nbsp;Back"></a>
						<input type="submit" name="btnSnd" id="btnSnd" value="Send">
						<input type="button" name="btnRst" id="btnRst" value="Reset" onclick="wiper();">
					</td>
				</tr>
			</table>
		</form>
			<div id="footer">Programmer: Eyestrain [Tapar]</div>
		</div>
	</div>
</body>
</html>
<?php 
	}
	else {
	header("location:index.php");
}
?>