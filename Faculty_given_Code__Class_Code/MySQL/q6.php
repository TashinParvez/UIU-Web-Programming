<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uiuweb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// sql to delete a record
$sql = "DELETE FROM student WHERE mark BETWEEN 30 AND 50 AND age BETWEEN 20 AND 50";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
  
$conn->close();
?>