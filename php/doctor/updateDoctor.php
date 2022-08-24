<?php

include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/DBconnection.php");
session_start();
if($_SESSION['doctor_ID']){}else {header("location:/SoftwareEng/html/doctor/loginDoctor.php");}
$NM= $_POST['name0'];
$EM= $_POST['mail0'];
$TP= $_POST['phone0'];
$PW= $_POST['password0'];
$hash_PW = password_hash($PW, PASSWORD_DEFAULT);
$ID=$_SESSION['doctor_ID'];
$sql = "UPDATE  Doctors SET full_name='$NM', mail='$EM', password='$hash_PW',telephone='$TP' WHERE doctor_ID=$ID "; 
if($conn->query($sql)==TRUE){
echo'New values are successfully saved.';}
else{
echo"Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 

header( "refresh: 1; url=/SoftwareEng/html/doctor/settingsDoctor.php" ); 
?>
