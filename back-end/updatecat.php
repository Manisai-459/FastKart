<?php 
session_start();
include("db.php");

if(isset($_POST['cname'])) {
    $new_cname = strtolower(trim($_POST['cname']));
    
    // Check if the category name is actually being changed
    if($_SESSION['cname'] != $new_cname) {
        $old_directory = './category/'.$_SESSION['cname'];
        $new_directory = './category/'.$new_cname;

        // Rename the directory
        if (rename($old_directory, $new_directory)) {
            // Update the image URLs in the products table
            $sql = "UPDATE products SET image_url = REPLACE(image_url, ?, ?) WHERE pc = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $_SESSION['cname'], $new_cname, $_SESSION['cid']);
            $stmt->execute();
            $stmt->close();
        } else {
            echo "Error renaming directory.";
        }
    }
}
$url = $_SESSION['image_url'];
$target_dir = "./category/$new_cname/";
$url = "../back-end/category/$new_cname/".basename($url);
if (isset($_FILES["image"]) && !empty($_FILES["image"]["name"])) {
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        // Move uploaded file to target directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $url = '../back-end/category/'.$new_cname;
            $url .= '/' . basename($_FILES["image"]["name"]);
        }
    }
}
echo $new_cname;
echo $url;
  // Update the category name and URL in the categories table
  $sql = "UPDATE categories SET cname = ?, image_url = ? WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssi", $new_cname, $url, $_SESSION['cid']);
 if($stmt->execute()){
    $_SESSION['yes'] = "Successfully updated";
     header("Location: category.php");
    exit();
 }else{ 
     $_SESSION['no'] = "Category not updated";
    header("Location: category.php");
    exit();
}
$stmt->close();
  // Redirect back to the categories page
 
?>
