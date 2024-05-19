<?php 
include("db.php");
session_start();
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Loop through form data and display key-value pairs
    
    // Handle file upload
    if (isset($_FILES["image"]) && !empty($_FILES["image"]["name"])) {
        $cname = strtolower(trim($_POST['cname']));
        // Assuming 'cname' is the name attribute of your category name input field
        $sql = "SELECT * FROM categories WHERE cname = '$cname'";
        $result = $conn->query($sql);
        if ($result->num_rows === 0){
        $target_dir = "./category/$cname/"; // Directory where you want to store uploaded images, create a folder with category name
        if (!file_exists($target_dir)) {
            mkdir($target_dir,0777, true); // Create directory if it doesn't exist
        }
        
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        // Check if file is an image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            // Move uploaded file to target directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                $url = '../back-end/category/'.$cname;
                $url .= '/' . basename($_FILES["image"]["name"]);
                $sql = "INSERT INTO categories (cname, image_url) VALUES ('$cname', '$url')";
                if ($conn->query($sql)) {
                   echo "New record created successfully";
                    $_SESSION['created'] = "Category has been added.";
                    header('Location: add-new-category.php');
                    exit;
                }
            } else {
                $_SESSION['failed'] = "Duplicate Category/Image found.";
                    header('Location: add-new-category.php');
                    exit;
            }
        } else {
            $_SESSION['notfile'] = "File is not an image";
            header('Location: add-new-category.php');
            exit;
        }
    }else {
        $_SESSION['failed'] = "Duplicate Category/Image found.";
            header('Location: add-new-category.php');
            exit;
    } 
}else {
    $_SESSION['notfound'] = "File is not found";
    header('Location: add-new-category.php');
    exit;
}
}
?>
