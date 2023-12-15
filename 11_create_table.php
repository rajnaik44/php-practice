<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbharry";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("sorry not connected". mysqli_connect_error());
}
else {echo"successfully connected <br>";}

/*creating a db
$sql = "CREATE DATABASE dbharry";
$result = mysqli_query($conn, $sql);
*/

/*checking if db is created
if(!$result){
    echo "sorry db not created coz it ". mysqli_error($conn);
}
else {echo"db is successfully created";}
*/

//creating a table
$sql = "CREATE TABLE `phptrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo"sorry table not created". mysqli_error($conn);
}else {
    echo "table sucessfully created";}

?>