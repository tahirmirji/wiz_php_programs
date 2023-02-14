<?php

// $Result = 2+4/2*4-(6-2); // BODMAS rule
    //  = 2+4/2*4-4
    //  = 2+2*4-4
    //  = 2+8-4
    //  = 10-4
    //  = 6
// echo $Result;

// **********************



function Afunction(&$wiz)
{
    $wiz =10;
}

$outsideVar = 5;
print("Before".$outsideVar);

Afunction($outsideVar);
print("<br/>");
print("After".$outsideVar);









// $variable = "name";

// $litrally= 'My $variable will not print';

// print($litrally);

// print "<br/>";

// $litrally ="My $variable will print";

// print($litrally);
?>