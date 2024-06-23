<?php 
session_start();

include("config.php");

if(isset($_SESSION['login_user']))
{
    header("location: home.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $a = $_POST['name'];
    // $b = $_POST['l_name'];
    $c = md5($_POST['pass']);
    $sql = "SELECT a_id FROM admin WHERE a_name = '$a' && a_pass = '$c' ";

    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);

    $count = mysql_num_rows($result);

        if($count == 1)
        {
            $_SESSION['login_user'] = $a;
            header("location: home.php");
        }
    
        else
        {
             echo "<center>"."Invalid UserName Or Password"."</center>";
        }
}

?>


<!DOCTYPE html>

<head>
    <title>Hospital</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
          crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body style="background-image:url(https://th.bing.com/th/id/OIP.WInjoyMbwXXGNk67OgaztAHaEK?rs=1&pid=ImgDetMain);
            background-repeat:no-repeat; background-size:cover;">
    <center>
    </br></br>
    <form  action="" method="POST">
        <h2 style="color: #FFFFEC;">LOG IN</h2>
        <h3 style="color: #FFFFEC;">to get started</h3>
        </br></br>

        <div style="background-color: #BFCFE7; width:370px; height:440px; border-radius:15%">
        <div class="form-group" style="background-color: #BFCFE7; width:330px; height:400px; border-radius:15%">
        </br></br>

        <form>
            <div style="position:absolute; width:70px; ">
            <h4>&nbsp;&nbsp;Name :</h4></div>
            </br></br>
            <input type="text" name="name" class="form-control" style="box-shadow: 0 0 10px; " placeholder="Enter Your Name Here">
            </br></br>
            <div style="position:absolute; width:100px; ">
            <h4>&nbsp;&nbsp;Password :</h4></div>
            </br></br>
            <input type="password" name="pass" class="form-control" style="box-shadow: 0 0 10px; " placeholder="Enter Your Password Here">
            </br></br>
            <button type="submit" class="btn btn-success">Log In</button>
            </br></br>
            <a href="" style="text-decoration: none;">Forgot Password ?</a>
</br></br>
            <a href="admin.php" style="text-decoration: none;">New Admin ?</a>
            </form>

        </div>
    </div>
</form>

        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    </center>
</body>
</html>