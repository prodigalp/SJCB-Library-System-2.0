<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3' ||
   $_SESSION['role']=='2' || $_SESSION['role']=='1' ) {

	require("config.php");
	
	if(isset($_POST['btnShw'])) {
		if("Show"==$_POST['btnShw']) {
			$wrd = $_POST['txtId'];
			
			$q1 = "SELECT * FROM tbldictionary WHERE word='$wrd'";
			$q2 = mysql_query($q1);
		}
	}
	else {
		$q1 = "SELECT * FROM tbldictionary WHERE word='___'";
		$q2 = mysql_query($q1);
	}	
?>

<html>
<head>
<title>CSS Stylish</title>
<link rel="stylesheet" type="text/css" href="embelish/define.css" media="screen" />
<script type="text/javascript">
	// Color Yellow - ON
	function c_ON(x) {
		document.getElementById("r"+x).style.backgroundColor="#FFFF00";
	}
	
	// Color Green - OFF
	function c_OFF(x) {
		document.getElementById("r"+x).style.backgroundColor="#00FF00";
	}
	
	// color on search box
	function ON_c(x) {
		document.getElementById("txt"+x).style.backgroundColor="#FFFF00";
	}
	
	// color on search box
	function OFF_c(x) {
		document.getElementById("txt"+x).style.backgroundColor="#FFF";
	}
	
	// Transfer data from table to textbox
	function warn(y) {
		var x = document.getElementById("c"+y).innerHTML;
		document.getElementById("txtId").value = x;
	}
	///////////////////////////////////////////////
	function showResult(str) {
	if (str=="")  {
	  document.getElementById("display").innerHTML="";
	  return;
	}

	// code for IE7+, Firefox, Chrome, Opera, Safari
	if (window.XMLHttpRequest)  { 
	  xmlhttp=new XMLHttpRequest();
	}

	// code for IE6, IE5
	 else  {  
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	  
	xmlhttp.onreadystatechange=function()  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)    {
		document.getElementById("display").innerHTML=xmlhttp.responseText;
		}
	}

	// Go to the specified location and bring the data came from variables "q" 
	xmlhttp.open("GET","dictionary_search.php?q=" + str,true);
	xmlhttp.send();
	}
	//////////////////////////////////////////////
</script>
</head>
<body>
	<div id="wraper">
	<div id="header">Dictionary</div>
	<form method="POST">
	<?php $row = mysql_fetch_assoc($q2) ?>
	<div id="nav">
		<input type="text" name="txtSrch" id="txtSrch" placeholder="Enter a word to search"
			size="25" autocomplete="off" onkeyup="showResult(this.value)" style="text-indent:5px"
			onfocus="ON_c('Srch')" onblur="OFF_c('Srch')"/>
	<div id="display"></div>
	</div>
	<div id="side">
	<textarea cols="26" rows="15" id="pos"><?php echo $row['meaning'];?></textarea>
	<table>
		<tr><td>
		<input type="text" name="txtId" id="txtId" size="10" autocomplete="off" readonly>
		<input type="submit" name="btnShw" id="btnShw" value="Show">
		</td></tr>
	</table>
	
	</div>
	<div id="reset"></div>
	<div id="footer">
		<a href="sindex.php">&laquo;&nbsp;Home&nbsp;</a>
	</div>
	</form>
	</div>
</body>
</html>
<?php
	}
else {
header("location: index.php");
}

