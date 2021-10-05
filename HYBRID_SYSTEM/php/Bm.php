<?php

$full_battery = 26.8;
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
            
$t4 = 799.5*($CurrentbatV/$full_battery);
         if($t4<= 799.5)
         {
           $width = $t4;
         }
         else
         {
           $width = 799.5;          
         }

echo '<rect x="450.1" y="307.6" class="st0" width="'.$width.'" height="390"/>';



?>