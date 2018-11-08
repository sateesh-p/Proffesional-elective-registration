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

$sql = "SELECT *  FROM elective INNER JOIN elective_registration ON elective.Elective_id=elective_registration.Elective_id WHERE elective.Elective_id='PE1-15CS2001'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {

	echo "<h3>STUDENTS REGISTERED FOR ELECTIVE 1</h3>";
    echo "<table border=1><tr><th>Reg_no</th><th>Elective_id</th><th>Elective_name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Reg_no"]."</td><td>".$row["Elective_id"]." </td><td>".$row["Elective_name"]." </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


$sql1 = "SELECT *  FROM elective INNER JOIN elective_registration ON elective.Elective_id=elective_registration.Elective_id WHERE elective.Elective_id='PE2-15CS2002'";


$result = $conn->query($sql1);

if ($result->num_rows > 0) {

	echo "<h3>STUDENTS REGISTERED FOR ELECTIVE 2</h3>";
    echo "<table border=1><tr><th>Reg_no</th><th>Elective_id</th><th>Elective_name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Reg_no"]."</td><td>".$row["Elective_id"]." </td><td>".$row["Elective_name"]." </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$sql2 = "SELECT *  FROM elective INNER JOIN elective_registration ON elective.Elective_id=elective_registration.Elective_id WHERE elective.Elective_id='PE3-15CS2003'";


$result = $conn->query($sql2);

if ($result->num_rows > 0) {

	echo "<h3>STUDENTS REGISTERED FOR ELECTIVE 3</h3>";
    echo "<table border=1><tr><th>Reg_no</th><th>Elective_id</th><th>Elective_name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Reg_no"]."</td><td>".$row["Elective_id"]." </td><td>".$row["Elective_name"]." </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$sql3 = "SELECT *  FROM elective INNER JOIN elective_registration ON elective.Elective_id=elective_registration.Elective_id WHERE elective.Elective_id='PE4-15CS2004'";


$result = $conn->query($sql3);

if ($result->num_rows > 0) {

	echo "<h3>STUDENTS REGISTERED FOR ELECTIVE 4</h3>";
    echo "<table border=1><tr><th>Reg_no</th><th>Elective_id</th><th>Elective_name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Reg_no"]."</td><td>".$row["Elective_id"]." </td><td>".$row["Elective_name"]." </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>