<?php

	$conn_error = 'Could not connect.';
	$mysqli_host = 'localhost';
	$mysqli_user = 'root';
	$mysqli_pass = '';
	$mysqli_db = 'user-registration';
	$con = @mysqli_connect($mysqli_host,$mysqli_user,$mysqli_pass,$mysqli_db)or die($conn_error);
?>