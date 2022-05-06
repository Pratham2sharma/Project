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
</head>
<body>

    <!-- Start Header -->
    <header id="header">
      <div class="strip d-flex justify-content-between px-4 py-1" style="background-color: #c1003c;">
          <p class="font-rale font-size-12 text-light m-0">Welcome to this footwear Selling Website</p>
          <div class="font-rale font-size-14">
              <a href="registration.php" class="px-3 border-right border-left text-light">Login</a>
              <a href="#" class="px-3 border-right text-light">Wishlist(0)</a>
          </div>
      </div>

      <!-- Start Primary Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #e40046;">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Footwear Shoppee</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">HOME</a>
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
                  <a class="nav-link" href="refurbished.php">Refurbished</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sell_here.php">Sell here</a>
                </li>
              </ul>
              <form action="#" class="font-size-14 font-rale">
                  <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                      <span class="font-size-15 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                      <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                  </a>
              </form>
            </div>
          </div>
      </nav>
      <!-- End Primary Navigation -->  
  </header>
  <!-- End Header -->

    <!-----cart item details----->
     <h1 class="cart">YOUR CART <i class="fas fa-shopping-cart"></i></h1>
     <div class="small-container cart-page">
         <table>
             <tr>
                 <th>Product</th>
                 <th>Quantity</th>
                 <th>Sub-Total</th>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="products/mens1.jpg">
                         <div>
                             <p>Mens shoes</p>
                             <small>price:1000</small>
                             <br>
                             <a href="">Remove</a>
                         </div>
                     </div>
                 </td>
                 <td><input type="number" value="1" id="textbox" onclick="decreaseNumber()" onclick="increaseNumber()"></td>
                 <td>Rs:1000</td>
             </tr>
             <tr>
                <td>
                    <div class="cart-info">
                        <img src="products/mens10.jpg">
                        <div>
                            <p>Mens shoes</p>
                            <small>price:1500</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1" id="textbox" onclick="decreaseNumber()" onclick="increaseNumber()"></td>
                <td>Rs:1500</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="products/mens2.jpg">
                        <div>
                            <p>Mens shoes</p>
                            <small>price:2000</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1" id="textbox" onclick="decreaseNumber()" onclick="increaseNumber()"></td>
                <td>Rs:2000</td>
            </tr>
         </table>
         <div class="total-price">
             <table>
                 <tr>
                     <td>Subtotal</td>
                     <td>RS:4500</td>
                 </tr>
                 <tr>
                    <td>Tax</td>
                    <td>RS:300</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>RS:4800</td>
                </tr>
             </table>
         </div>
     </div>

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
      <script type="text/javascript">

          const decreaseNumber = () =>{
          var itemval = document.getElementById('textbox');

          if(itemval.value < 0){
            itemval.value = 0;
          }else{
            itemval.value = parseInt(itemval.value) - 1;
          }
        } 
        const increaseNumber = () =>{
          var itemval = document.getElementById('textbox');

          if(itemval.value >= 10 ){
            itemval.value = 10;
            alert('max 10 allowed');
          }else{
            itemval.value = parseInt(itemval.value) + 1;
          }
        } 
      </script>
  </body>
  </html>