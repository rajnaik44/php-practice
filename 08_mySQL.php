<?php
echo "welcome to the the tutuorial to connect to database";
echo "<br>";

/* connect to database
1.mySQLi extension
2.PDO
*/

//connectiong to a database

$servername = "localhost";
$username = "root";
$password = "";

//create a connection
$conn = mysqli_connect($servername,$username,$password);


//die if connection was not successfull
if(!$conn){
    die("sorry we failed to connect" . mysqli_connect_error());
}
echo "connection was succsfull";


?>