<?php
include "DBconnection.php";
session_start();
if($_SESSION['patient_ID']){}else {header("location:/SoftwareEng/html/index.php");}

$appointmentID=$_POST['appointment_ID'];

$sql = "DELETE FROM `Appointment` WHERE `appointment_ID` = $appointmentID"; 

if($conn->query($sql)==TRUE){}
else{
echo"Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 

header( "refresh: 0; url=/SoftwareEng/html/myAppointments.php" ); 
?>
