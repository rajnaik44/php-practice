<?php

        // include("_dbconnect.php");  //-->if file is present itclude or else move on with other stuff
        require("_dbconnect.php");     //--->file is require to move on


        $sql = "SELECT * FROM `phptrip`";
        $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);
        echo"<br> $num ";
        echo " records found in db <br>";

?>



