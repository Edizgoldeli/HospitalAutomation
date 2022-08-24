<!DOCTYPE HTML>
<?php $appointmentID = $_POST['appointmentID']; 
include "vitrinTop.php";
?>
<html>
    <head>


</head>
    <body>

<center>
<h5> Choose Date and Time </h5>

<form action="/SoftwareEng/html/timeChanger.php" method="post">


  <input type="hidden" name="appointmentID" value="<?php echo "$appointmentID"; ?>">
  <input class="input-box2" type="date" name="date" min="<?php echo date('Y-m-d'); ?>" id="input-box1" required>

  <br><br>
  <input class="submit" type="submit" value="Submit">
</form>
</center>
</body>
</html>