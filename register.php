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
          <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-2 main">

            <div class="row placeholders">
   
        </div>

        <div>
        <form class="form-signin" method="POST" action="register.php"><br><br><br>
        <h2 class="form-signin-heading">Student Information</h2><br>
        <label for="inputText" class="sr-only">Admission Number</label>
        <input type="text" id="inputText" name="studentName" class="form-control" placeholder="Student Name" required autofocus><br>
        <input type="text" id="inputText" name="admNumber" class="form-control" placeholder="Admission Number" required autofocus><br>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required><br>
        <input type="text" id="inputText" name="email" class="form-control" placeholder="Email" required autofocus><br>
        <input type="text" id="inputText" name="phoneNumber" class="form-control" placeholder="Phone Number" required autofocus><br>
  
        <select name="course" class="form-control">
  <option value="-">Select Course</option>
  <option value="Business Management">Business Management</option>
  <option value="Supply Chain Managemen">Supply Chain Management</option>
  <option value="Software Engineering">Software Engineering</option>
  <option value="Sale and Marketing">Sale and Marketing</option>
  <option value="Human Resourse Management">Human Resourse Management</option>
  <option value="Aviation Maintenance">Aviation Maintenance</option>
</select><br>
        
  <div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"  name="submit">Add Account</button>
      </form>
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
