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
                <h1>احدث المقالات</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}"><span class="fas fa-home"></span> الرئيسية </a></li>
                    <li>المقالات</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Blog Page Section -->
        <section class="blog-page-section">
            <div class="auto-container">
                <div class="row clearfix">

                    @foreach ($blogs_user as $blog)
                        <!-- News Block Two -->
                        <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ route('blog.details', $blog->id) }}">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" />
                                    </a>
                                </div>
                                <div class="lower-content">
                                    <div class="content">
                                        <ul class="post-info">
                                            <li><span
                                                    class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span>
                                                02</li>
                                            <li><span class="icon flaticon-heart"></span> 126</li>
                                        </ul>
                                        <ul class="post-meta">
                                            <li>{{ $blog->created_at->format('F d, Y - h:i A') }}</li>
                                            <li>Post By: {{ $blog->author_name }}</li>
                                        </ul>
                                        <h3>
                                            <a href="{{ route('blog.details', $blog->id) }}">{{ $blog->title }}</a>
                                        </h3>
                                        <div class="text">
                                            {{ Str::limit(strip_tags($blog->content), 100, '...') }}
                                        </div>
                                        <a href="{{ route('blog.details', $blog->id) }}"
                                            class="theme-btn btn-style-five">
                                            <span class="txt">Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- Styled Pagination -->
                <div class="styled-pagination text-center">
                    {{ $blogs_user->links('pagination::bootstrap-4') }}
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
