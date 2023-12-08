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
			<div class="col-lg-6 d-flex align-items-center">
				<div class="hero-content-section repair-done-fast">
					<h1>
					<span>Get in  </span>touch <br><span>with us </span>
					</h1>
					<p>You Must be Looking for Professional and Affordable Repair Services. We’re here to help you with all types of phones, laptops, tablets, and computers.
					</p><p>Contact us and tell us about the problem your device is experiencing. We’ll be at your service as soon as possible.</p>

				</div>
			</div>
			<div class="col-lg-6">
			<!-- resources/views/contact.blade.php -->
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="contact-form-section">
                <h1 class="let-us-heading">Let us know about you!</h1>
                <form action="{{ route('contact-us.store') }}" method="post">
                    @csrf

                    <input type="text" name="name" class="form-control text-input" placeholder="Full Name*" required>
                    <input type="email" name="email" class="form-control text-input" placeholder="Email*" required>
                    <input type="phone" name="phone" class="form-control text-input" placeholder="Phone Number*" required>

                    <input type="text" name="address" class="form-control text-input" placeholder="Address">

                    <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
                    <br>

                    <div class="g-recaptcha" data-sitekey="6LeM054nAAAAALK522mBuRuKEph_wYtW5I1R8f7l"></div>

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
