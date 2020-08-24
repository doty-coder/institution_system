<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receipt</title>
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
<div class="container">
    <div class="logo">
        <img src="images/Inceptor-Logo.png" alt="50%">
    </div>
           <form action="new_receipt.php" method="post" class="shadow-lg forms">
               <div class="form-group">
                   <table class="table table-striped table-secondary">

                       <tr>
                           <td align="center"> <label for=""><b>Receipt Date</b></label></td>
                           <td> <input type="date" name="receiptDate" placeholder="Billing Date here" class="form-control" required></td>
                       </tr>
                       <tr>
                           <td align="center"> <label for=""><b>First Name</b></label></td>
                           <td> <input type="text" name="Fname" placeholder="First Name here" class="form-control" required></td>
                       </tr>
                       <tr>
                           <td align="center"> <label for=""><b>Middle Name</b></label></td>
                           <td> <input type="text" name="Mname" placeholder="Middle Name here" class="form-control" required></td>
                       </tr>
                       <tr>
                           <td align="center"><label for=""><b>Last Name</b></label></td>
                           <td> <input type="text" name="Lname" placeholder=" Last Name here" class="form-control" required></td>
                       </tr>
                       <tr>
                           <td align="center"> <label for=""><b>Course</b></label></td>
                           <td><input type="text" name="course_title" placeholder="Course Title" class="form-control" required></td>
                       </tr>
                       <tr>
                           <td align="center"><label for="amount"><b>Amount Paid</b> </label></td>
                           <td><input type="number" name="amount" id="amount" placeholder="Amount to paid" class="form-control"></td>
                       </tr>
                       <tr>
                           <td colspan="2">
                               <div class="buttons">
                                   <button type="submit" name="submit" class="btn btn-info">Post Receipt</button>
                                   &nbsp; &nbsp;
                                   <a href="search_receipt.php" class="btn btn-secondary">Update</a>
                                   &nbsp; &nbsp;
                                   <a href="recipts_Delete.php" class="btn btn-danger">Delete</a>
                               </div>
                           </td>
                       </tr>

                   </table>
               </div>

           </form>
       </div>
       <div class="col-sm-3"></div>
   </div>
</div>

</body>
</html>