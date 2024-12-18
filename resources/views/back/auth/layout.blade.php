<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Meravi | Authentication</title>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('back/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('back/assets/lib/material-design-icons/css/material-design-iconic-font.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/assets/css/app.css') }}" type="text/css" />
</head>

<body class="be-splash-screen">
    @yield('auth')

    <script src="{{ asset('back/assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('back/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/assets/js/app.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
        });
    </script>
</body>

</html>
