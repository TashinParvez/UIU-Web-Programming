<?php

$seed = $_POST['seed'];
$terms = $_POST['terms'];


echo $seed . " " . $terms . "<br>";


function sumofDegits($seedcpy)
{
    $sum = 0;

    while ($seedcpy) {
        $sum += $seedcpy % 10;
        $seedcpy /= 10;
    }

    return $sum;
}

for ($i  =  1; $i <= $terms; $i++) {
    echo $seed . " ";

    $seed  = $seed + sumofDegits($seed);
}
