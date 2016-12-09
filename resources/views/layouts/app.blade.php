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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Owl-carousel CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <!--external css-->
    <link href="css/simple-line-icons.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Circliful CSS -->
    <link href="css/jquery.circliful.css" rel="stylesheet" />
    <!--popups css-->
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/light-blue.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
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
    <!-- Back to top -->
    <a href="#" class="back-to-top"> <i class="fa fa-chevron-up"> </i> </a>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <!-- JavaScript
   ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- initialize jQuery Library -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!--sticky header-->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js"></script>
    <!-- owl-carousel -->
    <script src="js/owl.carousel.js"></script>
    <!-- Counter-up -->
    <script src="js/waypoints.min.js" type="text/javascript"></script>
    <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
    <!--popup js-->
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <!-- Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- cross browser -->
    <script type="text/javascript">
        window.requestAnimationFrame||(window.requestAnimationFrame=function(){return window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(n){window.setTimeout(n,1e3/60)}}());
    </script>
    <!-- EasyPieChart -->
    <script src="js/jquery.circliful.min.js"></script>
    <!-- Typed -->
    <script src="js/typed.js" type="text/javascript"></script>
    <!-- customizable plugin edit according to your needs -->
    <script src="js/app.js" type="text/javascript"></script>
</body>
</html>
