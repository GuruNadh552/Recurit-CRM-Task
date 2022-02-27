<?php

	include_once 'db.php';

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = md5(htmlspecialchars($_POST['Password']));
	$phone = $_POST['phone'];

	//database connection
	if(!$conn)
	{
		die('Connection Failed :');
	}
	else
	{
		$sql = "INSERT INTO registration (firstName,lastName,gender,email,password,phone) VALUES ('$firstName','$lastName','$gender','$email','$password','$phone')";
		if (mysqli_query($conn, $sql)) {
        	header("Location: index.php?message=User Added SuccessFully");
     	} else {
        	header("Location: register-main.php?message=Invalid Data");
     	}
	}
	 mysqli_close($conn);
?>