<?php
include("db.php");
session_start();

// Retrieve user_id and pid from session and GET parameters
$user_id = $_SESSION['id'];
$pid = $_GET['pid'];
$wc = 0; // Assuming this is a constant value
$quantity = 1; // Assuming this is a constant value

// Check if the combination of user_id and pid already exists in the wishcart table
$query = "SELECT * FROM wishcart WHERE user_id = $user_id AND pid = $pid and wc = 0";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Product already exists in wishlist, display a message
    $_SESSION['no'] = "This product is already in your Cart.";
    header("Location: cart.php");
exit();
} else {
    // Product does not exist in wishlist, proceed to insert the new entry
    $insert_query = "INSERT INTO wishcart (user_id, pid, wc, quantity) VALUES ($user_id, $pid, $wc, $quantity)";
    if (mysqli_query($conn, $insert_query)) {

        $_SESSION['message1'] = "Product added to wishlist successfully.";
        $update_query = "UPDATE products SET cart = cart + 1 WHERE pid = $pid";
        mysqli_query($conn, $update_query);
    } else {
        $_SESSION['no'] = "Error: " . $insert_query . "<br>" . mysqli_error($conn);
    }
    header("Location: cart.php");
exit;
}

mysqli_close($conn);

// Redirect back to the page

?>
