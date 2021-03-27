<?php 
	session_start();
	if($_SESSION['role']=='4') {
	require("config.php");
	
	$id = $_GET['id'];
	if(!is_numeric($id)) { die('Data is not a number'); }
	
	$q1  = "SELECT * FROM tblbooks WHERE accnum='$id'";
	$q2  = mysql_query($q1);
	$row = mysql_fetch_object($q2);
	
	if(isset($_POST['btnUpd'])) {
		if("Update"==$_POST['btnUpd']) {
			$acc = $_POST['txtAcc']; 
			$tle = $_POST['txtTle'];
			$aut = $_POST['txtAut'];
			$pic = $_POST['txtPic'];
			$com = $_POST['txtCom'];
			$hrf = $_FILES["picfile"]["name"];
			$vol = $_POST['txtVol'];
			$cpy = $_POST['txtCpy'];
			$pag = $_POST['txtPag'];
			$pub = $_POST['txtPub'];
			$cst = $_POST['txtCst'];
			$rem = $_POST['txtRem'];
			$sof = $_POST['txtSof'];
			$crd = $_POST['txtCrd'];
			$cal = $_POST['txtCal'];
			$d1  = $_POST['txtd1']; 
			$cat = $_POST['txtCat'];
			$clr = $_POST['txtClr'];
			$edi = $_POST['txtEdi'];
			$sub = $_POST['txtSub'];
			/* pichref='$hrf', */
			/* quantity='$', */
			
			if($hrf=='') {
				$q1 = "UPDATE tblbooks SET
					 accnum='$acc',daterec='$d1',classloc='$cal',author='$aut',title='$tle',
					 edition='$edi',volume='$vol',pages='$pag',sofund='$sof',costprice='$cst',
					 publisher='$pub',copyright='$cpy',remarks='$rem',colorcode='$clr',category='$cat',
					 cardnum='$crd',subject='$sub',picom='$com',pichref='$pic' 
					 WHERE accnum='$id' ";
				mysql_query($q1);
				echo("
					<script type='text/javascript'>
					alert('Book Successfully updated, Original Picture retained!');
					window.location='book_menu.php';
					</script>
				");
			}
			else {
				// If no duplicate found, check for picture validity.
				// Check for proper image type.
				if((($_FILES["picfile"]["type"] == "image/gif") ||
					($_FILES["picfile"]["type"] == "image/jpeg") ||
					($_FILES["picfile"]["type"] == "image/pjpeg") ||
					($_FILES["picfile"]["type"] == "image/jpg")) &&
					($_FILES["picfile"]["size"] < 500000000))	{
					// If there is a picture error, display this.
					if($_FILES["picfile"]["error"] > 0) {
						die("
							<script type='text/javascript'>
							alert('Data read error!');
							window.location='book_menu.php';
							</script> ");
						}
					// If file already exists, display this.
					else {
						if(file_exists("portrait/" . $_FILES["picfile"]["name"]))	{
						die("<script type='text/javascript'>
							alert('Picture already exists');
							window.location='book_menu.php';
							</script> ");
						}
						// If picture does not yet exists, move it from tmp_name to folder "portrait/"
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
				// If picture type is invalid, display this.
				else {
					 die("
						<script type='text/javascript'>
						alert('Invalid picture format!');
						window.location='book_menu.php';
						</script>");
				}
					$q1 = "UPDATE tblbooks SET
						 accnum='$acc',daterec='$d1',classloc='$cal',author='$aut',title='$tle',
						 edition='$edi',volume='$vol',pages='$pag',sofund='$sof',costprice='$cst',
						 publisher='$pub',copyright='$cpy',remarks='$rem',colorcode='$clr',category='$cat',
						 cardnum='$crd',subject='$sub',picom='$com',pichref='$hrf'
						 WHERE accnum='$id' ";
					mysql_query($q1);
					echo("
						<script type='text/javascript'>
						alert('Book Successfully updated, New Picture Inserted!');
						window.location='book_menu.php';
						</script> ");
			}
		}
	}
?>

<html>
<head>
<title>Books Update</title>
<link rel="stylesheet" type="text/css" href="embelish/edit_book_decor.css"></link>
<script type="text/javascript">
<!--
	<!-- Color ON -->
	function c_ON(str) {
		document.getElementById('txt'+str).style.backgroundColor = "#FFFF00";
	}
	<!-- Color OFF -->
	function c_OFF(str) {
		document.getElementById('txt'+str).style.backgroundColor = "#FFF";
	}
	
	function validate() {
		var x = confirm("Do you really want to update this record?");
		if(x==false) {
			alert("Operation cancelled");
			return false;
		}
		else if(x==true) {
			alert("Press OK for verification");
			return true;
		}
	}
-->
</script>
</head>
<body>
	<form name="form1" id="form1" enctype="multipart/form-data" method="POST" onsubmit="return validate();">
	<div id="wraper">
	<div id="header">Update book</div>
		<div id="content">
			<table>
				<tr>
					<td>Accession #:&nbsp;</td>
					<td><input type="text" name="txtAcc" id="txtAcc" size="10" autocomplete="off" 
					     value="<?php echo $row->accnum;?>" onclick="c_ON('Acc');" onblur="c_OFF('Acc');" readonly></td>
				</tr>
				<tr>
					<td>Title:&nbsp;</td>
					<td><input type="text" name="txtTle" id="txtTle" size="40" autocomplete="off"
						 value="<?php echo $row->title;?>" onclick="c_ON('Tle');" onblur="c_OFF('Tle');"></td>
				</tr>
				<tr>
					<td>Author:&nbsp;</td>
					<td><input type="text" name="txtAut" id="txtAut" size="40" autocomplete="off"
					     value="<?php echo $row->author;?>" onclick="c_ON('Aut');" onblur="c_OFF('Aut');"></td>
				</tr>
				<tr>
					<td>Picture Name:&nbsp;</td>
					<td><input type="text" name="txtPic" id="textPic" size="40" autocomplete="off"
						 value="<?php echo $row->pichref;?>" onclick="c_ON('Aut');" onblur="c_OFF('Aut');" readonly></td>
				</tr>
				<tr>
					<td>Comment:&nbsp;</td>
					<td><input type="text" name="txtCom" id="txtCom" size="40" autocomplete="off"
						 value="<?php echo $row->picom;?>" onclick="c_ON('Pic');" onblur="c_OFF('Pic');"></td>
				</tr>
				
				<tr>
					<td><label for="file">Change Photo:&nbsp;</label></td>
					<td><input type="file" name="picfile" id="picfile"></td>
				</tr>
				
				<tr>
					<td>Volume:&nbsp;</td>
					<td><input type="text" name="txtVol" id="txtVol" size="40" autocomplete="off"
						 value="<?php echo $row->volume;?>" onclick="c_ON('Vol');" onblur="c_OFF('Vol');"></td>
				</tr>
				<tr>
					<td>Copyright:&nbsp;</td>
					<td><input type="text" name="txtCpy" id="txtCpy" size="40" autocomplete="off"
						 value="<?php echo $row->copyright;?>" onclick="c_ON('Cpy');" onblur="c_OFF('Cpy');"></td>
				</tr>
				<tr>
					<td>Pages:&nbsp;</td>
					<td><input type="text" name="txtPag" id="txtPag" size="40" autocomplete="off"
						 value="<?php echo $row->pages;?>" onclick="c_ON('Pag');" onblur="c_OFF('Pag');"></td>
				</tr>
				<tr>
					<td>Publisher:&nbsp;</td>
					<td><input type="text" name="txtPub" id="txtPub" size="40" autocomplete="off"
						 value="<?php echo $row->publisher;?>" onclick="c_ON('Pub');" onblur="c_OFF('Pub');"></td>
				</tr>
				<tr>
					<td>Cost Price:&nbsp;</td>
					<td><input type="text" name="txtCst" id="txtCst" size="40" autocomplete="off"
						 value="<?php echo $row->costprice;?>" onclick="c_ON('Cst');" onblur="c_OFF('Cst');"></td>
				</tr>
				<tr>
					<td>Remarks:&nbsp;</td>
					<td><input type="text" name="txtRem" id="txtRem" size="40" autocomplete="off"
						value="<?php echo $row->remarks;?>" onclick="c_ON('Rem');" onblur="c_OFF('Rem');"></td>
				</tr>
				<tr>
					<td>Fundings:&nbsp;</td>
					<td><input type="text" name="txtSof" id="txtSof" size="40" autocomplete="off"
						 value="<?php echo $row->sofund;?>" onclick="c_ON('Sof');" onblur="c_OFF('Sof');"></td>
				</tr>
				<tr>
					<td>Card #:&nbsp;</td>
					<td><input type="text" name="txtCrd" id="txtCrd" size="40" autocomplete="off"
						 value="<?php echo $row->cardnum;?>" onclick="c_ON('Crd');" onblur="c_OFF('Crd');"></td>
				</tr>
				<tr>
					<td>Call #:&nbsp;</td>
					<td><input type="text" name="txtCal" id="txtCal" size="40" autocomplete="off"
						value="<?php echo $row->classloc;?>" onclick="c_ON('Cal');" onblur="c_OFF('Cal');"></td>
				</tr>
				<tr>
					<td>Date Received:&nbsp;</td>
					<td><input type="text" name="txtd1" id="txtd1" size="40" autocomplete="off"
					    value="<?php echo $row->daterec?>" onclick="c_ON('d1');" onblur="c_OFF('d1');"></td>
				</tr>
				<tr>
					<td>Category:&nbsp;</td>
					<td><input type="text" name="txtCat" id="txtCat" size="40" autocomplete="off"
						 value="<?php echo $row->category;?>" onclick="c_ON('Cat');" onblur="c_OFF('Cat');"></td>
					<td></td>
				</tr>
				<tr>
					<td>Color Code:&nbsp;</td>
					<td><input type="text" name="txtClr" id="txtClr" size="40" autocomplete="off"
						 value="<?php echo $row->colorcode;?>" onclick="c_ON('Clr');" onblur="c_OFF('Clr');"></td>
					
				</tr>
				<tr>
					<td>Edition:&nbsp;</td>
					<td><input type="text" name="txtEdi" id="txtEdi" size="40" autocomplete="off"
						 value="<?php echo $row->edition;?>" onclick="c_ON('Edi');" onblur="c_OFF('Edi');"></td>
				</tr>
				<tr>
					<td>Subject:&nbsp;</td>
					<td><input type="text" name="txtSub" id="txtSub" size="40" autocomplete="off"
						 value="<?php echo $row->subject;?>" onclick="c_ON('Sub');" onblur="c_OFF('Sub');"></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center">
						<a href="book_menu.php" style="text-decoration:none"><input type="button" value="&laquo;&nbsp;Back"></a>
						<input type="submit" name="btnUpd" id="btnUpd" value="Update">
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