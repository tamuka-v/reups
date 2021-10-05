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

$t1 = 580*($CurrentsolT/55); //Solar temp
         if($t1<= 580)
         {
           $height = 580 - $t1;
         }
         else
         {
           $height = 0;          
         }

         $Solar_Temp_var  = '<rect x="823.5" y="66" class="st2b" width="115" height="'.$height. '"/>';


echo $Solar_Temp_var;



?>