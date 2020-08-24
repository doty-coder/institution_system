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
    <style>

        .frms{
            background: brown;
            border-radius: 20px;
            padding: 20px;
            margin: 10px;
        }
        input[type=text],select{
            margin-bottom: 20px;
        }
        label{
            color: wheat;
        }
        body{
            background: url("images/bckkk.jpeg");
            background-size: cover;
            background-repeat: repeat;

    </style>
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
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
            <div class="logo">
                <img src="images/Inceptor-Logo.png" alt="logo" width="100%">
            </div>

            <hr>
            <form action="register_user.php" method="post" class="shadow frms">
                <h2 class="text-center text-info">Fill in your Details</h2>
                <div class="form-group">

                    <input type="text" name="fname" class="form-control" placeholder="Enter First Name" required>
                    <input type="text" name="mname" class="form-control" placeholder="Enter Middle Name" required>
                    <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required>
                    <label for=""><b>Department</b></label>
                    <select name="dept" id="" class="form-control">
                        <option value="Inquiries">Inquiries</option>
                        <option value="Admissions">Admissions</option>
                        <option value="Accounts">Accounts</option>>

                    </select>
                    <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                    
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    <hr>
                   <div class="buttons">
                       <button type="submit" name="submit" class="btn btn-info">Submit</button>
                       &nbsp;
                       &nbsp;
                       <a href="search_RegisterU.php" class="btn btn-warning">Update</a>   &nbsp;
                       &nbsp;
                       <a href="login.php" class="btn badge-success">Login</a>   &nbsp;
                       &nbsp;
                       <a href="search_registerD.php" class="btn btn-danger">Delete</a>
                   </div>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>