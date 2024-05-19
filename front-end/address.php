<?php
// Assuming you have established a database connection
include("db.php"); // Include your database connection script
session_start();
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $address = $_POST["add"];
    $pin = $_POST["pin"];
    $phno = $_POST["phno"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $state = $_POST["state"];
    $hno = $_POST['hno'];
    echo $hno;
    // Assuming you have the user_id available, replace '1' with the actual user ID
    $user_id = $_SESSION['id'];

   // Retrieve form data including the 'type' field
$type = $_POST["type"];

// Prepare insert statement
// Prepare insert statement
$sql = "INSERT INTO addresses (user_id, fname, lname, email, address, pin, phno, city, country, state, type, hno) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Check if the statement was prepared successfully
if ($stmt === false) {
    echo "Error: " . $conn->error;
    // Handle error as needed
} else {
    // Bind parameters to the statement
    $stmt->bind_param("isssssssssss", $user_id, $fname, $lname, $email, $address, $pin, $phno, $city, $country, $state, $type, $hno);

    // Execute the statement
    if ($stmt->execute()) {
        // Data inserted successfully, redirect to another page
        header("Location: user-dashboard.php"); 
        $_SESSION['added'] = "y" ;// Replace 'another_page.php' with your desired page
        exit(); // Ensure that script execution stops after redirection
    } else {
        echo "Error: " . $stmt->error;
        // Handle error as needed
    }
}


// Close statement and connection
$stmt->close();
}
?>
