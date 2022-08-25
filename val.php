<?php
    include('config.php');
    $ID= $_GET['id'];
    $up =mysqli_query($con,"select * from prod where id=$ID"); 
    $data = mysqli_fetch_array($up);
    

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/val2.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تاكيد شراء المنتج</title>

</head>
<body>
    <div class="main">
        <form action="insert_card.php" method="post">
            <h2>Do you really want to buy the product</h2>
            <input type="text" name="id" value='<?php echo $data['id']?>'>
            <input type="text" name="name"value='<?php echo $data['name']?>'>
            <input type="text" name="price" value='<?php echo $data['price']?>'>
            <input type="text" name="user" value='<?php echo $cart_id?>'>
            
            <button name="add" type="submit" class="submit">Confirm adding the product to the cart</button>
            <br>
            <a href="shop.php">Back to products page</a>

    </div>

    
</body>
</html>