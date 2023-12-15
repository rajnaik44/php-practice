<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbharry";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn){
    die("not connected ".mysqli_error($conn));
}
else{
    echo"connection successfull";
}


$sql = "DELETE FROM `phptrip` WHERE `phptrip`.`dest` = 'russia'";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo"<br> no of effected rows " . $aff;

if($result){
    echo"deleted successfully";
}
else{
    $err = mysqli_error($conn);
    echo "deleted unsuccessfully due to this error ----> $err";
}

?>