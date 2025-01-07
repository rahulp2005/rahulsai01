<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql121";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$Student_Name=$_POST['tb1'];
$Email=$_POST['tb2'];
$Branch=$_POST['tb3'];
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mysql001 (Student_Name, Email, Branch_Name)
VALUES ('$Student_Name', '$Email', '$Branch')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>