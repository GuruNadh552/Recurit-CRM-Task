<?php

	include_once 'db.php';

	$cname = $_POST['cname'];
	$cwebsite = $_POST['cwebsite'];
	$cphone = $_POST['cphone'];
	$address = $_POST['address'];
	$ccity = $_POST['ccity'];
	$cstate = $_POST['cstate'];
	$ccountry = $_POST['ccountry'];
	$Industry = $_POST['Industry'];
	session_start();

	//database connection
	if(!$conn)
	{
		die('Connection Failed :');
	}
	else
	{
		$sql = "INSERT INTO add_company (cname,cwebsite,cphone,address,ccity,cstate,ccountry,Industry,addedBy) VALUES ('$cname','$cwebsite','$cphone','$address','$ccity','$cstate','$ccountry','$Industry','".$_SESSION['email']."')";
		if (mysqli_query($conn, $sql)) {
        	header("Location: company.php?message=Data Added SuccessFully");;
     	} else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     	}
	}
	 mysqli_close($conn);
?>