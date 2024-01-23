@extends('dashboard.layouts.app')
@section('content')
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
							<strong>Dave mattew!</strong>&nbsp;&nbsp;Your last sig in at Yesterday, 16:54 PM
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
					<li><a href="{{route('reg-technician.create')}}" title="Sample page 1">Add Technician</a>
				</li>
				<li class="pull-right">
					<div class="input-group input-widget">
						<input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
					</div>
				</li>
			</ul>
			<!-- END OF BREADCRUMB -->
			@if(session('success'))
			<div class="alert alert-success">
				{{ session('success') }}
			</div>
			@endif
			@if(session('error'))
			<div class="alert alert-danger">
				{{ session('error') }}
			</div>
			@endif
			<div class="content-wrap">
				<div class="row">
					<div class="col-sm-12">
						<div class="nest" id="validationClose">
							<div class="title-alt">
								<h6>
								<a class="btn btn-success" href="{{route('reg-technician.create')}}" >Add Technician</a></h6>
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

													<table id="footable-res2" class="demo table" data-filter="#filter" data-filter-text-only="true">
                                                        <thead>
                                                            <tr>
                                                                <th data-toggle="true">#</th>
                                                                <th data-toggle="true">Name</th>
                                                                <th>Image</th>
                                                                <th>Phone</th>
                                                                <th>Email</th>
                                                                <th>Address</th>
                                                                <th>Expert in</th>
                                                                <th>Edit</th>
                                                                <th>Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($technicians as $technician)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td><a href="{{ route('reg-technician.show', $technician->id) }}">{{ $technician->name }}</a></td>
                                                                <td>
                                                                    <img src="{{ asset('public/images/technicians/' . $technician->image) }}" alt="" height="50" width="50">
                                                                </td>
                                                                <td>{{ $technician->phone }}</td>
                                                                <td>{{ $technician->email }}</td>
                                                                <td>{{ $technician->address }}</td>
                                                                <td>{{ $technician->expertise }}</td>
                                                                <td>
                                                                    <a href="{{ route('reg-technician.edit', $technician->id) }}" class="btn btn-info">Edit</a>
                                                                </td>
                                                                <td>
                                                                    <form action="{{ route('reg-technician.destroy', $technician->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this technician?')">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach
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
			@endsection()