<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $a = $_POST['f_name'];
    $b = $_POST['l_name'];
    $c = $_POST['dd'];
    

$qry = mysql_query("UPDATE patient SET p_dd ='$c' WHERE p_f_name = '$a' && p_l_name = '$b' ");

    if($qry == true)
    {
       
        echo header("location: updated.php");
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