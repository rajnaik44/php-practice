<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("srry server was not connected". mysqli_connect_error());

}
echo"connection was successsful";


?>