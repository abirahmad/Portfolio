<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIN - Personal Portfolio HTML Template</title>
    @include('frontend.layouts_dark.styles')
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
   @include('frontend.layouts_dark.top_header')

   @include('frontend.layouts_dark.sidebarnav')

   @include('frontend.layouts_dark.navbar')

   @yield('content') 
   
   @include('frontend.layouts_dark.footer')
    <!-- =====>> scrolltop <<===== 
    =========================== -->
    <a class="scrollsTop" href="#"><i class="fas fa-caret-up"></i></a>

    <!-- =====>> End scrolltop <<===== 
    =========================== -->


  @include('frontend.layouts_dark.scripts')


</body>

</html>