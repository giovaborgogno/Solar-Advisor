

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Solar Advisor - Wilson Pulido</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="font-flaticon/flaticon.css">
    <link rel="stylesheet" href="css/dripicons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
<?php
require_once('sendForm.php');

if (isset($_POST['email'])) {
    sendEmail();
}
?>
    <!-- header -->
    <header class="header-area header-three">
        <div class="header-top second-header d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8 d-none  d-md-block">
                        <div class="header-cta">
                            <ul>
                                <li>
                                    <i class="fas fa-envelope"></i>

                                    <span>Wilson@SolarAdvisor.us</span>
                                </li>
                                <li>
                                    <i class="far fa-map-marker-alt"></i>
                                    <span>Salt Lake City</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-none d-lg-block">
                        <div class="header-social text-right">
                            <span>
                                <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
                                <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            </span>
                            <!--  /social media icon redux -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="header-sticky" class="menu-area">
            <div class="container">
                <div class="second-menu">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="img/logo/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">

                            <div class="main-menu text-right text-xl-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-sub">
                                            <a href="#">Home</a>
                                        </li>
                                        <li><a href="#">About Us</a></li>
                                        <li class="has-sub"><a href="#">Team</a>
                                        </li>
                                        <li class="has-sub">
                                            <a href="#">Frequently Asked Questions</a>

                                        </li>



                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 text-right d-none d-lg-block mt-15 mb-15">
                            <a href="contact.php" class="btn ss-btn">Contact us</a>
                        </div>


                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- offcanvas-area -->
    <div class="offcanvas-menu">
        <span class="menu-close"><i class="fas fa-times"></i></span>
        <form role="search" method="get" id="searchform" class="searchform"
            action="http://wordpress.zcube.in/xconsulta/">
            <input type="text" name="s" id="search" value="" placeholder="Search" />
            <button><i class="fa fa-search"></i></button>
        </form>


        <div id="cssmenu3" class="menu-one-page-menu-container">
            <ul id="menu-one-page-menu-2" class="menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.html">Home</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.html">About Us</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="services.html">Services</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.html">Pricing </a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Team </a></li>

                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.html">Gallery
                        Study</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>

        <div id="cssmenu2" class="menu-one-page-menu-container">
            <ul id="menu-one-page-menu-1" class="menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12
                            3456897</span></a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                        href="#howitwork"><span>info@example.com</span></a></li>
            </ul>
        </div>
    </div>
    <div class="offcanvas-overly"></div>
    <!-- offcanvas-end -->
    <!-- main-area -->
    <main>

        <!-- search-popup -->
        <div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content search-popup">
                    <div class="text-center">
                        <a href="#" class="close2" data-dismiss="modal" aria-label="Close">?? close</a>
                    </div>
                    <div class="row search-outer">
                        <div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
                        <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /search-popup -->
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(img/testimonial/test-bg.png)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>Contact Us</h2>
                                <div class="breadcrumb-wrap">

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix">

            <div class="container">
                <div class="row">
                    <!-- explicar a wilson diferencia con, o sin, o centrado, o reemplazando, el texto principal.-->

                    <div class="col-lg-5">
                        <div class="contact-info"
                            style="background: url(img/bg/footer-bg.png) no-repeat;background-size: cover;">
                            <div class="single-cta pb-30 mb-30 wow fadeInUp animated"
                                data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="f-cta-icon">
                                    <i class="far fa-map"></i>
                                </div>
                                <h5>Us</h5>
                                <p>We are a family of <br>
                                    dedicated professionals</p>
                            </div>
                            <div class="single-cta pb-30 mb-30 wow fadeInUp animated"
                                data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="f-cta-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <h5>Working Hours</h5>
                                <p>Monday to Saturday 09:00 to 8:30pm <br>

                            </div>
                            <div class="single-cta pb-30 mb-30 wow fadeInUp animated"
                                data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="f-cta-icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <h5>Message Us</h5>
                                <p>We are committed to answer your questions
                                    mail us : <a href="#">support@SolarAdvisor.us</a></p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7">
                        <div class="contact-bg02 wow fadeInLeft  animated">
                            <div class="section-title center-align">
                                <h5>CONTACT US</h5>
                                <h2>
                                    Pre-Qualify today!
                                </h2>
                            </div>



                            <form action="" method="post" class="contact-form mt-30">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-name mb-30">
                                            <input type="text" id="firstn" name="firstn" placeholder="First Name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-email mb-20">
                                            <input type="text" id="lastn" name="lastn" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-subject mb-30">
                                            <input type="text" id="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-subject mb-30">
                                            <input type="text" id="phone" name="phone" placeholder="Phone No." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-field p-relative c-subject mb-30">
                                            <input type="text" id="subject" name="subject" placeholder="Subject"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="contact-field p-relative c-message mb-30">
                                            <textarea name="message" id="message" cols="30" rows="10"
                                                placeholder="Write comments"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        
                                        <div class="g-recaptcha p-relative"
                                            data-sitekey="6LcxO3wiAAAAALwfrCogdmQRk3WVSfjpLH92V0I-"></div>
                                    </div>

                                    <div class="slider-btn col-lg-6">
                                        <button id="submit" class="btn ss-btn" data-animation="fadeInRight"
                                            data-delay=".8s">Book your savings report</button>
                                    </div>
                                </div>


                            </form>

                        </div>

                    </div>
                </div>


            </div>

        </section>
        <!-- contact-area-end -->
        <!-- map-area-end
            <div class="map fix">
                <div class="container-flud">
                    <div class="row">
                        <div class="col-lg-12">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212867.83634504632!2d-112.24455686962897!3d33.52582710700138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b743829374b03%3A0xabaac255b1e43fbe!2sPlexus%20Worldwide!5e0!3m2!1sen!2sin!4v1618567685329!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
		     map-area-end -->
    </main>
    <!-- main-area-end -->
    <!-- footer -->
    <footer class="footer-bg footer-p">
        <div class="footer-top-heiding pt-70 pb-120">
            <!--     <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">        
                        <h2> Get Update<br> From Newsletter</h2>
                       
                    </div>
                </div>
                 <div class="col-xl-6 col-lg-6">
                     <div class="newslater-area">
                        <form name="ajax-form" id="contact-form4" action="#" method="post" class="contact-form newslater">
                       <div class="form-group">
                          <input class="form-control" id="email2" name="email" type="email" placeholder="Email Address..." value="" required=""> 
                          <button type="submit" class="btn btn-custom" id="send2">Subscribe Now</button>
                       </div>
                       <!-- /Form-email -> agregar otro -
                    </form>
                     </div>
                    
                </div>
            </div>
        </div>-->

        </div>
        <div class="footer-top pb-40">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title mb-45">
                                <img src="img/logo/logo.png" alt="img">
                            </div>
                            <div class="footer-link">
                                Feel free to reach out to us at any time.
                            </div>
                            <div class="f-contact mt-30">
                                <ul>


                                </ul>

                            </div>


                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h2>Our Links</h2>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.html"> About Us</a></li>

                                    <li><a href="contact.php"> Contact Us</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">

                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h2>Get In Touch</h2>
                            </div>
                            <div class="f-contact">
                                <ul>
                                    <li>
                                        <i class="icon fal fa-phone"></i>
                                        <span>+1 (385) 287-9216</span>
                                    </li>
                                    <li><i class="icon fal fa-envelope"></i>
                                        <span>
                                            <a href="mailto:info@example.com">info@SolarAdvisor.us</a>
                                            <br>
                                            <a href="mailto:help@example.com">Wilson@SolarAdvisor.us</a>
                                        </span>
                                    </li>


                                </ul>

                            </div>
                        </div>
                    </div>
                    <!--     <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Our Gallery</h2>
                        </div>
                        <div class="f-insta">
                            <ul>
                                <li><a href="img/instagram/f-galler-01.png" class="popup-image"><img src="img/instagram/f-galler-01.png" alt="img"></a></li>
                               <li><a href="img/instagram/f-galler-02.png" class="popup-image"><img src="img/instagram/f-galler-02.png" alt="img"></a></li>
                                <li><a href="img/instagram/f-galler-03.png" class="popup-image"><img src="img/instagram/f-galler-03.png" alt="img"></a></li>
                                <li><a href="img/instagram/f-galler-04.png" class="popup-image"><img src="img/instagram/f-galler-04.png" alt="img"></a></li>
                              
                                
                            </ul>
                        </div>
                    </div>
                </div>  -->

                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        Copyright ?? 2021 Wilson Pulido All rights reserved. <br> Made By <a href="https://openm.us">Made
                            by OpenMarketing</a>
                    </div>
                    <div class="col-lg-6 text-right text-xl-right">
                        <ul>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Term &amp; Conditions</a></li>
                            <li><a href="#">Legal</a></li>
                            <li> <span class="footer-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </span></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/paroller.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/js_isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/parallax-scroll.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/element-in-view.js"></script>
    <script src="js/main.js"></script>
    <script src="js/contact.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- RECAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>

</html>