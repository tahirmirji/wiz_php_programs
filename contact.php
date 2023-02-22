<?php

if(isset($_POST['Submit']))
{

    if(  isset(  $_POST['txt1']   )    &&      isset(    $_POST['txt2']   )   )
    {

        $empname = $_POST['txt1'];
        $empemail   = $_POST['txt2'];
        
    
$host ='localhost';
$username ='root';
$pass ='';
$dbname='wiz';

$connection = mysqli_connect($host,$username,$pass,$dbname);

if($connection != null)
{
    echo 'Connection Success........<br>';
    $query = " INSERT INTO employee values(NULL,'".$empname."' , '".$empemail."')";
    $reply = mysqli_query($connection,$query);

    if($reply>0)
    {
        echo "New Record added to table";
    }
    else
    {
        echo "Failed to add new record";
    }

}

    }    
}      


?>
