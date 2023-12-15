<?php
//what is a session
//used to manage session across different pages


//verifying the uses login info
session_start();
$_SESSION['username'] = 'Harry';
$_SESSION['Favcat'] = 'bookd';
echo'we have saved your information';






?>