<?php
//connecting to a database
$servername = "localhost";
$username = "root";
$password = "";

//creating a connection
$conn = mysqli_connect($servername, $username, $password);

//die if connect is unsucessfull
if (!$conn) {
    die("srry cannot connect". mysqli_connect_error());
}
echo "sucessfully connected <br>";


//creating a db
$sql = "CREATE DATABASE dbharry";
$result  = mysqli_query($conn, $sql);


//check for database creation success
if (!$result) {
    echo"sorry database not connected coz it ". mysqli_error($conn);
    echo "<br>";
}
else {  echo"db is created";
}

?>