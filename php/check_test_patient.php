<!DOCTYPE html>

<?php 
include "DBconnection.php"; 

session_start();

if($_SESSION['patient_ID']){}else {header("location:/SoftwareEng/html/index.php");}
         
$ptID=$_SESSION['patient_ID'];
$sql = "SELECT s.appointment_ID, t.test_name, t.test_result, t.test_ID FROM Appointment s, Test t WHERE patient_ID = $ptID and s.appointment_ID = t.appointment_ID ORDER BY s.appointment_ID desc";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) 
        {
            $GLOBALS["appointment_ID"] = $row["appointment_ID"];
            $GLOBALS["test_name"] = $row["test_name"];
            $GLOBALS["test_result"] = $row["test_result"];
            $GLOBALS["test_ID"] = $row["test_ID"];


            $appointment_ID=$GLOBALS["appointment_ID"];
            $test_name=$GLOBALS["test_name"];
            $test_result=$GLOBALS["test_result"];
            $test_ID=$GLOBALS["test_ID"];

            if($test_result=="0"){
                $test_result1="Waiting for result..";
                $showPDF="PDF Not ready";
                $status="pointer-events: none;";
            }else { $test_result1="";
                $showPDF="Show PDF";
                $status="";
            }

            if(empty($test_result)){
                $test_result_display="Results are not ready..";
            }else{$test_result_display="Results are ready";}
        
            ?>
            
        <div class="appointmentUp"> 
            <div class="textFloatLeft"> 
                Appointment No:<?php echo"$appointment_ID";?>
            </div> 
            <div class="textFloatRight">
                Test Name: <?php echo"$test_name";?>
            </div>
        </div>

        <div class="appointmentBottom"> 
            <div class="textFloatLeft"> 
                Test ID: <?php echo"$test_ID";?>
            </div> 
            <div class="textFloatRight" style="color: black;">
                <?php echo"$test_result_display";?>
            </div>
        </div>

        <input type="hidden" name="appointment_ID" value="<?php echo "$appointment_ID"; ?>">

        <a href="<?php echo $test_result ?>" class="displayPDF" style="color: white; <?php echo $status ?>"><?php echo $showPDF;?></a>
        
                <?php
        }
        
} 

?>
