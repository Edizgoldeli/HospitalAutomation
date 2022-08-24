<?php

include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/DBconnection.php");
session_start();
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 

$date=$_SESSION['date'];
$time= $_POST['time'];
$status= $_POST['status'];
$appointmentID = $_POST['appointmentID'];
       
        $sql = "UPDATE  Appointment SET status='$status', date='$date', time='$time' WHERE appointment_ID = $appointmentID ";

        if ($conn->query($sql) === TRUE) { echo"hey";
            
        } else {echo "Error: " . $sql . "<br>" . $conn->error;}
          $conn->close(); 
          header("location:/SoftwareEng/html/myAppointments.php");
          ?>
