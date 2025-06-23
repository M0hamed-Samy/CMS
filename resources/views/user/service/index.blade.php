{{-- @php
	dd($service);
@endphp --}}
<x-head>

    عيادة الدكتور دياب - جراحة التجميل والجلدية
</x-head>


<body>

    <div class="page-wrapper rtl">
        <!-- Preloader -->
        <div class="preloader"></div>

        <x-nav-layout />
        <!-- End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image: url('{{ asset('images/background/7.jpg') }}');">

            <div class="auto-container">
                <h1>{{ $service->main_title }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}"><span class="fas fa-home"></span> الرئيسية </a></li>
                    <li>الخدمات</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container style-two">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar">


                            <!-- Help widgets -->
                            <div class="sidebar-widget need-help">
                                <h3>تحتاج مساعدة ؟</h3>
                                <p>يمكنك الاتصال </p>
                                <ul>
                                    <li><i class="fa fa-tty"></i> +0 000000 0000</li>
                                    <li><i class="far fa-envelope"></i> <a href="#">mail@meditech.com</a></li>
                                </ul>
                            </div>

                            

                        </aside>
                    </div>

                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-content" style="padding-left: 15px;">
                            <div class="department-detail">
                                <div class="image-box">
                                    <a><img src="{{ asset('storage/' . $service->main_image) }}" alt="">
                                    </a>
                                </div>

                                <div class="lower-content">
                                    <h2>{{ $service->main_title }}</h2>

                                    <h5 class="theme_color">{{ $service->main_about }}</h5>
                                    <p>{{ $service->main_description }}</p>
                                    
                                    <p style="margin: 0;">{{ $service->secondary_title }}</p>
                                    <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                                <div class="image">

                                                    <a href="{{ asset('storage/' .  $service->secondary_image) }}"
                                                        class="lightbox-image">
                                                        <img src="{{ asset('storage/' .  $service->secondary_image) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>


                                    <div class="two-column">
                                        <div class="row clearfix">
                                            <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                                <p>{{ $service->secondary_description }}</p>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Service Detail -->

                        <!-- Price Features -->
                        

                    </div>

                </div>
            </div>
        </div>

        <!-- Doctors Section -->
        <section class="doctors-section style-three">
            <div class="auto-container">

                <!-- Features Tab -->
                <div class="doctors-tabs tabs-box">

                    <ul class="doctors-thumb tab-buttons clearfix">
                        <li data-tab="#doctor-tab-1" class="tab-btn active-btn">
                            <div class="image-box">

                                <img src="{{ asset('storage/' . $service->mini_image_1) }}" alt="">
                            </div>
                        </li>
                        <li data-tab="#doctor-tab-2" class="tab-btn ">
                            <div class="image-box">
                                <figure><img src="{{ asset('storage/' . $service->mini_image_2) }}" alt="">
                                </figure>
                            </div>
                        </li>
                        <li data-tab="#doctor-tab-3" class="tab-btn ">
                            <div class="image-box">
                                <figure><img src="{{ asset('storage/' . $service->mini_image_3) }}" alt="">
                                </figure>
                            </div>
                        </li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">
                        <!--Tab / Active Tab-->
                        <div class="doctor-info tab active-tab" id="doctor-tab-1">
                            <div class="row clearfix">
                                <!-- Image-column -->
                                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image-box">

                                            <a href="{{ asset('storage/' . $service->mini_title_image_1) }}"
                                                class="lightbox-image" data-fancybox="Gallery"><img
                                                    src="{{ asset('storage/' . $service->mini_title_image_1) }}"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image-column -->
                                <div class="content-column col-lg-5 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <h3 class="name"><a href="doctors.html">{{ $service->mini_title_1 }}</a></h3>
                                        <span class="designation">{{ $service->mini_about_1 }}</span>
                                        <p>{{ $service->mini_descritpiton_1 }} </p>
                                        <span class="timing"><i class="flaticon-alarm-clock"></i> Monday - Friday (
                                            5:00pm - 8pm )</span>
                                        <div class="clearfix">
                                            <div class="social-links">
                                                <h4>Follow Me:</h4>
                                                <ul class="clearfix">
                                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                </ul>
                                            </div>

                                            <div class="call-btn">
                                                <a href="doctors.html" class="theme-btn btn-style-two"><span
                                                        class="txt">Book Appointment</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Tab / Active Tab-->
                        <div class="doctor-info tab" id="doctor-tab-2">
                            <div class="row clearfix">
                                <!-- Image-column -->
                                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image-box">

                                            <a href="{{ asset('storage/' . $service->mini_title_image_2) }}"
                                                class="lightbox-image" data-fancybox="Gallery"><img
                                                    src="{{ asset('storage/' . $service->mini_title_image_2) }}"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image-column -->
                                <div class="content-column col-lg-5 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <h3 class="name"><a href="doctors.html">{{ $service->mini_title_2 }}</a></h3>
                                        <span class="designation">{{ $service->mini_about_2 }}</span>
                                        <p>{{ $service->mini_descritpiton_2 }} </p>
                                        <span class="timing"><i class="flaticon-alarm-clock"></i> Monday - Friday (
                                            5:00pm - 8pm )</span>
                                        <div class="clearfix">
                                            <div class="social-links">
                                                <h4>Follow Me:</h4>
                                                <ul class="clearfix">
                                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                </ul>
                                            </div>

                                            <div class="call-btn">
                                                <a href="doctors.html" class="theme-btn btn-style-two"><span
                                                        class="txt">Book Appointment</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Tab / Active Tab-->
                        <div class="doctor-info tab" id="doctor-tab-3">
                            <div class="row clearfix">
                                <!-- Image-column -->
                                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image-box">

                                            <a href="{{ asset('storage/' . $service->mini_title_image_3) }}"
                                                class="lightbox-image" data-fancybox="Gallery"><img
                                                    src="{{ asset('storage/' . $service->mini_title_image_3) }}"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image-column -->
                                <div class="content-column col-lg-5 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <h3 class="name"><a href="doctors.html">{{ $service->mini_title_3 }}</a></h3>
                                        <span class="designation">{{ $service->mini_about_3 }}</span>
                                        <p>{{ $service->mini_descritpiton_3 }} </p>
                                        <span class="timing"><i class="flaticon-alarm-clock"></i> Monday - Friday (
                                            5:00pm - 8pm )</span>
                                        <div class="clearfix">
                                            <div class="social-links">
                                                <h4>Follow Me:</h4>
                                                <ul class="clearfix">
                                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                </ul>
                                            </div>

                                            <div class="call-btn">
                                                <a href="doctors.html" class="theme-btn btn-style-two"><span
                                                        class="txt">Book Appointment</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Doctors Section -->

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

    

    <!--Scroll to top-->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/color-settings.js') }}"></script>

</body>

</html>
