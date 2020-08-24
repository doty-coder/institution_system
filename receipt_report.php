<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receipt Report</title>
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
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","institutionsystemdb");
    if (!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }

    $result=mysqli_query($conn,"SELECT * FROM receipt");

    echo "<table class='table table-responsive table-bordered table-striped'>
<tr>
<th>Receipt ID</th>
<th>Receipt Date </th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Course</th>
<th>Amount Paid</th>
</tr>";

    while ($row=mysqli_fetch_array($result)) {

        echo "<tr>";
        echo "<td>". $row['receipt_no'] . "</td>";
        echo "<td>". $row['receipt_date'] . "</td>";
        echo "<td>". $row['first_name'] . "</td>";
        echo "<td>". $row['middle_name'] . "</td>";
        echo "<td>". $row['last_name'] . "</td>";
        echo "<td>". $row['course'] . "</td>";
        echo "<td>". $row['amount_paid'] . "</td>";
    }
    echo "</table>";
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
