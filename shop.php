<!doctype html>
<?php
require "server/db_connection.php";
require "server/functions.php";

?>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Alpha - The Planet of Pets</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHs3T8YCy5bS96MHjZO_T8O_beO78OwYe02Vqp3mrHg-Sj9bJW">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <!-- header start -->
            <header>
                <div class="header-area transparent-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-5 col-5">
                                <div class="language-currency">
                                    <div class="language">
                                        <select class="select-header orderby">
                                            <option value="">ENGLISH</option>
                                            <option value="">BANGLA </option>
                                            <option value="">HINDI</option>
                                        </select>
                                    </div>
                                    <div class="currency">
                                        <select class="select-header orderby">
                                            <option value="">USD</option>
                                            <option value="">US </option>
                                            <option value="">EURO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sticky-logo">
                                    <a href="index.php"><img src="https://freepngimg.com/thumb/watch/11-2-watch-png-pic.png" alt="" width="100px" height="100px" /></a>
                                </div>
                                <div class="logo-small-device">
                                    <a href="index.php"><img alt="" src="http://www.pngmart.com/files/3/Wall-Watch-PNG-File.png"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 d-none d-md-block">
                                <div class="logo-menu-wrapper text-center">
                                    <div class="logo">
                                        <a href="index.php"><img src="http://www.pngmart.com/files/3/Wall-Watch-PNG-File.png" alt="" width="100px" height="100px" /></a>
                                    </div>
                                    <div class="main-menu">
                                        <nav>
                                            <ul>
                                                <li><a href="index.php">home</a>
                                                </li>
                                                <li><a href="about-us.php">about us </a></li>
                                                <li><a href="shop.php">shop <i class="ion-ios-arrow-down"></i></a>
                                                    <ul>
                                                        <li><a href="product-details.php">Product details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">pages <i class="ion-ios-arrow-down"></i></a>
                                                    <ul>
                                                        <li><a href="about-us.php">about us</a></li>
                                                        <li><a href="cart.php">cart page</a></li>
                                                        <li><a href="checkout.php">checkout</a></li>
                                                        <li><a href="wishlist.php">wishlist</a></li>
                                                        <li><a href="login-register.php">login</a></li>
                                                        <li><a href="contact.php">contact</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog.php">blog <i class="ion-ios-arrow-down"></i></a>
                                                    <ul>
                                                        <li><a href="blog-details-standerd.php">about us</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.php">contact us</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-7 col-7">
                                <div class="header-site-icon">
                                    <div class="header-search same-style">
                                        <button class="sidebar-trigger-search">
                                            <span class="ti-search"></span>
                                        </button>
                                    </div>
                                    <div class="header-login same-style">
                                        <a href="login-register.php">
                                            <span class="ti-user"></span>
                                        </a>
                                    </div>
                                    <div class="header-cart same-style">
                                        <button class="sidebar-trigger">
                                            <i class="ti-shopping-cart"></i>
                                            <span class="count-style">03</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu-area col-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li><a href="#">HOME</a>
                                                <ul>
                                                    <li><a href="index.php">home version 1</a></li>
                                                    <li><a href="index-2.php">home version 2</a></li>
                                                    <li><a href="index-3.php">home version 3</a></li>
                                                    <li><a href="index-4.php">home version 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">pages</a>
                                                <ul>
                                                    <li><a href="about-us.php">about us</a></li>
                                                    <li><a href="cart.php">cart page</a></li>
                                                    <li><a href="checkout.php">checkout</a></li>
                                                    <li><a href="wishlist.php">wishlist</a></li>
                                                    <li><a href="login-register.php">login</a></li>
                                                    <li><a href="contact.php">contact</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">shop</a>
                                                <ul>
                                                    <li><a href="#">shop grid</a>
                                                        <ul>
                                                            <li><a href="shop-grid-2-col.php"> grid 2 column</a></li>
                                                            <li><a href="shop-grid-3-col.php"> grid 3 column</a></li>
                                                            <li><a href="shop.php"> grid 4 column</a></li>
                                                            <li><a href="shop-grid-6-col.php"> grid 6 column</a></li>
                                                            <li><a href="shop-grid-box.php"> grid box style</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">shop list</a>
                                                        <ul>
                                                            <li><a href="shop-list.php"> list 1 column</a></li>
                                                            <li><a href="shop-list-2-col.php"> list 2 column</a></li>
                                                            <li><a href="shop-list-3-col.php"> list 3 column</a></li>
                                                            <li><a href="shop-list-box.php"> list box style</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-grid-view-5-col.php">product details</a>
                                                        <ul>
                                                            <li><a href="product-details.php">tab style</a></li>
                                                            <li><a href="product-details-sticky.php">sticky style</a></li>
                                                            <li><a href="product-details-gallery.php">gallery style</a></li>
                                                            <li><a href="product-details-fixed-img.php">fixed image style</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">BLOG</a>
                                                <ul>
                                                    <li><a href="blog-masonry.php">Blog Masonry</a></li>
                                                    <li><a href="#">Blog Standard</a>
                                                        <ul>
                                                            <li><a href="blog-left-sidebar.php">left sidebar</a></li>
                                                            <li><a href="blog-right-sidebar.php">right sidebar</a></li>
                                                            <li><a href="blog-no-sidebar.php">no sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Post Types</a>
                                                        <ul>
                                                            <li><a href="blog-details-standerd.php">Standard post</a></li>
                                                            <li><a href="blog-details-audio.php">audio post</a></li>
                                                            <li><a href="blog-details-video.php">video post</a></li>
                                                            <li><a href="blog-details-gallery.php">gallery post</a></li>
                                                            <li><a href="blog-details-link.php">link post</a></li>
                                                            <li><a href="blog-details-quote.php">quote post</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php"> Contact us</a></li>
                                        </ul>
                                    </nav>                          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="header-height"></div>
            <!-- main-search start -->
            <div class="main-search-active">
                <div class="sidebar-search-icon">
                    <button class="search-close"><span class="ti-close"></span></button>
                </div>
                <div class="sidebar-search-input">
                    <form>
                        <div class="form-search">
                            <input id="search" class="input-text" value="" placeholder="Search Entire Store" type="search">
                            <button>
                                <i class="ti-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="breadcrumb-area mt-37 hm-4-padding">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>Shop Page</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Shop page</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="banner-area hm-4-padding">
                <div class="container-fluid">
                    <div class="banner-img">
                        <a href="#"><img src="assets/img/banner/16.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="shop-wrapper hm-3-padding pt-120 pb-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shop-topbar-wrapper">
                                <div class="grid-list-options">
                                    <ul class="view-mode">
                                        <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ion-grid"></i></a></li>
                                        <li><a href="#product-list" data-view="product-list"><i class="ion-navicon"></i></a></li>
                                    </ul>
                                </div>
                                <div class="shop-filter">
                                    <button class="product-filter-toggle">filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-filter-wrapper">
                                <div class="row">
                                    <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                        <h5>Sort by</h5>
                                        <ul class="sort-by">
                                            <li><a href="#">Default</a></li>
                                            <li><a href="#">Popularity</a></li>
                                            <li><a href="#">Average rating</a></li>
                                            <li><a href="#">Newness</a></li>
                                            <li><a href="#">Price: Low to High</a></li>
                                            <li><a href="#">Price: High to Low</a></li>
                                        </ul>
                                    </div>
                                    <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                        <h5>color filters</h5>
                                        <ul class="color-filter">
                                            <li><a href="#"><i style="background-color: #000000;"></i>Black</a></li>
                                            <li><a href="#"><i style="background-color: #663300;"></i>Brown</a></li>
                                            <li><a href="#"><i style="background-color: #FF6801;"></i>Orange</a></li>
                                            <li><a href="#"><i style="background-color: #ff0000;"></i>red</a></li>
                                            <li><a href="#"><i style="background-color: #FFEE00;"></i>Yellow</a></li>
                                        </ul>
                                    </div>
                                    <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                        <h5>product tags</h5>
                                        <div class="product-tags">
                                            <a href="#">New ,</a>
                                            <a href="#">brand ,</a>
                                            <a href="#">black ,</a>
                                            <a href="#">white ,</a>
                                            <a href="#">chire ,</a>
                                            <a href="#">table ,</a>
                                            <a href="#">Lorem ,</a>
                                            <a href="#">ipsum ,</a>
                                            <a href="#">dolor ,</a>
                                            <a href="#">sit ,</a>
                                            <a href="#">amet ,</a>
                                        </div>
                                    </div>
                                    <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                        <h5>Filter by price</h5>
                                        <div id="price-range"></div>
                                        <div class="price-values">
                                            <span>Price:</span>
                                            <input type="text" class="price-amount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-list-product-wrapper">
                        <div class="product-grid product-view">
                            <div class="row">
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/21.jpg" alt="">
                                            </a>
                                            <div class="price-decrease">
                                                <span>30% off</span>
                                            </div>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.php">Cloth Jewelry</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span class="old">$200.00 </span>
                                                    <span>$120.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.php">Awesome Cloth Jewelry</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.php"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/22.jpg" alt="">
                                            </a>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.php">Cloth Jewelry</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span>$150.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.php">Awesome Cloth Jewelry</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.php"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/23.jpg" alt="">
                                            </a>
                                            <div class="price-decrease">
                                                <span>50% off</span>
                                            </div>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.php">Cloth Bracelet </a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span class="old">$200.00 </span>
                                                    <span>$120.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.php">Nice Cloth Bracelet </a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.php"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/24.jpg" alt="">
                                            </a>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.php">Cloth Jewelry</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span>$200.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.php">Cloth Hairpin</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.php"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/25.jpg" alt="">
                                            </a>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.php">Cloth Jewelry</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span class="old">$200.00 </span>
                                                    <span>$120.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.php">Awesome Cloth Jewelry</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.php"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/26.jpg" alt="">
                                            </a>
                                            <div class="price-decrease">
                                                <span>20% off</span>
                                            </div>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.php">Cloth Bracelet</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span>$100.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.php">Cloth Bracelet</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.php"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/27.jpg" alt="">
                                            </a>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.php">Cloth Hairpin</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span class="old">$200.00 </span>
                                                    <span>$120.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.php">Awesome Cloth Jewelry</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.php"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-md-6 col-xl-3 col-lg-4">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="assets/img/product/28.jpg" alt="">
                                            </a>
                                            <div class="price-decrease">
                                                <span>30% off</span>
                                            </div>
                                            <div class="product-action-3">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i> Quict View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title-wishlist">
                                                <div class="product-title-3">
                                                    <h4><a href="product-details.php">Cloth Jewelry</a></h4>
                                                </div>
                                                <div class="product-wishlist-3">
                                                    <a href="#"><i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-peice-addtocart">
                                                <div class="product-peice-3">
                                                    <span>$170.00</span>
                                                </div>
                                                <div class="product-addtocart">
                                                    <a href="#"> <i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a href="product-details.php">Awesome Cloth Jewelry</a></h2>
                                            <div class="product-rating">
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                                <i class="ion-ios-star"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="old">$22.00 </span>
                                                <span>$19.00</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                                            <div class="shop-list-cart">
                                                <a href="cart.php"><i class="ti-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-style text-center mt-30">
                                <ul>
                                    <li>
                                        <a class="active" href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ion-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brand-logo-area hm-4-padding">
                <div class="container-fluid">
                    <div class="brand-logo-active owl-carousel gray-bg ptb-130">
                        <div class="single-logo">
                            <img alt="" src="assets/img/brand-logo/1.png">
                        </div>
                        <div class="single-logo">
                            <img alt="" src="assets/img/brand-logo/2.png">
                        </div>
                        <div class="single-logo">
                            <img alt="" src="assets/img/brand-logo/3.png">
                        </div>
                        <div class="single-logo">
                            <img alt="" src="assets/img/brand-logo/4.png">
                        </div>
                        <div class="single-logo">
                            <img alt="" src="assets/img/brand-logo/5.png">
                        </div>
                        <div class="single-logo">
                            <img alt="" src="assets/img/brand-logo/3.png">
                        </div>
                    </div>
                </div>
            </div>
            <footer class="hm-4-padding">
                <div class="container-fluid">
                    <div class="footer-top pt-125 pb-25">
                        <div class="row">
                            <div class="col-lg-3 col-md-5">
                                <div class="footer-widget mb-30">
                                    <div class="footer-widget-title">
                                        <h3>Get in Touch</h3>
                                    </div>
                                    <div class="food-info-wrapper">
                                        <div class="food-address">
                                            <div class="food-info-icon">
                                                <i class="ion-ios-home-outline"></i>
                                            </div>
                                            <div class="food-info-content">
                                                <p>2020 Willshire Glen, Out of <br>Alpharetta, GA-30009</p>
                                            </div>
                                        </div>
                                        <div class="food-address">
                                            <div class="food-info-icon">
                                                <i class="ion-ios-telephone-outline"></i>
                                            </div>
                                            <div class="food-info-content">
                                                <p>(+00) 121 025 0214 </p>
                                            </div>
                                        </div>
                                        <div class="food-address">
                                            <div class="food-info-icon">
                                                <i class="ion-ios-email-outline"></i>
                                            </div>
                                            <div class="food-info-content">
                                                <p><a href="#">info@example.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <div class="footer-widget mb-30 pl-10">
                                    <div class="footer-widget-title">
                                        <h3>Information</h3>
                                    </div>
                                    <div class="food-widget-content">
                                        <ul class="quick-link">
                                            <li><a href="#">Delivery</a></li>
                                            <li><a href="#">Legal Notice</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="#">Secure Payment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <div class="footer-widget mb-30 pl-100">
                                    <div class="footer-widget-title">
                                        <h3>accounts</h3>
                                    </div>
                                    <div class="food-widget-content">
                                        <ul class="quick-link">
                                            <li><a href="login-register.php">Sign In</a></li>
                                            <li><a href="cart.php">View Cart</a></li>
                                            <li><a href="wishlist.php">My Wishlist</a></li>
                                            <li><a href="#">Track My Order</a></li>
                                            <li><a href="#">Help</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="footer-widget mb-30 pl-125">
                                    <div class="footer-widget-title">
                                        <h3>support</h3>
                                    </div>
                                    <div class="food-widget-content">
                                        <ul class="quick-link">
                                            <li><a href="contact.php">Hello & Contact</a></li>
                                            <li><a href="#">Shipping & Tax</a></li>
                                            <li><a href="#">Return Policy</a></li>
                                            <li><a href="#">Affiliates</a></li>
                                            <li><a href="#">Legal Notice</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-widget mb-30 f-right">
                                    <div class="footer-widget-title">
                                        <h3>twitter feed</h3>
                                    </div>
                                    <div class="twitter-info-wrapper">
                                        <div class="single-twitter">
                                            <div class="twitter-icon">
                                                <i class="ion-social-twitter-outline"></i>
                                            </div>
                                            <div class="twitter-content">
                                                <p>A modern <a href="#">#Shopify theme </a> <a class="link1" href="#">@devitems</a> <br><a class="link2" href="#">https://twitter.com/devitemsllc</a></p>
                                            </div>
                                        </div>
                                        <div class="single-twitter">
                                            <div class="twitter-icon">
                                                <i class="ion-social-twitter-outline"></i>
                                            </div>
                                            <div class="twitter-content">
                                                <p>A modern <a href="#">#Shopify theme </a> <a class="link1" href="#">@devitems</a> <br> <a class="link2" href="#">https://twitter.com/devitemsllc</a></p>
                                            </div>
                                        </div>
                                        <div class="single-twitter">
                                            <div class="twitter-icon">
                                                <i class="ion-social-twitter-outline"></i>
                                            </div>
                                            <div class="twitter-content">
                                                <p>A modern <a href="#">#Shopify theme </a> <a class="link1" href="#">@devitems</a> <br> <a class="link2" href="#">https://twitter.com/devitemsllc</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom border-top-1 ptb-15">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="copyright-payment">
                                    <div class="copyright">
                                        <p>Copyright ©  2018 <a href="https://freethemescloud.com/">Free themes Cloud</a> All RIght Reserved.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="footer-payment-method">
                                    <a href="#"><img alt="" src="assets/img/icon-img/7.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close" aria-hidden="true"></span>
                </button>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="qwick-view-left">
                                <div class="quick-view-learg-img">
                                    <div class="quick-view-tab-content tab-content">
                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                            <img src="assets/img/quick-view/l1.jpg" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                            <img src="assets/img/quick-view/l2.jpg" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                            <img src="assets/img/quick-view/l3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-list nav" role="tablist">
                                    <a class="active" href="#modal1" data-toggle="tab">
                                        <img src="assets/img/quick-view/s1.jpg" alt="">
                                    </a>
                                    <a href="#modal2" data-toggle="tab">
                                        <img src="assets/img/quick-view/s2.jpg" alt="">
                                    </a>
                                    <a href="#modal3" data-toggle="tab">
                                        <img src="assets/img/quick-view/s3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="qwick-view-right">
                                <div class="qwick-view-content">
                                    <h3>Handcrafted Supper Mug</h3>
                                    <div class="price">
                                        <span class="new">$90.00</span>
                                        <span class="old">$120.00  </span>
                                    </div>
                                    <div class="rating-number">
                                        <div class="quick-view-rating">
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-ios-star red-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                    <div class="quick-view-select">
                                        <div class="select-option-part">
                                            <label>Size*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">900</option>
                                                <option value="">700</option>
                                            </select>
                                        </div>
                                        <div class="select-option-part">
                                            <label>Color*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">orange</option>
                                                <option value="">pink</option>
                                                <option value="">yellow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
											<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
										</div>
                                        <div class="quickview-btn-cart">
                                            <a class="btn-style cr-btn" href="#"><span>add to cart</span></a>
                                        </div>
                                        <div class="quickview-btn-wishlist">
                                            <a class="btn-hover cr-btn" href="#"><span><i class="ion-ios-heart-outline"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
		
		
		
		
		
		
		
		
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
