
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
            <li><a href="technician-profile-edit">Edit profile</a></li>
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
                    <p class="lead fw-bold mb-5" style="color: #f37a27;">Order Detail</p>
                    <div class="row">
                      <div class="col mb-3">
                        <p class="small text-muted mb-1"><b>Date</b></p>
                        <p>10 April 2024</p>
                      </div>
                      <div class="col mb-3">
                        <p class="small text-muted mb-1"><b>Order No.</b></p>
                        <p>123221</p>
                      </div>
                    </div>
                    <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                      <div class="row">
                        <div class="col-md-8 col-lg-9">
                          <p><b>Client Name : </b> Talha </p>
                          <p><b>Phone Number : </b> +923239905077 </p>
                          <p><b>Cotnact Via : </b> whatsapp </p>
                          <p><b>Location : </b> Dwon Twon </p>
                          <p><b>Manufacturer : </b> Apple </p>
                          <p><b>Model : </b> iPhone 14 Pro Max </p>
                          <p><b>Issue : </b> Screen break </p>

                          
                        </div>
                        <div class="col-md-4 col-lg-3 d-flex align-items-end">
                          <h6> <b>80.00 AED</b></h6>
                        </div>
                      </div>

                       
                      <br>
                      <h5 class="text-danger">Add More Issues</h5>
                      <form action="" class="row">
                        <div class="col-lg-6 mt-3">
                          <select name="" id="" class="form-control">
                            <option value="">Select Device</option>
                            <option value="">Smart Phone</option>
                            <option value="">Tablet</option>
                          </select>
                        </div>
                        
                        <div class="col-lg-6 mt-3">
                          
                          <select name="" id="" class="form-control">
                            <option value="">Select Manufacturer </option>
                            <option value="">Android</option>
                            <option value="">iPhone</option>
                          </select>
                        </div>
                        
                        <div class="col-lg-6 mt-3">
                          <select name="" id="" class="form-control">
                            <option value="">Select Model</option>
                            <option value="">iPhone 15 pro max</option>
                            <option value="">iPhone 15 pro max</option>
                          </select>
                        </div>
                        <div class="col-lg-6 mt-3">
                          
                          <select name="" id="" class="form-control">
                            <option value="">Select Issue</option>
                            <option value="">Screen</option>
                            <option value="">Mic</option>
                          </select>
                        </div>
                        <br>
                        <div class="col-lg-12 mt-3 d-flex justify-content-center">
                          <input type="submit" value="Update Order" class="btn btn-warning">
                        </div>
                      </form>
                         <div class="row">
                        <div class="col-md-8 col-lg-9">
                        
                          <p><b>Manufacturer : </b> Apple </p>
                          <p><b>Model : </b> iPhone 14 Pro Max </p>
                          <p><b>Issue : </b> Screen break </p>

                          
                        </div>
                        <div class="col-md-4 col-lg-3 d-flex align-items-end">
                          <h6> <b>80.00 AED</b></h6>
                        </div>
                      </div>
                    </div>
                    <div class="row my-4">
                      <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                        <p class="lead fw-bold mb-0" style="color: #f37a27;">AED 262.99</p>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-lg-12 d-flex justify-content-center">
                        <a href="#" class="btn btn-success large">Accept The Order</a>
                      </div>
                    </div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Development\xampp\htdocs\onsiterepair\resources\views/technician-order-detail.blade.php ENDPATH**/ ?>