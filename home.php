<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
        }
body{
    font-family: 'Ubuntu', sans-serif;;
    background-image:url('wallpaper.jpeg');
}
.container{
    width:890px;
    border:3.3px solid rgb(2, 19, 19);
    margin: 33px auto;
    background-color: coral;
}
        .item{
            border:3px chocolate;
            margin:12px 4px;
            background-color:khaki;
            padding:12px 4px;

        }
    #fruits{
float:left;
width: 48%;
    }
    #computer{
        float:left;
width:48%;
    }
    #stationary{
/* float:left; */
clear:both;
width:100%;
    }
    #food{
        clear:both;
width:100%;   
    }
    p,h3{
        text-align: center;
    }
    h1{
        margin: auto;
    width: 450px;
    }

    .btn {
        margin: 10px 10px;
        color: red;
        background-color: yellow;
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
    .btn:hover{
  background: #fff;
  color: #FF8066;
} 
 

    </style>
</head>
<body>
<form class="login100-form validate-form " method="post" action="dashboard.php">
    <div class="container">
            <h1>WELCOME TO OUR WEBSITE OF VEHICLE PARKING SYSTEM</h1>

        <div id="fruits" class="item">
            <h3>BOOK YOUR SLOT FROM ANYWHERE ON YOUR WEB APP</h3>
              <p id="fruitspara" class="para">
                  This is a very good responsive website which enables you to get status of the slots availability pf the parking vacancy
              </p>
            </div>
              <div id="computer" class="item">
            <h3>Auto generated fee</h3>
              <p id="computerpara" class="para">
                 This website involve no person and is just calculating the price based on your entry time and Date.So it very good as it enables the owner of the car to get idea about the fee
              </p>
            </div>
              <div id="stationary" class="item">
            <h3>Secure Database</h3>
              <p id="stationarypara" class="para">
                  Our Database of car entries ensures o discripancy of data and it is protected by latest web technology.So feel free to trust us!!
              </p>
        </div>
        <div id="food" class="item">
            <h3>Everything linked up with your registered account</h3>
              <p id="foodpara" class="para">
                  The web app takes user login and ensure each user work on his account without changing anything on any other vaehicle parked
              </p>
        </div>
        <div class="container-login100-form-btn m-t-17">
                            <button class="btn" class="btn">
                           BOOK A SLOT
                            </button>
                        </div>
    </div>
</body>
</html>
