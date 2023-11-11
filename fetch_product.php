<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "add_db";
$my_conn = mysqli_connect('localhost','root','','add_db');

// Check the connection
if ($my_conn->connect_error) {
    die("Connection failed: " . $my_conn->connect_error);
}

// Step 2: Fetch Products
$sql = "SELECT * FROM product_tb";
$result = $my_conn->query($sql);

// Step 3: Display Products
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // echo "<div class='product'>
        //  <h2>{$row['product_name']}</h2>
        //  <p>Category: {$row['category_name']}</p>
        //  <p>Price: {$row['product_price']}</p>
        //  <p>Discount: {$row['product_discount']}</p>
        //  <p>Stock Quantity: {$row['stock_quantity']}</p>
        //  <p>Description: {$row['product_description']}</p>
        //  <img src='{$row['product_image']}' alt='Product Image'>
        //  </div>";
        $nn = substr($row['product_name'], 0, 15);
        $pp = number_format($row['product_price']);
        echo ' <div class="col-md-3 my-1 col-6 p-1">
        <div class="card w-100 text-center">
        <a href = "pdetails.php?id='.$row['id'].'"> 
        <div class = "card-head w-100"> 
             <img id="img-img" src = "'.$row['product_image'].'" role="img" width="100%" height="100%" class=" card-img-top w-100 object-fit-contain">
             <div style="position: absolute; top: 10px; right: 10px; background-color: red; color: white; padding: 5px 10px; font-size: 16px; border-radius: 5px;">
             -'.$row['product_discount'].'%
         </div>
        </div>

      
    

          <div class="card-body">
            <h5 class="card-title text-black">'.$nn.'...</h5>
            <h4 class="card-title text-black">₦ '.$pp.'</h4>
            

          </div> </a>
        </div>
      </div> ';
    }
} else {
    echo " No products found.";
}

// Step 4: Close the database connection
$my_conn->close();
?>
<style>
    #img-img{
        object-fit: cover;
    }
    a{
        text-decoration: none;
        color: black;
    }
    /* Style for the product container */
/* .product {
    max-width: 300px;
    margin: 20px;
    padding: 10px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Style for product details */
/* .product h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

.product p {
    font-size: 16px;
    margin-bottom: 5px;
}

.product img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
} */

</style>
<!-- <link rel="stylesheet" href="../dist/css/bootstrap.min.css"> -->

