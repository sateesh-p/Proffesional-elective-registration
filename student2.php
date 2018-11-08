<?php

$name=$_POST['student'];
$pass=$_POST['password'];
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

 $check=mysqli_query($conn,"select * from student where Reg_no='$name' and password='$pass'");
 $checkrows=mysqli_num_rows($check);
   if($checkrows>0) {
       echo "Already Registered";
}
else
{

 $sql = "INSERT INTO Student (Reg_no,password)
VALUES ('$name','$pass')";

if ($conn->query($sql) === TRUE) {
    
	$message="Registration Successful";
	
	header('Location:http://localhost/examples/project1/pbd.html?');
	
	echo "<script type='text/javascript'>alert('$message');</script>";

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	header('Location:http://localhost/examples/project1/registration1.html?');
}

}
$conn->close();
?>