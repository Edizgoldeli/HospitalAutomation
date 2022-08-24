<!DOCTYPE html>

<html>
    <head>
    <link rel= stylesheet  href="/SoftwareEng/style/style.css" />
    <link rel= stylesheet  href="/SoftwareEng/style/vitrinStyle.css" />
    </head>
    </html>
<?php
include "DBconnection.php";
session_start();
if($_SESSION['patient_ID']){}else {header("location:/SoftwareEng/html/index.php");}
$FN= $_POST['name0'];
$SN= $_POST['surname0'];
$PW= $_POST['password0'];
$EM= $_POST['mail0'];
$TP= $_POST['phone0'];
$hash_PW = password_hash($PW, PASSWORD_DEFAULT);
$ID=$_SESSION['patient_ID'];

$sql = "UPDATE  Patient SET name='$FN', surname='$SN', password='$hash_PW', mail='$EM',phone='$TP' WHERE patient_ID=$ID "; 
if($conn->query($sql)==TRUE){
    ?>
            <div class="loader"></div>
            <h2>Hospital+</h2>
            <center><?php
echo"New values are successfully saved."; ?> </center> <?php }
else{
echo"Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 

header( "refresh: 1; url=/SoftwareEng/html" ); 
?>
