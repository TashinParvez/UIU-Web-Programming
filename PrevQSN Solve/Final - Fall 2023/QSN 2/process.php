<?php

$n =  $_POST['n'];

// echo $n;

// ============ with out Table ====================

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {

        echo $i * $j . " ";
    }
    echo "<br>";
}


// ============= with Table ===================

$output = "<table border='1'>";

for ($i = 1; $i <= $n; $i++) {

    $output .= "<tr>";

    for ($j = 1; $j <= $n; $j++) {
        $output .= "<td>" . ($i * $j) . "</td>";
    }

    $output .= "</tr>";
}

$output .= "</table>";

echo $output;


//
// <table border="1">
// <tr>
//     <td></td>
//     <td></td>
//     <td></td>
// </tr>
// </table>
// 

$name = "TASHIN";
$name = $name . " PAREVZ";
$name .= " PAREVZ";
