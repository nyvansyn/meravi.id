<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Beagle</title>
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
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
            App.dashboard();

        });
    </script>
</body>

</html>
