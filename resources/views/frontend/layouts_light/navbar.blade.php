 <!-- Center Nav -->
    <nav class="navbar navbar-expand-lg navbar-light menu-two" id="navigation">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">
                <img src="{{asset('public/frontend/img/home-2/logo-2.png')}}" alt="">
            </a> -->
            <?php $user=App\User::first(); ?>
            <p class="navbar-brand" style="font-weight: bold;">{{$user->fullname}}</p>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#introduce-area2">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#progress-bar-area">SKILL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience-area">EXPERICENCE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio-area">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonial-area2">TESTIMONIAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#block-area2">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#touch-area2">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- =====>> End Menu area <<===== 
    =========================== -->



<!-- Sidebar Nav -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a class="sidebar-header-logo" href="#">
                <img src="{{asset('public/frontend/img/home1/logo.png')}}" alt="">
            </a>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li> <a href="index.html">Home One</a> </li>
                    <li> <a href="index-2.html">Home Two</a> </li>
                </ul>
            </li>
            <li><a href="#introduce-area2">About</a></li>
            <li><a href="#progress-bar-area">Skill</a></li>
            <li><a href="#experience-area">Experience</a></li>
            <li><a href="#portfolio-area">Portfolio</a></li>
            <li><a href="#testimonial-area2">Testimonial</a></li>
            <li>
                <a href="#blogSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Blog</a>
                <ul class="collapse list-unstyled" id="blogSubmenu">
                    <li> <a href="blog.html">Blog</a> </li>
                    <li> <a href="blog-details.html">Blog Details</a> </li>
                </ul>
            </li>
            <li><a href="#touch-area2">Contact</a></li>
        </ul>
    </nav>
    <div class="overlay"></div>

