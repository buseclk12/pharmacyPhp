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
    <link rel="shortcut icon" href="./images/favicon.png">
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
  <div class="bg" style="background-image: url('images/ialc2.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h2>
          Register to E-BEN Pharmacy
        </h2>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action=" " method="post">
                <div class="form-group first">
                  <label for="fullName">Full Name</label>
                  <input type="text" class="form-control" placeholder="Your Full Name" name="name" id="name" >
                </div>
                <div>
                <label for="email">E-Mail</label>
                <input type="email" class="form-control"  placeholder="your-email@gmail.com" name="email" id="email" />
              </div>
              <br>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" name="password" id="password">
                  <br>
                  <label for="repassword">Password</label>
                  <input type="password" name="repassword" id="password" class="form-control" placeholder="Your Password Again">
                </div> 
                <div>
                <label for="gender">Gender</label>
                <select class="form-control nice-select wide" name="gender">
                  <option value="" disabled selected>
                    What is your gender
                  </option>
                  <option value="male">
                    Male
                  </option>
                  <option value="female">
                    Female
                  </option>
                  <option value="other">
                    Other
                  </option>
                  <option value="unknown">
                    Prefer not to say
                  </option>
                </select>
              </div>
              <div> <br>
                <label for="city">City</label>
                <input type="text" class="form-control" placeholder="City" name="city" />
              </div> <br>    
              <div class="btn_box">
                <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" style="background-color:orange;border-color:orange" >
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
        if(isset($register)){
          if(!isset($gender) or ($email) == NULL or ($password) == NULL or ($repassword) == NULL){
            echo "<script>alert ('Please complete registration !')</script>";
          }else{
            echo "<script>alert ('Registration is successful\nYou will be directed to the login page!')</script>";  

            
            
            try {
              $flag = true;
              $sql = "SELECT email FROM user";
              $rs = $db->query($sql);
              foreach ($rs as $row) {
                 if($row['email'] == $email){
                  $flag = false;
                 }    
              }
          } catch (PDOException $ex) {
             echo $ex;
          }

            if($flag){
              try {
                $row = array('name'=>$name, 'email' => $email, 'password' =>  password_hash($password, PASSWORD_DEFAULT), 'gender' => $gender, 'city' => $city);
                $sql = "INSERT INTO user (name, email, password, gender, city)";
                $sql .= " VALUES (:name,:email,:password,:gender,:city)";
                $result_status = $db->prepare($sql);
                $result = $result_status->execute($row);
              } catch (PDOException $ex) {
                echo "<script>alert ('Error Occured {$ex}')</script>";
              }

              echo "<script>alert ('USER SUCCESSFULLY ADDED')</script>";
              header('Location: /Applications/MAMP/htdocs/feane 2/login.php');
            }else{
              echo "<script>alert ('USER IS ALREADY THERE')</script>";
            }

          }
        }

    ?>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>