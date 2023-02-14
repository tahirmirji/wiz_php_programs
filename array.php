<?php
    //  =    0,1,2,3,4
// $num = array(1,2,3,4,5);

$salaries = array("A"=> array("C"=> array("E"=>500),"D"=>400),"B"=>200);
foreach($salaries as $singlevalue)
{
    echo " value is $singlevalue <br/>";
}

echo $salaries['A']["C"]["E"];
?>