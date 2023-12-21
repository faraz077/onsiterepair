<?php $__env->startSection('content'); ?>
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="pt-5 text-center licensed">We are licensed and accredited by Government of Dubai</h3>
			</div>
		</div>
	</div>
</section>

<!-- get instant code started  -->
<section class="instant-form-head-section">
	<div class="container instant-form-section">
		<div class="row">
			<div class="col-lg-12">
				<div class="instant-form-section">
					<div class="progress-bar-qoute d-flex justify-content-center align-items-center">
						<div class="line1"></div>
						<div class="line2"></div>
						<div class="line3"></div>
						<div class="line4"></div>

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
            <?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-6">
                    <div class="item" data-device-id="<?php echo e($device->id); ?>">
                        <img src="<?php echo e(asset('public/images/devices/' . $device->image)); ?>" alt="" class="img-fluid">
                        <h5><?php echo e($device->name); ?></h5>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</section>
<section class="instant-form-two-section" style="display: none;">
    <div class="container">

        <div class="row" id="manufacturers-container">
            <!-- Manufacturers will be dynamically added here -->
        </div>
    </div>
</section>
<section class="instant-form-three-section" style="display: none;">
    <div class="container">
        
        <div class="row" id="models-container">
            <!-- Models will be dynamically added here -->
        </div>
    </div>
</section>

<section class="instant-form-four-section" style="display: none;">
    <div class="container">
   
        <div class="row" id="issues-container">
            <!-- issues will be dynamically added here -->
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-4">
            <button class="btn btn-warning continue-issue-btn">Continue</button>
        </div>
    </div>
</section>


<section class="select-location instant-form-five-section">
	<div class="container">

		<div class="row">
	
			<div class="col-lg-6">
				<form action="">
					<div class="location">
						<button type="button" id="getLocationBtn" class="current-location-btn btn" title="Current Location">
							<p>
								Select Your Current Location
							</p><img src="<?php echo e(asset('public/img/current-location.webp')); ?>" alt=""></button>
						<!-- <label for=""><i class="fa fa-map-marker" aria-hidden="true"></i></label> -->
						<input type="text" id="locationInput" placeholder="Select your current location" class="form-control">
						
					</div>
					
				</form>
			</div>
			<div class="col-lg-6 d-flex justify-content-center">
				<div id="map"></div>
			</div>
		</div>
		<div class="row d-flex justify-content-center pt-5">
			<div class="col-lg-4">
				<button class="btn btn-warning continue-btn">Continue</button>
			</div>
		</div>
	</div>
</section>



<!-- hero section started -->
<section class="hero-section mt-5 repair-page-section">
	<div class="container-fluid">

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
					<img src="<?php echo e(asset('public/img/repair-done-fast.png')); ?>" alt="" class="img-fluid">
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
					<img src="<?php echo e(asset('public/img/what-we-repair.png')); ?>" alt="" class="right-img-repair">
					<img src="<?php echo e(asset('public/img/what-we-repair-shadow.png')); ?>" alt="" class="right-img-repair-shadow">

				</div>
			</div>
		</div>
	</div>
</section>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Development\xampp\htdocs\onsiterepair\resources\views/instant-price-qoute.blade.php ENDPATH**/ ?>