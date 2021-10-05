<!DOCTYPE html>
<html>
<title>HYBRID POWER GENERATION</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="font-awesome.min.css">
<script src="../js/jquery.js"></script>
<style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item{padding:16px;font-weight:bold}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
h3
{
  font-size: 100%;
}
#propeller
{
  padding: 30px;
}
.column {
  float: left;
  width: 100%;
  margin-bottom: 16%;
  padding: 0 8px;
}

@media screen and (min-width: 650px) {
  /*.column {
    width: 100%;
    display: block;
  }*/
  .row
{
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr;
}
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background: white;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #009688;
  text-align: center;
  cursor: pointer;
  width: 100%;
}



.button:hover {
  background-color: #00665c;
}
.bow
{
  background: white;
  padding: 10px;
  font-family: "Times New Roman", serif;
  font-size: 20px;
}

</style>
<body>
<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#"><img src="../images/w3schools.png" style="width:80%;"></a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button" href="index.php">Home</a>
  <a class="w3-bar-item w3-button w3-teal" href="Dashboard.php">Dashboard</a>
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
  <h1 align='center'>My Dashboard</h1><br>
  <h2 id="Current_Time" align="center"></h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="../images/hold.jpg" alt="Battery" style="width:100%">
      <div class="container bow">
        <h2>Battery</h2>

        <?xml version="1.0" encoding="utf-8"?>
        <!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 1920 1080" style="enable-background:new 0 0 1920 1080;" xml:space="preserve">
        <style type="text/css">
        .st0{fill:#00FF00;stroke:#000000;stroke-miterlimit:10;}
        .st1{stroke:#000000;stroke-miterlimit:10;}
        </style>
         <!--<span id="Battery_Meter_var"></span>-->
         <g id="Battery_Meter_var"> 
         </g> 
        <g>
        <path class="st1" d="M1228.5,294H472.8c-19.1,0-34.7,15.5-34.7,34.7V681c0,19.1,15.5,34.7,34.7,34.7h755.7
        c19.1,0,34.7-15.5,34.7-34.7V328.7C1263.2,309.6,1247.7,294,1228.5,294z M1244.6,661.3c0,19.1-15.5,34.7-34.7,34.7H491.5
        c-19.1,0-34.7-15.5-34.7-34.7V348.4c0-19.1,15.5-34.7,34.7-34.7h718.4c19.1,0,34.7,15.5,34.7,34.7V661.3z"/>
        <path class="st1" d="M1273.4,439.2h-10.2v131.3h10.2c11,0,19.9-8.9,19.9-19.9v-91.5C1293.3,448.1,1284.4,439.2,1273.4,439.2z"/>
        </g>
        </svg>
        <?xml version="1.0" encoding="utf-8"?>
        <!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 1920 1080" style="enable-background:new 0 0 1920 1080;" xml:space="preserve">
        <style type="text/css">
          .st0b{fill:#E25000;stroke:#000000;stroke-linecap:round;stroke-miterlimit:10;}
          .st1b{fill:#E25000;}
          .st2b{fill:#ECFFFD;}
          .st3d{fill:#000A0B;stroke:#000000;stroke-linecap:round;stroke-miterlimit:10;}
          .st4d{font-family:'Roboto';}
          .st5d{font-size:73px;}
          .st6b{fill:none;stroke:#000000;stroke-width:8;stroke-miterlimit:10;}
        </style>
        <path class="st0b" d="M881,880.4L881,880.4c-68,0-123.2-55.2-123.2-123.2v0c0-68,55.2-123.2,123.2-123.2h0
          c68,0,123.2,55.2,123.2,123.2v0C1004.2,825.2,949,880.4,881,880.4z"/>
        <rect x="823.5" y="66" class="st1b" width="115" height="713"/>

        <g id="Battery_Temperature_var"></g>

        
        
        <path class="st3d" d="M953,633.1V103c0-19.9-8.1-37.9-21.1-50.9S900.9,31,881,31c-39.8,0-72,32.2-72,72v530.1h0
          c-39.5,24.2-65.8,67.8-65.8,117.5c0,76.1,61.7,137.8,137.8,137.8s137.8-61.7,137.8-137.8C1018.8,700.9,992.5,657.3,953,633.1z
           M881,868.4c-64.3,0-116.5-52.1-116.5-116.5c0-46.2,26.9-86.2,66-105V103.4c0-27.9,22.6-50.5,50.5-50.5c13.9,0,26.6,5.7,35.7,14.8
          c9.1,9.1,14.8,21.8,14.8,35.7v543.5c39.1,18.8,66,58.8,66,105C997.5,816.2,945.4,868.4,881,868.4z"/>
        <text id="Danger_x21__x21_" transform="matrix(1 0 0 1 1018.8 227)" class="st4d st5d">Danger to the Battery</text>
        <line class="st6b" x1="957.7" y1="216.5" x2="1014.7" y2="216.5"/>
        </svg>


        <h3>Voltage     : <span id="Battery_Voltage"></span> Volts</h3>
        <h3>Temperature : <span id="Battery_Temperature"></span> ⁰C</h3>
        <h3>Status : <span id="Battery_Status"></span> </h3>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../images/hold.jpg" alt="Solar" style="width:100%">
      <div class="container bow">
        <h2>Solar</h2>



          <?xml version="1.0" encoding="utf-8"?>
          <!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <svg version="1.1" class = "sunny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1920 1080" style="enable-background:new 0 0 1920 1080;" xml:space="preserve">
             <section id="Sun_opacity">
               
             </section>
          
          <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st0c" d="M952.5,145.5c-4.5,0,14.2,25.7,11.1,67.7c-2.2,29.7-29.7,59.5-30.6,102.2c-0.5,23.3,12.3,54.8,12.3,80.4h34.2
            c0-25.9-13.4-57.7-13.8-81.2c-0.9-43.1,23.3-73.3,21.1-103.1C983.8,170.5,956.9,145.5,952.5,145.5z"/>
          <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(0.9511 -0.309 0.309 0.9511 -119.8834 323.0858)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st1c" d="M830.9,167.1c-4.3,1.4,21.4,20.1,31.5,60.9c7.1,28.9-9.9,65.8,2.5,106.7c6.7,22.3,28.7,48.3,36.6,72.7
            l32.5-10.6c-8-24.6-30.5-50.8-38.3-73c-14.2-40.8-0.5-77-11.8-104.6C868.5,181.2,835.2,165.7,830.9,167.1z"/>
          <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(0.809 -0.5878 0.5878 0.809 -134.0603 667.4047)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st2c" d="M722,225.2c-3.7,2.7,26.6,12.4,48.8,48.2c15.7,25.3,11,65.6,35.3,100.7c13.3,19.1,42.2,37.1,57.3,57.8
            l27.7-20.1c-15.2-21-44.7-38.9-59-57.6c-26.1-34.4-24.2-73.1-43.5-95.8C762.1,227.1,725.6,222.6,722,225.2z"/>
          <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(0.5878 -0.809 0.809 0.5878 -41.143 999.2523)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st3c" d="M636.4,314.2c-2.7,3.7,29.1,3.6,61.3,30.8c22.8,19.2,30.7,59,64.7,84.8c18.5,14.1,51.6,22.2,72.3,37.3
            l20.1-27.7c-21-15.2-54.6-23.1-73.9-36.6c-35.4-24.6-45.6-62-71-77.7C675,303.5,639,310.6,636.4,314.2z"/>
          <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(0.309 -0.9511 0.9511 0.309 149.7732 1286.145)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st4c" d="M582.5,425.2c-1.4,4.3,28.8-5.6,67.8,10.3c27.6,11.2,47.4,46.7,87.7,60.7c22,7.7,56,5.2,80.3,13.1l10.6-32.5
            c-24.6-8-59-5.1-81.5-11.9c-41.3-12.5-62.6-44.9-91.5-51.9C615.9,403.2,583.8,421,582.5,425.2z"/>
          <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(4.489670e-11 -1 1 4.489670e-11 420 1500)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st5c" d="M565.5,547.5c0,4.5,25.7-14.2,67.7-11.1c29.7,2.2,59.5,29.7,102.2,30.6c23.3,0.5,54.8-12.3,80.4-12.3v-34.2
            c-25.9,0-57.7,13.4-81.2,13.8c-43.1,0.9-73.3-23.3-103.1-21.1C590.5,516.2,565.5,543.1,565.5,547.5z"/>
          <linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(-0.309 -0.9511 0.9511 -0.309 743.0858 1619.8834)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st6c" d="M587.1,669.1c1.4,4.3,20.1-21.4,60.9-31.5c28.9-7.1,65.8,9.9,106.7-2.5c22.3-6.7,48.3-28.7,72.7-36.6
            l-10.6-32.5c-24.6,8-50.8,30.5-73,38.3c-40.8,14.2-77,0.5-104.6,11.8C601.2,631.5,585.7,664.8,587.1,669.1z"/>
          <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(-0.5878 -0.809 0.809 -0.5878 1087.4047 1634.0603)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st7c" d="M645.2,778c2.7,3.7,12.4-26.6,48.2-48.8c25.3-15.7,65.6-11,100.7-35.3c19.1-13.3,37.1-42.2,57.8-57.3
            l-20.1-27.7c-21,15.2-38.9,44.7-57.6,59c-34.4,26.1-73.1,24.2-95.8,43.5C647.1,737.9,642.6,774.4,645.2,778z"/>
          <linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(-0.809 -0.5878 0.5878 -0.809 1419.2523 1541.1431)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st8c" d="M734.2,863.6c3.7,2.7,3.6-29.1,30.8-61.3c19.2-22.8,59-30.7,84.8-64.7c14.1-18.5,22.2-51.6,37.3-72.3
            l-27.7-20.1c-15.2,21-23.1,54.6-36.6,73.9c-24.6,35.4-62,45.6-77.7,71C723.5,825,730.6,861,734.2,863.6z"/>
          <linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(-0.9511 -0.309 0.309 -0.9511 1706.145 1350.2268)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st9c" d="M845.2,917.5c4.3,1.4-5.6-28.8,10.3-67.8c11.2-27.6,46.7-47.4,60.7-87.7c7.7-22,5.2-56,13.1-80.3l-32.5-10.6
            c-8,24.6-5.1,59-11.9,81.5c-12.5,41.3-44.9,62.6-51.9,91.5C823.2,884.1,841,916.2,845.2,917.5z"/>
          <linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(-1 0 0 -1 1920 1080)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st10c" d="M967.5,934.5c4.5,0-14.2-25.7-11.1-67.7c2.2-29.7,29.7-59.5,30.6-102.2c0.5-23.3-12.3-54.8-12.3-80.4h-34.2
            c0,25.9,13.4,57.7,13.8,81.2c0.9,43.1-23.3,73.3-21.1,103.1C936.2,909.5,963.1,934.5,967.5,934.5z"/>
          <linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(-0.9511 0.309 -0.309 -0.9511 2039.8834 756.9142)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st11c" d="M1089.1,912.9c4.3-1.4-21.4-20.1-31.5-60.9c-7.1-28.9,9.9-65.8-2.5-106.7c-6.7-22.3-28.7-48.3-36.6-72.7
            l-32.5,10.6c8,24.6,30.5,50.8,38.3,73c14.2,40.8,0.5,77,11.8,104.6C1051.5,898.8,1084.8,914.3,1089.1,912.9z"/>
          <linearGradient id="SVGID_13_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(-0.809 0.5878 -0.5878 -0.809 2054.0603 412.5953)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st12c" d="M1198,854.8c3.7-2.7-26.6-12.4-48.8-48.2c-15.7-25.3-11-65.6-35.3-100.7c-13.3-19.1-42.2-37.1-57.3-57.8
            l-27.7,20.1c15.2,21,44.7,38.9,59,57.6c26.1,34.4,24.2,73.1,43.5,95.8C1157.9,852.9,1194.4,857.4,1198,854.8z"/>
          <linearGradient id="SVGID_14_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(-0.5878 0.809 -0.809 -0.5878 1961.1431 80.7477)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st13c" d="M1283.6,765.8c2.7-3.7-29.1-3.6-61.3-30.8c-22.8-19.2-30.7-59-64.7-84.8c-18.5-14.1-51.6-22.2-72.3-37.3
            l-20.1,27.7c21,15.2,54.6,23.1,73.9,36.6c35.4,24.6,45.6,62,71,77.7C1245,776.5,1281,769.4,1283.6,765.8z"/>
          <linearGradient id="SVGID_15_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(-0.309 0.9511 -0.9511 -0.309 1770.2268 -206.1451)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st14c" d="M1337.5,654.8c1.4-4.3-28.8,5.6-67.8-10.3c-27.6-11.2-47.4-46.7-87.7-60.7c-22-7.7-56-5.2-80.3-13.1
            l-10.6,32.5c24.6,8,59,5.1,81.5,11.9c41.3,12.5,62.6,44.9,91.5,51.9C1304.1,676.8,1336.2,659,1337.5,654.8z"/>
          <linearGradient id="SVGID_16_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(-4.489670e-11 1 -1 -4.489670e-11 1500 -420)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st15c" d="M1354.5,532.5c0-4.5-25.7,14.2-67.7,11.1c-29.7-2.2-59.5-29.7-102.2-30.6c-23.3-0.5-54.8,12.3-80.4,12.3v34.2
            c25.9,0,57.7-13.4,81.2-13.8c43.1-0.9,73.3,23.3,103.1,21.1C1329.5,563.8,1354.5,536.9,1354.5,532.5z"/>
          <linearGradient id="SVGID_17_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(0.309 0.9511 -0.9511 0.309 1176.9142 -539.8834)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st16c" d="M1332.9,410.9c-1.4-4.3-20.1,21.4-60.9,31.5c-28.9,7.1-65.8-9.9-106.7,2.5c-22.3,6.7-48.3,28.7-72.7,36.6
            l10.6,32.5c24.6-8,50.8-30.5,73-38.3c40.8-14.2,77-0.5,104.6-11.8C1318.8,448.5,1334.3,415.2,1332.9,410.9z"/>
          <linearGradient id="SVGID_18_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(0.5878 0.809 -0.809 0.5878 832.5953 -554.0604)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st17c" d="M1274.8,302c-2.7-3.7-12.4,26.6-48.2,48.8c-25.3,15.7-65.6,11-100.7,35.3c-19.1,13.3-37.1,42.2-57.8,57.3
            l20.1,27.7c21-15.2,38.9-44.7,57.6-59c34.4-26.1,73.1-24.2,95.8-43.5C1272.9,342.1,1277.4,305.6,1274.8,302z"/>
          <linearGradient id="SVGID_19_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(0.809 0.5878 -0.5878 0.809 500.7477 -461.143)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st18c" d="M1185.8,216.4c-3.7-2.7-3.6,29.1-30.8,61.3c-19.2,22.8-59,30.7-84.8,64.7c-14.1,18.5-22.2,51.6-37.3,72.3
            l27.7,20.1c15.2-21,23.1-54.6,36.6-73.9c24.6-35.4,62-45.6,77.7-71C1196.5,255,1189.4,219,1185.8,216.4z"/>
          <linearGradient id="SVGID_20_" gradientUnits="userSpaceOnUse" x1="963.5291" y1="394.8175" x2="956.7426" y2="147.2755" gradientTransform="matrix(0.9511 0.309 -0.309 0.9511 213.8549 -270.2268)">
            <stop  offset="0" style="stop-color:#FFFFFF"/>
            <stop  offset="9.743590e-02" style="stop-color:#FFFFFF"/>
            <stop  offset="0.559" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFA226"/>
          </linearGradient>
          <path class="st19c" d="M1074.8,162.5c-4.3-1.4,5.6,28.8-10.3,67.8c-11.2,27.6-46.7,47.4-60.7,87.7c-7.7,22-5.2,56-13.1,80.3
            l32.5,10.6c8-24.6,5.1-59,11.9-81.5c12.5-41.3,44.9-62.6,51.9-91.5C1096.8,195.9,1079,163.8,1074.8,162.5z"/>
          <radialGradient id="SVGID_21_" cx="960" cy="540" r="168.038" gradientUnits="userSpaceOnUse">
            <stop  offset="2.820513e-02" style="stop-color:#FFA226"/>
            <stop  offset="0.7795" style="stop-color:#FFA226"/>
            <stop  offset="1" style="stop-color:#FFFFFF"/>
          </radialGradient>
          <circle class="st20c" cx="960" cy="540" r="168"/>
          </svg>





        <?xml version="1.0" encoding="utf-8"?>
        <!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 1920 1080" style="enable-background:new 0 0 1920 1080;" xml:space="preserve">
        <style type="text/css">
          .st0b{fill:#E25000;stroke:#000000;stroke-linecap:round;stroke-miterlimit:10;}
          .st1b{fill:#E25000;}
          .st2b{fill:#ECFFFD;}
          .st3d{fill:#000A0B;stroke:#000000;stroke-linecap:round;stroke-miterlimit:10;}
        </style>
        <path class="st0b" d="M881,880.4L881,880.4c-68,0-123.2-55.2-123.2-123.2v0c0-68,55.2-123.2,123.2-123.2h0
          c68,0,123.2,55.2,123.2,123.2v0C1004.2,825.2,949,880.4,881,880.4z"/>
        <rect x="823.5" y="66" class="st1b" width="115" height="713"/>

        <g id="Solar_Temp_var"></g>

        <path class="st3d" d="M953,633.1V103c0-19.9-8.1-37.9-21.1-50.9S900.9,31,881,31c-39.8,0-72,32.2-72,72v530.1h0
          c-39.5,24.2-65.8,67.8-65.8,117.5c0,76.1,61.7,137.8,137.8,137.8s137.8-61.7,137.8-137.8C1018.8,700.9,992.5,657.3,953,633.1z
           M881,868.4c-64.3,0-116.5-52.1-116.5-116.5c0-46.2,26.9-86.2,66-105V103.4c0-27.9,22.6-50.5,50.5-50.5c13.9,0,26.6,5.7,35.7,14.8
          c9.1,9.1,14.8,21.8,14.8,35.7v543.5c39.1,18.8,66,58.8,66,105C997.5,816.2,945.4,868.4,881,868.4z"/>
        </svg>

        <h3>Voltage     : <span id="Solar_Voltage"></span> Volts</h3>
        <h3>Temperature : <span id="Solar_Temperature"></span> ⁰C</h3>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../images/hold.jpg" alt="Wind turbine" style="width:100%">
      <div class="container bow">
        <h2>Wind turbine</h2>
        <div style="width:100%">
          <img  id="propeller" src="../images/turbine.png" alt="Turbine" style="width:100%">
        </div>
           
        <h3>Voltage  : <span id="Windmill_Voltage"></span> Volts</h3>
        <h3>Speed    : <span id="WindV"></span>  rpm</h3>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../images/hold.jpg" alt="Pump" style="width:100%">
      <div class="container bow">
        <h2>Pump</h2>

        <div style="width:100%">
          <img id="pump" src="../images/pump.png" alt="Pump" style="width:100%" >
        </div>

        <h3>Status  :  <span id="Pump_Status"></span> </h3>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="../images/hold.jpg" alt="Pump" style="width:100%">
      <div class="container bow">
        <h2>Grid</h2>

        <div style="width:100%">
          <img id="Grid" src="../images/grid.png" alt="Grid" style="width:100%" >
        </div>

        <h3>Status  : <span id="Grid_Status"></span> </h3>
      </div>
    </div>
  </div>

</div>


</div>

<footer class="w3-container w3-theme" style="padding:32px">
  <p>© Copyright 2020 <a href="C:\Users\Tamuka Vumbunu\Desktop\text\Vas labs.html">VAS LABS</a> . All rights reserved by Tamuka Vumbunu</p>
</footer>
     
</div>

<script>
$(document).ready(function() {
    setInterval(function(){get_data()},1000);
    function get_data()
        {
          $.get("Bt.php",function(data, status){
              $("#Battery_Temperature").html(data);
            })
          $.get("Bv.php",function(data, status){
              $("#Battery_Voltage").html(data);
            })
          $.get("st.php",function(data, status){
              $("#Solar_Temperature").html(data);
            })
          $.get("sv.php",function(data, status){
              $("#Solar_Voltage").html(data);
            })
          $.get("wv.php",function(data, status){
              $("#Windmill_Voltage").html(data);
            })
          $.get("ws.php",function(data, status){
              $("#WindV").html(data);
            })
          $.get("Gs.php",function(data, status){
              $("#Grid_Status").html(data);
            })
          $.get("Bs.php",function(data, status){
              $("#Battery_Status").html(data);
            })
          $.get("ps.php",function(data, status){
              $("#Pump_Status").html(data);
            })
          $.get("Bm.php",function(data, status){
              $("#Battery_Meter_var").html(data);
            })
          $.get("CD.php",function(data, status){
              $("#Current_Time").html(data);
            })
          $.get("BTv.php",function(data, status){
              $("#Battery_Temperature_var").html(data);
            })
          $.get("Stv.php",function(data, status){
              $("#Solar_Temp_var").html(data);
            })
          $.get("SO.php",function(data, status){
              $("#Sun_opacity").html(data);
            })
            };
    speed();
});
var i = 100;
function speed()
{
  var spee = document.getElementById("WindV").innerHTML;
  var time = Math.round(10*250/spee);
  var pic = document.getElementById("propeller");
  var angle = i + "deg";
  if(spee != 0)
  {
    pic.style.transform = "rotate("+angle+")";
    i+=10;
  }
  setTimeout(speed,time);
}

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

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_examples_material by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 02:08:30 GMT -->
</html> 
