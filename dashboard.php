<?php
session_start();
include('config.php');
include('sessioncheck.php');

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/STYLE.CSS">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" 
rel="stylesheet">
<link rel="icon" href="favicon.png">
<style>
      

    /* css reset */
    body {
        font-family: 'Palatino linotype', sans-serif;
        color: rgb(241, 232, 105);
        margin: 0px;
        padding-top: 10px;
        BACKGRound: url('bg1.jpeg');
    }

    .left {
        position: absolute;
        line-height: 15px;
        left: 40px;
        top: 20px;
        display: inline-block;
        BORDER: 2px solid rgb(20, 17, 20);
        font-weight: bold;
    }
    .navbar{
    background-color: coral ;
border-radius: 30px;
position:absolute;
left:300px;
width:80%;
}
.navbar ul{
    overflow:auto;
}
.navbar li{
    float:left;
    list-style: none;
    margin:13px 20px;
}
.navbar li a{
    float:left;
  text-decoration: none;
  color:crimson;
    padding:3px 3px;
}

.navbar li a:hover{
color:red;
}
.navbar input{
border: 2px solid black;
border-radius: 14px;
padding:3px 30px;
width:130px;
}

    .right {
        position: absolute;
        right: 20px;
        top: 30px;
        display: inline-block;
        BORDER: 2px solid rgb(128, 0, 17);
        font-weight: bold;
        font-size: large;
       background:indigo;
       color:#50C878;
    }

    .left img {
        width: 250px;
        height: 100px;
    }

       
    .home {
        color: rgb(124, 18, 128);
        text-decoration: none;
        padding: 30px;
        font-weight: bold;

    }

    .home:hover,
    .home:active {
        text-decoration: underline;
        color: orange;
    }

    .btn {
        margin: 10px 9px;
        color: white;
        background-color: grey;
        padding: 5px;
        border: 4px solid rgb(26, 206, 35);
        border-radius: 2px;
    }

    .btn:hover {
        color: blue;
        background-color: darkturquoise;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }

    .container {
        border: 2px solid red;
        color: black;
        padding: 20px;
        font-weight: bolder;
        font-size: larger;
        position: absolute;
        margin: 150px 120px;
        width: 600px;
        display: inline-block;
        border-radius: 25px;
        background:yellow;
    }

    .container h1 {
        color: purple;
        background-color: orange;
        border: 2px solid red;
        padding: 3px;
        border-radius: 3px;
    }

    .formgroup input {
        text-align: center;
        display: block;
        width: 500px;
        padding: 3px;
        border: 2px solid black;
        margin: 5px auto;
        font-size: 20px;
        color: black;
        border-radius: 6px;
    }

    .btn1 {
        margin: 10px 9px;
        color: royalblue;
        background-color: red;
        padding: 5px;
        border: 4px solid rgb(26, 206, 35);
        border-radius: 2px;
        width: 80%;
        font-size: larger;
    }

    .btn1:hover {
        color: green;
        background-color: white;
    }

    .choose {
        color: orange;
        background-color: red;
    }

    .h2{
       font-family:"Adelle basic";
       color:lavender;
    }
</style> 

<body>
<head>
    <meta charset="utf-8">
    <title>Free Lots</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <header class="header">
        <!-- left box for logo  -->
        <div class="left">
            <img src="logo1.jpg" alt="">
        </div>
        <!-- mid box for navigation  -->
        <div class="navbar">
            <ul class="navbar">
                <li><a href="home.php" class="home">HOME</a></li>
                <li><a href="profile.php" class="home">PROFILE</a></li>
                <li><a href="givefeedback.php" class="home">GIVE FEEDBACK</a></li>
                <li><a href="contactus.php" class="home">CONTACT US</a></li>
                <li><a href="logout.php" class="home">LOGOUT</a></li>
            </ul>
        </div>
        <!-- right box for buttons  -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


        <div class="right">
        <form class="login100-form validate-form " method="post" action="fee.php">
   <h2 class="h2">Payment</h2>
<div class="container-login100-form-btn m-t-17">
                            <button class="btn" class="btn">
                                Proceed to pay 
                            </button>
                        </div>
</form>
        </div>
    <style type="text/css">
        table{
            border: 1px solid #1a1a1a;
            width: 100%;
            text-align: center;
            background:	#AFE1AF;
        }
        td{
            height: 250px;
        }
        a{
            color: blue;
        }
        .dash{
            padding-top: 20px;
            padding-right: 23px;
            padding-left: 23px;
            padding-bottom: 17px;

        }
        .h{
        color:black;
        text-align:center;
        font-family:'Adella Basic';
        border:3px solid black;
        background:grey;
        font-weight: bold;
        width: 50%;
       top:70px;
       margin:100px;
        }
    </style>

</head>

<body>
<div id="preloader"></div>

<div class="limiter">
    <div class="container-login100" style="background-image: url('carbgdash.jpg');">
        <div class="wrap-login100 dash" style="width: 85%;">
        <span class="login100-form-title p-b-53">
          <h1 class="h">  Current Status of the Slots </h1>
          </span>
            <table rules="all">
                <tr>
                    <?php
                    $qry = mysqli_query($con,"SELECT * FROM lot ");
                    $c=0;
                    while($row = mysqli_fetch_array($qry) and $c < 5)
                    {
                        $c = $c+1;
                        if($row['status']=='Free')
                        {
                            ?>
                            <td>
                                <span><a href="book.php">Book Now<br>Parking Lot - <?php echo $row['lotname']; ?></a></span>
                            </td>
                            <?php
                        }
                        else if($row['status']=='Leaving')
                        {
                            ?>
                            <td style="background: orange;">
                                <span><a href="book.php">Leaving Soon<br>Parking Lot - <?php echo $row['lotname']; ?></a></span>
                            </td>
                            <?php
                        }
                        else
                        {
                            ?>
                            <td style="background: #87cefa;">
                                <span><a href="#">Booked<br>Parking Lot - <?php echo $row['lotname']; ?></a></span>
                            </td>
                            <?php
                        }
                    }
                    ?>
                </tr>
                <tr>
                    <?php
                    $qry = mysqli_query($con,"SELECT * FROM lot ");
                    $c=0;
                    while($row = mysqli_fetch_array($qry) )
                    {
                        $c = $c+1;
                        if($c > 5)
                        {
                            if($row['status']=='Free')
                            {
                                ?>
                                <td>
                                    <span><a href="book.php">Book Now<br>Parking Lot - <?php echo $row['lotname']; ?></a></span>
                                </td>
                                <?php
                            }
                            else
                            {
                                ?>
                                <td style="background:orange;">
                                    <span><a href="#">Booked<br>Parking Lot - <?php echo $row['lotname']; ?></a></span>
                                </td>
                                <?php
                            }
                        }
                    }
                    ?>
                </tr>
            </table>
        </div>
    </div>
</div>

</form>
             
</body>

</html>
