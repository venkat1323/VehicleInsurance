<?php
 
$user = 'root';
$password = '';
 
$database = 'vehicle';
 

$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 

if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}

$sql = " SELECT * FROM claimtype ORDER BY ID DESC ";


$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<left>
<h1 style="background-color:powderblue;">Vehicle Insurance</h1>
</left>
</head>
<body>
<nav class="nav justify-content-end  ">
<a class="nav-link" href="main2.html">Home</a>
    <a class="nav-link" href="reset-password.php" aria-current="page">Reset Password</a>
    <a class="nav-link" href="policies.php" aria-current="page">Apply for insurance</a>
  <a class="nav-link" href="claimrequest.php" aria-current="page">Request Claim</a>
  <a class="nav-link" href="viewpolicies.php">View all policy</a>
  <a class="nav-link" href="login.php" aria-current="page">Sign Out</a>


  
</nav>
<br>
<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <h3>Applications for Claims</h3>
            <br>
            <tr>
                <th>ID</th>
                <th>Policy No</th>
                <th>Date Of Incident</th>
                <th>Place Of Incident</th>
                <th>Claim Type</th>
            </tr>
             <?php
             
                while($rows=$result->fetch_assoc())
                {
            ?>
            </thead>
            <tbody class="table-group-divider">
                
                <tr class="table-primary">
                    <td scope="row"><?php echo $rows['id'];?></td>
                    <td><?php echo $rows['policyNo'];?></td>
                    <td><?php echo $rows['dateOfIncident'];?></td>
                    <td><?php echo $rows['placeOfIncident'];?></td>
                    <td><?php echo $rows['claimType'];?></td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
            <tfoot>
                
            </tfoot>
    </table>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>