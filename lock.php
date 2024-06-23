<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("location: index.php");
    
}
include('config.php');
$user_check = $_SESSION['login_user'];

$ses_sql = mysql_query("select * from admin where a_name='$user_check'");

$row = mysql_fetch_array($ses_sql);

// echo "Welcome ! ".$data=$row['a_name'];


?>