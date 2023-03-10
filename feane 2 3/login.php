<?php

  extract($_GET);
  extract($_POST);

  try {
    $db = new PDO("mysql:host=localhost;dbname=pharmacy;charset=utf8mb4", "std", "");
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $ex) {
    echo "{$ex}";
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-BEN Pharmacy</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
<section class="book_section layout_padding">
  

<div class="d-md-flex half">
  <div class="bg" style="background-image: url('images/ver.webp');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3>Login to <strong>Account</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="login.php" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="email" placeholder="your-email@gmail.com" id="username" required>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Your Password" id="password" required>
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                    <input style="background-color:red" type="checkbox" checked="checked"/>
                    <div class="control__indicator" style="background-color:red"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                </div>
                <div class="btn_box">
                <input type="submit" value="Login" name="login" style="background-color:red" class="btn btn-block btn-primary">
              </div>
              </form> <br>
              <a href="./register.php"><button type="submit"style="background-color:red" value="Register" class="btn btn-block btn-primary">Register</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </section>
</body>
</html>


<?php
  if (isset($login)){
      $sql = 'SELECT email, password FROM user';
      $rs = $db->query($sql);
      $admin = "admin@gmail.com";
      foreach ($rs as $row) {
        if ($email == $admin && $password == 1234) {
          header('Location: http://localhost/feane 2/admin.php');
        } else if ($row['email'] == $email && $row['password'] == $password) {
          echo "<script>alert ('Login is successfull')</script>";
          header('Location: http://localhost/feane%202/order2.php');
        }
        
      }
  }

?>