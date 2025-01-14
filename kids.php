<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids page</title>
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
              <a href="#" class="px-3 border-right border-left text-light">Login</a>
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
                <a class="nav-link active" aria-current="page" href="#">On Sale</a>
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
                <a href="#" class="py-2 rounded-pill color-primary-bg">
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
  <main>
    <h1 class="title text-center p-1 m-1">KIDS</h1>

    <!-- Top sale -->
    <section id="top-sale">
      <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
          <hr>
          <!-- owl carousel -->
          <div class="owl-carousel owl-theme border border-2">
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"><img src="./products/1.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
                <div class="text-center">
                  <h6>Sports Shoes</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$24</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"><img src="./products/2.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
                <div class="text-center">
                  <h6>Sports Shoes</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$24</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"><img src="./products/3.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
                <div class="text-center">
                  <h6>Sports Shoes</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$24</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"><img src="./products/4.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
                <div class="text-center">
                  <h6>Sports Shoes</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$24</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"><img src="./products/5.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
                <div class="text-center">
                  <h6>Sports Shoes</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$24</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"><img src="./products/6.jpg" alt="product" class="img-fluid"  style="height:200px; width:200px;"></a>
                <div class="text-center">
                  <h6>Sports Shoes</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$24</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
        </h4>
      </div>
    </section>
    <!-- End Top Sale -->


    <section id="mens-section">
      <div class="container py-5">
      <h4 class="font-rubik font-size-20">Kids Collection</h4>
          <hr>
      <div class="column-1">
        <div class="product font-rale division">
          <a href="#"><img src="products/kids1.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
          <div class="text-center">
            <h6>Mens Shoes</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>RS:2000</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>

        <div class="product font-rale division">
          <a href="#"><img src="products/kids2.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
          <div class="text-center">
            <h6>Mens Shoes</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>RS:2000</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>

        <div class="product font-rale division">
          <a href="#"><img src="products/kids3.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
          <div class="text-center">
            <h6>Mens Shoes</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>RS:2000</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>

      <div class="column-1">
        <div class="product font-rale division">
          <a href="#"><img src="products/kids4.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
          <div class="text-center">
            <h6>Mens Shoes</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>RS:2000</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>

        <div class="product font-rale division">
          <a href="#"><img src="products/kids5.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
          <div class="text-center">
            <h6>Mens Shoes</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>RS:2000</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>

        <div class="product font-rale division">
          <a href="#"><img src="products/kids6.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
          <div class="text-center">
            <h6>Mens Shoes</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>RS:2000</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>

      <div class="column-1">
        <div class="product font-rale division">
          <a href="#"><img src="products/kids7.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
          <div class="text-center">
            <h6>Mens Shoes</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>RS:2000</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>

        <div class="product font-rale division">
          <a href="#"><img src="products/kids8.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
          <div class="text-center">
            <h6>Mens Shoes</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>RS:2000</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>

        <div class="product font-rale division">
          <a href="#"><img src="products/kids9.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
          <div class="text-center">
            <h6>Mens Shoes</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>RS:2000</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>

      <div class="column-1">
        <div class="product font-rale division">
          <a href="#"><img src="products/kids10.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
          <div class="text-center">
            <h6>Mens Shoes</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>RS:2000</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>

        <div class="product font-rale division">
          <a href="#"><img src="products/kids11.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
          <div class="text-center">
            <h6>Mens Shoes</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>RS:2000</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>

        <div class="product font-rale division">
          <a href="#"><img src="products/kids12.jpg" alt="product" class="img-fluid" style="height:200px; width:200px;"></a>
          <div class="text-center">
            <h6>Mens Shoes</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>RS:2000</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
    </section>
  </main>
 <!-- Start Footer -->
 <footer id="footer" class="bg-dark text-white py-5">
  <div class="container">
    <div class="row d-flex justify-content-around">
      <div class="col-lg-3 col-12">
        <h4 class="font-rubik font-size-20">Footwear Shoppee</h4>
        <p class="font-size-14 font-rale text-white-50">Give your feet the beauty treatment that only brand new shoes can give.</p>
      </div>
      <div class="col-lg-4 col-12">
        <h4 class="font-rubik font-size-20">Newsletter</h4>
        <form class="form-row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Email *">
          </div>
          <div class="col">
            <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
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