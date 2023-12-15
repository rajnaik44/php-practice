<?php
//start the session and get data


session_start();
echo"Welcome" . $_SESSION['username'];
echo "<br> your favourite category is " . $_SESSION['Favcat'] ;
echo"<br>";






?>