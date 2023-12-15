<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "contacts";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    die("not connected". mysqli_error($conn));
}
else{
    echo"success";}


    $sql = "SELECT * FROM `contacts`";
    $result = mysqli_query($conn, $sql);

    //find the number of recors returned
    $num = mysqli_num_rows($result);
    echo"$num";
    echo"<br>";
    
    //display the rows returned  by the  sql querry
    if($num > 0){
        /*
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo"<br>";
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo"<br>";
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo"<br>";
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo"<br>";
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo"<br>";
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo"<br>";
        */

        //we can fetch better in while loop
        while($row = mysqli_fetch_assoc($result)){
            // echo var_dump($row);
            echo $row['sno'] . "hello". $row["name"] ."your email". $row["email"];
            echo"<br>";
    
    }
    }



?>