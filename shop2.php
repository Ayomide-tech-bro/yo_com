<?php
$connection = mysqli_connect('localhost' , 'root', '' , 'yo_com');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

        <?php
        $showq = "SELECT * FROM products_tb";
        $runq = mysqli_query($connection , $showq);
        $row = mysqli_num_rows($runq);
        if ( $row > 0) {
            while ( $arr = mysqli_fetch_assoc($runq) ) {
                echo ' <img src="uploads/'.$arr['pimage'].'" />
                    <h1> '.$arr['pname'].' </h1>
                    <p> '.$arr['pdesc'].' </p>
                    <p> '.$arr['pprice'].' </p>
                    <a href = "details.php?id='.$arr['id'].'" >View</a>
                ';
            }
        } else {
            echo 'No product added';
        }
        ?>


</body>
</html>