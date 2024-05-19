<?php
include("db.php");
session_start();

// Function to move image to deletecat folder
function moveImageToDeleted($image_url) {
    if (file_exists($image_url)) {
        $new_image_url = '../back-end/deletedcat/' . basename($image_url);
        if (rename($image_url, $new_image_url)) {
            return $new_image_url;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// Assuming $pid contains the product ID passed via GET method
if(isset($_GET['id'])) {
    $pid = $_GET['id'];
    
    // First, retrieve the data associated with the product
    $sql_get_product = "SELECT * FROM products WHERE pid = $pid";
    $result_get_product = $conn->query($sql_get_product);
    
    if ($result_get_product->num_rows > 0) {
        $row_product = $result_get_product->fetch_assoc();
        $new_image_url = moveImageToDeleted($row_product['image_url']);
        // Move product data to deleteprod table
        $sql_move_to_deleteprod = "INSERT INTO deleteprod (pid, pname, pc, price, image_url, description, nutrients, ingredients, created_at, wishlist, orders) 
                                   VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_move_to_deleteprod = $conn->prepare($sql_move_to_deleteprod);
        $stmt_move_to_deleteprod->bind_param("isidssssssi", $row_product['pid'], $row_product['pname'], $row_product['pc'], $row_product['price'], $new_image_url, $row_product['description'], $row_product['nutrients'], $row_product['ingredients'], $row_product['created_at'], $row_product['wishlist'], $row_product['orders']);
        
        if ($stmt_move_to_deleteprod->execute()) {
            // Data moved to deleteprod table successfully
            
            // Now, delete the row from the products table
            $sql_delete_product = "DELETE FROM products WHERE pid = $pid";
            if ($conn->query($sql_delete_product) === TRUE) {
                // Row deleted successfully
                
                // Move the associated image to deletecat folder
               
                
                if ($new_image_url) {
                    
                    $_SESSION['y'] = "Product deleted Successfully";
                } else {
                    $_SESSION['y'] = "Product deleted Successfully. Image couldn't be moved.";
                }
                
                header("Location: products.php");
                exit();
            } else {
                echo "Error deleting product: " . $conn->error;
            }
        } else {
            echo "Error moving product data to deleteprod table: " . $stmt_move_to_deleteprod->error;
        }
    } else {
        echo "Product not found.";
    }
} else {
    echo "PID not provided.";
}
?>
