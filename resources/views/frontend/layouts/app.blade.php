<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>I-news</title>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/images/ico/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">

    <!--Google fonts-->
    <link href="{{asset('frontend/fonts.googleapis.com/css2c4ad.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap')}}" rel="stylesheet">
    <link href="{{asset('frontend/fonts.googleapis.com/css27230.css?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&amp;display=swap')}}" rel="stylesheet">
    <link href="{{asset('frontend/fonts.googleapis.com/css2eb94.css?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap')}}" rel="stylesheet">
    <!-- jquery ui css -->
    <link href="{{asset('frontend/plugins/jqueryui/jquery-ui.min.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('frontend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--Animate css-->
    <link href="{{asset('frontend/plugins/animate.css/animate.min.css')}}" rel="stylesheet">
    <!-- Navigation css-->
    <link href="{{asset('frontend/plugins/bootsnav/css/bootsnav.min.css')}}" rel="stylesheet">
    <!-- youtube css -->
    <link href="{{asset('frontend/css/RYPP.css')}}" rel="stylesheet">
    <!-- font awesome -->
    <link href="{{asset('frontend/plugins/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <!-- themify-icons -->
    <link href="{{asset('frontend/plugins/themify-icons/themify-icons.css')}}" rel="stylesheet">
    <!-- weather-icons -->
    <link href="{{asset('frontend/plugins/weather-icons/css/weather-icons.min.css')}}" rel="stylesheet">
    <!-- Important Owl stylesheet -->
    <link href="{{asset('frontend/plugins/OwlCarousel2/css/owl.carousel.min.css')}}" rel="stylesheet">
    <!-- Default Theme -->
    <link href="{{asset('frontend/plugins/OwlCarousel2/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- style css -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <!--Style selector-->
    <link href="{{asset('frontend/plugins/style-selector/style_selector.css')}}" rel="stylesheet">
</head>
<body>
<!-- PAGE LOADER -->
<div class="se-pre-con"></div>
<!-- *** START PAGE HEADER SECTION *** -->
@include('frontend.layouts.header')

<!-- *** END OF /. PAGE HEADER SECTION *** -->
<!-- *** START PAGE MAIN CONTENT *** -->
@yield('content')
<!-- *** END OF /. PAGE MAIN CONTENT *** -->
<!-- *** START FOOTER *** -->
@include('frontend.layouts.footer')
<!-- *** END OF /. FOOTER *** -->
<!-- *** START SUB FOOTER *** -->

<!-- *** END OF /. SUB FOOTER *** -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('frontend/plugins/jquery/jquery.js')}}"></script>
<!-- jquery ui js -->
<script src="{{asset('frontend/plugins/jqueryui/jquery-ui.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Bootsnav js -->
<script src="{{asset('frontend/plugins/bootsnav/js/bootsnav.min.js')}}"></script>
<!-- theia sticky sidebar -->
<script src="{{asset('frontend/plugins/theia-sticky-sidebar/ResizeSensor.min.js')}}"></script>
<script src="{{asset('frontend/plugins/theia-sticky-sidebar/theia-sticky-sidebar.min.js')}}"></script>
<!-- youtube js -->
<script src="{{asset('frontend/plugins/youtube-player/js/RYPP.js')}}"></script>
<!-- owl include js plugin -->
<script src="{{asset('frontend/plugins/OwlCarousel2/owl.carousel.min.js')}}"></script>
<!-- skycons plugin -->
<script src="{{asset('frontend/plugins/skycons/skycons.js')}}"></script>
<!-- custom js -->
<script src="{{asset('frontend/js/custom.js')}}"></script>
<!--Style selector-->
<script src="{{asset('frontend/plugins/style-selector/style_selector.js')}}"></script>

<!--Purchase button-->

</body>
</html>
