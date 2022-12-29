<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Watch shop | <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="manifest" href="site.webmanifest">-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('img/favicon.ico')); ?>">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/slicknav.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <?php echo $__env->yieldContent('css'); ?>

</head>



<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo e(asset('img/logo/logo.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="<?php echo e(url('/index')); ?>"><img src="<?php echo e(asset('img/logo/logo.png')); ?>" alt=""></a>

                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(url('/shop')); ?>">shop</a></li>
                                    <li><a href="<?php echo e(url('/about')); ?>">about</a></li>
                                    <li class="hot"><a href="#">Latest</a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo e(url('/shop')); ?>"> Product list</a></li>
                                            <li><a href="<?php echo e(url('/product_details')); ?>"> Product Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo e(url('/blog')); ?>">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo e(url('/blog')); ?>">Blog</a></li>
                                            <li><a href="<?php echo e(url('/blog-details')); ?>">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                                            <li><a href="<?php echo e(url('/cart')); ?>">Cart</a></li>
                                            <li><a href="<?php echo e(url('/elements')); ?>">Element</a></li>
                                            <li><a href="<?php echo e(url('/confirmation')); ?>">Confirmation</a></li>
                                            <li><a href="<?php echo e(url('/checkout')); ?>">Product Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>
                                <li> <a href="<?php echo e(url('/login')); ?>"><span class="flaticon-user"></span></a></li>
                                <li><a href="<?php echo e(url('/cart')); ?>"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

<main>
        <?php echo $__env->yieldContent('main'); ?>
    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="<?php echo e(url('/index')); ?>"><img src="<?php echo e(asset('img/logo/logo2_footer.png')); ?>" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Asorem ipsum adipolor sdit amet, consectetur adipisicing elitcf sed do eiusmod tem.</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#"> Offers & Discounts</a></li>
                                    <li><a href="#"> Get Coupon</a></li>
                                    <li><a href="#">  Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>New Products</h4>
                                <ul>
                                    <li><a href="#">Woman Cloth</a></li>
                                    <li><a href="#">Fashion Accessories</a></li>
                                    <li><a href="#"> Man Accessories</a></li>
                                    <li><a href="#"> Rubber made Toys</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href="#">Frequently Asked Questions</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Report a Payment Issue</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-7">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 col-md-5">
                        <div class="footer-copy-right f-right">
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- JS here -->

    <script src=" <?php echo e(asset('js/vendor/modernizr-3.5.0.min.js ')); ?>"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src=" <?php echo e(asset('js/vendor/jquery-1.12.4.min.js ')); ?>"></script>
    <script src=" <?php echo e(asset('js/popper.min.js ')); ?>"></script>
    <script src=" <?php echo e(asset('js/bootstrap.min.js ')); ?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src=" <?php echo e(asset('js/jquery.slicknav.min.js ')); ?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src=" <?php echo e(asset('js/owl.carousel.min.js ')); ?>"></script>
    <script src=" <?php echo e(asset('js/slick.min.js ')); ?>"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src=" <?php echo e(asset('js/wow.min.js ')); ?>"></script>
    <script src=" <?php echo e(asset('js/animated.headline.js ')); ?>"></script>
    <script src=" <?php echo e(asset('js/jquery.magnific-popup.js ')); ?>"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src=" <?php echo e(asset('js/jquery.scrollUp.min.js ')); ?>"></script>
    <script src=" <?php echo e(asset('js/jquery.nice-select.min.js ')); ?>"></script>
    <script src=" <?php echo e(asset('js/jquery.sticky.js ')); ?>"></script>

    <!-- contact js -->
    <script src=" <?php echo e(asset('js/contact.js ')); ?>"></script>
    <script src=" <?php echo e(asset('js/jquery.form.js ')); ?>"></script>
    <script src=" <?php echo e(asset('js/jquery.validate.min.js ')); ?>"></script>
    <script src=" <?php echo e(asset('js/mail-script.js ')); ?>"></script>
    <script src=" <?php echo e(asset('js/jquery.ajaxchimp.min.js ')); ?>"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src=" <?php echo e(asset('js/plugins.js ')); ?>"></script>
    <script src=" <?php echo e(asset('js/main.js ')); ?>"></script>

    <?php echo $__env->yieldContent('js'); ?>

</body>
</html>
<?php /**PATH D:\xampp8\htdocs\web111b\Laravel_Shop\resources\views/Layouts/master.blade.php ENDPATH**/ ?>