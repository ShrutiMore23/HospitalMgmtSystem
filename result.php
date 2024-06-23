<?php
require_once("config.php");

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    $search= $_POST["searchname"];
    $qry= mysql_query("SELECT * FROM patient WHERE p_f_name LIKE '%$search%' OR p_l_name LIKE '%$search%' OR p_cont LIKE '%$search%'  OR p_bg LIKE '%$search%' OR p_disease LIKE '%$search%' OR p_ad LIKE '%$search%' OR p_dd LIKE '%$search%' ");
    $count = mysql_num_rows($qry);
    if ($count > 0) 
    {
        while($row = mysql_fetch_array($qry))
        {
        echo "Patient's ID : ".$row["p_id"]."</br>";
        echo "Patient's First Name : ".$row["p_f_name"]."</br>";
        echo "Patient's Last Name : ".$row["p_l_name"]."</br>";
        echo "Patient's Mobile Number : ".$row["p_cont"]."</br>";
        echo "Patient's Address : ".$row["p_address"]."</br>";
        echo "Patient's Date of Birth : ".$row["p_dob"]."</br>";
        echo "Patient's Blood Group : ".$row["p_bg"]."</br>";
        echo "Patient's Disease : ".$row["p_disease"]."</br>";
        echo "Patient's Admit Date : ".$row["p_ad"]."</br>";
        echo "Patient's Discharge Date : ".$row["p_dd"]."</br>";
        echo "Patient's Room Number: ".$row["p_room"]."</br></br>";
        }
    }
    
    else
    {
        echo "<center>"."No results found for $search"."</center>";
    }
}
?>