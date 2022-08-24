
<?php 
include "DBconnection.php"; 

session_start();

if($_SESSION['patient_ID']){}else {header("location:/SoftwareEng/html/index.php");}
$Clnc_ID=$_SESSION['Clinic_ID'];
$Dctr_ID=$_SESSION['doctor_ID1'];
$patient=$_SESSION['patient_ID'];
$date=$_SESSION['date'];
$time=$_POST['time'];

$sql = "INSERT INTO `Appointment` (`date`,`doctor_ID`,`clinic_ID`,`patient_ID`,`time`) VALUES('$date', '$Dctr_ID', '$Clnc_ID', '$patient','$time'); ";

if($conn->query($sql)==TRUE){
    header("location:/SoftwareEng/html/myAppointments.php");
    echo'Your Appointment Created Successfully.';}
    else{
    echo"Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close(); 
    
?>
