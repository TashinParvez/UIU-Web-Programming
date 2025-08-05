<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// =====================================================================
// ============================ QSN 2 ===================================
// =====================================================================

$sql = "SELECT * FROM `employee` WHERE 1 ORDER by hire_date DESC LIMIT 1;";

$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);

$email = $result[0]['email'];
$phone = $result[0]['phone_number'];
$salary = $result[0]['salary'];


echo "Prev Salary: " . $salary . "<br>";

$salary = $salary + $salary * (17.5 / 100);

echo "Salary should be: " . $salary . "<br>";


$sql =
    "UPDATE employee SET salary= '$salary'
     WHERE  phone_number = '$phone' && email = '$email'
";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully <br>";
} else {
    echo "Error updating record: " . $conn->error;
}

// =========== FOR CHECK ================

$sql = "SELECT * FROM `employee` WHERE 1 ORDER by hire_date DESC LIMIT 1;";
$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);

$email = $result[0]['email'];
$phone = $result[0]['phone_number'];
$salary = $result[0]['salary'];


echo "From database Salary: " . $salary . "<br>";
// ======================================================



// =====================================================================
// ============================ QSN 4 ===================================
// =====================================================================


// ============================ SALARY decrease by 10% ===================================

$sql = "SELECT * FROM `employee` 
        WHERE salary > 10000;";

$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);


foreach ($result as $row) {

    $email = $row['email'];
    $phone = $row['phone_number'];
    $salary = $row['salary'];

    $salary =  $salary -  $salary * (10 / 100);

    $sql =
        "UPDATE employee SET salary= '$salary'
         WHERE  phone_number = '$phone' && email = '$email'";

    if ($conn->query($sql) === TRUE) {
        echo "<br> Record updated successfully for update salary 10% <br>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


// ============================ SALARY Increase by 10% ===================================

$sql = "SELECT * FROM `employee` 
        WHERE salary <= 10000;";

$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);


foreach ($result as $row) {

    $email = $row['email'];
    $phone = $row['phone_number'];
    $salary = $row['salary'];

    $salary =  $salary +  $salary * (10 / 100);


    $sql =
        "UPDATE employee SET salary= '$salary'
         WHERE  phone_number = '$phone' && email = '$email'";

    if ($conn->query($sql) === TRUE) {
        echo "<br> Record updated successfully for update salary 10% <br>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}



// ======================================================

$conn->close();
