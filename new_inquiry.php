<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inquiry</title>
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
$inq=mysqli_real_escape_string($conn,$_POST['enqdate']);
$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$mname=mysqli_real_escape_string($conn,$_POST['mname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$tel=mysqli_real_escape_string($conn,$_POST['tel']);
$course=mysqli_real_escape_string($conn,$_POST['course']);
$comm=mysqli_real_escape_string($conn,$_POST['comments']);

$sql="INSERT INTO inquiries(enqdate,first_name,middle_name,last_name,tel,course,comments)
VALUES ('$inq','$fname','$mname','$lname','$tel','$course','$comm')";
if ($conn->query($sql)==true){
    echo "<p><b>Enquiry added successfully!</b></p>";
    echo "<br>";
    echo "<a href='inquiries.php' class='btn btn-info'>New Inquiry</a>";


}
else{
    echo "<p class='text-danger'><b>Enquiry not added successfully!</b></p>";
    echo "<a href='inquiries.php' class='btn btn-danger'>Try Again</a>";
}
mysqli_close($conn);
?>
</body>
</html>

