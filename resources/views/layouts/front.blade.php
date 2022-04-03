<!DOCTYPE html>
<html lang="en">

@include('layouts.inc.frontendheader')

<body>
    @include('layouts.inc.frontendnavbar')
    <div class="container-fluid py-4">
        @yield('main-content')
    </div>


  <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @if(session('status'))
      <script>
          swal("{{ session('status') }}");
      </script>
  @endif
  @yield('scripts')

</body>
</html>
