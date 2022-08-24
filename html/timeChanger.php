
<?php 
include "vitrinTop.php";
$day=$_POST['date'];
$_SESSION['date']=$day;
$appointmentID = $_POST['appointmentID'];
?>
<!-- -------------------- -->

<h5> Select Time </h5>

<form onsubmit="return validate(this);" action="/SoftwareEng/php/appointmentDateUpdt.php" method="post">
 
<?php include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/appointmentTimeCheck.php"); ?>
<input type="hidden" name="appointmentID" value="<?php echo "$appointmentID"; ?>">
<input type="hidden" name="status" value="2">
  <br><br>
 
</form>

<!-- -------------------- -->
<script>
function validate(form) {

        return confirm('Are you sure?');
   
}
</script>