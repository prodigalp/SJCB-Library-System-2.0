<?php
if($_SESSION['role']=='4') {
	echo "
		<li><a href='history_log.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush4.png'>
		<div id='label2'>Viewlog</div> </a></li>";
	echo "
		<li><a href='pwd_change.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush3.png'>
		<div id='label2'>Password</div> </a></li>";
	echo "
		<li><a href='credits.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush6.png'>
		<div id='label2'>Credits</div> </a></li>";
	echo "
		<li><a href='group.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush5.png'>
		<div id='label2'>Group</div> </a></li>";
	echo "
		<li><a href='transact.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush8.png'>
		<div id='label2'>Transaction</div> </a></li>";
	echo "
		<li><a href='setting.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush10.png'>
		<div id='label2'>Setting</div> </a></li>";
	echo "
		<li><a href='help.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush9.png'>
		<div id='label2'>help</div> </a></li>";
}

if($_SESSION['role']=='3') {
	echo "
		<li><a href='history_log.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush4.png'>
		<div id='label2'>Viewlog</div> </a></li>";
	echo "
		<li><a href='pwd_change.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush3.png'>
		<div id='label2'>Password</div> </a></li>";
	echo "
		<li><a href='credits.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush6.png'>
		<div id='label2'>Credits</div> </a></li>";
	echo "
		<li><a href='group.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush5.png'>
		<div id='label2'>Group</div> </a></li>";
	echo "
		<li><a href='transact.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush8.png'>
		<div id='label2'>Transaction</div> </a></li>";
	echo "
		<li><a href='help.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush9.png'>
		<div id='label2'>help</div> </a></li>";
}

if($_SESSION['role']=='2') {
	echo "
		<li><a href='history_log.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush4.png'>
		<div id='label2'>Viewlog</div> </a></li>";
	echo "
		<li><a href='pwd_change.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush3.png'>
		<div id='label2'>Password</div> </a></li>";
	echo "
		<li><a href='credits.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush6.png'>
		<div id='label2'>Credits</div> </a></li>";
	echo "
		<li><a href='group.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush5.png'>
		<div id='label2'>Group</div> </a></li>";
	echo "
		<li><a href='help.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush9.png'>
		<div id='label2'>help</div> </a></li>";
}


if($_SESSION['role']=='1') {
	echo "
		<li><a href='credits.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush6.png'>
		<div id='label2'>Credits</div> </a></li>";
	echo "
		<li><a href='help.php' style='text-decoration:none'>
		<img id='pixel' src='IMG/BG/Brush9.png'>
		<div id='label2'>help</div> </a></li>";
}

?>

