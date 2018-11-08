<?php

$name=$_POST['faculty'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

$sql="SELECT  e2.Reg_no,e2.elective_id,e1.branch,e1.year,e1.sem,e3.Elective_title
      FROM elective_details e1 INNER JOIN elective_registration e2 INNER JOIN elective e3 on e1.elective_id=e2=elective_id and e1.elective_id=e3.elective_id
      WHERE e1.faculty_id='".$name."'";

echo "STUDENTS REGISTERED FOR ELECTIVE1";
echo("<br>");
$result=$conn->query($sql);
if ($result->num_rows > 0) {
	while($row=$result->fetch_assoc()){
    		echo "<br> Reg_no: ".$row["e2.Reg_No"]. " - Elective_id:". $row["e2.elective_id"]. "_Branch". $row["e1.branch"]. "- Year:". $row["e1.year"]. "-Course:".$row["e3.Elective_title"].  "<br>";
}
}


?>