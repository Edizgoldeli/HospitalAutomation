<?php
include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/DBconnection.php");
session_start(); 
$EM=$_POST['mail2'];
$PW= $_POST['password2'];
$sql = "SELECT doctor_ID ,clinic_ID ,full_name ,mail ,telephone, password FROM Doctors WHERE mail='$EM'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc())
	{
		$hashed_password = $row['password'];

		if(password_verify($PW, $hashed_password)) 
        {
		echo " Welcome ";
		$_SESSION['doctor_ID'] = $row['doctor_ID'];
		header( "refresh:0; url=/SoftwareEng/html/doctor/menuDoctor.php" ); 
		die;
		}
		else
			{
			echo" Mail or password incorrect. ";
			header( "refresh:3; url=/SoftwareEng/html/doctor/loginDoctor.php" ); 
			}
	}
}
else
	{
	echo" User not found ";
	header( "refresh:3; url=/SoftwareEng/html/doctor/loginDoctor.php" ); 
	}
$conn->close(); 

?>