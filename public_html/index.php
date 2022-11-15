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
    <style>
        html{
            scroll-behavior: smooth;
        }

</style>
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
                                <a href="index.php"><img src="img/logo/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">

                            <div class="main-menu text-right text-xl-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-sub">
                                            <a href="#">Home</a>
                                        </li>
                                        <li><a href="#about">About Us</a></li>
                                        <li class="has-sub"><a href="#team">Team</a>
                                        </li>
                                        <li class="has-sub">
                                            <a href="#faq">Frequently Asked Questions</a>

                                        </li>



                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 text-right d-none d-lg-block mt-15 mb-15">
                            <a href="#contact" class="btn ss-btn">Contact us</a>
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

    <!-- offcanvas-area 
                <div class="offcanvas-menu">
                <span class="menu-close"><i class="fas fa-times"></i></span>
              <form role="search" method="get" id="searchform"   class="searchform" action="http://wordpress.zcube.in/xconsulta/">
                                <input type="text" name="s" id="search" value="" placeholder="Search"  />
                                <button><i class="fa fa-search"></i></button>
                            </form>

                    
                    <div id="cssmenu3" class="menu-one-page-menu-container">
                        <ul id="menu-one-page-menu-2" class="menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.html">Home</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.html">About Us</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="services.html">Services</a></li>
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.html">Pricing </a></li>
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Team </a></li>
                             
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.html">Gallery Study</a></li>
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>  
                    
                    <div id="cssmenu2" class="menu-one-page-menu-container">
                        <ul id="menu-one-page-menu-1" class="menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+1 (385) 287-9216</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>Wilson@SolarAdvisor.us</span></a></li>
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
                        <a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
                    </div>
                    <div class="row search-outer">
                        <div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
                        <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /search-popup -->
        <!-- slider-area -->
        <section id="home" class="slider-area slider-four fix p-relative">

            <div class="slider-active">
                <div class="single-slider slider-bg d-flex align-items-center" style="background: url(img/slider/slider_img_bg.png) no-repeat; background-position: right top;">
                    <div class="container">
                        <div class="row justify-content-center pt-50">
                            <div class="col-lg-7 col-md-7">
                                <div class="slider-content s-slider-content mt-150">
                                    <h5 data-animation="fadeInDown" data-delay=".4s">WELCOME </h5>
                                    <h2 data-animation="fadeInUp" data-delay=".4s">Go Solar Today</h2>
                                    <h5 data-animation="fadeInUp" data-delay=".6s">We work with only the best installers in your area
                                        to save you thousands annually.</h5>

                                    <div class="slider-btn mt-30">
                                        <a href="#contact" class="btn ss-btn mr-15">Ask us how</a>

                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <div class="slider-img" data-animation="fadeInUp" data-delay=".4s">
                                    <img src="img/test.png" alt="slider_img05">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </section>
        <!-- slider-area-end -->
        <!-- contact-area -->
        <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix">

            <div class="container" id="form">
                <div class="row">
                    <!-- explicar a wilson diferencia con, o sin, o centrado, o reemplazando, el texto principal.-->

                    <div class="col-lg-5">
                        <div class="contact-info" style="background: url(img/bg/footer-bg.png) no-repeat;background-size: cover;">
                            <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="f-cta-icon">
                                    <i class="far fa-map"></i>
                                </div>
                                <h5>Us</h5>
                                <p>We are a family of <br>
                                    dedicated professionals</p>
                            </div>
                            <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="f-cta-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <h5>Working Hours</h5>
                                <p>Monday to Saturday 09:00 to 8:30pm <br>

                            </div>
                            <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
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
                        <div class="contact-bg02 wow fadeInLeft   animated" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="section-title center-align">
                                <h5>CONTACT US</h5>
                                <h2>
                                    Pre-Qualify today!
                                </h2>
                            </div>



                            <form action="" method="post" class="contact-form mt-30" >
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
                            <iframe style="display:none" name="hidden-form"></iframe>

                        </div>
                    </div>
                </div>


            </div>

        </section>
        <!-- contact-area-end -->

        <!-- about-area -->
        <section id="about" class="about-area about-p pt-120 pb-130 p-relative" style="background: url(img/bg/aliment-right.png) no-repeat; background-position: right center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="s-about-img p-relative">
                            <img src="img/sol.jpg" alt="img">
                        </div>
                        <div class="about-text second-about">
                            <span>15 </span>
                            Years of Experience
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about-content s-about-content pl-30">
                            <div class="about-title second-title pb-25">
                                <h5>ABOUT US</h5>
                                <h2>Helping homeowners get the best deal on solar.</h2>
                            </div>

                            <h3>We know that deciding to go solar can be complicated. That is why our team is customer-driven to help you through the process. We want you to receive the best deal on solar, period.</h3>
                            <p></p>
                            <ul class="progress-outer  mt-30">
                                <li>
                                    <div class="progress-box">
                                        <div class="progress blue">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">20MI</div>
                                        </div>
                                        <h4>Project Done</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-box">
                                        <div class="progress blue">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">30MI</div>
                                        </div>
                                        <h4>Wrokers work</h4>
                                    </div>
                                </li>
                            </ul>



                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- about-area-end -->
        <!-- services-three-area -->
        <section id="services-08" class="services-08 pb-120 p-relative" style="background: url(img/bg/aliment-left.png) no-repeat; background-position: left center;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-align mb-50 text-center">
                            <h5>OUR SERVICES</h5>
                            <h2>
                                What We Offer
                            </h2>

                        </div>

                    </div>

                </div>
                <div class="row services-08-item--wrapper mt-0">
                    <div class="col-lg-4 col-md-4">
                        <div class="services-08-item">
                            <div class="services-08-thumb">
                                <i class="flaticon flaticon-customer-support"></i>
                            </div>
                            <div class="services-08-content">
                                <h3><a href="services-detail.html"> Technical Services</a> </h3>
                                <p>We work with the best professionals in the business to deliver a great product with the best technical assistance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="services-08-item">
                            <div class="services-08-thumb">
                                <i class="flaticon flaticon-solar-panel"></i>
                            </div>
                            <div class="services-08-content">
                                <h3><a href="services-detail.html"> Energy Panels</a></h3>
                                <p>Solar Panels help you save money and in the long run help the climate change.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="services-08-item">
                            <div class="services-08-thumb">
                                <i class="flaticon flaticon-wind-energy"></i>
                            </div>
                            <div class="services-08-content">
                                <h3><a href="services-detail.html">Tax benefits</a></h3>
                                <p>Purchasing a solar system could qualify for a 26% tax credit, based on the total equipment and installation cost.</p>
                            </div>
                        </div>
                    </div>


                </div>



            </div>
        </section>
        <!-- services-three-area -->


        <!-- counter-area 
            <div class="counter-area p-relative pt-80 pb-80" style="background: url(img/bg/counter-bg.png) repeat-x;">
                <div class="container">
               
                     <div class="row">
                          <div class="col-lg-4 col-md-12 col-sm-12">
                              <div class="section-title">                                 
                                  <h5>COUNTER</h5>
                                <h2>
                                  The numbers don´t lie
                                </h2>
                               
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-12 col-sm-12">
                              <div class="row text-center">
                                  <div class="col-lg-3 col-md-6 col-sm-12">
                                     <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                         <div class="icon">
                                             <img src="img/icon/cn-iocn01.png" alt="img">
                                         </div>

                                        <div class="counter p-relative">
                                            <span class="count">484</span>                             
                                            <p>Solar Providers</p>
                                        </div>

                                    </div>
                                </div>
                              <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                         <div class="icon">
                                             <img src="img/icon/cn-iocn02.png" alt="img">
                                         </div>
                                        <div class="counter p-relative">
                                            <span class="count">4,150</span>     
                                            <p>Avg. Upfront Savings</p>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="icon">
                                            <img src="img/icon/cn-iocn03.png" alt="img">
                                         </div>

                                        <div class="counter p-relative">
                                           <span class="count">51,500</span>
                                              <p>Avg. Lifetime Savings</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                         <div class="icon">
                                           <img src="img/icon/cn-iocn04.png" alt="img">
                                         </div>

                                        <div class="counter p-relative">
                                            <span class="count">1M</span> 
                                        <p>Home owners</p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                                
                          </div>
                       
                         
                    </div>
                </div>
            </div>
             counter-area-end -->




        <!-- gallery-area 
            <section id="work" class="pt-40 pb-70" style="background: url(img/bg/aliment-right2.png) no-repeat; background-position: right center;">
                <div class="container">   
                    <div class="row">   
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center">
                                 <h5>PROJECTS DONE</h5>  
                                <h2>
                                   Our Portfolio
                                </h2>
                             
                            </div>
                           
                        </div>
                         
                    </div>
					<div class="portfolio ">
               
                       <div class="row align-items-center mb-50 text-center">                          
                            <div class="col-lg-12">
                                 <div class="my-masonry">
                            <div class="button-group filter-button-group ">
                                <button class="active" data-filter="*">All Projects</button>
								 <button data-filter=".seo">Solar Energy</button>
								<button data-filter=".marketing">Wind Energy</button>	
								<button data-filter=".website">Hydropower Plants</button>
								
							</div>
                        </div>
                            </div>
                        </div>

                <div class="grid col3">
                    
				   	<div class="grid-item website">     
                   
                        <a href="projects-detail.html">
                            <figure class="gallery-image">
                              <img src="img/gallery/protfolio-img01.png" alt="img" class="img">      
                                <figcaption>
                                    <h4>Hydropower 01</h4>
                                </figcaption>
                            </figure>
                          </a>
                           
                    </div>
					<div class="grid-item seo">
                          <a href="projects-detail.html">
                            <figure class="gallery-image">
                              <img src="img/gallery/protfolio-img02.png" alt="img" class="img">      
                                <figcaption>
                                    <h4>Solar Energy 01</h4>
                                </figcaption>
                            </figure>
                          </a>
                         
                           
                    </div>
                     <div class="grid-item marketing smm">
                       <a href="projects-detail.html">
                            <figure class="gallery-image">
                              <img src="img/gallery/protfolio-img03.png" alt="img" class="img">      
                                <figcaption>
                                    <h4>Wind Energy01</h4>
                                </figcaption>
                            </figure>
                          </a>
                   
                    </div>
                     	<div class="grid-item website">    
                             <a href="projects-detail.html">
                            <figure class="gallery-image">
                              <img src="img/gallery/protfolio-img04.png" alt="img" class="img">      
                                <figcaption>
                                    <h4>Hydropower 02</h4>
                                </figcaption>
                            </figure>
                          </a>
                     
                           
                    </div>
					<div class="grid-item seo smm">
                          <a href="projects-detail.html">
                            <figure class="gallery-image">
                              <img src="img/gallery/protfolio-img05.png" alt="img" class="img">      
                                <figcaption>
                                    <h4>Solar Energy 02</h4>
                                </figcaption>
                            </figure>
                          </a>
                         
                           
                    </div>
                     <div class="grid-item marketing">
                            <a href="projects-detail.html">
                            <figure class="gallery-image">
                              <img src="img/gallery/protfolio-img06.png" alt="img" class="img">      
                                <figcaption>
                                    <h4>Wind Energy02</h4>
                                </figcaption>
                            </figure>
                          </a>
                    </div>
                  
                                     
                    </div>

        </div>
                </div>
            </section>
             gallery-area-end -->
        <!-- pricing-area 
            <section id="pricing" class="pricing-area pb-60" style="background: url(img/bg/aliment-left.png) no-repeat; background-position: left center;">
                <div class="container"> 
                    <div class="row">
                         <div class="col-lg-12 p-relative">
                            <div class="section-title center-align mb-30 text-center">
                                 <h5>PRICING PLAN</h5>
                                <h2>
                                   Choose Your Plan
                                </h2>
                               
                            </div>
                             <nav class="pricing-tab mb-30">
                                    <span class="monthly_tab_title">Monthly</span>
                                    <span class="pricing-tab-switcher"></span>
                                    <span class="annual_tab_title">Annual</span>
                                 </nav>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                          <div class="pricing-box pricing-box2 mb-60">
                                <div class="pricing-head text-center">   
                                    <h3>Starter</h3>  
                                      <div class="price-count pricing-amount">
                                           <div class="monthly_price">
                                              <h2>$9</h2>
                                              <span class="subscription"> Per Month </span>
                                           </div>
                                            <div class="annual_price">
                                              <h2>$99</h2>
                                              <span class="subscription"> Per Annual </span>
                                           </div>
                                     </div>
                                     <p>Nulla scelerisque elit aliquet, <br>volutpat lorem ac.</p>
                                    <hr>
                                </div>

                                <div class="pricing-body mt-20 mb-30">
                                   <ul>
                                      <li>Pack Of 5 Bottles</li>
                                       <li>Free Delivery Service</li>
                                        <li>Free Water Fillter Cleaning</li>
                                         <li>Re-Water Filling Service</li>
                                         <li>24X7 Support</li>
                                    </ul>
                                </div>             

                                <div class="pricing-btn text-center">
                                   <a href="shop-details.html" class="btn ss-btn">Gets Started</a>
                                     <p>*Free Trial 14 Days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                             <div class="pricing-box pricing-box2 active mb-60">
                                    <div class="pricing-head text-center">   
                                        <h3>Professional</h3>  
                                        <div class="price-count pricing-amount">
                                       
                                           <div class="monthly_price">
                                              <h2>$18</h2>
                                              <span class="subscription"> Per Month </span>
                                           </div>
                                            <div class="annual_price">
                                              <h2>$120</h2>
                                              <span class="subscription"> Per Annual </span>
                                           </div>
                                        </div>
                                         <p>Nulla scelerisque elit aliquet, <br>volutpat lorem ac.</p>
                                        <hr>
                                    </div>

                                    <div class="pricing-body mt-20 mb-30">
                                       <ul>
                                          <li>Pack Of 5 Bottles</li>
                                            <li>Free Delivery Service</li>
                                            <li>Free Water Fillter Cleaning</li>
                                             <li>Re-Water Filling Service</li>
                                             <li>24X7 Support</li>
                                        </ul>
                                    </div>             

                                    <div class="pricing-btn text-center">
                                       <a href="shop-details.html" class="btn ss-btn">Gets Started</a>
                                        <p>*Free Trial 14 Days</p>
                                    </div>
                                </div>
                      
                        </div>
                         <div class="col-lg-4 col-md-4">
                             <div class="pricing-box pricing-box2 mb-60">
                                    <div class="pricing-head text-center">   
                                        <h3>Enterprise</h3>  
                                          <div class="price-count pricing-amount">
                                           <div class="monthly_price">
                                              <h2>$49</h2>
                                              <span class="subscription"> Per Month </span>
                                           </div>
                                            <div class="annual_price">
                                              <h2>$399</h2>
                                              <span class="subscription"> Per Annual </span>
                                           </div>
                                     </div> 
                                        <p>Nulla scelerisque elit aliquet, <br>volutpat lorem ac.</p>
                                        <hr>
                                    </div>

                                    <div class="pricing-body mt-20 mb-30 ">
                                       <ul>
                                             <li>Pack Of 5 Bottles</li>
                                            <li>Free Delivery Service</li>
                                            <li>Free Water Fillter Cleaning</li>
                                             <li>Re-Water Filling Service</li>
                                             <li>24X7 Support</li>
                                        </ul>
                                    </div>             

                                    <div class="pricing-btn text-center">
                                       <a href="shop-details.html" class="btn ss-btn">Gets Started</a>
                                        <p>*Free Trial 14 Days</p>
                                    </div>
                                </div>
                             
                           
                        </div>
                    </div>
                </div>
            </section>
             pricing-area-end -->
        <!-- video-area -->
        <section id="video" class="video-area about-p p-relative" style="background-color: #010f2e;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="s-video-wrap" style="background-image:url(img/bg/video-img.png)">
                            <div class="s-video-content">
                                <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="popup-video mb-50"><img src="img/bg/play-button.png" alt="circle_right"></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-relative pl-70">
                        <div class="section-title">
                            <H5>WHEN WE MEET WITH YOU</H5>
                            <h2>
                                How we work
                            </h2>
                        </div>

                        <div class="row how-box-contaniner">
                            <div class="col-lg-6 mt-30">
                                <div class="how-box">
                                    <h5>01</h5>
                                    <h3>Inspection</h3>
                                    <p>We first analyze your property to make sure it meets the requirements.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-30">
                                <div class="how-box">
                                    <h5>02</h5>
                                    <h3>Qualification</h3>
                                    <p>Moreover, our team will run a credit check to see if you qualify.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-30">
                                <div class="how-box">
                                    <h5>03</h5>
                                    <h3>Service & Products</h3>
                                    <p>Our team will advice you to get the best and most adecuate pannels for your property.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-30">
                                <div class="how-box">
                                    <h5>04</h5>
                                    <h3>Installation</h3>
                                    <p>Two weeks after signing the contract the pannels will be installed. We only work with the best professionals in your area.</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- video-area-end -->
        <!-- team-area -->
        <section id="team" class="team-area2 pt-120 pb-100" style="background: url(img/bg/aliment-right3.png) no-repeat; background-position: right center;">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title mb-50 text-center">
                            <h5>OUR TEAM</h5>
                            <h2>Our Working Expertise</h2>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="single-team mb-30 ">
                                    <div class="team-thumb">
                                        <div class="brd">
                                            <img src="img/team/wilson.jpg" alt="img">
                                        </div>
                                        <div class="social align-items-center">
                                            <a href="https://www.linkedin.com/in/wilson-pulido2020/"><i class="fab fa-linkedin"></i></a>

                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="team-details.html">Wilson Pulido</a></h4>
                                        <span>Founder</span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-team mb-30 ">
                                    <div class="team-thumb">
                                        <div class="brd">
                                            <img src="img/team/facu.jpg" alt="img">
                                        </div>
                                        <div class="social align-items-center">
                                            <a href="https://www.linkedin.com/in/facufernandez/"><i class="fab fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="team-details.html">Facundo Fernandez</a></h4>
                                        <span>Web Developer</span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-team mb-30 ">
                                    <div class="team-thumb">
                                        <div class="brd">
                                            <img src="img/team/gio.jpg" alt="img">
                                        </div>
                                        <div class="social align-items-center">
                                            <a href="https://www.linkedin.com/in/giovanni-borgogno-a7baab230/"><i class="fab fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="team-details.html">Giovanni Borgogno</a></h4>
                                        <span>Sales Manager</span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-team mb-30 ">
                                    <div class="team-thumb">
                                        <div class="brd">
                                            <img src="img/team/em.jpg" alt="img">
                                        </div>
                                        <div class="social align-items-center">
                                            <a href="https://www.linkedin.com/in/emily-conroyd-54a1721a2/"><i class="fab fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="team-details.html">Emily Conroyd</a></h4>
                                        <span>Solar Advisor Expert</span>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- team-area-end -->

        <!-- team-area -->
        <section id="faq" class="faq-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                What do I get to look forward to after I get solar?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            Not having high Edison bills during the summer.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="faq-btn" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                How long does it take to get my solar panels installed?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            2 weeks after signing the contract.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What happens after getting Solar panels for your home?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            -A fixed rate.
                                            -Enjoying a cool home during the summer.

                                            " a fixed rate and getting to enjoy our nice cool home"
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                What are reasons to get solar for your home now?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            This summer will be hot.
                                            Have a cool home without the high bill in as little as 2 weeks.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-wrap">
                            <div class="accordion" id="accordionExample1">
                                <div class="card">
                                    <div class="card-header" id="headingfive">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                What are some of the benefits of having Solar Panels?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample1" style="">
                                        <div class="card-body">
                                            <li>
                                                <ul>- $0 down to get started</ul>
                                                <ul>- Avoid increasing utility rates</ul>
                                                <ul>- Decrease your monthly bill</ul>
                                                <ul>- Help climate change. Change the world</ul>
                                                <ul>- Clean energy helps the environment</ul>
                                                <ul>- Solar panels have a long lifespan</ul>
                                                <ul>- Solar panels increase home value </ul>

                                            </li>



                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h2 class="mb-0">
                                            <button class="faq-btn" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                What states do you operate in?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            Utah & California
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSeveen">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseSeveen" aria-expanded="false" aria-controls="collapseSeveen">
                                                What tax incentives are currently active?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseSeveen" class="collapse" aria-labelledby="headingSeveen" data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            Currently the federal tax incentive is 26% of the total cost of going solar. Local incentives vary.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingEighte">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseEighte" aria-expanded="false" aria-controls="collapseEighte">
                                                Pregunta...
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseEighte" class="collapse" aria-labelledby="headingEighte" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- team-area-end -->




        <!-- testimonial-area -->
        <section class="testimonial-area pb-90" style="background: url(img/bg/aliment-left2.png) no-repeat; background-position: left center;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-align mb-35 text-center">
                            <h5> Feedback </h5>
                            <h2>
                                Our Testimonials
                            </h2>

                        </div>

                    </div>

                    <div class="col-lg-12">
                        <div class="testimonial-active">
                            <div class="single-testimonial">
                                <p>Porque gente pone panales solares en su casa?
                                    "Me ahora dinero"</p>
                                <div class="testi-author">
                                    <img src="img/testimonial/marco.jpeg" alt="img">
                                    <div class="ta-info">
                                        <h6>Marco Mendoza</h6>
                                        <span>Client</span>
                                    </div>
                                </div>
                                <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <p>Is it zero out of pocket upfront?
                                    "Yup" </p>
                                <div class="testi-author">
                                    <img src="img/testimonial/jasmine.jpeg" alt="img">
                                    <div class="ta-info">
                                        <h6>Jasmine</h6>
                                        <span>Client</span>
                                    </div>
                                </div>
                                <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                            <!-- <div class="single-testimonial">
                                   <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                  <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                   <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                   <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- features-area -->
        <section id="graph" class="features-area pt-80 pb-80" style="background:url('img/bg/cat-bg.png'); background-size: cover;">
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-12 col-md-12">
                        <div class="section-title cta-title text-center mb-30">

                            <h5>We would love to serve you!</h5>
                            <h2>
                                <br>Would you like to be benefiting from Solar energy this summer?
                            </h2>
                        </div>


                    </div>


                </div>

            </div>
        </section>
        <!-- features-area-end -->





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
                                    <li><a href="#about"> About Us</a></li>

                                    <li><a href="#contact"> Contact Us</a></li>

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
                        Copyright © 2021 Wilson Pulido All rights reserved. <br> Made By <a href="https://openm.us">Made by OpenMarketing</a>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- RECAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
</body>

</html>