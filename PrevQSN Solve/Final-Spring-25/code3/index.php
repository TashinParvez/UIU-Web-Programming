<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uiutech_final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  
}
else{
    // echo "Ok";
}

//============== DP connect done =====================//


//=================== QSN 1 ans  ==================

echo "<br><br>" ."qsn 1 ans" . "<br>";

$sql = "SELECT COUNT(employeeid), performance
        FROM employee_final
        GROUP BY performance;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "performance: " . $row["performance"] ." --> ". $row["COUNT(employeeid)"] . "<br>";

        // in database d is not given 
    
    }
} else {
    echo "0 results";
}


//=================== QSN 2 ans  ==================

echo "<br><br>" ."qsn 2 ans" . "<br>";

$sql = "UPDATE employee_final 
        SET performance = 'C'
        WHERE salary < 40000 && performance != 'D';";

        
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


//================== qsn 3 ans ==================

echo "<br><br>" ."qsn 3 ans" . "<br>";

$sql = "UPDATE employee_final 
        SET salary = salary + 5000
        WHERE salary > 50000  && salary+5000 <=60000;";

        
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



//================== qsn 4 ans ==================
echo "<br><br>" ."qsn 4 ans" . "<br>";

$sql = "SELECT deptname , COUNT(employeeid)
        FROM employee_final
        GROUP BY deptname
        ORDER by COUNT(employeeid) DESC;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo  $row["deptname"] .  "-->" . $row["COUNT(employeeid)"] ."<br>";
    }
} else {
    echo "0 results";
}
        





// //===================================//
// $sql = "DELETE FROM MyGuests WHERE id=3";
 

$conn->close();
