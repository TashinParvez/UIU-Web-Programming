<?php


// text" name="att" id="">br
//     Cost per person <input type="text" name="cost" id="">br
//     Venue Capacity <input type="text" name="venu" id="">br 


$att = $_POST['att'];
$costPerson = $_POST['cost'];
$venu = $_POST['venu'];







function func( $att, $costPerson, $venu ) {

$venu_need = $att / $venu;

$checkV = (int)($att / $venu);

if($venu_need > $checkV )
{
    $checkV += 1;
}

// echo $venu_need . " " . $checkV;


$emtyseat =( $checkV  *  $venu ) - $att; 

$wastemoney = ($emtyseat * $costPerson) ;



echo "total Venu Need  : " . $checkV . "<br>" ;
echo "empty seats : " . $emtyseat . "<br>" ;
echo "Wested Money  : " . $wastemoney  . "<br>" ;



// echo $costPerson;


    
}


 func( $att, $costPerson, $venu );

?>