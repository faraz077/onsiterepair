@extends('layouts.app')
@section('content')




<!-- hero section started -->
<section class="hero-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="p-5 text-center licensed">We are licensed and accredited by Government of Dubai</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 d-flex align-items-center">
				<div class="hero-content-section repair-done-fast">
					<h1>
					Repair <br> <span>done </span> fast
					</h1>
					<p><span>OnSiteRepairs</span> is your go-to solution for convenient smartphone repairs. Our expert technicians come to your doorstep, offering quick and quality fixes for cracked screens, battery issues, and more.</p>

				
				</div>
			</div>
			<div class="col-lg-6">

				<div class="hero-img-section">
					<img src="{{asset('public/img/repair-done-fast.png')}}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- what we repair section -->
<section class="what-we-repair our-common-repair">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 d-flex align-items-center">
			<div class="left">
			<div class="heading-section">
				<div class="line"></div>
				<br>
				<h1>Our most common repairs</h1>
			</div>

				<div class="list">
					<ul>
					<li><a href="#">Microphone Repair</a></li>
					<li><a href="#">Camera Repair</a></li>
					<li><a href="#">Screen Repair</a></li>
					<li><a href="#">Button Repair</a></li>
					<li><a href="#">Battery Repair</a></li>
				</ul>

					<ul>
					<li><a href="#">Front Glass Repair</a></li>
					<li><a href="#">Rear Glass Repair</a></li>
					<li><a href="#">Charging Port Repair</a></li>
					<li><a href="#">Speaker Repair</a></li>
				</ul>
				</div>
			</div>


		</div>
		<div class="col-lg-6 p-0 d-flex justify-content-end">
			<div class="right">
				<img src="{{asset('public/img/what-we-repair.png')}}" alt="" class="right-img-repair">
				<img src="{{asset('public/img/what-we-repair-shadow.png')}}" alt="" class="right-img-repair-shadow">

				
			</div>
		</div>
	</div>
</div>

</section>
<section class="instant-form-head-section">
<div class="container instant-form-section">
	<div class="row">
		<div class="col-lg-12">
			<div class="instant-form-section">
				<div class="progress-bar-qoute d-flex justify-content-center align-items-center">
					<div class="line"></div>
					<div class="line2"></div>
					<div class="line3"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<h2 class="get-heading">Get instant price quote</h2>
			<h6 class="device-dec mt-3">Select your device</h6>
		</div>
	</div>

</div>
</section>

<section class="instant-form-first-section">
<h3>Select your device</h3>

	<div class="container">

	<div class="row">
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/devices/laptop.png')}}" alt="" class="img-fluid">
				<h5>Laptop</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/devices/mobiles.png')}}" alt="" class="img-fluid">
				<h5>Smart Phones</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/devices/airbuds.png')}}" alt="" class="img-fluid">
				<h5>Ear Buds</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/devices/tablets.png')}}" alt="" class="img-fluid">
				<h5>Tablets</h5>
			</div>
		</div>
	</div>
	</div>
</section>


<section class="instant-form-two-section">
<h3>select model</h3>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h6>Smart Phones <i class="	fa fa-angle-right"></i></h6>
			</div>
		</div>

	<div class="row">
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/manufacturers/Apple.png')}}" alt="" class="img-fluid">
				<h5>Laptop</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/manufacturers/Google.png')}}" alt="" class="img-fluid">
				<h5>Smart Phones</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/manufacturers/Huawei.png')}}" alt="" class="img-fluid">
				<h5>Ear Buds</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/manufacturers/Motorola.png')}}" alt="" class="img-fluid">
				<h5>Tablets</h5>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/manufacturers/Nokia.png')}}" alt="" class="img-fluid">
				<h5>Laptop</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/manufacturers/One-Plus.png')}}" alt="" class="img-fluid">
				<h5>Smart Phones</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/manufacturers/Oppo.png')}}" alt="" class="img-fluid">
				<h5>Ear Buds</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/manufacturers/Other.png')}}" alt="" class="img-fluid">
				<h5>Tablets</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/manufacturers/Samsung.png')}}" alt="" class="img-fluid">
				<h5>Tablets</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/manufacturers/Xiaomi.png')}}" alt="" class="img-fluid">
				<h5>Tablets</h5>
			</div>
		</div>
	</div>


	</div>
</section>


<section class="instant-form-three-section">
<h3>select issue</h3>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 d-flex">
				<h6 class="m-2">Smart Phones <i class="	fa fa-angle-right"></i></h6>
				<h6 class="m-2">Samsung <i class="	fa fa-angle-right"></i></h6>
				<h6 class="m-2 breadcrums-phone">Galaxy S22 <i class="	fa fa-angle-right"></i></h6>


			</div>
		</div>

	<div class="row">
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/issues/battery-2.png')}}" alt="" class="img-fluid">
				<h5>Screen</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/issues/camera.png')}}" alt="" class="img-fluid">
				<h5>Back Camera</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/issues/front-camera.png')}}" alt="" class="img-fluid">
				<h5>Front Camera</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/issues/heat.png')}}" alt="" class="img-fluid">
				<h5>Charging Pin</h5>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/issues/password.png')}}" alt="" class="img-fluid">
				<h5>Battery</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/issues/power-off.png')}}" alt="" class="img-fluid">
				<h5>Virus</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/issues/smartphone.png')}}" alt="" class="img-fluid">
				<h5>Not Turning On</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/issues/virus.png')}}" alt="" class="img-fluid">
				<h5>Over Heating</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/issues/warning.png')}}" alt="" class="img-fluid">
				<h5>Forgot Password</h5>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="item">
				<img src="{{ asset('public/images/issues/wire.png')}}" alt="" class="img-fluid">
				<h5>Other issue</h5>
			</div>
		</div>
	</div>
<div class="row d-flex justify-content-center">
	<div class="col-lg-4">
		<button class="btn btn-warning continue-btn">Continue</button>
	</div>
</div>

	</div>
</section>







@endsection
