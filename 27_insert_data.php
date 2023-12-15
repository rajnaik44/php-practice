<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbharry";
$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn) {
    die("sorry not connected". mysqli_error($conn));
}
else {  echo"success connected <br>";}

$name ="vikky";
$destination = "russia";

//sql querry to be executed
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination') LIMIT 3";
$result = mysqli_query($conn, $sql);

//result tobe printed
if(!$result){
    echo"record not interted". mysqli_error($conn);
}
else {  echo" record inserted successfully";}

?>