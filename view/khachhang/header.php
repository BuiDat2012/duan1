<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/urdan/urdan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 08:19:12 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Urdan - Minimal eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Urdan Minimal eCommerce Bootstrap 5 Template is a stunning eCommerce website template that is the best choice for any online store.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="https://htmldemo.hasthemes.com/urdan/index.html" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Urdan - Minimal eCommerce HTML Template" />
    <meta property="og:url" content="https://htmldemo.hasthemes.com/urdan/index.html" />
    <meta property="og:site_name" content="Urdan - Minimal eCommerce HTML Template" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Urdan Minimal eCommerce Bootstrap 5 Template is a stunning eCommerce website template that is the best choice for any online store." />
    <!-- Add site Favicon -->
    <link rel="icon" href="assets/images/favicon/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="assets/images/favicon/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="assets/images/favicon/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/cropped-favicon-270x270.png" />

    <!-- All CSS is here
	============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/aos.css" />
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/easyzoom.css" />
    <link rel="stylesheet" href="assets/css/plugins/slinky.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>




<body>
    <div class="main-wrapper main-wrapper-2">
        <header class="header-area header-responsive-padding header-height-1">
            <div class="header-bottom sticky-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="logo">
                                <?php
                                extract($logo);
                                $linkimg = '../../view/img/'.$img;
                                ?>
                                <a href="index.php?act=home"><img src="<?= $linkimg ?>" alt="logo" width="270px" height="140px"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block d-flex justify-content-center">
                            <div class="main-menu text-center">
                                <nav>
                                    <ul>
                                        <li><a href="index.php?act=home">HOME</a>
                                            <!-- <ul class="sub-menu-style">
                                                <li><a href="index.html">Home version 1 </a></li>
                                                <li><a href="index-2.html">Home version 2</a></li>
                                                <li><a href="index-3.html">Home version 3</a></li>
                                                <li><a href="index-4.html">Home version 4</a></li>
                                                <li><a href="index-5.html">Home version 5</a></li>
                                                <li><a href="index-6.html">Home version 6</a></li>
                                                <li><a href="index-7.html">Home version 7</a></li>
                                                <li><a href="index-8.html">Home version 8</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="index.php?act=thongtintaikhoan">SHOP</a>
                                            <!-- <ul class="mega-menu-style mega-menu-mrg-1">
                                                <li>
                                                    <ul>
                                                        <li>
                                                            <a class="dropdown-title" href="#">Shop Layout</a>
                                                            <ul>
                                                                <li><a href="shop.html">standard style</a></li>
                                                                <li><a href="shop-sidebar.html">shop grid sidebar</a></li>
                                                                <li><a href="shop-list.html">shop list style</a></li>
                                                                <li><a href="shop-list-sidebar.html">shop list sidebar</a></li>
                                                                <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                                                <li><a href="shop-location.html">store location</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-title" href="#">Products Layout</a>
                                                            <ul>
                                                                <li><a href="product-details.html">tab style 1</a></li>
                                                                <li><a href="product-details-2.html">tab style 2</a></li>
                                                                <li><a href="product-details-gallery.html">gallery style </a></li>
                                                                <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                                                <li><a href="product-details-group.html">group style</a></li>
                                                                <li><a href="product-details-fixed-img.html">fixed image style </a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="shop.html"><img src="assets/images/banner/menu.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li><a href="#">PAGES</a>
                                            <!-- <ul class="sub-menu-style">
                                                <li><a href="about-us.html">about us </a></li>
                                                <li><a href="cart.html">cart page</a></li>
                                                <li><a href="checkout.html">checkout </a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="wishlist.html">wishlist </a></li>
                                                <li><a href="compare.html">compare </a></li>
                                                <li><a href="contact-us.html">contact us </a></li>
                                                <li><a href="login-register.html">login / register </a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="blog.html">BLOG</a>
                                            <!-- <ul class="sub-menu-style">
                                                <li><a href="blog.html">blog standard </a></li>
                                                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="about-us.html">ABOUT</a></li>
                                        <li><a href="contact-us.html">CONTACT US</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="header-action-wrap">
                                <div class="header-action-style header-search-1">
                                    <a class="search-toggle" href="#">
                                        <i class="pe-7s-search s-open"></i>
                                        <i class="pe-7s-close s-close"></i>
                                    </a>
                                    <div class="search-wrap-1">
                                        <form action="index.php?act=search" method="post">
                                            <input name="keyw" placeholder="Search products…" type="text">
                                            <button name="timkiem" class="button-search"><i class="pe-7s-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-action-style">
                                    <?php
                                    if (isset($_SESSION['user']) && ($_SESSION['user'])) {
                                    ?>
                                        <a title="Login Register" href="index.php?act=taikhoan"><i class="pe-7s-user"></i></a>

                                    <?php
                                    } else {
                                    ?>
                                        <a title="Login Register" href="index.php?act=dangnhap-dangky"><i class="pe-7s-user"></i></a>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="header-action-style">
                                    <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                </div>
                                <div class="header-action-style header-action-cart">
                                    <a class="#" href="index.php?act=cart"><i class="pe-7s-shopbag"></i>
                                        <span class="product-count bg-black">
                                            <?php
                                                if(isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0){
                                                    echo count($_SESSION['giohang']);
                                                }else{
                                                    echo '0';
                                                }
                                            ?>
                                        </span>
                                    </a>
                                </div>
                                <!-- <div class="header-action-style d-block d-lg-none">
                                        <a class="mobile-menu-active-button" href="#"><i class="pe-7s-menu"></i></a>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>