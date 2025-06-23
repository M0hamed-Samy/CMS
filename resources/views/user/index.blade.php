<x-head>
    عيادة الدكتور دياب - جراحة التجميل والجلدية
</x-head>

<body>

    <div class="page-wrapper rtl">
        <!-- Preloader -->
        <div class="preloader"></div>

        <x-nav-layout>
        </x-nav-layout>

        <!-- Main Slider -->
        <section class="main-slider">
            <div class="banner-carousel">
                <!-- Swiper -->
                <div class="swiper-wrapper">

                    <section class="swiper-slide slide"
                        style="background-image: url('{{ asset('images/main-slider/1.jpg') }}');">

                        <div class="auto-container">
                            <div class="content clearfix">
                                <div class="title"
                                    style="color:whitesmoke !important; font-family: 'Cairo', 'Tajawal', 'Amiri', 'Scheherazade', sans-serif;">
                                    <h2>دكتور عبد العال دياب</h2>

                                </div>

                                <div class="text" style="color:whitesmoke !important"> استشارى جراحات التجميل وعلاج
                                    اثار الحروق والجروح المزمنة والعيوب الخلقية وتشوهات القوام</div>

                                <div class="btn-box clearfix">

                                    <a href="https://wa.me/201008422674" class="theme-btn phone-btn" target="_blank">
                                        <span class="icon fab fa-whatsapp" style="color: #25D366;"></span> 010 08422674
                                    </a>


                                </div>
                            </div>
                        </div>
                    </section>


                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- End Main Slider -->

        <!-- Services Section -->
        <section class="department-section">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>خدماتنا</h2>
                    <div class="separator"></div>
                </div>

                <div class="services-carousel owl-carousel owl-theme">
                    @foreach ($services as $service)
                        <!-- Department Block -->
                        <div id="services-section">
                            <div class="department-block">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="icon">
                                            <img src="{{ asset('storage/' . $service->icon) }}" alt="Service Icon"
                                                style="width:60px; height:60px;">
                                        </div>
                                        <h3><a href="#">{{ $service->main_title }}</a></h3>
                                    </div>
                                    <div class="text">
                                        {{ $service->main_description }}
                                    </div>
                                    <div class="read-outer">
                                        <a href="{{ url('/services/' . $service->id) }}" class="read-more">اقرأ المزيد
                                            <span class="icon fas fa-angle-double-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach




                </div>

            </div>
        </section>
        <!-- End Department Section -->

        <!-- Fluid Section One -->
        <section class="fluid-section-one">
            <div class="outer-section clearfix">

                <!--Image Column-->
                <div class="image-column" style="background-image: url(images/resource/image-1.jpg)">
                    <div class="image">
                        <img src="images/resource/image-1.jpg" alt="">
                    </div>
                </div>
                <!--End Image Column-->

                <!--Content Column-->
                <div class="content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h2>نبذة مختصرة</h2>
                            <div class="separator style-two"></div>
                        </div>
                        <div class="text">
                            <p>استشارى جراحة التجميل</p>
                            <p> (FRCS) زميل كلية الجراحين الملكية ببريطانيا</p>
                            <p>حاصل على ماجستير الجراحة من كلية الطب – جامعة عين شمس</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <!-- Counter Section -->
        <section class="counter-section" style="background-image: url(images/background/pattern-3.png)">
            <div class="auto-container">

                <!-- Fact Counter -->
                <div class="fact-counter">
                    <div class="row clearfix">



                        <!--Column-->
                        <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box alternate">
                                        +<span class="count-text" data-speed="3000" data-stop="10000">0</span>
                                    </div>
                                    <h4 class="counter-title">عملية</h4>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        +<span class="count-text" data-speed="3000" data-stop="35">0</span>
                                    </div>
                                    <h4 class="counter-title">سنة خبرة</h4>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </section>
        <!-- End Counter Section -->



        <!-- FullWidth Section -->
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
                                    href="https://maps.app.goo.gl/C1Eros4wx2xwaPCi9" target="_blank">فرع الاسماعيلية :
                                    شارع السكة الحديد برج ابو المعاطي</a>
                            </li>
                            <li><span class="icon far fa-clock"></span>السبت الي الخميس من 10:00 - 06:00</li>
                            <li><span class="icon fas fa-map-marker-alt"></span><a
                                    href="https://maps.app.goo.gl/x7iiMVfhd7MdynHP9?g_st=aw" target="_blank">فرع القاهرة
                                    : مدينة نصر 4 عمارات مايو</a>
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

                        </ul>
                        <div class="btn-box text-center">
                            <a href="{{ url('https://wa.me/201008422674') }}" target="_blank"
                                class="theme-btn btn-style-two">
                                <span class="txt"><i class="fas fa-user-md"></i> &ensp; احجز الان</span>
                            </a>
                        </div>

                    </div>
                </div>
                

            </div>
        </section>
        <!-- End Map Section -->
        <!-- End FullWidth Section -->

        <!-- Testimonial Section -->
        <section class="testimonial-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>آراء عملائنا</h2>
                    <div class="separator"></div>
                </div>
                <div class="testimonial-outer" style="background-image: url(images/background/pattern-4.png)">

                    <!--Client Testimonial Carousel-->
                    <div class="client-testimonial-carousel owl-carousel owl-theme">

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="quote-icon flaticon-quote"></div>
                                <div class="text">تسلم ايديك ي دكتور ربنا يباركلك بجد العمليه ملهاش اي اثر خالص و
                                    بصراحه انت كنت خايف منها بس حضرتك طمنتي و الحمدالله اني وقعت تحت ايديك ♥️♥️</div>
                            </div>
                        </div>

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="quote-icon flaticon-quote"></div>
                                <div class="text">ربنا يباركلك يا دكتور من افضل الدكاتره اللي ممكن اي حد يتعامل معاهم
                                    ما شاء الله ♥️
                                </div>
                            </div>
                        </div>

                        <!--Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="quote-icon flaticon-quote"></div>
                                <div class="text">السلام عليكم ورحمه الله وبركاتة
                                    انا بشكر الدكتور الذوق الخلوق عبد العال دياب على إجرائة لى عملية الفتاق وشد العضلات
                                    والبطن وعلى متابعتة وعدم تقصيرة في اى شيئ وعلى أسلوبه المتواضع فى المعاملة .. وبشكر
                                    كل فريق العمل بمستشفى الدكتور عاطف نور الدين على مراعتهم وزوقهم خاصتا الأستاذة ايمان
                                    .. جزاك الله كل الخير يا سيدي الفاضل دكتور عبد العال دياب

                                </div>
                            </div>
                        </div>



                    </div>

                    <!--Product Thumbs Carousel-->
                    <div class="client-thumb-outer">
                        <div class="client-thumbs-carousel owl-carousel owl-theme">
                            <div class="thumb-item">
                                <figure class="thumb-box"><img src="images/resource/author-1.jpg" alt="">
                                </figure>
                                <div class="author-info">
                                    <div class="author-name">عبدالله</div>
                                    <div class="designation">Ismailia</div>
                                </div>
                            </div>
                            <div class="thumb-item">
                                <figure class="thumb-box"><img src="images/resource/author-2.jpg" alt="">
                                </figure>
                                <div class="author-info">
                                    <div class="author-name">Nada A. Basha</div>
                                    <div class="designation">Ismailia</div>
                                </div>
                            </div>
                            <div class="thumb-item">
                                <figure class="thumb-box"><img src="images/resource/author-3.jpg" alt="">
                                </figure>
                                <div class="author-info">
                                    <div class="author-name">Noha Ahmed</div>
                                    <div class="designation">Cairo</div>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Testimonial Section Two -->

       



        <x-nav-footer></x-nav-footer>

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


    </div>

    <!--Scroll to top-->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
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
