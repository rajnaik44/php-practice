<?php
//cookies || session

echo"welcome to cookies ";


//syntax to set a cookie
// echo time();
setcookie("category", "book", time() + 86400, "/");
echo "<br>the cookie is set";



?>