<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admissions</title>
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

$conn=mysqli_connect("localhost","root","","institutionsystemdb");
if (!$conn){
    die("Connection Failed:".mysqli_connect_error());
}
$admdate=mysqli_real_escape_string($conn,$_POST['admdate']);
$Fname=mysqli_real_escape_string($conn,$_POST['Fname']);
$Mname=mysqli_real_escape_string($conn,$_POST['Mname']);
$Lname=mysqli_real_escape_string($conn,$_POST['Lname']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$Paddress=mysqli_real_escape_string($conn,$_POST['Paddress']);
$course_title=mysqli_real_escape_string($conn,$_POST['course_title']);
$pmode=mysqli_real_escape_string($conn,$_POST['pmode']);
$school=mysqli_real_escape_string($conn,$_POST['school']);
$yfrom=mysqli_real_escape_string($conn,$_POST['yfrom']);
$yTo=mysqli_real_escape_string($conn,$_POST['yTo']);
$mGrade=mysqli_real_escape_string($conn,$_POST['mGrade']);
$eGrade=mysqli_real_escape_string($conn,$_POST['eGrade']);
$oGrade=mysqli_real_escape_string($conn,$_POST['oGrade']);
$nok=mysqli_real_escape_string($conn,$_POST['nok']);
$ktel=mysqli_real_escape_string($conn,$_POST['ktel']);
$relation=mysqli_real_escape_string($conn,$_POST['relation']);
$comments=mysqli_real_escape_string($conn,$_POST['comments']);
$reason=mysqli_real_escape_string($conn,$_POST['reason']);

$sql="INSERT INTO admissions(adm_date,first_name,middle_name,last_name,gender,dob,postal_add,course_title,prefferd_mode,school_att,year_from,year_to,math_grade,english_grade,overall_grade,next_kin,kin_tel,relation,reason,information)
VALUES ('$admdate','$Fname','$Mname','$Lname','$gender','$dob','$Paddress','$course_title','$pmode','$school','$yfrom','$yTo','$mGrade','$eGrade','$oGrade','$nok','$ktel','$relation','$comments','$reason')";

if ($conn->query($sql)== TRUE ){
    print "<p><b>Thank you for registering!</b></p>";
    print "<a href='admissions.php' class='btn btn-info'>New Admission</a>";

}
else{
    print "<p class='text-danger'><b>Admission Not Successful!</b></p>";
    print "<a href='admissions.php' class='btn btn-danger'>Try again</a>";
}
mysqli_close($conn);
?>
</body>
</html>