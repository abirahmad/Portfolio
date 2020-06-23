<!DOCTYPE html>
<html lang="en">
<?php $user=App\User::first(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$user->fullname}}</title>
   	@include('frontend.layouts_light.styles')
</head>

<body>

    <!-- ===========================
    =====>> Top Preloader <<===== -->
  <!--   <div id="preloader">
        <div class="lds-css">
            <div class="preloader-3">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
   @include('frontend.layouts_light.top_header')

   @include('frontend.layouts_light.sidebarnav')

   @include('frontend.layouts_light.navbar')

   @yield('content') 

  @include('frontend.layouts_light.footer')

  @include('frontend.layouts_light.scripts')

  @yield('script')


</body>

</html>
