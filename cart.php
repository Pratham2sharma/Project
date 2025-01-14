<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear Selling Website</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Owl Carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custome CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>
</head>
<body>

    <!-- Start Header -->
    <?php ob_start(); ?>
    <header id="header">
      <div class="strip d-flex justify-content-between px-4 py-1" style="background-color: #c1003c;">
          <p class="font-rale font-size-12 text-light m-0">Welcome to this footwear Selling Website</p>
          <div class="font-rale font-size-14">
              <a href="registration.php" class="px-3 border-right border-left text-light">Login</a>
          </div>
      </div>

      <!-- Start Primary Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #e40046;">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Footwear Shoppee</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="mens.php">Mens</a>
                    <a class="dropdown-item" href="kids.php">Kids</a>
                    <a class="dropdown-item" href="sports.php">Sports</a>
                    <a class="dropdown-item" href="sneakers.php">Sneakers</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Category<i class="fas fa-chevron-down"></i></a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="refurbished.html">Refurbished</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sell_here.html">Sell here</a>
                </li>
              </ul>
              <form action="#" class="font-size-14 font-rale">
                  <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                      <span class="font-size-15 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                      <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData(table:'cart')); ?></span>
                  </a>
              </form>
            </div>
          </div>
      </nav>
      <!-- End Primary Navigation -->  
  </header>
  <!-- End Header -->

    <!-- Start Main site -->
    <main id="main-site">

        <!-- Shopping cart section -->
        <?php
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['delete-cart-submit'])){
              $deletedrecord = $Cart->deleteCart($_POST['item_id']);
            }
          }
        ?>
        <section id="cart" class="py-3 mb-5">
            <div class="container-fluid w-75">
                <h5 class="font-baloo font-size-20">Shopping Cart</h5>

                <!-- Shopping Cart Items -->
                <div class="row">
                    <div class="col-sm-9">
                      <?php
                        foreach($product->getData(table:'cart') as $item):
                          $cart = $product->getProduct($item['item_id']);
                          $subTotal[] = array_map(function($item){
                      ?>
                        <!-- Cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image']??"./assets/product/1.jpg" ?>" style="height: 120px;" alt="cart-1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name']??"Unknown"; ?></h5>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <!-- product quantity -->
                                <div class="qty d-flex pt-2">

                                    <form method="post">
                                      <input type="hidden" value="<?php echo $item['item_id']??0; ?>" name="item_id">
                                    <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                    </form>
                                </div>
                                
                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    Rs.<span class="product_price"><?php echo $item['item_price']??0; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- End Cart item -->
                      <?php
                          return $item['item_price'];
                          },$cart);   //closing array_map function
                        endforeach;
                      ?>
                    </div>
                     <!-- subtotal section-->
                     <div class="col-sm-3">
                      <div class="sub-total border text-center mt-2">
                          <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                          <div class="border-top py-4">
                              <h5 class="font-baloo font-size-20">Subtotal (<?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">Rs.<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                              <a href="payment.php"><button type="submit"  class="btn btn-warning mt-3">Proceed to Buy</button></a>
                          </div>
                      </div>
                  </div>
                  <!-- !subtotal section-->
                </div>
                <!-- End Shopping Cart Items -->
            </div>
        </section>
        <!-- End Shopping cart section -->

    </main>
    <!-- End Main site -->

    <!-- Start Footer -->
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
          <div class="row d-flex justify-content-around">
            <div class="col-lg-3 col-12">
              <h4 class="font-rubik font-size-20">Footwear Shoppee</h4>
              <p class="font-size-14 font-rale text-white-50">Give your feet the beauty treatment that only brand new shoes can give.</p>
            </div>
            <div class="col-lg-4 col-12">
              <h4 class="font-rubik font-size-20">Feedback</h4>
              <form action="feedback.php" method="post" class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="username" name="username">
                  <br>
                  <textarea class="form-control" placeholder="Description" name="Description1"></textarea>
                </div>
                <div class="col">
                  <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>
              </form>
            </div>
            <div class="col-lg-2 col-12">
              <h4 class="font-rubik font-size-20">Information</h4>
              <div class="d-flex flex-column flex-wrap">
                <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
              </div>
            </div>
            <!-- <div class="col-lg-2 col-12">
              <h4 class="font-rubik font-size-20">Account</h4>
              <div class="d-flex flex-column flex-wrap">
                <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                <a href="#" class="font-rale font-size-14 text-white-50 pb-1">WishList</a>
                <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newsletters</a>
              </div>
            </div> -->
          </div>
        </div>
      </footer>
      <div class="copyright text-center bg-dark text-white py-2">
        <p class="font-rale font-size-14">&copy; Copyrights 2022. Designed by Pratham, Sonu and Suresh.</p>
      </div>
    <!-- End Footer -->
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Owl Carousel Js file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!-- isotope plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custome JavaScript -->
    <script src="./app.js"></script>
</body>
</html>