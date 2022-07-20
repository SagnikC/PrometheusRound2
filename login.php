<?php

// Storing form data in variables
$email = $_POST['email'];
$password = $_POST['password'];


//Database connection created
$con = new mysqli("localhost","root","", "test"); //Parameters: location of db, username of db, pwd of db, db name

if($con->connect_error){
	die("Failed to connect: ".$con->connect_error);
}
else{
	echo "Connection established.";
	echo "<br>";
}

$sql = "INSERT INTO registration (email, password)
VALUES ('$email', '$password')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully:";
  echo "<br>";
  echo "Email: ".$email;
  echo "<br>";
  echo "Password: ".$password;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>