<?php include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/doctor/DBconnection.php");
session_start();
if($_SESSION['doctor_ID']){
header("location:/SoftwareEng/html/doctor/menuDoctor.php");			
			}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.8" /> 
        <link rel= stylesheet  href="/SoftwareEng/style/style.css" />
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
        <title>Hospital+</title>
        
    </head>

    <body>
        <div id=logo-box>
                    <h2>Hospital+</h2>
                    <center> <h3>Doctor Panel</h3>  </center>
        </div>

        <div id=bg-box1>
            <center>
            <form action="/SoftwareEng/php/doctor/loginAccessDoctor.php" method="post">

            <input type="input" id="input-box1" name="mail2" placeholder="✉️" required><br>
            <input type="password" id="input-box2" name="password2" placeholder="🔑" required><br>
            <input type="submit" id="submit-button1" name="submit" value="Login">
            </form>
            </center>
        </div>
    </body>
</html>