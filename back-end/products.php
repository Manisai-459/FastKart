
<?php 
include("db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/products.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:03:33 GMT -->
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
    <title>Fastkart - Product</title>

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

    <!-- Data Table css -->
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

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

                <!-- <form class="form-inline search-full" action="javascript:void(0)" method="get">
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
                </form> -->
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

            <!-- Container-fluid starts-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title d-sm-flex d-block">
                                        <h5>Products List</h5>
                                        
                                        <div class="right-options">
                                            <ul>
                                                <li>
                                                    <a class="btn btn-solid" href="add-new-product.php">Add Product</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                    <p>
                                    <p style="color: red;">
    <?php 
   
    if(isset($_SESSION['no'])){
        echo $_SESSION['no'];
        unset($_SESSION['no']);
    }
    ?>
</p>
<p style="color: green;">
    <?php 
    if(isset($_SESSION['y'])){
        echo $_SESSION['y'];
        unset($_SESSION['y']);
    }elseif(isset($_SESSION['done'])){
        echo $_SESSION['done'];
        unset($_SESSION['done']);
    }
    ?>
</p>

                                        </p>
                                        <div class="table-responsive">
                                            <table class="table all-package theme-table table-product" id="table_id">
                                                <thead>
                                                    <tr>
                                                    <?php 
                                                    $sql_columns = "SHOW COLUMNS FROM products";
                                                    $result_columns = $conn->query($sql_columns);
                                                    $column_names = array();
                                                    while ($row_columns = $result_columns->fetch_assoc()) {
                                                        $column_names[] = $row_columns['Field'];
                                                    }
                                                    foreach ($column_names as $column) {
                                                        if($column == "pid")
                                                            echo "<th>Product Id</th>";
                                                        elseif($column == "pname")
                                                            echo "<th>Product Name</th>";
                                                        elseif($column == "image_url")
                                                            echo "<th>Product Image</th>";
                                                        elseif($column == "pc")
                                                            echo "<th>Product Category</th>";
                                                        else
                                                        echo "<th>".ucfirst($column)."</th>";
                                                    }
                                                    ?>
                                                    <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="assets/images/product/1.png" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Aata Buscuit</td>

                                                        <td>Buscuit</td>

                                                        <td>12</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-danger">
                                                            <span>Pending</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr> -->
                                                    <?php
$sql_data = "SELECT * FROM products";
$result_data = $conn->query($sql_data);
while ($row_data = $result_data->fetch_assoc()) {
    echo "<tr>";
    foreach ($column_names as $column) {
        echo "<td>";
        if ($column == 'image_url') {
            echo '
                <div class="table-image">
                    <img src="' . $row_data[$column] . '" class="img-fluid" alt="">
                </div>
            ';
        } elseif ($column == 'description' || $column == 'nutrients' || $column == 'ingredients') {
            echo '<div style="width: 400px; overflow: hidden; white-space: pre-wrap;">' . $row_data[$column] . '</div>'; // Adjust the width as needed
        }elseif($column == 'pc'){
            $category_id = $row_data[$column];
            $sql_category = "SELECT cname FROM categories WHERE id = $category_id";
            $result_category = $conn->query($sql_category);
            if ($result_category->num_rows > 0) {
                $row_category = $result_category->fetch_assoc();
                echo ucfirst($row_category['cname']);
            }
        }else
            echo  $row_data[$column];
        echo "</td>";
    }
    echo '<td>
    <ul>
        <li>
            <a href="editprod.php?pid=' . $row_data['pid'] . '">
                <i class="ri-pencil-line"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="delete-category" data-bs-toggle="modal" data-bs-target="#exampleModalToggle" data-category-id="' . $row_data['pid'] . '">
                <i class="ri-delete-bin-line"></i>
            </a>
        </li>
    </ul>
</td>';


echo "</tr>";

    echo "</tr>";
}
?>


                                                    <!-- <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="assets/images/product/2.png" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Cold Brew Coffee</td>

                                                        <td>Drinks</td>

                                                        <td>10</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="assets/images/product/3.png" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Peanut Butter Cookies</td>

                                                        <td>Cookies</td>

                                                        <td>9</td>

                                                        <td class="td-price">$86.35</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="assets/images/product/4.png" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Wheet Flakes</td>

                                                        <td>Flakes</td>

                                                        <td>8</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-danger">
                                                            <span>Pending</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="assets/images/product/5.png" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Potato Chips</td>

                                                        <td>Chips</td>

                                                        <td>23</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="assets/images/product/6.png" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Tuwer Dal</td>

                                                        <td>Dals</td>

                                                        <td>50</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="assets/images/product/7.png" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Almond Milk</td>

                                                        <td>Milk</td>

                                                        <td>25</td>

                                                        <td class="td-price">$121.43</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="assets/images/product/11.png"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                        </td>

                                                        <td>Wheat Bread</td>

                                                        <td>Breads</td>

                                                        <td>6</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-danger">
                                                            <span>Pending</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="assets/images/product/8.png" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Dog Food</td>

                                                        <td>Pet Food</td>

                                                        <td>11</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="assets/images/product/9.png" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>Fresh Meat</td>

                                                        <td>Meats</td>

                                                        <td>18</td>

                                                        <td class="td-price">$95.97</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="assets/images/product/10.png"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                        </td>

                                                        <td>Classic Coffee</td>

                                                        <td>Coffee</td>

                                                        <td>25</td>

                                                        <td class="td-price">$86.35</td>

                                                        <td class="status-close">
                                                            <span>Approved</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody> -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

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
        </div>
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

    <!-- Delete Modal Box Start -->
    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>The permission for the use/group, preview is inherited from the object, object will create a
                            new permission for this object</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                    <a type="button" id="mama" class="btn btn-animation btn-md fw-bold" data-bs-target="#exampleModalToggle2"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Yes</a>
                </div>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get all delete buttons
        var deleteButtons = document.querySelectorAll(".delete-category");

        // Add click event listener to each delete button
        deleteButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                var categoryId = this.getAttribute("data-category-id");
                // Set the URL of the "Yes" button with the category ID appended
                var yesButton = document.getElementById("mama");
                yesButton.href = "delprod.php?id=" + categoryId;
            });
        });

        // Add event listener for the "Yes" button
        var yesButton = document.getElementById("mama");
        yesButton.addEventListener("click", function(event) {
            // Prevent the default behavior of the anchor tag (navigating to the href)
            event.preventDefault();
            // Get the URL from the href attribute of the "Yes" button
            var url = this.href;
            // Navigate to the generated URL
            window.location.href = url;
        });
    });
</script>
    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box text-center">
                        <div class="wrapper">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>
                        </div>
                        <h4 class="text-content">It's Removed.</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Modal Box End -->

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

    <!-- Data table js -->
    <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/custom-data-table.js"></script>

    <!-- sidebar effect -->
    <script src="assets/js/sidebareffect.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/products.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:03:33 GMT -->
</html>