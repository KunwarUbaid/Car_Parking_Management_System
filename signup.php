<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

</head>
<style>
    .fee{
        border: 4px solid green;
        color:black;
        padding: 20px;
        font-weight: bolder;
        font-size: larger;
        position: absolute;
        margin: auto;
        width: 50%;
        display: inline-block;
        border-radius: 40px;
        background:grey;
        font-family: Oswald-Regular, sans-serif;
    }
    .fee h1 {
        color: royalblue;
        background-color: orange;
        border: 2px solid red;
        padding: 3px;
        border-radius: 3px;
    }
    .fee h2{
        font-family:"Copperplate";
        color: black;
        text-align:center;
    }
      body {
        font-family: 'Ubuntu', sans-serif;
        color: rgb(241, 232, 105);
        margin: 0px;
        padding-top: 10px;
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
        background-color: darkturquoise;
    }
</style>
<body>
<div id="preloader"></div>
<div class="limiter">
    <div class="container-login100">
        <div class="login100-more" style="background-image: url('img/carbgdash.jpg');"></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <form class="fee" method="post" action="register.php">
            <span >
                <h2>Sign Up</h2>
            </span>
            <br>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Full Name</span>
                    <input class="input100" type="text" name="name" placeholder="Name..." required="required"/>
                    <span class="focus-input100"></span>
                </div>
           <br>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" placeholder="Email addess..." required="required"/>
                    <span class="focus-input100"></span>
                </div>
                <br>
                <div class="wrap-input100 validate-input" data-validate="Contact is required">
                    <span class="label-input100">Contact</span>
                    <input class="input100" type="number" name="contact" placeholder="Mobile no...." required="required"/>
                    <span class="focus-input100"></span>
                </div>
            <br>
                <div class="wrap-input100 validate-input" data-validate="Registration date is required">
                    <span class="label-input100">Registration date</span>
                    <input class="input100" type="date" name="registrationdate" placeholder="Registration date" required="required"/>
                    <span class="focus-input100"></span>
                </div>
                <br>

                <div class="wrap-input100 validate-input" data-validate="Address is required">
                    <span class="label-input100">Address</span>
                    <input class="input100" type="text" name="address" placeholder="Address...." required="required"/>
                    <span class="focus-input100"></span>
                </div>
                <br>
                <div class="wrap-input100 validate-input" data-validate="Aadhar is required">
                    <span class="label-input100">Aadhar No.</span>
                    <input class="input100" type="number" name="aadhar" placeholder="Aadhar no...." required="required"/>
                    <span class="focus-input100"></span>
                </div>

                <br>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="pass" placeholder="*************" required="required"/>
                    <span class="focus-input100"></span>
                </div>
                <br>
                <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
                    <span class="label-input100">Repeat Password</span>
                    <input class="input100" type="password" name="repass" placeholder="*************" required="required"/>
                    <span class="focus-input100"></span>
                </div>
                <br>
                <div class="flex-m w-full p-b-33">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" required="required"/>
                        <label class="label-checkbox100" for="ckb1" >
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
                        <button class="btn1">
                            Sign Up
                        </button>
                    </div>

                    <a href="index.php" class="btn1">
                        Sign in
                        <i class="fa fa-long-arrow-right m-l-5"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


</body>

</html>
