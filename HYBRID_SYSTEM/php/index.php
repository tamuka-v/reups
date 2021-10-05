<!DOCTYPE html>
<html>
<title>HYBRID POWER GENERATION</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="font-awesome.min.css"><style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item{padding:16px;font-weight:bold}
</style>
<body>

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#"><img src="../images/w3schools.png" style="width:80%;"></a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button w3-teal" href="index.php">Home</a>
  <a class="w3-bar-item w3-button" href="Dashboard.php">Dashboard</a>
  <a class="w3-bar-item w3-button" href="statistics.php">Statistics</a>
  <a class="w3-bar-item w3-button" href="about.php">About</a>
  <a class="w3-bar-item w3-button" href="Settings.php">Settings</a>
  <a class="w3-bar-item w3-button" href="login.php">Log Out</a>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Hybrid Solar and Wind power generation for Overhead Tanks </span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px">
  <h1 class="w3-xxxlarge">HYBRID POWER GENERATION</h1>
</header>

<div class="w3-container" style="padding:32px">

<h2>What is HYBRID POWER GENERATION?</h2>

<p>HYBRID POWER GENERATION (H.P.G.) is a smart combination of two or more energy sources to deliver incessant power and in this case, solar and wind energy are used to charge a battery and provide power to a pump responsible for supplying water to overhead tanks.</p>

<ul class="w3-leftbar w3-theme-border" style="list-style:none">
  <p style="font-weight: bold;">Why Hybrid Power, for this system?</p>
 <li>Energy is optimised to provide the best performance.</li>
 <li>Battery is charged accordingly.</li>
 <li>A microcontroller unit is used in optimising the energy.</li>
 <li>Excess power is utilised.</li>
 <li>Provides various applications:
    <ul>
      <li>Intelligent Irrigation Systems</li>
      <li>Intelligent Home Power Consumption Systems</li>
    </ul>
 </li>
 <li>Promotes various features:
    <ul>
      <li>Sustainable use of resources</li>
      <li>Enhanced Power savings</li>
      <li>Reduced strain on the electrical grid</li>
    </ul>
 </li>
 <p>More facts on <a style="color: #009688" href="https://www.ovoenergy.com/blog/green/20-fascinating-renewable-energy-facts.html">renewable energy.</a></p>
</ul>
<br>
<img src="../images/Hybrid.jpg" style="width:60%" alt="Hybrid">
<hr>
<h2>Talk about <span style="color: green">green energy</span></h2>
<p><strong>Solar and Wind Energy are free!!</strong> The sun and wind are free to use. No exceptional prerequisites. One has to get hold of a solar panel and a wind turbine.</p>

<br>
<img  src="../images/renewable.png" style="width:60%" alt="Hybrid">
<hr>

<hr>
<h2>User friendly renewable form of energy</h2>
<div class="w3-container w3-sand w3-leftbar">
<p><i>Make it as simple as possible, but not simpler.</i><br>
Albert Einstein</p>
<p>
  In 1921 Albert Einstein was awarded the Nobel Prize in Physics for his discovery of the photoelectric effect – and hence, solar panels.
</p>
<p>Solar and Wind energy are easy to use and maintain, and above all cheap. Unlike other renewable energy sources <br> e.g.  Hydro
  <ul>
    <li>Expensive in construction</li>
    <li>An expect is required in setting up the system</li>
    <li>Requires full site research</li>
  </ul>
  Biogas
  <ul>
    <li>Expensive in construction</li>
    <li>Dangerous if gas leaks</li>
    <li>Bad odours associated</li>
  </ul>
Wind just like the sun is everywhere. The only drawback is in setting up of the wind turbine to harness the wind energy. The plane of the propellor has to be perpendicular to the oncoming wind. Wind speed is very dynamic so a speed increasing mechanism has to be used. In spite of this major limitation, any layman can setup an ordinary wind turbine.
</p>
</div>

<hr>
<h2>H.P.G. in pumping water to Overhead Tanks</h2>

<p>3 energy sources are used namely solar, wind and battery in providing power to the pump. Energy from each source is optimised by the microcontroller using an algorithm that follows the logic below <br> Where: 
  <ol>
    <li>High Voltage is 1 <i>(High temperature in battery temperature column)</i></li>
    <li>Low Voltage is 0</li>
  </ol>
  <strong><i>High and Low Voltage are determined by the battery properties</i></strong>
</p>
<table class="w3-table-all w3-centered w3-card-4">
    <thead>
      <tr class="w3-light-grey">
        <th>Solar</th>
        <th>Wind</th>
        <th>Battery</th>
        <th>Battery Temperature</th>
        <th>Condition</th>
      </tr>
    </thead>
    <tr class="w3-hover-uniquegreen" >
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>IDLE</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>1</td>
      <td>BATTERY CHARGING OFF</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>0</td>
      <td>0</td>
      <td>1</td>
      <td>0</td>
      <td>PUMP ON</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>0</td>
      <td>0</td>
      <td>1</td>
      <td>1</td>
      <td>BATTERY CHARGING OFF</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>0</td>
      <td>1</td>
      <td>0</td>
      <td>0</td>
      <td>BATTERY CHARGING ON</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>0</td>
      <td>1</td>
      <td>0</td>
      <td>1</td>
      <td>BATTERY CHARGING OFF, PUMP ON</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>0</td>
      <td>1</td>
      <td>1</td>
      <td>0</td>
      <td>PUMP ON</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>0</td>
      <td>1</td>
      <td>1</td>
      <td>1</td>
      <td>BATTERY CHARGING OFF, PUMP ON</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>1</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>BATTERY CHARGING ON</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>1</td>
      <td>0</td>
      <td>0</td>
      <td>1</td>
      <td>BATTERY CHARGING OFF, PUMP ON</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>1</td>
      <td>0</td>
      <td>1</td>
      <td>0</td>
      <td>PUMP ON</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>1</td>
      <td>0</td>
      <td>1</td>
      <td>1</td>
      <td>BATTERY CHARGING OFF, PUMP ON</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>1</td>
      <td>1</td>
      <td>0</td>
      <td>0</td>
      <td>BATTERY CHARGING ON, PUMP ON</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>1</td>
      <td>1</td>
      <td>0</td>
      <td>1</td>
      <td>BATTERY CHARGING OFF, PUMP ON, EXCESS POWER ON</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>1</td>
      <td>1</td>
      <td>1</td>
      <td>0</td>
      <td>PUMP ON, EXCESS POWER ON</td>
    </tr>
    <tr class="w3-hover-uniquegreen" >
      <td>1</td>
      <td>1</td>
      <td>1</td>
      <td>1</td>
      <td>BATTERY CHARGING OFF, PUMP ON, EXCESS POWER ON</td>
    </tr>
  </table>

</div>

<footer class="w3-container w3-theme" style="padding:32px">
  <p>© Copyright 2020 <a href="C:\Users\Tamuka Vumbunu\Desktop\text\Vas labs.html">VAS LABS</a> . All rights reserved by Tamuka Vumbunu</p>
</footer>
     
</div>

<script>
// Open and close the sidebar on medium and small screens
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
    } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
    }
}

// Accordions
function myAccordion(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme", "");
    }
}
</script>
     
</body>

<!-- Mirrored from www.w3schools.com/w3tryit.asp?filename=tryw3css_examples_material by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 02:08:30 GMT -->
</html> 
