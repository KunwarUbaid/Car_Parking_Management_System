<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
</head>
<body>
    
<style>
    
*{
margin: 0;
padding: 0;
box-sizing: border-box;
 font-family: "montserrat",sans-serif;
}
body{
    background-image:url("contact.jpeg");
 
}
 
.contact-section{
  background: #fff;
  padding: 80px 0;
  text-align: center;
  width: 50%;
  margin: auto;
  margin-top: 150px;
  border-top-right-radius: 300px;
  border-bottom-left-radius: 300px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.8) 0px 3px 7px -3px;
  
}
.contact-section:hover{
  border-top-left-radius: 300px;
  border-bottom-right-radius: 300px;
  transition: .5s;
}
 
.inner-width{
  max-width: 600px;
  margin: auto;
  padding: 0 20px;
 
}
 
.contact-section h1{
  font-size: 22px;
  color: #FF8066;
  margin-bottom: 40px;
  text-transform: uppercase;
  letter-spacing: 4px;
  font-weight: 500;
}

.contact-section h2{
  font-size: 22px;
  color: royalblue;
  margin-bottom: 40px;
  text-transform: uppercase;
  letter-spacing: 4px;
  font-weight: 500;
}


/*  
.name,.email,.message{
  background: none;
  border:none;
  outline: none;
  border-bottom: 1px solid #FF8066;
  color: #888;
  padding: 10px 6px;
  font-size: 14px;
  margin-bottom: 40px;
}
 
.name{
  float: left;
  width: 270px;
}
 
.email{
  float: right;
  width: 270px;
}
 
.message{
  min-width: 100%;
  max-width: 100%;
}
 */
 
 .contact-section button{
  background: none;
  color: #fff;
  border: 1px solid #FF8066;
  padding: 12px 40px;
  border-radius: 8px;
  background: #FF8066;
  text-transform: uppercase;
  font-size: 14px;
  transition: 0.4s linear;
  cursor: pointer;
}
 
.contact-section button:hover{
  background: #fff;
  color: #FF8066;
} 
 
@media screen and (max-width:600px){
  .name,.email{
    width: 100%;
  }
}

</style>
<form action="dashboard.php">

    <div class="contact-section">
      <div class="inner-width">
        <h1>HAVE ANY QUERY?</h1>
        <h2>Call us at: 1010101010 <br>
          Mail us at:xyz@gmail.com<h2>

       
        <button>Get in touch</button>
      </div>
        </div>
        <div class="first">
        </div>
    </form>

</body>
</html>
