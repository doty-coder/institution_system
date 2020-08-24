<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <style>
        body{
            background: url("images/bckkk.jpeg");
            background-size: cover;
            background-repeat: repeat;
        }
        label{
            color: wheat;

    </style>
</head>
<body  class="jumbotron">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><i>INCEPTOR</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="inquiries.php">Inquiries</a>
            <a class="nav-item nav-link" href="#">Contact Us</a>
            <a class="nav-item nav-link " href="login.php">Staff Portal</a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h2 class="text-black-50 text-center">Login</h2>
            <hr>
            <form action="" method="post" class="shadow-lg frms">
                <label for=""><b>Department</b></label>
                <select name="dept" id="" class="form-control">
                    <option value=""></option>
                    <option value="Inquiries">Inquiries</option>
                    <option value="Admissions">Admissions</option>
                    <option value="Accounts">Accounts</option>
                </select>
                <label for=""><b>Username</b></label>
                <input type="text" name="username" class="form-control" required>
                <label for=""><b>Password</b></label>
                <input type="text" name="password" class="form-control" required>
                <br>
                <div class="buttons">
                    <button type="submit" name="submit" class="btn btn-info">login to dashboard</button>
                </div>
                <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
<?php
session_start();
if (isset($_POST['submit'])){

    $conn=mysqli_connect("localhost","root","","institutionsystemdb");
    if (!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }

    $dept=mysqli_real_escape_string($conn,$_POST['dept']);
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);

    $sql=mysqli_query($conn,"SELECT * FROM users WHERE department='$dept' AND username='$username' AND password='$password'");
    $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
    $active = $row['active'];

   $count=mysqli_num_rows($sql);
   if ($count==1){
       if (!empty($dept=='Inquiries') &&!empty($username) && !empty($password)){
           header("Location: inquiries_dashboard.php");
       }else{
           if (!empty($dept=='Admissions') &&!empty($username) && !empty($password)){
               header("Location: admissions_dashboard.php");
       }else{
               if (!empty($dept=='Accounts') &&!empty($username) && !empty($password)){
                   header("Location: accounts_dashboard.php");

           }else{
                   header("Location: login_error.php");
               }
           }
       }
   }
}



?>