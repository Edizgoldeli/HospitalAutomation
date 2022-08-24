<!DOCTYPE html>

<?php 

if($_SESSION['doctor_ID']){}else {header("location:/SoftwareEng/html/doctor/loginDoctor.php");}


$dcID=$_SESSION['doctor_ID'];

$sql = "SELECT s.appointment_ID, c.test_name, c.test_comment, c.test_result, c.test_ID FROM Test c, Appointment s WHERE s.doctor_ID=$dcID and c.appointment_ID=s.appointment_ID ORDER BY c.test_ID desc";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) 
        {
            $GLOBALS["appointment_ID"] = $row["appointment_ID"];
            $GLOBALS["test_name"] = $row["test_name"];
            $GLOBALS["test_comment"] = $row["test_comment"];
            $GLOBALS["test_result"] = $row["test_result"];
            $GLOBALS["test_ID"] = $row["test_ID"];

            $appointment_ID=$GLOBALS["appointment_ID"];
            $test_name=$GLOBALS["test_name"];  
            $test_comment=$GLOBALS["test_comment"];
            $test_result=$GLOBALS["test_result"];
            $test_ID=$GLOBALS["test_ID"];

if($test_result=="0"){
    $test_result1="Waiting for result..";
    $showPDF="PDF Not Available";
    $downDF="PDF Not Available";
    $status="pointer-events: none;";
}else { $test_result1="";
    $showPDF="Show PDF";
    $downDF="Download";
    $status="";
}
if(empty($test_comment)){
    $test_comment="No Comment";
    
}


echo $test_result1;
            ?>
            
        <div class="appointmentUp"> 
            <div class="textFloatLeft"> 
                Appointment No: <?php echo $appointment_ID;?>
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
               Comment:  <?php echo "$test_comment";?>
            </div>
        </div>

        <a href="<?php echo $test_result ?>" class="displayPDF" style="color: white; <?php echo $status ?>"><?php echo $showPDF;?></a>
                <?php
        }
        
} 

?>
