@extends('layouts.app')
@section('content')
<!-- hero section started -->
<section class="technician-sections">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="technician-topbar row">
					<div class="left col-lg-6 d-flex align-items-center">
						<h4><b>Hi </b> {{ Auth::user()->name }}!</h4>
					</div>
					<div class="right col-lg-6 d-flex justify-content-end">
                        <form action="{{ route('technician.logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit" >Logout</button>
                        </form>
                    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 m-0 p-0">
				<div class="left-sidebar">
					<h3>Orders Detail</h3>
					<ul>
				
						<li><a href="{{ route('technician-new-order') }}">Active orders ({{ $orders->count() }})</a></li>
						<li><a href="{{ route('technician-complete-order') }}">completed orders (200)</a></li>
						<li><a href="technician-profile-edit">Edit profile</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-10">
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
				<h4 class="m-3 text-danger">Active Orders</h4>

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
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->customer_phone }}</td>
                        <td>{{ $order->device->name }}</td>
                        <td>{{ $order->model->name }}</td>
                        <td>{{ $order->total_price }} <b>AED</b> </td>
                        <td>{{ $order->status }}</td>
                        <th><a href="{{ route('technician-order-detail', $order->id) }}" class="btn btn-info text-white" >View</a> </th>
                    </tr>
                    @endforeach
		        </table>

	</div>
</div>
</div>
</section>
@endsection
