<?php
session_start();
include('config.php');
include('sessioncheck.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Payment</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

</head>
<style>
    .fee{
        border: 4px solid yellow;
        color:green;
        padding: 20px;
        font-weight: bolder;
        font-size: larger;
        position: absolute;
        margin: 50px 50px;
        width: 80%;
        display: inline-block;
        border-radius: 40px;
        background:cyan;
        height:100px;
    }
    .fee h1 {
        color: royalblue;
        background-color: orange;
        border: 2px solid red;
        padding: 3px;
        border-radius: 3px;
    }
      body {
        font-family: 'Ubuntu', sans-serif;
        color: rgb(241, 232, 105);
        margin: 0px;
        padding-top: 10px;
        BACKGRound: url('p.jpeg');
    }
     .btn1 {
        margin: 5px 5px;
        color: royalblue;
        background-color: orange;
        padding: 5px;
        border: 2px solid rgb(26, 206, 35);
        border-radius: 2px;
        width: 50%;
        font-size: medium;
        display:block;
    }
    .amount{
        margin: 10px 9px;
        color: red;
        background-color: white;
        padding: 5px;
        border: 2px solid rgb(26, 206, 35);
        border-radius: 2px;
        width: 50%;
        font-size: larger;
    }

    .btn1:hover {
        color: blueviolet;
        background-color: yellow;
    }
</style>
<body>
<div id="preloader"></div>

<div class="limiter">
    <div class="container-login100" style="background-image: url('img/carbgdash.jpg');">
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
            <form class="fee" method="post" action="paycomp.php">
          <span class="login100-form-title p-b-53">
            Pay using Debit Card
          </span>

                <?php
                $fee = $_POST['fee'];
                $id = $_POST['id'];
                ?>
                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="card" placeholder="Card Number" required="required" />
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="fee" value="<?php echo $fee; ?>" readonly/>
                    <span class="focus-input100"></span>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="container-login100-form-btn m-t-17">
                    <button class="btn1">
                        Pay
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


</body>

</html>