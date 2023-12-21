<?php $__env->startSection('content'); ?>


<div class="thank-body">

<div class="thank-you-container">
    <img src="<?php echo e(asset('public/images/thank-you.png')); ?>" alt="Thank You Image" class="thank-you-image">
    <h2 class="thank-you-heading">Thank You for Your Purchase!</h2>
    <p class="thank-you-message">Your order has been successfully placed. Our customer care will contact you soon.</p>
    <a href="<?php echo e(url('/')); ?>" class="back-to-home">Back to Home</a>
</div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Development\xampp\htdocs\onsiterepair\resources\views/thank-you-page.blade.php ENDPATH**/ ?>