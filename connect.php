<?php 
	$db_server = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "Facebook-Login";

	$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

	mysqli_set_charset($conn,"UTF8");
 ?>