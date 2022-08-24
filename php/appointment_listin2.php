<!DOCTYPE html>
<select name="doctor_ID" class="input-box1">
<?php 
include "DBconnection.php"; 

session_start(); 

if($_SESSION['patient_ID']){}else {header("location:/SoftwareEng/html/index.php");}
         
$Clnc_ID=$_SESSION['Clinic_ID'];
$sql = "SELECT `full_name`,`doctor_ID`,`clinic_ID` FROM `Doctors` WHERE clinic_ID = $Clnc_ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) 
        {
            $GLOBALS["full_name"] = $row["full_name"];
            $GLOBALS["doctor_ID"] = $row["doctor_ID"];
            $GLOBALS["clinic_ID"] = $row["clinic_ID"];
            $doctor_ID=$GLOBALS["doctor_ID"];
            $clinic_ID=$GLOBALS["clinic_ID"];
            $Doctor=$GLOBALS["full_name"];  
           
           
?> 
                    <option class="input-box1" value="<?php echo"$doctor_ID";?>"><?php echo"$Doctor";?></option> 
                                     
<?php
                
        }
} 
?>
