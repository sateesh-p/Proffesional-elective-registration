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

$sql = "INSERT INTO Elective(elective_id,elective_name)
VALUES ('PE1-15CS2001','TCP/IP');";
$sql .= "INSERT INTO Elective (elective_id,elective_name)
VALUES ('PE2-15CS2002','cloud computing');";
$sql .= "INSERT INTO Elective (elective_id,elective_name)
VALUES ('PE3-15CS2003','Networks Security')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>