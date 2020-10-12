@extends('frontend.layouts_light.master')

@section('title')
Portfolio
@endsection

@section('meta_tag')
<meta property="og:url" content="{{ route('index') }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Portfolio" />
<meta property="og:description" content="My Portfolio| Not huge but quite useful" />
<meta property="og:image" content="{{ asset('public/frontend/images/share_pics/share_photo.png') }}" />
@endsection

@section('content')
<!-- =====>> Hero Home2 <<===== 
    =========================== -->

   <span>Share on: </span>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('index') }}" class="btn btn-primary btn-sm pl-3 pr-3" target="_blank">Facebook</a>

        <?php 

            $banner=App\Models\Banner::first();
         ?>
    <section id="hero-area2" class="hero-top-2">
        <div class="hero2-all-images-wrapper">
            <img class="hero2-shape-right-same1" src="{{asset('public/frontend/img/home-2/hero1-left-shape.png')}}" alt="">
            <img class="hero2-shape-right-same2" src="{{asset('public/frontend/img/home-2/hero1-left-shape.png')}}" alt="">
            <img class="hero2-shape-right" src="{{asset('public/frontend/img/home-2/hero-2-right-shapes.png')}}" alt="">
            
            <img class="hero2-hero-dots-1" src="{{asset('public/frontend/img/home-2/hero-dot-1.png')}}" alt="">
            <img class="hero2-hero-dots-2" src="{{asset('public/frontend/img/home-2/hero-dot-2.png')}}" alt="">
            <img class="hero2-shape-big" src="{{asset('public/frontend/img/home-2/hero2-shape-big.png')}}" alt="">
            <img class="hero2-dots-small" src="{{asset('public/frontend/img/home-2/hero-dot-sm.png')}}" alt="">
            <img class="hero2-waves1" src="{{asset('public/frontend/img/home1/waves.png')}}" alt="">
            <img class="hero2-waves2" src="{{asset('public/frontend/img/home1/waves.png')}}" alt="">
            <img class="hero2-circle1" src="{{asset('public/frontend/img/home-2/circle.png')}}" alt="">
            <img class="hero2-circle2" src="{{asset('public/frontend/img/home-2/circle.png')}}" alt="">
            <img class="hero2-circle3" src="{{asset('public/frontend/img/home-2/circle.png')}}" alt="">
            <img class="hero2-circle4" src="{{asset('public/frontend/img/home-2/circle.png')}}" alt="">
            <img class="hero2-cross1" src="{{asset('public/frontend/img/home-2/cross.png')}}" alt="">
            <img class="hero2-cross2" src="{{asset('public/frontend/img/home-2/cross.png')}}" alt="">
            <img class="hero2-cross3" src="{{asset('public/frontend/img/home-2/cross.png')}}" alt="">
            <img class="hero2-cross4" src="{{asset('public/frontend/img/home-2/cross.png')}}" alt="">
            <img class="hero2-man-middle" src="{{url('public/backend/images/banner/'.$banner->image)}}" alt="">
        </div>

        <div class="hero-item1 hero-item2 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-text-home1 hero-text-home2 text-left">
                            <h3>I Am {{$banner->name}}!</h3>
                            <h1>{{$banner->title}}</h1>
                            <h4>{!! $banner->description !!}</h4>
                            <a href="{{ url('/') }}/public/backend/images/cv/{{ $banner->cv_upload }}" class="bttn-1 bttn-bgc-1" target="_blank">Download CV</a>
                            <a class="open-videos" href="https://www.youtube.com/watch?v=dEmHut4TcYQ"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Hero Home2 <<===== 
    =========================== -->
    <?php 
    $user=App\User::first();
     ?>
    <!-- =====>> Start Introduce-area2  <<=====
    =========================== -->
    <section id="introduce-area2" class="introduce-all bg-dark-white pb-130 pt-130">
        <div class="introduce-shapes-images">
            <img class="intro-left" src="{{asset('public/frontend/img/home-2/introduce-left-shape.png')}}" alt="">
            <img class="intro-right" src="{{asset('public/frontend/img/home-2/introduce-right-shape.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="introduce-item bg-dark-white">
                        <img src="{{ url('public/backend/images/profile/'.$user->user_avatar) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-timelined-total">
                        <div class="section-title-2 text-black">
                            <h2>Let’s Introduce My self</h2>
                            <div class="section-title-border-2"></div>
                            <p class="mt-5">{!! $user->description !!}
                            </p>
                        </div>
                        <div class="tab-content current" id="tab-one">
                            <div class="row pt-30">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="list-1">
                                        <ul class="timeline-para-list-2 text-left text-black">
                                            <li><strong>Birthday:</strong> {{$user->birthday}} </li>
                                            <li><strong>City:</strong> {{$user->city}} </li>
                                            <li><strong>Institution:</strong> {{$user->institution}} </li>
                                            <li><strong>Website:</strong> {{$user->website}}</li>
                                            <li><strong>Phone:</strong> {{$user->phone}} </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="list-2">
                                        <ul class="timeline-para-list-2 text-black">
                                            <li><strong>Age:</strong> {{$user->age}} </li>
                                            <li><strong>Interests:</strong> {{$user->interests}} </li>
                                            <li><strong>Degree:</strong> {{$user->degree}} </li>
                                            <li><strong>Mail:</strong> {{$user->email}} </li>
                                            <li><strong>Twitter:</strong>{{$user->address}} </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="tab-two">
                            <div class="row pt-30">
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="list-2">
                                        <ul class="timeline-para-list-2 text-black">
                                            <li><strong>Age:</strong> 28 </li>
                                            <li><strong>Interests:</strong> Soccer, UFC </li>
                                            <li><strong>Degree:</strong> Master </li>
                                            <li><strong>Mail:</strong> mymail@gmail.com </li>
                                            <li><strong>Twitter:</strong> @myusername </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="list-1">
                                        <ul class="timeline-para-list-2 text-left text-black">
                                            <li><strong>Birthday:</strong> 01.07.1990 </li>
                                            <li><strong>City:</strong> New York, USA </li>
                                            <li><strong>Study:</strong> Chicago University </li>
                                            <li><strong>Website:</strong> www.mywebsite.com </li>
                                            <li><strong>Phone:</strong> +77 022 177 05 05 </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="tabs introduce-click-tab">
                            <li class="tab-link current " data-tab="tab-one">Hire Me</li>
                            <li class="tab-link" data-tab="tab-two">Message</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Introduce-area2 <<===== 
    =========================== -->

    <!-- =====>> portfolio area2 <<===== 
    =========================== -->
    <section id="portfolio-area" class="bg-white pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title-2 text-center">
                        <h2>My Portfolio</h2>
                        <div class="section-title-border-center-2"></div>
                    </div>
                </div>
            </div>

            <div class="row mt-40">
                <div class="col-lg-12">
                    <div class="isotoop-btns text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All Work</button>
                            @foreach($menus as $menu)
                            <button data-filter=".{{$menu->id}}">{{$menu->name}}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-filters images-loads mt-20">
                <div class="row">
                    @foreach($portfolios as $portfolio)
                    <div class="col-lg-4 grid-item {{$portfolio->menu_id}} mt-30 col-sm-6 col-md-6">
                        <div class="timelined-portfolio-all">
                            <div class="port-img-timelined">
                                <img src="{{url('public/backend/images/portfolio/'.$portfolio->thumbnail)}}" alt="">
                                <h6>{{$portfolio->project_title}}</h6>
                            </div>
                            <div class="port-hover-icons-2">
                                <a href="{{route('portfolio.show',$portfolio->id)}}" target="_blank"><i
                                        class="fa fa-info"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End portfolio area2 <<===== 
    =========================== -->

    <?php $skills=App\Models\Skill::orderBy('id','desc')->get(); ?>

    <!-- =====>> progress-bar area <<===== 
    =========================== -->
    <section id="progress-bar-area" class="bg-dark-white pt-130 pb-130">
        <div class="videos-shape-img">
            <img class="progresstop-img" src="{{asset('public/frontend/img/home-2/progress-img.png')}}" alt="">
            <img class="progressbottom-img" src="{{asset('public/frontend/img/home-2/progress-img.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title-2">
                        <h2>Professional skill</h2>
                        <div class="section-title-border-2"></div>
                    </div>
                    <div class="row">
                    @foreach($skills as $skill)
                        @if($skill->skill_type == 'professional')
                        <div class="col-lg-6 mt-45 col-md-6 col-sm-6">
                            <div class="circle-progress-single home-2-circle-progress">
                                <div class="progress-circle position" data-percent="{{$skill->percentage}}" data-duration="1000"
                                    data-color="#8fbaec,#c10e0e"></div>
                                <p>{{$skill->title}} &nbsp; {{$skill->percentage}}%</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    </div>
                </div>
                <div class="col-lg-6 line-margin-progress">
                    <div class="section-title-2">
                        <h2>Works skill</h2>
                        <div class="section-title-border-2"></div>
                    </div>
                    <div class="row">
                    @foreach($skills as $skill)
                        @if($skill->skill_type == 'work')
                        <div class="col-lg-12 mt-35">
                            <div id="example-5" class="lines-skills lines-skills-2">
                                <div class="cssProgress cssProgress-2">
                                    <p>{{$skill->title}}</p>
                                    <div class="cssProgress-label2">{{$skill->percentage}}</div>
                                    <div class="progress1">
                                        <div class="cssProgress-bar cssProgress-bar-2" data-percent="{{$skill->percentage}}"
                                            style="width: 75%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====>> End progress-bar area <<===== 
    =========================== -->

    <?php $experiences=App\Models\Experience::orderBy('id','desc')->get(); ?>

    <!-- =====>> experience-area2 <<===== 
    =========================== -->
    <section id="experience-area" class="bg-white pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title-2 text-center">
                        <h2>Experience</h2>
                        <div class="section-title-border-center-2"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-10">
            @foreach($experiences as $experience)
                <div class="col-lg-6">
                    <div class="experience-border-all text-right mt-30">
                        <div class="Experience-all-texts">
                            <p>{{$experience->organization_name}}</p>
                            <p>{{$experience->time_range}}</p>
                            <p>{!! $experience->short_description !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>

    <!-- =====>> End experience-area2 <<===== 
    =========================== -->
    <?php $services=App\Models\Services::orderBy('id','desc') ->get();?>
    <!-- =====>> services area2 <<===== 
    =========================== -->
    <section id="services-area2" class="bg-dark-white pt-130 pb-130">
        <div class="service-area-2-shapes-img">
            <img class="service-2-centers" src="{{asset('public/frontend/img/home-2/hero-dot-1.png')}}" alt="">
            <img class="service-2-rights" src="{{asset('public/frontend/img/home-2/hero-dot-2.png')}}" alt="">
            <img class="service-2-same1" src="{{asset('public/frontend/img/home-2/hero1-left-shape.png')}}" alt="">
            <img class="service-2-same2" src="{{asset('public/frontend/img/home-2/hero1-left-shape.png')}}" alt="">
            <img class="service-2-shapes1" src="{{asset('public/frontend/img/home-2/hero-2-right-shapes.png')}}" alt="">
            <img class="service-2-shapes2" src="{{asset('public/frontend/img/home-2/service-2-shaped.png')}}" alt="">
            <img class="service-2-waves" src="{{asset('public/frontend/img/home1/waves.png')}}" alt="">
            <img class="hero2-circle1" src="{{asset('public/frontend/img/home-2/circle.png')}}" alt="">
            <img class="hero2-circle2" src="{{asset('public/frontend/img/home-2/circle.png')}}" alt="">
            <img class="hero2-circle3" src="{{asset('public/frontend/img/home-2/circle.png')}}" alt="">
            <img class="hero2-circle4" src="{{asset('public/frontend/img/home-2/circle.png')}}" alt="">
            <img class="hero2-circle5" src="{{asset('public/frontend/img/home-2/circle.png')}}" alt="">
            <img class="hero2-cross1" src="{{asset('public/frontend/img/home-2/cross.png')}}" alt="">
            <img class="hero2-cross3" src="{{asset('public/frontend/img/home-2/cross.png')}}" alt="">
            <img class="hero2-cross4" src="{{asset('public/frontend/img/home-2/cross.png')}}" alt="">
            <img class="hero-triangle" src="{{asset('public/frontend/img/home-2//triangle.png')}}" alt="">
            <img class="hero-triangle2" src="{{asset('public/frontend/img/home-2/triangle.png')}}" alt="">
            <img class="hero-triangle3" src="{{asset('public/frontend/img/home-2/triangle.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title-2 text-center">
                        <h2>Services</h2>
                        <div class="section-title-border-center-2"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-10">
                @foreach($services as $service)
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="timelined-services timelined-services-2 mt-30">
                        <div class="services-images-alls">
                            <img src="{{asset('public/frontend/img/home-2/s1.png')}}" alt="">
                        </div>
                        <div class="services-text-timelined service-text-timelined-2">
                            <h4>{{$service->title}}</h4>
                            <p>{!! $service->short_description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- =====>> End services area2 <<===== 
    =========================== -->

    <!-- =====>> testimonial area2 <<===== 
    =========================== -->
    <!-- <section id="testimonial-area2" class="testimonial-all-area bg-dark-white pt-130 pb-130">
        <div class="testimonial-area-2-shapes-img">
            <img class="testimonial-2-centered" src="assets/img/home-2/hero-dot-1.png" alt="">
            <img class="testimonial-2-rights" src="assets/img/home-2/hero-dot-2.png" alt="">
            <img class="testimonial-2-middle" src="assets/img/home-2/hero-dot-sm.png" alt="">
            <img class="testimonial-2-same1" src="assets/img/home-2/hero1-left-shape.png" alt="">
            <img class="testimonial-2-same2" src="assets/img/home-2/hero1-left-shape.png" alt="">
            <img class="testimonial-2-waves" src="assets/img/home-2/waves.png" alt="">
            <img class="testimonial-2-waves2" src="assets/img/home-2/waves.png" alt="">
            <img class="hero2-circle3" src="assets/img/home-2/circle.png" alt="">
            <img class="hero2-circle4" src="assets/img/home-2/circle.png" alt="">
            <img class="hero2-circle5" src="assets/img/home-2/circle.png" alt="">
            <img class="hero2-cross1" src="assets/img/home-2/cross.png" alt="">
            <img class="hero2-cross2" src="assets/img/home-2/cross.png" alt="">
            <img class="hero2-cross3" src="assets/img/home-2/cross.png" alt="">
            <img class="hero2-cross4" src="assets/img/home-2/cross.png" alt="">
            <img class="hero2-cross5" src="assets/img/home-2/cross.png" alt="">
            <img class="hero-triangle" src="assets/img/home-2//triangle.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title-2 text-center">
                        <h2>Client Testimonial</h2>
                        <div class="section-title-border-center-2"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-40">

                <div class="col-lg-6 offset-lg-3">
                    <div class="testimonial-slide-image-slick">
                        <div class="slides-slick-test">
                            <img src="{{url('public/backend/images//t1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slide-all-slick">
                        <div class="all-img-text-testimonial">
                            <div class="testimonial-2-text-all">
                                <div class="testimonial-2-single text-center">
                                    <h6>Abu Bokkor Siddik</h6>
                                    <p>Graphic Designer</p>
                                    <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                                        looked up one of the more obscur sectetur, from a Lorem Ipsum passage, and going
                                        through the cites of the word in classical literature, discovere
                                        source. Lorem Ipsum comes from sections richard McClintock, a Latin professor at
                                        Hampden-Sydney College in one of the more obscure Latin words, consectetur, from
                                        a Lorem Ipsum passage, and going through the cites
                                        of cal literature, discovered the undoubtable source. Lorem Ipsum comes from
                                        sections </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- =====>> End testimonial area2 <<===== 
    =========================== -->
    <!-- =====>> block area2 <<===== 
    =========================== -->
    <section id="block-area2" class="bg-white pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title-2 text-center">
                        <h2>Latest Block</h2>
                        <div class="section-title-border-center-2"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-10">
                <div class="col-lg-4 mt-30 col-sm-12 col-md-6">
                    <div class="single-latest-block-all single-latest-block-all-2">
                        <div class="latest-image-block-2">
                            <a href="blog-details.html">
                                <img src="assets/img/home1/block-1.png" alt="">
                            </a>
                        </div>
                        <div class="latest-block-all-text-2">
                            <div class="img-text-block-2">
                                <img src="assets/img/home1/block-small-2.png" alt="">
                                <p><i class="far fa-calendar"></i>04 Oct 19</p>
                                <p><i class="fas fa-heart"></i>2.5k</p>
                                <p><i class="fas fa-comments"></i>2.5k</p>
                            </div>
                            <div class="block-text-bottom-2">
                                <a href="blog-details.html">
                                    <h4>Urna pretium sociis susc soda al leo a viverra eleifend.</h4>
                                </a>
                                <p>Cursus scelerisque pede class eleifend varius Ultricies sem. Diam Natoq cura amet
                                    interdu lorem nostra.</p>
                                <a href="blog-details.html" class="bttn-4 bttn-bgc-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-30 col-md-6 col-sm-12">
                    <div class="single-latest-block-all single-latest-block-all-2">
                        <div class="latest-image-block-2">
                            <a href="blog-details.html">
                                <img src="assets/img/home1/block-2.png" alt="">
                            </a>
                        </div>
                        <div class="latest-block-all-text-2">
                            <div class="img-text-block-2">
                                <img src="assets/img/home1/block-small-2.png" alt="">
                                <p><i class="far fa-calendar"></i>04 Oct 19</p>
                                <p><i class="fas fa-heart"></i>2.5k</p>
                                <p><i class="fas fa-comments"></i>2.5k</p>
                            </div>
                            <div class="block-text-bottom-2">
                                <a href="blog-details.html">
                                    <h4>Etiam vivamus hac nostra per ligula ultricies risus message.</h4>
                                </a>
                                <p>Cursus scelerisque pede class eleifend varius Ultricies sem. Diam Natoq cura amet
                                    interdu lorem nostra.</p>
                                <a href="blog-details.html" class="bttn-4 bttn-bgc-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-30 col-sm-12 col-md-6">
                    <div class="single-latest-block-all single-latest-block-all-2">
                        <div class="latest-image-block-2">
                            <a href="blog-details.html">
                                <img src="assets/img/home1/block-3.png" alt="">
                            </a>
                        </div>
                        <div class="latest-block-all-text-2">
                            <div class="img-text-block-2">
                                <img src="assets/img/home1/block-small-2.png" alt="">
                                <p><i class="far fa-calendar"></i>04 Oct 19</p>
                                <p><i class="fas fa-heart"></i>2.5k</p>
                                <p><i class="fas fa-comments"></i>2.5k</p>
                            </div>
                            <div class="block-text-bottom-2">
                                <a href="blog-details.html">
                                    <h4>Dapibus conubia lacin. Tempu ligula sed quis venenat.</h4>
                                </a>
                                <p>Cursus scelerisque pede class eleifend varius Ultricies sem. Diam Natoq cura amet
                                    interdu lorem nostra.</p>
                                <a href="blog-details.html" class="bttn-4 bttn-bgc-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End block area2 <<===== 
    =========================== -->
    <!-- =====>> touch area2 <<===== 
    =========================== -->
    <section id="touch-area2" class="bg-dark-white pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title-2 text-center">
                        <h2>Get In Touch</h2>
                        <div class="section-title-border-center-2"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-10">
                <div class="col-lg-6 col-md-12 col-sm-12 mt-30">
                    <div class="touch-left-bg-2">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="touch-lefted-img">
                                    <img src="assets/img/home1/touch-imgss.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="touch-wrapper-all-2">
                                    <div class="single-touch-2 media">
                                        <i class="fas fa-phone-alt"></i>
                                        <div class="single-touch-text">
                                            <h5>Phone</h5>
                                            <p>+ 64 3 477 4000
                                                <br> + 64 3 477 4023</p>
                                        </div>
                                    </div>
                                    <div class="single-touch-2 media">
                                        <i class="fas fa-envelope"></i>
                                        <div class="single-touch-text">
                                            <h5>Email</h5>
                                            <p>hello@growth.com
                                                <br> subash.ui.ux@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="single-touch-2 media">
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
                <div class="col-lg-6 col-md-12 col-sm-12 mt-30">
                    <form action="{{route('store')}}" method="POST" class="contact-box2" id="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-box2 mb-30">
                                    <input type="text" name="name" autocomplete="off" required>
                                    <label for="name" class="label-name2">
                                        <span class="label-content2">Name*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box2 mb-30">
                                    <input type="number" name="number" autocomplete="off" required>
                                    <label for="name" class="label-name2">
                                        <span class="label-content2">Phone*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box2 mb-30">
                                    <input type="text" name="email" autocomplete="off" required>
                                    <label for="name" class="label-name2">
                                        <span class="label-content2">Email*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box2 mb-30">
                                    <input type="text" name="subject" autocomplete="off" required>
                                    <label for="name" class="label-name2">
                                        <span class="label-content2">Subject</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box2 textarea-area2 mb-30">
                                    <textarea name="message" id="name" autocomplete="off" required></textarea>
                                    <label for="name" class="label-name2">
                                        <span class="label-content2">Messages</span>
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
    <!-- =====>> End touch area2 <<===== 
    =========================== -->

    @endsection

    @section('script')
    @endsection