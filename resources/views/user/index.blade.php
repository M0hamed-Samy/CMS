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
                                        +<span class="count-text" data-speed="3000" data-stop="1000">0</span>
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
        <section class="fullwidth-section">
            <div class="outer-container">
                <div class="clearfix">

                   

                    <!-- Right Column -->
                    <div class="right-column">
                        <div class="inner-column">

                            <!-- Upper Box -->
                            <div class="upper-box">
                                <div class="icon flaticon-alarm-clock"></div>
                                <h3>ساعات العمل</h3>
                            </div>
                            <ul class="time-list">
                                <li class="clearfix"><span class="left-span pull-left">السبت الى الخميس (ما عادا الاربعاء)</span><span
                                        class="right-span pull-right">06:00am - 10:00pm</span></li>

                                <li class="clearfix"><span class="left-span pull-left">الجمعة - الاربعاء</span><span
                                        class="right-span pull-right">02:00am - 06:00pm</span></li>
                                
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </section>
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

        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>احدث الخدمات</h2>
                    <div class="separator style-three"></div>
                </div>

                <div class="row clearfix">
                    @foreach ($services->take(4) as $service)
                        <div class="news-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <div class="category">Service</div>
                                    <a href="{{ url('/services/' . $service->id) }}">
                                        <img src="{{ asset('storage/' . $service->title_image) }}"
                                            alt="{{ $service->main_title }}" />
                                    </a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li><a href="#">03 Comments</a></li>
                                        <!-- You can make this dynamic later -->
                                        <li><a href="#">Published:
                                                {{ $service->created_at->format('F d, Y') }}</a></li>
                                        <li><a href="#">12 Likes</a></li>
                                        <!-- You can make this dynamic later -->
                                    </ul>
                                    <h3>
                                        <a href="{{ url('/services/' . $service->id) }}">
                                            {{ $service->main_title }}
                                        </a>
                                    </h3>
                                    <div class="text">
                                        {{ \Illuminate\Support\Str::limit($service->main_description, 100) }}
                                    </div>
                                    <a href="{{ url('/services/' . $service->id) }}" class="read-more">اقرأ
                                        المزيد</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>




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
