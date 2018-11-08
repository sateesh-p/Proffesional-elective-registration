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
$sql = "CREATE TABLE Elective_Registration ( 
Reg_no INT(10),
Elective_id VARCHAR(20),
CONSTRAINT FK_stud FOREIGN KEY (Reg_no)
    REFERENCES Student(Reg_no),
CONSTRAINT FK_elect FOREIGN KEY (Elective_id)
    REFERENCES Electives(Elective_id),
primary key(Reg_no,Elective_id),

reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Elective Registration created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>