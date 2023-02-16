<?php

function MyFunction($number1,$number2)
{
    $sum =  $number1 + $number2;
     return $sum;

}

$val = MyFunction(10,30);
echo "Am outside function and sum is $val";

?>