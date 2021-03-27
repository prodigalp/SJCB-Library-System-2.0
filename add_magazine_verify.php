<?php
	session_start();
	if($_SESSION['role']=='3' || $_SESSION['role']=='4') {
	require("config.php");
	
	if(isset($_POST['btnSnd'])) {
		if("Send"==$_POST['btnSnd']) {
			$dat1 = isset($_REQUEST["dater1"]) ? $_REQUEST["dater1"] : "";
			$acc  = $_POST['txtAcc'];
			$tle  = $_POST['txtTle'];
			$dat2 = isset($_REQUEST["dater2"]) ? $_REQUEST["dater2"] : "";
		
			// Check for duplicate entry;
			$q1 = "SELECT accnum,title FROM tblmagazine WHERE accnum='$acc' && title='$tle'";
			$q2 = mysql_query($q1);
			
			$a1 = "SELECT accnum FROM tblmagazine WHERE accnum='$acc'";
			$a2 = mysql_query($a1);
			
			$r1 = mysql_num_rows($q2);	
			$r2 = mysql_num_rows($a2);	
			
			if($r1>=1 || $r2>=1) {
				echo("
					<script type='text/javascript'>
					alert('ERROR...Duplicate entry detected!');
					window.location='transact.php';
					</script> ");
			}
			else {
				$s1 = "INSERT INTO tblmagazine(dater1,accnum,title,dater2) VALUES('$dat1','$acc','$tle','$dat2')";
				mysql_query($s1);
				echo("
					<script type='text/javascript'>
					alert('New Magazine Successfully Added!');
					window.location='transact.php';
					</script> ");
				}
		}
}
	
?>			

<?php
	}
	else {
	header("location:index.php");
	}
?>