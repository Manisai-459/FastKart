<?php 
    include("db.php");
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/sign-up.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:02:59 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title>On-demand last-mile delivery</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<body>

    <!-- Loader Start -->
    <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->

    <!-- Header Start -->
    <header class="pb-md-4 pb-0">
        <div class="header-top">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-xxl-3 d-xxl-block d-none">
                        <div class="top-left-header">
                            <i class="iconly-Location icli text-white"></i>
                            <span class="text-white">1418 Riverwood Drive, CA 96052, US</span>
                        </div>
                    </div>

                    <div class="col-xxl-6 col-lg-9 d-lg-block d-none">
                        <div class="header-offer">
                            <div class="notification-slider">
                                <div>
                                    <div class="timer-notification">
                                        <h6><strong class="me-1">Welcome to Fastkart!</strong>Wrap new offers/gift
                                            every single day on Weekends.<strong class="ms-1">New Coupon Code: Fast024
                                            </strong>

                                        </h6>
                                    </div>
                                </div>

                                <div>
                                    <div class="timer-notification">
                                        <h6>Something you love is now on sale!
                                            <a href="shop-left-sidebar.html" class="text-white">Buy Now
                                                !</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <ul class="about-list right-nav-about">
                            <li class="right-nav-list">
                                <div class="dropdown theme-form-select">
                                    <button class="btn dropdown-toggle" type="button" id="select-language"
                                        data-bs-toggle="dropdown">
                                        <img src="../assets/images/country/united-states.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                        <span>English</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)" id="english">
                                                <img src="../assets/images/country/united-kingdom.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span>English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)" id="france">
                                                <img src="../assets/images/country/germany.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span>Germany</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)" id="chinese">
                                                <img src="../assets/images/country/turkish.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span>Turki</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="right-nav-list">
                                <div class="dropdown theme-form-select">
                                    <button class="btn dropdown-toggle" type="button" id="select-dollar"
                                        data-bs-toggle="dropdown">
                                        <span>USD</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end sm-dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" id="aud" href="javascript:void(0)">AUD</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="eur" href="javascript:void(0)">EUR</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="cny" href="javascript:void(0)">CNY</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="top-nav top-header sticky-header">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar-top">
                            <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                            </button>
                            <a href="index.php" class="web-logo nav-logo">
                                <img src="../assets/images/logo/1.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="middle-box">
                                <div class="location-box">
                                    <button class="btn location-button" data-bs-toggle="modal"
                                        data-bs-target="#locationModal">
                                        <span class="location-arrow">
                                            <i data-feather="map-pin"></i>
                                        </span>
                                        <span class="locat-name">Your Location</span>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </div>

                                <div class="search-box">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="I'm searching for...">
                                        <button class="btn" type="button" id="button-addon2">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="rightside-box">
                                <div class="search-full">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                        <input type="text" class="form-control search-type" placeholder="Search here..">
                                        <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                    </div>
                                </div>
                                <ul class="right-side-menu">
                                    <li class="right-side">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <div class="search-box">
                                                    <i data-feather="search"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="right-side">
                                        <a href="contact-us.php" class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i data-feather="phone-call"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>24/7 Delivery</h6>
                                                <h5>+91 888 104 2340</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="right-side">
                                        <a href="wishlist.php" class="btn p-0 position-relative header-wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                  <li class="right-side">
                                        <div class="onhover-dropdown header-badge">
                                        <a type="button" class="btn p-0 position-relative header-wishlist" onclick="location.href = 'cart.php';"></button>
                                                <i data-feather="shopping-cart"></i>
                                                <?php 
 $totalRows = 0;
                                                if(isset($_SESSION['id'])){
                                               $sql = "SELECT * FROM wishcart WHERE user_id = {$_SESSION['id']} AND wc = 0";
                                               $result = mysqli_query($conn, $sql);
                                                   $totalRows = mysqli_num_rows($result);
                                                }
                                                ?>
                                                <span class="position-absolute top-0 start-100 translate-middle badge"><?php echo $totalRows?>
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>   <li class="right-side onhover-dropdown">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>Hello,</h6>
                                                <h5><?php 
                                                if(isset($_SESSION['user'])){
                                                    echo  $_SESSION['user'];
                                                }else 
                                                    echo "My Account";
                                                ?></h5>
                                            </div>
                                        </div>

                                        <div class="onhover-div onhover-div-login">
                                            <ul class="user-box-name">
                                                <?php 
                                                    if(!isset($_SESSION['user'])){
                                                ?>
                                                <li class="product-box-contain">
                                                    <i></i>
                                                    <a href="login.php">Log In</a>
                                                </li>

                                                <li class="product-box-contain">
                                                    <a href="sign-up.php">Register</a>
                                                </li>

                                                <li class="product-box-contain">
                                                    <a href="forgot.html">Forgot Password</a>
                                                </li>
                                                <?php } else {?>
                                                <li class="product-box-contain">
                                                    <i></i>
                                                    <a href="user-dashboard.php">Dashboard</a>
                                                </li>

                                                <li class="product-box-contain">
                                                    <a href="logout.php">Logout</a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="header-nav">
                        <div class="header-nav-left">
                            <button class="dropdown-category">
                                <i data-feather="align-left"></i>
                                <span>All Categories</span>
                            </button>

                            <div class="category-dropdown">
                                <div class="category-title">
                                    <h5>Categories</h5>
                                    <button type="button" class="btn p-0 close-button text-content">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>

                                      <ul class="category-list">
                                <?php
// Assuming you've connected to your database already

// Fetch all categories
$categories_query = "SELECT id, cname FROM categories";
$categories_result = mysqli_query($conn, $categories_query);

// Check if there are any categories
if (mysqli_num_rows($categories_result) > 0) {
    // Loop through each category
      while ($category_row = mysqli_fetch_assoc($categories_result)) {
if($category_row['cname'] == "combo packs")
            continue;
        $category_id = $category_row['id'];
        $category_name = $category_row['cname'];
        ?>
        <li class="onhover-category-list">
            
            <a href="shop-category.php?category_button=<?php echo urlencode($category_name); ?>" class="category-name">
    <h6><?php echo ucwords($category_name); ?></h6>
    <i class="fa-solid fa-angle-right"></i>
</a>

            <div class="onhover-category-box">
                <div class="list-1">
                    <ul>
                        <!-- Products for this category will be inserted here -->
                        <?php
                        // Fetch products for this category
                        $products_query = "SELECT pname FROM products WHERE pc = $category_id";
                        $products_result = mysqli_query($conn, $products_query);

                        // Check if there are any products
                        if (mysqli_num_rows($products_result) > 0) {
                            // Loop through each product
                            while ($product_row = mysqli_fetch_assoc($products_result)) {
                                $product_name = $product_row['pname'];
echo "<li><a href='product-left-thumbnail.php?product=" . urlencode($product_name) . "'>$product_name</a></li>";

                            }
                        } else {
                            echo "<p>No products found in this category.</p>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </li>
        <?php
    }
}
?>

                      
             </ul>
                           
                            </div>
                        </div>

                        <div class="header-nav-middle">
                            <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                                <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                    <div class="offcanvas-header navbar-shadow">
                                        <h5>Menu</h5>
                                        <button class="btn-close lead" type="button"
                                            data-bs-dismiss="offcanvas"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <ul class="navbar-nav">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link" href="index.php">Home</a>

                                          <!--  -->  </li>

                                            <li class="nav-item dropdown">
                                                 <a class="nav-link" href="shop-category.php"
                                                aria-haspopup="false">Items</a>
                                            </li>

                                            
                                            <li class="nav-item dropdown">
                                                <a class="nav-link" href="combos.php"
                                                aria-haspopup="false">Combos</a>

                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                    data-bs-toggle="dropdown">Blog</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                                    </li>
                                                </ul>
                                            </li>

                                             
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header-nav-right">
                            <button class="btn deal-button" data-bs-toggle="modal" data-bs-target="#deal-box">
                                <i data-feather="zap"></i>
                                <span>Deal Today</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li class="active">
                <a href="index.php">
                    <i class="iconly-Home icli"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="javascript:void(0)">
                    <i class="iconly-Category icli js-link"></i>
                    <span>Category</span>
                </a>
            </li>

            <li>
                <a href="search.html" class="search-box">
                    <i class="iconly-Search icli"></i>
                    <span>Search</span>
                </a>
            </li>

            <li>
                <a href="wishlist.php" class="notifi-wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span>My Wish</span>
                </a>
            </li>

            <li>
                <a href="cart.php">
                    <i class="iconly-Bag-2 icli fly-cate"></i>
                    <span>Cart</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Sign In</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Sign In</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- log in section start -->
    <section class="log-in-section section-b-space">
        <div class="container-fluid-lg w-100">
            <div class="row">
                
                <div class="col-xxl-6 col-xl-5 col-lg-12 col-sm-12 mx-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>Welcome To Fastkart</h3>
                            <h4>Create New Account</h4>
                        </div>

                        <div class="input-box">
                        <form class="row g-4" action="register.php" method="post" onsubmit="return validateForm()">
 
                                <div class="col-6">
                                    <div class="form-floating theme-form-floating">
                                        <input type="text" name="fname" class="form-control" id="fullname" placeholder="Full Name" required>
                                        <label for="fullname" >First Name</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating theme-form-floating">
                                        <input type="text" name="lname" class="form-control" id="last" placeholder="Full Name" required>
                                        <label for="last" >Last Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required>
                                        <label for="email" >Email Address</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating theme-form-floating">
                                        <select class="form-control form-select" id="pin" name="pin"  required style="font-family: 'Public Sans', sans-seri;" placeholder="Select Gender" required>
                                            <option value="-">-</option>
                                        </select>
                                        <label> Select Country Code</label>
                                    
                                    </div>
                                </div>
                                
                    
                                <div class="col-6">
                                    <div class="form-floating theme-form-floating">
                                        <input type="number" class="form-control" required name="phno" id="exampleFormControlInput3"
                                            placeholder="Enter Your Phone Number" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value =
                                            this.value.slice(0, this.maxLength);">
                                        
                                        <label for="exampleFormControlInput3" required>Enter Phone Number</label>
                                    </div>
                            
                                </div>
                                <script>
                                    // Get the dropdown elements
                                        var countryDropdown = document.getElementById("pin");   
                                            fetch('CountryCodes.json')
                                            .then(function(response) {
                                                      return response.json();
                                            }).then(function(data) {
                                                    var countries = data.countries;
                                                    countries.forEach(function(countryObj) {
                                                    var country = countryObj.name;
                                                    var code = countryObj.dial_code;
                                                    var option = document.createElement("option");
                                                    option.text = country+" ("+code+")";
                                                    option.value = code;
                                                     countryDropdown.add(option);
                                                });
                                            countryDropdown.dataset.states = JSON.stringify(data.countries);
                                            })
                                        .catch(function(error) {
                                            console.log(error);
                                    });       
                                </script>
                                <div class="col-6">
                                    <div class="form-floating theme-form-floating">
                                        <select class="form-control form-select" required name="gender" id="gender" style="font-family: 'Public Sans', sans-seri;" placeholder="Select Gender" required>
                                            <option value="-">-</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="others">Others</option>
                                        </select>
                                        <label> Select Gender</label>
                                    </div>
                                </div>
                                
                               <div class="col-6">
                                <div class="form-floating theme-form-floating date-box">
                                        <input type="date" name="dob" required class="form-control">
                                        <label>Select Date</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                <div class="form-floating theme-form-floating">
                                        <input type="text" name="hno" required class="form-control" id="dno" placeholder="Full Name">
                                        <label for="dno" >House No. / Flat No.</label>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="form-floating theme-form-floating">
                                        <input type="text" name="city" required class="form-control" id="cty" placeholder="Full Name">
                                        <label for="cty" >City</label>
                                </div>
                                </div>
                                <div class="col-12">
                                <div class="form-floating theme-form-floating">
                               
                                        <textarea class="form-control" required name="addr" id="exampleFormControlTextarea1" rows="4"
                                            placeholder="Comments"></textarea>
                                            <label for="dno" >Address / Land Marks</label>
                                </div>
                                </div>
                                

                                <div class="col-6">
                                    <div class="form-floating theme-form-floating">
                                        <select class="form-control form-select" required name="country" id="country" onchange="updateStates()" style="font-family: 'Public Sans', sans-seri;" required>
                                        <option value="-">-</option>
                                        </select>
                                        <label> Select Country</label>
                                    </div>
                                </div>
                                <script>
                                    // Get the dropdown elements
                                        var x = document.getElementById("country");   
                                            fetch('country.json')
                                            .then(function(response) {
                                                      return response.json();
                                            }).then(function(data) {
                                                    var countries = data.countries;
                                                    countries.forEach(function(countryObj) {
                                                    var country = countryObj.country;
                                                    var option = document.createElement("option");
                                                    option.text = country;
                                                    option.value = country;
                                                     x.add(option);
                                                });
                                            x.dataset.states = JSON.stringify(data.countries);
                                            })
                                        .catch(function(error) {
                                            console.log(error);
                                    });       
                                </script>
                                <div class="col-6">
                                    <div class="form-floating theme-form-floating">
                                        <select class="form-control form-select" required name="state" id="state" style="font-family: 'Public Sans', sans-seri;"  required>
                                            <!-- <option value="-">-</option> -->
                                        </select>
                                        <label> Select State</label>
                                    </div>
                                </div>
                                <script>
                                    var stateDropdown = document.getElementById("state");
                                    function updateStates() {
                                        var selectedCountry = x.value;
                                        var states = [];
                                        var countryStateData = JSON.parse(x.dataset.states);
                                var selectedCountryObj = countryStateData.find(function(countryObj) {
                                        return countryObj.country === selectedCountry;
                                        });

                                if (selectedCountryObj) {
                                             states = selectedCountryObj.states;
                                    }        
                                stateDropdown.innerHTML = "";
                                var nullOption = document.createElement("option");
                                nullOption.text = "-"; // Text for the null option
                                nullOption.value = ""; // Value for the null option (can be empty or any desired value)
                                stateDropdown.add(nullOption);
                               
                            stateDropdown.add(nullOption);
                            states.forEach(function(state) {
                             var option = document.createElement("option");
                            option.text = state;
                            option.value = state;
                            stateDropdown.add(option);
                             });
                            }
                                </script>
                        <div class="col-6">
                                    <div class="form-floating theme-form-floating">
                                        <input type="number" required class="form-control" name="cpin"
                                            placeholder="Enter Your Phone Number" maxlength="6" oninput="javascript: if (this.value.length > this.maxLength) this.value =
                                            this.value.slice(0, this.maxLength);">
                                        
                                        <label  >Enter City Pin Code</label>
                                    </div>
                            
                                </div>
                                <div class="col-12">
                                <div class="form-floating theme-form-floating">
                               
                                        <textarea class="form-control" required name="q1" id="exampleFormControlTextarea2" rows="4"
                                            placeholder="Comments"></textarea>
                                            <label for="dno" >Are you looking for something specific, like a snack, meal, or dessert?</label>
                                </div>
                                </div>
                                <div class="col-12">
                                <div class="form-floating theme-form-floating">
                               
                                        <textarea class="form-control" required name="q2" id="exampleFormControlTextarea1" rows="4"
                                            placeholder="Comments"></textarea>
                                            <label for="dno" >Is there a particular price range you're aiming for?</label>
                                </div>
                                </div>
                                <div class="col-12">
                                <div class="form-floating theme-form-floating">
                               
                                        <textarea class="form-control" required name="q3" id="exampleFormControlTextarea3" rows="4"
                                            placeholder="Comments"></textarea>
                                            <label for="dno" >Do you prefer classic favorites or adventurous, new dishes?</label>
                                </div>
                                </div>
                                <div class="col-12">
                                <div class="form-floating theme-form-floating">
                               
                                        <textarea class="form-control" required name="q4" id="exampleFormControlTextarea4" rows="4"
                                            placeholder="Comments"></textarea>
                                            <label for="dno" >Do you prefer your food to be spicy, mild, or somewhere in between?</label>
                                </div>
                                </div>
                                <div class="col-12">
        <div class="form-floating theme-form-floating">
            <input type="password" required name="password" class="form-control" id="password"
                placeholder="Password" onkeyup="validatePassword()">
            <label for="password">Password</label>
            <div id="passwordValidationMsg"></div> <!-- Placeholder for password validation message -->
        
        </div>
    </div>
    <div class="col-12">
        <div class="form-floating theme-form-floating">
            <input type="password" required class="form-control" id="cpassword"
                placeholder="Confirm Password" onkeyup="checkPasswordMatch()">
            <label for="cpassword">Confirm Password</label>
            <div id="passwordMatch"></div> <!-- Placeholder for password match message -->
        </div>
    </div>
    

                                <div class="col-12">
                                    <div class="forgot-box">
                                        <div class="form-check ps-0 m-0 remember-box">
                                            <input class="checkbox_animated check-box" type="checkbox"
                                                id="flexCheckDefault" >
                                            <label class="form-check-label" for="flexCheckDefault">I agree with
                                                <span>Terms</span> and <span>Privacy</span></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button name="submit" value="submit" id="submit" class="btn btn-animation w-100" style="display: none;" type="submit">Sign Up</button>
                                    <div class="sign-up-box" id="formexception">
                                    </div>
                                    <div ></div> 
                                </div>
                            </form>
                            <script>
                                 function validatePassword() {
        var password = document.getElementById("password").value;
        var passwordValidationMsg = document.getElementById("passwordValidationMsg");

        // Validate password format
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$/;
        if (!passwordRegex.test(password)) {
            passwordValidationMsg.innerHTML = "Password must be at least 8 characters long, contain at least one uppercase letter, one special character, and one digit.";
            passwordValidationMsg.style.color = "red";
        } else {
            passwordValidationMsg.innerHTML = "Password meets the criteria.";
            passwordValidationMsg.style.color = "green";
        }
        checkPasswordMatch()
    }

    function checkPasswordMatch() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("cpassword").value;
        var passwordMatchDiv = document.getElementById("passwordMatch");
        var sub = document.getElementById("submit");
        if (confirmPassword != "" && password !="") {
            if (password === confirmPassword) {
            sub.style.display = "block";
            passwordMatchDiv.innerHTML = "Passwords match.";
            passwordMatchDiv.style.color = "green";
        } else {
            sub.style.display = "none";
            passwordMatchDiv.innerHTML = "Passwords do not match.";
            passwordMatchDiv.style.color = "red";
        }
        }
    }
    function validateForm() {
    var password = document.getElementById("password").value;
    var pin = document.getElementById("pin").value;
    var confirmPassword = document.getElementById("cpassword").value;
    var alter = document.getElementById("formexception");
    var message = document.createElement("h4");
    var state = document.getElementById("state").value;
    var country = document.getElementById("country").value;
    var gender = document.getElementById("gender").value;
    var f = 0, s = "";
    if (pin === "-") {
        f = 1;
        s += "Invalid Mobile Pin code<br>";
    }
    if( state === "-" || state == "") {
        f = 1;
        s += "Invalid State<br>";
    }
    if( country === "-") {
        f = 1;
        s += "Invalid Country<br>";
    }
    if( gender === "-") {
        f = 1;
        s += "Invalid Gender<br>";
    }
    if (f === 1) {
        alter.innerHTML = "";
        message.innerHTML = s;
        message.style.color = "red";
        alter.appendChild(message); // Append the error message to the 'formexception' element
        return false; // Prevent form submission
    }

    return true; // Allow form submission
}

</script>
                        </div>

                       
                       
                        <div class="other-log-in">
                            <h6></h6>
                        </div>

                        <div class="sign-up-box">
                            <h4>Already have an account?</h4>
                            <a href="login.php">Log In</a>
                        </div>
                    </div>
                </div>
                

                <div class="col-xxl-7 col-xl-6 col-lg-6"></div>
            </div>
        </div>
    </section>
    <!-- log in section end -->

    <!-- Tap to top and theme setting button start -->
    <div class="theme-option">
        <div class="setting-box">
            <button class="btn setting-button">
                <i class="fa-solid fa-gear"></i>
            </button>

            <div class="theme-setting-2">
                <div class="theme-box">
                    <ul>
                        <li>
                            <div class="setting-name">
                                <h4>Color</h4>
                            </div>
                            <div class="theme-setting-button color-picker">
                                <form class="form-control">
                                    <label for="colorPick" class="form-label mb-0">Theme Color</label>
                                    <input type="color" class="form-control form-control-color" id="colorPick"
                                        value="#0da487" title="Choose your color">
                                </form>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>Dark</h4>
                            </div>
                            <div class="theme-setting-button">
                                <button class="btn btn-2 outline" id="darkButton">Dark</button>
                                <button class="btn btn-2 unline" id="lightButton">Light</button>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>RTL</h4>
                            </div>
                            <div class="theme-setting-button rtl">
                                <button class="btn btn-2 rtl-unline">LTR</button>
                                <button class="btn btn-2 rtl-outline">RTL</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top and theme setting button end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bootstrap/popper.min.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/feather/feather.min.js"></script>
    <script src="../assets/js/feather/feather-icon.js"></script>

    <!-- Slick js-->
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/slick/slick-animation.min.js"></script>
    <script src="../assets/js/slick/custom_slick.js"></script>

    <!-- Lazyload Js -->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!-- script js -->
    <script src="../assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/sign-up.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:02:59 GMT -->
</html>