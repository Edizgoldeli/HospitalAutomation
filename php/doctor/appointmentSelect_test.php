<!DOCTYPE html>
<link rel= stylesheet  href="/SoftwareEng/style/vitrinStyle.css" />
<select name="appointment_ID" class="input-box1">
<?php 
session_start();
if($_SESSION['doctor_ID']){}else {header("location:/SoftwareEng/html/doctor/loginDoctor.php");}

$dcID=$_SESSION['doctor_ID'];

$sql = "SELECT `appointment_ID` FROM `Appointment` WHERE doctor_ID = $dcID";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) 
        {
            $GLOBALS["appointment_ID"] = $row["appointment_ID"];
            
            $appointment_ID=$GLOBALS["appointment_ID"];   
           ?> 
           <option class="input-box1" value="<?php echo "$appointment_ID"; ?>"><?php echo "$appointment_ID"; ?></option>
           <?php

            
        }
} 
?>
