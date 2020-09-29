<?php
$contact_name = $_POST['contact_name'];
$contact_email = $_POST['contact_email'];
$contact_message = $_POST['contact_message'];

// $exist = 

//database connection

$conn = new mysqli('localhost','root','','prerna_tiwari');
// to check whether connected with database or not
	if($conn->connect_error){
		die('Connection Failed : ' .$conn->connect_error );
	}else{

		//
		$stmt = $conn->prepare("insert into contact(contact_name,contact_email,contact_message) values(?,?,?)");
		$stmt->bind_param("sss",$contact_name,$contact_email,$contact_message);
		$stmt->execute();

		// TO PRINT STRING

		echo "DATA REGISTERED.........";
		// session_start();
		// header('location:form1.html');
		$stmt->close();
		$conn->close();
	}


?>