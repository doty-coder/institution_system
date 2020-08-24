    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admissions</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">
        <script src="bootstrap/js/jquery-3.4.1.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <style>
            form{
                background: lightblue;
                border-radius: 20px;
                padding: 20px;
                margin: 10px;
            }
            input[type=text],input[type=date],select {
                margin-bottom: 10px;
            }
            label{
                color: darkred;
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
    <div class="row">
        <div class="col-sm-6">  <hr>
            <div class="logo">
                <img src="images/Inceptor-Logo.png" alt="">
            </div>
            <hr>
            <h4 class="text-info">General admission requirements</h4>
            <ol>
                <li>KCSE result slip / Certificate or equivalent</li>
                <li>Two (2) colored passport size photographs</li>
                <li>Next of Kin Information</li>
                <p> Application forms can be picked from the college, downloaded from our website or made online.</p>
            </ol>
            <hr>
            <h4 class="text-info">This is how you get admitted into any of the programs we offer</h4>
            <ol>
                <li>Check the entry requirements</li>
                <li>Select the Course you are interested in</li>
                <li> Choose the preferred mode of study (Day, Evening or Weekend)</li>
                <li>Complete and submit application</li>

            </ol>
        </div>

        <div class="col-sm-6">
            <hr>
            <h2 class="text-center text-black-50">STUDENT ADMISSION FORM</h2>
            <hr>
            <form action="new_admmission.php" method="post" class="shadow">
                <div class="form-group">
                    <label for=""><b>Admission Date</b></label>
                    <input type="date" name="admdate" placeholder="Join Date" class="form-control" required>
                    <input type="text" name="Fname" placeholder="Your First Name here" class="form-control" required>
                    <input type="text" name="Mname" placeholder="Your Middle Name here" class="form-control" required>
                    <input type="text" name="Lname" placeholder="Your Last Name here" class="form-control" required>
                    <label for="gender"><b>Gender</b></label><br>
                    <input type="radio" name="gender" value="female"  >female<br>
                    <input type="radio" name="gender"  value="male" >Male <br>
                    <label for=""><b>Date of Birth</b></label>
                    <input type="date" name="dob" placeholder="Date Of Birth" class="form-control" required >

                    <input type="text" name="Paddress" class="form-control" placeholder="Your Postal Address" required>

                    <input type="text" name="course_title" placeholder="Preferred Course" class="form-control" required>
                    <label for=""><b>Preferred Mode of Study</b></label>
                    <select name="pmode" id="" class="form-control">
                        <option value="">==Select Here==</option>
                        <option value="Part-Time">Part-Time</option>
                        <option value="Evening">Evening</option>
                        <option value="Saturday">Saturday</option>
                    </select>
                    <input type="text" name="school" placeholder="Enter your former school" class="form-control" required >
                    <label for=""><b>Year From</b></label>
                    <input type="date" name="yfrom" placeholder="Starting Year" class="form-control" required>
                    <label for=""><b>Year To</b></label>
                    <input type="date" name="yTo" placeholder="End Year" class="form-control" required>
                    <label for=""><b>Maths Grade</b></label>
                    <select name="mGrade" id="" class="form-control">
                                        <option value="">==Select Grade==</option>
                                        <option value="A">A</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B">B</option>
                                        <option value="B-">B-</option>
                                        <option value="C+">C+</option>
                                        <option value="C">C</option>
                                        <option value="C-">C-</option>
                                        <option value="D+">D+</option>
                                        <option value="D-">D-</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>

                                 <label for=""><b>English Grade</b></label>
                                 <select name="eGrade" id="" class="form-control">
                                        <option value="">Select Grade</option>
                                        <option value="A">A</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B">B</option>
                                        <option value="B-">B-</option>
                                        <option value="C+">C+</option>
                                        <option value="C">C</option>
                                        <option value="C-">C-</option>
                                        <option value="D+">D+</option>
                                        <option value="D-">D-</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                             <label for=""><b>Overall Grade</b></label>
                                  <select name="oGrade" id="" class="form-control">
                                        <option value="">Select Grade</option>
                                        <option value="A">A</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B">B</option>
                                        <option value="B-">B-</option>
                                        <option value="C+">C+</option>
                                        <option value="C">C</option>
                                        <option value="C-">C-</option>
                                        <option value="D+">D+</option>
                                        <option value="D-">D-</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>


                                 <input type="text" name="nok" placeholder="Next of Kin" class="form-control" required>


                                <td><input type="tel" name="ktel" placeholder="Next of Kin Telephone Number" class="form-control" required>

                                   <label for=""><b>Relationship</b></label>
                                  <select name="relation" id="" class="form-control">
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Guardian">Guardian</option>
                                        <option value="Other">Other</option>
                                    </select>

                                 <label for=""><b>Reason of Choice</b></label>
                                 <textarea name="comments" id="" cols="30" rows="3" class="form-control"></textarea>

                                 <label for=""><b>How did you here about us?</b></label>
                                 <select name="reason" id="" class="form-control">
                                        <option value="Walk-in Enquiry">Walk-in Enquiry</option>
                                        <option value="Social Media">Social Media</option>
                                        <option value="Student">Student</option>
                                        <option value="Sign Board">Sign Board</option>
                                        <option value="Friend">Friend</option>
                                        <option value="TV/Radio">TV/Radio</option>
                                        <option value="Marketing/Sales Staff">Marketing/Sales Staff</option>
                                        <option value="Others">Others</option>
                                    </select>

                    </div>

                    <div class="buttons">
                        <button type="submit" name="submit" class="btn btn-info">Add Student</button>
                        &nbsp;
                        &nbsp;
                        <a href="search_adm.php" class="btn btn-secondary">Update</a>   &nbsp;
                        &nbsp;
                        <a href="adm_Delete.php" class="btn btn-danger">Delete</a>
                    </div>
                    <hr>
                    <hr>
            </form></div>
    </div>

    </div>

    </body>
    </html>

