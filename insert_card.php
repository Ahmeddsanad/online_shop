<?php
    include ('config.php');
    session_start();
    $cart_id=$_SESSION['user_id'];
if(isset($_POST['add'])) {
    $NAME = $_POST['name'];
    $PRICE=$_POST['price'];
    $insert= "INSERT INTO addcard (name , price,user_id)
    VALUES('$NAME' ,'$PRICE','$cart_id')";
    mysqli_query($con,$insert);
    header('location: card.php');
    
}
?>
