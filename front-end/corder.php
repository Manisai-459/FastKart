<?php
session_start(); // Start the session

// Establish a database connection (assuming you have already connected)
include("db.php");

$m = "";
$id = $_GET['id'];

    // Get the current timestam
    // Set the canceled_by
    $cancelled_by = $_SESSION['user'];
    
    // Set the reason
    $reason = "Not interested";
    
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
        header("Location: user-dashboard.php"); // Redirect to order tracking page
        exit();
    } else {
        header("Location: user-dashboard.php"); // Redirect to order tracking page
        exit();
    }

?>
