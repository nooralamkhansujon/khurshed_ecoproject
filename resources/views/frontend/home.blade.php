<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="js/all.js"></script>
    <title>Computer Shop</title>
</head>
<body>
  <!-- prelodaer -->
  <section id="preloader"></section>
  <!-- end of preloader  -->

   <!-- top nav -->
   <div class="topNav">
       <ul class="nav_list">
           <li class="nav_item">
            <span></span><i class="fas fa-phone"></i>
            <span class="phone_text">09614222333 (10 AM - 7 PM)</span>
           </li>

          <div class="nav_right">
            <li class="nav_item nav_item_user"><i class="fas fa-user f_font"></i>Welcome, <span class="nav_item_user">Noor</span>
            </li>
            <li class="nav_item">
                  <a href="adminproject/index.php">Admin Panel</a>
            </li>
          </div>

       </ul>
   </div>
  <!-- end of top nav -->

  <!-- main navsection -->
<nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="#">Laptop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- left nav item -->
          <ul class="navbar-nav">
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Monitor
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="products.php">product one </a></a>
                        </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Laptop
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="products.php">product one </a></a>
                <a class="dropdown-item" href="products.php">product one </a></a>
                <a class="dropdown-item" href="products.php">product one </a></a>
                <a class="dropdown-item" href="products.php">product one </a></a>
                <a class="dropdown-item" href="products.php">product one </a></a>
              </div>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Accessories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="products.php">product one </a></a>
                        <a class="dropdown-item" href="products.php">product one </a></a>
                        <a class="dropdown-item" href="products.php">product one </a></a>
                        <a class="dropdown-item" href="products.php">product one </a></a>
                        <a class="dropdown-item" href="products.php">product one </a></a>
                    </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 mx-md-5">
               <select name="category_id" id="" class="select_box form-control text-dark">
                  <option value=''>select category</option>
                        <option value="1">Category 1</option>
                        <option value="1">Category 1</option>
                        <option value="1">Category 1</option>
                        <option value="1">Category 1</option>
               </select>
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        </form>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link"
                    href="aboutus.html">about us</a>
                </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link"
                        href="profile.html">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link"
                    href="register.html">register</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link"
                    href="login.html">Login</a>
                </li>
            </ul>

        </div>
      </nav>

  <!-- end of main navsection -->

<!-- banner section -->
<header id="header_section">
  <div class="carousel">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                   <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                   <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                 </ol>
                 <div class="carousel-inner">
                   <div class="carousel-item active">
                     <img class="d-block w-100" src="images/header.jpeg" alt="First slide">
                   </div>
                   <div class="carousel-item">
                     <img  src="images/header-2.jpeg" alt="Second slide">
                   </div>
                   <div class="carousel-item">
                     <img  src="images/header-3.jpeg" alt="Third slide">
                   </div>
                 </div>
                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
                 </a>
                 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
                 </a>
         </div>

  </div>
  <div class="overlay">
      <h1>Best Dell Laptop Price in Bangladesh</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, qui!</p>
      <div>
          <button class="read_more_header">
               <a href="aboutus.html">Read More</a>
         </button>
     </div>
  </div>
</header>


<!-- content section -->
<section id="content_section" class="mt-2">
<div class="row">
<div class="col-md-4">
    <!-- side bar section -->
  <ul class="aside_bar">
    <li class="sidebar_item">
      <div class="list-group-item list-group_toggle" data-toggle="collapse" data-target="#Screensize" aria-expanded="false" aria-controls="Screensize">Brands</div>
    <div class="collapse multi-collapse" id="Screensize">
            <ul class="list-group">
                    <li class="list-group-item list_group_sub">
                       <a class="list-group_link" href="products.php">Brand 1</a></a>
                    </li>
                 </ul>
            </div>
      </li>
      <li class="sidebar_item">
                   <div class="list-group-item list-group_toggle" data-toggle="collapse" data-target="#Processor" aria-expanded="false" aria-controls="Processor">Categories</div>

                  <div class="collapse multi-collapse" id="Processor">
                                <ul class="list-group">
                                      <li class="list-group-item list_group_sub">
                                          <a class="list-group_link" href="products.php">Category One </a></a>
                                      </li>
                                      <li class="list-group-item list_group_sub">
                                        <a class="list-group_link" href="products.php">Category One </a></a>
                                    </li>
                                    <li class="list-group-item list_group_sub">
                                      <a class="list-group_link" href="products.php">Category One </a></a>
                                  </li>
                                  <li class="list-group-item list_group_sub">
                                    <a class="list-group_link" href="products.php">Category One </a></a>
                                </li>
                              </ul>
                          </div>
            </li>
        </ul>
        <!-- end of sidebar  -->
</div>

<!-- item section  -->
  <div class="col-md-8">
        <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h1 class="section_header"> All Products</h1>
                  </div>
                </div>
     <!-- first row -->
      <div class="row">
          <!-- single item -->
            <div class="col-md-4 py-3">
                <article class="single_product">
                      <img class="single_image" src="images/laptop-1.jpg" alt="">
                      <h3 class="product_header">Dell Inspiron 14-3467 6th Gen Core i3 14" HD Laptop</h3>
                      <ul class="description">
                          <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                          <li>4GB DDR4 Ram</li>
                          <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                          <li>1TB 5400 rpm HDD</li>
                      </ul>
                    <a class="read_more" href="#">view More</a>
                </article>
            </div>
          <!-- end of single item -->

          <!-- single item -->
          <div class="col-md-4 py-3">
            <article class="single_product">
                  <img class="single_image" src="images/laptop-2.jpg" alt="">
                  <h3 class="product_header">Dell Inspiron 14-3467 6th Gen Core i3 14" HD Laptop</h3>
                  <ul class="description">
                      <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                      <li>4GB DDR4 Ram</li>
                      <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                      <li>1TB 5400 rpm HDD</li>
                  </ul>
                <a class="read_more" href="#">view More</a>
            </article>
        </div>
        <!-- end of single item -->

        <!-- single item -->
            <div class="col-md-4 py-3">
              <article class="single_product">
                  <img class="single_image" src="images/laptop-3.jpg" alt="">
                    <h3 class="product_header">Dell Inspiron 14-3467 6th Gen Core i3 14" HD Laptop</h3>
                    <ul class="description">
                        <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                        <li>4GB DDR4 Ram</li>
                        <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                        <li>1TB 5400 rpm HDD</li>
                    </ul>
                  <a class="read_more" href="#">view More</a>
              </article>
          </div>
            <!-- end of single item -->
        </div>
      <!-- end of first row -->
           <!-- first row -->
           <div class="row">
              <!-- single item -->

              <div class="col-md-4 py-3">
                   <article class="single_product">

                         <img class="single_image" src="images/laptop-4.jpg" alt="">

                        <h3 class="product_header">Dell Inspiron 14-3467 6th Gen Core i3 14" HD Laptop</h3>
                        <ul class="description">
                            <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                            <li>4GB DDR4 Ram</li>
                            <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                            <li>1TB 5400 rpm HDD</li>
                        </ul>
                       <a class="read_more" href="#">view More</a>


                   </article>
              </div>
             <!-- end of single item -->
              <!-- single item -->

              <div class="col-md-4 py-3">
                 <article class="single_product">

                       <img class="single_image" src="images/laptop-5.jpg" alt="">

                      <h3 class="product_header">Dell Inspiron 14-3467 6th Gen Core i3 14" HD Laptop</h3>
                      <ul class="description">
                          <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                          <li>4GB DDR4 Ram</li>
                          <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                          <li>1TB 5400 rpm HDD</li>
                      </ul>
                     <a class="read_more" href="#">view More</a>


                 </article>
            </div>
           <!-- end of single item -->
            <!-- single item -->

            <div class="col-md-4 py-3">
               <article class="single_product">

                     <img class="single_image" src="images/laptop-6.jpg" alt="">

                    <h3 class="product_header">Dell Inspiron 14-3467 6th Gen Core i3 14" HD Laptop</h3>
                    <ul class="description">
                        <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                        <li>4GB DDR4 Ram</li>
                        <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                        <li>1TB 5400 rpm HDD</li>
                    </ul>
                   <a class="read_more" href="#">view More</a>


               </article>
          </div>
         <!-- end of single item -->
         </div>
       <!-- end of first row -->
        <!-- first row -->
        <div class="row">
            <!-- single item -->

            <div class="col-md-4 py-3">
                 <article class="single_product">

                       <img class="single_image" src="images/laptop-7.jpg" alt="">

                      <h3 class="product_header">Dell Inspiron 14-3467 6th Gen Core i3 14" HD Laptop</h3>
                      <ul class="description">
                          <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                          <li>4GB DDR4 Ram</li>
                          <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                          <li>1TB 5400 rpm HDD</li>
                      </ul>
                     <a class="read_more" href="#">view More</a>


                 </article>
            </div>
           <!-- end of single item -->
            <!-- single item -->

            <div class="col-md-4 py-3">
               <article class="single_product">

                     <img class="single_image" src="images/laptop-8.jpg" alt="">

                    <h3 class="product_header">Dell Inspiron 14-3467 6th Gen Core i3 14" HD Laptop</h3>
                    <ul class="description">
                        <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                        <li>4GB DDR4 Ram</li>
                        <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                        <li>1TB 5400 rpm HDD</li>
                    </ul>
                   <a class="read_more" href="#">view More</a>


               </article>
          </div>
         <!-- end of single item -->
          <!-- single item -->

          <div class="col-md-4 py-3">
             <article class="single_product">

                   <img class="single_image" src="images/laptop-9.jpg" alt="">

                  <h3 class="product_header">Dell Inspiron 14-3467 6th Gen Core i3 14" HD Laptop</h3>
                  <ul class="description">
                      <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                      <li>4GB DDR4 Ram</li>
                      <li>Intel® Core™ i3-6006U (3M Cache, 2.00 GHz)</li>
                      <li>1TB 5400 rpm HDD</li>
                  </ul>
                 <a class="read_more" href="#">view More</a>


             </article>
        </div>
       <!-- end of single item -->
       </div>
     <!-- end of first row -->
    </div>
     <!-- pagination -->
          <nav aria-label="Page navigation example" class="col-md-12 pagination-section">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
   </div>
   <!-- container -->


</div>
</section>
<!-- end of content section -->


<!-- footer section  -->
<footer id="footer" class="pt-3 pb-5">
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <p class="footer_header">CountryRegion: <a href="#">united States</a></p>
            </div>
          </div>

          <div class="row footer_content">
            <div class="col-md-4 col-lg-2 col-sm-6 footer_single_item">
               <h5 class="footer_single_item-header">About Us</h5>
               <ul >
                 <li><a href="#">Contact HP</a></li>
                 <li><a href="#">Careers</a></li>
                 <li><a href="#">Investor relations</a></li>
                 <li><a href="#">Sustainable impact</a></li>
                 <li><a href="#">Press center</a></li>
                 <li><a href="#">The Garage</a></li>
               </ul>
            </div>
            <div class="col-md-4 col-lg-2 col-sm-6 footer_single_item">
                <h5 class="footer_single_item-header">Ways to buy</h5>
                <ul >
                  <li><a href="#">shop to buy</a></li>
                  <li><a href="#">Store locator</a></li>
                  <li><a href="#">call an HP rep</a></li>
                  <li><a href="#">Find a reseller</a></li>
                  <li><a href="#">Enterprise store</a></li>
                  <li><a href="#">Public sector purschasing</a></li>
                </ul>
             </div>
             <div class="col-md-4 col-lg-2 col-sm-6 footer_single_item">
                <h5 class="footer_single_item-header">Support</h5>
                <ul >
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Download drivers</a></li>
                  <li><a href="#">Support & troubleshooting</a></li>
                  <li><a href="#">Authorized service providers</a></li>
                  <li><a href="#">Check repair status</a></li>
                  <li><a href="#">Training & certificatione</a></li>
                </ul>
             </div>
             <div class="col-md-4 col-lg-2 col-sm-6 footer_single_item">
                <h5 class="footer_single_item-header">HP Partners</h5>
                <ul >
                  <li><a href="#">HP Partner First program</a></li>
                  <li><a href="#">HP Partner First Portal</a></li>
                  <li><a href="#">Developers</a></li>
                </ul>
             </div>

             <div class="col-md-8 col-lg-4  footer_single_item-icon">
                <h5 class="footer_single_item-header">Stay connected</h5>
                <ul class="ml-5 ml-lg-3  pl-5 pl-lg-3">
                    <li><a href="#"> <i class="fab fa-facebook"></i> </a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                </ul>
             </div>
          </div>

    </div>

  </footer>
  <!-- end of footer section -->

  <script src='js/jquery-slim.min.js'></script>
<script src="js/popper.min.js"></script>
<script src='js/bootstrap.min.js'></script>
</body>
</html>
