<?php
 session_start();
include("db.php");
$nutrients = ''; // Initialize an empty string to store the formatted data
$ingredients = '';
// Loop through the $_POST array
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

$nutrients = rtrim($nutrients, '; ');
$ingredients =  rtrim($ingredients, '; ');


$pname = $_POST['pname'];
$cat = $_POST['cat'];
$product_description = $_POST['product_description'];
$image_tmp_name = $_FILES['image1']['tmp_name'];
$image_name = $_FILES['image1']['name'];
$available = $_POST['available'];
$cat = strtolower($_POST['cat']);

// Search for category ID
$sql = "SELECT id FROM categories WHERE cname = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $cat);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Category found, get its ID
    $row = $result->fetch_assoc();
    $category_id = $row['id'];
    echo "Category ID: " . $category_id;
} else {
    // Category not found
    echo "Category not found.";
}

$target_dir = "../back-end/category/" . strtolower($cat) . "/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}
$target_file = $target_dir . basename($image_name);
move_uploaded_file($image_tmp_name, $target_file);

// Insert data into the database
$sql = "INSERT INTO products (pname, pc, price, image_url, description, nutrients, ingredients,available) VALUES (?, ?, ?, ?, ?, ?, ?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siissssi", $pname, $pc, $price, $image_url, $description, $nutrients, $ingredients,$available);

// Assuming pc, price, nutrients, and ingredients are provided elsewhere in the code
$pc = $category_id; // placeholder for pc value
$price =  $_POST['price']; // placeholder for price value
$image_url = $target_file;
$description = $product_description;
$_SESSION['mama'] = 1;
if ($stmt->execute()) {
    // Data inserted successfully
   
    $_SESSION['done'] = 'yes'; // Set session variable
    header("Location: add-new-product.php"); // Redirect to predict.php
    exit();
} else {
    $_SESSION['no'] = 'Duplicate Products found'; // Set session variable
    header("Location: add-new-product.php"); // Redirect to predict.php
    exit();
}

?>