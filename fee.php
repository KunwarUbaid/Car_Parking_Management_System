<?php
session_start();
include('config.php');
include('sessioncheck.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fees</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

</head>
<style>
    .fee{
        border: 4px solid purple;
        color: orange;
        padding: 20px;
        font-weight: bolder;
        font-size: larger;
        position: absolute;
        margin: 150px 400px;
        width: 400px;
        display: inline-block;
        border-radius: 40px;
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
        BACKGRound: url('fbg.jpeg');
    }
     .btn1 {
        margin: 10px 9px;
        color: royalblue;
        background-color: orange;
        padding: 5px;
        border: 4px solid rgb(26, 206, 35);
        border-radius: 2px;
        width: 80%;
        font-size: larger;
    }
    .amount{
        margin: 10px 9px;
        color: red;
        background-color: white;
        padding: 5px;
        border: 4px solid rgb(26, 206, 35);
        border-radius: 2px;
        width: 80%;
        font-size: larger;
    }

    .btn1:hover {
        color: blueviolet;
        background-color: darkturquoise;
    }
</style>
<body>
<div id="preloader"></div>

<div class="limiter">
    <div class="container-login100" style="background-image: url('img/carbgdash.jpg');">
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
            <?php
            $uid = $_SESSION['log']['useruid'];
            $qry = mysqli_query($con,"SELECT * FROM logtable WHERE useruid='$uid' ORDER BY id DESC");
            $qry1 = mysqli_num_rows($qry);
            if($qry1)
            $row = mysqli_fetch_array($qry);
                if($row['status']=='Left' and $row['payment']=='')
           
                    ?>
                 
                    <form class="login100-form validate-form flex-sb flex-w" method="post" action="payment.php">
          <span class="login100-form-title p-b-53">
              <div class="fee">
            <h1>Fee Generated</h1>
          </span>

                        <?php

                        $from = $row['fromtime'];
                        $to = $row['totime'];
                        $id = $row['id'];

                        $t1 = StrToTime ( $from );
                        $t2 = StrToTime ( $to );
                        $diff = $t2 - $t1;
                        $hours = $diff / ( 60 * 60 );
                        $fee = 60*$hours;
                        $fee = round($fee, 0, PHP_ROUND_HALF_UP);
                        ?>

                        <div  >
                            <input class="amount"  type="text" name="fee" value="<?php echo $fee; ?>" readonly/>
                            <span class="focus-input100"></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <div class="container-login100-form-btn m-t-17">
                            <button  class="btn1" >
                                Pay
                            </button>
                        </div>
                        </div>
              </form>
             
        </div>
    </div>
</div>
</body>

</html>
