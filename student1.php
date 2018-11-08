<?php

$name=$_POST['student'];
$password=$_POST['password'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$check=mysqli_query($conn,"select * from student where Reg_no='$name'");
 $checkrows=mysqli_num_rows($check);
   if($checkrows>0) {
	alert("Already Registered");
        header('Location:http://localhost/examples/project1/pbd.html?');
}
else
{


  $sql = "INSERT INTO Student (Reg_no,password)
VALUES ($name,$password)";

if ($conn->query($sql) === TRUE) {
    echo "Registration  successful";
	header('Location:http://localhost/examples/project1/pbd.html?');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	header('Location:http://localhost/examples/project1/registration.html?');
}




}

 $conn->close();
?>