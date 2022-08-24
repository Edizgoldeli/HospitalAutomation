<!DOCTYPE html>

<html>
    <head>
    <link rel= stylesheet  href="/SoftwareEng/style/style.css" />
    <link rel= stylesheet  href="/SoftwareEng/style/vitrinStyle.css" />
    </head>
    </html>
    <?php
include "DBconnection.php";

$FN= $_POST['name0'];
$SN= $_POST['surname0'];
$PW= $_POST['password0'];
$EM= $_POST['mail0'];
$TP= $_POST['phone0'];
$AG= $_POST['Age0'];
$GN= $_POST['Gender0'];
$AD= $_POST['Address0'];
$hash_PW = password_hash($PW, PASSWORD_DEFAULT);


$sql = "INSERT INTO `Patient`(`patient_ID`, `name`, `surname`, `password`, `mail`, `phone`,`Age`,`Gender`,`Address`) VALUES (0, '$FN', '$SN', '$hash_PW', '$EM', '$TP','$AG','$GN','$AD'); ";

if($conn->query($sql)==TRUE){
    ?>
            <div class="loader"></div>
            <h2>Hospital+</h2>
           <center> <?php
echo'Thank you for registering.';?></center><?php
header( "refresh:3; url=/SoftwareEng/html/vitrin.php" ); }
else{
echo"Error: " . $sql . "<br>" . $conn->error;
header( "refresh:0; url=/SoftwareEng/html/registerx.php" ); 
}

$conn->close(); 

?>
