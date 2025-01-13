<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Hubfolio Multi-Purpose themeforest">
    <meta name="description" content="Hubfolio - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Hubfolio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    <!-- Plugins CSS -->

    <link href="{{ asset('assets/frontend/common/css/plugins.css') }}" rel="stylesheet">

    <!-- Core Style CSS -->
    <link href="{{ asset('assets/frontend/common/css/common_style.css') }}" rel="stylesheet">

    <!-- Custom Home Style -->
    <link href="{{ asset('assets/frontend/wk_pages/assets/css/home2-style.css') }}" rel="stylesheet">
</head>

<body>



    <!-- ==================== Start Loading ==================== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <div class="cursor"></div>


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#" style="border: none;">
                <img src="{{ asset('assets/frontend/wk_pages/assets/imgs/wk.pages-logo-white.svg') }}" alt="logo" style="width: 75px;">

            </a>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../inner_pages/contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="topnav d-flex align-items-center">
                <a href="../inner_pages/contact.html" class="butn butn-rounded">
                    <div class="d-flex align-items-center">
                        <span>Start Project</span>
                        <span class="icon ml-10">
                            <img src="../common/imgs/icons/arrow-top-right.svg" alt="">
                        </span>
                    </div>
                </a>
                <div class="menu-icon cursor-pointer">
                    <span class="icon ti-align-right"></span>
                </div>
            </div>
        </div>
    </nav>

    <div class="hamenu">
        <div class="close-menu cursor-pointer ti-close"></div>
        <div class="container-fluid rest d-flex">
            <div class="menu-links">
                <ul class="main-menu rest">
                    <li>
                        <div class="o-hidden">
                            <div class="link cursor-pointer dmenu"><span class="fill-text" data-text="Home">Home</span>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="o-hidden">
                            <a href="../inner_pages/contact.html" class="link"><span class="fill-text"
                                    data-text="Contact Us">Contact Us</span></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cont-info valign">
                <div class="text-center full-width">
                    <div class="logo">
                        <img src="assets/imgs/wk.pages-logo-white.svg" alt="" style="width: 75px;">
                    </div>
                    <div class="social-icon mt-40">
                        <a href="https://www.facebook.com/profile.php?id=61567880623368"> <i
                                class="fab fa-facebook-f"></i> </a>
                        <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                        <a href="https://www.instagram.com/wk.pages/profilecard/?igsh=a3dmZ3p4Z3J0bHU5"> <i
                                class="fab fa-instagram"></i> </a>
                    </div>
                    <div class="item mt-10">
                        <h5><a href="#0">vkachmar@outlook.com</a></h5>
                        <h5 class="underline"><a href="#0">+48 518 922 121</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== End Navbar ==================== -->

    <div id="smooth-wrapper">


        <div id="smooth-content">

            <main>



                <!-- ==================== Start Header ==================== -->

                <header class="header-ds">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="caption md-mb30">
                                    <h1>Bigger, <br> Bolder and <br> <span class="play-font">Better</span></h1>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="text md-mb50">
                                    <p>Based in Warsaw, we are a creative agency specializing in stunning websites,
                                        eCommerce platforms, portfolios, logos, banners, and complete UI/UX designs. Let
                                        us bring your vision to life with unique, high-quality solutions!</p>
                                    <a href="../inner_pages/contact.html"
                                        class="butn butn-md butn-bord butn-rounded mt-40">
                                        <div class="d-flex align-items-center">
                                            <span>Learn More</span>
                                            <span class="icon ml-10">
                                                <i class="fa-solid fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-lg-5 d-flex align-items-end">
                                <div class="social-icon md-hide">
                                    <a href="https://www.instagram.com/wk.pages/profilecard/?igsh=a3dmZ3p4Z3J0bHU5">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://www.behance.net/maria_zhyrova">
                                        <i class="fa-brands fa-dribbble"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="numb d-flex">
                                    <div>
                                        <h2>98%</h2>
                                        <span>Clients satisfied and <br> repeating</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div>
                                            <h2>125+</h2>
                                            <span>projects completed in <br> 24 countries</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- ==================== End Header ==================== -->



                <!-- ==================== Start box light ==================== -->

                <section class="box-light section-padding pt-0">

                    <!-- ==================== Start Intro ==================== -->

                    <div class="intro-ds">
                        <div class="container">
                            <div class="layers"></div>
                            <div class="box">
                                <div class="comit bord-thin-bottom pb-30 mb-80">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="item">
                                                <h6>Top-notch Experts</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="item text-center">
                                                <h6>Dedicated Support 24/7</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="item text-right">
                                                <h6>Flexible Pricing</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="founders">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-7">
                                            <div class="cont">
                                                <h4>We help businesses enhance their value through custom web design,
                                                    website development, and UI/UX design for Instagram and Facebook.
                                                </h4>
                                                <a href="../inner_pages/about.html"
                                                    class="butn butn-md butn-bg butn-rounded mt-40">
                                                    <div class="d-flex align-items-center">
                                                        <span>More About Us</span>
                                                        <span class="icon ml-10">
                                                            <i class="fa-solid fa-chevron-right"></i>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ==================== End Intro ==================== -->


                    <!-- ==================== Start Portfolio ==================== -->

                    <div class="works-ds">
                        <div class="container pt-100 bord-thin-top">
                            <div class="sec-head mb-70 d-flex align-items-center">
                                <div>
                                    <h2>Featured <span>Works</span></h2>
                                </div>
                                <div class="ml-auto">
                                    <a href="../inner_pages/portfolio-gallery.html"
                                        class="butn butn-md butn-bord butn-rounded">
                                        <div class="d-flex align-items-center">
                                            <span>See All Projects</span>
                                            <span class="icon ml-10">
                                                <i class="fa-solid fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="work-box">
                                <div class="swiper work-swiper swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <div class="img">
                                                    <img src="assets/imgs/works/1.jpg" alt="">
                                                </div>
                                                <div class="cont">
                                                    <h4><a href="#0">Our portfolio</a></h4>
                                                    <span class="sub-color">Prototype Design, Webflow</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <div class="img">
                                                    <img src="assets/imgs/works/2.jpg" alt="">
                                                </div>
                                                <div class="cont">
                                                    <h4><a href="#0">Our portfolio</a></h4>
                                                    <span class="sub-color">Web Design & Development</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <div class="img">
                                                    <img src="assets/imgs/works/3.jpg" alt="">
                                                </div>
                                                <div class="cont">
                                                    <h4><a href="#0">Our portfolio</a></h4>
                                                    <span class="sub-color">Prototype Design, Webflow</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <div class="img">
                                                    <img src="assets/imgs/works/4.jpg" alt="">
                                                </div>
                                                <div class="cont">
                                                    <h4><a href="#0">Our portfolio</a></h4>
                                                    <span class="sub-color">Prototype Design, Webflow</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ==================== End Portfolio ==================== -->

                </section>

                <!-- ==================== End box light ==================== -->



                <!-- ==================== Start Services ==================== -->

                <section class="services-ds section-padding">
                    <div class="container">
                        <div class="sec-head mb-70 d-flex align-items-center">
                            <div>
                                <h2>Our <span>Services</span></h2>
                            </div>
                            <div class="ml-auto">
                                <a href="../inner_pages/services.html" class="butn butn-md butn-bord butn-rounded">
                                    <div class="d-flex align-items-center">
                                        <span>See Our Approach</span>
                                        <span class="icon ml-10">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item d-flex align-items-center">
                            <div class="title">
                                <h2>Branding</h2>
                            </div>
                            <div class="text ml-auto">
                                <div class="d-flex align-items-center">
                                    <p>Branding
                                        We create memorable brand identities that inspire trust</p>
                                    <div>
                                        <div class="icon invert">
                                            <img src="../common/imgs/icons/crown-solid.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item d-flex align-items-center">
                            <div class="title">
                                <h2>Design</h2>
                            </div>
                            <div class="text ml-auto">
                                <div class="d-flex align-items-center">
                                    <p>Crafting stunning UI/UX, logos, and social media visuals</p>
                                    <div>
                                        <div class="icon invert">
                                            <img src="../common/imgs/icons/bezier-curve-solid.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item d-flex align-items-center">
                            <div class="title">
                                <h2>Code</h2>
                            </div>
                            <div class="text ml-auto">
                                <div class="d-flex align-items-center">
                                    <p>We specialize in developing websites and e-commerce platforms</p>
                                    <div>
                                        <div class="icon invert">
                                            <img src="../common/imgs/icons/code-solid.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item d-flex align-items-center">
                            <div class="title">
                                <h2>Growth</h2>
                            </div>
                            <div class="text ml-auto">
                                <div class="d-flex align-items-center">
                                    <p>We help your business thrive by driving engagement and increasing visibility</p>
                                    <div>
                                        <div class="icon invert">
                                            <img src="../common/imgs/icons/chart-line-solid.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Services ==================== -->



                <!-- ==================== Start dark box ==================== -->

                <section class="box-dark">
                    <div class="container box">
                        <div class="layers"></div>

                        <!-- ==================== Start Testimonials ==================== -->
                        <div class="testimonials-ds">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="qoute-icon md-mb50">
                                        <div class="text">
                                            <img src="assets/imgs/testim/Vector_Cricle_Text.svg" alt="">
                                        </div>
                                        <div class="icon">
                                            <img src="assets/imgs/testim/vector_quote.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="swiper testim-swiper swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <div class="text">
                                                        <h4>“wk.pages has an exceptional ability to bring creative UI/UX
                                                            designs to life. Their attention to detail and innovative
                                                            approach helped elevate our online presence. A passionate,
                                                            professional, and highly creative team. Highly recommended!”
                                                        </h4>
                                                    </div>
                                                    <div
                                                        class="info d-flex align-items-center mt-40 pt-30 bord-thin-top-light">
                                                        <div>
                                                            <div class="img-author">
                                                                <img src="assets/imgs/testim/avatar1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="info-text">
                                                            <span>Bohdan Martinez</span>
                                                            <p>CEO & Founder, Merchero</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <div class="text">
                                                        <h4>“Working with wk.pages has been a game changer for our
                                                            brand. Their team took our ideas and turned them into a
                                                            sleek, user-friendly website that perfectly aligns with our
                                                            business goals.”</h4>
                                                    </div>
                                                    <div
                                                        class="info d-flex align-items-center mt-40 pt-30 bord-thin-top-light">
                                                        <div>
                                                            <div class="img-author">
                                                                <img src="assets/imgs/testim/avatar2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="info-text">
                                                            <span>Oliver Thompson</span>
                                                            <p>Social media manager</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <div class="text">
                                                        <h4>“The team at wk.pages took our online presence to the next
                                                            level with their exceptional design and development skills.
                                                            Their expertise in UI/UX is unmatched, and we couldn’t be
                                                            happier with the results.”</h4>
                                                    </div>
                                                    <div
                                                        class="info d-flex align-items-center mt-40 pt-30 bord-thin-top-light">
                                                        <div>
                                                            <div class="img-author">
                                                                <img src="assets/imgs/testim/avatar3.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="info-text">
                                                            <span>Szymon Nowak</span>
                                                            <p>Marketing Manager</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ==================== End Testimonials ==================== -->
                    </div>
                </section>

                <!-- ==================== End dark box ==================== -->



                <!-- ==================== Start Pricing ==================== -->

                <section class="pricing-ds section-padding">
                    <div class="container">
                        <div class="sec-head mb-10">
                            <h2>Our <span> Prices</span></h2>
                            <div class="d-flex align-items-center mt-50">
                                <div class="text">
                                    <p>Clear, straightforward plans tailored to your needs. <br> Choose a plan and
                                        kick-start now.</p>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <div class="content">
                                <div class="price-head">
                                    <div class="price-headTitle"></div>

                                    <!-- Package 1 -->
                                    <div class="price-headItem">
                                        <h6>Web Starter</h6>
                                        <h2 class="yearly_price"><span>from </span> 4,999 zł</h2>
                                        <p>Ideal blogs or e-commerce websites</p>
                                    </div>

                                    <!-- Package 2 -->
                                    <div class="price-headItem">
                                        <h6>Creative Boost</h6>
                                        <h2 class="yearly_price color-blue5"><span>from </span> 1,999 zł</h2>
                                        <p>Perfect for designing marketing assets</p>
                                    </div>

                                    <!-- Package 3 -->
                                    <div class="price-headItem bg-gray">
                                        <h6>Ultimate Combo</h6>
                                        <h2 class="yearly_price"><span>from </span> 5,999 zł</h2>
                                        <p>Comprehensive web and social media management</p>
                                        <div class="label">
                                            <img src="assets/imgs/pricing/Label.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="price-body">
                                    <!-- Feature Rows -->
                                    <div class="price-bodyItems">
                                        <div class="price-bodyTitle">Website Creation</div>
                                        <div class="price-item"><i class="fa-solid fa-check"></i></div>
                                        <div class="price-item"></div>
                                        <div class="price-item bg-gray"><i class="fa-solid fa-check"></i></div>
                                    </div>

                                    <div class="price-bodyItems">
                                        <div class="price-bodyTitle">Initial SEO Setup</div>
                                        <div class="price-item"><i class="fa-solid fa-check"></i></div>
                                        <div class="price-item"></div>
                                        <div class="price-item bg-gray"><i class="fa-solid fa-check"></i></div>
                                    </div>

                                    <div class="price-bodyItems">
                                        <div class="price-bodyTitle">Social Media Design</div>
                                        <div class="price-item"></div>
                                        <div class="price-item"><i class="fa-solid fa-check"></i></div>
                                        <div class="price-item bg-gray"><i class="fa-solid fa-check"></i></div>
                                    </div>

                                    <div class="price-bodyItems">
                                        <div class="price-bodyTitle">Custom Logo Design</div>
                                        <div class="price-item"></div>
                                        <div class="price-item"><i class="fa-solid fa-check"></i></div>
                                        <div class="price-item bg-gray"><i class="fa-solid fa-check"></i></div>
                                    </div>

                                    <div class="price-bodyItems">
                                        <div class="price-bodyTitle">UI/UX Design</div>
                                        <div class="price-item"></div>
                                        <div class="price-item"><i class="fa-solid fa-check"></i></div>
                                        <div class="price-item bg-gray"><i class="fa-solid fa-check"></i></div>
                                    </div>

                                    <div class="price-bodyItems">
                                        <div class="price-bodyTitle">Advertising Banners</div>
                                        <div class="price-item"></div>
                                        <div class="price-item"><i class="fa-solid fa-check"></i></div>
                                        <div class="price-item bg-gray"><i class="fa-solid fa-check"></i></div>
                                    </div>

                                    <div class="price-bodyItems">
                                        <div class="price-bodyTitle">SEO Management</div>
                                        <div class="price-item"></div>
                                        <div class="price-item"></div>
                                        <div class="price-item bg-gray"><i class="fa-solid fa-check"></i></div>
                                    </div>

                                    <div class="price-bodyItems">
                                        <div class="price-bodyTitle">3-Month Free Support</div>
                                        <div class="price-item"><i class="fa-solid fa-check"></i></div>
                                        <div class="price-item"><i class="fa-solid fa-check"></i></div>
                                        <div class="price-item bg-gray"><i class="fa-solid fa-check"></i></div>
                                    </div>

                                    <div class="price-bodyItems">
                                        <div class="price-bodyTitle">Flexible Revisions</div>
                                        <div class="price-item"></div>
                                        <div class="price-item"></div>
                                        <div class="price-item bg-gray"><i class="fa-solid fa-check"></i></div>
                                    </div>

                                    <div class="price-bodyItems">
                                        <div class="price-bodyTitle">Priority Handling</div>
                                        <div class="price-item"><i class="fa-solid fa-check"></i></div>
                                        <div class="price-item"><i class="fa-solid fa-check"></i></div>
                                        <div class="price-item bg-gray"><i class="fa-solid fa-check"></i></div>
                                    </div>

                                    <div class="price-bodyItems">
                                        <div class="price-bodyTitle">NDA Agreement</div>
                                        <div class="price-item"><i class="fa-solid fa-check"></i></div>
                                        <div class="price-item"><i class="fa-solid fa-check"></i></div>
                                        <div class="price-item bg-gray"><i class="fa-solid fa-check"></i></div>
                                    </div>
                                </div>

                                <div class="price-foot">
                                    <div class="price-footTitle"></div>

                                    <div class="price-foot-item">
                                        <a href="#0" class="butn butn-md butn-bord butn-rounded">
                                            <div class="d-flex align-items-center">
                                                <span>Pick This Package</span>
                                                <span class="icon ml-10"><i
                                                        class="fa-solid fa-chevron-right"></i></span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="price-foot-item">
                                        <a href="#0" class="butn butn-md butn-bord butn-rounded">
                                            <div class="d-flex align-items-center">
                                                <span>Pick This Package</span>
                                                <span class="icon ml-10"><i
                                                        class="fa-solid fa-chevron-right"></i></span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="price-foot-item bg-gray">
                                        <a href="#0" class="butn butn-md butn-bg butn-rounded">
                                            <div class="d-flex align-items-center">
                                                <span>Pick This Package</span>
                                                <span class="icon ml-10"><i
                                                        class="fa-solid fa-chevron-right"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="botm mt-70">
                            <span>Not finding a plan that fits your needs? Each of our services can be purchased
                                independently <a href="#0">Contact Us</a></span>
                        </div>
                    </div>
                </section>




                <!-- ==================== End Pricing ==================== -->



                <!-- ==================== Start FAQS ==================== -->

                <section class="faqs-ds section-padding pt-0">
                    <div class="container">
                        <div class="sec-head text-center mb-70">
                            <h2>Ask Us <span>Anything</span></h2>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse1" aria-expanded="true"
                                                aria-controls="collapse1">
                                                What services does your agency offer?
                                            </button>
                                        </h2>
                                        <div id="collapse1" class="accordion-collapse collapse"
                                            aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>We provide a wide range of services, including branding, design
                                                    (UI/UX, logos, and social media visuals), website development
                                                    (portfolios and e-commerce platforms), and growth strategies to
                                                    boost your business.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item active">
                                        <h2 class="accordion-header" id="heading2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                aria-expanded="false" aria-controls="collapse2">
                                                How long does it take to complete a project?
                                            </button>
                                        </h2>
                                        <div id="collapse2" class="accordion-collapse collapse show"
                                            aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Timelines vary depending on the project scope. For example, branding
                                                    and design projects may take 1-2 weeks, while website development
                                                    can take 4-8 weeks. We’ll provide a clear timeline after discussing
                                                    your requirements.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                aria-expanded="false" aria-controls="collapse3">
                                                Do you work with small businesses or startups?
                                            </button>
                                        </h2>
                                        <div id="collapse3" class="accordion-collapse collapse"
                                            aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Absolutely! We love helping small businesses and startups grow by
                                                    offering tailored solutions that fit their budget and goals.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                aria-expanded="false" aria-controls="collapse4">
                                                Can you manage our social media accounts?
                                            </button>
                                        </h2>
                                        <div id="collapse4" class="accordion-collapse collapse"
                                            aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Yes, we can design content for your social media platforms like
                                                    Facebook and Instagram, and also help you strategize and grow your
                                                    online presence.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse5"
                                                aria-expanded="false" aria-controls="collapse5">
                                                How much do your services cost?
                                            </button>
                                        </h2>
                                        <div id="collapse5" class="accordion-collapse collapse"
                                            aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Pricing depends on the complexity and scope of the project. We offer
                                                    custom quotes based on your specific needs. Contact us for a free
                                                    consultation to get started!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading6">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse6"
                                                aria-expanded="false" aria-controls="collapse6">
                                                Will I own the rights to the designs and website?
                                            </button>
                                        </h2>
                                        <div id="collapse6" class="accordion-collapse collapse"
                                            aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Yes, once the project is complete, you will have full ownership of
                                                    the designs, website, and other deliverables.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading7">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse7"
                                                aria-expanded="false" aria-controls="collapse7">
                                                How can I get started with your agency?
                                            </button>
                                        </h2>
                                        <div id="collapse7" class="accordion-collapse collapse"
                                            aria-labelledby="heading7" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Getting started is easy! Simply contact us via email or phone to
                                                    schedule a free consultation. We’ll discuss your goals and create a
                                                    plan tailored to your needs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-70">
                            <a href="../inner_pages/faqs.html" class="butn butn-md butn-bord butn-rounded mt-40">
                                <div class="d-flex align-items-center">
                                    <span>See All Questions</span>
                                    <span class="icon ml-10">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- ==================== End FAQS ==================== -->


                <!-- ==================== Start Blogs ==================== -->

                <!-- <section class="blog-ds section-padding">
                    <div class="container">
                        <div class="sec-head mb-70 d-flex align-items-center">
                            <div>
                                <h2>Our <span>Articles</span></h2>
                            </div>
                            <div class="ml-auto">
                                <a href="../inner_pages/blog-grid.html" class="butn butn-md butn-bord butn-rounded">
                                    <div class="d-flex align-items-center">
                                        <span>See All Articles</span>
                                        <span class="icon ml-10">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="item pt-30 bord-thin-top-light md-mb50">
                                    <div class="info d-flex align-items-center mb-20">
                                        <a href="#0" class="tag">
                                            <span>Experience</span>
                                        </a>
                                        <span class="dash">/</span>
                                        <a href="#0" class="date">
                                            <span>May 15, 2024</span>
                                        </a>
                                    </div>
                                    <div class="text mb-50">
                                        <h6>How to build work culture for <br> young office?</h6>
                                    </div>
                                    <div class="img">
                                        <img src="assets/imgs/blog/1.jpg" alt="">
                                        <a href="../inner_pages/blog-details.html" class="icon invert">
                                            <img src="../common/imgs/icons/arrow-top-right.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item pt-30 bord-thin-top-light md-mb50">
                                    <div class="info d-flex align-items-center mb-20">
                                        <a href="#0" class="tag">
                                            <span>Design Trends</span>
                                        </a>
                                        <span class="dash">/</span>
                                        <a href="#0" class="date">
                                            <span>May 1, 2024</span>
                                        </a>
                                    </div>
                                    <div class="text mb-50">
                                        <h6>Hubfolio - Winner SOTY at CSS <br> Winner 2023 with Zumar project</h6>
                                    </div>
                                    <div class="img">
                                        <img src="assets/imgs/blog/2.jpg" alt="">
                                        <a href="../inner_pages/blog-details.html" class="icon invert">
                                            <img src="../common/imgs/icons/arrow-top-right.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item pt-30 bord-thin-top-light">
                                    <div class="info d-flex align-items-center mb-20">
                                        <a href="#0" class="tag">
                                            <span>Tips & Tricks</span>
                                        </a>
                                        <span class="dash">/</span>
                                        <a href="#0" class="date">
                                            <span>April 24, 2024</span>
                                        </a>
                                    </div>
                                    <div class="text mb-50">
                                        <h6>Rebrand vs Refesh: 10 Minutes On Brand by Hubfolio</h6>
                                    </div>
                                    <div class="img">
                                        <img src="assets/imgs/blog/3.jpg" alt="">
                                        <a href="../inner_pages/blog-details.html" class="icon invert">
                                            <img src="../common/imgs/icons/arrow-top-right.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->

                <!-- ==================== End Blogs ==================== -->



            </main>


            <!-- ==================== Start Footer ==================== -->

            <footer class="footer-ds bord-thin-top-light">
                <div class="container section-padding">
                    <div class="row justify-content-between">
                        <div class="col-lg-4">
                            <div class="subscribe md-mb50">
                                <h6>Contact us for a free consultation
                                </h6>
                                <div class="form-group">
                                    <label for="email_subscribe">Email Address</label>
                                    <input id="email_subscribe" type="email" placeholder="Enter your email address"
                                        name="email_subscribe">
                                    <button type="submit" class="icon invert">
                                        <img src="../common/imgs/icons/paper-plane.svg" alt="">
                                    </button>
                                </div>
                                <span>By subscribing, you’re accept our <a href="#0">Privacy Policy</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-info">
                                <div class="row lg-marg">
                                    <div class="col-md-6">
                                        <div class="item mb-60">
                                            <h6>Work Inquiry</h6>
                                            <p>vkachmar@outlook.com</p>
                                            <p>+48 518 922 121</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="item mb-60">
                                            <h6>Open Position</h6>
                                            <p>Senior Front-end Wordpress Developer (Remote)</p>
                                            <p>UI/UX Designer (Remote)</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="item sm-mb60">
                                            <h6>Warszawa, woj. Mazowieckie</h6>
                                            <p>Chmielna 25/2</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="item">
                                            <h6>Links</h6>
                                            <p><a href="#0">Terms & Conditions</a></p>
                                            <p><a href="#0">Privacy Policy</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-footer bord-thin-top-light pt-50 pb-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="copy d-flex align-items-center md-mb30">
                                    <div>
                                        <div class="logo" style="border: none;">
                                            <img src="{{ asset('assets/frontend/wk_pages/assets/imgs/wk.pages-logo-white.svg') }}" alt="logo"   style="width: 50px">
                                        </div>
                                    </div>
                                    <div class="ml-50">
                                        <p>© 2025 <a href="#0">wk.pages Agency</a>. <br> All Right Reserved</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex justify-content-end">
                                <div class="links sub-color d-flex justify-content-between">
                                    <a href="#0" class="active">Home</a>
                                    <a
                                        href="https://www.instagram.com/wk.pages/profilecard/?igsh=a3dmZ3p4Z3J0bHU5">Instagram</a>
                                    <a href="https://www.facebook.com/profile.php?id=61567880623368">Facebook</a>
                                    <a href="#0">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- ==================== End Footer ==================== -->


        </div>

    </div>









    <!-- jQuery -->
    <script src="{{ asset('assets/frontend/common/js/lib/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/common/js/lib/jquery-migrate-3.4.0.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/frontend/common/js/lib/plugins.js') }}"></script>

    <!-- GSAP -->
    <script src="{{ asset('assets/frontend/common/js/gsap_lib/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/common/js/gsap_lib/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/common/js/gsap_lib/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/common/js/gsap_lib/SplitText.min.js') }}"></script>

    <!-- Common Scripts -->
    <script src="{{ asset('assets/frontend/common/js/common_scripts.js') }}"></script>


</body>

</html>
