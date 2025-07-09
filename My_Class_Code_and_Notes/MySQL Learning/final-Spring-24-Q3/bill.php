<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electricity_bill_2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// ============ form html =======
$loc = $_POST['loc'];
$area = $_POST['area'];
$unit = $_POST['Unit'];



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "OK";
}


// =============================================== WAY 1 ================================================

$sql = "SELECT * 
        FROM bill_info 
        WHERE `location` = '$loc' && `area` = '$area'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        // echo  $row["rate_0_75"] . "<br>" . $row["rate_76_200"] . "<br>" . $row["rate_200_above"] . "<br>";

        $totl_bill = 0;

        if ($unit >= 201) {
            $temp = $unit - 200;

            $totl_bill =  $totl_bill + $temp * $row["rate_200_above"];
        }

        if ($unit >= 76) {
            $temp = $unit - 75;

            $totl_bill = $totl_bill +  $temp * $row["rate_76_200"];
        }

        if ($unit >= 0) {
            $temp = $unit;
            $totl_bill = $totl_bill +  $temp * $row["rate_0_75"];
        }

        echo "==============<br>";
        echo "your loc: " . $loc . "<br>";
        echo "your area: " . $area . "<br>";
        echo "consume unit: " . $unit . "<br>";
        echo "Total bill : " . $totl_bill . "<br>";
        echo "================================<br>";
    }
} else {
    echo "0 results";
}

// =============================================== WAY 2 ================================================


$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);



$result = $result[0];

// print_r($result);
// echo  $row["rate_0_75"] . "<br>" . $row["rate_76_200"] . "<br>" . $row["rate_200_above"] . "<br>";


if ($unit >= 201) {
    $temp = $unit - 200;

    $totl_bill =  $totl_bill + $temp * $result["rate_200_above"];
}

if ($unit >= 76) {
    $temp = $unit - 75;

    $totl_bill = $totl_bill +  $temp * $result["rate_76_200"];
}

if ($unit >= 0) {
    $temp = $unit;
    $totl_bill = $totl_bill +  $temp * $result["rate_0_75"];
}

echo "==============<br>";
echo "your loc: " . $loc . "<br>";
echo "your area: " . $area . "<br>";
echo "consume unit: " . $unit . "<br>";
echo "Total bill : " . $totl_bill . "<br>";
echo "================================<br>";



// =============================== END ================================
$conn->close();
