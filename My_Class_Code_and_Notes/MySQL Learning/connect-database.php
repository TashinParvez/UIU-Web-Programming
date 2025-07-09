<?php

//==============  database  ============== 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_DB_name_In_PHP_MyAdmin";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
