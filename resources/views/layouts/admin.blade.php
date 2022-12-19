<!DOCTYPE html>
<html lang="en">

@include('layouts.inc.adminheader')

<body class="g-sidenav-show  bg-gray-200">
    @include('layouts.inc.adminsidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        @include('layouts.inc.adminnavbar')

        <div class="container-fluid py-4">

            @yield('main-content')

        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="../admin/js/core/popper.min.js"></script>
    <script src="../admin/js/core/bootstrap.min.js"></script>
    <script src="../admin/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../admin/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../admin/js/plugins/multistep-form.js"></script>
    <script src="../admin/js/plugins/quill.min.js"></script>
    <script src="../admin/js/plugins/dropzone.min.js"></script>
    <script src="../admin/js/plugins/choices.min.js"></script>
    <script src="../admin/js/plugins/chartjs.min.js"></script>

    <script type="text/javascript" src="../admin/js/jquery.js"></script>
    <script type="text/javascript" src="../admin/js/plugins/jquery.mask.min.js"></script>
    <script type="text/javascript" src="../admin/js/rupiah.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/collect.js/4.34.3/collect.min.js" integrity="sha512-PMQSST5BbDOTPTzFifLEy01C6GUYDzWVN/+s0aopu70S6m7NPGeistFqL3EIQc8fMMzbiXULAybnI/gFV0p9LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        if (document.getElementById('choices-category')) {
            var element = document.getElementById('choices-category');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };
    </script>


    <script>

        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../admin/js/material-dashboard.min.js?v=3.0.0"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif

    @yield('scripts')

</body>

</html>
