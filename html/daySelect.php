<!DOCTYPE HTML>
<?php include "vitrinTop.php";
$_SESSION['doctor_ID']=$_POST['doctor_ID'];
$Dctr_ID=$_SESSION['doctor_ID'];
?>
<h5> Choose Day </h5>


<form action="/SoftwareEng/html/hourSelect.php" method="post">
<input class="weekDays" type="submit" value="Monday" name="day"><br>
<div class="emptySpace"></div>
<input class="weekDays" type="submit" value="Tuesday" name="day"><br>
<div class="emptySpace"></div>
<input class="weekDays" type="submit" value="Wednesday" name="day"><br>
<div class="emptySpace"></div>
<input class="weekDays" type="submit" value="Thursday" name="day"><br>
<div class="emptySpace"></div>
<input class="weekDays" type="submit" value="Friday" name="day">
</form>
<div class="emptySpace"></div><br>
<div class="emptySpace"></div>

<?php include "vitrinBottom.php";?>