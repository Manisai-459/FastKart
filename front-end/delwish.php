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
   
        // Wishlist count updated successfully
        $_SESSION['deleted'] = "Successfully Deleted";
        header("Location: wishlist.php");
       
  
} else {
    // Error deleting row from wishcart table
    echo "Error deleting row from wishcart table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
