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

$sql = "SELECT COUNT(Reg_no),Elective_id FROM elective_registration GROUP BY Elective_id";


$result = $conn->query($sql);

if ($result->num_rows > 0) {

	echo "<h3>NO.OF STUDENTS REGISTERED FOR EACH ELECTIVE</h3>";
    echo "<table border=1><tr><th>elective_id</th><th>No.of Students</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Elective_id"]."</td><td>".$row["COUNT(Reg_no)"]." </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>