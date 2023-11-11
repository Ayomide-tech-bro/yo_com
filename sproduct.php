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



    <section id="prodetails" class="section-p1 section-m1">
        <div class="single-pro-image">
       <img src="img/s8.jpeg" width="100%" id="mainimg">
   
       <div class="small-img-group">
           <div class="small-img-col">
          <img src="img/s9.jpeg" width="100%" class="smallimg" alt="">
       </div>
       <div class="small-img-col">
           <img src="img/s10.jpeg" width="100%" class="smallimg" alt="">
        </div>
        <div class="small-img-col">
           <img src="img/s11.jpeg" width="100%" class="smallimg" alt="">
        </div>
        <div class="small-img-col">
           <img src="img/s12.jpeg" width="100%" class="smallimg" alt="">
        </div>
   
   
      
   </div>
       </div>

    <div class="single-pro-details">
        
        <h6>Long / T shirt</h6>
        <h4>Mens fashion T shirt</h4>
        <h2>#12000</h2>
        <select>
            <option>Select size</option>
            <option>SM</option>
            <option>XL</option>
            <option>XXL</option>
       </select>
      <br>
       <input type="number" value="1">
       <button class="normal">Add to cart</button>
       <h4>Product Details </h4>
       <span>The gideon Long T-shirt is made from a substantial 12.0 oz per sq yd Fabric constructed from 100% cotton .this classic fit preshrunk sersey knit provides unmatched comfort with each wear .Feauturing a staped neck and shoulder. and a seamless double-needle collar, and avaliable in a range of colors, it offers it all in the  ultimate head-turning package</span>
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

</html>