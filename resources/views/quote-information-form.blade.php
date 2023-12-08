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
	<form action="{{ route('instant-price-qoute.store') }}" id="contact-form" method="POST" class="form-horizontal" >
        @csrf
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="form">
					<h3>How do you want to get contacted?</h3>
					<ul class="checkbox-list">
                        <li class="active">
                            <label for="phone_radio"><input type="radio" id="phone_radio" name="contact_through" value="phone"> Phone</label>
                        </li>
                        <li>
                            <label for="whatsapp_radio"><input type="radio" id="whatsapp_radio" name="contact_through" value="whatsapp"> WhatsApp</label>
                        </li>
                        <li>
                            <label for="email_radio"><input type="radio" id="email_radio" name="contact_through" value="email"> Email</label>
                        </li>
                    </ul>
					<input type="text" name="customer_name" class="form-control input-text" placeholder="Full Name*" required>
					<input type="email" name="customer_email" class="form-control input-text" placeholder="Email Address*" required>
					<input type="text" name="customer_phone" class="form-control input-text" placeholder="Phone No.*" required>
					<input type="hidden" name="total_price" class="form-control input-text" value="{{ $totalPrice }}">
					<textarea name="message"  cols="70" rows="5" class="text-area-qoute" placeholder="Message (Optional)"></textarea>

                <div class="send-btn-main">
					<button type="submit" class="btn btn-warning send-me-qoute">Place Order</button>

                </div>
				</div>
			</div>
			<div class="col-lg-6 d-flex justify-content-end">
				<div class="qoute-information">
					<h3>Quote Information</h3>

					<ul class="main">
						<li class="item">
							<h5>
								Manufacturer:
							</h5>
							<h5>{{ $manufacturer->name }}</h5>
						</li>
                        <li class="item">
							<h5>
								Model:
							</h5>
							<h5>{{ $model->name }}</h5>
						</li>
					</ul>
                    @foreach ($issues as $issue)

					<ul class="main">
						<li class="item">
							<h6>
								Issue:
							</h6>
							<h6>{{ $issue->name }}</h6>
						</li>

						<li class="sub-item"><p>
								Price:
							</p>
							<p><strong>{{ $issue->price }} ADE</strong></p>
                       </li>

						<li class="sub-item">
							<p>
								Timeframe:
							</p>
							<p>{{ $issue->timeframe }}</p>
						</li>
						<li class="sub-item">
							<p>
								Warranty:
							</p>
							<p>{{ $issue->warranty }}</p>
						</li>

					</ul>
                    @endforeach

					<ul>	<li>
							<h6>
								Total Price:
							</h6>
							<h6>{{ $totalPrice }} ADE</h6>
						</li>
					</ul>
					<h6>Description:</h6>
					<p><span>Most Samsung Galaxy repairs are completed in an hour or two. We use premium parts and our technicians are expert trained. We also price match! Find another local shop with better pricing, we'll match it!</span></p>
					<h4 class="select-location">Selected Location</h4>
					<p>{{ $selectedLocation }}</p>
				</div>
			</div>
		</div>
	</div>
	</form>
</section>

<!-- get instant qoute ended  -->

@endsection
