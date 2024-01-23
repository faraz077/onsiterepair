@extends('layouts.app')
@section('content')
<!-- hero section started -->
<section class="technician-sections">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="technician-topbar row">
                <div class="left col-lg-6 d-flex align-items-center">
                    <h4><b>Hi </b> Admin!</h4>
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

            <li><a href="{{ route('technician-new-order') }}">Active orders ({{ $new_orders->count() }})</a></li>
			<li><a href="{{ route('technician-complete-order') }}">completed orders ({{ $comp_orders->count() }})</a></li>
            <li><a href="{{ route('technician-profile-edit') }}">Edit profile</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-10">
        <section class="h-100 h-custom" style="background-color: #eee;">
          <div class="container-fluid py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-lg-8 col-xl-6">
                <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                  <div class="card-body p-5">
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
                    <p class="lead fw-bold mb-5" style="color: #f37a27;">Order Detail</p>
                    <div class="row">
                      <div class="col mb-3">
                        <p class="small text-muted mb-1"><b>Date</b></p>
                        <p>{{ $order->created_at->format('d-M-Y') }}</p>
                      </div>
                      <div class="col mb-3">
                        <p class="small text-muted mb-1"><b>Order No.</b></p>
                        <p>{{ $order->order_no }}</p>
                      </div>
                    </div>
                    <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                      <div class="row">
                        <div class="col-md-8 col-lg-9">
                          <p><b>Client Name : </b> {{ $order->customer_name }} </p>
                          <p><b>Phone Number : </b> {{ $order->customer_phone }} </p>
                          <p><b>Cotnact Via : </b> {{ $order->contact_through }} </p>
                          <p><b>Location : </b> {{ $order->location }} </p>
                          <p><b>Device : </b> {{ $order->device->name }} </p>
                          <p><b>Manufacturer : </b> {{ $order->manufacturer->name }} </p>
                          <p><b>Model : </b> {{ $order->model->name }} </p>





                        </div>
                        <div class="col-md-4 col-lg-3 d-flex align-items-end">



                        </div>
                      </div>
                      <div class="row">


                    <table>
                      <tr>
                        <th>    <p><b>Issue </b> </p></th>
                        <th>  <h6> <b>Price</b></h6></th>
                      </tr>
                       <tr>
                        <td>    <p>Screen break  </p></td>
                        <td>  <h6> <b>85.00 AED</b></h6></td>
                      </tr>
                      <tr>
                        <td>    <p>Screen break  </p></td>
                        <td>  <h6> <b>85.00 AED</b></h6></td>
                      </tr>
                      <tr>
                        <td>    <p>Screen break  </p></td>
                        <td>  <h6> <b>85.00 AED</b></h6></td>
                      </tr>
                    </table>
                        <div class="col-md-8 col-lg-9">


                        </div>
                        <div class="col-md-4 col-lg-3 d-flex align-items-end">

                        </div>
                      </div>


                      <br>
                      @if ($order->status == 'processing')
                      <h5 class="text-danger">Add More Issues</h5>
                      <form action="{{ route('technician-order') }}" method="POST" class="row">
                        @csrf
                        <div class="col-lg-6 mt-3">
                          <select name="device_id" id="" class="form-control">
                            <option value="">Select Device</option>
                            @foreach ($devices as $device)
                                <option value="{{ $device->id }}">{{ $device->name }}</option>
                            @endforeach

                          </select>
                        </div>

                        <div class="col-lg-6 mt-3">
                            <select name="manufacturer_id" id="manufacturer_id" class="form-control">
                              <option value="">Select Manufacturer</option>
                              <!-- Add options dynamically using jQuery -->
                            </select>
                          </div>

                          <div class="col-lg-6 mt-3">
                            <select name="model_id" id="model_id" class="form-control">
                              <option value="">Select Model</option>
                              <!-- Add options dynamically using jQuery -->
                            </select>
                          </div>

                          <div class="col-lg-6 mt-3">
                            <select name="issue_id[]" id="issue_id" class="form-control" multiple>
                              <option value="">Select Issue</option>
                              <!-- Add options dynamically using jQuery -->
                            </select>
                          </div>

                          <input type="hidden" name="customer_name" value="{{ $order->customer_name }}">
                          <input type="hidden" name="customer_phone" value="{{ $order->customer_phone }}">
                          <input type="hidden" name="customer_email" value="{{ $order->customer_email }}">
                          <input type="hidden" name="contact_through" value="{{ $order->contact_through }}">
                          <input type="hidden" name="contact_through" value="{{ $order->contact_through }}">
                          <input type="hidden" name="location" value="{{ $order->location }}">
                          <input type="hidden" name="status" value="processing">
                          <input type="hidden" name="payment_status" value="unpaid">
                          <input type="hidden" name="technician_id" value="{{ $order->technician_id }}">

                          <br>

                          <div class="col-lg-12 mt-3 d-flex justify-content-center">
                            <input type="submit" value="Create Order" class="btn btn-warning">
                          </div>
                        </form>

                        @endif

                    </div>
                    <div class="row my-4">
                      <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                        <p class="lead fw-bold mb-0" style="color: #f37a27;">AED {{ $order->total_price }}</p>
                      </div>
                    </div>
                    @if ($order->status == 'processing')
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <form action="{{ route('change-order-status') }}" method="post">
                                @csrf
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                <button type="submit" class="btn btn-success large">Order Completed</button>
                            </form>
                        </div>
                    </div>
                    @endif
                    <p class="mt-4 pt-2 mb-0">Want any help? <a href="#!" style="color: #f37a27;">Please contact
                    us</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


      </div>
    </div>
  </div>
</section>
@endsection



@section('scriptjs')

<script>
    $(document).ready(function() {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      // Initialize Select2 for the 'issue_id[]' dropdown
      $('select[name="issue_id[]"]').select2({
        multiple: true
        });

      // When the device dropdown changes
      $('select[name="device_id"]').change(function() {
        var deviceId = $(this).val();

        // Reset manufacturer, model, and issue dropdowns
        $('select[name="manufacturer_id"]').empty().append('<option value="">Select Manufacturer</option>');
        $('select[name="model_id"]').empty().append('<option value="">Select Model</option>');

        // Clear and reset Select2 for the 'issue_id[]' dropdown
        var select2Issues = $('select[name="issue_id[]"]');
        select2Issues.val(null).trigger('change');
        select2Issues.select2({
            placeholder: 'Select Issue',
            multiple: true
        });

        // Fetch manufacturers based on the selected device
        if (deviceId) {
            $.ajax({
            url: '{{ route("technician-manufacturers", ":deviceId") }}'.replace(':deviceId', deviceId),
            type: 'GET',
            success: function(manufacturers) {
                $.each(manufacturers, function(key, manufacturer) {
                $('select[name="manufacturer_id"]').append('<option value="' + manufacturer.id + '">' + manufacturer.name + '</option>');
                });
            }
            });
        }
        });


      // When the manufacturer dropdown changes
      $('select[name="manufacturer_id"]').change(function() {
        var manufacturerId = $(this).val();

        // Reset model and issue dropdowns
        $('select[name="model_id"]').empty().append('<option value="">Select Model</option>');

        // Clear and trigger change event for Select2
        $('select[name="issue_id[]"]').val(null).trigger('change');

        // Fetch models based on the selected manufacturer
        if (manufacturerId) {
          $.ajax({
            url: '{{ route("technician-models", ":manufacturerId") }}'.replace(':manufacturerId', manufacturerId),
            type: 'GET',
            success: function(models) {
              $.each(models, function(key, model) {
                $('select[name="model_id"]').append('<option value="' + model.id + '">' + model.name + '</option>');
              });
            }
          });
        }
      });

      // When the model dropdown changes
      $('select[name="model_id"]').change(function() {
        var modelId = $(this).val();

        // Clear and trigger change event for Select2
        $('select[name="issue_id[]"]').val(null).trigger('change');

        // Fetch issues based on the selected model
        if (modelId) {
          $.ajax({
            url: '{{ route("technician-issues", ":modelId") }}'.replace(':modelId', modelId),
            type: 'GET',
            success: function(issues) {
              // Append issues to the Select2 dropdown
              var select2Issues = $('select[name="issue_id[]"]');
              select2Issues.empty();
              $.each(issues, function(key, issue) {
                select2Issues.append('<option value="' + issue.id + '">' + issue.name + '</option>');
              });

              // Refresh Select2 to display the new options
              select2Issues.trigger('change');
            }
          });
        }
      });
    });
  </script>


@endsection
