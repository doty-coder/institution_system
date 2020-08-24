<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <style>
        form{
            padding: 20px;
            margin: 30px;
        }
    </style>
</head>
<body class="jumbotron">
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
<div class="container">
    <div class="logo">
        <img src="images/Inceptor-Logo.png" alt="">
    </div>
           <form action="new_billing.php" method="post" class="shadow-lg forms">
               <div class="form-group">
                   <table class="table table-striped table-secondary">

                       <tr>
                           <td align="center"> <label for=""><b>Billing Date</b></label></td>
                           <td> <input type="date" name="billDATE" placeholder="Billing Date here" class="form-control" required></td>
                       </tr>
                       <tr>
                           <td  align="center"> <label for=""><b>First Name</b></label></td>
                           <td> <input type="text" name="FnamE" placeholder="First Name here" class="form-control" required></td>
                       </tr>
                       <tr>
                           <td  align="center"> <label for=""><b>Middle Name</b></label></td>
                           <td> <input type="text" name="MnamE" placeholder="Middle Name here" class="form-control" required></td>
                       </tr>
                       <tr>
                           <td  align="center"><label for=""><b>Last Name</b></label></td>
                           <td> <input type="text" name="LnamE" placeholder=" Last Name here" class="form-control" required></td>
                       </tr>
                       <tr>
                           <td  align="center"> <label for=""><b>Course</b></label></td>
                           <td><input type="text" name="courseTITLE" placeholder="Course Title" class="form-control" required></td>
                       </tr>
                       <tr>
                           <td  align="center"><label for="amount"><b>Amount to Pay </b> </label></td>
                           <td><input type="number" name="AmounttoPay"  placeholder="Amount to pay here" class="form-control"></td>
                       </tr>
                       <tr>
                           <td colspan="2">
                               <div class="buttons">
                                   <button type="submit" name="submit" class="btn btn-info">Post Billing</button>
                                   &nbsp; &nbsp;
                                   <a href="search_bill.php" class="btn btn-secondary">Update</a>
                                   &nbsp; &nbsp;
                                   <a href="billing_Delete.php" class="btn btn-danger">Delete</a>
                               </div>
                           </td>
                       </tr>

                   </table>
               </div>

           </form>
       </div>
       <div class="col-sm-3"></div>



</body>
</html>