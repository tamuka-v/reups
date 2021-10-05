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


 $t2 = ( $CurrentsolV /30);
               if($t2<= 1)
               {
                 $opacity =  $t2;
               }
               else
               {
                 $opacity = 1;          
               }



echo '
<style type="text/css">  
.sunny
            {

              opacity:'.$opacity.';
               
            }
            .st0c{fill:url(#SVGID_1_);}
            .st1c{fill:url(#SVGID_2_);}
            .st2c{fill:url(#SVGID_3_);}
            .st3c{fill:url(#SVGID_4_);}
            .st4c{fill:url(#SVGID_5_);}
            .st5c{fill:url(#SVGID_6_);}
            .st6c{fill:url(#SVGID_7_);}
            .st7c{fill:url(#SVGID_8_);}
            .st8c{fill:url(#SVGID_9_);}
            .st9c{fill:url(#SVGID_10_);}
            .st10c{fill:url(#SVGID_11_);}
            .st11c{fill:url(#SVGID_12_);}
            .st12c{fill:url(#SVGID_13_);}
            .st13c{fill:url(#SVGID_14_);}
            .st14c{fill:url(#SVGID_15_);}
            .st15c{fill:url(#SVGID_16_);}
            .st16c{fill:url(#SVGID_17_);}
            .st17c{fill:url(#SVGID_18_);}
            .st18c{fill:url(#SVGID_19_);}
            .st19c{fill:url(#SVGID_20_);}
            .st20c{fill:url(#SVGID_21_);}
          </style>'
;



?>