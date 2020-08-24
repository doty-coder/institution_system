<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Inquiry</title>
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
$inqid=mysqli_real_escape_string($conn,$_POST['enqid']);
$inq=mysqli_real_escape_string($conn,$_POST['enqDate']);
$fname=mysqli_real_escape_string($conn,$_POST['fName']);
$mname=mysqli_real_escape_string($conn,$_POST['mName']);
$lname=mysqli_real_escape_string($conn,$_POST['lName']);
$tel=mysqli_real_escape_string($conn,$_POST['telNo']);
$course=mysqli_real_escape_string($conn,$_POST['Course']);
$comm=mysqli_real_escape_string($conn,$_POST['Comments']);

$sql="UPDATE inquiries SET enqdate='$inq',first_name='$fname',middle_name='$mname',last_name='$lname',tel='$tel',course='$course',comments='$comm' WHERE enqid='$inqid'";
if ($conn->query($sql)==true){
    print "<p><b>Enquiry Updated successfully!</b></p>";
    print "<a href='search_inquiry.php' class='btn btn-info'>New Update</a>";
    print "<br>";
    print "<br>";
    print "<a href='inquiries.php' class='btn btn-secondary'>New Inquiry</a>";
}
else{
    print "<p class='text-danger'><b>Update not successful!</b></p>";
    print "<a href='search_inquiry.php' class='btn btn-danger'>Try Again</a>";
}
mysqli_close($conn);
?>


</body>
</html>
