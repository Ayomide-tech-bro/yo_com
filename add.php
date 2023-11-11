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

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["product_name"];
    $product_description = $_POST["product_description"];
    $product_price = $_POST["product_price"];
    $product_image_url = $_POST["product_image_url"];

    // Insert the product into the database
    $sql = "INSERT INTO add_tb (product_name, product_description, product_price, product_image_url) VALUES ('$product_name', '$product_description', '$product_price', '$product_image_url')";

    if ($my_conn->query($sql) === TRUE) {
        // echo "Product added successfully!";
        $msg = " Product added successfully" ;

if (!$msg == '') { echo "<div class = 'alert alert-secondary'>" . $msg . "</div>"; }

  
    } else {
        echo "Error: " . $sql . "<br>" . $my_conn->error;
    }
}

// Close the database connection
$my_conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>



<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    Product Name: <input type="text" name="product_name" class="form-control" required><br>
    Product Description: <textarea name="product_description" class="form-control" required></textarea><br>
    Product Price: <input type="number" name="product_price" class="form-control" required><br>
    Product Image URL: <input type="text" name="product_image_url" class="form-control" required><br>
    <section id="sub">
    <input type="submit" value="Add Product">
    </section>
</form>

</body>
</html>
