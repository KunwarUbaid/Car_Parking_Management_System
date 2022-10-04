<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK</title>
</head>
<body>
    
<style>
    .formdesign{
        background-image:url("feedback.jpeg");
    }
    .container h2{
        font-size:larger;
    }
    .btn1{
  background: none;
  color: #fff;
  border: 1px solid royalblue;
  padding: 12px 40px;
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
<form action="dashboard.php">

<div class="formdesign">
                <h2>How do you rate your overall experience?</h2>
                <p>
                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="bad" >
                    Bad
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="average" >
                    Average
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="good" >
                    Good
                    </label>
                </p>
        <h2>Comment:</h2>
         <textarea name="comment" cols="30" rows="10" id="comment"></textarea>
    </div>
    <input class="btn1"type="submit" value="submit" name="submit1">
    <div class="container-login100-form-btn m-t-17">
                            <button class="btn" class="btn">
                           BOOK A SLOT
                            </button>
                        </div>
    </form>


</body>
</html>
