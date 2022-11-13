<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
      @yield('title')
    </title>

    <!-- CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ asset('frontend/css/nucleo-icons.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/material-kit-pro.min.css') }}" rel="stylesheet">

    {{-- owl carousel --}}
    <link id="pagestyle" href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet" />

    {{-- Custom CSS --}}
    <link id="pagestyle" href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" />

  </head>
