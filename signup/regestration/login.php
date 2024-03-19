<?PHP
  
$login=0;
$invalid=0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include "connect.php";
  
  $email= $_POST['email'];
  $pass= $_POST['Password'];


  $sql = "SELECT * 
  FROM `registration`
   WHERE email='$email' 
   AND password='$pass'";


  $result=mysqli_query($con,$sql);
  if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
    $login =1;

    //session start
    session_start();
    $_SESSION['email'] = $email;
    header('location:home1.php');

      // echo"User already exist";
    }else{

     $invalid=1;
      
  }
 }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


<style>
body{
  background-size: cover;
  justify-content: center;
  align-items: center;
  background-repeat: no-repeat;
  background-position: center;
  background-image: url(Free-Website-BAckgrounds1.jpg);
  overflow:hidden;
}

</style>


<?php

if ($login){
  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> you are successfully logged in!
  <button type="button" class="btn-close"
   data-bs-dismiss="alert" aria-label="Close">
   </button>
</div>';
}

?>


<?php

if ($invalid){
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>failed</strong > invalied!
  <button type="button" class="btn-close"
   data-bs-dismiss="alert" aria-label="Close">
   </button>
</div>';
}

?>

  <section class="vh-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                  <form action="login.php" method='POST' class="mx-1 mx-md-4">

                    

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Your Email</label>
                        <input id="email_field" type="email" name="email" class="form-control" required>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" >Password</label>
                        <input id="password" type="Password" name="Password" class="form-control" required />
                        

                      </div>
                    </div>

                  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button name="submit" type="submit" class="btn btn-primary btn-lg">Login</button>
                    </div>

                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="draw.png" class="img-fluid" alt="Sample image">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>