<?php
include 'config/db.php';

$studentID = $_POST['studentID'];

$res = $conn->query("SELECT * FROM student WHERE studentID = $studentID");
           
$row = $res->fetch_assoc();
              $name = $row['studentName'];
              $istudentID = $row['studentID'];
              $adm = $row['admNumber'];
              $phone = $row['phoneNumber'];
              $course = $row['course'];

              echo $name;

?>

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

  <title>Online Cert System</title>

  <!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="cover.css" rel="stylesheet">

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

        <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"></h3>
              
            </div>
          </div>

          <div style="border-style: dotted;
  border-width: 4px;
  border-color: black" class="inner cover">
          <img src="logo.png"">
            <h1 class="cover-heading">ARIFU UNIVERSITY</h1><br>

            <h3>This Degree is awarded to</h3>
            <h2><?php echo $name;?></h2>

            <h3>For successfully completing the course<h3>
            <h3><?php echo $course;?><h3>
            <h4>Presented on <?php echo date("l jS \of F Y ")?></h4>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p><a href="dashboard.php">Home</a></p>
            </div>
          </div>

        </div>

      </div>

    </div>
