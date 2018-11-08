<?php
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

$sql = "INSERT INTO Student (Reg_No,password)
VALUES (150030722,'sat@123');";
$sql .= "INSERT INTO Student (Reg_No,password)
VALUES (150030107,'pav@123');";
$sql .= "INSERT INTO Student (Reg_No,password)
VALUES (150030655,'nik@123')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>