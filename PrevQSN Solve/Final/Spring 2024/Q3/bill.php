<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electricity_bill";

// ---------- DATA collect form 1st page -----
$loc = $_POST['Location'];
$area = $_POST['area'];
$Unit = $_POST['Unit'];

echo "Your Location: " . $loc . "<br>" . "Your Area: " . $area . "<br>" . "Consumed Units: " . $Unit . "<br>";
// ---------------


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "
SELECT rate_0_75 as a, 	rate_76_200 as b , rate_200_above as c
FROM bill_info
WHERE location = '$loc' && area = '$area'
";

$result = $conn->query($sql);
$result = $result->fetch_assoc();

// echo $result['a'] . "<br>" . $result['b'] . "<br>" . $result['c'] . "<br>";

//a
if ($Unit > 75) {
    $cost  = 75 * $result['a'];
    $Unit -= 75;
} else {
    $cost  = $Unit * $result['a'];
    $Unit = 0;
}

//b
if ($Unit > (200 - 76 + 1)) {
    $cost  += (200 - 76 + 1) * $result['b'];
    $Unit -= 200 - 76 + 1;
} else {
    $cost  += $Unit * $result['b'];
    $Unit = 0;
}

// c
$cost += $Unit * $result['c'];

// vat
if ($loc == 'Dhaka') {
    $cost += $cost * (20 / 100.00);
} else {
    $cost += $cost * (15 / 100.00);
}


echo "Total Bill: " . $cost . "<br>";


$conn->close();
