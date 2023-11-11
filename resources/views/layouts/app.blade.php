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
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <!-- font- family -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
                                        <a class="navbar-brand" href="#"><img src="{{asset('img/header-logo.png')}}" alt=""></a>
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
    
                @yield('content')
         
        </div>
    </body>
</html>