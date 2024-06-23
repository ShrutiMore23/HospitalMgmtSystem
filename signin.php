<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $a = $_POST['name'];
    $b = $_POST['cont'];
    $c = $_POST['email'];
    $d = $_POST['addr'];
    $e = md5($_POST['pass']);
   

$qry = mysql_query("INSERT INTO admin (a_name, a_cont, a_email, a_address, a_pass) VALUES ('$a','$b','$c','$d','$e')");

    if($qry == true)
    {
        echo header("location: index.php");
    }
    else
    {
        echo "not".mysql_error();
    }
}
else
{
    echo "Request method is not POST";
}

?>