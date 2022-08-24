<!DOCTYPE html>

<html>
    <head>
    <link rel= stylesheet  href="/SoftwareEng/style/style.css" />
    <link rel= stylesheet  href="/SoftwareEng/style/vitrinStyle.css" />
    </head>
    </html>
    <?php
session_start(); 
?>
            <div class="loader"></div>
            <h2>successfully logging out</h2>
            <?php
unset($_SESSION['patient_ID']);
header("location:/SoftwareEng/html/index.php");
?>