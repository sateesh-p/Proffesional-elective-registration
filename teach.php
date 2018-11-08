<?php

$name=$_POST['teacher'];
$pass=$_POST['password'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}


 $check=mysqli_query($conn,"select * from faculty where Faculty_id='$name' and password='$pass'");
 $checkrows=mysqli_num_rows($check);
   if($checkrows>0) {
        header('Location:http://localhost/examples/project1/result.html?');
     
}
else
{

         header('Location:http://localhost/examples/project1/techer.html?');

}
$conn->close();
?>
