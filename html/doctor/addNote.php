<?php include "vitrinTopDoctor.php";
$_SESSION["test_name"]=$_POST["test_name"];
?>
<link rel= stylesheet  href="/SoftwareEng/style/vitrinStyle.css" />
<br><br><br>
<form action="/SoftwareEng/php/doctor/submitTest.php" method="post">
<input type="text" class="input-box2" name="test_note" placeholder="Add Your comments"><br>
<br><br>
<input class="submit" type="submit" value="Next">
</form>
<?php include "vitrinBottomDoctor.php";?>