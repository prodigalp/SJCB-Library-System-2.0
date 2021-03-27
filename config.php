<?php
	$con = mysql_connect('localhost','root','');
	if(!$con) {
		die('Could not connect to the Server'. mysql_error());
	}
	mysql_select_db('library',$con) or die(mysql_error());
?>