<?php
include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/DBconnection.php");
session_start();
if($_SESSION['patient_ID']&& $_SESSION['mail']=="LAB"){}else {header("location:/SoftwareEng/html");}


$t_ID = $_POST['test_ID'];
$targetfolder = "/Applications/MAMP/htdocs/SoftwareEng/images/";

$newfilename = rand(1,999999) . '.' . end(explode(".",$_FILES["image_file"]["name"]));

$targetfolder = $targetfolder . $newfilename ."pdf" ;

$storedURL = "/SoftwareEng/images/". $newfilename ."pdf" ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

{

echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

$sql = "UPDATE  Test SET test_result='$storedURL' WHERE test_ID=$t_ID "; 
if($conn->query($sql)==TRUE){
echo'New values are successfully saved.';
header("location:/SoftwareEng/html/LAB/LAB.php");
}
else{
echo"Error: " . $sql . "<br>" . $conn->error;}

}
else {

echo "Problem uploading file";

}





?> 