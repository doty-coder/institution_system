<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-3.4.1.js"></script>

    <style>
        hr{
            border: 2px solid lightgoldenrodyellow;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">

    <div class="row">

        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3 ">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="logout.php">
                            Home <span class="sr-only">(current)</span>
                        </a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inquiries.php">Inquiries</a>
                        <hr>
                        <a class="nav-link" href="search_adm.php">Update inquiries</a>
                        <hr>
                        <a class="nav-link" href="delete_inq.php">Delete Inquiries</a>
                        <hr>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <div class="logo">
                    <img src="images/Inceptor-Logo.png" alt="logo" width="">
                </div>


            </div>

            <h2 class="text-black-50">Inquiries Department</h2>
            <div class="container">
                <div class="form ">
                    <div class="form-group">
                        <div class="panel panel-default ">
                            <div class="panel-heading">
                                <h4 class="text-center">INQUIRY REPORT</h4>
                                <?php
                                $conn=mysqli_connect("localhost","root","","institutionsystemdb");
                                if (!$conn){
                                    die("Connection Failed:".mysqli_connect_error());
                                }

                                $result=mysqli_query($conn,"SELECT * FROM inquiries");

                                echo "<table class='table table-striped table-bordered table-responsive-sm'>
  <tr>
  <th>Inquiry Id</th>
  <th>Inquiry Date</th>
  <th>First Name</th>
  <th>Middle Name</th>
  <th>Last Name</th>
  <th>Telephone number</th>
  <th>Course</th>
  <th>Comments</th>
  </tr>";

                                while ($row=mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo "<td>". $row['enqid'] . "</td>";
                                    echo "<td>". $row['enqdate'] . "</td>";
                                    echo "<td>". $row['first_name'] . "</td>";
                                    echo "<td>". $row['middle_name'] . "</td>";
                                    echo "<td>". $row['last_name'] . "</td>";
                                    echo "<td>". $row['tel'] . "</td>";
                                    echo "<td>". $row['course'] . "</td>";
                                    echo "<td>". $row['comments'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                mysqli_close($conn);
                                ?>





                            </div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

</html>

