<?php include "vitrinTopDoctor.php";
?>
<!-- -------------------- -->
<center>
<h5>  Select Appointment </h5>
<form action="/SoftwareEng/html/doctor/addTest.php" method="post">

 
  <?php include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/doctor/appointmentSelect_test.php"); ?> 
  </select>
</center>
  <br><br>
  <input class="submit" type="submit" value="Next">
</form>

<!-- -------------------- -->
<?php include "vitrinBottomDoctor.php";?>