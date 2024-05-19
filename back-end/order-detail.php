
<?php 
include("db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/order-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:03:34 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Fastkart - Order Details</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="assets/css/linearicon.css">

    <!-- Themify icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">

    <!-- Feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/remixicon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <i data-feather="chevrons-up"></i>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper m-0">
                <div class="header-logo-wrapper p-0">
                    <div class="logo-wrapper">
                        <a href=" index.php">
                            <img class="img-fluid main-logo" src="assets/images/logo/1.png" alt="logo">
                            <img class="img-fluid white-logo" src="assets/images/logo/1-white.png" alt="logo">
                        </a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                        <a href=" index.php">
                            <img src="assets/images/logo/1.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

               
                <div class="nav-right col-6 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <span class="header-search">
                                <i class="ri-search-line"></i>
                            </span>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box">
                                <i class="ri-notification-line"></i>
                                <span class="badge rounded-pill badge-theme">4</span>
                            </div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>
                                    <i class="ri-notification-line"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-primary"></i>Delivery processing <span
                                            class="pull-right">10 min.</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-success"></i>Order Complete<span
                                            class="pull-right">1 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-info"></i>Tickets Generated<span
                                            class="pull-right">3 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-danger"></i>Delivery Complete<span
                                            class="pull-right">6 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href="javascript:void(0)">Check all notification</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <div class="mode">
                                <i class="ri-moon-line"></i>
                            </div>
                        </li>
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">
                                <img class="user-profile rounded-circle" src="assets/images/users/4.jpg" alt="">
                                <div class="user-name-hide media-body">
                                    <span>Bhavana Mallesh Bhaai</span>
                                    <p class="mb-0 font-roboto">Admin<i class="middle ri-arrow-down-s-line"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="all-users.php">
                                        <i data-feather="users"></i>
                                        <span>Users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="order-list.php">
                                        <i data-feather="archive"></i>
                                        <span>Orders</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="support-ticket.html">
                                        <i data-feather="phone"></i>
                                        <span>Spports Tickets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="profile-setting.html">
                                        <i data-feather="settings"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        href="javascript:void(0)">
                                        <i data-feather="log-out"></i>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div id="sidebarEffect"></div>
                <div>
                    <div class="logo-wrapper logo-wrapper-center">
                        <a href=" index.php" data-bs-original-title="" title="">
                            <img class="img-fluid for-white" src="assets/images/logo/full-white.png" alt="logo">
                        </a>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href=" index.php">
                            <img class="img-fluid main-logo main-white" src="assets/images/logo/1-white.png" alt="logo">
                            <img class="img-fluid main-logo main-dark" src="assets/images/logo/logo-white.png"
                                alt="logo">
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>

                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"></li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href=" index.php">
                                        <i class="ri-home-line"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-store-3-line"></i>
                                        <span>Product</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="products.php">Products</a>
                                        </li>

                                                                                <li>
                                            <a href="add-new-product.php">Add New Products</a>
                                        </li>
                                        <li>
                                            <a href="deleteprod.php">Deleted Products</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>Category</span>
                                    </a>
                                  <ul class="sidebar-submenu">
                                        <li>
                                            <a href="category.php">Category List</a>
                                        </li>

                                        <li>
                                            <a href="add-new-category.php">Add New Category</a>
                                        </li>
                                        <li>
                                            <a href="deletedcat.php">Deleted Categoriesy</a>
                                        </li>
                                    </ul>
                                </li>

                                    

                                  <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="all-users.php">
                                        <i class="ri-user-3-line"></i>
                                        <span>Users</span>
                                    </a>
                                   
                                </li>

                                   

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="media.html">
                                        <i class="ri-price-tag-3-line"></i>
                                        <span>Media</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                       <a class="sidebar-link sidebar-title link-nav" href="order-list.php">
                                        <i class="ri-archive-line"></i>
                                        <span>Orders</span>
                                    </a>
                                    
                                </li>

                                

                               
                                  

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="product-review.html">
                                        <i class="ri-star-line"></i>
                                        <span>Product Review</span>
                                    </a>
                                </li>

                                

                                 

                                   
                            </ul>
                        </div>

                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            <!-- tracking section start -->
            <div class="page-body">
                <!-- tracking table start -->
                <?php 
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $sql = "SELECT * from orders where id = '$id'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                }
                ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header title-header-block package-card">
                                        <div>
                                            <h5>Order #<?php echo $row['tracking_id']?></h5>
                                        </div>
                                        <div class="card-order-section">
                                            <ul>
                                                <li><?php 
                                                 $timestamp = strtotime($row['ordered_at']);
                                                 $formatted_date = date('j M, h:i A', $timestamp);
                                                 
                                                 echo $formatted_date; 
                                                 ?></li>
                                                 
                                                 <li>
                                                    <?php
                                                     $q = 0;
                                                     $quantity = explode(",",$row['quantity']);
                                                     for($i=0; $i<count($quantity); $i++){
                                                       $q += $quantity[$i];
                                                     }
                                                     echo $q; 
                                                    ?>
                                                 </li>
                                                 <li>
                                                   Rs. <?php echo $row['total'];?>
                                                 </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-inner cart-section order-details-table">
                                        <div class="row g-4">
                                            <div class="col-xl-8">
                                                <div class="table-responsive table-details">
                                                    <table class="table cart-table table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="2">Items</th>
                                                                <th class="text-end" colspan="2">
                                                                    <a href="javascript:void(0)"
                                                                        class="theme-color"></a>
                                                                </th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            
                                                                <?php 
                                                                $c = 0;
                                                                $product_id = explode(',',$row["products"]);
                                                                for($i=0; $i<count($product_id); $i++){
                                                                    $pid = $product_id[$i];
                                                                    $sqli = "SELECT * from products where pid = '$pid'";
                                                                    $results = mysqli_query($conn, $sqli);
                                                                    $rows = mysqli_fetch_assoc($results);
                                                                    echo '<tr class="table-order">';
                                                                    echo ' <td>
                                                                    <a href="javascript:void(0)">
                                                                        <img src="'.$rows['image_url'].'"
                                                                            class="img-fluid blur-up lazyload" alt="">
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <p>Product Name</p>
                                                                    <h5>'.$rows['pname'].'</h5>
                                                                </td>
                                                                <td>
                                                                    <p>Quantity</p>
                                                                    <h5>'.$quantity[$i].'</h5>
                                                                </td>
                                                                <td>
                                                                    <p>Price</p>
                                                                    <h5>'.$rows['price']*$quantity[$i].'.00</h5>
                                                                </td>';
                                                                    echo '<tr>';
                                                                    $c += $rows['price']*$quantity[$i];
                                                                  }
                                                                ?>
                                                               
                                                           

                                                        </tbody>

                                                        <tfoot>
                                                            <tr class="table-order">
                                                                <td colspan="3">
                                                                    <h5>Subtotal :</h5>
                                                                </td>
                                                                <td>
                                                                    <h4>Rs.<?php echo $c?>.00</h4>
                                                                </td>
                                                            </tr>

                                                            <tr class="table-order">
                                                                <td colspan="3">
                                                                    <h5>Tax(GST) :</h5>
                                                                </td>
                                                                <td>
                                                                    <h4>Rs.50.00</h4>
                                                                </td>
                                                            </tr>
                                                            <tr class="table-order">
                                                                <td colspan="3">
                                                                    <h5>Shipping :</h5>
                                                                </td>
                                                                <td>
                                                                    <h4>Rs.100.00</h4>
                                                                </td>
                                                            </tr>

                                                            <?php 
                                                            if($row['delivery_option'] == "Fast Delivery Option"){
                                                                echo '<tr class="table-order">
                                                                <td colspan="3">
                                                                    <h5>Fast Delivery charge :</h5>
                                                                </td>
                                                                <td>
                                                                    <h4>Rs.100.00</h4>
                                                                </td>
                                                            </tr>';
                                                            }
                                                            ?>

                                                            <tr class="table-order">
                                                                <td colspan="3">
                                                                    <h4 class="theme-color fw-bold">Total Price :</h4>
                                                                </td>
                                                                <td>
                                                                    <h4 class="theme-color fw-bold">Rs.<?php echo $row['total'];?></h4>
                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="order-success">
                                                    <div class="row g-4">
                                                        <h4>summery</h4>
                                                        <ul class="order-details">
                                                            <li>Order ID: <?php echo $row['tracking_id'];?></li>
                                                            <li>Order Date: <?php  $timestamp = strtotime($row['ordered_at']);
                                                 $formatted_date = date('j M, h:i A', $timestamp);
                                                 
                                                 echo $formatted_date;?></li>
                                                            <li>Order Total: <?php echo $row['total'];?></li>
                                                        </ul>

                                                        <h4>shipping address</h4>
                                                        <ul class="order-details">
                                                            <li><?php echo $row['address'];?>5</li>
                                                        </ul>

                                                        <div class="payment-mode">
                                                            <h4>payment method</h4>
                                                            <p><?php  if($row['payment_method'] == "netb"){
                                                            echo "<td>Net Banking</td>";
                                                          }else if($row['payment_method'] == "cod"){
                                                            echo "<td>Cash on delivery</td>";
                                                          }else if($row['payment_method'] == "wallet"){
                                                            echo "<td>Wallet</td>";
                                                          }else if($row['payment_method'] == "card"){
                                                            echo "<td>Credit/ Debit card</td>";
                                                          }?></p>
                                                        </div>
                                                        <h4>Order Status</h4>
                                                        <ul class="order-details">
                                                            <?php 
                                                            if( $row['delivery_status'] == "Cancelled"){
                                                              echo  '<li style="color: red;">Cancelled</li>';
                                                            }else
                                                            echo "<li style='color: green;'>".$row['delivery_status']."</li>";?></li>
                                                        </ul>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- section end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tracking table end -->

                <div class="container-fluid">
                    <!-- footer start-->
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- tracking section End -->
        </div>
    </div>
    <!-- page-wrapper End -->

    <!-- Modal start -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                    <p>Are you sure you want to log out?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="button-box">
                        <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- latest js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js -->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- scrollbar simplebar js -->
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>

    <!-- Sidebar js -->
    <script src="assets/js/config.js"></script>

    <!-- customizer js -->
    <script src="assets/js/customizer.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!-- sidebar effect -->
    <script src="assets/js/sidebareffect.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/order-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:03:34 GMT -->
</html>