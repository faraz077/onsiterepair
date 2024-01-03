
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
						<li><a href="technician-new-order">Active order</a></li>
						<li><a href="technician-complete-order">complete order</a></li>
						<li><a href="">Edit profile</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-10">
				<h4 class="m-3 text-danger">Completed Orders</h4>

				<table class="table">
					<tr>	<th>Sr#</th>
					<th>Client Name</th>
					<th>Phone Number</th>
					<th>Model</th>
					<th>Issue </th>
					<th>Price </th>
					<th>Location </th>
					<th>Status </th>
					<th><a href="#" class="btn btn-info text-white" >View</a> </th>
				</tr>

				<tr>	
					<td>1</td>
				<td>Sheikh Tlaha</td>
				<td>+9203239905077</td>
				<td>iPhone 14 pro Max</td>
				<td>Screen </td>
				<td>14400 <b>AED</b> </td>
				<td>Down Town </td>
				<td>Completed</td>
				<th><a href="#" class="btn btn-info text-white" >View</a> </th>
			</tr>
							<tr>	
					<td>1</td>
				<td>Sheikh Tlaha</td>
				<td>+9203239905077</td>
				<td>iPhone 14 pro Max</td>
				<td>Screen </td>
				<td>14400 <b>AED</b> </td>
				<td>Down Town </td>
				<td>Completed</td>
				<th><a href="#" class="btn btn-info text-white" >View</a> </th>
			</tr>
							<tr>	
					<td>1</td>
				<td>Sheikh Tlaha</td>
				<td>+9203239905077</td>
				<td>iPhone 14 pro Max</td>
				<td>Screen </td>
				<td>14400 <b>AED</b> </td>
				<td>Down Town </td>
				<td>Completed</td>
				<th><a href="#" class="btn btn-info text-white" >View</a> </th>
			</tr>
							<tr>	
					<td>1</td>
				<td>Sheikh Tlaha</td>
				<td>+9203239905077</td>
				<td>iPhone 14 pro Max</td>
				<td>Screen </td>
				<td>14400 <b>AED</b> </td>
				<td>Down Town </td>
				<td>Completed</td>
				<th><a href="#" class="btn btn-info text-white" >View</a> </th>
			</tr>
		</table>
		
	</div>
</div>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Development\xampp\htdocs\onsiterepair\resources\views/technician-completed-orderpage.blade.php ENDPATH**/ ?>