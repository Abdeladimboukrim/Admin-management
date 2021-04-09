<?php
include_once('databas/db.php');
session_start();
if (isset($_SESSION['username'])) {
    header(" location:index.php ");
}

if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];
$query_log=" SELECT * FROM admin_login  WHERE email = '$email' AND password = '$password' ";
$result=mysqli_query($conn,$query_log);
if(mysqli_num_rows($result) == 0){
    $_SESSION['username'] = $name;
    header("location:index.php");
}
else{
    echo "Enter nom ou email correct! ";
}
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="stylee.css">
    <title>register</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offest-md-4">
                <form action="login.php" method="post" >
                    <h3 class="text-center">Register</h3>
                    <div class="form-group">
                        <label for="username"> Username</label>
                        <input type="email" name="email" value="" class="form-control form-ocntrol-lg" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control form-ocntrol-lg" required>
                    </div>
                    <div class="form-group">
                     <input type="submit" name="signup-btn"  value="login" class="btn btn-primary btn-block btn-lg">login</input >
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>