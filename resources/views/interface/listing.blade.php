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
                                    <div class="rd-navbar-brand"><a class="brand" href="{{url('/')}}"><img src="{{asset('images/logo_k.png')}}" alt="" width="229" height="43" /></a></div>
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
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/')}}">Home</a>
                                            </li>
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('interface/about')}}">About Us</a>
                                            </li>

                                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('interface/contactUs')}}">Contact Us</a>
                                            </li>
                                            <li class="rd-nav-item active"><a class="rd-nav-link" href="{{url('interface/list')}}">Listing</a>
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



<section class="section section-sm section-fluid bg-default text-center">
        <div class="container-fluid">
          <h3 class="wow fadeInLeft">Latest Projects</h3>
          <p class="quote-jean wow fadeInRight" data-wow-delay=".1s">In our portfolio you can browse the latest interior designs created in various styles and for different purposes. Our qualified design professionals are always ready to design something spectacular for you, even if it’s a residential interior improvement.</p>
          <div class="isotope-filters isotope-filters-horizontal">
            <button class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha" data-custom-toggle="#isotope-3" data-custom-toggle-hide-on-blur="true"><span class="icon fa fa-caret-down"></span>Filter</button>
            <ul class="isotope-filters-list" id="isotope-3">
              <li><a class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">All</a></li>
              <li><a href="#" data-isotope-filter="Type 1" data-isotope-group="gallery">Apartments</a></li>
              <li><a href="#" data-isotope-filter="Type 2" data-isotope-group="gallery">Offices</a></li>
              <li><a href="#" data-isotope-filter="Type 3" data-isotope-group="gallery">Corporate designs</a></li>
            </ul>
          </div>
          <div class="row row-30 isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="{{asset('images/fullwidth-gallery-1-420x350.jpg')}}" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-gallery-1-1200x800-original.jpg" data-lightgallery="item"><img src="{{asset('images/fullwidth-gallery-1-420x350.jpg')}}" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">379 Harvey Rd</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every project to deliver top-notch interior design concepts that satisfy your wishes.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 2" data-wow-delay=".1s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="{{asset('images/fullwidth-gallery-2-420x350.jpg')}}" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-gallery-2-1200x800-original.jpg" data-lightgallery="item"><img src="{{asset('images/fullwidth-gallery-2-420x350.jpg')}}" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">64 James Ave</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every project to deliver top-notch interior design concepts that satisfy your wishes.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 1" data-wow-delay=".2s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="{{asset('images/fullwidth-gallery-3-420x350.jpg')}}" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-1-1200x800-original.jpg" data-lightgallery="item"><img src="{{asset('images/fullwidth-gallery-3-420x350.jpg')}}" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">861 E. Oklahoma Dr</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every project to deliver top-notch interior design concepts that satisfy your wishes.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3" data-wow-delay=".3s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="{{asset('images/fullwidth-gallery-4-420x350.jpg')}}" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="{{asset('images/fullwidth-gallery-4-420x350.jpg')}}" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">14 Pulaski Str</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every project to deliver top-notch interior design concepts that satisfy your wishes.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 2">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="{{asset('images/fullwidth-gallery-5-420x350.jpg')}}" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-gallery-5-1200x800-original.jpg" data-lightgallery="item"><img src="{{asset('images/fullwidth-gallery-5-420x350.jpg')}}" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">8381 Peg Shop Str</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every project to deliver top-notch interior design concepts that satisfy your wishes.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 1" data-wow-delay=".1s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="{{asset('images/fullwidth-gallery-6-420x350.jpg')}}" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="{{asset('images/fullwidth-gallery-6-420x350.jpg')}}" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">830 Bridge Str</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every project to deliver top-notch interior design concepts that satisfy your wishes.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 3" data-wow-delay=".2s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="{{asset('images/fullwidth-gallery-7-420x350.jpg')}}" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-gallery-7-1200x800-original.jpg" data-lightgallery="item"><img src="{{asset('images/fullwidth-gallery-7-420x350.jpg')}}" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">29 Water Ln</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every project to deliver top-notch interior design concepts that satisfy your wishes.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 2" data-wow-delay=".3s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="{{asset('images/fullwidth-gallery-8-420x350.jpg')}}" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-gallery-8-1200x800-original.jpg" data-lightgallery="item"><img src="{{asset('images/fullwidth-gallery-8-420x350.jpg')}}" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">7262 Blue Spring Dr</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every project to deliver top-notch interior design concepts that satisfy your wishes.</p>
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