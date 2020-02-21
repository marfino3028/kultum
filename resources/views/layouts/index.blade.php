<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/icon.png') }}" />
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/clean-blog.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-grid.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
  <link href='{{ asset('font/Lora:400,700,400italic,700italic') }}' rel='stylesheet' type='text/css'>
  <link href='{{ asset('font/OpenSans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') }}' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->

  <title>Kultum Santri Tahfidz Enterpreuneur</title>

</head>


<body style="background-color: #73c9ff;">
<!-- Navigation -->
  @include('layouts.navbar')

  <!-- Section -->
    @yield('main')
  <!-- End Section -->
  <!-- Footer -->
  <footer>
  @include('layouts.footer')
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/clean-blog.min.js') }}"></script>

</body>

</html>
