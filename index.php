 <?php
session_start();
require("config.php");

if(isset($_POST['btnSnd'])) {
	if("Send"==$_POST['btnSnd']) {
		$usr = $_POST['txtUsr'];
		$pwd = md5($_POST['txtPwd']);
		
		//  Use to check for double entry of account
		$ch1 = "SELECT * FROM tblcurrent WHERE username='$usr' && password='$pwd'";
		$ch2 = mysql_query($ch1);
		$ch3 = mysql_num_rows($ch2);
		// If there is a matched for double entry, display warning message.
		if($ch3>=1) {
			die ("
				<script type='text/javascript'>
				alert('WARNING! Account already in use.')
				window.location='index.php';
				</script>
			");
		}
		else {
			// If no double entry, compare username and password in the database.
			$ps1 = "SELECT * FROM tbluser WHERE username='$usr' && password='$pwd'";
			$ps2 = mysql_query($ps1);
			// Use to find a match in the db
			$ps3 = mysql_num_rows($ps2);
			// Display data and transfer it to the session variable
			$ps4 = mysql_query($ps1);
			// If there is a match, perform this.
			if($ps3==1) {
				$row = mysql_fetch_assoc($ps4);
				$_SESSION['ctrl'] = $row['id'];
				$_SESSION['name'] = $row['fname'];
				$_SESSION['gtyp'] = $row['gtype'];
				$_SESSION['role'] = $row['role'];
				$_SESSION['usr'] = $row['username'];
				$_SESSION['pwd'] = $row['password'];
				// Use to view current users 
				$rc1 = "INSERT INTO tblcurrent(fname,lname,mname,username,password,gtype,role,ctrlnum,dater,timer)
						VALUES('$row[fname]','$row[lname]','$row[mname]','$row[username]','$row[password]',
						       '$row[gtype]','$row[role]','$row[ctrlnum]',current_date(),current_time())";
				mysql_query($rc1);
				// Use to view previous log-ins
				$rc2 = "INSERT INTO tblhistory(fname,lname,mname,username,password,gtype,role,ctrlnum,dater,timer)
						VALUES('$row[fname]','$row[lname]','$row[mname]','$row[username]','$row[password]',
						       '$row[gtype]','$row[role]','$row[ctrlnum]',current_date(),current_time())";
				mysql_query($rc2);
				// this is the main menu
				header("location: sindex.php");
				}
			
			else {
				die("
				<script type='text/javascript'>
				alert('Invalid username or password!');
				window.location='index.php';
				</script>
				");
			}
		}
	}
}
mysql_close($con);
?>

<html>
<head>
<title>Library Log-in</title>
<link rel="stylesheet" type="text/css" href="embelish/login_decor.css"></link>
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
		<div id="header">Account Verification</div>
		<form name="logIn" id="logIn" method="POST">
			<table>
				<tr>
					<td>Username:&nbsp;</td>
					<td><input type="text" name="txtUsr" id="txtUsr" size="30" autocomplete="off" 
					title="Enter username!" onFocus="c_On('Usr')" onBlur="c_Of('Usr')" /></td>
				</tr>
				
				<tr>
					<td>Password:&nbsp;</td>
					<td><input type="password" name="txtPwd" id="txtPwd" size="30" autocomplete="off"
					title="Enter your password!" onFocus="c_On('Pwd')" onBlur="c_Of('Pwd')" /></td>
				</tr>
				
				<tr>
					<td colspan="2">
						<input type="submit" name="btnSnd" id="btnSnd" value="Send">
						<input type="submit" name="btnRst" id="btnRst" value="Reset">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>