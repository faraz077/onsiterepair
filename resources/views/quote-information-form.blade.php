@extends('layouts.app')
@section('content')

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

					<ul class="main">
						<li class="item">
							<h5>
								Device:
							</h5>
							<h5>iPhone Pro Max</h5>
						</li>
					</ul>
					<ul class="main">
						<li class="item">
							<h6>
								Issue:
							</h6>
							<h6>Screen Repair</h6>
						</li>

						<li class="sub-item"><p>
								Price:
							</p>
							<p><strong>600 ADE</strong></p>
                       </li>
			
						<li class="sub-item">
							<p>
								Timeframe:
							</p>
							<p>3 Hours</p>
						</li>
						<li class="sub-item">
							<p>
								Warranty:
							</p>
							<p>1 year</p>
						</li>
				
					</ul>
								<ul class="main">
						<li class="item">
							<h6>
								Issue:
							</h6>
							<h6>On / Off Button</h6>
						</li>

						<li class="sub-item"><p>
								Price:
							</p>
							<p><strong>600 ADE</strong></p>
                       </li>
						<li class="sub-item">
							<p>
								Timeframe:
							</p>
							<p>3 Hours</p>
						</li>
						<li class="sub-item">
							<p>
								Warranty:
							</p>
							<p>1 year</p>
						</li>
				
					</ul>


					<ul>	<li>
							<h6>
								Total Price:
							</h6>
							<h6>1200 ADE</h6>
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

@endsection