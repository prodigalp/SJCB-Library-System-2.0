<?php
	session_start();
	if($_SESSION['role']=='3' || $_SESSION['role']=='4') {
	require("config.php");
	
	// Assigning of data to the variables if button 'Send' is clicked.
	if(isset($_POST['btnSnd'])) {
		if("Send"==$_POST['btnSnd']) {
			$acc = $_POST['txtAcc'];
			$tle = $_POST['txtTle'];
			$aut = $_POST['txtAut'];
			$fil = $_FILES["picfile"]["name"];
			$pic = $_POST['txtPic'];
			$vol = $_POST['txtVol'];
			$cpy = $_POST['txtCpy'];
			$pag = $_POST['txtPag'];
			$pub = $_POST['txtPub'];
			$cst = $_POST['txtCst'];
			$rem = $_POST['txtRem'];
			$sof = $_POST['txtSof'];
			$crd = $_POST['txtCrd'];
			$cal = $_POST['txtCal'];
			$dat = isset($_REQUEST["dater1"]) ? $_REQUEST["dater1"] : "";
			$cat = $_POST['txtCat'];
			$clr = $_POST['txtClr'];
			$edi = $_POST['txtEdi'];
			$sub = $_POST['txtSub'];
			
			// First condition
			$q1 = "SELECT accnum,title,author,pichref FROM tblbooks WHERE accnum='$acc' && title='$tle' && author='$aut' && pichref='$fil'";
			$q2 = mysql_query($q1);
			
			// Second Condition
			$a1 = "SELECT accnum,title,author FROM tblbooks WHERE accnum='$acc' && title='$tle' && author='$aut'";
			$a2 = mysql_query($a1);
			
			// Third Condition
			$b1 = "SELECT accnum FROM tblbooks WHERE accnum='$acc'";
			$b2 = mysql_query($b1);
			
			// 4th Condition Picture test
			$c1 = "SELECT pichref FROM tblbooks WHERE pichref='$fil'";
			$c2 = mysql_query($c1);
			
			$r1 = mysql_num_rows($q2);	// Check for duplicate entry;
			$r2 = mysql_num_rows($a2);	// Check for duplicate entry;
			$r3 = mysql_num_rows($b2);	// Check for duplicate entry;
			$r4 = mysql_num_rows($c2);  // Check for duplicate entry;
			
			
			if($r1>=1 || $r2>=1 || $r3>=1 || $r4>=1) {
				echo("
					<script type='text/javascript'>
					alert('ERROR: Duplicate file or picture detected !');
					window.location='transact.php';
					</script> ");
			}
			// If no duplicate entry, insert the data to the database (tblbooks).
			else {
				$s1 = "INSERT INTO tblbooks(accnum,title,author,pichref,picom,volume,copyright,pages,
				       publisher,costprice,remarks,sofund,cardnum,classloc,daterec,category,colorcode,edition,subject)
					   VALUES('$acc','$tle','$aut','$fil','$pic','$vol','$cpy','$pag','$pub',
					   '$cst','$rem','$sof','$crd','$cal','$dat','$cat','$clr','$edi','$sub')";
				mysql_query($s1);
				// Display a successfull message to the screen.
				echo("
					<script type='text/javascript'>
					alert('New Book Successfully Added !');
					window.location='transact.php';
					</script> ");
				}
		}
}
				// If no duplicate found, check for picture validity.
				// Check for proper image type.
				if((($_FILES["picfile"]["type"] == "image/gif") ||
					($_FILES["picfile"]["type"] == "image/jpeg") ||
					($_FILES["picfile"]["type"] == "image/pjpeg") ||
					($_FILES["picfile"]["type"] == "image/jpg")) &&
					($_FILES["picfile"]["size"] < 500000000))	{
					if($_FILES["picfile"]["error"] > 0) {
						// If there is a picture error, display this.
						die("
							<script type='text/javascript'>
							alert('Data read error!');
							window.location='transact.php';
							</script> ");
						}
					else {
						// If file already exists, display this.
						if(file_exists("portrait/" . $_FILES["picfile"]["name"]))	{
						die("<script type='text/javascript'>
							alert('Picture already exists');
							window.location='transact.php';
							</script> ");
						}
						 // If picture does not yet exists, move it from tmp_name to folder "frame/"
						else { 
							move_uploaded_file($_FILES["picfile"]["tmp_name"], "portrait/". $_FILES["picfile"]["name"]);
						}
						// Display picture information afterwards
						echo "Filename:<b> ". $_FILES["picfile"]["name"]."</b><br>";
						echo "Type:<b> ". $_FILES["picfile"]["type"] ."</b><br>";
						echo "Size:<b> ". $_FILES["picfile"]["size"] ."</b><br>";
						echo "Temporary name:<b> ". $_FILES["picfile"]["tmp_name"] ."</b><br>";
						echo "Stored in ". "<b>portrait/" . $_FILES["picfile"]["name"]. "</b><br><br>";
					}
				}
				else {
					 // If picture type is invalid, display this.
					 die("
						<script type='text/javascript'>
						alert('Invalid picture format!');
						window.location='transact.php';
						</script>");
				 }	
	
?>			


<?php
	}
	else {
	header("location: index.php");
	}
?>