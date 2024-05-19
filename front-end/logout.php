<?php
// Start session
session_start();
// Unset all session variables
$_SESSION = array();
// Destroy the session
// session_destroy();
$_SESSION['logout_message'] = "Successfully Logged Out";
// Redirect to the login page or any other page
header("Location: login.php");
exit();
?>