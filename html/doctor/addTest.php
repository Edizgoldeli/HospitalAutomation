<?php include "vitrinTopDoctor.php";
$appointment_ID=$_POST["appointment_ID"];
$_SESSION["appointment_ID"]=$appointment_ID;
?>

<link rel= stylesheet  href="/SoftwareEng/style/vitrinStyle.css" />
<br><br><br>
<form action="/SoftwareEng/html/doctor/addNote.php" method="post">
<select name="test_name" class="input-box1">
<option class="input-box1" value="blood">Blood</option> 
<option class="input-box1" value="BioChemistry">BioChemistry</option>
<option class="input-box1" value="Hematology">Hematology</option>
<option class="input-box1" value="Immunology">Immunology</option> 
<option class="input-box1" value="Urine">Urine</option>
<option class="input-box1" value="Stool">Stool</option>
<option class="input-box1" value="Pregnancy">Pregnancy</option>
</select>
<br><br><br>
<input class="submit" type="submit" value="Next">
</form>
<?php include "vitrinBottomDoctor.php";?>