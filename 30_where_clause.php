<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbharry";

$conn =  new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    die("unscessfull". mysqli_error($conn));
}

$sql = "SELECT * FROM `phptrip` WHERE `dest` = 'china'";
$result = mysqli_query($conn, $sql);

// usuage of where clause to fetch data from database

$num = mysqli_num_rows($result);
echo"$num";
echo " Records found in database <br>";
$no = 1;

if($num != 0 ) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $no." helo ".$row["name"]." your email is ".$row["dest"];
    echo"<br>";
    $no = $no+1;      }}
  

    //usuage of where clause to update data

   $sql = "UPDATE `phptrip` SET `dest` = 'go' WHERE `phptrip`.`sno` = 10";
   $result = mysqli_query($conn, $sql);
   $aff = mysqli_affected_rows($conn);
   echo "<br> no of effected rows " . $aff;

    if(!$result){
        echo"sucessefully updated".mysqli_error($conn);
    }else{
     echo "<br>updated successfully";
    }
    



?>