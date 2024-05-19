<?php
session_start();
include("db.php");
if($_POST['save']){
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $password_from_database = $row['password'];
        if($password === $password_from_database){
            $_SESSION['user'] =  ucfirst($row['fname']);
            $_SESSION['id'] = $row['id'];
            header("Location: index.php");
            exit();
        }else{
            $_SESSION['password_error'] = "Invalid Password. Please try again.";
            header("Location: login.php");
            exit();
        }
        
    } else {
        $_SESSION['mail_error'] = "User not found /  Incvalid Email . Please try again.";
        header("Location: login.php");
        exit();
    }
}
?>
