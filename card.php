<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/card.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CARD | Products</title>
</head>

<body>
    <?php
    include('config.php');
    session_start();
    $empty_or_not = "";
    $cart_id = $_SESSION['user_id'];
    $result = mysqli_query($con, "SELECT * FROM addcard  where user_id='$cart_id' ");
    if (mysqli_num_rows($result) > 0) {
        $empty_or_not = "Your Purchases";
    } else {
        $empty_or_not = "Your Card Is Empty";
    }
    ?>
    <header id="header"><span><?php echo $empty_or_not ?></span></header>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "
        <main>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'class='th1'>Product Name</th>
                    <th scope='col'class='th2'>Product Price</th>
                    <th scope='col'class='th3'>Delete Product</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class='td1'>$row[name]</td>
                    <td class='td2'>$row[price]</td>
                    <td class='td3  '> <a  id='link' href='del_card.php? id=$row[id]' class='btn'> Remove </a></td>
                </tr>
            </tbody>
        </table>
    </main>
        ";
    } ?>
    <p><a id="back" href="shop.php">Back To Products Page</a></p>
    <a id='linkp' href='payment.php' class='btnp'>Online Payment</a>
</body>

</html>