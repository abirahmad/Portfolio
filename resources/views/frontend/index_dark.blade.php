@extends('frontend.layouts_dark.master')

@section('title')
Portfolio
@endsection

@section('content')
<!-- =====>> Hero Home1 <<===== 
    =========================== -->
    <section id="hero-area1" class="hero-top">
        <div class="hero1-all-images-wrapper">
            <img class="hero1-left" src="assets/img/home1/hero1-left.png" alt="">
            <img class="shape-left" src="assets/img/home1/hero1-left-shape.png" alt="">
            <img class="shape-right-same" src="assets/img/home1/hero1-left-shape.png" alt="">
            <img class="shape-right" src="assets/img/home1/hero1-right-shape.png" alt="">
            <img class="man-middle" src="assets/img/home1/hero-man-111.png" alt="">
            <img class="hero-dots-1" src="assets/img/home1/hero-dot-1.png" alt="">
            <img class="hero-dots-2" src="assets/img/home1/hero-dot-2.png" alt="">
            <img class="hero-triangle" src="assets/img/home1/triangle.png" alt="">
            <img class="hero-triangle2" src="assets/img/home1/triangle.png" alt="">
            <img class="hero-triangle3" src="assets/img/home1/triangle.png" alt="">
            <img class="hero-cross" src="assets/img/home1/cross.png" alt="">
            <img class="hero-circle" src="assets/img/home1/circle.png" alt="">
        </div>
        <div class="hero-item1 bg-dark-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-text-home1 text-left">
                            <h3>I Am Austin Jackson!</h3>
                            <h1 class="text-yellow">I AM A UI UX DESIGNER</h1>
                            <h4>Libero habitasse sollicitudin aliquet venenatis iaculis <br> placerat amet ligula,
                                eleifend nonummy enim in volutpat diam.</h4>
                            <a href="#" class="btn-1 btn-bgc-1">Download CV</a>
                            <a href="#" class="btn-1 btn-bgc-2">Explore Work</a>
                        </div>
                    </div>
                    <div class="col-lg-5"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Hero Home1 <<===== 
    =========================== -->

    <!-- =====>> Start Introduce-area  <<=====
    =========================== -->
    <section id="introduce-area" class="introduce-all bg-light-black pb-130 pt-130">
        <div class="introduce-tab">
            <ul class="tabs introduce-list-tabs">
                <li class="tab-link current" data-tab="tab-1">About me</li>
                <li class="tab-link" data-tab="tab-2">skill</li>
                <li class="tab-link" data-tab="tab-3">experience</li>
                <li class="tab-link" data-tab="tab-4">services</li>
                <li class="tab-link" data-tab="tab-5">portfolio</li>
            </ul>
        </div>
        <div class="container">
            <!-- About me -->
            <div id="tab-1" class="tab-content current">
                <div class="row pt-10">
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-30">
                        <div class="timelined-items">
                            <img src="assets/img/home1/timeline-man.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-30">
                        <div class="about-timelined-total">
                            <div class="section-title">
                                <h5>About Me</h5>
                                <h2>Let’s Introduce <span class="text-yellow">My self</span>
                                </h2>
                                <div class="section-title-border"></div>
                                <p class="mt-5">Meet my startup design agency Shape Rex Currently I am working at
                                    CodeNext Product Designer.Before that I’ve worked at SpurBee,Dhaka as a UX, UI
                                    Designer. I love to work in User Experience & User Interface designing.Because
                                    I love to as solve the design problem and find easy and better solutions to solve
                                    it.
                                </p>
                                <p>I always try my best to make good user interface with the best user experience. I
                                    have been working as a Visual designer from.</p>
                            </div>
                            <div class="row pt-30 pb-25">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="list-1">
                                        <ul class="timeline-para-list text-left">
                                            <li><strong>Birthday:</strong> 01.07.1990 </li>
                                            <li><strong>City:</strong> New York, USA </li>
                                            <li><strong>Study:</strong> Chicago University </li>
                                            <li><strong>Website:</strong> www.mywebsite.com
                                            </li>
                                            <li><strong>Phone:</strong> +77 022 177 05 05 </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="list-2">
                                        <ul class="timeline-para-list">
                                            <li><strong>Age:</strong> 28 </li>
                                            <li><strong>Interests:</strong> Soccer, UFC </li>
                                            <li><strong>Degree:</strong> Master </li>
                                            <li><strong>Mail:</strong> mymail@gmail.com </li>
                                            <li><strong>Twitter:</strong> @myusername </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="btn-3 btn-bgc-1">message</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab Skill -->
            <div id="tab-2" class="tab-content">
                <div class="row mt-20">
                    <div class="col-lg-3 col-sm-6 col-md-4 mt-30">
                        <div class="circle-progress-single">
                            <div class="progress-circle position" data-percent="75" data-duration="1000"
                                data-color="#ff8f43,#164eaa"></div>
                            <p>Communication 75%</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mt-30">
                        <div class="circle-progress-single">
                            <div class="progress-circle position" data-percent="85" data-duration="1000"
                                data-color="#ff8f43,#164eaa"></div>
                            <p>Organization 85%</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4 mt-30">
                        <div class="circle-progress-single">
                            <div class="progress-circle position" data-percent="90" data-duration="1000"
                                data-color="#ff8f43,#164eaa"></div>
                            <p>Analytical Abilities 90%</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mt-30">
                        <div class="circle-progress-single">
                            <div class="progress-circle position" data-percent="75" data-duration="1000"
                                data-color="#ff8f43,#164eaa"></div>
                            <p>Creativity Design 75%</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-90">
                        <div id="example-9" class="lines-skills">
                            <div class="cssProgress">
                                <p>Project Management</p>
                                <div class="cssProgress-label2">75%</div>
                                <div class="progress1">
                                    <div class="cssProgress-bar" data-percent="75" style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-90">
                        <div id="example-8" class="lines-skills">
                            <div class="cssProgress">
                                <p>Problem solving</p>
                                <div class="cssProgress-label2">90%</div>
                                <div class="progress1">
                                    <div class="cssProgress-bar" data-percent="90" style="width: 90%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-90">
                        <div id="example-7" class="lines-skills">
                            <div class="cssProgress">
                                <p>Perseverence</p>
                                <div class="cssProgress-label2">80%</div>
                                <div class="progress1">
                                    <div class="cssProgress-bar" data-percent="80" style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-90">
                        <div id="example-6" class="lines-skills">
                            <div class="cssProgress">
                                <p>Resourcefulness</p>
                                <div class="cssProgress-label2">75%</div>
                                <div class="progress1">
                                    <div class="cssProgress-bar" data-percent="75" style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab Experience -->
            <div id="tab-3" class="tab-content">
                <div class="row mt-15">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="timelined-Experience mt-30">
                            <p>Graphic Design University of Cambridge</p>
                            <p>2013 - 2019</p>
                            <p>There are many variations of passages of Lorem Ipsum availa
                                <br> ble, but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="timelined-Experience mt-30">
                            <p>Graphic Design University of Cambridge</p>
                            <p>2013 - 2019</p>
                            <p>There are many variations of passages of Lorem Ipsum availa
                                <br> ble, but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="timelined-Experience mt-30">
                            <p>Graphic Design University of Cambridge</p>
                            <p>2013 - 2019</p>
                            <p>There are many variations of passages of Lorem Ipsum availa
                                <br> ble, but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="timelined-Experience mt-30">
                            <p>Graphic Design University of Cambridge</p>
                            <p>2013 - 2019</p>
                            <p>There are many variations of passages of Lorem Ipsum availa
                                <br> ble, but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="timelined-Experience mt-30">
                            <p>Graphic Design University of Cambridge</p>
                            <p>2013 - 2019</p>
                            <p>There are many variations of passages of Lorem Ipsum availa
                                <br> ble, but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="timelined-Experience mt-30">
                            <p>Graphic Design University of Cambridge</p>
                            <p>2013 - 2019</p>
                            <p>There are many variations of passages of Lorem Ipsum availa
                                <br> ble, but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab Services  -->
            <div id="tab-4" class="tab-content">
                <div class="row pt-15">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="timelined-services mt-30">
                            <div class="services-images-timelined">
                                <img src="assets/img/home1/service-img-1.png" alt="">
                            </div>
                            <div class="services-text-timelined">
                                <h4>Business Strategy</h4>
                                <p>Strategy develop customer organisa knowledge and market perspectivesti hat inform and
                                    provoke.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="timelined-services mt-30">
                            <div class="services-images-timelined">
                                <img src="assets/img/home1/service-img-2.png" alt="">
                            </div>
                            <div class="services-text-timelined">
                                <h4>Business Strategy</h4>
                                <p>Strategy develop customer organisa knowledge and market perspectivesti hat inform and
                                    provoke.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="timelined-services mt-30">
                            <div class="services-images-timelined">
                                <img src="assets/img/home1/service-img-3.png" alt="">
                            </div>
                            <div class="services-text-timelined">
                                <h4>Business Strategy</h4>
                                <p>Strategy develop customer organisa knowledge and market perspectivesti hat inform and
                                    provoke.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="timelined-services mt-30">
                            <div class="services-images-timelined">
                                <img src="assets/img/home1/service-img-4.png" alt="">
                            </div>
                            <div class="services-text-timelined">
                                <h4>Business Strategy</h4>
                                <p>Strategy develop customer organisa knowledge and market perspectivesti hat inform and
                                    provoke.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="timelined-services mt-30">
                            <div class="services-images-timelined">
                                <img src="assets/img/home1/service-img-5.png" alt="">
                            </div>
                            <div class="services-text-timelined">
                                <h4>Business Strategy</h4>
                                <p>Strategy develop customer organisa knowledge and market perspectivesti hat inform and
                                    provoke.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="timelined-services mt-30">
                            <div class="services-images-timelined">
                                <img src="assets/img/home1/service-img-6.png" alt="">
                            </div>
                            <div class="services-text-timelined">
                                <h4>Business Strategy</h4>
                                <p>Strategy develop customer organisa knowledge and market perspectivesti hat inform and
                                    provoke.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab Portfolio -->
            <div id="tab-5" class="tab-content">
                <div class="row pt-15">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="timelined-portfolio-all mt-30">
                            <div class="port-img-timelined">
                                <img src="assets/img/home1/port-img-1.png" alt="">
                                <h6>Amazing Design Mockup
                                    <br> Design for Client</h6>
                            </div>
                            <div class="port-hover-icons">
                                <a class="images-gallery" href="assets/img/home1/port-img-1.png"><i
                                        class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="timelined-portfolio-all mt-30">
                            <div class="port-img-timelined">
                                <img src="assets/img/home1/port-img-2.png" alt="">
                                <h6>Creative Design
                                    <br> for Client</h6>
                            </div>
                            <div class="port-hover-icons">
                                <a class="images-gallery" href="assets/img/home1/port-img-2.png"><i
                                        class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="timelined-portfolio-all mt-30">
                            <div class="port-img-timelined">
                                <img src="assets/img/home1/port-img-3.png" alt="">
                                <h6>WP Development For
                                    <br> My Client</h6>
                            </div>
                            <div class="port-hover-icons">
                                <a class="images-gallery" href="assets/img/home1/port-img-3.png"><i
                                        class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="timelined-portfolio-all mt-30">
                            <div class="port-img-timelined">
                                <img src="assets/img/home1/port-img-4.png" alt="">
                                <h6>Extraordinary Image
                                    <br> Caption</h6>
                            </div>
                            <div class="port-hover-icons">
                                <a class="images-gallery" href="assets/img/home1/port-img-4.png"><i
                                        class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="timelined-portfolio-all mt-30">
                            <div class="port-img-timelined">
                                <img src="assets/img/home1/port-img-5.png" alt="">
                                <h6>Retouch Product Design
                                    <br> For Buyer</h6>
                            </div>
                            <div class="port-hover-icons">
                                <a class="images-gallery" href="assets/img/home1/port-img-5.png"><i
                                        class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="timelined-portfolio-all mt-30">
                            <div class="port-img-timelined">
                                <img src="assets/img/home1/port-img-6.png" alt="">
                                <h6>This Is Awesome
                                    <br> Photography</h6>
                            </div>
                            <div class="port-hover-icons">
                                <a class="images-gallery" href="assets/img/home1/port-img-6.png"><i
                                        class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container -->
    </section>


    <!-- =====>> Hin video area <<===== 
    =========================== -->
    <section id="Hin-video-area" class="bg-dark-black pt-130">
        <div class="videos-shape-img">
            <img class="left-video-img" src="assets/img/home1/left-video-img.png" alt="">
            <img class="video-left-shadow-img" src="assets/img/home1/video-left-shadow.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="section-title">
                        <h2>Hin helps you to manage your
                            <br> problems remotely!</h2>
                        <div class="section-title-border"></div>
                        <p class="mt-5">Silent sir say desire fat him letter. Whatever settling goodness too and honoure
                            she building answered her. Strongly thoughts remember mr to do consider deb ating. Spirits
                            musical behaved on we he farther letters.No more Mulitple
                            Platfor Now it had seen unable uneasy. Drawings can</p>
                        <p>
                            Followed by improved out sociable not.Earnestly so do instantly pretended.In a order to
                            design a mobile app that is going to be module downloaded and acc essed frequently by users,
                            you needoffer an experience.</p>
                        <a href="#" class="btn-4 btn-bgc-1 mt-50">Read More</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-8 offset-md-2">
                    <div class="videos-manage-all">
                        <div class="single-video-img">
                            <img src="assets/img/home1/video-imgs.png" alt="">
                            <a class="open-videos" href="https://www.youtube.com/watch?v=dEmHut4TcYQ"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====>> End Hin video area <<===== 
    =========================== -->

    <!-- =====>> pricing area <<===== 
    =========================== -->
    <section id="pricing-area" class="bg-light-black pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title text-center">
                        <h2>Pricing Table</h2>
                        <div class="section-title-border-center"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-10">
                <div class="col-lg-4 col-md-6 col-sm-12 mt-30">
                    <div class="single-pricing-all text-center pb-50">
                        <div class="single-pricing-half bg-dark-black">
                            <h4 class="pricing-headings">SMALL BUSINESS</h4>
                            <h1><sup>$</sup>2<span>5</span></h1>
                            <ul class="tabs yearly-price tab-change-1">
                                <li class="tab-link currents" data-tab="price-tab-1">1 Year</li>
                                <li class="tab-link" data-tab="price-tab-2">2 Year</li>
                                <li class="tab-link" data-tab="price-tab-3">3 Year</li>
                            </ul>
                        </div>
                        <div class="pricing-half-bottom tab-content currents" id="price-tab-1">
                            <ul class="pricing-bottom-list">
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                            </ul>
                            <a href="#" class="btn-4 btn-bgc-2">Purchase<i class="fas fa-chevron-right"></i></a>
                        </div>
                        <div class="pricing-half-bottom tab-content" id="price-tab-2">
                            <ul class="pricing-bottom-list">
                                <li>500 MB Space</li>
                                <li>700 MB Space</li>
                                <li>200 Disk Space</li>
                                <li>600 MB Disk </li>
                                <li>900 Disk Space</li>
                            </ul>
                            <a href="#" class="btn-4 btn-bgc-2">Purchase<i class="fas fa-chevron-right"></i></a>
                        </div>
                        <div class="pricing-half-bottom tab-content" id="price-tab-3">
                            <ul class="pricing-bottom-list">
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                            </ul>
                            <a href="#" class="btn-4 btn-bgc-2">Purchase<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-30">
                    <div class="single-pricing-all text-center pb-50">
                        <div class="single-pricing-half bg-dark-black">
                            <h4 class="pricing-headings">MEDIUM COMPANY</h4>
                            <h1><sup>$</sup>7<span>5</span></h1>
                            <ul class="tabs yearly-price tab-change-2">
                                <li class="tab-link" data-tab="price-tab-4">1 Year</li>
                                <li class="tab-link shown" data-tab="price-tab-5">2 Year</li>
                                <li class="tab-link" data-tab="price-tab-6">3 Year</li>
                            </ul>
                        </div>
                        <div class="pricing-half-bottom icon-color tab-content" id="price-tab-4">
                            <ul class="pricing-bottom-list">
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                            </ul>
                            <a href="#" class="btn-4 btn-bgc-1">Purchase<i class="fas fa-chevron-right"></i></a>
                        </div>
                        <div class="pricing-half-bottom icon-color tab-content shown" id="price-tab-5">
                            <ul class="pricing-bottom-list">
                                <li>900 MB Disk </li>
                                <li>800 Disk Space</li>
                                <li>700 MB Space</li>
                                <li>600 MB Disk </li>
                                <li>500 MB Disk Space</li>
                            </ul>
                            <a href="#" class="btn-4 btn-bgc-1">Purchase<i class="fas fa-chevron-right"></i></a>
                        </div>
                        <div class="pricing-half-bottom icon-color tab-content" id="price-tab-6">
                            <ul class="pricing-bottom-list">
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                            </ul>
                            <a href="#" class="btn-4 btn-bgc-1">Purchase<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-30">
                    <div class="single-pricing-all text-center pb-50">
                        <div class="single-pricing-half bg-dark-black">
                            <h4 class="pricing-headings">ENTERPRISE BUSINESS</h4>
                            <h1><sup>$</sup>9<span>5</span></h1>
                            <ul class="tabs yearly-price tab-change-3">
                                <li class="tab-link" data-tab="price-tab-7">1 Year</li>
                                <li class="tab-link" data-tab="price-tab-8">2 Year</li>
                                <li class="tab-link activate" data-tab="price-tab-9">3 Year</li>
                            </ul>
                        </div>
                        <div class="pricing-half-bottom tab-content" id="price-tab-7">
                            <ul class="pricing-bottom-list">
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                            </ul>
                            <a href="#" class="btn-4 btn-bgc-2">Purchase<i class="fas fa-chevron-right"></i></a>
                        </div>
                        <div class="pricing-half-bottom tab-content" id="price-tab-8">
                            <ul class="pricing-bottom-list">
                                <li>800 Disk Space</li>
                                <li>700 MB Space</li>
                                <li>600 MB Disk </li>
                                <li>500 Disk Space</li>
                                <li>400 MB Disk</li>
                            </ul>
                            <a href="#" class="btn-4 btn-bgc-2">Purchase<i class="fas fa-chevron-right"></i></a>
                        </div>
                        <div class="pricing-half-bottom tab-content activate" id="price-tab-9">
                            <ul class="pricing-bottom-list">
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                                <li>100 MB Disk Space</li>
                            </ul>
                            <a href="#" class="btn-4 btn-bgc-2">Purchase<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====>> End pricing area <<===== 
    =========================== -->

    <!-- =====>> client testimonial area <<===== 
    =========================== -->
    <section id="testimonial-area" class="rights-bg bg-dark-black pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title text-center">
                        <h2>Client Testimonial</h2>
                        <div class="section-title-border-center"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-col col-lg-5 offset-lg-1 col-md-9 offset-md-3 col-sm-9 offset-sm-3 pt-40">
                    <div class="testimonial-slick">
                        <div class="testimonial-texts-all">
                            <p><i class="fas fa-quote-left"></i> Sitting proudly atop heaters is the two-storey
                                penthouse. This is bedroom suit is phenomenally spacious and opens out to a breath
                                taking plunge pool and bar area that makes the most of its
                                unrivall ed position.No more Mulitple Platforms. Now it had seen unable une asy.
                                Drawings can followed by improved. <i class="fas fa-quote-right"></i></p>
                            <h4>Abubokker Siddik</h4>
                            <p class="fontstyle">Graphice Designer</p>
                        </div>
                        <div class="testimonial-texts-all">
                            <p><i class="fas fa-quote-left"></i> Sitting proudly atop heaters is the two-storey
                                penthouse. This is bedroom suit is phenomenally spacious and opens out to a breath
                                taking plunge pool and bar area that makes the most of its
                                unrivall ed position.No more Mulitple Platforms. Now it had seen unable une asy.
                                Drawings can followed by improved. <i class="fas fa-quote-right"></i></p>
                            <h4>Abubokker Siddik</h4>
                            <p class="fontstyle">Graphice Designer</p>
                        </div>
                        <div class="testimonial-texts-all">
                            <p><i class="fas fa-quote-left"></i> Sitting proudly atop heaters is the two-storey
                                penthouse. This is bedroom suit is phenomenally spacious and opens out to a breath
                                taking plunge pool and bar area that makes the most of its
                                unrivall ed position.No more Mulitple Platforms. Now it had seen unable une asy.
                                Drawings can followed by improved. <i class="fas fa-quote-right"></i></p>
                            <h4>Abubokker Siddik</h4>
                            <p class="fontstyle">Graphice Designer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-col col-lg-4 offset-lg-2 col-md-9 offset-md-3 col-sm-9 offset-sm-3 pt-40">
                    <div class="slide-fades">
                        <div class="testimonial-images text-left">
                            <img src="assets/img/home1/testimonial-img.png" alt="">
                        </div>
                        <div class="testimonial-images text-left">
                            <img src="assets/img/home1/testimonial-img2.png" alt="">
                        </div>
                        <div class="testimonial-images text-left">
                            <img src="assets/img/home1/testimonial-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End client testimonial area <<===== 
    =========================== -->
    <!-- =====>> block area <<===== 
    =========================== -->
    <section id="block-area" class="bg-light-black pt-180 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title text-center">
                        <h2>Latest Block</h2>
                        <div class="section-title-border-center"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-10">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-latest-block-all mt-30">
                        <div class="latest-image-block">
                            <a href="blog-details.html">
                                <img src="assets/img/home1/block-1.png" alt="">
                            </a>
                        </div>
                        <div class="latest-block-all-text">
                            <div class="img-text-block">
                                <img src="assets/img/home1/block-small.png" alt="">
                                <p><i class="far fa-calendar"></i>04 Oct 19</p>
                                <p><i class="fas fa-heart"></i>2.5k</p>
                                <p><i class="fas fa-comments"></i>2.5k</p>
                            </div>
                            <div class="block-text-bottom">
                                <a href="blog-details.html">
                                    <h4>Urna pretium sociis susc soda al leo a viverra eleifend.</h4>
                                </a>
                                <p>Cursus scelerisque pede class eleifend varius Ultricies sem. Diam Natoq cura amet
                                    interdu lorem nostra.</p>
                                <a href="blog-details.html" class="btn-5 btn-bgc-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-latest-block-all mt-30">
                        <div class="latest-image-block">
                            <a href="blog-details.html">
                                <img src="assets/img/home1/block-2.png" alt="">
                            </a>
                        </div>
                        <div class="latest-block-all-text">
                            <div class="img-text-block">
                                <img src="assets/img/home1/block-small.png" alt="">
                                <p><i class="far fa-calendar"></i>04 Oct 19</p>
                                <p><i class="fas fa-heart"></i>2.5k</p>
                                <p><i class="fas fa-comments"></i>2.5k</p>
                            </div>
                            <div class="block-text-bottom">
                                <a href="blog-details.html">
                                    <h4>Etiam vivamus hac nostra per ligula ultricies risus message.</h4>
                                </a>
                                <p>Cursus scelerisque pede class eleifend varius Ultricies sem. Diam Natoq cura amet
                                    interdu lorem nostra.</p>
                                <a href="blog-details.html" class="btn-5 btn-bgc-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-latest-block-all mt-30">
                        <div class="latest-image-block">
                            <a href="blog-details.html">
                                <img src="assets/img/home1/block-3.png" alt="">
                            </a>
                        </div>
                        <div class="latest-block-all-text">
                            <div class="img-text-block">
                                <img src="assets/img/home1/block-small.png" alt="">
                                <p><i class="far fa-calendar"></i>04 Oct 19</p>
                                <p><i class="fas fa-heart"></i>2.5k</p>
                                <p><i class="fas fa-comments"></i>2.5k</p>
                            </div>
                            <div class="block-text-bottom">
                                <a href="blog-details.html">
                                    <h4>Dapibus conubia lacin. Tempu ligula sed quis venenat.</h4>
                                </a>

                                <p>Cursus scelerisque pede class eleifend varius Ultricies sem. Diam Natoq cura amet
                                    interdu lorem nostra.</p>
                                <a href="blog-details.html" class="btn-5 btn-bgc-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End block <<===== 
    =========================== -->
    <!-- =====>> touch area <<===== 
    =========================== -->
    <section id="touch-area" class="bg-dark-black pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title text-center">
                        <h2>Get In Touch</h2>
                        <div class="section-title-border-center"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-10">
                <div class="col-lg-6 col-md-12 col-sm-12 mt-30">
                    <div class="touch-left-bg">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="touch-lefted-img">
                                    <img src="assets/img/home1/touch-imgss.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="touch-wrapper-all">
                                    <div class="single-touch media">
                                        <i class="fas fa-phone-alt"></i>
                                        <div class="single-touch-text">
                                            <h5>Phone</h5>
                                            <p>+ 64 3 477 4000
                                                <br> + 64 3 477 4023</p>
                                        </div>
                                    </div>
                                    <div class="single-touch media">
                                        <i class="fas fa-envelope"></i>
                                        <div class="single-touch-text">
                                            <h5>Email</h5>
                                            <p>hello@growth.com
                                                <br> subash.ui.ux@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="single-touch media">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="single-touch-text">
                                            <h5>Address</h5>
                                            <p>1600 Amphitheatre Parkway
                                                <br> Mountain View, Canada</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-30">
                    <form action="mail.php" method="POST" class="contact-box1" id="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-box1 mb-30">
                                    <input type="text" name="name" autocomplete="off" required>
                                    <label for="name" class="label-name1">
                                        <span class="label-content1">Name*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box1 mb-30">
                                    <input type="number" name="number" autocomplete="off" required>
                                    <label for="name" class="label-name1">
                                        <span class="label-content1">Phone*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box1 mb-30">
                                    <input type="email" name="email" autocomplete="off" required>
                                    <label for="name" class="label-name1">
                                        <span class="label-content1">Email*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box1 mb-30">
                                    <input type="text" name="subject" autocomplete="off" required>
                                    <label for="name" class="label-name1">
                                        <span class="label-content1">Subject</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box1 textarea-area1 mb-30">
                                    <textarea name="message" id="name" autocomplete="off" required></textarea>
                                    <label for="name" class="label-name1">
                                        <span class="label-content1">Messages</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-6 btn-bgc-1">Send</button>
                        <p class="form-message error"></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End touch area <<===== 
    =========================== -->

    @endsection