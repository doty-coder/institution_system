<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inquiries</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <style>
        .logo{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        body{
            background: url("images/bckkk.jpeg");
            background-size: cover;
            background-repeat: repeat;
        }
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
    <div class="logo">
        <img src="images/Inceptor-Logo.png" alt="logo" width="25%">
    </div>
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
            <h2 class="text-black-50 text-center">Inquiry</h2>
            <hr>
            <form action="new_inquiry.php" method="post" class="shadow-lg forms">
                <div class="form-group">
                    <table class="table table-striped table-responsive-sm table-info">
                        <tr>
                            <td align="right"><label for=""><b>Enquiry date:</b></label></td>
                            <td><input type="date" name="enqdate" class="form-control"></td>
                        </tr>
                        <tr>
                            <td align="right"><label for=""><b>First Name:</b></label></td>
                            <td><input type="text" name="fname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td align="right"><label for=""><b>Middle Name:</b></label></td>
                            <td><input type="text" name="mname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td align="right"><label for=""><b>Last Name:</b></label></td>
                            <td><input type="text" name="lname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td align="right"><label for=""><b>Telephone Number:</b></label></td>
                            <td><input type="tel" name="tel" class="form-control"></td>
                        </tr>
                        <tr>
                            <td align="right"><label for=""><b>Course:</b></label></td>
                            <td><select name="course" id="" class="form-control">
                                    <option value="">====Choose Course====</option>
                                    <option value="iOS Development Course">iOS Development Course</option>
                                    <option value="Digital Media & Video Editing">Digital Media & Video Editing</option>
                                    <option value="Computer Packages">Computer Packages</option>
                                    <option value="Computer Repair & Maintenance Course">Computer Repair & Maintenance Course</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                    <option value="Software Development">Software Development</option>
                                    <option value="Data Science">Data Science</option>
                                    <option value="Cyber Security">Cyber Security</option>
                                    <option value="Artificial Intelligence(AI) & Robotics">Artificial Intelligence(AI) & Robotics</option>
                                    <option value="Android Programming">Android Programming</option>
                                    <option value="Python Programming">Python Programming</option>
                                    <option value="Mobile Repair">Mobile Repair</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td align="right"><label for=""><b>Comments:</b></label></td>
                            <td><textarea name="comments" id="" cols="30" rows="10" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="buttons">
                                    <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                    &nbsp;
                                    &nbsp;
                                    <a href="search_inquiry.php" class="btn btn-secondary">Update</a>   &nbsp;
                                    &nbsp;
                                    <a href="inquiry_delete.php" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
</div>
</body>
</html>