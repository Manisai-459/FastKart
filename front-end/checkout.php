<?php
include("db.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:02:57 GMT -->
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
              <h2>Checkout</h2>
              <nav>
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                    <a href="index.php">
                      <i class="fa-solid fa-house"></i>
                    </a>
                  </li>
                  <li class="breadcrumb-item active">Checkout</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->
<form method="post" action="order.php">
    <!-- Checkout section Start -->
    <section class="checkout-section-2 section-b-space">
      <div class="container-fluid-lg">
        <div class="row g-sm-4 g-3">
          <div class="col-lg-8">
            <div class="left-sidebar-checkout">
              <div class="checkout-detail-box">
                <ul>
                  <li>
                    <div class="checkout-icon">
                      <lord-icon
                        target=".nav-item"
                        src="https://cdn.lordicon.com/ggihhudh.json"
                        trigger="loop-on-hover"
                        colors="primary:#121331,secondary:#646e78,tertiary:#0baf9a"
                        class="lord-icon"
                      >
                      </lord-icon>
                    </div>
                    <div class="checkout-box">
                      <div class="checkout-title">
                        <h4>Delivery Address</h4>
                      </div>

                      
     



                      <div class="checkout-detail">
                        <div class="row g-4">
                
                        <?php



if(isset($_SESSION['id'])) {
  $user_id = mysqli_real_escape_string($conn, $_SESSION['id']);
  $sql = 'SELECT * FROM users WHERE id = "' . $user_id . '"';
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $addressString = $row['hno'] .', '.$row['addr'] . ', ' . $row['city'] . ', ' . $row['state'] . ', ' . $row['country'] . ', ' . $row['cpin'] . ', ' . $row['phno'];
        echo '
                  <div class="col-xxl-6 col-lg-12 col-md-6">
                    <div class="delivery-address-box">
                      <div>
                        <div class="form-check">
                          <input
                            required
                            class="form-check-input"
                            type="radio"
                            name="address"
                            id="1"
                            value="'. $addressString .'"
                          />
                        </div>

                        <div class="label">
                          <label>Home</label>
                        </div>

                        <ul class="delivery-address-detail">
                          <li>
                            <h4 class="fw-500">'.ucwords($row['fname'])." ".ucwords($row['lname']).'</h4>
                          </li>

                          <li>
                            <p class="text-content">
                              <span class="text-title">Address : '.$row['hno'].', '.$row['addr'].' , '.$row['city'].', '.$row['state'].','.$row['country'].' </span>
                            </p>
                          </li>

                          <li>
                            <h6 class="text-content">
                              <span class="text-title">Pin Code :</span>'.$row['cpin'].'
                            </h6>
                          </li>

                          <li>
                            <h6 class="text-content mb-0">
                              <span class="text-title">Phone :</span>'.$row['phno'].'
                            </h6>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- Add your second address details here if needed -->
               ';
    }
}

    $sql = 'SELECT * FROM addresses WHERE user_id = "' . $user_id . '"';
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $addressString = $row['hno'] .', '.$row['address'] . ', ' . $row['city'] . ', ' . $row['state'] . ', ' . $row['country'] . ', ' . $row['pin'] . ', ' . $row['phno'];
            echo '
                      <div class="col-xxl-6 col-lg-12 col-md-6">
                        <div class="delivery-address-box">
                          <div>
                            <div class="form-check">
                              <input
                              required
                                class="form-check-input"
                                type="radio"
                                name="address"
                                id="address_radio_' . $row['pid'] . '_1"
                                value="'. $addressString .'"
                              />
                            </div>

                            <div class="label">
                              <label>'.$row['type'].'</label>
                            </div>

                            <ul class="delivery-address-detail">
                              <li>
                                <h4 class="fw-500">'.$row['fname']." ".$row['lname'].'</h4>
                              </li>

                              <li>
                                <p class="text-content">
                                  <span class="text-title">Address : '.$row['hno'].', '.$row['address'].' , '.$row['city'].', '.$row['state'].','.$row['country'].' </span>
                                </p>
                              </li>

                              <li>
                                <h6 class="text-content">
                                  <span class="text-title">Pin Code :</span>'.$row['pin'].'
                                </h6>
                              </li>

                              <li>
                                <h6 class="text-content mb-0">
                                  <span class="text-title">Phone :</span>'.$row['phno'].'
                                </h6>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <!-- Add your second address details here if needed -->
                   ';
        }
    } else {
        echo "No addresses found for this user.";
    }

} else {
    echo "User not logged in.";
}

?>
                     
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="checkout-icon">
                      <lord-icon
                        target=".nav-item"
                        src="https://cdn.lordicon.com/oaflahpk.json"
                        trigger="loop-on-hover"
                        colors="primary:#0baf9a"
                        class="lord-icon"
                      >
                      </lord-icon>
                    </div>
                    <div class="checkout-box">
                      <div class="checkout-title">
                        <h4>Delivery Option</h4>
                      </div>

                      <div class="checkout-detail">
    <div class="row g-4">
        <div class="col-xxl-6">
            <div class="delivery-option">
                <div class="delivery-category">
                    <div class="shipment-detail">
                        <div class="form-check custom-form-check hide-check-box">
                            <input
                            required
                                class="form-check-input"
                                type="radio"
                                name="delivery_option"
                                id="standard"
                                value="Standard Delivery Option"
                                onclick="updateTotal(0)"
                            />
                            <label class="form-check-label" for="standard">Standard Delivery Option</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-6">
            <div class="delivery-option">
                <div class="delivery-category">
                    <div class="shipment-detail">
                        <div class="form-check mb-0 custom-form-check show-box-checked">
                            <input
                            required
                                class="form-check-input"
                                type="radio"
                                name="delivery_option"
                                id="fast"
                                value="Fast Delivery Option"
                                onclick="updateTotal(this.checked)"
                            />
                            <label class="form-check-label" for="fast">Fast Delivery Option</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 </div>
                  </li>

                  <li>
                    <div class="checkout-icon">
                      <lord-icon
                        target=".nav-item"
                        src="https://cdn.lordicon.com/qmcsqnle.json"
                        trigger="loop-on-hover"
                        colors="primary:#0baf9a,secondary:#0baf9a"
                        class="lord-icon"
                      >
                      </lord-icon>
                    </div>
                    <div class="checkout-box">
                      <div class="checkout-title">
                        <h4>Payment Option</h4>
                      </div>

                      <div class="checkout-detail">
                        <div
                          class="accordion accordion-flush custom-accordion"
                          id="accordionFlushExample"
                        >
                          <div class="accordion-item">
                            <div
                              class="accordion-header"
                              id="flush-headingFour"
                            >
                              <div
                                class="accordion-button collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour"
                              >
                                <div class="custom-form-check form-check mb-0">
                                  <label class="form-check-label" for="cash"
                                    ><input
                                      class="form-check-input mt-0"
                                      type="radio"
                                      name="flexRadioDefault"
                                      id="cash"
                                      value="cod"
                                    />
                                    Cash On Delivery</label
                                  >
                                </div>
                              </div>
                            </div>
                            <div
                              id="flush-collapseFour"
                              class="accordion-collapse collapse show"
                              data-bs-parent="#accordionFlushExample"
                            >
                              <div class="accordion-body">
                                <p class="cod-review">
                                  Pay digitally with SMS Pay Link. Cash may not
                                  be accepted in COVID restricted areas.
                                  <a href="javascript:void(0)">Know more.</a>
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <div class="accordion-header" id="flush-headingOne">
                              <div
                                class="accordion-button collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne"
                              >
                                <div class="custom-form-check form-check mb-0">
                                  <label class="form-check-label" for="credit"
                                    ><input
                                      class="form-check-input mt-0"
                                      type="radio"
                                      name="flexRadioDefault"
                                      id="credit"
                                      value="card"
                                    />
                                    Credit or Debit Card</label
                                  >
                                </div>
                              </div>
                            </div>
                            <div
                              id="flush-collapseOne"
                              class="accordion-collapse collapse"
                              data-bs-parent="#accordionFlushExample"
                            >
                              <div class="accordion-body">
                                <div class="row g-2">
                                  <div class="col-12">
                                    <div class="payment-method">
                                      <div
                                        class="form-floating mb-lg-3 mb-2 theme-form-floating"
                                      >
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="credit2"
                                          name="cardname"
                                          placeholder="Enter Credit & Debit Card Number"
                                        />
                                        <label for="credit2"
                                          >Enter Credit & Debit Card
                                          Number</label
                                        >
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-xxl-4">
                                    <div
                                      class="form-floating mb-lg-3 mb-2 theme-form-floating"
                                    >
                                      <input
                                        type="text"
                                        class="form-control"
                                        id="expiry"
                                        name="cardexp"
                                        placeholder="Enter Expiry Date"
                                      />
                                      <label for="expiry">Expiry Date</label>
                                    </div>
                                  </div>

                                  <div class="col-xxl-4">
                                    <div
                                      class="form-floating mb-lg-3 mb-2 theme-form-floating"
                                    >
                                      <input
                                        type="text"
                                        class="form-control"
                                        id="cvv"
                                        name="cardcvv"
                                        placeholder="Enter CVV Number"
                                      />
                                      <label for="cvv">CVV Number</label>
                                    </div>
                                  </div>

                                  <div class="col-xxl-4">
                                    <div
                                      class="form-floating mb-lg-3 mb-2 theme-form-floating"
                                    >
                                      <input
                                        type="password"
                                        class="form-control"
                                        id="password"
                                        name="cardpass"
                                        placeholder="Enter Password"
                                      />
                                      <label for="password">Password</label>
                                    </div>
                                  </div>

                                  <div class="button-group mt-0">
                                    <ul>
                                      
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <div class="accordion-header" id="flush-headingTwo">
                              <div
                                class="accordion-button collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo"
                              >
                                <div class="custom-form-check form-check mb-0">
                                  <label class="form-check-label" for="banking"
                                    ><input
                                      class="form-check-input mt-0"
                                      type="radio"
                                      name="flexRadioDefault"
                                      id="banking"
                                      value="netb"
                                    />Net Banking</label
                                  >
                                </div>
                              </div>
                            </div>
                            <div
                              id="flush-collapseTwo"
                              class="accordion-collapse collapse"
                              data-bs-parent="#accordionFlushExample"
                            >
                              <div class="accordion-body">
                                <h5 class="text-uppercase mb-4">
                                  Select Your Bank
                                </h5>
                                <div class="row g-2">
                                  <div class="col-md-6">
                                    <div class="custom-form-check form-check">
                                      <input
                                        class="form-check-input mt-0"
                                        type="radio"
                                        name="bank"
                                        id="bank1"
                                        value="Industrial & Commercial Bank"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="bank1"
                                        >Industrial & Commercial Bank</label
                                      >
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="custom-form-check form-check">
                                      <input
                                        class="form-check-input mt-0"
                                        type="radio"
                                        name="bank"
                                        id="bank2"
                                        value="Agricultural Bank"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="bank2"
                                        >Agricultural Bank</label
                                      >
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="custom-form-check form-check">
                                      <input
                                        class="form-check-input mt-0"
                                        type="radio"
                                        name="bank"
                                        id="bank3"
                                        value="Bank of America"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="bank3"
                                        >Bank of America</label
                                      >
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="custom-form-check form-check">
                                      <input
                                        class="form-check-input mt-0"
                                        type="radio"
                                        name="bank"
                                        id="bank4"
                                        value="Construction Bank Corp"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="bank4"
                                        >Construction Bank Corp.</label
                                      >
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="custom-form-check form-check">
                                      <input
                                        class="form-check-input mt-0"
                                        type="radio"
                                        name="bank"
                                        id="bank5"
                                        value="HSBC Holdings"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="bank5"
                                        >HSBC Holdings</label
                                      >
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="custom-form-check form-check">
                                      <input
                                        class="form-check-input mt-0"
                                        type="radio"
                                        name="bank"
                                        id="bank6"
                                        value="JPMorgan Chase & Co"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="bank6"
                                        >JPMorgan Chase & Co.</label
                                      >
                                    </div>
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <div
                              class="accordion-header"
                              id="flush-headingThree"
                            >
                              <div
                                class="accordion-button collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree"
                              >
                                <div class="custom-form-check form-check mb-0">
                                  <label class="form-check-label" for="wallet"
                                    ><input
                                      class="form-check-input mt-0"
                                      type="radio"
                                      name="flexRadioDefault"
                                      id="wallet"
                                      value="wallet"
                                    />My Wallet</label
                                  >
                                </div>
                              </div>
                            </div>
                            <div
                              id="flush-collapseThree"
                              class="accordion-collapse collapse"
                              data-bs-parent="#accordionFlushExample"
                            >
                              <div class="accordion-body">
                                <h5 class="text-uppercase mb-4">
                                  Select Your Wallet
                                </h5>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="custom-form-check form-check">
                                      <label
                                        class="form-check-label"
                                        for="amazon"
                                        ><input
                                          class="form-check-input mt-0"
                                          type="radio"
                                          name="wallet"
                                          id="amazon"
                                          value="Amazon Pay"
                                        />Amazon Pay</label
                                      >
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="custom-form-check form-check">
                                      <input
                                        class="form-check-input mt-0"
                                        type="radio"
                                        name="wallet"
                                        id="gpay"
                                        name="wallet"
                                        value="Google Pay"
                                      />
                                      <label class="form-check-label" for="gpay"
                                        >Google Pay</label
                                      >
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="custom-form-check form-check">
                                      <input
                                        class="form-check-input mt-0"
                                        type="radio"
                                        name="wallet"
                                        id="airtel"
                                        value="Airtel Money"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="airtel"
                                        >Airtel Money</label
                                      >
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="custom-form-check form-check">
                                      <input
                                        class="form-check-input mt-0"
                                        type="radio"
                                        name="wallet"
                                        id="paytm"
                                        value="Paytm Pay"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="paytm"
                                        >Paytm Pay</label
                                      >
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="custom-form-check form-check">
                                      <input
                                        class="form-check-input mt-0"
                                        type="radio"
                                        name="wallet"
                                        id="jio"
                                        value="JIO Money"
                                      />
                                      <label class="form-check-label" for="jio"
                                        >JIO Money</label
                                      >
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="custom-form-check form-check">
                                      <input
                                        class="form-check-input mt-0"
                                        type="radio"
                                        name="wallet"
                                        id="free"
                                        value="Freecharge"
                                      />
                                      <label class="form-check-label" for="free"
                                        >Freecharge</label
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                
                  <li>
                  <div class="checkout-box">
                      <div class="checkout-title">
                        <h4>Cooking Instruction</h4>
                      </div>
                      <div class="col-xxl-12">
                      <div class="delivery-option">
    <div class="delivery-category">
        <div class="shipment-detail">
            <textarea class="form-control" name="cooking_instructions" rows="4" placeholder="Enter cooking instructions"></textarea>
        </div>
    </div>
</div>

   
                  <div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="right-side-summery-box">
              <div class="summery-box-2">
                <div class="summery-header">
                  <h3>Order Summery</h3>
                </div>
                <ul class="summery-contain">
                <?php 
                 $sql = "SELECT * FROM wishcart WHERE user_id = '" . $_SESSION['id'] . "' and wc = 0";
                 $result = mysqli_query($conn, $sql);
                 if(mysqli_num_rows($result) > 0) {
                  $total = 0;
                  while($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $pid = $row['pid'];
                  $q = $row['quantity'];
                  $sqli = "SELECT * FROM products WHERE pid = '" . $row['pid'] . "'";
                  $results = mysqli_query($conn, $sqli);
                  while ($rows =mysqli_fetch_assoc($results)){
                    $total += $rows['price']*$q;
                    echo '<li>
                    <img
                      src="'.$rows['image_url'].'"
                      class="img-fluid blur-up lazyloaded checkout-image"
                      alt=""
                    />
                    <h4>'.$rows['pname'].' <span>X '.$q.'</span></h4>
                    <h4 class="price">'.(floatval($rows['price']) * intval($q)).'.00</h4>
                  </li>';
            
                  }
                }
              }
                ?>
                </ul>
                <!-- <ul class="summery-contain">
                  <li>
                    <img
                      src="../assets/images/vegetable/product/1.png"
                      class="img-fluid blur-up lazyloaded checkout-image"
                      alt=""
                    />
                    <h4>Bell pepper <span>X 1</span></h4>
                    <h4 class="price">$32.34</h4>
                  </li>

                  <li>
                    <img
                      src="../assets/images/vegetable/product/2.png"
                      class="img-fluid blur-up lazyloaded checkout-image"
                      alt=""
                    />
                    <h4>Eggplant <span>X 3</span></h4>
                    <h4 class="price">$12.23</h4>
                  </li>

                  <li>
                    <img
                      src="../assets/images/vegetable/product/3.png"
                      class="img-fluid blur-up lazyloaded checkout-image"
                      alt=""
                    />
                    <h4>Onion <span>X 2</span></h4>
                    <h4 class="price">$18.27</h4>
                  </li>

                  <li>
                    <img
                      src="../assets/images/vegetable/product/4.png"
                      class="img-fluid blur-up lazyloaded checkout-image"
                      alt=""
                    />
                    <h4>Potato <span>X 1</span></h4>
                    <h4 class="price">$26.90</h4>
                  </li>

                  <li>
                    <img
                      src="../assets/images/vegetable/product/5.png"
                      class="img-fluid blur-up lazyloaded checkout-image"
                      alt=""
                    />
                    <h4>Baby Chili <span>X 1</span></h4>
                    <h4 class="price">$19.28</h4>
                  </li>

                  <li>
                    <img
                      src="../assets/images/vegetable/product/6.png"
                      class="img-fluid blur-up lazyloaded checkout-image"
                      alt=""
                    />
                    <h4>Broccoli <span>X 2</span></h4>
                    <h4 class="price">$29.69</h4>
                  </li>
                </ul>-->

                <ul class="summery-total"> 
                  <li>
                    <h4>Subtotal</h4>
                    <h4 class="price"><?php if(isset($total)) echo $total;?>.00</h4>
                  </li>

                  <li>
                    <h4>Shipping</h4>
                    <h4 class="price">100.00</h4>
                  </li>
                  <li id="fastDeliveryOption" style="display: none;">
    <h4>Fast Delivery</h4>
    <h4 class="price">100.00</h4>
</li>


                  <li>
                    <h4>Tax</h4>
                    <h4 class="price">50.00</h4>
                  </li>

                  <!-- <li>
                    <h4>Coupon/Code</h4>
                    <h4 class="price">$-23.10</h4>
                  </li> -->

                  <li class="list-total">
                    <h4>Total (Indian Rs)</h4>
                    <h4 class="price" id="totalPrice"><?php if(isset($total)) {$total += 150; echo $total; } ?>.00</h4>
 </li>
                </ul>
              </div>
              <script>
 
 $f = 1;
    // Function to handle radio button change event
    function handleDeliveryOptionChange() {
      
       // Assuming $total is already defined

function updateTotal(checked) {
  var fastDeliveryOptionElement = document.getElementById('fastDeliveryOption');
  var total = <?php echo $total; ?>;
    if (checked) {
        total += 100;
    } else {
      fastDeliveryOptionElement.style.display = 'none';
        total -= 100;
    }

    document.getElementById('totalPrice').innerHTML = total.toFixed(2);
}
        var fastDeliveryOption = document.getElementById('fast');
        var standardDeliveryOption = document.getElementById('standard');
        var fastDeliveryOptionElement = document.getElementById('fastDeliveryOption');
        if (fastDeliveryOption.checked) {
          $f = 0;
          fastDeliveryOptionElement.style.display = 'flex';
            // Fast delivery option is selected, add 150 to total
            updateTotal(true);
        } else if (!fastDeliveryOption.checked && !standardDeliveryOption.checked) {
          fastDeliveryOptionElement.style.display = 'none';
            // Neither fast nor standard delivery option is selected, reset total to original value
            total = <?php echo $total; ?>;
            document.getElementById('totalPrice').innerHTML = total.toFixed(2);
        }else if($f == 0 && standardDeliveryOption.checked){
          fastDeliveryOptionElement.style.display = 'none';
          total = <?php echo $total; ?>;
          
            document.getElementById('totalPrice').innerHTML = total.toFixed(2);

        }
    }

    // Add event listeners to delivery options
    var fastDeliveryOption = document.getElementById('fast');
    var standardDeliveryOption = document.getElementById('standard');

    fastDeliveryOption.addEventListener('change', handleDeliveryOptionChange);
    standardDeliveryOption.addEventListener('change', handleDeliveryOptionChange);
</script>

              <div class="checkout-offer">
                <div class="offer-title">
                  <div class="offer-icon">
                    <img
                      src="../assets/images/inner-page/offer.svg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="offer-name">
                    <h6>Available Offers</h6>
                  </div>
                </div>

                <ul class="offer-detail">
                  <li>
                    <p>
                      Combo: BB Royal Almond/Badam Californian, Extra Bold 100
                      gm...
                    </p>
                  </li>
                  <li>
                    <p>
                      combo: Royal Cashew Californian, Extra Bold 100 gm + BB
                      Royal Honey 500 gm
                    </p>
                  </li>
                </ul>
              </div>

              <button
                class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold"
              >
                Place Order
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Checkout section End -->
    </form>
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

    <!-- Add address modal box start -->
    <div class="modal fade theme-modal" id="add-address" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">
              Add a new address
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-floating mb-4 theme-form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="fname"
                  placeholder="Enter First Name"
                />
                <label for="fname">First Name</label>
              </div>
            </form>

            <form>
              <div class="form-floating mb-4 theme-form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="lname"
                  placeholder="Enter Last Name"
                />
                <label for="lname">Last Name</label>
              </div>
            </form>

            <form>
              <div class="form-floating mb-4 theme-form-floating">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Enter Email Address"
                />
                <label for="email">Email Address</label>
              </div>
            </form>

            <form>
              <div class="form-floating mb-4 theme-form-floating">
                <textarea
                  class="form-control"
                  placeholder="Leave a comment here"
                  id="address"
                  style="height: 100px"
                ></textarea>
                <label for="address">Enter Address</label>
              </div>
            </form>

            <form>
              <div class="form-floating mb-4 theme-form-floating">
                <input
                  type="email"
                  class="form-control"
                  id="pin"
                  placeholder="Enter Pin Code"
                />
                <label for="pin">Pin Code</label>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary btn-md"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button
              type="button"
              class="btn theme-bg-color btn-md text-white"
              data-bs-dismiss="modal"
            >
              Save changes
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Add address modal box end -->

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
                  </form>
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

    <!-- Lord-icon Js -->
    <script src="../assets/js/lusqsztk.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/feather/feather.min.js"></script>
    <script src="../assets/js/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!-- Delivery Option js -->
    <script src="../assets/js/delivery-option.js"></script>

    <!-- Slick js-->
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/slick/custom_slick.js"></script>

    <!-- Quantity js -->
    <script src="../assets/js/quantity.js"></script>

    <!-- script js -->
    <script src="../assets/js/script.js"></script>

    <!-- theme setting js -->
    <script src="../assets/js/theme-setting.js"></script>
  </body>

  <!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 14:02:58 GMT -->
</html>
