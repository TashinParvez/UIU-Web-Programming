<?php
$number = $_POST['num'];

echo "given Nuber $number" . "<br>";
$revNum = 0;
while ($number) {
    $revNum *= 10;
    $revNum += $number % 10;
    $number = intval($number / 10); // Use integer division

}

echo "Reverse Nuber $revNum" . "<br>";


 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="numberRebersal.php" method="post" enctype="multipart/form-data">
        <input type="number" name="num">
        <button>Reverse Number</button>
    </form>

</body>

</html>