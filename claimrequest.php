
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body{ font: 18px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
    
   
</head>
<body>
<left>
<h1>Vehicle Insurance</h1>
</left>
<nav class="nav justify-content-end  ">
<a class="nav-link" href="main2.html">Home</a>
    <a class="nav-link" href="reset-password.php" aria-current="page">Reset Password</a>
    <a class="nav-link" href="policies.php" aria-current="page">Apply for insurance</a>
  <a class="nav-link" href="claimrequest.php" aria-current="page">Request Claim</a>
  <a class="nav-link" href="login.php" aria-current="page">Sign Out</a>
</nav>
<center>
    <div class="wrapper">
        
        <br>
         <form action="claimrequest2.php" method="POST">
         <div class="form-group">
                <label>Insert ID</label>
                <input type="text" name="ID" class="form-control">
            </div>
            <div class="form-group">
                <label>Policy No</label>
                <input type="text" name="policyNo" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Date Of Incident</label>
                <input type="date" name="dateOfIncident" class="form-control">
            </div>
            <div class="form-group">
                <label>Place Of Incident</label>
                <input type="text" name="placeOfIncident" class="form-control">
            </div>
            <div class="form-group">
                <label>Claim Type</label>
                <input type="text" name="claimType" class="form-control">
            </div>
            
 <br>
            <input type="submit" value="Submit">
         </form>
</div>
      
    </center>
</body>