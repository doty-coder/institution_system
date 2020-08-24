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
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h2 class="text-black-50 text-center">Search Billing for Update</h2>
            <hr style="border: 2px solid darkblue">
            <form action="show_billing.php" method="post" class="shadow-lg forms">
                <div class="form-group">
                    <table class="table table-striped table-primary">
                        <tr align="center">
                            <td align="right"><label for=""><b>Billing_no</b></label></td>
                            <td> <input type="text" name="billID" placeholder="Enter billing ID" required class="form-control"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr style="border: 1px solid darkblue">
                                <div class="buttons">
                                    <button type="submit" class="btn btn-info">Search</button>
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
