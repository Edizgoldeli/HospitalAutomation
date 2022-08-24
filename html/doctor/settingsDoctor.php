<DOCTYPE! html>
<?php include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/doctor/DBconnection.php");
session_start();
if($_SESSION['doctor_ID']){}else {header("location:/SoftwareEng/html/doctor/loginDoctor.php");}

include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/doctor/doctorInfo.php");

?>

    <html>
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=0.7">
                <link rel= stylesheet  href="/SoftwareEng/style/style-settings.css"/>
                <link rel= stylesheet  href="/SoftwareEng/style/style-register.css"/>
                <link rel= stylesheet  href="/SoftwareEng/style/navigation.css"/>
                <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
                <title> Smart 🏠</title>
                <a href=""><img id="arrow" src="/GraduationProject/images/Empty.png"></a>
                <a href="/SoftwareEng/php/doctor/logoutDoctor.php" class="log-out">Log Out</a>
        </head>
        <body>
               
        
                                        <h1>Profile Settings</h1>
        <div id="#bg-box1">
        <center>
                <form action="/SoftwareEng/php/doctor/updateDoctor.php" method="post">
                        <input type="text" id="input-box2" name="name0" placeholder="full_name" minlength="2" value="<?php echo "$full_name"; ?>" required><br>
                        <input type="email" id="input-box2" name="mail0" minlength="6" placeholder="Mail" value="<?php echo "$mail"; ?>" required><br>
                        <input type="tel" id="input-box2" name="phone0" minlength="10" placeholder="Phone" value="<?php echo "$telephone"; ?>" required><br>
                        <input type="password" id="input-box2" name="password0" minlength="6" placeholder="New Password" required><br>
                <input type="submit" id="submit-button1" name="submit" value="Update">
                </form>
        </center>
</div>
                <div class="navbar">
          <a href="/SoftwareEng/html/doctor/menuDoctor.php"><h3>Home</h3></a>
          <a href="/SoftwareEng/html/doctor/settingsDoctor.php" class="active"><h4>Settings</h4></a>
     </div>
     <div class="bottom-gap"></div>
      <div class="middle-nav"><center> Doctor ID: <?php echo $_SESSION['doctor_ID'];?></center></div>
      <div class="top-nav"></div>
        </body>
        </html>