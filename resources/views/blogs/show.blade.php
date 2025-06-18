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
                <h1>{{ $blog->title }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}"><span class="fas fa-home"></span> الرئيسية </a></li>
                    <li>اخر المقالات</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!--Sidebar Page Container-->

        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="news-detail">
                            <div class="inner-box">
                                <div class="image">
                                    <!-- Display the blog main image -->
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" />
                                </div>
                                <div class="lower-content">
                                    <div class="content">
                                        <ul class="post-info">
                                            <li>
                                                <span
                                                    class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span>
                                                02
                                            </li>
                                            <li>
                                                <span class="icon flaticon-heart"></span> 126
                                            </li>
                                        </ul>
                                        <ul class="post-meta">
                                            <li>Post By: {{ $blog->author_name }}</li>
                                        </ul>

                                        <h3>
                                            <!-- Blog Title linked to the details page -->
                                            <a href="{{ route('blog.details', $blog->id) }}">{{ $blog->title }}</a>
                                        </h3>

                                        <div class="text">
                                            <p>{{ Str::limit($blog->content, 250) }}</p>
                                            <!-- Optional: shorten content preview -->

                                            <blockquote>
                                                <div class="blockquote-text">
                                                    {{ $blog->brief ?? 'sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.' }}
                                                </div>
                                                <div class="quote-box"><span class="icon flaticon-quote"></span></div>
                                            </blockquote>

                                            <p>{{ $blog->brief ?? 'sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.' }}
                                            </p>
                                        </div>


                                    </div>
                                </div>
                            </div>








                        </div>



                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar">




                            <!-- Gallery Widget -->
                            <div class="sidebar-widget gallery-widget">
                                <div class="sidebar-title">
                                    <h2>قبل وبعد</h2>
                                    <div class="separator"></div>
                                </div>
                                <div class="gallery-outer clearfix">


                                    <figure class="image">
                                        <a href="{{ asset('storage/' . $blog->image1) }}" class="lightbox-image"
                                            title="Image Title Here"><img src="{{ asset('storage/' . $blog->image1) }}"
                                                alt=""></a>
                                    </figure>
                                    <figure class="image">
                                        <a href="{{ asset('storage/' . $blog->image2) }}" class="lightbox-image"
                                            title="Image Title Here"><img src="{{ asset('storage/' . $blog->image2) }}"
                                                alt=""></a>
                                    </figure>
                                    <figure class="image">
                                        <a href="{{ asset('storage/' . $blog->image3) }}" class="lightbox-image"
                                            title="Image Title Here"><img src="{{ asset('storage/' . $blog->image3) }}"
                                                alt=""></a>
                                    </figure>
                                    <figure class="image">
                                        <a href="{{ asset('storage/' . $blog->image4) }}" class="lightbox-image"
                                            title="Image Title Here"><img src="{{ asset('storage/' . $blog->image4) }}"
                                                alt=""></a>
                                    </figure>


                                    <figure class="image">
                                        <a href="{{ asset('storage/' . $blog->image5) }}" class="lightbox-image"
                                            title="Image Title Here"><img src="{{ asset('storage/' . $blog->image5) }}"
                                                alt=""></a>
                                    </figure>


                                </div>
                            </div>




                        </aside>
                    </div>

                </div>
            </div>
        </div>


        <x-nav-footer />


    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>






    <!-- JavaScript Libraries -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/mixitup.js') }}"></script>
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
