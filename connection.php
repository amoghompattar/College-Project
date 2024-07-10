<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname   = "gymdata";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if($connection !== false)
{
    echo " ok";
}
else
{
    echo "connection failed: " . mysqli_connect_error();
}
?>