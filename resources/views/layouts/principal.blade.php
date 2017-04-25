<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tarreo Inacap</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Icon -->
    <link rel="icon" type="image/png" href="images/icon.png">
    <!-- Google Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/css/bootstrap.min.css" />

    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="bower_components/font-awesome/css/font-awesome4.min.css" />

    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
    <!-- Youplay -->

    <link rel="stylesheet" type="text/css" href="youplay/css/youplay.min.css" />


    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="css/custom.css" />

    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap-sweetalert/lib/sweet-alert.css" />
    <!-- RTL (uncomment this to enable RTL support) -->
    <!-- <link rel="stylesheet" type="text/css" href="../assets/youplay/css/youplay-rtl.css" /> -->

</head>


<body>

<!-- Preloader -->
<div class="page-preloader preloader-wrapp" id="cargando">
    <img src="images/logo.png" alt="">
    <div class="preloader"></div>
</div>
<!-- /Preloader -->

<!-- HEADER -->
@include('layouts.header')
<!--/HEADER -->


<!-- Main Content -->
<section class="content-wrap">

    @yield('content')

    @include('layouts.footer')

</section>
<!-- /Main Content -->

<!-- Search Block -->
<div class="search-block">
    <a href="#!" class="search-toggle glyphicon glyphicon-remove"></a>
    <form action="http://html.nkdev.info/youplay/dark/search.html">
        <div class="youplay-input">
            <input type="text" name="search" placeholder="Search...">
        </div>
    </form>
</div>
<!-- /Search Block -->

<!-- jQuery -->
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>

<!-- Hexagon Progress -->
<script type="text/javascript" src="bower_components/HexagonProgress/jquery.hexagonprogress.min.js"></script>


<!-- Bootstrap -->
<script type="text/javascript" src="bower_components/bootstrap/js/bootstrap.min.js"></script>

<!-- Jarallax -->
<script type="text/javascript" src="bower_components/jarallax/dist/jarallax.min.js"></script>

<!-- Smooth Scroll -->
<script type="text/javascript" src="bower_components/smoothscroll-for-websites/SmoothScroll.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Countdown -->
<script type="text/javascript" src="bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>
<!-- Youplay -->
<script type="text/javascript" src="youplay/js/youplay.min.js"></script>
<script type="text/javascript" src="bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
<script type="text/javascript" src="js/rut.js"></script>
<script type="text/javascript" src="js/tarreo.js"></script>

<!-- init youplay -->
<script>
    if(typeof youplay !== 'undefined') {
        youplay.init({
            // enable parallax
            parallax:         true,

            // set small navbar on load
            navbarSmall:      false,

            // enable fade effect between pages
            fadeBetweenPages: true,

            // twitter and instagram php paths
            php: {
                twitter: './php/twitter/tweet.php',
                instagram: './php/instagram/instagram.php'
            }
        });
    }
</script>


<script type="text/javascript">
    $(".countdown").each(function() {
        $(this).countdown($(this).attr('data-end'), function(event) {
            $(this).text(
                event.strftime('%D days %H:%M:%S')
            );
        });
    })
</script>

</body>
</html>
