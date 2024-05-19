<?php
include("db.php");
session_start();
$id = $_GET['id'];
$pid = $_GET['pid'];

// Delete row from wishcart table
$delete_query = "DELETE FROM wishcart WHERE id = $id";

if(mysqli_query($conn, $delete_query)) {
    // Row deleted successfully

    // Decrease wishlist count in products table
    $update_query = "UPDATE products SET cart = cart - 1 WHERE pid = $pid";
    mysqli_query($conn, $update_query);
        // Wishlist count updated successfully
        $_SESSION['deleted'] = "Successfully Deleted";
        header("Location: cart.php");
       
  
} else {
    // Error deleting row from wishcart table
    echo "Error deleting row from wishcart table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
