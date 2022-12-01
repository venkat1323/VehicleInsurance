<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 1px sans-serif; text-align: center; }
        .wrapper{ padding.wrapper: 15px; text-align: right;}
    </style>
</head>
<body>
    <h1 class="my-5" style="background-color:powderblue;"> <b><?php echo htmlspecialchars($_SESSION["username"]); ?> Vehicle Insurance.</h1>
    <p>
    
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3" >Sign Out of Your Account</a>
        <a href="main2.html" class="btn btn-warning">View Home Page</a>
        <a href="main2.html" class="btn btn-warning">View Policies</a>
    </p>
</body>
</html>