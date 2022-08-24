<?php include "DBconnection.php"; 
session_start();
if($_SESSION['patient_ID']){
header("location:/SoftwareEng/html/vitrin.php");			
			}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="/SoftwareEng/images/arrow.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <link rel= stylesheet  href="/SoftwareEng/style/style-register.css" />
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
        <title> Smart 🏠</title>
 
        <a href="/SoftwareEng/html/index.php"><img id="arrow" src="/SoftwareEng/images/arrow.png"></a>
    </head>

    <body>
       
        <h2>Create an account within seconds</h2>
        <div id="alert-box">This user is already exist!</div>
        <div id=bg-box1><center>
<form action="/SoftwareEng/php/register.php" method="post">
        <input type="text" id="input-box1" name="name0" minlength="2" placeholder="Name" required>
        <input type="text" id="input-box1" name="surname0" minlength="3" placeholder="Surname" required>
        <input type="number" id="input-box1" name="Age0" min="0" max="120" placeholder="Age" required>
        <select name="Gender0" id="dropbox">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <input type="email" id="input-box2" name="mail0" minlength="6" placeholder="Mail" required>
        <input type="tel" id="input-box2" name="Address0" minlength="10" placeholder="Address" required>
        <input type="tel" id="input-box2" name="phone0" minlength="10" maxlength="10" placeholder="PhoneNumber" pattern="\d*" required>
        <input type="password" id="input-box2" name="password0" minlength="6" placeholder="Password" required>
        
        <input type="submit" id="submit-button1" name="submit" value="Register"><br>
    </center>
</form>
        </div>
        
    </body>

</html>