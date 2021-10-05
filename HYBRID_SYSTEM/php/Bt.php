<?php

$full_battery = 13;
$connect = mysqli_connect("localhost", "root", "", "hybrid");
$query = "SELECT MAX(ID) FROM controller";
$result = mysqli_query($connect, $query);
while($temp = mysqli_fetch_array($result))
{
  $maxID = $temp["MAX(ID)"];
}


$query = "select Battery_Voltage, Battery_Temperature, Solar_Voltage, Solar_Temperature, Windmill_Voltage, Windmill_Speed , Battery_status, Pump_Status, Ac_Status from controller where ID = '".$maxID."'";
$result = mysqli_query($connect, $query);
while($temp = mysqli_fetch_array($result))
{
  $CurrentbatV = $temp["Battery_Voltage"];
  $CurrentbatT = $temp["Battery_Temperature"];
  $CurrentsolV = $temp["Solar_Voltage"];
  $CurrentsolT = $temp["Solar_Temperature"];
  $CurrentwindV = $temp["Windmill_Voltage"];
  $CurrentwindS = $temp["Windmill_Speed"];
  $CurrentPumpS = $temp["Pump_Status"];
  $CurrentBatS = $temp["Battery_status"];
  $CurrentAcS = $temp["Ac_Status"];
}

$CurrentDay =  date("l")." ".date("d")." ".date("M")." ".date("Y")." ".date("H:i:s");

$t1 = 580*($CurrentsolT/55); //Solar temp
         if($t1<= 580)
         {
           $height = 580 - $t1;
         }
         else
         {
           $height = 0;          
         }

         $Solar_Temp_var  = $height;//'<rect x="823.5" y="66" class="st2b" width="115" height="'.$height. '"/>';

 $t2 = ( $CurrentsolV /30);
               if($t2<= 1)
               {
                 $opacity =  $t2;
               }
               else
               {
                 $opacity = 1;          
               }

              $Sun_opacity = $opacity;// "opacity:".$opacity.";";

$t3 = 580*($CurrentbatT /55);
         if($t3<= 580)
         {
           $height = 580 - $t3;
         }
         else
         {
           $height = 0;          
         }

         $Battery_Temperature_var = $height;//  '<rect x="823.5" y="66" class="st2b" width="115" height="'.$height. '"/>';             

$t4 = 799.5*($CurrentbatV/$full_battery);
         if($t4<= 799.5)
         {
           $width = $t4;
         }
         else
         {
           $width = 79.5;          
         }

         $Battery_Meter_var = $width;//'<rect x="450.1" y="307.6" class="st0" width="'.$width.'" height="390"/>';

echo $CurrentbatT;




?>