<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->


    <link href="{{asset('css/bootstrap_interface.css')}}" rel="stylesheet">
    <link href="{{asset('css/fonts_interface.css')}}" rel="stylesheet">
    <link href="{{asset('css/style_interface.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="flex-center position-ref full-height">
        <div class="page">

            <header class="section page-header">
                <!-- RD Navbar-->
                <div class="rd-navbar-wrap">
                    <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                        <div class="rd-navbar-main-outer">
                            <div class="rd-navbar-main">
                                <!-- RD Navbar Panel-->
                                <div class="rd-navbar-panel">
                                    <!-- RD Navbar Toggle-->
                                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                    <!-- RD Navbar Brand-->
                                    <div class="rd-navbar-brand"><a class="brand" href="{{url('/')}}"><img src="images/logo_k.png" alt="" width="229" height="43" /></a></div>
                                </div>
                                <div class="rd-navbar-main-element">
                                    <div class="rd-navbar-nav-wrap">
                                        <!-- RD Navbar Basket-->
                                        
                                        <!-- RD Navbar Search-->
                                        <div class="rd-navbar-search">
                                            <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                            <form class="rd-search" action="#" method="GET">
                                                <div class="form-wrap">
                                                    <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                                                    <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" />
                                                </div>
                                                <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                                            </form>
                                        </div>
                    
                                        <!-- RD Navbar Nav-->
                                        <ul class="rd-navbar-nav">
                                            <li class="rd-nav-item active"><a class="rd-nav-link" href="{{url('/')}}">Home</a>
                                            </li>
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('interface/about')}}">About Us</a>
                                            </li>
                     
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('interface/contactUs')}}">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="rd-navbar-project-hamburger" data-rd-navbar-toggle=".rd-navbar-main">
                                        <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
                                        <div class="project-close"><span></span><span></span></div>
                                    </div>
                                </div>
                                <div class="rd-navbar-project rd-navbar-classic-project">
                                    <h4 class="text-spacing-50">Our Works</h4>
                                    <div class="rd-navbar-project-content rd-navbar-classic-project-content">
                                        <div class="row" data-lightgallery="group">
                                            <div class="col-12">
                                                <!-- Thumbnail Classic-->
                                                <article class="thumbnail thumbnail-mary">
                                                    <div class="thumbnail-mary-figure"><img src="images/gallery-image-1-330x240.jpg" alt="" width="330" height="240" />
                                                    </div>
                                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-1-330x240.jpg" alt="" width="330" height="240" /></a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-12">
                                                <!-- Thumbnail Classic-->
                                                <article class="thumbnail thumbnail-mary">
                                                    <div class="thumbnail-mary-figure"><img src="images/gallery-image-2-330x240.jpg" alt="" width="330" height="240" />
                                                    </div>
                                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-masonry-gallery-10-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-2-330x240.jpg" alt="" width="330" height="240" /></a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-12">
                                                <!-- Thumbnail Classic-->
                                                <article class="thumbnail thumbnail-mary">
                                                    <div class="thumbnail-mary-figure"><img src="images/gallery-image-3-330x240.jpg" alt="" width="330" height="240" />
                                                    </div>
                                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-3-330x240.jpg" alt="" width="330" height="240" /></a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-12">
                                                <!-- Thumbnail Classic-->
                                                <article class="thumbnail thumbnail-mary">
                                                    <div class="thumbnail-mary-figure"><img src="images/gallery-image-4-330x240.jpg" alt="" width="330" height="240" />
                                                    </div>
                                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/masonry-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-4-330x240.jpg" alt="" width="330" height="240" /></a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-12">
                                                <!-- Thumbnail Classic-->
                                                <article class="thumbnail thumbnail-mary">
                                                    <div class="thumbnail-mary-figure"><img src="images/gallery-image-5-330x240.jpg" alt="" width="330" height="240" />
                                                    </div>
                                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-masonry-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-5-330x240.jpg" alt="" width="330" height="240" /></a>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- Swiper-->
            <section class="section swiper-container swiper-slider swiper-slider-classic" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-direction="vertical" data-nav="false">
                <div class="swiper-wrapper text-center">
                    <div class="swiper-slide context-dark" data-slide-bg="images/slider-1-slide-1-1770x742.jpg">
                        <div class="swiper-slide-caption section-md">
                            <div class="container">
                                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Condominium</h1>
                                <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">Our team uses innovations combined with customized interior planning to deliver the best interior design for your home or office while saving costs.</p><a class="button button-primary button-ujarak" href="#" data-caption-animate="fadeInUp" data-caption-delay="200">Get in touch</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide context-dark" data-slide-bg="images/slider-1-slide-2-1770x742.jpg">
                        <div class="swiper-slide-caption section-md">
                            <div class="container">
                                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">House</h1>
                                <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">All our designers and architects are completely committed to the end result, while being fully professional in all aspects of interior planning and design.</p><a class="button button-primary button-ujarak" href="#" data-caption-animate="fadeInUp" data-caption-delay="200">Get in touch</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide context-dark" data-slide-bg="images/slider-1-slide-3-1770x742.jpg">
                        <div class="swiper-slide-caption section-md">
                            <div class="container">
                                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Land</h1>
                                <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">We develop individual room concepts for private and commercial use. Our team focuses on the interior design of private living rooms, hotels, offices, and more.</p><a class="button button-primary button-ujarak" href="#" data-caption-animate="fadeInUp" data-caption-delay="200">Get in touch</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Swiper Pagination-->
                <div class="swiper-pagination__module">
                    <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">00</span><span class="swiper-pagination__fraction-divider">/</span><span class="swiper-pagination__fraction-count">00</span></div>
                    <div class="swiper-pagination__divider"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!-- See all services-->
            <section class="section section-sm section-first bg-default text-center">
                <div class="container">
                    <div class="row row-30 justify-content-center">
                        <div class="col-md-7 col-lg-5 col-xl-6 text-lg-left wow fadeInUp">
                            <div class="figure-classic figure-classic-left"><img src="images/index-1-513x561.jpg" alt="" width="513" height="561" />
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-6">
                            <div class="row row-30">
                                <div class="col-sm-6 wow fadeInRight">
                                    <article class="box-icon-modern box-icon-modern-custom">
                                        <div>
                                            <h3 class="box-icon-modern-big-title">See all services</h3>
                                            <div class="box-icon-modern-decor"></div><a class="button button-md button-default-outline-2 button-wapasha" href="#">All services</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".1s">
                                    <article class="box-icon-modern box-icon-modern-2">
                                        <div class="box-icon-modern-icon fl-bigmug-line-cropping1"></div>
                                        <h5 class="box-icon-modern-title"><a href="#">Online Listing Properties</a></h5>
                                        <div class="box-icon-modern-decor"></div>
                                        <p class="box-icon-modern-text">We create better experience for customers by just view online.</p>
                                    </article>
                                </div>
                                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".2s">
                                    <article class="box-icon-modern box-icon-modern-2">
                                        <div class="box-icon-modern-icon fl-bigmug-line-paintbrush9"></div>
                                        <h5 class="box-icon-modern-title"><a href="#">Appointment With Our Agent</a></h5>
                                        <div class="box-icon-modern-decor"></div>
                                        <p class="box-icon-modern-text">We create better experience for customers by just view online.</p>
                                    </article>
                                </div>
                                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".3s">
                                    <article class="box-icon-modern box-icon-modern-2">
                                        <div class="box-icon-modern-icon fl-bigmug-line-chat55"></div>
                                        <h5 class="box-icon-modern-title"><a href="#">Consultations</a></h5>
                                        <div class="box-icon-modern-decor"></div>
                                        <p class="box-icon-modern-text">Our specialists are ready to consult you on any interior design related topic.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <!-- Agents Showing Face -->
            <section class="section section-sm section-fluid bg-default">
                <div class="container-fluid">
                    <h3>Different people — one mission</h3>
                    <div class="row row-sm row-30 justify-content-center">
                        <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424" /></a>
                                <div class="team-classic-caption">
                                    <h5 class="team-classic-name"><a href="#">Ryan Wilson</a></h5>
                                    <p class="team-classic-status">Founder, Senior Designer</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-12-420x424.jpg" alt="" width="420" height="424" /></a>
                                <div class="team-classic-caption">
                                    <h5 class="team-classic-name"><a href="#">Jill Peterson</a></h5>
                                    <p class="team-classic-status">Architect</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-13-420x424.jpg" alt="" width="420" height="424" /></a>
                                <div class="team-classic-caption">
                                    <h5 class="team-classic-name"><a href="#">Sam Robinson</a></h5>
                                    <p class="team-classic-status">Senior Architect</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".3s">
                            <!-- Team Classic-->
                            <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-14-420x424.jpg" alt="" width="420" height="424" /></a>
                                <div class="team-classic-caption">
                                    <h5 class="team-classic-name"><a href="#">Mary Lee</a></h5>
                                    <p class="team-classic-status">Decorator</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Page Footer-->
            <footer class="section section-fluid footer-classic">
                <div class="container-fluid">
                    <div class="row row-30 justify-content-center">
                        <div class="col-md-10 col-lg-12 col-xl-4 wow fadeInRight">

                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
                            <div class="box-footer">
                                <h3 class="font-weight-normal">Questions? Contact Us</h3>
                                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-name-6" type="text" name="name" data-constraints="@Required" />
                                        <label class="form-label" for="contact-name-6">Name</label>
                                    </div>
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email-6" type="email" name="email" data-constraints="@Email @Required" />
                                        <label class="form-label" for="contact-email-6">E-mail</label>
                                    </div>
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-message-6">Message</label>
                                        <textarea class="form-input" id="contact-message-6" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                    <button class="button button-block button-ujarak button-secondary" type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".2s">

                        </div>
                    </div>
                    <div class="container footer-bottom-panel wow fadeInUp">
                        <!-- Rights-->
                        <p class="rights"><span>Copyright &copy; KMJ Website 2020</span></span>
                    </div>
            </footer>
        </div>

    </div>

    <script src="{{asset('js/core.min.js')}}"></script>
    <script src="{{asset('js/script.js')}} "></script>
</body>

</html>