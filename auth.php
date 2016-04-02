<?php
// start session

session_start();

if(empty($_SESSION['reg_id']))
{
    header('location:login.php');
    exit();
}

?>