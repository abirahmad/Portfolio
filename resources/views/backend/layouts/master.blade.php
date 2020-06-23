<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>

  @include('backend.layouts.partials.styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/css/custom.css') }}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

       @include('backend.layouts.partials.header')
  
       @include('backend.layouts.partials.sidebar')

       @yield('content')

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

      @include('backend.layouts.partials.footer')
</div>
<!-- ./wrapper -->

      @include('backend.layouts.partials.scripts')
      @yield('scripts')
</body>
</html>
