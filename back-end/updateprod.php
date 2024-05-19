<?php
session_start();
include("db.php");

// Loop through the $_POST array to check for submitted data
foreach ($_POST as $key => $value) {
    echo $key . ': ' . $value . '<br>'; // You can remove this line once you're done testing
}

// Initialize variables
$nutrients = '';
$ingredients = '';

// Extract nutrient and ingredient data from $_POST
foreach ($_POST as $key => $value) {
    if (substr($key, 0, 2) === 'n-') {
        $index = substr($key, 2);
        $nutrients .= ucwords($value) . ':' . $_POST['v-' . $index] . ';';
    }
    if (substr($key, 0, 2) === 'i-') {
        $index = substr($key, 2);
        $ingredients .= ucwords($value) . ';';
    }
}

// Remove trailing semicolons
$nutrients = rtrim($nutrients, '; ');
$ingredients = rtrim($ingredients, '; ');

// Get other data from $_POST
$pname = $_POST['pname'];
$product_description = $_POST['product_description'];
$cat = strtolower($_POST['cat']);
$available = $_POST['available'];
// Search for category ID
$sql = "SELECT id FROM categories WHERE cname = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $cat);
$stmt->execute();
$result = $stmt->get_result();
$category_id = "";
if ($result->num_rows > 0) {
    // Category found, get its ID
    $row = $result->fetch_assoc();
    $category_id = $row['id'];
    echo "Category ID: " . $category_id;
} else {
    // Category not found
    echo "Category not found.";
}

// Initialize variables for image handling
$image_tmp_name = "";
$image_name = "";
$target_file = "";

// Check if image data is provided
if (isset($_FILES['image1'])) {
    $image_tmp_name = $_FILES['image1']['tmp_name'];
    $image_name = $_FILES['image1']['name'];

    // Check if both temporary name and name are not empty
    if (!empty($image_tmp_name) && !empty($image_name)) {
        // Define target directory
        $target_dir = "../back-end/category/" . strtolower($cat) . "/";

        // Create directory if it doesn't exist
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        // Define target file path
        $target_file = $target_dir . basename($image_name);

        // Move uploaded file to target location
        move_uploaded_file($image_tmp_name, $target_file);
    } else {
        // If image data is not provided, use the existing image URL from session
        $target_file = $_SESSION['image_url'];
        unset($_SESSION['image_url']); // Unset session variable after use
    }
} else {
    // If image data is not provided, use the existing image URL from session
    $target_file = $_SESSION['image_url'];
    unset($_SESSION['image_url']); // Unset session variable after use
}

// Prepare SQL UPDATE statement
$sql = "UPDATE products 
        SET pname=?, pc=?, image_url=?, description=?, nutrients=?, ingredients=?, available=?
        WHERE pid=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sissssii", $pname, $category_id, $target_file, $product_description, $nutrients, $ingredients,$available, $_SESSION['prid']);
echo $_SESSION['prid'];
// Execute SQL UPDATE statement
if ($stmt->execute()) {
      // Data inserted successfully
       unset( $_SESSION['prid']);
      $_SESSION['done'] = 'Successfully Updated'; // Set session variable
      header("Location: products.php"); // Redirect to predict.php
      exit();
} else {
    // // Error updating product
    $_SESSION['no'] = 'Updation failed'; // Set session variable
    header("Location: products.php"); // Redirect to predict.php
    exit();
}

?>
