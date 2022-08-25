<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css2/products3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | المنتجات </title>

</head>

<body>
    <!-- <h3>All Available Products </h3> -->
    <header id='prodh'> All Available Products</header>
    <a href="index.php" class="previous">&#x290E;</a>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM prod");
    while ($row = mysqli_fetch_array($result)) {
        echo "
        <center>
        <main>
            <div class='card' style='width: 15rem;'>
                <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>$row[price]</p>
                    <a href='delete.php? id=$row[id]' class='btn_delete'>Delete Product</a>
                    <a href='update.php? id=$row[id]' class='btn_edit'>Edit Product</a>
                </div>
            </div>
        </main>
        <center>
        ";
    }
    ?>
</body>

</html>