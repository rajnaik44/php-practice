<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts";

$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
    die("sorry not connected". mysqli_error($conn));

}else{
    // echo "success <br>";
}

$sql = "SELECT * FROM `contacts`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "hell".$row["name"]."this is your email ".$row["email"];
    echo"<br>";}}

?>