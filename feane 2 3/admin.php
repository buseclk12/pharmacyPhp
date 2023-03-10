<?php 
  require "./db.php" ;
  session_start();
  extract($_GET);
  $items = $db->query("select * from ilac")->fetchAll(PDO::FETCH_ASSOC) ;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="./css/style3.css" rel="stylesheet" type="text/css"/>
        <script src="./js/jquery-3.1.1.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/responsive.css" rel="stylesheet" />
        <script src="./js/jquery-3.4.1.min.js" type="text/javascript"></script>
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
                <a class="nav-link"  href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="order2.php">Medicines</a>
              </li>
            </ul>

            <div class="user_option" >

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
       
            </div>
             
            </div>
            </div>
          </div>
        </nav>
      </div>
  
        <section class="container">
            <table class="table-shopping-cart">
                <tr class="table-head">
                    <th class="column-1"></th>
                    <th class="column-2" style="color:white;">Product</th>
                    <th class="column-3" style="color:white;">Price</th>
                    <th class="column-4 p-l-70" style="color:white;">Description</th>
                    <th class="column-5 p-l-70" style="color:white;">Edit</th>
                </tr>
                <?php foreach($items as $item) {?>
                <tr class="table-row">
                            <td class="column-1">
                               <img src="images/<?=$item['image']?>">
                            </td>
                            <td class="column-2"><?=$item['name'] ?></td>
                            <td class="column-3">$<?=$item['price'] ?></td>
                            <td class="column-4"><?=$item['description']?></td>
                            <td class="column-5"><a href='?delId=<?=$item['id']?>' class="delete"><img src='./images/del.png'></a></td>
                           
                         </tr>
                <?php } ?>
            </table> 
        </section>
        

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
  <?php
                           
                           if(isset($delId)){
                             //$id = $_GET["id"];
                             $stmt = $db->prepare("DELETE FROM ilac WHERE id=?");
                             $stmt->execute([$delId]);

                             //echo "<script>alert('deleted')</script>";
                             header('Location: http://localhost/feane%202/admin.php?');
                           }

                          ?>

        
    </body>
</html>