<?php
include("db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/shop-category.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:02:35 GMT -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Fastkart" />
    <meta name="keywords" content="Fastkart" />
    <meta name="author" content="Fastkart" />
    <link
      rel="icon"
      href="../assets/images/favicon/1.png"
      type="image/x-icon"
    />
    <title>On-demand last-mile delivery</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link
      href="https://fonts.googleapis.com/css2?family=Russo+One&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&amp;display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    />

    <!-- bootstrap css -->
    <link
      id="rtl-link"
      rel="stylesheet"
      type="text/css"
      href="../assets/css/vendors/bootstrap.css"
    />

    <!-- wow css -->
    <link rel="stylesheet" href="../assets/css/animate.min.css" />

    <!-- Iconly css -->
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/css/bulk-style.css"
    />

    <!-- Template css -->
    <link
      id="color-link"
      rel="stylesheet"
      type="text/css"
      href="../assets/css/style.css"
    />
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
                <span class="text-white"
                  >1418 Riverwood Drive, CA 96052, US</span
                >
              </div>
            </div>

            <div class="col-xxl-6 col-lg-9 d-lg-block d-none">
              <div class="header-offer">
                <div class="notification-slider">
                  <div>
                    <div class="timer-notification">
                      <h6>
                        <strong class="me-1">Welcome to Fastkart!</strong>Wrap
                        new offers/gift every single day on Weekends.<strong
                          class="ms-1"
                          >New Coupon Code: Fast024
                        </strong>
                      </h6>
                    </div>
                  </div>

                  <div>
                    <div class="timer-notification">
                      <h6>
                        Something you love is now on sale!
                        <a href="shop-left-sidebar.html" class="text-white"
                          >Buy Now !</a
                        >
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
                    <button
                      class="btn dropdown-toggle"
                      type="button"
                      id="select-language"
                      data-bs-toggle="dropdown"
                    >
                      <img
                        src="../assets/images/country/united-states.png"
                        class="img-fluid blur-up lazyload"
                        alt=""
                      />
                      <span>English</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a
                          class="dropdown-item"
                          href="javascript:void(0)"
                          id="english"
                        >
                          <img
                            src="../assets/images/country/united-kingdom.png"
                            class="img-fluid blur-up lazyload"
                            alt=""
                          />
                          <span>English</span>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          href="javascript:void(0)"
                          id="france"
                        >
                          <img
                            src="../assets/images/country/germany.png"
                            class="img-fluid blur-up lazyload"
                            alt=""
                          />
                          <span>Germany</span>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          href="javascript:void(0)"
                          id="chinese"
                        >
                          <img
                            src="../assets/images/country/turkish.png"
                            class="img-fluid blur-up lazyload"
                            alt=""
                          />
                          <span>Turki</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="right-nav-list">
                  <div class="dropdown theme-form-select">
                    <button
                      class="btn dropdown-toggle"
                      type="button"
                      id="select-dollar"
                      data-bs-toggle="dropdown"
                    >
                      <span>USD</span>
                    </button>
                    <ul
                      class="dropdown-menu dropdown-menu-end sm-dropdown-menu"
                    >
                      <li>
                        <a
                          class="dropdown-item"
                          id="aud"
                          href="javascript:void(0)"
                          >AUD</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          id="eur"
                          href="javascript:void(0)"
                          >EUR</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          id="cny"
                          href="javascript:void(0)"
                          >CNY</a
                        >
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
                <button
                  class="navbar-toggler d-xl-none d-inline navbar-menu-button"
                  type="button"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#primaryMenu"
                >
                  <span class="navbar-toggler-icon">
                    <i class="fa-solid fa-bars"></i>
                  </span>
                </button>
                <a href="index.php" class="web-logo nav-logo">
                  <img
                    src="../assets/images/logo/1.png"
                    class="img-fluid blur-up lazyload"
                    alt=""
                  />
                </a>

                <div class="middle-box">
                  <div class="location-box">
                    <button
                      class="btn location-button"
                      data-bs-toggle="modal"
                      data-bs-target="#locationModal"
                    >
                      <span class="location-arrow">
                        <i data-feather="map-pin"></i>
                      </span>
                      <span class="locat-name">Your Location</span>
                      <i class="fa-solid fa-angle-down"></i>
                    </button>
                  </div>

                  <div class="search-box">
                    <div class="input-group">
                      <input
                        type="search"
                        class="form-control"
                        placeholder="I'm searching for..."
                      />
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
                      <input
                        type="text"
                        class="form-control search-type"
                        placeholder="Search here.."
                      />
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
                      <a
                        href="wishlist.php"
                        class="btn p-0 position-relative header-wishlist"
                      >
                        <i data-feather="heart"></i>
                      </a>
                    </li>
                    <li class="right-side">
                      <div class="onhover-dropdown header-badge">
                        <button
                          type="button"
                          class="btn p-0 position-relative header-wishlist"
                        >
                          <i data-feather="shopping-cart"></i>
                          <span
                            class="position-absolute top-0 start-100 translate-middle badge"
                            >2
                            <span class="visually-hidden">unread messages</span>
                          </span>
                        </button>

                        <div class="onhover-div">
                          <ul class="cart-list">
                            <li class="product-box-contain">
                              <div class="drop-cart">
                                <a
                                  href="product-left-thumbnail.php"
                                  class="drop-image"
                                >
                                  <img
                                    src="../assets/images/vegetable/product/1.png"
                                    class="blur-up lazyload"
                                    alt=""
                                  />
                                </a>

                                <div class="drop-contain">
                                  <a href="product-left-thumbnail.php">
                                    <h5>Fantasy Crunchy Choco Chip Cookies</h5>
                                  </a>
                                  <h6><span>1 x</span> $80.58</h6>
                                  <button class="close-button close_button">
                                    <i class="fa-solid fa-xmark"></i>
                                  </button>
                                </div>
                              </div>
                            </li>

                            <li class="product-box-contain">
                              <div class="drop-cart">
                                <a
                                  href="product-left-thumbnail.php"
                                  class="drop-image"
                                >
                                  <img
                                    src="../assets/images/vegetable/product/2.png"
                                    class="blur-up lazyload"
                                    alt=""
                                  />
                                </a>

                                <div class="drop-contain">
                                  <a href="product-left-thumbnail.php">
                                    <h5>
                                      Peanut Butter Bite Premium Butter Cookies
                                      600 g
                                    </h5>
                                  </a>
                                  <h6><span>1 x</span> $25.68</h6>
                                  <button class="close-button close_button">
                                    <i class="fa-solid fa-xmark"></i>
                                  </button>
                                </div>
                              </div>
                            </li>
                          </ul>

                          <div class="price-box">
                            <h5>Total :</h5>
                            <h4 class="theme-color fw-bold">$106.58</h4>
                          </div>

                          <div class="button-group">
                            <a href="cart.html" class="btn btn-sm cart-button"
                              >View Cart</a
                            >
                            <a
                              href="checkout.php"
                              class="btn btn-sm cart-button theme-bg-color text-white"
                              >Checkout</a
                            >
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="right-side onhover-dropdown">
                      <div class="delivery-login-box">
                        <div class="delivery-icon">
                          <i data-feather="user"></i>
                        </div>
                        <div class="delivery-detail">
                          <h6>Hello,</h6>
                          <h5>
                            <?php 
                                                if(isset($_SESSION['user'])){
                                                    echo  $_SESSION['user'];
                                                }else 
                                                    echo "My Account";
                                                ?>
                          </h5>
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
                    <button
                      type="button"
                      class="btn p-0 close-button text-content"
                    >
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
                <div
                  class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky"
                >
                  <div
                    class="offcanvas offcanvas-collapse order-xl-2"
                    id="primaryMenu"
                  >
                    <div class="offcanvas-header navbar-shadow">
                      <h5>Menu</h5>
                      <button
                        class="btn-close lead"
                        type="button"
                        data-bs-dismiss="offcanvas"
                      ></button>
                    </div>
                    <div class="offcanvas-body">
                      <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                          <a class="nav-link" href="index.php">Home</a>

                          <!--  -->
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link" href="shop-category.php"
                                                aria-haspopup="false">Items</a>
                        </li>

                          <li class="nav-item dropdown dropdown-mega">
                          <a
                            class="nav-link"
                            href="combos.php"
                            aria-haspopup="false"
                            >Combos</a
                          >

                        </li>

                        <li class="nav-item dropdown">
                          <a
                            class="nav-link dropdown-toggle"
                            href="javascript:void(0)"
                            data-bs-toggle="dropdown"
                            >Blog</a
                          >
                          <ul class="dropdown-menu">
                            <li>
                              <a class="dropdown-item" href="blog-detail.html"
                                >Blog Detail</a
                              >
                            </li>
                            <li>
                              <a class="dropdown-item" href="blog-grid.html"
                                >Blog Grid</a
                              >
                            </li>
                            <li>
                              <a class="dropdown-item" href="blog-list.html"
                                >Blog List</a
                              >
                            </li>
                          </ul>
                        </li>

                       </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="header-nav-right">
                <button
                  class="btn deal-button"
                  data-bs-toggle="modal"
                  data-bs-target="#deal-box"
                >
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
          <a href="cart.html">
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
              <h2>Shop Category</h2>
              <nav>
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                    <a href="index.php">
                      <i class="fa-solid fa-house"></i>
                    </a>
                  </li>
                  <li class="breadcrumb-item active">Shop Category</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Start -->
    <section class="section-b-space shop-section">
      <div class="container-fluid-lg">
        <div class="row">
          <div class="col-custom-3">
            <div class="left-box wow fadeInUp">
              <div class="shop-left-sidebar">
                <?php 
                $f = 1;
                $cat = "";
                if(isset($_GET['category_button'])){
                  $cat = urldecode($_GET['category_button']);
                  $f = 0;
                }
                ?>
                <ul
                  class="nav nav-pills mb-3 custom-nav-tab"
                  id="pills-tab"
                  role="tablist"
                >
                <?php 
                 $sql_data = "SELECT * FROM categories";
                 $result_data = $conn->query($sql_data);
                 while ($row_data = $result_data->fetch_assoc()) {
                  if($row_data['cname'] == "combo packs"){
                  if ($f == 1) {
                      $cat = $row_data['cname'];
                      $encoded_cat = urlencode($row_data['cname']);
                      echo '<form method="GET" style="width:100%;">
                      <li class="nav-item" role="presentation">
                          
                              <button class="nav-link active" id="pills-vegetables" data-bs-toggle="pill" data-bs-target="#pills-vegetable" type="submit" name="category_button" role="tab" value="'.$encoded_cat.'">
                              '.ucwords($row_data['cname']).'
                              </button>
                         
                      </li>
                      </form>';
                      $f = 0;
                  } elseif($cat != "" && $cat ==  $row_data['cname']) {
                    echo '<form method="GET" style="width:100%;">
                    <li class="nav-item" role="presentation">
                        
                            <button class="nav-link active" id="pills-vegetables" data-bs-toggle="pill" data-bs-target="#pills-vegetable" type="submit" name="category_button" role="tab" value="'.$row_data['cname'].'">
                            '.ucwords($row_data['cname']).'
                            </button>
                       
                    </li>
                    </form>';
                  }
                  else { 
                      echo '
                      <form method="GET" style="width:100%;"><li class="nav-item" role="presentation" >
                          
                              <button class="nav-link" id="pills-vegetables" data-bs-toggle="pill" data-bs-target="#pills-vegetable" type="submit" name="category_button" role="tab" value="'.$row_data['cname'].'">
                              '.ucwords($row_data['cname']).'
                              </button>
                          
                      </li>
                      </form>';
                  }
                }
              }
                ?>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-custom-">
            <div class="show-button">
              <div class="filter-button d-inline-block d-lg-none">
                <a><i class="fa-solid fa-filter"></i> Filter Menu</a>
              </div>

        
            </div>
          <?php 
          $sql_data = "SELECT id FROM categories WHERE cname='$cat'";
          $result = $conn->query($sql_data);
          $category_id = "";
          if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $category_id = $row["id"];
          }
          $sql_data = "SELECT pc FROM products WHERE pc='$category_id'";
          $result = $conn->query($sql_data);
          $act = 0;
          if ($result->num_rows <= 0) {
            echo "<h2>".$cat."<br>";
            echo "<h2>No Products Under this category</h2><br>";
          }else{
            $act = 1;
            echo "<h2>".$cat."</h2><br>";
          }
          ?>
           
            <div
              class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section"
            >
           <?php 
           if($act){
          $sql_data = "SELECT * FROM products WHERE pc='$category_id'";
          $result = $conn->query($sql_data);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Loop through each column of the current row
                // foreach ($row as $column => $value) {
                //     // Print column name and value
                //     echo $column . ": " . $value . "<br>";
                    
                // }
                echo '<div>
                <div class="product-box-3 h-60 wow fadeInUp">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="product-left-thumbnail.php?product=' . urlencode($row['pname']) . '">
                                <img src="' . $row['image_url'] . '" class="img-fluid blur-up lazyload" alt="" />
                            </a>';
                            if(isset($_SESSION['user'])){
                           
                echo
                            '<ul class="product-option">
                                <li>
                              
                                </li>
                                <li>
                                <a href="addwishlist.php?pid=' . $row['pid'] . '">
                                <i data-feather="heart"></i>
                                </a>
                          
                                </li>
                                <li>
                                   
                                </li>
                            </ul>';
                            }
                    echo '
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="product-detail">
                            <a href="product-left-thumbnail.php?product=' . urlencode($row['pname']) . '">
                                <h5 class="name">' . $row['pname'] . '</h5>
                            </a>
                            <p class="text-content mt-1 mb-2 product-content">
                                Cheesy feet cheesy grin brie. Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly cheese macaroni cheese croque monsieur.
                            </p>
                            <h5 class="price">
                                <span class="theme-color">' . $row['price'] . ' Rs</span>
                            </h5>';
                            if(isset($_SESSION['user'])){
                    echo '
                            <div class="add-to-cart-box bg-white">
                            <a href="addcart.php?pid=' . $row['pid'] . '" class="btn btn-add-cart addcart-button">
                            Add To Cart
                            <span class="add-icon bg-light-gray">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                            </a>
                            </div>';
                            }
                            echo'

                        </div>
                    </div>
                </div>
            </div>';
            
            
                echo "<br>"; // Add line break after printing all columns of a row
            }
        } 
          }
           ?>
            
            
            
        
             

           
            </div>

            <!-- <nav class="custom-pagination">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="javascript:void(0)" tabindex="-1">
                    <i class="fa-solid fa-angles-left"></i>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="javascript:void(0)">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0)">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0)">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0)">
                    <i class="fa-solid fa-angles-right"></i>
                  </a>
                </li>
              </ul>
            </nav> -->
          </div>
        </div>
      </div>
    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Start -->
    <footer class="section-t-space">
      <div class="container-fluid-lg">
        <div class="service-section">
          <div class="row g-3">
            <div class="col-12">
              <div class="service-contain">
                <div class="service-box">
                  <div class="service-image">
                    <img
                      src="../assets/svg/product.svg"
                      class="blur-up lazyload"
                      alt=""
                    />
                  </div>

                  <div class="service-detail">
                    <h5>Every Fresh Products</h5>
                  </div>
                </div>

                <div class="service-box">
                  <div class="service-image">
                    <img
                      src="../assets/svg/delivery.svg"
                      class="blur-up lazyload"
                      alt=""
                    />
                  </div>

                  <div class="service-detail">
                    <h5>Free Delivery For Order Over $50</h5>
                  </div>
                </div>

                <div class="service-box">
                  <div class="service-image">
                    <img
                      src="../assets/svg/discount.svg"
                      class="blur-up lazyload"
                      alt=""
                    />
                  </div>

                  <div class="service-detail">
                    <h5>Daily Mega Discounts</h5>
                  </div>
                </div>

                <div class="service-box">
                  <div class="service-image">
                    <img
                      src="../assets/svg/market.svg"
                      class="blur-up lazyload"
                      alt=""
                    />
                  </div>

                  <div class="service-detail">
                    <h5>Best Price On The Market</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="main-footer section-b-space section-t-space">
          <div class="row g-md-4 g-3">
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="footer-logo">
                <div class="theme-logo">
                  <a href="index.php">
                    <img
                      src="../assets/images/logo/1.png"
                      class="blur-up lazyload"
                      alt=""
                    />
                  </a>
                </div>

                <div class="footer-logo-contain">
                  <p>
                    We are a friendly bar serving a variety of cocktails, wines
                    and beers. Our bar is a perfect place for a couple.
                  </p>

                  <ul class="address">
                    <li>
                      <i data-feather="home"></i>
                      <a href="javascript:void(0)"
                        >1418 Riverwood Drive, CA 96052, US</a
                      >
                    </li>
                    <li>
                      <i data-feather="mail"></i>
                      <a href="javascript:void(0)">support@fastkart.com</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="footer-title">
                <h4>Categories</h4>
              </div>

           <div class="footer-contain">
                        <ul>
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
        echo ' <li>
        <a href="shop-category.php?category_button='.$category_name.'" class="text-content">'.ucwords($category_name).'</a>
    </li>';
    }
}
?>
 </ul>
</div>  </div>

            <div class="col-xl col-lg-2 col-sm-3">
              <div class="footer-title">
                <h4>Useful Links</h4>
              </div>

              <div class="footer-contain">
                <ul>
                  <li>
                    <a href="index.php" class="text-content">Home</a>
                  </li>
                  <li>
                    <a href="shop-left-sidebar.html" class="text-content"
                      >Shop</a
                    >
                  </li>
                  <li>
                    <a href="about-us.html" class="text-content">About Us</a>
                  </li>
                  <li>
                    <a href="blog-list.html" class="text-content">Blog</a>
                  </li>
                  <li>
                    <a href="contact-us.php" class="text-content"
                      >Contact Us</a
                    >
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-xl-2 col-sm-3">
              <div class="footer-title">
                <h4>Help Center</h4>
              </div>

              <div class="footer-contain">
                <ul>
                  <li>
                    <a href="order-success.php" class="text-content"
                      >Your Order</a
                    >
                  </li>
                  <li>
                    <a href="user-dashboard.php" class="text-content"
                      >Your Account</a
                    >
                  </li>
                  <li>
                    <a href="order-tracking.php" class="text-content"
                      >Track Order</a
                    >
                  </li>
                  <li>
                    <a href="wishlist.php" class="text-content"
                      >Your Wishlist</a
                    >
                  </li>
                  <li>
                    <a href="search.html" class="text-content">Search</a>
                  </li>
                  <li>
                    <a href="faq.html" class="text-content">FAQ</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="footer-title">
                <h4>Contact Us</h4>
              </div>

              <div class="footer-contact">
                <ul>
                  <li>
                    <div class="footer-number">
                      <i data-feather="phone"></i>
                      <div class="contact-number">
                        <h6 class="text-content">Hotline 24/7 :</h6>
                        <h5>+91 888 104 2340</h5>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="footer-number">
                      <i data-feather="mail"></i>
                      <div class="contact-number">
                        <h6 class="text-content">Email Address :</h6>
                        <h5>fastkart@hotmail.com</h5>
                      </div>
                    </div>
                  </li>

                  <li class="social-app">
                    <h5 class="mb-2 text-content">Download App :</h5>
                    <ul>
                      <li class="mb-0">
                        <a
                          href="https://play.google.com/store/apps"
                          target="_blank"
                        >
                          <img
                            src="../assets/images/playstore.svg"
                            class="blur-up lazyload"
                            alt=""
                          />
                        </a>
                      </li>
                      <li class="mb-0">
                        <a
                          href="https://www.apple.com/in/app-store/"
                          target="_blank"
                        >
                          <img
                            src="../assets/images/appstore.svg"
                            class="blur-up lazyload"
                            alt=""
                          />
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="sub-footer section-small-space">
          <div class="reserve">
            <h6 class="text-content"> </h6>
          </div>

          <div class="payment">
            <img
              src="../assets/images/payment/1.png"
              class="blur-up lazyload"
              alt=""
            />
          </div>

          <div class="social-link">
            <h6 class="text-content">Stay connected :</h6>
            <ul>
              <li>
                <a href="https://www.facebook.com/" target="_blank">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/" target="_blank">
                  <i class="fa-brands fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/" target="_blank">
                  <i class="fa-brands fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="https://in.pinterest.com/" target="_blank">
                  <i class="fa-brands fa-pinterest-p"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Quick View Modal Box Start -->
    <div class="modal fade theme-modal  view-modal" id="view" tabindex="-1">
      <div
        class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down"
      >
        <div class="modal-content" >
          <div class="modal-header p-0">
            <button type="button" id="closeModalButton" class="btn-close" data-bs-dismiss="modal">
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="row g-sm-4 g-2">
              <div class="col-lg-6">
                <div class="slider-image">
                  <img
                    src="../assets/images/product/category/1.jpg"
                    class="img-fluid blur-up lazyload"
                    alt=""
                  />
                </div>
              </div>

              <div class="col-lg-6">
                <div class="right-sidebar-modal">
                  <h4 class="title-name">
                   <?php 
                   echo $_GET['product_name'];
                   ?>
                  </h4>
                  <h4 class="price">$36.99</h4>
                  <div class="product-rating">
                    <ul class="rating">
                      <li>
                        <i data-feather="star" class="fill"></i>
                      </li>
                      <li>
                        <i data-feather="star" class="fill"></i>
                      </li>
                      <li>
                        <i data-feather="star" class="fill"></i>
                      </li>
                      <li>
                        <i data-feather="star" class="fill"></i>
                      </li>
                      <li>
                        <i data-feather="star"></i>
                      </li>
                    </ul>
                    <span class="ms-2">8 Reviews</span>
                    <span class="ms-2 text-danger"
                      >6 sold in last 16 hours</span
                    >
                  </div>

                  <div class="product-detail">
                    <h4>Product Details :</h4>
                    <p>
                      Candy canes sugar plum tart cotton candy chupa chups sugar
                      plum chocolate I love. Caramels marshmallow icing dessert
                      candy canes I love soufflé I love toffee. Marshmallow pie
                      sweet sweet roll sesame snaps tiramisu jelly bear claw.
                      Bonbon muffin I love carrot cake sugar plum dessert
                      bonbon.
                    </p>
                  </div>

                  <ul class="brand-list">
                    <li>
                      <div class="brand-box">
                        <h5>Brand Name:</h5>
                        <h6>Black Forest</h6>
                      </div>
                    </li>

                    <li>
                      <div class="brand-box">
                        <h5>Product Code:</h5>
                        <h6>W0690034</h6>
                      </div>
                    </li>

                    <li>
                      <div class="brand-box">
                        <h5>Product Type:</h5>
                        <h6>White Cream Cake</h6>
                      </div>
                    </li>
                  </ul>

                  <div class="select-size">
                    <h4>Cake Size :</h4>
                    <select class="form-select select-form-size">
                      <option selected>Select Size</option>
                      <option value="1.2">1/2 KG</option>
                      <option value="0">1 KG</option>
                      <option value="1.5">1/5 KG</option>
                      <option value="red">Red Roses</option>
                      <option value="pink">With Pink Roses</option>
                    </select>
                  </div>

                  <div class="modal-button">
                    <button
                      onclick="location.href = 'cart.html';"
                      class="btn btn-md add-cart-button icon"
                    >
                      Add To Cart
                    </button>
                    <button
                      onclick="location.href = 'product-left.html';"
                      class="btn theme-bg-color view-button icon text-white fw-bold btn-md"
                    >
                      View More Details
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <script>
    function addNewGetVariable(productName) {
    // Get the current URL
    var currentUrl = window.location.href;

    // Check if the URL already contains query parameters
    var separator = currentUrl.indexOf('?') !== -1 ? '&' : '?';

    // Add the new GET variable to the URL
    var newUrl = currentUrl + separator + 'product_name=' + encodeURIComponent(productName);
console.log(newUrl);
    // Redirect to the new URL
     window.location.href = newUrl;
}
// Check if the 'product_name' GET parameter is set
var productName = '<?php echo isset($_GET["product_name"]) ? $_GET["product_name"] : "" ?>';

// If 'product_name' is not empty, show the modal
if (productName !== '') {
    var modal = document.querySelector('#view');
    if (modal) {
        modal.classList.add('show');
        modal.style.display = 'inline';
        
    }
}

// Attach click event listener to the close button
// Attach click event listener to the close button
// Attach click event listener to the close button
document.getElementById('closeModalButton').addEventListener('click', function() {
    // Get the current URL
    var currentUrl = window.location.href;

    // Get the URL without the 'product_name' parameter
    var newUrl = currentUrl.replace(/([&?])product_name=[^&]*&?/, '');
    window.location.href = newUrl;
});
;


</script>
    <!-- Location Modal Start -->
    <div
      class="modal location-modal fade theme-modal"
      id="locationModal"
      tabindex="-1"
    >
      <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Choose your Delivery Location
            </h5>
            <p class="mt-1 text-content">
              Enter your address and we will specify the offer for your area.
            </p>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="location-list">
              <div class="search-input">
                <input
                  type="search"
                  class="form-control"
                  placeholder="Search Your Area"
                />
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>

              <div class="disabled-box">
                <h6>Select a Location</h6>
              </div>

              <ul class="location-select custom-height">
                <li>
                  <a href="javascript:void(0)">
                    <h6>Alabama</h6>
                    <span>Min: $130</span>
                  </a>
                </li>

                <li>
                  <a href="javascript:void(0)">
                    <h6>Arizona</h6>
                    <span>Min: $150</span>
                  </a>
                </li>

                <li>
                  <a href="javascript:void(0)">
                    <h6>California</h6>
                    <span>Min: $110</span>
                  </a>
                </li>

                <li>
                  <a href="javascript:void(0)">
                    <h6>Colorado</h6>
                    <span>Min: $140</span>
                  </a>
                </li>

                <li>
                  <a href="javascript:void(0)">
                    <h6>Florida</h6>
                    <span>Min: $160</span>
                  </a>
                </li>

                <li>
                  <a href="javascript:void(0)">
                    <h6>Georgia</h6>
                    <span>Min: $120</span>
                  </a>
                </li>

                <li>
                  <a href="javascript:void(0)">
                    <h6>Kansas</h6>
                    <span>Min: $170</span>
                  </a>
                </li>

                <li>
                  <a href="javascript:void(0)">
                    <h6>Minnesota</h6>
                    <span>Min: $120</span>
                  </a>
                </li>

                <li>
                  <a href="javascript:void(0)">
                    <h6>New York</h6>
                    <span>Min: $110</span>
                  </a>
                </li>

                <li>
                  <a href="javascript:void(0)">
                    <h6>Washington</h6>
                    <span>Min: $130</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Location Modal End -->

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
          <div class="modal-header">
            <div>
              <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
              <p class="mt-1 text-content">Recommended deals for you.</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="deal-offer-box">
              <ul class="deal-offer-list">
                <li class="list-1">
                  <div class="deal-offer-contain">
                    <a href="shop-left-sidebar.html" class="deal-image">
                      <img
                        src="../assets/images/vegetable/product/10.png"
                        class="blur-up lazyload"
                        alt=""
                      />
                    </a>

                    <a href="shop-left-sidebar.html" class="deal-contain">
                      <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                      <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                    </a>
                  </div>
                </li>

                <li class="list-2">
                  <div class="deal-offer-contain">
                    <a href="shop-left-sidebar.html" class="deal-image">
                      <img
                        src="../assets/images/vegetable/product/11.png"
                        class="blur-up lazyload"
                        alt=""
                      />
                    </a>

                    <a href="shop-left-sidebar.html" class="deal-contain">
                      <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                      <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                    </a>
                  </div>
                </li>

                <li class="list-3">
                  <div class="deal-offer-contain">
                    <a href="shop-left-sidebar.html" class="deal-image">
                      <img
                        src="../assets/images/vegetable/product/12.png"
                        class="blur-up lazyload"
                        alt=""
                      />
                    </a>

                    <a href="shop-left-sidebar.html" class="deal-contain">
                      <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                      <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                    </a>
                  </div>
                </li>

                <li class="list-1">
                  <div class="deal-offer-contain">
                    <a href="shop-left-sidebar.html" class="deal-image">
                      <img
                        src="../assets/images/vegetable/product/13.png"
                        class="blur-up lazyload"
                        alt=""
                      />
                    </a>

                    <a href="shop-left-sidebar.html" class="deal-contain">
                      <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                      <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Add to cart Modal Start -->
    <div class="add-cart-box">
      <div class="add-image">
        <img
          src="../assets/images/cake/pro/1.jpg"
          class="img-fluid blur-up lazyload"
          alt=""
        />
      </div>

      <div class="add-contain">
        <h6>Added to Cart</h6>
      </div>
    </div>
    <!-- Add to cart Modal End -->

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
               
                    <label for="colorPick" class="form-label mb-0"
                      >Theme Color</label
                    >
                    <input
                      type="color"
                      class="form-control form-control-color"
                      id="colorPick"
                      value="#0da487"
                      title="Choose your color"
                    />
                
                </div>
              </li>

              <li>
                <div class="setting-name">
                  <h4>Dark</h4>
                </div>
                <div class="theme-setting-button">
                  <button class="btn btn-2 outline" id="darkButton">
                    Dark
                  </button>
                  <button class="btn btn-2 unline" id="lightButton">
                    Light
                  </button>
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

    <!-- jquery ui-->
    <script src="../assets/js/jquery-ui.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="../assets/js/bootstrap/popper.min.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/feather/feather.min.js"></script>
    <script src="../assets/js/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/slick/slick-animation.min.js"></script>
    <script src="../assets/js/slick/custom_slick.js"></script>

    <!-- Price Range Js -->
    <script src="../assets/js/ion.rangeSlider.min.js"></script>

    <!-- Quantity js -->
    <script src="../assets/js/quantity-2.js"></script>

    <!-- sidebar open js -->
    <script src="../assets/js/filter-sidebar.js"></script>

    <!-- WOW js -->
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/custom-wow.js"></script>

    <!-- script js -->
    <script src="../assets/js/script.js"></script>

    <!-- theme setting js -->
    <script src="../assets/js/theme-setting.js"></script>
  </body>

  <!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/shop-category.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:02:35 GMT -->
</html>
