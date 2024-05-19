<?php
session_start(); // Start the session

// Establish a database connection (assuming you have already connected)
include("db.php");

$m = "";
$id = $_GET['id'];
$n = $_GET['n'];

if(isset($_POST['cancel'])){
    // Get the current timestam
    // Set the canceled_by
    $cancelled_by = "admin";
    
    // Set the reason
    $reason = "Ingredients insufficient";
    
    // Get the existing approved_at value
    $sql = "SELECT approved_at FROM orders WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $approved_at = $row['approved_at'];
    $delivered_at = "NULL";
    // Check if approved_at is empty
    if(empty($approved_at)){
        // Set approved_at and delivered_at as NULL
        $approved_at = "NULL";
        $delivered_at = "NULL";
        $sql = "UPDATE orders 
        SET canceled_at=NOW(), 
        delivery_status = 'Cancelled',
            cancelled_by='$cancelled_by', 
            reason='$reason',
            approved_at=$approved_at,
            delivered_at=$delivered_at
        WHERE id = $id";
    }else{
        $sql = "UPDATE orders 
        SET canceled_at=NOW(), 
        delivery_status = 'Cancelled',
            cancelled_by='$cancelled_by', 
            reason='$reason',
            approved_at='$approved_at',
            delivered_at=$delivered_at
        WHERE id = $id";
    }
    
    // Update the table
  

    // Execute the SQL command
    if (mysqli_query($conn, $sql)) {
        header("Location: order-tracking.php?id=$id&n=$n"); // Redirect to order tracking page
        exit();
    } else {
        header("Location: order-tracking.php?id=$id&n=$n"); // Redirect to order tracking page
        exit();
    }
}else{
   // Check if 'u' is set in POST data
    if (isset($_POST['u'])) {
        $sql = "";
        if ($_POST['u'] == "a") {
            $m = "Approved";
            $sql = "UPDATE orders 
            SET delivery_status='$m', approved_at=NOW()
            WHERE id = '$id'";
        } else {
            $m = "Delivered";
            $sql = "UPDATE orders 
            SET delivery_status='$m', delivered_at=NOW()
            WHERE id = '$id'";
        }
    
        // Update the delivery status and approved timestamp in the database
        
    
        // Execute the SQL command
        if (mysqli_query($conn, $sql)) {
            $_SESSION['done'] = 'yes'; // Set session variable
            header("Location: order-tracking.php?id=$id&n=$n"); // Redirect to order tracking page
            exit(); // Stop execution after redirection
        } else {
            // Error handling: Redirect to an error page
            header("Location: error.php");
            exit();
        }
    } else {
        // Redirect to an error page if 'u' is not set
        header("Location: error.php");
        exit();
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>
