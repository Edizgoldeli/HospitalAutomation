<?php include "vitrinTop.php";
?>
<!-- -------------------- -->
<center>
<h5>  Select Clinic </h5>
<form action="/SoftwareEng/html/vitrin2.php" method="post">

 
  <?php include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/appointment_listing.php"); ?> 
  </select>
</center>
  <br><br>
  <input class="submit" type="submit" value="Next">
</form>

<!-- -------------------- -->
<?php include "vitrinBottom.php";?>