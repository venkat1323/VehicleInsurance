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
         

        $id = $_REQUEST['ID'];
        $policyNo = $_REQUEST['policyNo'];
        $dateOfIncident = $_REQUEST['dateOfIncident'];
        $placeOfIncident =  $_REQUEST['placeOfIncident'];
        $claimType =  $_REQUEST['claimType'];
       
         
        if (!empty(trim($_POST["ID"]))) {
            $sql = "INSERT INTO claimtype (id, policyNo, dateOfIncident, placeOfIncident, claimType)
            VALUES ('".$_POST["ID"]."','".$_POST["policyNo"]."','".$_POST["dateOfIncident"]."','".$_POST["placeOfIncident"]."','".$_POST["claimType"]."')";
        
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