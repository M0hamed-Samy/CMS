<!--Main Footer-->
<footer class="main-footer" style="background-color: #007bff; color: #fff;">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--big column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo-outer">
                                    <div class="logo"><a href="/"><img src="{{ asset('images/logo.png') }}"
                                                alt="" title=""></a></div>
                                </div>
                                <div class="text" style="color: #fff !important;">
                                    دكتور عبد العال دياب استشاري جراحة السمنة والمناظير
                                    <br>استشاري جراحة السمنة والمناظير - جامعة عين شمس
                                    <br>استشاري جراحة السمنة والمناظير - جامعة المنصورة
                                </div>
                                <ul class="social-icons">
                                    <li><a href="https://www.facebook.com/profile.php?id=61552282110056" target="_blank"
                                            style="color: #fff;"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://www.google.com/search?q=%D8%AF%D9%83%D8%AA%D9%88%D8%B1+%D8%B9%D8%A8%D8%AF+%D8%A7%D9%84%D8%B9%D8%A7%D9%84+%D8%AF%D9%8A%D8%A7%D8%A8&oq=%D8%AF%D9%83%D8%AA&gs_lcrp=EgZjaHJvbWUqEAgAEEUYExgnGDsYgAQYigUyEAgAEEUYExgnGDsYgAQYigUyDggBEEUYJxg7GIAEGIoFMgYIAhBFGDkyBggDEEUYOzIHCAQQABiABDIGCAUQRRg9MgYIBhBFGD0yBggHEEUYPdIBCDIzNDJqMGo0qAIAsAIA&sourceid=chrome&ie=UTF-8" style="color: #fff;"><span class="fab fa-google"></span></a>

                                    </li>
                                    <li><a href="https://www.instagram.com/dr._abdelal_diab/" style="color: #fff;"><span class="fab fa-instagram"></span></a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="footer-title clearfix">
                                    <h2 style="color: #fff;">الخدمات</h2>
                                    <div class="separator" style="background-color: #fff;"></div>
                                </div>
                                <ul class="footer-list">
                                    @foreach ($services as $service)
                                        <li><a href="{{ route('services.show', $service->id) }}"
                                                style="color: #fff;">{{ $service->main_title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!--big column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget news-widget">
                                <div class="footer-title clearfix">
                                    <h2 style="color: #fff;">أحدث المقالات</h2>
                                    <div class="separator" style="background-color: #fff;"></div>
                                </div>

                                @foreach ($latest_blogs as $blog)
                                    <!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <a href="{{ route('blog.details', $blog->id) }}">
                                                    <img src="{{ asset('storage/' . $blog->image) }}"
                                                        alt="{{ $blog->title }}" />
                                                </a>
                                            </div>
                                            <h3>
                                                <a href="{{ route('blog.details', $blog->id) }}" style="color: #fff;">
                                                    {{ $blog->title }}
                                                </a>
                                            </h3>
                                            <div class="post-date" style="color: #fff;">
                                                {{ $blog->created_at->format('F d, Y') }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <div class="footer-title clearfix">
                                    <h2 style="color: #fff;">تواصل معنا</h2>
                                    <div class="separator" style="background-color: #fff;"></div>
                                </div>

                                <ul class="contact-list">
                                    <li>
                                        <span class="icon flaticon-placeholder" style="color: #fff;"></span>
                                        <a href="https://maps.app.goo.gl/msijrPaovVFeEUaj7" target="_blank"
                                            style="color: #fff; text-decoration: none;">
                                            الإسماعيلية <br> برج أول المعاطي - أمام مدرسة السكة الحديد
                                        </a>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-call" style="color: #fff !important;"></span>
                                        <p class="text" style="color: #fff !important;"> الاربع و الجمعة من 02:00 الي 06:00</p><br>
                                        <a href="https://wa.me/201008422674" target="_blank"
                                            style="color: #fff; text-decoration: none;">010 08422674</a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom" style="background-color: #0056b3; color: #fff; text-align: center; padding: 15px 0;">
        <div class="auto-container">
            <div class="footer-title clearfix" style="color: #fff !important;">
                جميع الحقوق محفوظة &copy; 2023 <a href="/" style="color: #fff; text-decoration: none;">DrDiabClinics</a>
            </div>
        </div>
    </div>
</footer>
