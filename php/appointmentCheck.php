<!DOCTYPE html>

<?php 
include "DBconnection.php"; 

session_start();

if($_SESSION['patient_ID']){}else {header("location:/SoftwareEng/html/index.php");}
         
$ptID=$_SESSION['patient_ID'];
$sql = "SELECT s.appointment_ID, s.status, s.clinic_ID, s.date, s.time, s.doctor_ID, b.clinic_name, b.Clinic_ID, c.full_name, c.doctor_ID FROM Appointment s, Clinic b, Doctors c WHERE patient_ID = $ptID AND b.Clinic_ID = s.clinic_ID AND s.doctor_ID=c.doctor_ID ORDER BY s.appointment_ID desc";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) 
        {
            $GLOBALS["appointment_ID"] = $row["appointment_ID"];
            $GLOBALS["status"] = $row["status"];
            $GLOBALS["clinic_ID"] = $row["clinic_name"];
            $GLOBALS["date"] = $row["date"];
            $GLOBALS["time"] = $row["time"];
            $GLOBALS["doctor_ID"] = $row["full_name"];
            $appointment_ID=$GLOBALS["appointment_ID"];
            $status=$GLOBALS["status"];
            $clinic_ID=$GLOBALS["clinic_ID"];
            $date=$GLOBALS["date"];  
            $time = $GLOBALS["time"];
            $time2 = substr("$time",0, 5);
            $date2 = $date." ".$time2;
            $doctor_ID=$GLOBALS["doctor_ID"];
            
           

            if($status == "2"){
                $stat="Waiting Approval..";
            }else if($status =="1"){
                $stat="Approved";
            }else if($status =="0"){
                $stat="Declined";
            }
            
            if($date < date("Y-m-d"))
            {
             $style= 'style="background:#fdba5c; pointer-events: none;";';
             $stat= "This appointment has passed";
            }
            else if ($date == date("Y-m-d"))
            {
             $style= '';
            }
            echo "$stat";
            ?>
            
        <div class="appointmentUp" <?php echo $style; ?>> 
            <div class="textFloatLeft"> 
                Appointment No:<?php echo"$appointment_ID";?>
            </div> 
            <div class="textFloatRight">
                Clinic: <?php echo"$clinic_ID";?>
            </div>
        </div>

        <div class="appointmentBottom" > 
            <div class="textFloatLeft"> 
                Doctor: <?php echo"$doctor_ID";?>
            </div> 
            <div class="textFloatRight" style="color: black;">
                Date: <?php echo"$date2";?>
            </div>
        </div>

        <form method="post" action="/SoftwareEng/php/deleteAppointment.php">
        <input type="hidden" name="appointment_ID" value="<?php echo "$appointment_ID"; ?>">
        <button type="submit" class="appointmentCancel"  <?php echo $style; ?>>Cancel</button>
        </form>

        <form method="post" action="/SoftwareEng/html/dateChanger.php">
        <input type="hidden" name="date" value="<?php echo "$date"; ?>">
        <input type="hidden" name="appointmentID" value="<?php echo "$appointment_ID"; ?>">
        <button type="submit" class="appointmentChangeTime"  <?php echo $style; ?>>Change Date</button>
        </form>
                <?php
        }
        
} 

?>
