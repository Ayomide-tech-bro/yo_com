<!DOCTYPE php>
<php lang="en">

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
                <li><a  class="active" href="shop.php">shop</a></li>
                <li><a href="blog.php">blog</a></li>
                <li><a href="about.php">about</a></li>
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




    
    <section id="pag" class="section-p1">

        <a href="shop.php"><i class="fal fa-long-arrow-alt-left"></i></a>

    </section>
    <section id="prodetails" class="section-p1 section-m1">
        <div class="single-pro-image">
       <img src="img/suit1 (1).jpeg" width="100%" id="mainimg">
   
       <div class="small-img-group">
           <div class="small-img-col">
          <img src="img/suit1 (2).jpeg" width="100%" class="smallimg" alt="">
       </div>
       <div class="small-img-col">
           <img src="img/suit1 (3).jpeg" width="100%" class="smallimg" alt="">
        </div>
        <div class="small-img-col">
           <img src="img/suit1 (4).jpeg" width="100%" class="smallimg" alt="">
        </div>
        <div class="small-img-col">
           <img src="img/suit1 (5).jpeg" width="100%" class="smallimg" alt="">
        </div>
        
   
      
   </div>
       </div>

    <div class="single-pro-details">
        
        <h6>SUITS</h6>
        <h4>Mens suit</h4>
        <h2>#18000</h2>
        <select>
            <option>Select size</option>
            <option>SM</option>
            <option>XL</option>
            <option>XXL</option>
       </select>
      <br>
       <input type="number" value="1">
       <a href="#"> <button class="normal">Add to cart</button></a>
       <h4>Product Details </h4>
       <span>Seeking to buy a quality men's suit in lagos ,nigeria , you get to enjoy a combination of prestigeous yet affordable suit for men.. Enjoy the luxury of Zella</span>
    </div>
</section>



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



   <script>
    var mainimg = document.getElementById("mainimg")
    var smallimg = document.getElementsByClassName("smallimg")

    smallimg[0].onclick = function() {
        mainimg.src = smallimg[0].src;
    }
    
    smallimg[1].onclick = function() {
        mainimg.src = smallimg[1].src;
    }
    
    smallimg[2].onclick = function() {
        mainimg.src = smallimg[2].src;
    }
    
    smallimg[3].onclick = function() {
        mainimg.src = smallimg[3].src;
    }
   </script>

 <script src="./script.js"></script>

</body>

</php>