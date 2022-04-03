<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
      @yield('title')
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" />

    <link id="pagestyle" href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <style>
      a{
        text-decoration: none !important;
      }
    </style>
  </head>
