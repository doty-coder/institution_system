<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Receipt</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body  class="jumbotron">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="inquiries.php">Inquiries</a>
            <a class="nav-item nav-link" href="#">Contact Us</a>
            <a class="nav-item nav-link disabled" href="#">Disabled</a>
        </div>
    </div>
</nav>
<img src="images/Inceptor-Logo.png" alt="">
<?php

$conn=mysqli_connect("localhost","root","","institutionsystemdb");
if (!$conn){
    die("Connection Failed:".mysqli_connect_error());
}
$userId=mysqli_real_escape_string($conn,$_POST['userId']);
$Fname=mysqli_real_escape_string($conn,$_POST['fname']);
$Mname=mysqli_real_escape_string($conn,$_POST['mname']);
$Lname=mysqli_real_escape_string($conn,$_POST['lname']);
$dept=mysqli_real_escape_string($conn,$_POST['dept']);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$pwd=mysqli_real_escape_string($conn,$_POST['password']);

$sql="UPDATE users SET first_name='$Fname',middle_name='$Mname',last_name='$Lname',department='$dept',username='$username',password='$pwd'
 WHERE user_id='$userId'";
if ($conn->query($sql) == TRUE){
    print "<p><b>Registration Update  Successful!</b></p>";
    print "<a href='search_RegisterU.php' class='btn btn-info'>New Update</a>";
    print"<br>";
    print"<br>";
    print "<a href='login.php' class='btn btn-secondary'>Login</a>";

}
else{
    print "<p class='text-danger'>Registration update Not Successful</p>";
    print "<a href='search_RegisterU.php' class='btn btn-danger'>Try again</a>";
}
mysqli_close($conn);


?>

</body>
</html>

<?php
