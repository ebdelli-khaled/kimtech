<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <meta name="description" content="">
    <meta name="author" content="Khaled Ebdelli">
    <link rel="shortcut icon" href="img/icon.ico">

    <!-- Google-Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Owl-carousel CSS -->
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Circliful CSS -->
    <link href="{{ asset('css/jquery.circliful.css') }}" rel="stylesheet" />
    <!--popups css-->
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/light-blue.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body data-spy="scroll" data-offset="80">

<!-- Preloader -->
<div class="animationload">
    <div class="loader">&nbsp;</div>
</div>
<!-- End Preloader -->
@include('layouts.home.menu')
@yield('content')

@if (Session::has('flash_message'))
    <div class="container">
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('flash_message') }}
        </div>
    </div>
@endif
    <!-- Back to top -->
    <a href="#" class="back-to-top"> <i class="fa fa-chevron-up"> </i> </a>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- JavaScript
   ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- initialize jQuery Library -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- jquery easing -->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--sticky header-->
    <script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('js/SmoothScroll.js') }}"></script>
    <!-- owl-carousel -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <!-- Counter-up -->
    <script src="{{ asset('js/waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <!--popup js-->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <!-- Parallax -->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <!-- cross browser -->
    <script type="text/javascript">
        window.requestAnimationFrame||(window.requestAnimationFrame=function(){return window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(n){window.setTimeout(n,1e3/60)}}());
    </script>
    <!-- EasyPieChart -->
    <script src="{{ asset('js/jquery.circliful.min.js') }}"></script>
    <!-- Typed -->
    <script src="{{ asset('js/typed.js') }}" type="text/javascript"></script>
    <!-- customizable plugin edit according to your needs -->
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
