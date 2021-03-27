<?php
	session_start();
	if($_SESSION['role']=='3' || $_SESSION['role']=='4') {
	require("config.php");
	
	if(isset($_POST['btnSnd'])) {
		if("Send"==$_POST['btnSnd']) {
			$voc  = $_POST['txtVoc'];
			$mea  = $_POST['txtMea'];
			
		// Check for duplicate entry;
			$q1 = "SELECT word,meaning FROM tbldictionary WHERE word='$voc' && meaning='$mea'";
			$q2 = mysql_query($q1);
			
			$a1 = "SELECT word FROM tbldictionary WHERE word='$voc'";
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
				$s1 = "INSERT INTO tbldictionary(word,meaning) VALUES('$voc','$mea')";
				mysql_query($s1);
				echo("
					<script type='text/javascript'>
					alert('New Vocabulary Successfully Added!');
					window.location='transact.php';
					</script> ");
				}
		}
}
	
?>			

<?php
	}
	else {
	header("location: index.php");
	}
?>