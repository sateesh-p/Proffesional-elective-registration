<?php
$id=$_POST['faculty'];
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

$sql = "SELECT *  FROM elective_details INNER JOIN elective INNER JOIN elective_registration ON elective_details.Elective_id=elective.Elective_id and elective_details.Elective_id=elective_registration.Elective_id WHERE elective_details.Faculty_id='$id'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {

	echo "<h3>Students registered for faculty</h3> $id ";
    echo "<table border=1><tr><th>Reg_no</th><th>elective_id</th><th>elective_name</th><th>branch</th><th>year</th><th>Sem</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Reg_no"]."</td><td>".$row["Elective_id"]."</td><td>".$row["Elective_name"]." </td><td>".$row["branch"]."</td><td>".$row["year"]."</td><td>".$row["Sem"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>