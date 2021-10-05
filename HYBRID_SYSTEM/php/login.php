<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "demo";
 
 
$connect = mysqli_connect($host, $user, $password, $db);
if(isset($_POST['username']))
{
    $uname = $_POST['username'];
    $password = $_POST['psw'];

    $sql = "select * from loginform where Username ='".$uname."'AND Password = '".$password."' limit 1";
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result)==1)
    { 
        include 'index.php';
        exit();
    }
    else
    {
        include 'error.php';
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<style>
.now {
    display: none;
}

@media screen and (min-width: 1200px) {
    .now {
        display: block;
    }
    .container {
    position: absolute;
    right: 10px;
    margin: 20px;
    max-width: 250px;
    width: 40%;
    padding: 20px;
    background-color: white;
}

body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

}
body, html {
    height: 102%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

.bg-img {
    /* The image used */
    background-image: url("../images/login_background.jpg");
    height: 100%;
    padding-top: 120px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Add styles to the form container */
.container {
    margin-left: 20px;
    margin-right: 20px;
    margin-top: 20px;
    margin-bottom: 20px;
    width: 90%;
    padding: 15px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #009688;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    background-color: #00665c;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
}
.header{
   position: fixed;
   left: 0;
   top: 0;
   width: 100%;
}
.mySlides {
  display:none;
  padding-top: 6%;
  position: relative;
}
.content {
    background-color: #009688; 
    color: #f1f1f1;
    position: absolute;
    width: 85%;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-right: 5px;
    padding-left: 5px;
    bottom: 0px;
    font-size: 15px;
    opacity: 0.7;
}
</style>
<title>HYBRID POWER GENERATION</title>
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/w3-theme-teal.css">
</head>
<body>
<header class="w3-container w3-theme header" style="padding:1%">
  <h1>HYBRID POWER GENERATION</h1>
</header>

<div class="bg-img">
  <form method="POST" class="w3-card-4">
    <div class="container">
      <h3>Authentication required</h3>

      <label for="email"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" class="btn">Login</button>
    </div>
  </form>


  <div class="w3-content w3-section now" style="max-width:800px">
  <div class="mySlides"><img  src="../images/slide1.jpg" style="width:85%"><div class="content">
   <h3>Green energy is more reliable than a power grid</h3>
    <p>The electricity grid fluctuates by the hour and season. This is one of the facts about renewable energy that many people don’t know.</p>
  </div></div>
  <div class="mySlides"><img src="../images/slide2.jpg" style="width:85%"><div class="content">
    <h3> The sun is all we need.</h3>
    <p>The best renewable energy source is the sun. If we invested exclusively in solar power and maximized its use, we could power the entire world from the sun. </p>
  </div></div>
  <div class="mySlides">
    <img src="../images/slide3.jpg" style="width:85%">
    <div class="content">
    <h3>Tech giants, Google, Apple, and Facebook lead the pack in creating a ‘green internet’ – each are using increasingly green energy to power the web.</h3>
  </div>
  </div>
  <div class="mySlides"><img src="../images/slide4.jpg" style="width:85%"><div class="content">
    <h3>Incredibly, as of 2017, China builds 2 wind turbines every hour!</h3>
  </div></div>
  <div class="mySlides"><img src="../images/slide5.jpg" style="width:85%"><div class="content">
    <h3>Solar power may account for the world's main source of power by 2050.</h3>
  </div></div>
  <div class="mySlides"><img src="../images/slide6.jpg" style="width:85%"><div class="content">
    <h3>One wind source could power a small town.</h3>
    <p>A single wind turbine, if properly placed and utilized, could power 1400 houses. Wind farms are becoming more popular, especially when they’re put in the ocean.</p>
  </div></div>
  <div class="mySlides"><img src="../images/slide7.jpg" style="width:85%"><div class="content">
    <h3>Solar and wind industries are creating jobs.</h3>
    <p>Clearly beneficial to both the economy and the earth, beneficial facts about renewable energy point to the wind and sun. Green energy is a new and upcoming industry. It has already created jobs and will continue as demand grows, and the power grids adapt.</p>
  </div></div>
</div>

</div>

<footer class="w3-container w3-theme footer" style="padding:1%">
  <p>© Copyright 2020 <a href="C:\Users\Tamuka Vumbunu\Desktop\text\Vas labs.html">VAS LABS</a> . All rights reserved by Tamuka Vumbunu</p>
</footer>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++){
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 10000); // Change image every 10 seconds
}
</script>


</body>
</html>
