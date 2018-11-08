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

$sql = "INSERT INTO Elective_details(elective_id,faculty_id,year,branch,sem)
VALUES ('PE1-15CS2001',3722,3,'CSE',6);";
$sql .= "INSERT INTO Elective_details (elective_id,faculty_id,year,branch,sem)
VALUES ('PE2-15CS2002',3107,3,'CSE',6);";
$sql .= "INSERT INTO Elective_details (elective_id,faculty_id,year,branch,sem)
VALUES ('PE3-15CS2003',3655,3,'CSE',6)";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>