
<!DOCTYPE HTML>
<?php 
include "vitrinTop.php"; 
$_SESSION['doctor_ID1']=$_POST['doctor_ID'];
$Dctr_ID=$_SESSION['doctor_ID1'];

 $mindate = date("Y-m-d");
 $maxdate = date("Y-m-d", strtotime("+14 Days"));
 $maxdateDisplay = date("d-m-Y", strtotime("+14 Days"));

?>
<!-- -------------------- -->
<center>
<h5> Choose Date</h5>
<h6> You can select up to <?php echo $maxdateDisplay ?> </h6>
<form action="/SoftwareEng/html/timeSelect.php" method="post">
 
  <input class="input-box2" id="validate" type="date" name="date" min="<?php echo $mindate?>" max="<?php echo $maxdate?>" required>

  <br><br>
  <input class="submit" type="submit" value="Next">
</form>
</center>
<!-- -------------------- -->
<?php include "vitrinBottom.php";?>

