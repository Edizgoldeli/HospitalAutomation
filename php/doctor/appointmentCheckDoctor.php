<!DOCTYPE html>

<?php 


if($_SESSION['doctor_ID']){}else {header("location:/SoftwareEng/html/doctor/loginDoctor.php");}

$dcID=$_SESSION['doctor_ID'];
$sql = "SELECT s.appointment_ID, s.status, s.doctor_ID, s.date, s.time, b.name, b.surname, b.Age, b.Gender FROM Appointment s, Patient b WHERE s.doctor_ID=$dcID and s.patient_ID = b.patient_ID ORDER BY s.appointment_ID desc";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) 
        {
            $GLOBALS["appointment_ID"] = $row["appointment_ID"];
            $GLOBALS["date"] = $row["date"];
            $GLOBALS["time"] = $row["time"];
            $GLOBALS["status"] = $row["status"];
            $GLOBALS["name"] = $row["name"];
            $GLOBALS["surname"] = $row["surname"];
            $GLOBALS["Age"] = $row["Age"];
            $GLOBALS["Gender"] = $row["Gender"];

            $appointment_ID=$GLOBALS["appointment_ID"];
            $date=$GLOBALS["date"];
            $time=$GLOBALS["time"]; 
            $status=$GLOBALS["status"];  
            $name=$GLOBALS["name"];
            $surname=$GLOBALS["surname"];
            $full_name=$name." ".$surname;
            $Age=$GLOBALS["Age"];  
            $Gender=$GLOBALS["Gender"];
            $ageGender ="Age: ".$Age." / Gender: ".$Gender; 

            $time2 = substr("$time",0, 5);
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
                Appointment No: <?php echo $appointment_ID;?>
            </div> 
            <div class="textFloatRight">
                <?php echo"$ageGender";?>
            </div>
        </div>

        <div class="appointmentBottom"> 
            <div class="textFloatLeft"> 
                Patient: <?php echo"$full_name";?>
            </div> 
            <div class="textFloatRight" style="color: black;">
                Date: <?php echo"$date"; echo" $time2";?>
            </div>
        </div>

        <form method="post" action="/SoftwareEng/php/doctor/approvalAppointment.php">
        <input type="hidden" name="status" value="0">
        <input type="hidden" name="appointment_ID" value="<?php echo $appointment_ID;?>">
        <button type="submit" class="appointmentCancel" <?php echo $style; ?>>Decline</button>
        </form>

        <form method="post" action="/SoftwareEng/php/doctor/approvalAppointment.php">
        <input type="hidden" name="status" value="1">
        <input type="hidden" name="appointment_ID" value="<?php echo $appointment_ID; ?>">
        <button type="submit" class="appointmentChangeTime" <?php echo $style; ?>>Approve</button>
        </form>
                <?php
        }
        
} 

?>
