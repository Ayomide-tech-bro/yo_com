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
                <li><a href="index.php">home</a></li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="blog.php">blog</a></li>
                <li><a class="active" href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>

        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
          
        </div>
    </section>

    <section id="pageheader">


        <h2>#StayHome</h2>
       
        <p>Save more with coupen & and Up To 70% off</p>
       

    </section>

    <!-- <section id="pag" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>

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