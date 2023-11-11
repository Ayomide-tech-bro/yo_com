<?php
// Databa

$servername = "localhost";
$username = "root";
$password = " ";
$database = "ecom_db";

// Create a connection
$my_conn = mysqli_connect('localhost','root','','ecom_db');

// Check connection
if ($my_conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $gender= $_POST["gender"];
    $password= $_POST["password"];


    // Prepare and bind the SQL statement
    $msg = $my_conn->prepare("INSERT INTO user (first_name, last_name, email, gender, password) VALUES (?, ?, ?, ?, ?)");
    $msg->bind_param("sssss", $first_name, $last_name, $email, $gender, $password);

  

    // Execute the statement
    if ($msg->execute()) {
        echo "Record saved successfully.";

    } else {
        echo "Error: " . $msg->error;
    }

    // Close the statement
    $msg->close();
}

// Close the database connection
$my_conn->close();
?>



 


























<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="dist\css\bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: white;
       margin-top: 60px 
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #b11d1d;
      border-radius: 3px;
    }
    .form-group input:focus {
      outline: none;
      border-color: #007bff;
    }
    .error {
      color: rgb(207, 74, 74);
    }
  </style>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
  <div class="container">
  <center> <img src="../ecom_db/img/nanan.png " alt="Image" width="60" height="60"></center>
  <center><h3><a href="login.php"> Signin </a>to Zella </h3></center>
   


    <form id="signupForm">
      <div class="form-group">
        <label for="first name">first name</label>
        <input type="text" id="username" name="first_name" required>
        <span class="error" id="usernameError"></span>
      </div>

      <div class="form-group">
        <label for="first name">Last name</label>
        <input type="text" id="username" name="last_name" required>
        <span class="error" id="usernameError"></span>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <span class="error" id="emailError"></span>
      </div>

      <div class="form-group">
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <select name="gender" id="" class="form-select" required>
                                    <option value="male"></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <span class="error" id="passwordError"></span>
      </div>
      
      <div class="form-group">
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        <span class="error" id="confirmPasswordError"></span>
      </div>
      <div>
      <div class="form-group col-12 text-center">
           <button class="btn btn-secondary  col-5 text-light " type="reset">Clear</button>
            
            <button class="btn col-5 align-item-center btn-primary " name="submit" type="submit">Sign up</button>

            
            </div>
    </div>
    </form>
  </div>

  
  </form>
</body>
</html>























































































 <?php
require_once('user\includes\conn.php'); 
require_once('user\header.php');
require_once('user\includes\functions.php');


?>









</body>