<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Medi-tech - HTML Template | Gallery</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper rtl">
        <!-- Preloader -->
        <div class="preloader"></div>

        <x-nav-layout />
        <!-- End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/7.jpg);">
            <div class="auto-container">
                <h1>Gallery of MediTech</h1>
                <div class="text">What We Actually Do?</div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Portfolio Page Section -->
        <section class="portfolio-page-section">
            <div class="auto-container">

                <!--MixitUp Gallery-->
                <div class="mixitup-gallery">
                    <div class="filter-list row clearfix">

                        @foreach ($videos as $video)
                            <!-- Gallery Item -->
                            <div class="gallery-item mix all ophthalmology neurosurgery col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <!-- Video Thumbnail -->
                                        <img src="{{ asset('storage/' . $video->video_img) }}"
                                            alt="{{ $video->title }}"
                                            style="height:250px; width:100%; object-fit:cover;">

                                        <!--Overlay Box-->
                                        <div class="overlay-box">
                                            <div class="overlay-inner">
                                                <div class="content">
                                                    <!-- Fancybox Preview -->
                                                    <a href="{{ asset('storage/' . $video->video_img) }}"
                                                        data-fancybox="gallery-2" data-caption="{{ $video->title }}"
                                                        class="link">
                                                        <span class="icon flaticon-magnifying-glass-1"></span>
                                                    </a>

                                                    <!-- Video Link (File or URL) -->
                                                    <a href="{{ $video->video_type == 'file' ? asset('storage/' . $video->video_path) : $video->video_path }}"
                                                        class="link" target="_blank">
                                                        <span class="icon flaticon-link"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>

                                    <!-- Video Title -->
                                    <h4 class="mt-2">{{ $video->title }}</h4>

                                    <!-- Video Description -->
                                    <p>{{ Str::limit($video->description, 150) }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <!-- View All Button -->
                <div class="btn-box text-center">
                    <a href="{{ route('videos.index') }}" class="theme-btn btn-style-two">
                        <span class="txt"><i class="fas fa-user-md"></i> &ensp; View All</span>
                    </a>
                </div>

            </div>
        </section>

        <!-- End Portfolio Page Section -->

        <!--Main Footer-->
        <x-nav-footer />
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Search Here" required>
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>

                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Logistics</a></li>
                    <li><a href="#">Freedom</a></li>
                </ul>

            </div>

        </div>
    </div>

    <!-- Color Palate / Color Switcher -->
    <div class="color-palate">
        <div class="color-trigger">
            <i class="fas fa-cog"></i>
        </div>
        <div class="color-palate-head">
            <h6>Choose Your Color</h6>
        </div>
        <div class="various-color clearfix">
            <div class="colors-list">
                <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
                <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
                <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
                <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
                <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
                <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
                <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
                <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
            </div>
        </div>

        <ul class="rtl-version option-box">
            <li class="rtl">RTL Version</li>
            <li>LTR Version</li>
        </ul>

        <a href="#" class="purchase-btn">Purchase now $17</a>

        <div class="palate-foo">
            <span>You will find much more options for colors and styling in admin panel. This color picker is used only
                for demonstation purposes.</span>
        </div>

    </div>

    <!--Scroll to top-->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/script.js"></script>
    <script src="js/color-settings.js"></script>

</body>

</html>
