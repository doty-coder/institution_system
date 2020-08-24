<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Billing</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
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
            <a class="nav-item nav-link disabled" href="#">Disabled</a>
        </div>
    </div>
</nav>
<img src="images/Inceptor-Logo.png" alt="">
<?php
require 'config.php';
$conn=mysqli_connect("localhost","root","","institutionsystemdb");
if (!$conn){
    die("Connection Failed:".mysqli_connect_error());
}
$billID=mysqli_real_escape_string($conn,$_POST['BillingID']);
$sql="Delete from  billing where  billing_id='$billID'";
if ($conn->query($sql) == TRUE){
    print "<p class='text-danger'><b>Invoice Delete  Successful!</b></p>";
    print "<a href='billing_Delete.php' class='btn btn-danger'>New Delete</a>";
    echo "<br>";
    echo "<br>";
    echo "<a href='billing.php' class='btn btn-secondary'>New Billing</a>";
}
else{
    print "<p class='btn-danger'>Invoice delete Not Successful</p>";
    print "<a href='billing_Delete.php' class='btn btn-danger'>Try again</a>";
}
mysqli_close($conn);


?>

</body>
</html>

