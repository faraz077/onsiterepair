@extends('layouts.app')
@section('content')
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
            <li><a href="{{ route('technician-new-order') }}">Active orders ({{ $new_orders->count() }})</a></li>
			<li><a href="{{ route('technician-complete-order') }}">completed orders ({{ $comp_orders->count() }})</a></li>
            <li><a href="{{ route('technician-profile-edit') }}">Edit profile</a></li>
		</ul>
	</div>

	</div>
	<div class="col-lg-10">
		<div class="container">
			<div class="row">
			<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>
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
    <form action="{{ route('technician-profile-update', $technician->id) }}" id="contact-form" method="POST" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="{{ asset('public/images/technicians/' . $technician->image) }}" alt="{{ $technician->name }}"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h4 class="my-3">{{ $technician->name }}</h4>
            <h6 class="my-2">{{ $technician->email }}</h6>

            <p class="text-muted mb-1">{{ $technician->expertise }} Expert</p>
            <p class="text-muted mb-4">{{ $technician->address }}</p>

          </div>
        </div>

      </div>
      <div class="col-lg-8">
        <div class="card mb-4">

          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name="name" id="name" class="form-control" value="{{ $technician->name }}">
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $technician->phone }}">
              </div>
            </div>
            <hr>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <textarea name="address" id="address" cols="10" rows="2" class="form-control" >{{ $technician->address }}</textarea>
              </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                    <select name="expertise" class="form-control">
                        <option value="Android" {{ $technician->expertise == 'Android' ? 'selected' : '' }}>Android</option>
                        <option value="iOS" {{ $technician->expertise == 'iOS' ? 'selected' : '' }}>iOS</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">New Password</p>
              </div>
              <div class="col-sm-9">
                <input type="password" class="form-control" name="password" id="password">
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Confirm Password</p>
              </div>
              <div class="col-sm-9">
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
              </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">New Profile image</p>
                </div>
                <div class="col-sm-9">
                    <input type="file" class="form-control" name="image" id="image">
                </div>
            </div>
            <hr>
            <div class="row text-end">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>


          </div>
        </div>

      </div>
    </div>
    </form>
  </div>
</section>
			</div>
		</div>
<br>



	</div>
</div>
	</div>
</section>


@endsection
