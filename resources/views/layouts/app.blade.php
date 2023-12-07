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

        <style>
            #map {
                width: 100%;
                height: 300px;
                border-radius: 30px;
                box-shadow: 14px 12px 0px 0px rgba(0, 0, 0, 0.16);
            }
        </style>
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
                                        <a class="navbar-brand" href="/onsiterepair"><img src="{{asset('public/img/header-logo.png')}}" alt=""></a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarScroll">
                                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="/onsiterepair">Home</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="instant-price-qoute">Repair a Device</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="buy-device">Buy a Device</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="sell-device" tabindex="-1" aria-disabled="true">Sell a Device</a>

                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="about-us" tabindex="-1" aria-disabled="true">About Us</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="contact-us" tabindex="-1" aria-disabled="true">Contact Us</a>
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

  <!-- Add this script at the end of your Blade file, just before the closing body tag -->

<script>
$(document).ready(function(){
    // Hide sections initially
    $('.instant-form-two-section, .instant-form-three-section').hide();
    $('.instant-form-three-section, .instant-form-four-section').hide();
    $('.instant-form-four-section, .instant-form-five-section').hide();
    $('.qoute-form-section').hide();




    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.instant-form-first-section .item').click(function(){
    var device_id = $(this).data('device-id');

    // Ajax request to store device_id in session and get manufacturers
    $.ajax({
        url: '{{ route("store-device-in-session") }}',
        method: 'POST',
        data: { device_id: device_id },
        success: function(response) {
            console.log(response);

            // Update the HTML with the retrieved manufacturers
            var manufacturersContainer = $('#manufacturers-container');
            manufacturersContainer.empty(); // Clear existing content

            $.each(response.manufacturers, function(index, manufacturer) {
                var manufacturerHtml = '<div class="col-lg-3">';
                manufacturerHtml += '<div class="item" data-manufacturer-id="' + manufacturer.id + '">';
                manufacturerHtml += '<img src="{{ asset('public/images/manufacturers/') }}/' + manufacturer.image + '" alt="" class="img-fluid">';
                manufacturerHtml += '<h5>' + manufacturer.name + '</h5>';
                manufacturerHtml += '</div>';
                manufacturerHtml += '</div>';

                manufacturersContainer.append(manufacturerHtml);
            });

            $('.instant-form-first-section').hide(1000);
            $('.instant-form-two-section').show(1000);
            $('.instant-form-subheading').text('Select Company');
        },
        error: function(error) {
            console.error(error);
        }
    });
});



       // When a manu s selected, show the next section
$(document).on('click', '.instant-form-two-section .item', function(){
    var manufacturer_id = $(this).data('manufacturer-id'); // Assuming you have a data attribute for manufacturer_id

    // Ajax request to store manufacturer_id in session and get models
    $.ajax({
        url: '{{ route("store-manufacturer-in-session") }}',
        method: 'POST',
        data: { manufacturer_id: manufacturer_id },
        success: function(response) {
            console.log(response);

            // Update the HTML with the retrieved models
            var modelsContainer = $('#models-container');
            modelsContainer.empty(); // Clear existing content

            $.each(response.models, function(index, model) {
                var modelHtml = '<div class="col-lg-3">';
                modelHtml += '<div class="item" data-model-id="' + model.id + '">';
                modelHtml += '<img src="{{ asset('public/images/models/') }}/' + model.image + '" alt="" class="img-fluid">';
                modelHtml += '<h5>' + model.name + '</h5>';
                modelHtml += '</div>';
                modelHtml += '</div>';

                modelsContainer.append(modelHtml);
            });

            // Show the third section
            $('.instant-form-two-section').hide(1000);
            $('.instant-form-three-section').show(1000);
            $('.instant-form-subheading').text('Select Model');
        },
        error: function(error) {
            console.error(error);
        }
    });
});



           // When a model is selected, show the next section
$(document).on('click', '.instant-form-three-section .item', function(){
    var model_id = $(this).data('model-id');


    $.ajax({
        url: '{{ route("store-model-in-session") }}',
        method: 'POST',
        data: { model_id: model_id },
        success: function(response) {
            console.log(response);

            var issuesContainer = $('#issues-container');
            issuesContainer.empty(); // Clear existing content

            $.each(response.issues, function(index, issue) {
                var issueHtml = '<div class="col-lg-3">';
                issueHtml += '<div class="item" data-issue-id="' + issue.id + '">';
                issueHtml += '<img src="{{ asset('public/images/issues/') }}/' + issue.image + '" alt="" class="img-fluid">';
                issueHtml += '<h5>' + issue.name + '</h5>';
                issueHtml += '</div>';
                issueHtml += '</div>';

                issuesContainer.append(issueHtml);
            });

            // Show the forth section
            $('.instant-form-three-section').hide(1000);
            $('.instant-form-four-section').show(1000);
            $('.instant-form-subheading').text('Select Issue');
        },
        error: function(error) {
            console.error(error);
        }
    });
});


           // When a model is selected, show the next section
           $(document).on('click', '.instant-form-four-section .item', function(){
    var issue_id = $(this).data('issue-id');


    $.ajax({
        url: '{{ route("store-issue-in-session") }}',
        method: 'POST',
        data: { issue_id: issue_id },
        success: function(response) {
            console.log(response);

            // var issuesContainer = $('#issues-container');
            // issuesContainer.empty(); // Clear existing content

            // $.each(response.issues, function(index, issue) {
            //     var issueHtml = '<div class="col-lg-3">';
            //     issueHtml += '<div class="item" data-issue-id="' + issue.id + '">';
            //     issueHtml += '<img src="{{ asset('public/images/issues/') }}/' + issue.image + '" alt="" class="img-fluid">';
            //     issueHtml += '<h5>' + issue.name + '</h5>';
            //     issueHtml += '</div>';
            //     issueHtml += '</div>';

            //     issuesContainer.append(issueHtml);
            // });

            // Show the forth section
            $('.instant-form-four-section').hide(1000);
            $('.instant-form-five-section').show(1000);
            $('.instant-form-subheading').text('Select  Location');
            $('.line3').addClass('line');
        },
        error: function(error) {
            console.error(error);
        }
    });
});

        $('.instant-form-four-section .item').click(function(){
        $('.instant-form-first-section').hide(1000);
        $('.instant-form-two-section').hide(1000);
        $('.instant-form-three-section').hide(1000);
        $('.instant-form-four-section').hide(1000);
        $('.instant-form-five-section').show(1000);
        $('.instant-form-subheading').text('Select  Location');
        $('.line3').addClass('line');




    });
        $('.continue-btn').click(function(){
        $('.instant-form-five-section').hide(1000);
        $('.qoute-form-section').show(1000);
        $('.instant-form-subheading').text('Finaly Place the Order');

        $('.line3').addClass('line-after');



        });


       // When a model is selected, show the next section


    $('.instant-form-three-section .item').click(function(){
        var selectedIssue = $(this).find('h5').text();
        console.log('Selected Issue: ' + selectedIssue);
    });
});
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFr0neA3lI3Pn4h_NPcfqIDI1hnfryAns&libraries=places&callback=initMap" async defer></script>
<script>
    // Initialize the map
    function initMap() {
        // Default map coordinates (Sheikhupura)
        var defaultLocation = { lat: 31.7131, lng: 73.9783 };

        var map = new google.maps.Map(document.getElementById('map'), {
            center: defaultLocation,
            zoom: 12
        });

        // Initialize autocomplete for the location input
        var input = document.getElementById('locationInput');
        var autocomplete = new google.maps.places.Autocomplete(input);

        // Create a marker for the selected location
        var marker = new google.maps.Marker({
            map: map,
            title: 'Selected Location',
            icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png' // Use a red pin icon
        });

        // Listen for the place_changed event
        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace();

            if (place.geometry) {
                // Update the map center and marker position
                map.setCenter(place.geometry.location);
                marker.setPosition(place.geometry.location);

                // Use the Geocoding API to get the exact location name
                var geocoder = new google.maps.Geocoder;
                geocoder.geocode({ 'location': place.geometry.location }, function (results, status) {
                    if (status === 'OK') {
                        if (results[0]) {
                            // Update the input field with the exact location name
                            input.value = results[0].formatted_address;

                            // Display the location name in the list
                            var locationList = document.getElementById('locationList');
                            locationList.innerHTML = '<li class="item active"><h3>' + results[0].formatted_address + '</h3></li>';
                        }
                    }
                });
            }
        });

        // Function to handle getting the current location
        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function (position) {
                        var userLocation = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        // Set the map center to the user's location
                        map.setCenter(userLocation);
                        marker.setPosition(userLocation);

                        // Use the Geocoding API to get the exact location name
                        var geocoder = new google.maps.Geocoder;
                        geocoder.geocode({ 'location': userLocation }, function (results, status) {
                            if (status === 'OK') {
                                if (results[0]) {
                                    // Update the input field with the exact location name
                                    input.value = results[0].formatted_address;

                                    // Display the location name in the list
                                    var locationList = document.getElementById('locationList');
                                    locationList.innerHTML = '<li class="item active"><h3>' + results[0].formatted_address + '</h3></li>';
                                }
                            }
                        });
                    },
                    function (error) {
                        if (error.code === error.PERMISSION_DENIED) {
                            console.error('User denied Geolocation. Please enable location services and try again.');
                            // You can display a user-friendly message or prompt to enable location services here
                        } else {
                            console.error('Error getting location:', error.message);
                        }
                    }
                );
            } else {
                console.error('Geolocation is not supported by this browser.');
            }
        }

        // Attach the getCurrentLocation function to the button click event
        document.getElementById('getLocationBtn').addEventListener('click', getCurrentLocation);
    }
</script>



<!-- Include the Google Maps API script with the key -->

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



    </body>
</html>
