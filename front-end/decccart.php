<?php 
session_start();
include("db.php");
$id = $_GET['wid'];
if($_GET['q'] != 1){
// Increment the quantity by 1
$sql = "UPDATE wishcart SET quantity = quantity - 1 WHERE id = $id";

if(mysqli_query($conn, $sql)) {
    header("Location: cart.php");
    exit;
} else {
    header("Location: cart.php");
    exit;
}
} else {
    header("Location: cart.php");
    exit;
}
?>
