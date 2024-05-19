<?php
include("db.php");
// foreach ($_POST as $key => $value) {
//     echo "$key: $value<br>";
// }
$fname =strtolower($_POST['fname']);
$lname = strtolower($_POST['lname']);
$email = strtolower($_POST['email']);
$pin = $_POST['pin'];
$phno = $_POST['phno'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$hno = $_POST['hno'];
$city = $_POST['city'];
$addr = $_POST['addr'];
$country = $_POST['country'];
$state = $_POST['state'];
$password = $_POST['password'];
$cpin = $_POST['cpin'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];

// Step 3: Construct SQL INSERT statement
$sql = "INSERT INTO users (fname, lname, email, pin, phno, gender, dob, hno, city, addr, country, state, password, cpin,q1,q2,q3,q4)
        VALUES ('$fname', '$lname', '$email', '$pin', '$phno', '$gender', '$dob', '$hno', '$city', '$addr', '$country', '$state', '$password','$cpin','$q1','$q2','$q3','$q4')";

// Step 4: Execute SQL query
try {
    // Step 6: Execute SQL query
    if ($conn->query($sql) === TRUE) {
        // Redirect to Reg_success.php if successful
        header("Location: Reg_success.php");
        exit();
    } else {
        // Redirect to Reg_failed.php if unsuccessful
        header("Location: Reg_failed.php");
        exit();
    }
} catch (Exception $e) {
    // Handle exception, e.g., log error
    echo "An error occurred: " . $e->getMessage();
    // Redirect to Reg_failed.php in case of exception
    header("Location: Reg_failed.php");
    exit();
}

// Step 5: Close MySQL connection

?>
