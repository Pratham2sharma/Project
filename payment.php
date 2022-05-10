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
    <link rel="stylesheet" href="payment.css">

    <?php
    //require functions.php file
    require('functions.php');
    
    ?>
</head>
<body>
    <!-- Start Header -->
    <?php ob_start(); ?>
    <header id="header">
      <div class="strip d-flex justify-content-between px-4 py-1" style="background-color: #c1003c;">
          <p class="font-rale font-size-12 text-light m-0">Welcome to this footwear Selling Website</p>
          <div class="font-rale font-size-14">
          
          <a class="nav-link dropdown-toggle px-3 border-right text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
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
                  <a class="nav-link" href="#blogs">Blog</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Category<i class="fas fa-chevron-down"></i></a>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link" href="refurbished.html">Refurbished</a>
                </li> -->
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
  <!-- <div class="backg">
  <div class="payment">
    <form action="payment_back.php" method="post" class="form">
      <div class="row">
        <div class="col">
          <h3 class="title">Billing Address</h3>
          <hr>
          <div class="inputbox">
            <span>Full Name :</span>
            <input type="text" placeholder="Enter your name" name="Fname">
          </div>
          <div class="inputbox">
            <span>Email :</span>
            <input type="email" placeholder="abc@example.com" name="email">
          </div>
          <div class="inputbox">
            <span>Address :</span>
            <input type="text" placeholder="room - street - area" name="Address1">
          </div>
          <div class="inputbox">
            <span>City :</span>
            <input type="text" placeholder="City" name="city">
          </div>
          <div class="flex">
          <div class="inputbox">
            <spam> State:</span>
              <input type="text" placeholder="State" name="state1">
          </div>
          <div class="inputbox">
            <span>Zip Code :</span>
            <input type="text" placeholder="123-456" name="zip code">
          </div>
        </div>
        </div>
        </div>
      </div>
      <input type="submit" value="Proceed" class="submit-btn">
    </form>
  </div>
</div> -->
<!-- Main site -->
<div class="row mt-3 mx-3 mb-4" style="margin-top:25px ;">
  <div class="col-md-3">
    <div style="margin-top: 50px; margin-left: 10px;" class="text-center">
      <!-- <i id="animationDemo" data-mdb-animation="slide-right" data-mdb-toggle="animation"
        data-mdb-animation-reset="true" data-mdb-animation-start="onScroll"
        data-mdb-animation-on-scroll="repeat" class="fas fa-3x fa-shipping-fast text-white"></i>
      <h3 class="mt-3 text-white">Welcome</h3>
      <p class="white-text">You are 30 seconds away from compleating your order!</p> -->
      <img src="./assets/delivery.png" alt="" id="delivery">
    </div>
    <div class="text-center">
      <a href="cart.php"><button type="submit" class="btn btn-white btn-rounded back-button">Go back</button></a>
    </div>


  </div>
  <div class="col-md-9 justify-content-center">
    <div class="card card-custom pb-4">
      <div class="card-body mt-0 mx-5">
        <div class="text-center mb-3 pb-2 mt-3">
          <h4 style="color: #495057 ;">Delivery Details</h4>
        </div>

        <form action="delivery.php" method="post" class="mb-0">

          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form9Example1" name="Fname" class="form-control input-custom" />
                First name
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form9Example2" name="Lname" class="form-control input-custom" />
                Last name
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form9Example3" name="City" class="form-control input-custom" />
                City
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form9Example4" name="zip_code" class="form-control input-custom" />
                Zip code
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form9Example6" name="Address1" class="form-control input-custom" />
                Address
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="email" id="typeEmail" name="email" class="form-control input-custom" />
                Email
              </div>
            </div>
          </div>

          <div class="float-end ">
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-rounded"
              style="background-color: #0062CC ;">Place order</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <!-- Owl Carousel Js file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
  <!-- isotope plugin -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
    integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Custome JavaScript -->
  <script src="./app.js"></script>
</body>
</html>