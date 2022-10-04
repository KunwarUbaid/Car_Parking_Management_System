<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
include('config.php');
include('sessioncheck.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Book</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<body>
<style>
        .fee{
        border: 4px solid purple;
        color: purple;
        padding: 50px;
        font-weight: bolder;
        font-size: larger;
        position: absolute;
        margin: 100px 200px;
        width: 800px;
        display: inline-block;
        border-radius: 40px;
        background:skyblue;
    }
    .fee h1 {
        color: royalblue;
        background-color: orange;
        border: 2px solid red;
        padding: 3px;
        border-radius: 3px;
        background:gold;
    }
      body {
        font-family: 'Ubuntu', sans-serif;
        color: rgb(241, 232, 105);
        margin: 0px;
        padding:50px;
        padding-top: 10px;
        BACKGRound: url('bgbook.jpeg');
        background-repeat: no-repeat;
        background-size: 1550px 800px;
      }
    .btn1{
  background: none;
  color: #fff;
  border: 1px solid royalblue;
  padding: 8px 40px;
  border-radius: 8px;
  background: green;
  text-transform: uppercase;
  font-size: 14px;
  transition: 0.4s linear;
  cursor: pointer;
}
 
.btn1:hover{
  background: lightgreen;
  color: blue;
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
    .red{
        color:red;
        font-weight:bold;
        font-size:large;
    }


    .h2{
        text-align:center;
        color: red;
    }

    .lot{
    background-color:blue;
    width:300px;
    height:300px;
    position: relative;
animation-name: yo;
animation-duration: 0.7s;
animation-iteration-count: 1;
animation-fill-mode: forwards; 

 animation-fill-mode: alternate;
 animation-timing-function: ease-in;
 animation-timing-function: ease-out;
 animation-timing-function: ease-in-out;
 animation-delay: 2s;
 animation-direction: reverse; 
 /* shortcut for all these; */
 animation:animation-name animation-duration animation-timing-function animation-delay animation-iteration-count animation-fill-mode;
animation: yo2 10s ease-in 1s 10 backwards;
}
@keyframes yo2{
    0%{
        top: 0px;
        left:0px;
    }
    25%{
        top: 0px;
        left:1200px;
    }
    50%{
        top: 500px;
        left:1200px;
    }
    75%{
        top: 500px;
        left:0px;
    }
    100%{
top:0px;
left:0px;
    }
}
@keyframes yo{
    from{
width:300px;
    }
    to{
width:80vw;
    }
}
    }
.book{
    color:red;
}
    </style>
<div id="preloader"></div>

<div class="limiter">
    <div class="container-login100">
        <div class="login100-more" style="background-image: url('img/carbgdash.jpg');"></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <?php
            $uid = $_SESSION['log']['useruid'];
            $qry = mysqli_query($con,"SELECT * FROM logtable WHERE useruid='$uid' ORDER BY id DESC");
            $qry1 = mysqli_num_rows($qry);
            if($qry1)
            {
                $row = mysqli_fetch_array($qry);
                if($row['payment']=='Paid')
                {
                    ?>
                    <form class="fee" method="post" action="booklot.php">
                      <span >
                        <h2 class="h2">  Book a Free Slot  </h2>
                      </span>

                      <div class="wrap-input100 validate-input" data-validate="Category. is required">
                            <span class="label-input100">Vehichle Category</span>
                            <input class="input100" type="text" name="category" placeholder="Category...." required="required">
                            <span class="focus-input100"></span>
                        </div>
                          <br>
                        <div class="wrap-input100 validate-input" data-validate="Vehicle No. is required">
                            <span class="label-input100">Vehicle No.</span>
                            <input class="input100" type="text" name="vehicle" placeholder="Vehicle No...." required="required">
                            <span class="focus-input100"></span>
                        </div>
                        <br>
                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">Entry date and time</span>
                            <input class="input100" type="text" name="fromtime" placeholder="Date and time....." required="required">
                            <span class="focus-input100"></span>
                        </div>
                        <br>
                        <div class="wrap-input100 validate-input" data-validate = "Lot No. is required">
                            <span class="label-input100">Parking Lot</span>
                            <select class="input100" name="lot" required="required">
                                <?php
                                $qry = mysqli_query($con,"SELECT * FROM lot WHERE status='Free' or status='Leaving' ");
                                while ($row = mysqli_fetch_array($qry)) {
                                    ?>
                                    <option value="<?php echo $row['lotname']; ?>"><?php echo $row['lotname']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <span class="focus-input100"></span>
                        </div>
                              <br>
                        <div class="flex-m w-full p-b-33">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" required="required">
                                <label class="label-checkbox100" for="ckb1">
                                <span class="txt1">
                                  I agree to the
                                  <a href="#" class="red">
                                    Terms of User
                                  </a>
                                </span>
                                </label>
                            </div>


                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="btn1">
                                    Book Now
                                </button>
                            </div>

                        </div>
                    </form>
                    <?php
                }
                else
                {
                    ?>
                    <form class="lot" method="post" action="booklot.php">
                      <span class="book">
                      <h1>  Lot Already Booked!<h1>
                      </span>
                    </form>
                    <?php
                }
            }
            else
            {
                ?>
                <form class="fee" method="post" action="booklot.php">
                    <span class="login100-form-title p-b-59">
                       <h2 class="h2"> Book a Free Slot </h2>
                    </span>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate="Category. is required">
                            <span class="label-input100">Vehichle Category</span>
                            <input class="input100" type="text" name="category" placeholder="Category...." required="required">
                            <span class="focus-input100"></span>
                        </div>
                        <br>
                        <div class="wrap-input100 validate-input" data-validate="Vehicle No. is required">
                            <span class="label-input100">Vehicle No.</span>
                            <input class="input100" type="text" name="vehicle" placeholder="Vehicle No...." required="required">
                            <span class="focus-input100"></span>
                        </div>
                        <br>
                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">Entry date and time</span>
                            <input class="input100" type="text" name="fromtime" placeholder="Date and time....." required="required">
                            <span class="focus-input100"></span>
                        </div>
                        <br>
                        <div class="wrap-input100 validate-input" data-validate = "Lot No. is required">
                            <span class="label-input100">Parking Lot</span>
                            <select class="input100" name="lot" required="required">
                            <?php
                            $qry = mysqli_query($con,"SELECT * FROM lot WHERE status='Free' or status='Leaving' ");
                            while ($row = mysqli_fetch_array($qry)) {
                                ?>
                                <option value="<?php echo $row['lotname']; ?>"><?php echo $row['lotname']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-m w-full p-b-33">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" required="required">
                            <label class="label-checkbox100" for="ckb1">
                <span class="txt1">
                  I agree to the
                  <a href="#" class="txt2 hov1">
                    Terms of User
                  </a>
                </span>
                            </label>
                        </div>


                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="btn">
                                Book Now
                            </button>
                        </div>

                    </div>
                </form>
                <?php
            }
            ?>
        </div>
    </div>
</div>


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

</body>

</html>