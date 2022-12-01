<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
       
        $conn = mysqli_connect("localhost:3306", "root", "", "vehicle");
         
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // $ID = $_REQUEST['ID'];
        // $Pname =  $_REQUEST['Pname'];
        // $ASpeed = $_REQUEST['ASpeed'];
        // $DHrs =  $_REQUEST['DHrs'];
        // $Bpatt = $_REQUEST['Bpatt'];
        // $Miles = $_REQUEST['Miles'];
        $id = $_REQUEST['ID'];
        $vehicleType = $_REQUEST['vehicleType'];
        $vehiclePrice =  $_REQUEST['vehiclePrice'];
        $vehicleBoughtDate = $_REQUEST['vehicleBoughtDate'];
        $registrationNo =  $_REQUEST['registrationNo'];
        $drivingLicenceNo = $_REQUEST['drivingLicenceNo'];
        $expiryDate = $_REQUEST['expiryDate'];
        $typeOfParking = $_REQUEST['typeOfParking'];
        $milesTravel = $_REQUEST['milesTravel'];
         
        if (!empty(trim($_POST["ID"]))) {
            $sql = "INSERT INTO insurancedetails (ID, vehicleType, vehiclePrice, vehicleBoughtDate, registrationNo, drivingLicence,expiryDate,parkingType,milesTravel)
            VALUES ('".$_POST["ID"]."','".$_POST["vehicleType"]."','".$_POST["vehiclePrice"]."','".$_POST["vehicleBoughtDate"]."','".$_POST["registrationNo"]."',
            '".$_POST["drivingLicenceNo"]."','".$_POST["expiryDate"]."','".$_POST["typeOfParking"]."','".$_POST["milesTravel"]."')";
        
            if ($conn->query($sql) === TRUE) {
                echo '<script type="text/javascript">';
                 echo ' alert("Records inserted successfully")'; 
                 header("location: main2.html");
                echo '</script>';

                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo '<script type="text/javascript">';
            echo ' alert("Unsuccessfuly")'; 
           echo '</script>';
        }
        
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>