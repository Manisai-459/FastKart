<?php 
include("../front-end/db.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/fastkart/invoice/invoice-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:02:33 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
    <title>On-demand last-mile delivery</title>

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body class="bg-light">
    <section class="theme-invoice-2">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-8 mx-auto my-3">
                    <div class="invoice-wrapper">
                        <div class="invoice-header">
                            <div class="header-contain">
                                <div class="header-left">
                                    <img src="assets/images/logo.svg" alt="">
                                </div>
                                <div class="header-right">
                                    <h3>INVOICE</h3>
                                </div>
                            </div>
                        </div>
                    <?php 
                    $id = $_GET['id'];
                    $sql = 'SELECT * from orders where id = "'.$id.'"';
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $user_data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT fname, lname FROM users WHERE id = " . $row['user_id']));
                                                       
                    
                    ?>
                        <div class="invoice-body">
                            <div class="top-sec">
                                <div class="address-detail">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="details-box">
                                                <div class="address-box">
                                                    <ul>
                                                        <li><?php echo ucwords($user_data['fname'])." ".ucwords($user_data['lname']);?></li>
                                                        <li><?php echo '<div style="width: 450px; overflow: hidden; white-space: pre-wrap;">'. $row['address'].'</div>';?></li>
                                                       
                                                    </ul>
                                                </div>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="body-date">
                                <ul>
                                    <li class="text-content"><span class="theme-color">Issue Date : </span> <?php 
                                  
                                    $formatted_date = date('d F, Y', strtotime($row['delivered_at']));
                                    echo $formatted_date;
                                    
                                    ?></li>
                                    <li class="text-content"><span class="theme-color">Tracking Id : </span> <?php echo $row['tracking_id'];?></li>
                                    <li class="text-content"><span class="theme-color">Email : </span><?php 
                                    $x = mysqli_fetch_assoc(mysqli_query($conn, "SELECT email FROM users WHERE id = " . $row['user_id']));
                                    echo $x['email'];
                                    ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="table-responsive table-borderless">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th class="text-start">Item detail</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Amout</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        
                                        $pids = explode(",", $row['products']);
                                        $rates = explode(",", $row['rate']);
                                        $quantity = explode(",",$row['quantity']);
                                        for($i=0; $i<count($pids); $i++){
                                            echo "<tr>";
                                            $sqli = 'SELECT * from products where pid =  "' .$pids[$i]. '"';
                                            $results = mysqli_query($conn, $sqli);
                                            $rows = mysqli_fetch_assoc($results);
                                            echo '<td class="text-content">'.($i+1).'</td>';
                                            $s = mysqli_fetch_assoc(mysqli_query($conn, "SELECT cname FROM categories WHERE id = " . $rows['pc']));
                                            echo '<td>
                                            <ul class="table-details">
                                                <li class="text-title">'. $rows['pname'].'<br></li>
                                            </ul>
                                        </td>';
                                        echo ' <td>'.$quantity[$i].'</td>
                                        <td>Rs.'.$rates[$i].'</td>
                                        <td>Rs.'.$quantity[$i] * $rates[$i].'.00</td>';
                                        echo "</tr>";
                                        }
                                        ?>
                                     </tbody>
                                    <tfoot>
                                        <?php 
                                        if($row['delivery_option'] == "Fast Delivery Option"){
                                            echo '     <tr>
                                            <td colspan="5">
                                                <ul class="table-price">
                                                    <li>Fast Delivery Charges</li>
                                                    <li class="theme-color">Rs 100.00</li>
                                                </ul>
                                            </td>
                                        </tr>';
                                        }
                                        ?>
                                        <tr>
                                            <td colspan="5">
                                                <ul class="table-price">
                                                    <li>Delivery Charges and Tax</li>
                                                    <li class="theme-color">Rs 150.00</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <ul class="table-price">
                                                    <li>GRAND TOTAL</li>
                                                    <li class="theme-color">Rs <?php echo
                                                    $row['total']?>.00</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <?php if($row['canceled_at'] != ""){?>
                                            <tr>
                                            <td colspan="5">
                                                <ul class="table-price">
                                                    <li style="color: red;">Order Cancelled, Payment Refunded</li>
                                                   
                                                </ul>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <div class="invoice-footer pt-0">
                            <div class="button-group">
                                <ul>
                                    <li>
                                        <button class="btn theme-bg-color text-white rounded"
                                            onclick="window.print();">Export As PDF</button>
                                    </li>
                                    <li>
                                        <button class="btn text-white print-button rounded ms-2"
                                            onclick="window.print();">Print</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/invoice/invoice-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:02:33 GMT -->
</html>