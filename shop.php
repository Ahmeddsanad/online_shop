<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/shop2.css">
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
    <header id="header"> <a id="headlink" href="card.php">My Card</a> <a id="logout" href="login_admin.php">Logout</a>
    </header>
    <h3>Available Products </h3>

    <?php
    include('config.php');
    session_start();
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
                    <a href='val.php? id=$row[id]' class='btn_edit'>Add product to cart</a>
                </div>
            </div>
        </main>
        <center>
        ";
    }
    ?>
</body>

</html>