<?php
session_start(); 
unset($_SESSION['doctor_ID']);
header("location:/SoftwareEng/html/doctor/loginDoctor.php");
?>