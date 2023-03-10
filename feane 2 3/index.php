<?php
  extract($_GET);

  if(isset($email)){
    $flag = true;
  }else{
    $flag = false;
  }

?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="./images/favicon.png">
  <title> E-BEN Pharmacy </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="./images/ark2.jpeg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span style="color: orange; font-family:Georgia, 'Times New Roman', Times, serif; text-align:'center'">
              E-BEN Pharmacy
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="order2.php">Medicines</a>
              </li>
            </ul>

            <div class="user_option">

            <?php
              if($flag){
                echo "<a href='' class='user_link'>";
                echo "<i aria-hidden='true'>{$email}</i>";
                echo "</a>";
              }else{
                echo "<a href='./login.php' class='user_link'>";
                echo "<i class='fa fa-user' aria-hidden='true'></i>";
                echo "</a>";
              }
            
            ?>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="./login.php" class="order_online">
                Order
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1  style="color: black; font-family:Georgia, 'Times New Roman', Times, serif;">
                      Pharmacy
                    </h1>
                    <p style="color: black;">
                     <b> Online pharmacy is with you whenever you need it. Every medicine you need is at your door with a click.</b>
                    </p>
                    <div class="btn-box">
                      <a href="./login.php" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1  style="color: white; font-family:Georgia, 'Times New Roman', Times, serif;">
                      Pharmacy
                    </h1>
                    <p>
                    Online pharmacy is with you whenever you need it. Every medicine you need is at your door with a click.
                    </p>
                    <div class="btn-box">
                      <a href="./login.php" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1 style="color: white; font-family:Georgia, 'Times New Roman', Times, serif;">
                      Pharmacy
                    </h1>
                    <p>
                    If you want to get information about how we work.
                    </p>
                    <div class="btn-box">
                      <a href="#" class="btn1">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container" >
      <div class="container ">
        <div class="row">
          <div class="col-md-6  ">
            <div class="box "  style="background-color: orange;">
              <div class="img-box">
                <img src="images/kk.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h5 style="font-family:  Georgia, 'Times New Roman', Times, serif;">
                  Healthy Weeks
                </h5>
                <h6 style="font-family:  Georgia, 'Times New Roman', Times, serif;">
                  <span>20%</span> Off
                </h6>
                <a href="./order2.php" style="background-color: #87CEFA;">
                  Get Your Vitamins
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6  ">
            <div class="box " style="background-color: orange;">
              <div class="img-box">
                <img src="images/kk2.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h5 style="font-family:  Georgia, 'Times New Roman', Times, serif;">
                  Self-care days
                </h5>
                <h6 style="font-family:  Georgia, 'Times New Roman', Times, serif;">
                  <span>15%</span> Off
                </h6>
                <a href="./order2.php" style="background-color: #87CEFA;">
                  Check your self-care products
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container" >
      <div class="heading_container heading_center" style="background-color: orange ; color:white;">
        <h2 style="font-family:Georgia, 'Times New Roman', Times, serif;">
          Medicines
        </h2>
      </div>

      <ul class="filters_menu" style="color:#DAA520;  background-color:aliceblue;">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".painkiller">Pain Killer</li>
        <li data-filter=".antibiotic">Antibiotics</li>
        <li data-filter=".vitamin">Vitamins</li>
      </ul>

      <div class="filters-content">
        <div class="row grid" style=" background-color:aliceblue">
          <div class="col-sm-6 col-lg-4 all antibiotic">
            <div class="box" style="background-color: orange;">
              <div>
                <div class="img-box" style="background-color: white; border-radius:0%">
                  <img src="images/med1.png" alt="">
                </div>
                <div class="detail-box"  style="background-color: white;">
                  <h5 style="color:black;">
                    Augmentin
                  </h5>
                  <div class="options">
                    <h6 style="color:black;">
                      $20
                    </h6>
                    <div class="btn-box" >
                      <a href="./login.php" style="background-color: orange; border:none; border-radius: 2px; width: 250px;">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all painkiller">
            <div class="box">
              <div>
                <div class="img-box" style="background-color: white;border-radius:0%">
                  <img src="images/med2.png" alt="">
                </div>
                <div class="detail-box" style="background-color: white;">
                  <h5 style="color:black;">
                    Arveles
                  </h5>
                  <div class="options">
                    <h6 style="color:black;">
                      $15
                    </h6>
                    <div class="btn-box">
                      <a href="./login.php" style="background-color: orange; border:none; border-radius: 2px; width: 250px;">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all antibiotic">
            <div class="box">
              <div>
                <div class="img-box" style="background-color: white;border-radius:0%">
                  <img src="images/med3.png" alt="">
                </div>
                <div class="detail-box" style="background-color: white;">
                  <h5 style="color:black;">
                    Pharmaton
                  </h5>
                  <div class="options">
                    <h6 style="color:black;">
                      $17
                    </h6>
                    <div class="btn-box">
                      <a href="./login.php" style="background-color:orange; border:none; border-radius: 2px; width: 250px;">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all vitamin">
            <div class="box">
              <div>
                <div class="img-box" style="background-color: white;border-radius:0%">
                  <img src="images/augmentin.png" alt="">
                </div>
                <div class="detail-box" style="background-color: white;">
                  <h5 style="color:black;">
                    Augmentin
                  </h5>
                  <div class="options">
                    <h6 style="color:black;">
                      $18
                    </h6>
                    <div class="btn-box">
                      <a href="./login.php" style="background-color: orange; border:none; border-radius: 2px; width: 250px;">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all vitamin">
            <div class="box">
              <div>
                <div class="img-box" style="background-color: white;border-radius:0%">
                  <img src="images/med5.png" alt="">
                </div>
                <div class="detail-box" style="background-color: white;">
                  <h5 style="color:black;">
                  Majezik
                  </h5>
                  <div class="options">
                    <h6 style="color:black;">
                      $10
                    </h6>
                    <div class="btn-box">
                      <a href="./login.php" style="background-color: orange; border:none; border-radius: 2px; width: 250px;">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all antibiotic">
            <div class="box">
              <div>
                <div class="img-box" style="background-color: white;border-radius:0%">
                  <img src="images/amoklavin.png" alt="">
                </div>
                <div class="detail-box" style="background-color: white;">
                  <h5 style="color:black;">
                    Amoklavin
                  </h5>
                  <div class="options">
                    <h6 style="color:black;">
                      $15
                    </h6>
                    <div class="btn-box">
                      <a href="./login.php" style="background-color:orange; border:none; border-radius: 2px; width: 250px;">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all painkiller">
            <div class="box">
              <div>
                <div class="img-box" style="background-color: white;border-radius:0%">
                  <img src="images/med4.png" alt="">
                </div>
                <div class="detail-box" style="background-color: white;">
                  <h5 style="color:black;">
                    Majezik
                  </h5>
                  <div class="options">
                    <h6 style="color:black;">
                      $12
                    </h6>
                    <div class="btn-box">
                      <a href="./login.php" style="background-color:orange; border:none; border-radius: 2px; width: 250px;">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all painkiller">
            <div class="box">
              <div>
                <div class="img-box" style="background-color: white;border-radius:0%">
                  <img src="images/apranax.jpeg" alt="">
                </div>
                <div class="detail-box" style="background-color: white;">
                  <h5 style="color:black;">
                    Apranax
                  </h5>
                  <div class="options">
                    <h6 style="color:black;">
                      $14
                    </h6>
                    <div class="btn-box">
                      <a href="./login.php" style="background-color: orange; border:none; border-radius: 2px; width: 250px;">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all vitamin">
            <div class="box">
              <div>
                <div class="img-box" style="background-color: white;border-radius:0%">
                  <img src="images/Supradyn.jpeg" alt="">
                </div>
                <div class="detail-box" style="background-color: white;">
                  <h5 style="color:black;">
                    Supradyn
                  </h5>
                  <div class="options">
                    <h6 style="color:black;">
                      $10
                    </h6>
                    <div class="btn-box">
                      <a href="./login.php" style="background-color: orange; border:none; border-radius: 2px; width: 250px;">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="./login.php" style="background-color:orange; color:white;">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- about section -->

  <section class="about_section layout_padding" style="background-color: orange;">
    <div class="container  " >

      <div class="row" >
        <div class="col-md-6 " >
          <div class="img-box">
            <img src="images/eben_pharmacy.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                We Are E-BEN Pharmacy
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="" style="background-color: white; color:#87CEFA">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

 
  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <br>
        <h2 style="font-family:Georgia, 'Times New Roman', Times, serif ;">
          What Says Our Customers
        </h2>
      </div>
      <div class="carousel-wrap row " >
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box" >
              <div class="detail-box"  style="background-color:#DAA520 ;">
                <p style="font-size:large;">
                Customer Service has been amazing. The system is reliable and any issues I have had have been handled quickly. 
                </p>
                <h6>
                  Moana Michell
                </h6>
              </div>
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box" style="background-color:#DAA520 ;">
                <p style="font-size:large ;">
                Efficient service, excellent Customer Service and Support.Thank you for everything.
                </p> 
                <h6>
                  Mike Hamell
                </h6>

              </div>
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4 style="font-family:Georgia, 'Times New Roman', Times, serif ;">
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span  style="font-family:Georgia, 'Times New Roman', Times, serif ;">
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  ebenpharmacy@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo"  style="font-family:Georgia, 'Times New Roman', Times, serif ;">
              E-BEN Pharmacy
            </a>
            <p>
            Online pharmacy is with you whenever you need it. Every medicine you need is at your door with a click
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4  style="font-family:Georgia, 'Times New Roman', Times, serif ;">
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>