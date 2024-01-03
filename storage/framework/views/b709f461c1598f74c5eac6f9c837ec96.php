<?php $__env->startSection('content'); ?>
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
            <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="contact-form-section">
                <h1 class="let-us-heading">Let us know about you!</h1>
                <form action="<?php echo e(route('contact-us.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>

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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\work1\onsiterepair\resources\views/contact-us.blade.php ENDPATH**/ ?>