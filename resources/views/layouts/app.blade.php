<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('public/css/app.css')}}">
          <link rel="stylesheet" type="text/css" href="{{asset('public/slick/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/slick/slick-theme.css')}}">
        <!-- font- family -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app">
            <header>
                <div class="top-bar bg-dark">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <ul class="d-flex align-items-center justify-content-center">
                                    <li><a href="#">Call Now: 223 456 78900 </a></li>
                                    <li><a href="#">E-mail: support@onsiterepairs.com</a></li>
                                    <li><select name="" id="">
                                        <option value="">English</option>
                                        <option value="">Arbic</option>
                                    </select></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-main-bar">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <nav class="navbar navbar-expand-lg">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#"><img src="{{asset('public/img/header-logo.png')}}" alt=""></a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarScroll">
                                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="#">Repair a Device</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Buy a Device</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Sell a Device</a>

                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact Us</a>
                                                </li>
                                            </ul>
                                            <button class="sign-in-btn"><a href="">Sign in</a></button>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
                @yield('content')



         <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="column-1">
                            <div class="logo">
                                <img src="{{asset('public/img/white-logo.png')}}" alt="" >
                                <p class="about-footer">
                                    OnSiteRepairs is your go-to solution for convenient smartphone repairs. Our expert technicians come to your doorstep, offering quick and quality fixes for cracked screens, battery issues, and more. Say goodbye to the hassle of repair shops and hello to the future of on-the-spot phone repairs with OnSiteRepairs!
                                </p>
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <h3>Help</h3>
                        <ul>
                            <li><a href="#">Customer Support</a></li>
                            <li><a href="#">Delivery Details</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h3>SITE MAP</h3>
                        <ul>
                            <li><a href="#">Devices We Repair</a></li>
                            <li><a href="#">Solution</a></li>
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Career</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <select name="" id="">
                            <option value="english">English</option>
                        </select>
                    </div>
                </div>
            </div>

         </footer>



          <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
  <script src="{{asset('public/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow:4,
        slidesToScroll: 3
      });

      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script>

<!-- Add this script at the end of your Blade file, just before the closing body tag -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function(){
    // Hide sections initially
    $('.instant-form-two-section, .instant-form-three-section').hide();

    // When a device is selected, show the next section
    $('.instant-form-first-section .item').click(function(){
        $('.instant-form-first-section').hide();
        $('.instant-form-two-section').show();
    });

    // When a model is selected, show the next section
    $('.instant-form-two-section .item').click(function(){
        $('.instant-form-two-section').hide();
        $('.instant-form-three-section').show();
    });

    $('.instant-form-three-section .item').click(function(){
        var selectedIssue = $(this).find('h5').text();
        console.log('Selected Issue: ' + selectedIssue);
    });
});
</script>

    </body>
</html>
