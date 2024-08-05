<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Meravi.id | Dashboard Admin</title>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('back/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('back/assets/lib/material-design-icons/css/material-design-iconic-font.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('back/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/lib/jqvmap/jqvmap.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('back/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/assets/css/app.css') }}" type="text/css" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('back/assets/lib/datatables/datatables.net-bs4/dataTables.bootstrap4.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('back/assets/lib/datatables/datatables.net-responsive-bs4/responsive.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/lib/summernote/summernote-bs4.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/lib/select2/css/select2.min.css') }}" />
    @stack('css')
</head>

<body>
    <div class="be-wrapper be-fixed-sidebar">
        @include('back.layouts.navbar')
        @include('back.layouts.sidebar')
        <div class="be-content">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('back/assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('back/assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/jquery-flot/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/jquery-flot/jquery.flot.pie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/jquery-flot/jquery.flot.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/jquery-flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/jquery-flot/jquery.flot.orderBars.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/jquery-flot/curvedLines.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/jquery-flot/jquery.flot.tooltip.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/jquery.sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/countup/countUp.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/jqvmap/jquery.vmap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/jqvmap/jquery.vmap.world.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/datatables/datatables.net/jquery.dataTables.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('back/assets/lib/datatables/datatables.net-bs4/dataTables.bootstrap4.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/datatables/datatables.net-buttons/dataTables.buttons.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/datatables/datatables.net-buttons/buttons.flash.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/datatables/jszip/jszip.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/datatables/pdfmake/pdfmake.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/datatables/pdfmake/vfs_fonts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/datatables/datatables.net-buttons/buttons.colVis.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/datatables/datatables.net-buttons/buttons.print.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/datatables/datatables.net-buttons/buttons.html5.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/datatables/datatables.net-buttons-bs4/buttons.bootstra') }}p4.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/datatables/datatables.net-responsive/dataTables.responsive.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/datatables/datatables.net-responsive-bs4/responsive.bootstrap4.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/summernote/summernote-bs4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/summernote/summernote-ext-beagle.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
            App.dashboard();
            App.textEditors();
        });
    </script>
    @stack('js')

</body>

</html>
