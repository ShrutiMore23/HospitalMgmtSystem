<?php
    include("lock.php");
?>

<!DOCTYPE html>

<head>
    <title>Hospital</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
          crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
</head>

<body>
<nav  style="width: 100%; height:100px; padding:5px; background-color: #B7E5B4; ">
    <div>
        <h1>&nbsp;&nbsp;
        <i class="fa-solid fa-house-medical" style="font-size: 1.7em;"></i>
        &nbsp;Hospital Shanti
        </h1>
    </div>
</nav>

<div style="height:700px; width:100%; display:flex; flex-direction:row;">

    <div style="background-color:#E1F0DA;  width:350px;">
        <div class="card" style="width:200px; border-radius:30%; padding:10px;">
            <img class="card-img-top" src="profile.png" alt="Card image" style="height: 300px; width:270px; border-radius:25%;">
            <div class="card-body" style="padding:20px;">
                <!-- <a href="#" class="btn btn-primary">My Profile</a>
                </br></br>
                <a href="#" class="btn btn-primary">Update Profile</a>
                </br></br> -->
                <a href="logout.php" class="btn btn-primary">Log Out</a>
            </div>
        </div>
    </div>

    <div style="background-color:#E1F0DA; width:800px; padding:30px;">
        
            <h2><?php echo "Welcome ! ".$data=$row['a_name'];?></h2>
            <h3>So , what's your work today ?</h3></br>
            <ul>
                <h4><a href="add.php"><li style="color:royalblue;">Add Patients</li></a></h4></br>
                <h4>
                    
                        <li style="color:royalblue;">Update Patient's Info</br></br>
                            <ul>
                            <li>
                                <a href="cont.php" style="color:royalblue;">Update Contact Details</a>
                            </li>
                            </br>
                            <li>
                                <a href="dd.php" style="color:royalblue;">Add Discharge Date</a>
                            </li></ul>
                        </li>
                        
                </h4>
            </br>
                <h4><a href="search.php" style="color:royalblue;"><li>Search Patient</li></a></h4></br>
            </ul>
        
    </div>

    <div style="background-color: #99BC85; width:390px; padding: 30px; padding-top:10px;">
    <h3 >About Us</h3>
<hr>
       <div>
        <i class="fa-solid fa-user-doctor" style="font-size:xx-large;"></i>
           <h4> Dr. Alex Christopher</h4>
           <!-- <h4> Dr. Nicole Christopher</h4> -->
        </div>
</br>
        <div>
        <i class="fa-solid fa-phone" style="font-size:xx-large;"></i>
           <h4>9898989898</h4>
           <!-- <h4>4545454545</h4> -->
        </div>
</br>
        <div>
            <i class="fa-solid fa-hand-holding-medical" style="font-size:xx-large;"></i>
            <h4> Helpline Number : 1010101010</h4>
           <!-- <h4>4545454545</h4> -->
        </div>
</br>
        <div>
        <i class="fa-solid fa-truck-medical" style="font-size:xx-large;"></i>
            <h4>Ambulance Number : 101</h4>
           <!-- <h4>4545454545</h4> -->
        </div>
</br>
        <div style="padding-left: 45px;">
            <h4 >Connect With Us :</h4>
            <i class="fa-brands fa-square-instagram" style="font-size:xx-large;"></i>
            &nbsp;&nbsp;&nbsp;
            <i class="fa-brands fa-twitter"  style="font-size:xx-large;"></i>
            &nbsp;&nbsp;&nbsp;
            <i class="fa-brands fa-facebook"  style="font-size:xx-large;"></i>
            &nbsp;&nbsp;&nbsp;
            <i class="fa-brands fa-telegram"  style="font-size:xx-large;"></i>
        </div>
    </div>

</div>

</body>
</html>