
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
					<li><a href="<?php echo e(route('technician.create')); ?>" title="Sample page 1">Add Technician</a>
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
								<a class="btn btn-success" href="" >Add Technician</a></h6>
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
													All Technician</h6>
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
													<div class="row" style="margin-bottom:10px;">
														<div class="col-sm-4">
															<input class="form-control" id="filter" placeholder="Search..." type="text" />
														</div>
														<div class="col-sm-2">
															<select class="filter-status form-control">
																<option value="active">Active</option>
																<option value="disabled">Disabled</option>
																<option value="suspended">Suspended</option>
															</select>
														</div>
														<div class="col-sm-6">
															<a href="#clear" style="margin-left:10px;" class="pull-right btn btn-info clear-filter" title="clear filter">clear</a>
															<a href="#api" class="pull-right btn btn-info filter-api" title="Filter using the Filter API">filter API</a>
														</div>
													</div>
													<table id="footable-res2" class="demo table" data-filter="#filter" data-filter-text-only="true">
														<thead>
															<tr>
																<th data-toggle="true">
																	#
																</th>
																<th data-toggle="true">
																	Name
																</th>
																<th>
																	Image
																</th>
																<th >
																	Phone
																</th>
																<th >
																	Email
																</th>
																<th >
																	Address
																</th>
																<th >
																	Expert in
																</th>
																<th >
																	Edit
																</th>
																<th >
																	Delete
																</th>
															</tr>
														</thead>
														<tbody>

															<tr>
																<td>1</td>
																<td>Faraz</td>
																<td>
																	<img src="" alt="" height="50" width="50">
																</td>
																<td>+9233333333</td>
																<td>faraz@gmail.com</td>
																<td>down town</td>
																<td>iPhone</td>
																<td><a href="/edit-manufacturer/1" class="btn btn-info">Edit</a></td>
																<td><a href="" class="btn btn-danger">Delete</a></td>
															</tr>

																<tr>
																<td>1</td>
																<td>Faraz</td>
																<td>
																	<img src="" alt="" height="50" width="50">
																</td>
																<td>+9233333333</td>
																<td>faraz@gmail.com</td>
																<td>down town</td>
																<td>iPhone</td>
																<td><a href="/edit-manufacturer/1" class="btn btn-info">Edit</a></td>
																<td><a href="" class="btn btn-danger">Delete</a></td>
															</tr>

																<tr>
																<td>1</td>
																<td>Faraz</td>
																<td>
																	<img src="" alt="" height="50" width="50">
																</td>
																<td>+9233333333</td>
																<td>faraz@gmail.com</td>
																<td>down town</td>
																<td>iPhone</td>
																<td><a href="/edit-manufacturer/1" class="btn btn-info">Edit</a></td>
																<td><a href="" class="btn btn-danger">Delete</a></td>
															</tr>

																<tr>
																<td>1</td>
																<td>Faraz</td>
																<td>
																	<img src="" alt="" height="50" width="50">
																</td>
																<td>+9233333333</td>
																<td>faraz@gmail.com</td>
																<td>down town</td>
																<td>iPhone</td>
																<td><a href="/edit-manufacturer/1" class="btn btn-info">Edit</a></td>
																<td><a href="" class="btn btn-danger">Delete</a></td>
															</tr>

														</tbody>
													</table>
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
<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Development\xampp\htdocs\onsiterepair\resources\views/dashboard/technitian.blade.php ENDPATH**/ ?>
