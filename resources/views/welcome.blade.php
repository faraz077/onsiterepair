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
				<div class="hero-content-section">
					<h1>
					We <span>repair your gadgets</span> at your doorstep
					</h1>
					<p>Is your smartphone, tablet, or laptop acting up? Don't worry, <span>OnSiteRepairs</span> got you covered. </p>
					
					<div class="get-aqoute">
						<div class="line"></div>
						<a href="">Get Qoute</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				
				<div class="hero-img-section">
					<img src="{{asset('img/hero-img.png')}}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- hero section ended  -->
<section class="three-step-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 d-flex align-items-center">
				<div class="left">
					<img class="img-fluid" src="{{asset('img/three-step-img.png')}}" alt="">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="right">
					<div class="line"></div>
					<h1>How <span>OnSiteRepairs</span> service works:</h1>
					<div class="item">
						<div class="item-top">
							<div class="bg-count"><h3>1</h3></div>
							<h2>Tell us what’s broke?</h2>
						</div>
						<p>Tell us the brand name, & model of your device. And let us know what happened to it.</p>
					</div>
					<div class="item">
						<div class="item-top">
							<div class="bg-count"><h3>2</h3></div>
							<h2>Tell us what’s broke?</h2>
						</div>
						<p>Tell us the brand name, & model of your device. And let us know what happened to it.</p>
					</div>
					<div class="item">
						<div class="item-top">
							<div class="bg-count"><h3>3</h3></div>
							<h2>Tell us what’s broke?</h2>
						</div>
						<p>Tell us the brand name, & model of your device. And let us know what happened to it.</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection