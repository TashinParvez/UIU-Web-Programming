<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Connection to this database failed" . mysqli_connect_error());
} else {
    // echo ("Connection Done");
}
$name = $_POST['name'];
$university = $_POST['university'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];

$sql  = "INSERT INTO `trip` (`name`, `university`, `age`, `phone`, `email`, `dt`) 
VALUES ('$name', '$university', '$age', '$phone', '$mail', current_timestamp());";

echo $sql;
