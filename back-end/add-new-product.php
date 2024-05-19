<?php 
session_start();
include("db.php");?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/add-new-product.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:02:22 GMT -->
<head>
    <!-- meta data -->
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
    <title>Fastkart - Add New Product</title>

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="assets/css/linearicon.css">

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Themify icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">

    <!--Dropzon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/dropzone.css">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/remixicon.css">

    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- Bootstrap-tag input css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap-tagsinput.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper start -->
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
                                <input required class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
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

        <!-- Page Body start -->
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

            <div class="page-body">

                <!-- New Product Add Start -->
                <div class="container-fluid">
                    <div class="row">
                        <form method="post" action="addproduct.php" id="myForm" enctype="multipart/form-data">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-8 m-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Product Information</h5>
                                                <br>
                                                <?php 
                                                if(isset($_SESSION['mama']) == 1){
                                                        if(isset( $_SESSION['done'] )){
                                                            unset($_SESSION['done']);
                                                            echo "Product Successfully Added";
                                                        }else{
                                                            unset($_SESSION['no']);
                                                            echo "Product Failed to Add";
                                                        }
                                                        unset($_SESSION['mama']);
                                                }

                                                ?>
                                            </div>

                                            <div class="theme-form theme-form-2 mega-form" >
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Product
                                                        Name</label>
                                                    <div class="col-sm-9">
                                                        <input required class="form-control" name="pname"  type="text"
                                                            placeholder="Product Name">
                                                    </div>
                                                </div>

                                                

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-sm-3 col-form-label form-label-title">Category</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100" name="cat" id="stateSelect">
                                                        <option value="-">-</option>
                                                              <?php 
                                                             
                                                             $sql_data = "SELECT * FROM categories";
                                                             $result_data = $conn->query($sql_data);
                                                             while ($row_data = $result_data->fetch_assoc()) {
                                                                 
                                                                echo '<option value="' . $row_data["cname"] . '">' . ucwords($row_data['cname']) . '</option>';
                                                                 
                                                                 
                                                            }
                                                            ?> 
                                                        </select>
                                                      
                                                    </div>
                                                </div>
                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 form-label-title">price</label>
                                                    <div class="col-sm-9">
                                                        <input required class="form-control" name="price" type="number" placeholder="0">
                                                    </div>
                                                </div>
                                                        </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Description</h5>
                                            </div>

                                            <div class="theme-form theme-form-2 mega-form">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row">
                                                        <label class="form-label-title col-sm-3 mb-0">Product Description</label>
<div class="col-sm-9">
    <textarea class="form-control" name="product_description" rows="5" placeholder="Enter product description"></textarea>
</div>

                                                        </div>
                                                    </div>
                                                </div>
                                                        </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Product Images</h5>
                                            </div>

                                            <div class="theme-form theme-form-2 mega-form">
                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-sm-3 col-form-label form-label-title">Image 1</label>
                                                    <div class="col-sm-9">
                                                        <input required class="form-control form-choose" name="image1" type="file"
                                                            id="formFile">
                                                    </div>
                                                </div>
                                              
                                                        </div>
                                        </div>
                                    </div>

<div class="card">
        <div class="card-body" id="card-body-container">
            <div class="card-header-2">
                <h5>Nutrition Facts</h5>
            </div>

            <div id="dynamic-form-container">
                <div class="theme-form theme-form-2 mega-form option" id="option-1">
                    <div class="mb-4 row align-items-center">
                        <label class="form-label-title col-sm-2 mb-0">Nutrient Name</label>
                        <div class="col-sm-3">
                            <input required class="form-control" name="n-1" type="text" placeholder="Nutrient Name">
                        </div>
                        <label class="form-label-title col-sm-2 mb-0">Nutrient Value</label>
                        <div class="col-sm-3">
                        <input required class="form-control" name="v-1" type="text" step="any" min="0" placeholder="Nutrient Value" oninput="javascript: if (this.value.length > 20) this.value = this.value.slice(0, 20);">

                        </div>
                        <div class="col-sm-2">
                        <button class="btn btn-danger delete-option" id="delete-option-1">Delete</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <button id="addOption" class="btn text-white theme-bg-color">Add Value</button>
            </div>
        </div>
    </div>


<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    var optionCount = 1;

    $('#addOption').click(function(){
    optionCount++;
    var newOption = $('.option').first().clone();
    newOption.attr('id', 'option-' + optionCount);
    newOption.find('[name^="n-"]').attr('name', 'n-' + optionCount).val('');
    newOption.find('[name^="v-"]').attr('name', 'v-' + optionCount).val('');
    newOption.find('.delete-option').attr('id', 'delete-option-' + optionCount);
    $('#dynamic-form-container').append(newOption);
  //  $('hr').last().after('<hr>'); // Add a new hr after the last hr
  renumberOptions();
    updateDeleteButtons();
});

function renumberOptions() {
    $('.option').each(function(index){
        var newIndex = index + 1;
        $(this).attr('id', 'option-' + newIndex);
        $(this).find('[name^="n-"]').attr('name', 'n-' + newIndex);
        $(this).find('[name^="v-"]').attr('name', 'v-' + newIndex);
        $(this).find('.delete-option').attr('id', 'delete-option-' + newIndex);
    });
}

    $(document).on('click', '.delete-option', function(){
        if ($('.option').length > 1) {
            var optionId = $(this).attr('id').split('-')[2];
            $('#option-' + optionId).remove();
            $('#delete-option-' + optionId).remove();
            $('hr').last().remove(); // Remove the last hr element
            renumberOptions();
            updateDeleteButtons();
        }
    });

    function renumberOptions() {
        $('.option').each(function(index){
            var newIndex = index + 1;
            $(this).attr('id', 'option-' + newIndex);
            $(this).find('[name^="n-"]').attr('name', function(){
                return 'n-' + (index + 1);
            });
            $(this).find('[name^="v-"]').attr('name', function(){
                return 'v-' + (index + 1);
            });
            $(this).find('.delete-option').attr('id', 'delete-option-' + newIndex);
        });
    }

    function updateDeleteButtons() {
        if ($('.option').length === 1) {
            $('.delete-option').prop('disabled', true);
        } else {
            $('.delete-option').prop('disabled', false);
        }
    }

    updateDeleteButtons(); // Call the function initially to set the delete button state
});
</script>




                                 
<div class="card">
    <div class="card-body" id="ingredient-card-body">
        <div class="card-header-2">
            <h5>Ingredients</h5>
        </div>

        <div id="dynamic-ingredient-container">
            <div class="theme-form theme-form-2 mega-form ingredient" id="ingredient-1">
                <div class="mb-4 row align-items-center">
                    <label class="col-sm-3 form-label-title">Ingredient</label>
                    <div class="col-sm-3">
                        <input required class="form-control ingredient-input" name="i-1" type="text" placeholder="Enter Ingredient">
                    </div>
                    <div class="col-sm-2">
                    <button class="btn btn-danger delete-ingredient" id="delete-ingredient-1">Delete</button>

                </div>
                    
                </div>
                
            </div>
        </div>
        <div class="col-xxl-4">
        <button id="addIngredient" class="btn text-white theme-bg-color">Add Ingredient</button>
        </div>
    </div>
</div>

<div class="card">
                                        <div class="card-body">
                                        <div class="card-header-2">
                                                <h5>Avialable</h5>
                                            </div>

                                            <div class="theme-form theme-form-2 mega-form">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row">
                                                        <label
                                                        class="col-sm-3 col-form-label form-label-title">Choose Yes/No</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100" name="available" >
                                                        <option value="-">-</option>
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                        </select>
                                                      
                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                        </div>
                                        </div>
                                    </div>


<script>

$(document).ready(function(){
    var ingredientCount = 1;

    $('#addIngredient').click(function(){
        ingredientCount++;
        var newIngredient = $('.ingredient').first().clone();
        newIngredient.attr('id', 'ingredient-' + ingredientCount);
        newIngredient.find('.ingredient-input').attr('name', 'i-' + ingredientCount).val('');
        newIngredient.find('.delete-ingredient').attr('id', 'delete-ingredient-' + ingredientCount);
        $('#dynamic-ingredient-container').append(newIngredient);
        renumberIngredients();
        updateDeleteButtons();
    });

    $(document).on('click', '.delete-ingredient', function(){
        if ($('.ingredient').length > 1) {
            var ingredientId = $(this).attr('id').split('-')[2];
            $('#ingredient-' + ingredientId).remove();
            $('#delete-ingredient-' + ingredientId).remove();
            $('hr').last().remove(); // Remove the last hr element
            renumberIngredients();
            updateDeleteButtons();
        }
    });

    function renumberIngredients() {
        $('.ingredient').each(function(index){
            var newIndex = index + 1;
            $(this).attr('id', 'ingredient-' + newIndex);
            $(this).find('.ingredient-input').attr('name', 'i-' + newIndex);
            $(this).find('.delete-ingredient').attr('id', 'delete-ingredient-' + newIndex);
        });
    }

    function updateDeleteButtons() {
        if ($('.ingredient').length === 1) {
            $('.delete-ingredient').prop('disabled', true);
        } else {
            $('.delete-ingredient').prop('disabled', false);
        }
    }

    updateDeleteButtons(); // Call the function initially to set the delete button state
});

</script>

                                
                                <div class="card">
    <div class="card-body">
    <div id="alertMessage" style="display: none; color: red;">Please select a Category.</div>
        <div class="row justify-content-center">
            <div class="col-xxl-12 text-center">
                <button type="submit" class="btn text-white theme-bg-color" style="margin-left: 400px;">Add Product</button>
            </div>
        </div>
    </div>
    
</div>

<script>
 document.getElementById('myForm').addEventListener('submit', function(event) {
        var stateSelect = document.getElementById('stateSelect');
        var alertMessage = document.getElementById('alertMessage');
        if (stateSelect.value === '-') {
            event.preventDefault(); // Prevent form submission
            alertMessage.style.display = 'block'; // Show the red-colored alert
        } else {
            alertMessage.style.display = 'none'; // Hide the alert if a valid option is selected
        }
    });
</script>
                            </div>
                        </div>

                        
                        

                    </div>
                    
                </div>
                
</form>
                <!-- New Product Add End -->

                <!-- footer Start -->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer En -->
            </div><!-- Container-fluid End -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End -->

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
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- customizer js -->
    <script src="assets/js/customizer.js"></script>

    <!--Dropzon js -->
    <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!-- ck editor js -->
    <script src="assets/js/ckeditor.js"></script>
    <script src="assets/js/ckeditor-custom.js"></script>

    <!-- select2 js -->
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/select2-custom.js"></script>

    <!-- sidebar effect -->
    <script src="assets/js/sidebareffect.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>

</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/add-new-product.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:02:24 GMT -->
</html>