<?php

include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/DBconnection.php");
session_start();
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 

$status= $_POST['status'];
$appointment_ID = $_POST['appointment_ID'];
       
        $sql = "UPDATE  Appointment SET status='$status' WHERE appointment_ID = $appointment_ID ";

        if ($conn->query($sql) === TRUE) {  header("location:/SoftwareEng/html/doctor/menuDoctor.php");
            
        } else {echo "Error: " . $sql . "<br>" . $conn->error; }
          $conn->close(); 
          
          ?>
