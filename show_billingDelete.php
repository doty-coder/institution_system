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
<?php
$conn=mysqli_connect("localhost","root","","institutionsystemdb");
if (!$conn){
    die("Connection Failed:".mysqli_connect_error());
}
$billinID=mysqli_real_escape_string($conn,$_POST['billID']);
$sql="SELECT * FROM billing WHERE billing_id='$billinID'";
$result=$conn->query($sql);
if ($result->num_rows>0){
while ($row=$result->fetch_assoc()){





?>
<div class="container">
    <hr>
    <h2 class="text-center text-danger">Delete Billing</h2>
    <hr>
    <form action="delete_billing.php" method="post" class="shadow-lg forms">
        <table class="table table-striped table-secondary">
            <tr>
                <td align="center"><label for=""><b>Billing Id</b></label></td>
                <td><input type="text" name="BillingID" class="form-control" value="<?php echo $row['billing_id'];?>"></td>
            </tr>
            <tr>
                <td align="center"><label for=""><b>Billing Date</b></label></td>
                <td><input type="text" name="BillingDate" class="form-control" value="<?php echo $row['billing_date'];?>"></td>
            </tr>

            <tr>
                <td align="center"><label for=""><b>First Name</b></label></td>
                <td><input type="text" name="Fname" class="form-control" value="<?php echo $row['first_name'];?>"></td>
            </tr>
            <tr>
                <td align="center"><label for=""><b>Middle Name</b></label></td>
                <td><input type="text" name="Mname" class="form-control" value="<?php echo $row['middle_name'];?>"></td>
            </tr>
            <tr>
                <td align="center"><label for=""><b>Last Name</b></label></td>
                <td><input type="text" name="Lname" class="form-control" value="<?php echo $row['last_name'];?>"></td>
            </tr>
            <tr>
                <td align="center"><label for=""><b>Course</b></label></td>
                <td><input type="text" name="Course" class="form-control" value="<?php echo $row['course'];?>"></td>
            </tr>
            <tr>
                <td align="center"><label for=""><b>Amount to Pay</b></label></td>
                <td><input type="number" name="Amount" class="form-control" value="<?php echo $row['amount_to_pay'];?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="buttons">
                        <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>
    <?php
    }
    }
    mysqli_close($conn);
    ?>
</div>

</body>
</html>

