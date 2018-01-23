<?php

	require 'connect.inc.php';
	
	if(!empty ($_POST))
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passmd5 = md5($password);
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$contactnumber = $_POST['contactnumber'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$create = mysqli_query($con,"INSERT INTO `user` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `contactnumber`, `address`, `city`, `state`, `zip`) VALUES (NULL, '$username', '$email', '$passmd5', '$firstname', '$lastname', '$contactnumber', '$address', '$city', '$state', '$zip');");

		header('location: login.php');	
	}
	

    
    /*header('location: login.php');*/

?>