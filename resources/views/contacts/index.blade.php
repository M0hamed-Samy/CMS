<x-head>
    معلومات التواصل
</x-head>

<body>

    <div class="page-wrapper rtl">
        <!-- Preloader -->
        <div class="preloader"></div>

        <x-nav-layout />

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/7.jpg);">
            <div class="auto-container">
                <h1>معلومات التواصل</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}"><span class="fas fa-home"></span> الرئيسية </a></li>
                    <li>تواصل معنا</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Contact Page Section -->
        <section class="contact-page-section">
        </section>

        <!-- Contact Map Section -->
        <section class="contact-map-section">
            <div class="outer-container">
                <div class="auto-container clearfix">
                    <div class="map-content">
                        <div class="title">تريد الحجز؟</div>    
                        <h2>معلومات التواصل</h2>
                        <ul class="info-list">
                            <li><span class="icon fas fa-envelope"></span>abdelaldiab@gmail.com</li>
                            <li><span class="icon fas fa-phone-volume"></span>(+20) 10 08422674</li>
                            <li><span class="icon fas fa-map-marker-alt"></span><a
                                    href="https://maps.app.goo.gl/C1Eros4wx2xwaPCi9" target="_blank">فرع الاسماعيلية : شارع السكة الحديد برج ابو المعاطي</a>
                            </li>
                            <li><span class="icon far fa-clock"></span>السبت الي الخميس ماعادا الاربعاء من 10:00 - 06:00</li>
                            <li><span class="icon fas fa-map-marker-alt"></span><a
                                    href="https://maps.app.goo.gl/x7iiMVfhd7MdynHP9?g_st=aw" target="_blank">فرع القاهرة : مدينة نصر 4 عمارات مايو</a>
                            </li>
                            <li><span class="icon far fa-clock"></span>الاربعاء و الجمعة من 06:00 - 02:00</li>

                        </ul>

                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/profile.php?id=61552282110056"><span
                                        class="fab fa-facebook-f"></span></a></li>
                            <li><a
                                    href="https://www.google.com/search?q=%D8%AF%D9%83%D8%AA%D9%88%D8%B1+%D8%B9%D8%A8%D8%AF+%D8%A7%D9%84%D8%B9%D8%A7%D9%84+%D8%AF%D9%8A%D8%A7%D8%A8&oq=%D8%AF%D9%83%D8%AA&gs_lcrp=EgZjaHJvbWUqEAgAEEUYExgnGDsYgAQYigUyEAgAEEUYExgnGDsYgAQYigUyDggBEEUYJxg7GIAEGIoFMgYIAhBFGDkyBggDEEUYOzIHCAQQABiABDIGCAUQRRg9MgYIBhBFGD0yBggHEEUYPdIBCDIzNDJqMGo0qAIAsAIA&sourceid=chrome&ie=UTF-8"><i
                                        class="fab fa-google"></i></a></li>
                            <li><a href="https://www.instagram.com/dr._abdelal_diab/"><i
                                        class="fab fa-instagram"></i></a></li>
                            
                        </ul> <div class="btn-box text-center">
                    <a href="{{ url('https://wa.me/201008422674') }}" target="_blank" class="theme-btn btn-style-two">
                        <span class="txt"><i class="fas fa-user-md"></i> &ensp; احجز الان</span>
                    </a>
                </div>

                    </div>
                </div>
                <div class="map-outer">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d639954.5493946085!2d31.112009346874988!3d30.5927603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f8590ebcafd637%3A0x3259d7f64ea45761!2z2K_Zg9iq2YjYsSDYudio2K_Yp9mE2LnYp9mEINiv2YrYp9io!5e1!3m2!1sen!2seg!4v1750279489073!5m2!1sen!2seg"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </section>
        <!-- End Map Section -->

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
    <script src="js/parallax.min.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/script.js"></script>
    <script src="js/color-settings.js"></script>

    <!--Google Map APi Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD39_Mb1wKUcuRD-0KPmQT6SQHhEMVX1O0"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->

</body>

</html>
