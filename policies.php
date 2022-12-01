
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
<center>
<h1>Vehicle Insurance</h1>
<nav class="nav justify-content-end  ">
<a class="nav-link" href="main2.html">Home</a>
    <a class="nav-link" href="reset-password.php" aria-current="page">Reset Password</a>
    <a class="nav-link" href="policies.php" aria-current="page">Apply for insurance</a>
  <a class="nav-link" href="claimrequest.php" aria-current="page">Request Claim</a>
  <a class="nav-link" href="login.php" aria-current="page">Sign Out</a>
</nav>
    <div class="wrapper">
        
        
        <br>
      
         <form action="policies2.php" method="POST">
         <div class="form-group">
                <label>Insert Type</label>
                <input type="text" name="ID" class="form-control">
            </div>
            <div class="form-group">
                <label>Vehicle Type</label>
                <input type="text" name="vehicleType" class="form-control">
            </div>
            <div class="form-group">
                <label>Vehicle Price</label>
                <input type="text" name="vehiclePrice" class="form-control">
            </div>
            <div class="form-group">
                <label>Vehicle Bought Date</label>
                <input type="date" name="vehicleBoughtDate" class="form-control">
            </div>
            <div class="form-group">
                <label>Registration No</label>
                <input type="text" name="registrationNo" class="form-control">
            </div>
            <div class="form-group">
                <label>Driving Licence No</label>
                <input type="text" name="drivingLicenceNo" class="form-control">
            </div>
            <div class="form-group">
                <label>Expiry Date</label>
                <input type="date" name="expiryDate" class="form-control">
            </div>
            <div class="form-group">
                <label>Type Of Parking</label>
                <input type="text" name="typeOfParking" class="form-control">
            </div>
            <div class="form-group">
                <label>Miles Travel</label>
                <input type="text" name="milesTravel" class="form-control">
            </div>
 <br>
            <input type="submit" value="Submit">
         </form>
</div>
      
</center>
</body>