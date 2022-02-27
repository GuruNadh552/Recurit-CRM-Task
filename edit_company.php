<?php

	include_once 'db.php';

	$id = $_GET['id'];
	$cname = $_POST['cname'];
	$cwebsite = $_POST['cwebsite'];
	$cphone = $_POST['cphone'];
	$address = $_POST['address'];
	$ccity = $_POST['ccity'];
	$cstate = $_POST['cstate'];
	$ccountry = $_POST['ccountry'];
	$Industry = $_POST['Industry'];

	//database connection
	if(!$conn)
	{
		die('Connection Failed :');
	}
	else
	{
		$sql = "update add_company set cname='$cname', cwebsite='$cwebsite', cphone='$cphone', address='$address', ccity='$ccity', cstate='$cstate', ccountry='$ccountry', Industry='$Industry' where id='$id'";


		if (mysqli_query($conn, $sql)) {
       			 header("Location: company.php?message=Data Updated SuccessFully");
     	} else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     	}
	}
	 mysqli_close($conn);
?>