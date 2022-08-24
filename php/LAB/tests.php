<!DOCTYPE html>

<?php 
session_start();
if($_SESSION['patient_ID']&& $_SESSION['mail']=="LAB"){}else {header("location:/SoftwareEng/html");}

$sql = "SELECT test_name, test_result, test_ID, appointment_ID, test_comment FROM Test ORDER BY test_ID desc";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) 
        {
            $GLOBALS["appointment_ID"] = $row["appointment_ID"];
            $GLOBALS["test_name"] = $row["test_name"];
            $GLOBALS["test_result"] = $row["test_result"];
            $GLOBALS["test_ID"] = $row["test_ID"];
            $GLOBALS["test_comment"] = $row["test_comment"];

            $appointment_ID=$GLOBALS["appointment_ID"];
            $test_name=$GLOBALS["test_name"];
            $test_result=$GLOBALS["test_result"];
            $test_ID=$GLOBALS["test_ID"];
            $test_comment=$GLOBALS["test_comment"];

            if($test_result=="0"){
                $test_result1="Waiting for result..";
                $uploadPDF="Upload PDF";
                $downDF="Upload PDF";
            }else { $test_result1="";
                $uploadPDF="Show PDF";
                $downDF="Download";
            }

            if(empty($test_result)){
                $test_result="Results are not uploaded..";
            }else{$test_result="Results are uploaded";}
        echo $test_result;
        if(empty($test_comment)){
            $test_comment="No Comment";
            
        }
            ?>
            
        <div class="appointmentUp"> 
            <div class="textFloatLeft"> 
            Appointment ID: <?php echo"$appointment_ID";?>
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
               Note: <?php echo"$test_comment";?>
            </div>
        </div>

        <form action="/SoftwareEng/php/LAB/pdfUpload.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="test_ID" value="<?php echo "$test_ID"; ?>">
        <label for="text">Select <div class="text">
        <input type="file" name="file" id="upload" size="500000000" /></label>
        
        <input type="submit" class="upload" value="Upload"/></div>
        </form>
      
        
        

                <?php
        }
        
} 
?>