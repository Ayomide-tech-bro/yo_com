<?php
$connection = mysqli_connect('localhost' , 'root', '' , 'yo_com');

    if (isset($_POST['add_pro'])) {

        // die(print_r($_POST));
        $pname = mysqli_real_escape_string($connection , strip_tags(trim($_POST['pname'])));
        $pdesc = mysqli_real_escape_string($connection , strip_tags(trim($_POST['pdesc'])));
        $pprice = mysqli_real_escape_string($connection , strip_tags(trim($_POST['pprice'])));
        $pimage = $_FILES['pimage'];

        $pimage_name = $_FILES['pimage']['name'];
        $pimage_type = $_FILES['pimage']['type'];
        $pimage_size = $_FILES['pimage']['size'];
        $pimage_tmp_name = $_FILES['pimage']['tmp_name'];

        $pimage_newname = time() . $pimage_name;

        $supported_type = [
            'image/jpeg' ,
            'image/jpg',
            'image/webp',
            'image/png'
        ];

        if (in_array($pimage_type , $supported_type)) {
            if ($pimage_size <= 2000000) {
                $upload = move_uploaded_file($pimage_tmp_name , 'uploads/'.$pimage_newname);
                if ($upload) {
                    $add = "INSERT INTO `products_tb`( `pname`, `pdesc`, `pprice`, `pimage`) VALUES ('$pname','$pdesc','$pprice','$pimage_newname')";
                    $run = mysqli_query($connection , $add);
                    $row = mysqli_affected_rows($connection);
                    if ( $row > 0 ) {
                        echo 'Product added successfully';
                    } else {
                        // die(error_get_last);
                        echo 'Something went wriong';
                    }
                }
             } else {
                echo 'Image size is too big';
            }
        } else {
            echo 'Image type not supoported.';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>

    <style>
        form{
            width: 30%;
            margin: 0 auto;
        }
    </style>
</head>
<body class="bg-info">
    <div class="">
        <form action="#" method="POST" class="" enctype ="multipart/form-data">
    <div class="form-group">
        <div class="form-label">Product name</div>
        <input type="text" name="pname" id="" class="form-control">
    </div>

    <div class="form-group">
        <div class="form-label">Product Description</div>
        <input type="text" class="form-control" name="pdesc">
    </div>

    <div class="form-group">
        <div class="form-label">Product Price</div>
        <input type="number" name="pprice" id="" class="form-control">
    </div>

    <div class="form-group">
        <div class="form-label">Product image</div>
    <input type="file" name="pimage" id="">
    </div>

    <button class="btn btn-success" type="submit" name="add_pro">Add product</button>
    </form>
    </div>
    
</body>
</html>