<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbharry";
$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    die("". mysqli_error($conn));
}
else{
    echo"successfully connected";}

?>