 <!--
    ========================================
        header-top-area2
    ========================================
    -->

    <?php $user=App\User::first(); ?>
    <header class="header-top-area header-top-area-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-9">
                    <div class="header-content header-content-2">
                        <ul class="header-contact header-contact-2">
                            <li>
                                <i class="fas fa-phone"></i>
                                <a href="#">{{$user->phone}}</a>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <a href="{{$user->website}}" target="_blank">{{$user->website}}</a>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <a href="#">{{$user->email}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-2 col-sm-3">
                    <a href="#" class="header-top-right-text text-center">
                        FREE CONSULTATION
                    </a>
                </div>
            </div>
        </div>
    </header>