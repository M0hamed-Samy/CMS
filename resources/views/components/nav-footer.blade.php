<!--Main Footer-->
<footer class="main-footer" style="background-image: url('{{ asset('images/background/2.jpg') }}')">
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
                                <div class="text">
                                    Meditech is a library of health and medical templates with predefined web elements
                                    which helps you to build your medical templates best site Provide Comprehensive
                                    Quality Care About Medical Care Health Suspendisse metus turpis.
                                </div>
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="footer-title clearfix">
                                    <h2>Services</h2>
                                    <div class="separator"></div>
                                </div>
                                <ul class="footer-list">
                                    {{-- @for ($index = 0; $index < 5; $index++)
                                    <li><a href="{{ route('services.show', $service->id) }}">{{ $service->main_title }}</a></li>
                                        
                                    @endfor --}}
                                    @foreach ($services as $service)
                                        <li><a
                                                href="{{ route('services.show', $service->id) }}">{{ $service->main_title }}</a>
                                        </li>
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
                                    <h2>News Update</h2>
                                    <div class="separator"></div>
                                </div>

                                <!--News Widget Block-->
                                <div class="news-widget-block">
                                    <div class="widget-inner">
                                        <div class="image">
                                            <img src="{{ asset('images/resource/news-image-1.jpg') }}" alt="News 1" />
                                        </div>
                                        <h3><a href="{{ url('/blog-detail') }}">Integrative Medicine And Cancer
                                                Treatment</a></h3>
                                        <div class="post-date">July 11, 2017</div>
                                    </div>
                                </div>

                                <!--News Widget Block-->
                                <div class="news-widget-block">
                                    <div class="widget-inner">
                                        <div class="image">
                                            <img src="{{ asset('images/resource/news-image-2.jpg') }}" alt="News 2" />
                                        </div>
                                        <h3><a href="{{ url('/blog-detail') }}">Achieving Better Health Care One Patient
                                                At A Time</a></h3>
                                        <div class="post-date">July 11, 2018</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <div class="footer-title clearfix">
                                    <h2>Contact Us</h2>
                                    <div class="separator"></div>
                                </div>

                                <ul class="contact-list">
                                
                                    <li><span class="icon flaticon-placeholder"></span>2130 Fulton Street San Diego <br>
                                        CA 94117-1080 USA</li>
                                    <li><span class="icon flaticon-call"></span>Mon to Fri : 08:30 - 18:00 <br> <a
                                            href="https://wa.me/201008422674">010 08422674</a></li>
                                    <li><span class="icon flaticon-message"></span>Do you have a Question? <a
                                            href="mailto:info@gmail.com">info@gmail.com</a></li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">MediTech Health Care &copy; All Rights Reserved By Expertthemes</div>
        </div>
    </div>

</footer>
