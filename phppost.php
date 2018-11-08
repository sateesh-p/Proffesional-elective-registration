<?php
$id=1;
$name=$_POST['name'];
$regno=$_POST['id'];
$year=$_POST['ye'];
$course1=$_POST['course1'];
$course2=$_POST['course2'];

echo "welcome $name,$regno,$year,$course1,$course2";
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}


$sql = "INSERT INTO elective_registration (Reg_no,elective_id)
VALUES ($regno,'$course1');";
$sql .= "INSERT INTO elective_registration (Reg_no,elective_id)
VALUES ($regno,'$course2')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>