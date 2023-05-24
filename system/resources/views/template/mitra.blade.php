@php

function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Si Masbro Politap</title>
    <link href="{{ url('public/admin') }}/dist/img/ti.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url('public/mitra') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
        href="{{ url('public/mitra') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ url('public/mitra') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('public/mitra') }}/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{ url('public/mitra') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ url('public/mitra') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{ url('public/mitra') }}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ url('public/mitra') }}/plugins/summernote/summernote-bs4.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('public/mitra') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet"
        href="{{ url('public/mitra') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ url('public/mitra') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <link rel="stylesheet" href="{{ url('public/mitra') }}/plugins/summernote/summernote-bs4.css">

    <script src="{{ url('public/mitra') }}/validator/assets/assets/js/lib/jquery-2.1.3.min.js"></script>
    <script src="{{ url('public/mitra') }}/validator/node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="{{ url('public/mitra') }}/validator/node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ url('public/mitra') }}/validator/assets/assets/validator/validator.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layout.mitra.header')
        @include('layout.mitra.sidebar')

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                    </div>
                </div>
            </div>

            <section class="content">
                <div class="row">
                    <section class="col-lg-12">
                        <div class="">
                            @yield('content')
                        </div>
                    </section>
                </div>
            </section>
        </div>

        @include('layout.mitra.footer')
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>



    <script src="{{ url('public/mitra') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ url('public/mitra') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/chart.js/Chart.min.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/sparklines/sparkline.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <script src="{{ url('public/mitra') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ url('public/mitra') }}/dist/js/adminlte.js"></script>
    <script src="{{ url('public/mitra') }}/dist/js/pages/dashboard.js"></script>
    <script src="{{ url('public/mitra') }}/dist/js/demo.js"></script>

    <script src="{{ url('public/mitra') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('public/mitra') }}/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script src="{{ url('public/mitra') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- Page Script -->
    <script>
        $(function() {
            $('.summernote').summernote({
                height: 300
            })
        })
    </script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
