<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Admission</title>
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
$Amdmno=mysqli_real_escape_string($conn,$_POST['Amdmno']);
$ADmdate=mysqli_real_escape_string($conn,$_POST['ADmdate']);
$FName=mysqli_real_escape_string($conn,$_POST['FName']);
$MName=mysqli_real_escape_string($conn,$_POST['MName']);
$LName=mysqli_real_escape_string($conn,$_POST['LName']);
$Gender=mysqli_real_escape_string($conn,$_POST['Gender']);
$dOb=mysqli_real_escape_string($conn,$_POST['dOb']);
$PAddress=mysqli_real_escape_string($conn,$_POST['PAddress']);
$Course_title=mysqli_real_escape_string($conn,$_POST['Course_title']);
$Pmode=mysqli_real_escape_string($conn,$_POST['pmode']);
$School=mysqli_real_escape_string($conn,$_POST['School']);
$Yfrom=mysqli_real_escape_string($conn,$_POST['Yfrom']);
$YTo=mysqli_real_escape_string($conn,$_POST['YTo']);
$MGrade=mysqli_real_escape_string($conn,$_POST['MGrade']);
$EGrade=mysqli_real_escape_string($conn,$_POST['EGrade']);
$OGrade=mysqli_real_escape_string($conn,$_POST['OGrade']);
$Nok=mysqli_real_escape_string($conn,$_POST['Nok']);
$Ktel=mysqli_real_escape_string($conn,$_POST['Ktel']);
$Relation=mysqli_real_escape_string($conn,$_POST['Relation']);
$Comments=mysqli_real_escape_string($conn,$_POST['Comments']);
$Reason=mysqli_real_escape_string($conn,$_POST['Reason']);

$sql="UPDATE admissions SET adm_date='$ADmdate',first_name='$FName',middle_name='$MName',last_name='$LName',gender='$Gender',dob='$dOb',
postal_add='$PAddress',course_title='$Course_title',prefferd_mode='$Pmode',school_att='$School',year_from='$Yfrom',year_to='$YTo',math_grade='$MGrade',
english_grade='$EGrade',overall_grade='$OGrade',next_kin='$Nok',kin_tel='$Ktel',relation='$Relation',reason='$Comments',
information='$Reason' WHERE admission_no='$Amdmno' ";

if ($conn->query($sql)== TRUE ){


    print "<p><b>Update  Successful!</b></p>";
    print "<a href='search_adm.php' class='btn btn-info'>New Update</a>";
    print"<br>";
    print"<br>";
    print "<a href='admissions.php' class='btn btn-secondary'>New Admission</a>";
}
else{
    print "<p class='text-danger'><b>Update Not Successful!</b></p>";
    print "<a href='search_adm.php' class='btn btn-danger'>Try again</a>";
}
mysqli_close($conn);

?>
</body>
</html>