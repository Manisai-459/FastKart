<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php 
include("db.php");?>

<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/order-tracking.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:02:28 GMT -->
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
    <title>Fastkart - Order Tracking</title>

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

    <!--Dropzon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/dropzone.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/remixicon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/chartist.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- Bootstrap-tag input css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap-tagsinput.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <!-- tap on top start-->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end-->

    <!-- page-wrapper Start-->
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

                <form class="form-inline search-full" action="javascript:void(0)" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Fastkart .." name="q" title="" autofocus>
                                <i class="close-search" data-feather="x"></i>
                                <div class="spinner-border Typeahead-spinner" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
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

            <!-- Order Tracking Seation starts-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        
                                        <div class="card-body">
                                            <div class="title-header option-title">
                                                <h5>Order Tracking</h5>
                                            </div>
                                            <div class="row">
                                                <?php 
                                                $id = $_GET['id'];
                                                 $sql = "SELECT * from orders where id = '$id'";
                                                 $result = mysqli_query($conn, $sql);
                                                 $row = mysqli_fetch_assoc($result)
                                                ?>
                                                <div class="col-12 overflow-hidden">
                                                    <div class="order-left-image">
                                                    
                                                        <div class="order-image-contain">
                                                            <h4><?php echo $_GET['n'];?></h4>
                                                            <div class="tracker-number">
                                                                <p>Tracking Id : <span><?php echo $row['tracking_id'];?></span></p>
                                                                <p>From : <span>Food Point, Neerukonda</span></p>
                                                                <p>To : <span><?php echo $row['address'];?></span></p>
                                                                <p>Type : <span><?php echo $row['delivery_option'];?></span></p>
                                                                <?php 
                                                                if($row['payment_method'] != "cod"){
                                                                   echo '<p>Payment : <span>Done</span></p>';
                                                                }else{
                                                                    echo '<p>Payment : <span>Yet to be Done</span></p>';
                                                                }
                                                                    ?>
                                                                <p></p>
                                                                <p>Order Placed : <span><?php  $timestamp = strtotime($row['ordered_at']);
                                                 $formatted_date = date('j M, h:i A', $timestamp);
                                                 
                                                 echo $formatted_date;?></span></p>
                                                            </div>
                                                            <h5>Your items is on the way. Tracking information will be
                                                                available within 24 hours.</h5>
                                                        </div>


                                                        
                                            <?php if($row['delivered_at'] == "" and $row['canceled_at'] == ""){?>
                                                        <form method="post" action="update.php?id=<?php echo $_GET['id']?>&n=<?php echo $_GET['n']?>" class="order-image-contain">
                                                            
                                                            <div class="tracker-number">
                                                            <div class="theme-form theme-form-2 mega-form" >
                                                            <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-sm-5 col-form-label form-label-title">Update Delivery status</label>
                                                    <div class="col-sm-5">
                                                        <select class="js-example-basic-single w-100" name="u" id="stateSelect">
                                                        <option value="-">-</option>
                                                              <?php 
                                                             if($row['approved_at'] == ""){
                                                                    echo '<option value="a">Approve order</option>';
                                                             }
                                                             if($row['delivered_at'] == ""){
                                                                echo '<option value="d">Ordered Delivered</option>';
                                                             }
                                                             
                                                            ?> 
                                                        </select>
                                                        <div class="card-footer text-end border-0 pb-0 d-flex justify-content-end">
                                            <button class="btn btn-primary me-3" name="submit" value="s">Submit status</button>
                                            <button class="btn btn-outline" value="c" name="cancel" value="c">Cancel order</button>
                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                              
                                                            </div>
                                                            </form>
                                                  <?php }?>  </div>
                                                </div>

                                                <ol class="progtrckr">
                                                    <li class="progtrckr-done">
                                                        <h5>Request for order Approval</h5>
                                                        <h6><?php  $timestamp = strtotime($row['ordered_at']);
                                                 $formatted_date = date('j M, h:i A', $timestamp);
                                                 
                                                 echo $formatted_date;?></h6>
                                                    </li>


                                            <?php 
                                            if( $row['approved_at'] == "" and $row['canceled_at'] != "" ){
                                                echo '<li class="progtrckr-done">';
                                                $timestamp = strtotime($row['canceled_at']);
                                                $formatted_date = date('j M, h:i A', $timestamp);
                                                echo '<h5>Order Cancled by: '.ucwords($row['cancelled_by']).'</h5>';
                                                echo '<h6>'.$formatted_date.'</h6>';
                                                echo '<li>';

                                            }else{
                                            ?>
                                                    <li class="progtrckr-<?php if($row['approved_at'] != "") echo "done"; else echo "todo"?>">
                                                        <h5>Product Approval</h5>
                                                        <h6><?php if($row['approved_at'] != "") { $timestamp = strtotime($row['approved_at']);
                                                 $formatted_date = date('j M, h:i A', $timestamp);
                                                 
                                                 echo $formatted_date;} else echo ""?></h6>
                                                    </li>



                                                <?php 
                                                if($row['canceled_at'] != "" ){
                                                    echo '<li class="progtrckr-done">';
                                                    $timestamp = strtotime($row['canceled_at']);
                                                    $formatted_date = date('j M, h:i A', $timestamp);
                                                    echo '<h5>Order Cancled by: '.ucwords($row['cancelled_by']).'</h5>';
                                                    echo '<h6>'.$formatted_date.'</h6>';
                                                    echo '<li>';
                                                }else{
                                                ?>

                                                    <li class="progtrckr-<?php if($row['delivered_at'] != "") echo "done"; else echo "todo"?>">
                                                        <h5>Delivered?</h5>
                                                        <h6><?php if($row['delivered_at'] != "") { $timestamp = strtotime($row['delivered_at']);
                                                 $formatted_date = date('j M, h:i A', $timestamp);
                                                 
                                                 echo $formatted_date;} else echo ""?></h6>
                                                    </li>
                                                <?php }}?>
                                                </ol>
                                                
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- footer start-->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer end-->
            </div>
            <!-- Order Tracking Seation End-->
        </div>
        <!-- Page Body End-->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
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
    <!-- Modal End -->

    <!-- latest js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>

    <!-- feather icon js -->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- scrollbar simplebar js -->
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>

    <!-- Sidebar js -->
    <script src="assets/js/config.js"></script>

    <!-- bootstrap tag-input js -->
    <script src="assets/js/bootstrap-tagsinput.min.js"></script>

    <!-- customizer js -->
    <script src="assets/js/customizer.js"></script>

    <!-- customizer js -->
    <script src="assets/js/sidebar-menu.js"></script>

    <!--Dropzon js -->
    <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/notify/index.js"></script>

    <!-- sidebar effect -->
    <script src="assets/js/sidebareffect.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>

</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/order-tracking.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:02:29 GMT -->
</html>