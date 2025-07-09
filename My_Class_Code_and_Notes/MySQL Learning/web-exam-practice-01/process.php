<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web-exam-01";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "OK";
}

$sql = "SELECT * FROM `student` WHERE 1";
$result = $conn->query($sql);
// $result = $result->fetch_assoc();
// $result = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($result);
echo "<br>";

foreach ($result as $row) {
    echo "id: " . $row["id"] . " - Name: " . $row["name"] . " " . $row["cgpa"] . "<br>";
}
