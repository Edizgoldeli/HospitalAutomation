<!DOCTYPE html>

<?php 
date_default_timezone_set('Europe/Istanbul');
include "DBconnection.php"; 
$time=$_POST['time'];
$date=$_SESSION['date'];
$_SESSION['time']=$time;
$Dctr_ID=$_SESSION['doctor_ID1'];
session_start();

if($_SESSION['patient_ID']){}else {header("location:/SoftwareEng/html/index.php");}
         
$ptID=$_SESSION['patient_ID'];
$sql = "SELECT `time`,`date` FROM `Appointment` WHERE $Dctr_ID=doctor_ID ";
$result = $conn->query($sql);

$d=strtotime("+1 hours");
            $threshold = date("H:i", $d) . "<br>";

if ($result->num_rows > 0) 
{
     $timeArray=[];
     while($row = $result->fetch_assoc()) 
        {
           
            $GLOBALS["time"] = $row["time"];
            $time1=$GLOBALS["time"];
            $date1 = $row["date"];
            $time2 = substr("$time1",0, 5);
            
            $date2 = date('Y-m-d');
            if($date==$date1){
               /* ?><input class="hoursNegative" type="submit" value="<?php echo $time2; ?>" name="day"><?php*/
               
              
               $timeArray[] = $time2;
               
                $hourStatus="hoursNegative";
                
            }else
            {
                /*?><input class="hoursPositive" type="submit" value="<?php echo $time2;?>" name="day"><?php*/
                $hourStatus="hoursPositive";
            }   
        }
    
        for ($x = 8; $x <= 17; $x++) {
            
            $a = "00";
            if($x > 9){
                $hours = $x.":".$a;
            }else{
                $hours = "0".$x.":".$a;
            }
            
    if($date == $date2)
    {
        if($hours > $threshold)
        {
            if($hours == "08:00")
            {

            }
            else{
                    if(in_array($hours, $timeArray))
                    {
                    $hourStatus="hoursNegative";
                    }
                    else
                    {
                    $hourStatus="hoursPositive";
                    }
                        ?> 
                        <input class="<?php echo $hourStatus?>" type="submit" value="<?php echo $hours;?>" name="time" >
                        <?php
                }
        }
            $a = "30";
            if($x > 9)
            {
                $hours = $x.":".$a;
            }
            else
            {
                $hours = "0".$x.":".$a;
            }
            if($hours > $threshold)
            {
                if($hours == "12:30")
                {

                }
                else
                {
                    if(in_array($hours, $timeArray))
                    {
                    $hourStatus="hoursNegative";
                    }
                    else
                    {
                    $hourStatus="hoursPositive";
                    }
                    ?> 
                    <input class="<?php echo $hourStatus?>" type="submit" value="<?php echo $hours;?>" name="time">
                    <?php
                }
            }
    
    }else{
                if($hours == "08:00")
                {

                }
                else
                {
                    if(in_array($hours, $timeArray))
                    {
                     $hourStatus="hoursNegative";
                    }
                    else
                    {
                     $hourStatus="hoursPositive";
                    }
                        ?> 
                        <input class="<?php echo $hourStatus?>" type="submit" value="<?php echo $hours;?>" name="time" >
                        <?php
                }
                $a = "30";
                if($x > 9)
                {
                    $hours = $x.":".$a;
                }
                else
                {
                    $hours = "0".$x.":".$a;
                }
                if($hours == "12:30")
                {

                }
                else
                {
                    if(in_array($hours, $timeArray))
                    {
                    $hourStatus="hoursNegative";
                    }
                    else
                    {
                    $hourStatus="hoursPositive";
                    }
                        ?> 
                        <input class="<?php echo $hourStatus?>" type="submit" value="<?php echo $hours;?>" name="time">
                        <?php
                }
          }
    }
}
             
?>

