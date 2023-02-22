<?php 
$db_host ='localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'wiz';

$connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if($connection != null)
{
    echo "Mysql Database <b>connection success</b>";
    
    $query = "create table employee4( empid int(10) not null auto_increment, empname varchar(40) not null, empemail varchar(40) not null, primary key(empid) )";

    $result = mysqli_query($connection, $query);

    if( $result > 0 )
    {
        echo "<h2> Code: $result, Table Created </h2>";
        
    }
    else
    {
        echo "<h2> Code: $result, Table Creation failed </h2>";
    }
}
else
{
    die ("Database connection failed.");
}
?>
