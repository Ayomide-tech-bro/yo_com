<?php 

// check if logged in or not
if (!(int) $_SESSION['user_id']>0 ) { header('location:index.php'); }


 if (isset($_POST['btn_signout'])) {
     // delete all session data
     session_destroy();

     // direct to login page
     header('location:index.php');
 }






?>