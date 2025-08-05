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

$sql = "UPDATE student SET mark=mark + 2 WHERE age > 50";
$sql2 = "UPDATE student SET mark=mark - 2 WHERE age < 30";
if ($conn->query($sql) === TRUE) {
  echo "Increased by 2 successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql2) === TRUE) {
    echo "Decreased by 2 successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
$conn->close();
?>