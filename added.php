<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $a = $_POST['f_name'];
    $b = $_POST['l_name'];
    $c = $_POST['cont'];
    $d = $_POST['addr'];
    $e = $_POST['dob'];
    $f = $_POST['bg'];
    $g = $_POST['disease'];
    $h = $_POST['ad'];
    $i = $_POST['room'];

$qry = mysql_query("INSERT INTO hospital.patient (p_f_name, p_l_name, p_cont, p_address, p_dob, p_bg, p_disease, p_ad ,p_room) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')");

    if($qry == true)
    {
        echo header("location: p_added.php");
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