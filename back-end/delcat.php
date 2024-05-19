<?php
session_start();
include("db.php");

function deleteDirectory($dir) {
    if (!file_exists($dir)) {
        return true;
    }

    $files = array_diff(scandir($dir), ['.', '..']);

    foreach ($files as $file) {
        (is_dir("$dir/$file")) ? deleteDirectory("$dir/$file") : unlink("$dir/$file");
    }

    return rmdir($dir);
}

if(isset($_GET['id'])) {
    $category_id = $_GET['id'];

    // Fetch the category details before deleting it
    $sql_get_category = "SELECT * FROM categories WHERE id = $category_id";
    $result_get_category = $conn->query($sql_get_category);

    if($result_get_category && $result_get_category->num_rows > 0) {
        $row = $result_get_category->fetch_assoc();
        $category_name = strtolower($row['cname']);
        $image_url = $row['image_url'];

        // Move image to deletecat folder
        if (!empty($image_url) && file_exists($image_url)) {
            $new_image_url = './deletedcat/' . basename($image_url);
            if (copy($image_url, $new_image_url)) {
                echo "Image moved to deletecat folder successfully.";
            } else {
                echo "Error: Unable to move image to deletecat folder.";
            }
        }

        // Insert category data into deletedcat table
        $sql_insert_deleted_category = "INSERT INTO deletedcat (cid, cname, image_url, deleted_at) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
        $stmt_insert_deleted_category = $conn->prepare($sql_insert_deleted_category);
        $stmt_insert_deleted_category->bind_param("iss", $category_id, $row['cname'], $new_image_url);
        
        if ($stmt_insert_deleted_category->execute()) {
            echo "Category data added to deletedcat table successfully.";
        } else {
            echo "Error: Unable to add category data to deletedcat table.";
        }

        // Move products associated with this category to deleteprod table
        $sql_move_products = "INSERT INTO deleteprod (pid, pname, pc, price, image_url, description, nutrients, ingredients, created_at, wishlist, orders)
                             SELECT pid, pname, pc, price, CONCAT('./deletecat/', SUBSTRING_INDEX(image_url, '/', -1)) AS new_image_url, description, nutrients, ingredients, created_at, wishlist, orders
                             FROM products
                             WHERE pc = $category_id";
        $result_move_products = $conn->query($sql_move_products);

        if($result_move_products) {
            // Move images of products associated with this category to deletecat folder
            $sql_get_products_images = "SELECT image_url FROM products WHERE pc = $category_id";
            $result_get_products_images = $conn->query($sql_get_products_images);
            
            if ($result_get_products_images && $result_get_products_images->num_rows > 0) {
                while ($product_row = $result_get_products_images->fetch_assoc()) {
                    $product_image_url = $product_row['image_url'];
                    if (!empty($product_image_url) && file_exists($product_image_url)) {
                        $new_product_image_url = './deletedcat/' . basename($product_image_url);
                        if (copy($product_image_url, $new_product_image_url)) {
                            echo "Product image moved to deletecat folder successfully.";
                        } else {
                            echo "Error: Unable to move product image to deletecat folder.";
                        }
                    }
                }
            }
            
            // Delete products associated with this category from products table
            $sql_delete_products = "DELETE FROM products WHERE pc = $category_id";
            $result_delete_products = $conn->query($sql_delete_products);

            if($result_delete_products) {
                // Perform category deletion
                $sql_delete_category = "DELETE FROM categories WHERE id = $category_id";
                $result_delete_category = $conn->query($sql_delete_category);

                if($result_delete_category) {
                    // Delete the respective category folder
                    $category_folder = "./category/" . $category_name;
                    
                    if (deleteDirectory($category_folder)) {
                        echo "Category folder deleted successfully.";
                    } else {
                        echo "Error: Unable to delete category folder.";
                    }

                    $_SESSION['done'] = 1;
                    header("Location: category.php");
                    exit();
                } else {
                    echo "Error: Unable to delete category from database.";
                }
            } else {
                echo "Error: Unable to delete products associated with this category from products table.";
            }
        } else {
            echo "Error: Unable to move products associated with this category to deleteprod table.";
        }
    } else {
        echo "Error: Category not found.";
    }
} else {
    echo "Error: No category ID provided.";
}
?>
