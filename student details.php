<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$intrestedin = $_POST['intrestedin'];
	
	//database connection
	$conn = new mysqli('localhost','root','','student details');
	if($conn->connect_error)
	{
		die('Connection Failed : ',$conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare('insert into student details(firstname, lastname, email, intrestedin)
			values(?, ?, ?, ?)
		$stmt->bind_param("sssssi",$firstname, $lastname, $email, $intrested);
		$stmt->execute();
		echo "student details stored successfully...";
		$stmt->close();
		$stmt->close();
?>