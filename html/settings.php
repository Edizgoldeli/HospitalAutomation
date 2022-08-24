<DOCTYPE! html>
<?php include "DBconnection.php"; 
session_start();
if($_SESSION['patient_ID']){}else {header("location:/SoftwareEng/html/index.php");}

include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/patientInfo.php");

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
                <a href="/SoftwareEng/php/logout.php" class="log-out">Log Out</a>
        </head>
        <body>
               
        
                                        <h1>Profile Settings</h1>
        <div id="#bg-box1">
        <center>
                <form action="/SoftwareEng/php/update.php" method="post">
                        <input type="text" id="input-box1" name="name0" placeholder="Name" minlength="2" value="<?php echo "$name"; ?>" required>
                        <input type="text" id="input-box1" name="surname0" placeholder="Surname" minlength="3" value="<?php echo "$surname"; ?>" required><br>
                        <input type="text" id="input-box1" name="age0" placeholder="Age" minlength="2" value="<?php echo "$Age"; ?>" required>
                        <select name="Gender0" id="dropbox">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
                        <input type="email" id="input-box2" name="mail0" minlength="6" placeholder="Mail" value="<?php echo "$mail"; ?>" required><br>
                        <input type="tel" id="input-box2" name="phone0" minlength="10" placeholder="Phone" value="<?php echo "$phone"; ?>" required><br>
                        <input type="text" id="input-box2" name="address0" minlength="5" placeholder="Address" value="<?php echo "$Address"; ?>" required><br>
                        <input type="password" id="input-box2" name="password0" minlength="6" placeholder="New Password" required><br>
                <input type="submit" id="submit-button1" name="submit" value="Update">
                </form>
        </center>
</div>
                <div class="navbar">
          <a href="/SoftwareEng/html/menu.php"><h3>Home</h3></a>
          <a href="/SoftwareEng/html/settings.php" class="active"><h4>Settings</h4></a>
     </div>
     <div class="bottom-gap"></div>
      <div class="middle-nav"><center> User ID: <?php echo $_SESSION['patient_ID'];?></center></div>
      <div class="top-nav"></div>
        </body>
        </html>