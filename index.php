<?php 
if (isset($_POST['btn_signout'])) {
	session_destroy();
	header("location: login.php");
    require_once('header.php');
}

 


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <!-- <link rel="stylesheet" href="./fontawesome/fontawesome-free-6.2.0-web/css/fontawesome.min.css"> -->
    <!-- <link rel="stylesheet" href="./fontawesome/css/all.css"> -->

    <title>Document</title>
</head>

<body>
    
    <link rel="stylesheet" href="./style.css">
    <section id="header">
        <a href=""> <img src="../yo_com/img/nanan.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
            <li><a class="active" href="index.php">home <img src="./img/house-and-home-icon-symbol-sign-free-png.png w-70 h-20" alt=""></a></li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="blog.php">blog</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="admin.php">Admin</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>


                

						<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="profile.php" data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
            <ul class="dropdown-menu">
              <!-- <li><a class="dropdown-item" href="profile.php" style='color: black;'><?php echo $_SESSION['first_name'] ?></a></li> <hr> -->
              <li><a class="dropdown-item" href="#"> 
                <form action="" method="POST">
                  <button class="btn btn-danger w-100" name="btn_signout">Logout</button>      
                </form>
              </a></li>
            </ul>
          </li>
            </ul>
        </div>

        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
          
        </div>
    </section>
    <section id="hero">


        <h4>Trade in Offer</h4>
        <h2>Super value deals</h2>
        <h1>On All Products</h1>
        <p>Save more with coupen & and Up To 70% off</p>
        <button>Shop Now</button>


<!--         
  <div class="b-example-divider"></div>

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="../yo_com/img/12.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
      <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
      </div>
    </div>
  </div>
</div> -->


    </section>

    <section id="feauture" class="section-p1">
        <div class="fe-box">
            <img src="img/download (7).jfif" alt="">
            <h6>Free Shipping</h6>
        </div>

       <div class="fe-box">
            <img src="img/download (1).jfif" class="" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/download (6).jfif" alt="">
            <h6>Promotions</h6> 
        </div>


        <div class="fe-box">
            <img src="img/download (1).jfif" class="" alt="">
            <h6>Save Money</h6>
        </div>


        <div class="fe-box">
            <img src="img/download (9).jfif" alt="">
            <h6>Happy Sell</h6>
        </div>

    </section>


    <section id="product1" class="section-p1">
        <h2>Feauture Products</h2>
        <p>Sumar collection New modern design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/15.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronut T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$78 </h4>
                </div>
                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>

            <div class="pro">
                <img src="img/1.jpeg" alt="">
                <div class="des">
                    <span>Ohio</span>
                    <h5>Hoddie</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$25 </h4>
                </div>
                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>

            <div class="pro">
                <img src="img/2.jpeg" alt="">
                <div class="des">
                    <span>Odios</span>
                    <h5>Cartoon Astronut T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$78 </h4>
                </div>


                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>


            <div class="pro">
                <img src="img/3.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronut T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$78 </h4>
                </div>


                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>


            <div class="pro">
                <img src="img/4.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronut T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$78 </h4>
                </div>


                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>

            <div class="pro">
                <img src="img/5.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronut T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$78 </h4>
                </div>


                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>

            <div class="pro">
                <img src="img/6.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronut T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$78 </h4>
                </div>


                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>


            <div class="pro">
                <img src="img/7.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronut T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$78 </h4>
                </div>


                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>




        </div>
    </section>


    <section id="banner" class="section-m1">
        <h4>Repair Service</h4>
        <h2>Up to <span>70%-off</span> All T-shirt and accessories</h2>
        <button class="normal">Exploire more</button>

    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrival</h2>
        <p>Sumar collection New modern design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/8.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronut T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$78 </h4>
                </div>
                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>

            <div class="pro">
                <img src="img/9.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronut T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$78 </h4>
                </div>
                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>

            <div class="pro">
                <img src="img/10.png" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronut T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$78 </h4>
                </div>


                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>


            <div class="pro">
                <img src="img/11.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronut T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$78 </h4>
                </div>


                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>


            <div class="pro">
                <img src="img/12.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronut T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$78 </h4>
                </div>


                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>

            <div class="pro">
                <img src="img/13.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronut T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$78 </h4>
                </div>


                <a href="gghgg"><i class="fal fa-shopping-cart cart "></i></a>

            </div>

           


        </div>
    </section>

    <Section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy Deals</h4>
            <h2>Buy 1 Get 1 Free</h2>
            <span>The best classic dress is on sale at Zela </span>
            <button class="white">Learn More</button>
        </div>
            <div class="banner-box banner-box2">
                <h4>Spring/Summer</h4>
                <h2>Upcoming Season</h2>
                <span>The best classic dress is on sale at Zela </span>
                <button class="white">Collection</button>
            </div>
        </Section>
           

       <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALES</h2>
             <h3>Winter Collection- 50% OFF</h3>
        </div>     
        
        <div class="banner-box banner-box2">
            <h2>SEASONAL SALES</h2>
             <h3>Winter Collection- 50% OFF</h3>
        </div>     

        <div class="banner-box banner-box3">
            <h2>SEASONAL SALES</h2>
             <h3>Winter Collection- 50% OFF</h3>
        </div>     
        </section>
<!-- 
        <section id="newsletter">
            <div class="newstext">
             <h4>SignUp For Newsletter</h4>
             <p>Get E-mail updates about our latest shop and <span>Special Offer</span></p>
            </div>
            <div class="form">
              <input type="text" placeholder="Your email address">
              <button class="normal">Signup</button>
            </div>

        </section> -->




<section id="newsletter">
    
    <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="enter your email">
								<button class="newsletter-btn"><i ></i> Subscribe</button>
							</form>
							<!-- <ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->
        </section>


        <?php
        require_once('footer.php')
        ?>



    <script src="./script.js"></script>

</body>

</html>
