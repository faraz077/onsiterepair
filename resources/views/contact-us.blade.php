@extends('layouts.app')
@section('content')
<!-- hero section started -->
<section class="hero-section  buy-device-banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="p-5 text-center licensed">We are licensed and accredited by Government of Dubai</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 d-flex align-items-center">
				<div class="hero-content-section repair-done-fast">
					<h1>
					<span>Get in  </span>touch  <br><span>with us </span> 
					</h1>
					<p>You Must be Looking for Professional and Affordable Repair Services. We’re here to help you with all types of phones, laptops, tablets, and computers.  
					</p><p>Contact us and tell us about the problem your device is experiencing. We’ll be at your service as soon as possible.</p>
					
				</div>
			</div>
			<div class="col-lg-4">
			<div class="contact-form-section">
				<h1 class="let-us-heading">Let us know about you!</h1>
				<form action="">
					<input type="text" class="form-control text-input" placeholder="Full Name*">
					<input type="Email" class="form-control text-input" placeholder="Email*">
					<select name="" id="" class="form-control">
						<option value="">Dubai</option>
						<option value="">Saudia</option>
						<option value="">Oman</option>
					</select>
					<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
 			       <div class="send-btn-section">
 			       	 <input type="submit" value="send" class="send-btn">
 			       </div>
				</form>
			</div>
			</div>
		</div>
	</div>
</section>


@endsection