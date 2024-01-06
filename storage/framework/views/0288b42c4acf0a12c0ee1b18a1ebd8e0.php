<?php $__env->startSection('content'); ?>
<!-- hero section started -->
<section class="technician-sections">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="technician-topbar row">
					<div class="left col-lg-6 d-flex align-items-center">
						<h4><b>Hi </b> Faraz!</h4>
					</div>
					<div class="right col-lg-6 d-flex justify-content-end">
						<a href="#">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 m-0 p-0">
				<div class="left-sidebar">
					<h3>Orders Detail</h3>
					<ul>
						<li><a href="technician">dashboard</a></li>
						<li><a href="<?php echo e(route('technician-new-order')); ?>">Active orders</a></li>
						<li><a href="<?php echo e(route('technician-complete-order')); ?>">completed orders</a></li>
						<li><a href="">Edit profile</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-10">
				<h4 class="m-3 text-danger">Completed Orders</h4>

				<table class="table">
					<tr>
                        <th>Sr#</th>
                        <th>Client Name</th>
                        <th>Phone Number</th>
                        <th>Device</th>
                        <th>Model</th>
                        <th>Price </th>
                        <th>Status </th>
                        <th>Action </th>
				    </tr>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($order->customer_name); ?></td>
                        <td><?php echo e($order->customer_phone); ?></td>
                        <td><?php echo e($order->device->name); ?></td>
                        <td><?php echo e($order->model->name); ?></td>
                        <td><?php echo e($order->total_price); ?> <b>AED</b> </td>
                        <td><?php echo e($order->status); ?></td>
                        <th><a href="<?php echo e(route('technician-order-detail', $order->id)); ?>" class="btn btn-info text-white" >View</a> </th>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </table>

	</div>
</div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\work1\onsiterepair\resources\views/technician-completed-orderpage.blade.php ENDPATH**/ ?>