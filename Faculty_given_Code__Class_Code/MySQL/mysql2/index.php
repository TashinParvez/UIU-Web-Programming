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

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1>";
  echo "<th>SL</th><th>Name</th><th>Student ID</th><th>Department</th>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
      echo "<td>$row[sl]</td><td>$row[name]</td><td>$row[s_id]</td><td>$row[dept]</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>