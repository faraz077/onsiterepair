<?php $__env->startSection('content'); ?>
<!--  PAPER WRAP -->
<div class="wrap-fluid" style="width: auto; margin-left: 250px;">
	<div class="container-fluid paper-wrap bevel tlbr">
		<!-- CONTENT -->
		<!--TITLE -->
		<div class="row">
			<div id="paper-top">
				<div class="col-sm-3">
					<h2 class="tittle-content-header">
					<i class="icon-map"></i>
					<span>Add Technician
					</span>
					</h2>
				</div>
				<div class="col-sm-7">
					<div class="devider-vertical visible-lg"></div>
					<div class="tittle-middle-header">
						<div class="alert">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<span class="tittle-alert entypo-info-circled"></span>
							Welcome back,&nbsp;
							<strong>Admin!</strong>
						</div>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="devider-vertical visible-lg"></div>
					<div class="btn-group btn-wigdet pull-right visible-lg">
						<div class="btn">
						Widget</div>
						<button data-toggle="dropdown" class="btn dropdown-toggle" type="button">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul role="menu" class="dropdown-menu">
							<li>
								<a href="#">
									<span class="entypo-plus-circled margin-iconic"></span>Add New</a>
								</li>
								<li>
									<a href="#">
										<span class="entypo-heart margin-iconic"></span>Favorite</a>
									</li>
									<li>
										<a href="#">
											<span class="entypo-cog margin-iconic"></span>Setting</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--/ TITLE -->
					<!-- BREADCRUMB -->
					<ul id="breadcrumb">
						<li>
							<span class="entypo-home"></span>
						</li>
						<li><i class="fa fa-lg fa-angle-right"></i>
						</li>
						<li><a href="#" title="Sample page 1">dashboard</a>
					</li>
					<li><i class="fa fa-lg fa-angle-right"></i>
					</li>
					<li><a href="<?php echo e(route('reg-technician.create')); ?>" title="Sample page 1">Add Technician</a>
				</li>
				<li class="pull-right">
					<div class="input-group input-widget">
						<input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
					</div>
				</li>
			</ul>
			<!-- END OF BREADCRUMB -->
			<?php if(session('success')): ?>
			<div class="alert alert-success">
				<?php echo e(session('success')); ?>

			</div>
			<?php endif; ?>
			<?php if(session('error')): ?>
			<div class="alert alert-danger">
				<?php echo e(session('error')); ?>

			</div>
			<?php endif; ?>
			<div class="content-wrap">
				<div class="row">
					<div class="col-sm-12">
						<div class="nest" id="validationClose">
							<div class="title-alt">
								<h6>
								<a class="btn btn-success" href="<?php echo e(route('reg-technician.create')); ?>" >Add Technician</a></h6>
								<div class="titleClose">
									<a class="gone" href="#validationClose">
										<span class="entypo-cancel"></span>
									</a>
								</div>
								<div class="titleToggle">
									<a class="nav-toggle-alt" href="#validation">
										<span class="entypo-up-open"></span>
									</a>
								</div>
							</div>
							<div class="body-nest" id="validation">
								<div class="content-wrap">
									<div class="row">
										<div class="col-sm-12">
											<div class="nest" id="FilteringClose">
												<div class="title-alt">
													<h6>
													Technician Information</h6>
													<div class="titleClose">
														<a class="gone" href="#FilteringClose">
															<span class="entypo-cancel"></span>
														</a>
													</div>
													<div class="titleToggle">
														<a class="nav-toggle-alt" href="#Filtering">
															<span class="entypo-up-open"></span>
														</a>
													</div>
												</div>
												<div class="body-nest" id="Filtering">



                                                    <div class="show">
                                                        <ul>
                                                            <li>Name: <?php echo e($tech->name); ?></li>
                                                            <li>Phone: <?php echo e($tech->phone); ?></li>
                                                            <li>Email: <?php echo e($tech->email); ?></li>
                                                            <li>Address: <?php echo e($tech->address); ?></li>
                                                            <li>Expertise: <?php echo e($tech->expertise); ?></li>
                                                            <li>Image: <img src="<?php echo e(asset('public/images/technicians/' . $tech->image)); ?>" alt="" height="200" width="200"></li>
                                                            <li>Cnic Front: <img src="<?php echo e(asset('public/images/technicians/cnic/' . $tech->cnic_front)); ?>" alt="" height="200" width="200"></li>
                                                            <li>Cnic Back: <img src="<?php echo e(asset('public/images/technicians/cnic/' . $tech->cnic_back)); ?>" alt="" height="200" width="200"></li>
                                                        </ul>
                                                    </div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /END OF CONTENT -->
			<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\work1\onsiterepair\resources\views/dashboard/technician-show.blade.php ENDPATH**/ ?>
