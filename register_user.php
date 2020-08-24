<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Registration</title>
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
            <a class="nav-item nav-link " href="login.php">Staff Portal</a>
        </div>
    </div>
</nav>

<?php
$conn=mysqli_connect("localhost","root","","institutionsystemdb");
if (!$conn){
    die("Connection Failed:".mysqli_connect_error());
}

$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$mname=mysqli_real_escape_string($conn,$_POST['mname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$dept=mysqli_real_escape_string($conn,$_POST['dept']);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);


$sql="INSERT INTO users (first_name,middle_name,last_name,department,username,password) VALUES ('$fname','$mname','$lname','$dept','$username','$password')";

if ($conn->query($sql)== TRUE){
    echo "<p>Registration Successful</p>";
    echo "<a href='register.php' class='btn btn-info'>Add new</a>";

}
else{
    echo "<p>Registration Not Successful</p>";
    echo "<a href='register.php' class='btn btn-danger'>Try Again</a>";
}

?>

</body>
</html>