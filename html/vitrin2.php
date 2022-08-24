<?php include "vitrinTop.php";
$_SESSION['Clinic_ID']=$_POST['Clinic_ID'];
$Clnc_ID=$_SESSION['Clinic_ID'];
?>
<!-- -------------------- -->
<center>
<h5> Choose your Doctor </h5>
<form action="/SoftwareEng/html/vitrin3.php" method="post">
  
 
  <?php include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/appointment_listin2.php"); ?> 
  </select>
  <center>
  <br><br>
  <input class="submit" type="submit" value="Next">
</form>
<!-- -------------------- -->
<?php include "vitrinBottom.php";?>
