<!DOCTYPE html>

<?php 
include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/DBconnection.php");

session_start();

if($_SESSION['doctor_ID']){}else {header("location:/SoftwareEng/html/doctor/loginDoctor.php");}
         
$dcID=$_SESSION['doctor_ID'];
$sql = "SELECT `clinic_ID`,`full_name`,`mail`,`password`,`telephone` FROM `Doctors` WHERE doctor_ID = $dcID";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) 
        {
            $GLOBALS["clinic_ID"] = $row["clinic_ID"];
            $GLOBALS["full_name"] = $row["full_name"];
            $GLOBALS["mail"]      =      $row["mail"];
            $GLOBALS["password"]  =  $row["password"];
            $GLOBALS["telephone"] = $row["telephone"];
            
            $clinic_ID=$GLOBALS["clinic_ID"];
            $full_name=$GLOBALS["full_name"];
            $mail     =     $GLOBALS["mail"];  
            $password = $GLOBALS["password"];
            $telephone   =$GLOBALS["telephone"];   
              
        }
} 
?>
