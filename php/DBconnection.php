<?php
$servername = "localhost";
$username = "root";
$password="root";
$dbname = "softwareEng";
$conn = new mysqli($servername, $username, $password, $dbname);$conn->set_charset("utf8");
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
function userAccess($ID1, $F_Name1, $L_Name1, $Password1, $Email1, $Phone1, $Age1, $Gender1, $Address1)
  {
    $GLOBALS['patient_ID']=$ID1;
    $GLOBALS['mail']=$Email1;
    $GLOBALS['name']=$F_Name1;
    $GLOBALS['password']=$Password1;
    $GLOBALS['phone']=$Phone1;
    $GLOBALS['surname']=$L_Name1;
    $GLOBALS['Age']=$Age1;
    $GLOBALS['Gender']=$Gender1;
    $GLOBALS['Address']=$Address1;
  }
  function doctorAccess($DID, $CID, $name, $mail, $password, $phone)
  {
    $GLOBALS["doctor_ID"] =$DID;
    $GLOBALS["clinic_ID"] =$CID;
    $GLOBALS["full_name"] =$name;
    $GLOBALS["mail"]      =$mail;
    $GLOBALS["password"]  =$password;
    $GLOBALS["telephone"] =$phone;
  }
?>
