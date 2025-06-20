<?php

$name =  $_POST['name'];
echo "HI my name is $name<br>";

$salary =  $_POST['salary'];
$salary = $salary * 1.5;
echo "My salary is $salary<br>";

if ($salary > 1000) {
    echo "VALO<br>";
}


func();

function func()
{
    echo "this is a func <br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "5 * $i = " . 5 * $i . "<br>";
    }
}
