<?php
session_start();

if(isset($_SESSION['login_user']))
{
    unset($_SESSION['login_user']);

    if(!isset($_SESSION['login_user']))
    {
        echo header("location: index.php");
    }
}
?>