<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Billing</title>
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
$userID=mysqli_real_escape_string($conn,$_POST['User_id']);
$sql="SELECT * FROM users WHERE user_id='$userID'";
$result=$conn->query($sql);
if ($result->num_rows>0){
while ($row=$result->fetch_assoc()){

?>
<div class="container">
    <hr>
    <h2 class="text-center text-danger">Delete Registration</h2>
    <hr>
    <form action="delete_registration.php" method="post" class="shadow">
        <table class="table table-striped table-secondary">
            <tr>
                <td align="center"><label for=""><b>User ID</b></label></td>
                <td> <input type="text" name="userId" class="form-control" value="<?php echo $row['user_id'];?>" ></td>
            </tr>
            <tr>
                <td align="center"><label for=""><b>First Name</b></label></td>
                <td> <input type="text" name="fname" class="form-control" value="<?php echo $row['first_name'];?>" ></td>
            </tr>
            <tr>
                <td align="center"> <label for=""><b>Middle Name</b></label></td>
                <td> <input type="text" name="mname" class="form-control"  value="<?php echo $row['middle_name'];?>"></td>
            </tr>
            <tr>
                <td align="center"> <label for=""><b>Last Name</b></label></td>
                <td> <input type="text" name="lname" class="form-control"  value="<?php echo $row['last_name'];?>"></td>
            </tr>
            <tr>
                <td align="center"> <label for=""><b>Department</b></label></td>
                <td><input type="text" name="dept" class="form-control"  value="<?php echo $row['department'];?>"></td>
            </tr>
            <tr>
                <td align="center"><label for=""><b>Username</b></label></td>
                <td> <input type="text" name="username" class="form-control"  value="<?php echo $row['username'];?>"></td>
            </tr>
            <tr>
                <td align="center"> <label for=""><b>Password</b></label></td>
                <td> <input type="password" name="password" class="form-control"  value="<?php echo $row['password'];?>"></td>
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



