<?php
include("db.php");
session_start();
function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// Generate a 5-character random string
$randomString = generateRandomString(5);
echo $randomString;
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get data from POST
    $user_id = $_SESSION['id'];
    $address = $_POST['address'];
    $delivery_option = $_POST['delivery_option'];
    $payment_method = $_POST['flexRadioDefault'];
    $card_number = $_POST['cardname'];
    $expiry_date = $_POST['cardexp'];
    $cvv = $_POST['cardcvv'];
    $password = $_POST['cardpass'];
    $bank = isset($_POST['bank']) ? $_POST['bank'] : '-';
    $wallet = isset($_POST['wallet']) ? $_POST['wallet'] : '-';
   
    $products = '';
    $rate = '';
    $quantity = '';
    $total = 150;
    $delivery_status = "Pending";

    if($delivery_option == "Fast Delivery Option"){
        $total += 100;
    }


    $products = '';
    $rate = '';
    $quantity = '';
    $sql = "SELECT * FROM wishcart WHERE user_id = '" . $_SESSION['id'] . "' and wc = 0";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $pid = $row['pid'];
            $q = $row['quantity'];
            $sqli = "SELECT * FROM products WHERE pid = '" . $row['pid'] . "'";
            $results = mysqli_query($conn, $sqli);
            $rows = mysqli_fetch_assoc($results);
            
            // Concatenate product IDs
            $products .= $pid . ',';
            
            // Calculate total price
            $total += (floatval($rows['price']) * intval($q));
            
            // Concatenate prices
            $rate .= $rows['price'] . ',';
            
            // Concatenate quantities
            $quantity .= $q . ',';
        }
        // Remove the trailing comma from concatenated strings
        $products = rtrim($products, ',');
        $rate = rtrim($rate, ',');
        $quantity = rtrim($quantity, ',');
    }
    $tracking_id = generateRandomString(5);
    $cooking_instructions ='-';
    if(isset($_POST['cooking_instructions'])){
        $cooking_instructions = htmlspecialchars($_POST["cooking_instructions"]);
    }
    // SQL query to insert data into payment_details table using prepared statement
    $sql = "INSERT INTO orders (user_id, address, delivery_option, payment_method, card_number, expiry_date, cvv, password, bank, wallet, products, rate, quantity, total, delivery_status,tracking_id,cooking_instructions) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "issssssssssssdsss", $user_id, $address, $delivery_option, $payment_method, $card_number, $expiry_date, $cvv, $password, $bank, $wallet, $products, $rate, $quantity, $total, $delivery_status,$tracking_id,$cooking_instructions);
        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Check if the insertion was successful
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "Data inserted successfully.";
            $sql_delete = "DELETE FROM wishcart WHERE user_id = '" . $_SESSION['id'] . "' and wc = 0";

    if (mysqli_query($conn, $sql_delete)) {
       $_SESSION['orderplaced'] = "Order Successfully Placed";
       header("Location: order-success.php?orderid=$tracking_id");
       exit;
    } else {
        echo "Error removing records from wishcart: " . mysqli_error($conn);
    }
        } else {
            echo "Error: Unable to insert data.";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Unable to prepare statement.";
    }

    // Close the connection
    mysqli_close($conn);
} else {
    echo "No data sent via POST.";
}
?>
