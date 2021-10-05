<?php 
$connect = mysqli_connect("localhost", "root", "", "hybrid");
$date = date("Y-m-d");
$query = "SELECT `Battery_Voltage`, `Solar_Voltage`, `Windmill_Voltage`, `time` FROM `controller` WHERE `Timestamp` LIKE '".$date."%' ";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ time:'".$row["time"]."' , Battery_Voltage:'".$row["Battery_Voltage"]."', Solar_Voltage:".$row["Solar_Voltage"].", Windmill_Voltage:".$row["Windmill_Voltage"]." }, ";
}
$chart_data = substr($chart_data, 0, -2);
?>

<!DOCTYPE html>
<html>
<title>HYBRID POWER GENERATION</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="font-awesome.min.css">
<link rel="stylesheet" href="../css/morris.css">
<script src="jquery.js"></script>
<script src="raphael.min.js"></script>
<script src="morris.min.js"></script>

<style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item{padding:16px;font-weight:bold}
</style>
<body>

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#"><img src="../images/w3schools.png" style="width:80%;"></a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button" href="index.php">Home</a>
  <a class="w3-bar-item w3-button" href="Dashboard.php">Dashboard</a>
  <a class="w3-bar-item w3-button w3-teal" href="statistics.php">Statistics</a>
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
  <div class="container" style="width:900px;">
   <h2 align="center">Hybrid Power Generation Data</h3>   <br>
     <?php
       $CurrentDay =  "<h3 align='center'>".date("l")." ".date("d")." ".date("M")." ".date("Y")."</h3>";
       echo $CurrentDay;
     ?>  
   <br /><br />
   <div id="chart"></div>
  </div>
<?php

$query = "SELECT MAX(Battery_Voltage) FROM controller";
$result = mysqli_query($connect, $query);
while($temp = mysqli_fetch_array($result))
{
  $maxbat = $temp["MAX(Battery_Voltage)"];
}

$query = "SELECT MAX(Solar_Voltage) FROM controller";
$result = mysqli_query($connect, $query);
while($temp = mysqli_fetch_array($result))
{
  $maxsol = $temp["MAX(Solar_Voltage)"];
}
$query = "SELECT MAX(Windmill_Voltage) FROM controller";
$result = mysqli_query($connect, $query);
while($temp = mysqli_fetch_array($result))
{
  $maxwind = $temp["MAX(Windmill_Voltage)"];
}

$ebat = floor($maxbat);
$esol = floor($maxsol);
$ewind = floor($maxwind);
 $query = "select Battery_Voltage, Battery_Temperature, Timestamp from controller where Battery_Voltage >= '".$ebat."' limit 1 ";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
{
 $bat_Volt[0] = $row["Battery_Voltage"];
 $bat_Volt[1] = $row["Timestamp"]; 
 $bat_Volt[2] = $row["Battery_Temperature"];
}
$timeBat = $bat_Volt[1];
$voltBat = $bat_Volt[0];
$tempBat = $bat_Volt[2];

$query = "select Solar_Voltage, Solar_Temperature, Timestamp from controller where Solar_Voltage >= '".$esol."' limit 1 ";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
{
 $Sol_Volt[0] = $row["Solar_Voltage"];
 $Sol_Volt[1] = $row["Timestamp"]; 
 $Sol_Volt[2] = $row["Solar_Temperature"];
}
$timeSol = $Sol_Volt[1];
$voltSol = $Sol_Volt[0];
$tempSol = $Sol_Volt[2];

$query = "select Windmill_Voltage, Windmill_Speed, Timestamp from controller where Windmill_Voltage >= '".$ewind."' limit 1 ";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
{
 $Wind_Volt[0] = $row["Windmill_Voltage"];
 $Wind_Volt[1] = $row["Timestamp"]; 
 $Wind_Volt[2] = $row["Windmill_Speed"];
}
$timeWind = $Wind_Volt[1];
$voltWind = $Wind_Volt[0];
$speedWind = $Wind_Volt[2];

?>
<h2 align="center">Highest Voltage Recordings</h2>
  <br>
  <h3>Battery</h3>
  <table class="w3-table-all w3-centered w3-card-4">
    <thead>
      <tr class="w3-light-grey">
        <th>Timestamp</th>
        <th>Voltage (Volts)</th>
        <th>Temperature (⁰C)</th>
      </tr>
    </thead>
    <tr class="w3-hover-uniquegreen" >
      <td><?php echo $timeBat ?></td>
      <td><?php echo $voltBat ?></td>
      <td><?php echo $tempBat ?></td>
    </tr>
  </table>
  <br>
  <h3>Solar</h3>
  <table class="w3-table-all  w3-hoverable w3-centered w3-card-4">
    <thead>
      <tr class="w3-light-grey">
        <th>Timestamp</th>
        <th>Voltage (Volts)</th>
        <th>Temperature (⁰C)</th>
      </tr>
    </thead>
    <tr class="w3-hover-uniquegreen">
      <td><?php echo $timeSol ?></td>
      <td><?php echo $voltSol ?></td>
      <td><?php echo $tempSol ?></td>
    </tr>
    
  </table>

  <br>
  <h3>Windmill</h3>
  <table class="w3-table-all  w3-hoverable w3-centered w3-card-4">
    <thead>
      <tr class="w3-light-grey">
        <th>Timestamp</th>
        <th>Voltage (Volts)</th>
        <th>Speed (rpm)</th>
      </tr>
    </thead>
    <tr class="w3-hover-uniquegreen">
      <td><?php echo $timeWind ?></td>
      <td><?php echo $voltWind ?></td>
      <td><?php echo $speedWind ?></td>
    </tr>
    
  </table>

</div>

<footer class="w3-container w3-theme" style="padding:32px">
  <p>© Copyright 2020 <a href="C:\Users\Tamuka Vumbunu\Desktop\text\Vas labs.html">VAS LABS</a> . All rights reserved by Tamuka Vumbunu</p>
</footer>
     
</div>

<script>
// Open and close the sidebar on medium and small screens
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'time',
 ykeys:['Battery_Voltage', 'Solar_Voltage' , 'Windmill_Voltage'],
 labels:['Battery (Volts)', 'Solar (Volts)' , 'Windmill (Volts)' ],
 hideHover:'auto',
 stacked: true
});

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

</html> 
