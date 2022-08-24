
<?php 
include ($_SERVER['DOCUMENT_ROOT']."/SoftwareEng/php/DBconnection.php");

session_start();

if($_SESSION['doctor_ID']){}else {header("location:/SoftwareEng/html/doctor/loginDoctor.php");}
$test_name=$_SESSION["test_name"];
$appointment_ID=$_SESSION["appointment_ID"];
$test_note=$_POST['test_note'];

$sql = "INSERT INTO `Test` (`appointment_ID`,`test_name`,`test_comment`,`test_result`) VALUES('$appointment_ID', '$test_name', '$test_note',0); ";

if($conn->query($sql)==TRUE){
    header("location:/SoftwareEng/html/doctor/check_test.php");
    }
    else{
    echo"Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close(); 
    
?>
