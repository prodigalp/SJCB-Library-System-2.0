<?php
session_start();
if($_SESSION['role']=='4' || $_SESSION['role']=='3' || $_SESSION['role']=='2') {
include("config.php");

// CHANGE PASSWORD LOGIC
//	if username and current password is in the database 
//		if new password is = to confirm password
//			update username & password
//	else
//		display an error new password didn't matched in confirm password	


if(isset($_POST['btnSnd'])) {
	if("Send"==$_POST['btnSnd']) {
		$usr = $_POST['txtUsr'];
		$pwd = md5($_POST['txtPwd']);
		$new = md5($_POST['txtNew']);
		$cfm = md5($_POST['txtCon']);
				
			$ps1 = "SELECT * FROM tbluser WHERE username='$usr' && password='$pwd'";
			$ps2 = mysql_query($ps1);
			// Use to find a match in the db
			$ps3 = mysql_num_rows($ps2); // count the number of rows that matched
			if($ps3>=1) {
				//if new password is equal to confirm password
				if($new==$cfm) {
					$q1 = "UPDATE tbluser SET password='$new' WHERE username='$usr'";
					mysql_query($q1);
					
					//$q2 = "UPDATE tbljunk SET credit='$new' WHERE debit='$usr'";
					//mysql_query($q2);
					die(" 
						<script type='text/javascript'>
						alert('Password successfully updated!');
						window.location='sindex.php';
						</script>
						");
					}
				else {
					die(" 
						<script type='text/javascript'>
						alert('New and Confirm password is not equal');
						window.location='sindex.php';
						</script>
						");
				}
			}
			
			else {
				die(" 
				<script type='text/javascript'>
				alert('Invalid username or password!');
				window.location='sindex.php';
				</script>
				");
			}
		}
	}
mysql_close($con);
?>

<html>
<head>
<title>Library Log-in</title>
<link rel="stylesheet" type="text/css" href="embelish/pwd_change_decor.css"></link>
<script type="text/javascript">
	function c_On(x) {
		document.getElementById('txt'+x).style.backgroundColor = "#FFFF00";
	}
	
	function c_Of(x) {
		document.getElementById('txt'+x).style.backgroundColor = "#FFF";
	}
</script>
</head>
<body>
<div id="wraper">
		<div id="content">	
		<div id="header">Account Setting</div>
		<form name="logIn" id="logIn" method="POST">
			<table>
				<tr>
					<td><input type="text" name="txtUsr" id="txtUsr" size="43" autocomplete="off" placeholder="Username"
					title="Enter username!" onFocus="c_On('Usr')" onBlur="c_Of('Usr')" /></td>
				</tr>
				<tr>
					<td><input type="password" name="txtPwd" id="txtPwd" size="43" autocomplete="off" placeholder="Current password"
					title="Enter your password!" onFocus="c_On('Pwd')" onBlur="c_Of('Pwd')" /></td>
				</tr>
				<tr>
					<td><input type="password" name="txtNew" id="txtNew" size="43" autocomplete="off" placeholder="New password"
					title="Enter your new password!" onFocus="c_On('New')" onBlur="c_Of('New')" /></td>
				</tr>
				<tr>
					<td><input type="password" name="txtCon" id="txtCon" size="43" autocomplete="off" placeholder="Confirm password"
					title="Confirm your password!" onFocus="c_On('Con')" onBlur="c_Of('Con')" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="btnSnd" id="btnSnd" value="Send">
						<input type="submit" name="btnRst" id="btnRst" value="Reset">
						<a href="sindex.php" 
						style="font-size:16px;
						text-decoration:none;
						font-weight:bold;
						text-transform:uppercase;
						color:blue;
						">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back</a>
					</td>
				</tr>
			</table>
		</form>
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