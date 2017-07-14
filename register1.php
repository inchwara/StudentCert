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

    <title>Onlince Cert System - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

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

    <div class="container">

<?php

include('config/db.php');

if(isset($_POST['submit'])){

  $studentName = mysqli_real_escape_string($conn,$_POST['studentName']);
  $adm = mysqli_real_escape_string($conn,$_POST['admNumber']);
  $pass = mysqli_real_escape_string($conn,$_POST['password']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $phoneNumber = mysqli_real_escape_string($conn,$_POST['phoneNumber']);
  $course = mysqli_real_escape_string($conn,$_POST['course']);

  $result = $conn->query("INSERT INTO student (studentName,admNumber,password,email,phoneNumber,course) 
    VALUES ('$studentName','$adm','$pass','$email','$phoneNumber','$course')")or die(mysqli_error($conn));;
  
  if($result){
    header("location: dashboard.php");
  }else{
    echo "Sorry something happened. Please try again.";
  }

}
?>

      <form class="form-signin" method="POST" action="register.php"><br><br><br>
        <h2 class="form-signin-heading">Student Information</h2><br>
        <label for="inputText" class="sr-only">Admission Number</label>
        <input type="text" id="inputText" name="studentName" class="form-control" placeholder="Student Name" required autofocus><br>
        <input type="text" id="inputText" name="admNumber" class="form-control" placeholder="Admission Number" required autofocus><br>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
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
        <button class="btn btn-lg btn-primary btn-block" type="submit"  name="submit">Create Account</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
