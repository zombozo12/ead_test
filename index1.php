<!doctype html>
<html class="no-js" lang="">
<?php
    require('koneksi.php');
    use koneksi\koneksi;

    $initDb = koneksi::initDatabase();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Koperasi Simpan Pinjam EAD</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpg">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- swiper.min.css -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- font-awesome v4.6.3 css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- flaticon.css -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- metisMenu.min.css -->
    <link rel="stylesheet" href="assets/css/metisMenu.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    <!-- header-area start -->
    <header class="header-area header-area2">
       
        <div class="header-bottom bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-7">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo3.jpg" width="150" height="85" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-9 d-none d-lg-block">
                        <ul class="mainmenu d-flex justify-content-end">
                            <li class="active"><a href="./">Home</i></a>
                                <!--<ul>
                                    <li><a href="index.html">Home Main</a></li>
                                    <li><a href="index2.html">Home Two</a></li>
                                    <li><a href="index3.html">Home Three</a></li>
                                </ul>-->
                            </li>
                            <li><a href="about.html">about us</a></li>
                            <li><a href="javascript:void(0);">pages</a>
                                <ul>
                                    <li><a href="service.html">Service Page</a></li>
                                    <li><a href="service-details.html">Service Details</a></li>
                                    <li><a href="shop.html">Shop page</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog page</a></li>
                                    <li><a href="blog-left.html">Blog Left</a></li>
                                    <li><a href="blog-right.html">Blog right</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-3 col-8">
                        <div class="geta_quote">
                            <a href="#">GET A QUOTE?</a>
                        </div>
                    </div>
                    <div class="d-block d-lg-none col-4 pull-right col-sm-2">
                        <ul class="menu">
                            <li class="first"></li>
                            <li class="second"></li>
                            <li class="third"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- responsive-menu area start -->
            <div class="responsive-menu-area d-block d-sm-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="metismenu">
                                <li class="sidemenu-items"><a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Home</a>
                                    <ul aria-expanded="false">
                                        <li><a href="index.html">Home Main</a></li>
                                        <li><a href="index2.html">Home Two</a></li>
                                        <li><a href="index3.html">Home Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">about us</a></li>
                                <li class="sidemenu-items"><a class="has-arrow" aria-expanded="false" href="javascript:void(0);">pages</a>
                                    <ul aria-expanded="false">
                                        <li><a href="service.html">Service Page</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                        <li><a href="shop.html">Shop page</a></li>
                                    </ul>
                                </li>
                                <li class="sidemenu-items"><a class="has-arrow" aria-expanded="false" href="javascript:void(0);">blog</a>
                                    <ul aria-expanded="false">
                                        <li><a href="blog.html">Blog page</a></li>
                                        <li><a href="blog-left.html">Blog Left</a></li>
                                        <li><a href="blog-right.html">Blog right</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- responsive-menu area start -->
        </div>
        
    </header>
    <!-- header-area end -->

    <!-- slider-area start -->
    <div class="slider-area slider-area2">
        <div class="slider-active owl-carousel">
            <div class="slider-items">
                <img src="assets/images/slider/1.jpg" alt="" class="slider">
                <div class="slider-content flex-style text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2><span>Koperasi Simpan Pinjam EAD</h2>
                                <p>Jadilah anggota koperasi simpan pinjam EAD dan raih banyak manfaatnya</p>
                                <ul class="cd-main-nav__list js-signin-modal-trigger">
                                    <li><a href="login.php" >Login</a></li>
                                    <li><a href="regist.php">Registrasi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area end -->
    <!-- about-area start -->
    <div class="about-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>About Us</h2>
                        <img src="assets/images/line.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="about-img">
                        <img src="assets/images/about/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-content">
                        <p>Visi : Menjadi mitra kerja yang handal dalam permodalan usaha anggota<p>
                        <p>Misi : Menjalankan kegiatan usaha simpan pinjam dengan efektif, efisien dan transparan.</p>
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-6">
                            <div class="about-items">
                                <img src="assets/images/about/icon/1.png" alt="">
                                <span class="counter"><?php echo $initDb->count_simpanan()[0]['jumlah_simpanan']; ?></span>
                                <p>Jumlah Simpanan</p>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="about-items">
                                <img src="assets/images/about/icon/2.png" alt="">
                                <span class="counter"><?php echo $initDb->count_pinjaman()[0]['jumlah_pinjaman']; ?></span>
                                <p>Jumlah Pinjaman</p>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="about-items mb-0">
                                <img src="assets/images/about/icon/3.png" alt="">
                                <span class="counter"><?php echo $initDb->count_user()[0]['jumlah_user']; ?></span>
                                <p>Jumlah Member</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-area end -->
    <!-- service-area start -->
    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Why Choose Bitcoin</h2>
                        <img src="assets/images/line.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-wrap">
                        <h3>What We Offer</h3>
                        <p>There are many variations of passages of an Lorem Ipsum available but the about majority have suffered alteration in man some form a by injected humour or that randomised the a words which</p>
                        <p>There are many variations of passages of an Lorem Ipsum available but the about majority have suffered.</p>
                        <a href="#">Free Consultation</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-items">
                        <span class="flaticon-bitcoin-9"></span>
                        <h3>Safe And Secure</h3>
                        <p>There are many variations of Lorem Ipsum available but the about  some majority have form randomised words which believable.</p>
                    </div>
                    <div class="service-items">
                        <span class="flaticon-profits"></span>
                        <h3>Instant Exchange</h3>
                        <p>There are many variations of Lorem Ipsum available but the about  some majority have form randomised words which believable.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="service-items">
                                <span class="flaticon-exchange-1"></span>
                                <h3>Secure Wallet</h3>
                                <p>There are many variations of Lorem Ipsum available but the about  some majority have form randomised words which believable.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="service-items">
                                <span class="flaticon-bitcoin-7"></span>
                                <h3>Experts Support</h3>
                                <p>There are many variations of Lorem Ipsum available but the about  some majority have form randomised words which believable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-area end -->

    
    



   
    <!-- footer-area start -->
    <footer class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-sm-6 col-12">
                        <div class="footer-widget footer-logo">
                            <img src="assets/images/logo2.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available, but the dum majority have suffered alteration in the some form by injected.</p>
                            <form action="#">
                                <input type="text" placeholder="Enter your email">
                                <button>subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-menu">
                            <h3>Our Services</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Crypto Investments</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Customer Insights</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bitcoin Analytics</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bitcoin Exchange</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bitcoin Exchange</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Business Consulting</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-twitter">
                            <h3>Twitter Feeds</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i> https://twitter.com /envatO/ status/944202192013144064 https://twitter.com/envato/status/ 944202192013144064</a> </li>
                                <li class="mb-0"><a href="#"><i class="fa fa-twitter"></i> https://twitter.com /envatO/ status/944202192013144064 https://twitter.com/envato/status/ 944202192013144064</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-contact">
                            <h3>Contact Information</h3>
                            <ul class="footer-contact-info">
                                <li><span>Location: </span> W Jackson Blvd, Chicago United States</li>
                                <li><span>Email: </span> exampleemail.com</li>
                                <li><span>Phone: </span> (123) 45678910</li>
                            </ul>
                            <h5>We are Social</h5>
                            <ul class="social-icon d-flex">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 copyright">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js "></script>
    <!-- popper.min.js -->
    <script src="assets/js/vendor/popper.min.js "></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js "></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="assets/js/owl.carousel.min.js "></script>
    <!-- swiper.min.js -->
    <script src="assets/js/swiper.min.js "></script>
    <!-- mailchimp.js -->
    <script src="assets/js/mailchimp.js"></script>
    <!-- plugins js -->
    <script src="assets/js/jquery.canvasjs.min.js"></script>
    <!-- metisMenu.min.js -->
    <script src="assets/js/metisMenu.min.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js "></script>
    <!-- polyfill for the HTML5 placeholder attribute -->
    <script src="assets/js/placeholders.min.js"></script>
    <!-- Resource JavaScript -->
    <script src="assets/js/main.js"></script>
        <script>
            // chart
    window.onload = function () {
    var limit = 10000;    //increase number of dataPoints by increasing the limit
    var y = 100;    
    var data = [];
    var dataSeries = { type: "line" };
    var dataPoints = [];
    for (var i = 0; i < limit; i += 1) {
        y += Math.round(Math.random() * 10 - 5);
        dataPoints.push({
            x: i,
            y: y
        });
    }
    dataSeries.dataPoints = dataPoints;
    data.push(dataSeries);

    //Better to construct options first and then pass it as a parameter
    var options = {
        zoomEnabled: true,
        animationEnabled: true,
        axisY: {
            includeZero: false
        },
        data: data  // random data
    };

        $("#chartContainer").CanvasJSChart(options);
    }
    </script>
    <!-- main js -->
    <script src="assets/js/scripts.js "></script>
</body>

</html>