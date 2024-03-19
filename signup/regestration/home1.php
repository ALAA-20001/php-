<?php

//session_start();
session_start();
if (!isset($_SESSION["email"])) {
  header('location:login.php');
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <style>
    body {
      font: 30px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
      background-size: cover;
      justify-content: center;
      align-items: center;
      background-repeat: no-repeat;
      background-position: center;
      background-image: url(Free-Website-BAckgrounds1.jpg);
      overflow: hidden;

    }

    p {
      font-size: 20px;
    }

    .margin {
      margin-bottom: 45px;
    }

    .bg-1 {
      background-color: #1abc9c;
      /* Green */
      color: #ffffff;
    }

    .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
      overflow: hidden;

      img {
        width: 400px;
        height: 300px;
      }
    }
  </style>


  <!-- First Container -->
  <div class="container-fluid bg-light text-center">
    <h1 class="margin">hellooo!
      <br>
      <?php echo $_SESSION['email']; ?>
    </h1>
    <img src="8e8f2c1229d5db06f13e23619589cd-unscreen.gif" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="400"
      height="350">
    <h3>We are happy to have you with us...</h3>

    <a href="logout.php" class="btn btn-primary text-light  mt-">Logout</a>
  </div>


</body>

</html>