<?php 
$db_host ='localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'library';

$connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if($connection != null)
{
    echo "Mysql Database connection success";

}
else
{
    echo "Database connection failed.";
}
?>
