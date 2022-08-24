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
$EM=$_POST['mail1'];
$PW= $_POST['password1'];


$sql = "SELECT patient_ID, mail,name ,surname ,phone, password FROM Patient WHERE mail='$EM'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $hashed_password = $row['password'];

       if(password_verify($PW, $hashed_password)) 
        {
            
            ?>
            <div class="loader"></div>
            <h2>Hospital+</h2>
            <?php
            $_SESSION['patient_ID'] = $row['patient_ID'];
            $_SESSION['mail'] = $row['mail'];
            $GLOBALS["Name"]= $row['name']." ".$row['surname'];
            header( "refresh:0; url=/SoftwareEng/html/menu.php" ); 
            die;
        }else{
            echo" Mail or password incorrect. ";
            header( "refresh:3; url=/SoftwareEng/html/index.php" ); 
    }
} 
}else{echo" User not found ";
    header( "refresh:3; url=/SoftwareEng/html/index.php" ); 
}
 
$conn->close(); 

?>