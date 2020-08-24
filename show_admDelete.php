
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Admission</title>
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
    <h2 class="text-center text-danger">Delete Admission</h2>
    <?php
    $conn=mysqli_connect("localhost","root","","institutionsystemdb");
    if (!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }

    $adm=mysqli_real_escape_string($conn,$_POST['admno']);
    $sql="SELECT * FROM admissions WHERE admission_no='$adm'";
    $result=$conn->query($sql);

    if ($result->num_rows>0){
        while ($row=$result->fetch_assoc()){

            ?>
            <form action="delete_adm.php" method="post" class="shadow">
                <div class="form-group">
                    <table class="table table-striped table-secondary">
                        <tr>
                            <td><label for=""><b>Admission Number</b></label></td>
                            <td><input type="number" name="Amdmno"  class="form-control"  value="<?php echo $row['admission_no']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>Admission Date</b></label></td>
                            <td><input type="date" name="ADmdate"  class="form-control"  value="<?php echo $row['adm_date']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>First Name</b></label></td>
                            <td><input type="text" name="FName"  class="form-control"  value="<?php echo $row['first_name']; ?>"></td>
                        </tr>
                        <tr>
                            <td> <label for=""><b>Middle Name</b></label></td>
                            <td><input type="text" name="MName"  class="form-control" value="<?php echo $row['middle_name']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>Last Name</b></label></td>
                            <td><input type="text" name="LName"  class="form-control"  value="<?php echo $row['last_name']; ?>"></td>
                        </tr>
                        <tr>
                            <td> <label for="gender"><b>Gender</b></label><br></td>
                            <td> <input type="text" name="gender" class="form-control"  value="<?php echo $row['gender']; ?>" >

                        </tr>
                        <tr>
                            <td><label for=""><b>Date of Birth</b></label></td>
                            <td><input type="date" name="dOb"  class="form-control"  value="<?php echo $row['dob']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>Postal Address</b></label></td>
                            <td><input type="text" name="PAddress" class="form-control"  value="<?php echo $row['postal_add']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>Course Title</b></label></td>
                            <td><input type="text" name="Course_title"   class="form-control"   value="<?php echo $row['course_title']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>Prefferd Mode of Stude</b></label></td>
                            <td> <input type="text" name="Pmode" class="form-control" value="<?php echo $row['prefferd_mode']; ?>"> </td>
                        </tr>
                        <tr>
                            <td><label for=""><b>School Attended</b></label></td>
                            <td><input type="text" name="School"   class="form-control"   value="<?php echo $row['school_att']; ?>" ></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>Year From</b></label></td>
                            <td><input type="date" name="Yfrom"   class="form-control"   value="<?php echo $row['year_from']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>Year To</b></label></td>
                            <td><input type="date" name="YTo"   class="form-control"   value="<?php echo $row['year_to']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>Maths Grade</b></label></td>
                            <td> <input type="text" name="MGrade" class="form-control" value="<?php echo $row['math_grade']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>English Grade</b></label></td>

                            <td> <input type="text" name="EGrade" class="form-control" value="<?php echo $row['english_grade']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>Overall Grade</b></label></td>

                            <td><input type="text" name="OGrade" class="form-control" value="<?php echo $row['overall_grade']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>Next of Kin</b></label></td>
                            <td>  <input type="text" name="Nok"   class="form-control"   value="<?php echo $row['next_kin']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>Next of Kin Telephone Number</b></label></td>
                            <td><input type="tel" name="Ktel"  class="form-control"   value="<?php echo $row['kin_tel']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>Relationship</b></label></td>
                            <td>  <input type="text" name="Relation" class="form-control" value="<?php echo $row['relation']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>Reason of Choice</b></label></td>

                            <td>  <input type="text" name="Comments" class="form-control" value="<?php echo $row['reason']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label for=""><b>How did you here about us?</b></label></td>

                            <td><input type="text" name="Reason" class="form-control" value="<?php echo $row['information']; ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="buttons">
                                    <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>
            </form>
            <?php
        }
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>




