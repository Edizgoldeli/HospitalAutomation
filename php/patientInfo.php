<!DOCTYPE html>

<?php 
include "DBconnection.php"; 

session_start();

if($_SESSION['patient_ID']){}else {header("location:/SoftwareEng/html/index.php");}
         
$ptID=$_SESSION['patient_ID'];
$sql = "SELECT `name`,`surname`,`phone`,`Age`,`Gender`,`Address`,`mail` FROM `Patient` WHERE patient_ID = $ptID";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) 
        {
            $GLOBALS["name"] = $row["name"];
            $GLOBALS["surname"] = $row["surname"];
            $GLOBALS["phone"] = $row["phone"];
            $GLOBALS["Age"] = $row["Age"];
            $GLOBALS["Gender"] = $row["Gender"];
            $GLOBALS["Address"] = $row["Address"];
            $GLOBALS["mail"] = $row["mail"];
            $name=$GLOBALS["name"];
            $surname=$GLOBALS["surname"];
            $phone=$GLOBALS["phone"];  
            $Age=$GLOBALS["Age"];
            $Gender=$GLOBALS["Gender"];   
            $Address=$GLOBALS["Address"];    
            $mail=$GLOBALS["mail"];    

                
                
                
                
        }
} 
?>
