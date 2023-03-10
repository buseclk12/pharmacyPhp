<?php
  require "./db.php" ;
  session_start();
  
  $items = $db->query("select * from ilac")
              ->fetchAll(PDO::FETCH_ASSOC) ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/style3.css" rel="stylesheet" type="text/css"/>
    <script src="./js/jquery-3.1.1.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
</head>
<body style="background:url(./images/ark2.jpeg) no-repeat center center fixed; -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;">
    <div class="container" >
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

            <div class="user_option" >

            <?php
              if(isset($flag)){
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
         
              <div id="wrapper" class="user_option">
                <div id="logo">
                    <img src="">
                </div>
                <div class="icon-wrapper">
                    <a href="cart.php">
                        <img src="images/shop3.png">
                    </a>
                    <span class="header-icons-noti">
                        <?= $_SESSION["count"] ?? 0 ?>
                    </span>
                </div>
        
             
            </div>
            </div>
          </div>
        </nav>
      </div>

      <section>
            <h3 class="h3-heading"  style="color:white; font-size:xx-large;">Medicines</h3>
        </section>  
        <?php foreach($items as $item) : ?>
        <section id="products-wrapper">
       
            <div class="item-wrapper">
                <div class="pict-overlay">
                     <div class="picture">
                        <img src="images/<?= $item['image'] ?>" width="100%">
                    </div>
                    <div class="overlay">
                        <div class="btn-cart">
                            <a href='addcart.php?add=1&id=<?= $item["id"]?>&ajax'>ADD TO CART</a>
                        </div>
                    </div>
                    
                </div>
                <h3><?= $item["name"] ?></h3>
                <p style="font-size:10px ;"><?= $item["description"]?></p>
                <h4>
                    <span class=''>$<?= $item['price']?> </span>
                </h4>
            </div>
           
        </section>
        
        <?php  endforeach; ?>
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

        <script>
          $(".btn-cart a").click(function(e) {
              var url = $(e.target).attr("href");
              $.get(url, function(result) {
                 $(".header-icons-noti").html(result.session.count); 
              });
              e.preventDefault();
          })
        </script>
</body>
</html>