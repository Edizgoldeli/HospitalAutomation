<!DOCTYPE html>
<link rel= stylesheet  href="/SoftwareEng/style/vitrinStyle.css" />
<select name="Clinic_ID" class="input-box1">


<?php include "DBconnection.php";
 
session_start();

if($_SESSION['patient_ID']){}else {header("location:/SoftwareEng/html/index.php");}
         
        $sql = "SELECT `clinic_name`,`Clinic_ID` FROM `Clinic`";
        $result = $conn->query($sql);
        
if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
            {
                
                $GLOBALS["clinic_name"] = $row["clinic_name"];
                $GLOBALS["Clinic_ID"] = $row["Clinic_ID"];
                $Clinic_ID=$GLOBALS["Clinic_ID"];
                $clinic_name=$GLOBALS["clinic_name"];
                
                    
?> 


     <option class="input-box1" value="<?php echo"$Clinic_ID"; ?>"><?php echo"$clinic_name";?></option> 
                  
<?php
                
            }
    }
           
?>