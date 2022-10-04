<?php
session_start();
 include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PROFILE VERIFICATION</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


</head>
<style>  .fee{
        border: 4px solid blue;
        color:black;
        padding: 20px;
        font-family:'Extra bold';
        font-weight: bolder;
        font-size: larger;
        position: absolute;
        margin: 50px 500px;
        width: 450px;
        display: inline-block;
        border-radius: 40px;
         background:grey ; 
    }
    .fee h1 {
        color:black;
        font-family:"Lobster";
        text-align:center;
        padding: 3px;
        border-radius: 3px;
    }
      body {
        font-family: 'Ubuntu', sans-serif;
        color: rgb(241, 232, 105);
        margin: 0px;
        padding-top: 5px;
        BACKGRound: url('p.jpeg');
    }
     .btn1 {
        margin: 10px 10px;
        color: white;
        background-color: green;
        padding: 5px;
        border: 2px solid rgb(26, 206, 35);
        border-radius: 20px;
        width: 30%;
        font-family:"Verdana";
        font-size: medium;
        display:block;
        text-align:center;
        transition: 0.4s linear;
  cursor: pointer;
    }
    .amount{
        margin: 10px 9px;
        color: red;
        background-color: white;
        padding: 5px;
        border: 4px solid black;
        border-radius: 2px;
        width: 90%;
        height: 45px;
        font-size: larger;
    }

    .btn1:hover {
        color: royalblue;
        background-color: cyan;
    }

    .txt1{
        font-family:"Helvetica";
    }
   
</style>
<body>
<div id="preloader"></div>
<div class="limiter">
    <div class="container-login100" style="background-image: url('img/carbgdash.jpg');">
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
            <form class="fee" method="post" action="profile2.php">
          <span >
           <h2> Enter your Email to get your profile </h2>
          </span>

                <div class="p-t-31 p-b-9">
            <span class="txt1">
              Email
            </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Username is required">
                    <input class="input100" type="email" name="mail" required="required">
                    <span class="focus-input100"></span>
                </div>
                <div class="container-login100-form-btn m-t-17">
                    <button class="btn1">
                       Check profile
                    </button>
                </div>
</div>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


</body>

</html>