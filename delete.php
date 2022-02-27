<?php

	include_once 'db.php';

	$id = $_GET['id'];

	if(!$conn)
	{
		die('Connection Failed :');
	}
	else
	{
		$sql = "DELETE FROM add_company WHERE id='$id'";
		if (mysqli_query($conn, $sql)) {
       			 header("Location: company.php?message=Data Deleted SuccessFully");
     	} else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     	}	
	}
	 mysqli_close($conn);


?>