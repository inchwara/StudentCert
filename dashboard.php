<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Dashboard Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="assets/js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>

      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Student Certificates</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Profile</a></li>
              <li><a href="index.php">Logout</a></li>
            </ul>
            <form class="navbar-form navbar-right">
              <input type="text" class="form-control" placeholder="Search...">
            </form>
          </div>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
              <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
              <li><a href="#">Students</a></li>
              <li><a href="#">Reports</a></li>
              <li><a href="generatecert.php">Generate Certificate</a></li>
            </ul>
            <ul class="nav nav-sidebar">
              <li><a href="register.php">Add Student</a></li>
              <li><a href="">Add Courses</a></li>
            </ul>

          </div>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>

            <div class="row placeholders">
              <div class="col-xs-6 col-sm-4 placeholder">
                <div class="panel panel-primary">
                <div class="panel-heading">Total Certificated Issues</div>
                  <div class="panel-body">
                    600
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 placeholder">
                <div class="panel panel-primary">
                  <div class="panel-heading">Enrolled Students</div>
                  <div class="panel-body">
                    230
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 placeholder">
               <div class="panel panel-primary">
                <div class="panel-heading">Courses</div>
                <div class="panel-body">
                  150
                </div>
              </div>
            </div>
           
        </div>

        <h2 class="sub-header">Student Details</h2>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Student Name</th>
                <th>Admission Number</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Course</th>
              </tr>
            </thead>

            <tbody>
            <?php
            include ("config/db.php");
            $res = $conn->query("SELECT * FROM student");
            while($row = $res->fetch_assoc()){

              $name = $row['studentName'];
              $adm = $row['admNumber'];
              $email = $row['email'];
              $phone = $row['phoneNumber'];
              $course = $row['course'];

            ?>
             <tr>
              <td><?php echo $name; ?></td>
              <td><?php echo $adm; ?></td>
              <td><?php echo $email; ?></td>
              <td><?php echo $phone; ?></td>
              <td><?php echo $course; }?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>
