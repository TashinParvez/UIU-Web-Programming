<?php
// connect MySQL
/*
1. MYSQLi
2. PDO
*/

// connect to DBMS

$servername = 'localhost';
$username = 'root';
$password = '';

// connection obj
$con = mysqli_connect($servername, $username, $password);


// check connection
if (!$con) {
    die("Sorry failed to connect: " . mysqli_connect_error());
} else {
    echo "CONNECTED";
}


$sql = 'CREATE DATABASE dbHarry2';
$result = mysqli_query($con, $sql);


echo 'Database created ?';
echo var_dump($result);
echo '<br>';



