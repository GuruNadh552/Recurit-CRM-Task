<?php

	$host='localhost';
    $username='root';
    $password='root';
    $dbname = "test01";


    $conn = mysqli_connect("localhost","root","root","test01");

	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}




?>