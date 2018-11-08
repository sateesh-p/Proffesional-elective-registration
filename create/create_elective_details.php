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

// sql to create table
$sql = "CREATE TABLE Elective_details (
Elective_id VARCHAR(20), 
Faculty_id INT(10),
CONSTRAINT FK_Faculty FOREIGN KEY (faculty_id)
    REFERENCES Faculty(faculty_id),
CONSTRAINT FK_Faculty FOREIGN KEY (Elective_id)
    REFERENCES Elective(Elective_id),
year VARCHAR(20) NOT NULL,
branch VARCHAR(20) NOT NULL,
Sem VARCHAR(20) NOT NULL,
PRIMARY KEY(Elective_id,Faculty_id)

)";

if ($conn->query($sql) === TRUE) {
    echo "Table Electives created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>