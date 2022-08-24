<!DOCTYPE HTML>
<?php 
include "vitrinTop.php"; 
$day=$_POST['date'];
$_SESSION['date']=$day;


?>
<!-- -------------------- -->

<h5> Select hour for <br><?php echo $day;?></h5>
<center><h6> You can't make an appointment closer than 1 and half an hour</h6></center>

<form onsubmit="return validate(this);" action="/SoftwareEng/php/appointment_listing3.php" method="post" >
 
  
  <?php include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/appointmentTimeCheck.php"); ?>
  <br><br>
  
</form>
<br><br><br>



<?php include "vitrinBottom.php";?>
<script>
function validate(form) {

        return confirm('Are you sure?');
   
}
</script>
