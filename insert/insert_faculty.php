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

$sql = "INSERT INTO Faculty (faculty_id,password)
VALUES (3722,'sat@123');";
$sql .= "INSERT INTO Faculty (faculty_id,password)
VALUES (3107,'pav@123');";
$sql .= "INSERT INTO Faculty (faculty_id,password)
VALUES (3655,'nik@123')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>