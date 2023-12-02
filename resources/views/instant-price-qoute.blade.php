@extends('layouts.app')
@section('content')


<!-- get instant code started  -->
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
				<h6 class="device-dec mt-3 instant-form-subheading">Select your device</h6>
			</div>
		</div>
	</div>
</section>
<section class="instant-form-first-section">
	<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Smart Phones <i class="fa fa-angle-right"></i></h6>
            </div>
        </div>
        <div class="row">
            @foreach($devices as $device)
                <div class="col-lg-3">
                    <div class="item" data-device-id="{{ $device->id }}">
                        <img src="{{ asset('public/images/devices/' . $device->image)}}" alt="" class="img-fluid">
                        <h5>{{ $device->name }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
<section class="instant-form-two-section" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Select Company <i class="fa fa-angle-right"></i></h6>
            </div>
        </div>
        <div class="row" id="manufacturers-container">
            <!-- Manufacturers will be dynamically added here -->
        </div>
    </div>
</section>
<section class="instant-form-three-section" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Select Model <i class="fa fa-angle-right"></i></h6>
            </div>
        </div>
        <div class="row" id="models-container">
            <!-- Models will be dynamically added here -->
        </div>
    </div>
</section>

<section class="instant-form-four-section" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Select Issue <i class="fa fa-angle-right"></i></h6>
            </div>
        </div>
        <div class="row" id="issues-container">
            <!-- issues will be dynamically added here -->
        </div>
    </div>
</section>

<section class="select-location instant-form-five-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-3">
				<form action="">
					<div class="location">
						<label for=""><i class="fa fa-map-marker" aria-hidden="true"></i></label>
						<input type="text" placeholder="Enter you location" class="form-control">
					</div>
					<ul class="google-list">
						<li class="item active">
							<h1>Brooklyn</h1>
							<p>53 W 36TH ST NEW YORK NY 10018-7680 USA</p>
						</li>
						<li class="item">
							<h1>Brooklyn</h1>
							<p>53 W 36TH ST NEW YORK NY 10018-7680 USA</p>
						</li>
						<li class="item">
							<h1>Brooklyn</h1>
							<p>53 W 36TH ST NEW YORK NY 10018-7680 USA</p>
						</li>
						<li class="item">
							<h1>Brooklyn</h1>
							<p>53 W 36TH ST NEW YORK NY 10018-7680 USA</p>
						</li>
						<li class="item">
							<h1>Brooklyn</h1>
							<p>53 W 36TH ST NEW YORK NY 10018-7680 USA</p>
						</li>

					</ul>
				</form>
			</div>
			<div class="col-lg-7 d-flex justify-content-center pt-5">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462561.6574537445!2d55.22748795!3d25.076022449999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1701217557531!5m2!1sen!2s" width="600" height="450" style="border:0;border-radius: 30px; box-shadow: 14px 12px 0px 0px rgba(0, 0, 0, 0.16);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col-lg-4">
				<button class="btn btn-warning continue-btn">Continue</button>
			</div>
			<br>
			<br>

		</div>
	</div>
</section>
<section class="qoute-form-section">
	<form action="">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="form">
					<h3>How do you want your quote delivered?</h3>
					<ul class="checkbox-list">
						<li class="active"><label for=""><input type="checkbox"> SMS text (instant)</label></li>
						<li><label for=""><input type="checkbox"> Email (instant)</label></li>
						<li><label for=""><input type="checkbox"> Phone Call</label></li>
					</ul>
					<input type="text" class="form-control input-text" placeholder="Full Name*">
					<input type="text" class="form-control input-text" placeholder="Email Address*">
					<input type="text" class="form-control input-text" placeholder="Phone No.">
					<textarea name="" id="" cols="70" rows="5" class="text-area-qoute">Message (Optional)</textarea>

<div class="send-btn-main">
					<input type="submit" value="Send me the quote" class="btn btn-warning send-me-qoute">

</div>
				</div>
			</div>
			<div class="col-lg-6 d-flex justify-content-end">
				<div class="qoute-information">
					<h3>Quote Information</h3>
					<ul>
						<li>
							<h6>
								Device:
							</h6>
							<h6>Galaxy J7 Pro</h6>
						</li>
						<li>
							<p>
								Problem:
							</p>
							<h6>Screen Repair</h6>
						</li>
						<li>
							<p>
								Timeframe:
							</p>
							<h6>3 Hours</h6>
						</li>
						<li>
							<p>
								Warranty:
							</p>
							<h6>1 year</h6>
						</li>
						<li>
							<p>
								Price:
							</p>
							<h6>600 ADE</h6>
						</li>

					</ul>
					<h6>Description:</h6>
					<p><span>Most Samsung Galaxy repairs are completed in an hour or two. We use premium parts and our technicians are expert trained. We also price match! Find another local shop with better pricing, we'll match it!</span></p>
					<h4 class="select-location">Selected Location</h4>
					<p>Mr Fix Brooklyn
154 Montague St 1 floor, Brooklyn, NY 11201
+13472153077</p>
				</div>
			</div>
		</div>
	</div>
	</form>
</section>

<!-- get instant qoute ended  -->


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




@endsection
