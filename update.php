<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap" rel="stylesheet">
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
    <link rel="stylesheet" href="css2/edit_product.css">
</head>
<body>
    <?php
    include("config.php");
    $id=$_GET['id'];
    $up=mysqli_query($con,"SELECT * FROM prod WHERE id=$id");
    $data=mysqli_fetch_array($up);

    ?>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>Edit Products</h2>
                <input type="text" placeholder="Product ID" name='id' value=' <?php  echo $data['id'] ?>'>
                <br>
                <input type="text" placeholder="Product Name" name='name' value='<?php  echo $data['name'] ?>'>
                <br>
                <input type="text" name='price' placeholder="Price" value= '<?php echo $data['price'] ?>'>
                <br>
                <!-- <?php echo "C:/xampp/htdocs/shop2/".$data['image'] ?> -->
                <input type="file" id="file" name='image' style='display:none' value= '<?php echo "C:/xampp/htdocs/shop2/".$data['image'] ?>'>
                <label for="file"  >Update Image For Product</label>
                <button name='update' type="submit">Edit Product</button>
                <br><br>
               <p class="all"> <a href="products.php">Show All Products</a></p>
            </form>
        </div>
</body>
</html>