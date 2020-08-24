<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admission Report</title>
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
            <a class="nav-item nav-link " href="login.php">Staff Portal</a>
        </div>
    </div>
</nav>

<div class="container">
    <?php

    $conn=mysqli_connect("localhost","root","","institutionsystemdb");
    if (!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }

    $result=mysqli_query($conn,"SELECT * FROM admissions");

    echo "<table class='table table-striped table-bordered table-responsive'>
<tr>
<th>Admission Number</th>
<th>Admission Date</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Date of Birth</th>
<th>Postal Address</th>
<th>Course</th>
<th>Preferred Mode Of Study</th>
<th>School Attended</th>
<th>Year from</th>
<th>Year To</th>
<th>Math grade</th>
<th>English grade</th>
<th>Overall Grade</th>
<th>Next of Kin</th>
<th>Kin Telephone</th>
<th>Relation</th>
<th>Reason For Choosing course</th>
<th>How you Heard about us</th>
</tr>";

    while ($row=mysqli_fetch_array($result)){

        echo "<tr>";
        echo "<td>" . $row['admission_no'] . "</td>";
        echo "<td>" . $row['adm_date'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['middle_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['dob'] . "</td>";
        echo "<td>" . $row['postal_add'] . "</td>";
        echo "<td>" . $row['course_title'] . "</td>";
        echo "<td>" . $row['prefferd_mode'] . "</td>";
        echo "<td>" . $row['school_att'] . "</td>";
        echo "<td>" . $row['year_from'] . "</td>";
        echo "<td>" . $row['year_to'] . "</td>";
        echo "<td>" . $row['math_grade'] . "</td>";
        echo "<td>" . $row['english_grade'] . "</td>";
        echo "<td>" . $row['overall_grade'] . "</td>";
        echo "<td>" . $row['next_kin'] . "</td>";
        echo "<td>" . $row['kin_tel'] . "</td>";
        echo "<td>" . $row['relation'] . "</td>";
        echo "<td>" . $row['reason'] . "</td>";
        echo "<td>" . $row['information'] . "</td>";
        echo "</tr>";
    }
 echo "</table>";
    mysqli_close($conn);
    ?>
</div>

</body>
</html>
