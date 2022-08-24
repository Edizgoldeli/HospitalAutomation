<?php 
include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/DBconnection.php");
session_start();
if($_SESSION['doctor_ID']){}else {header("location:/SoftwareEng/html/doctor/loginDoctor.php");}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.7">
<link rel= stylesheet  href="/GraduationProject/style/style-vitrin.css" />
<link rel= stylesheet  href="/SoftwareEng/style/navigation.css" />
<link rel= stylesheet  href="/SoftwareEng/style/vitrinStyle.css" />
<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
<title>Hospital+</title>       
</head>
<body>
<div class="feed">
<div class="top-gap"></div>