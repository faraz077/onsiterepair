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
                    <span>Add Device
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
                    <li><a href="#" title="Sample page 1">Orders</a>
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


                            </div>
                            <div class="body-nest" id="validation">
                                <div class="content-wrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="nest" id="FilteringClose">
                                                <div class="title-alt">
                                                    <h6>
                                                    All Orders</h6>

                                                </div>
                                                <div class="body-nest" id="Filtering">

                                                    <div class="container-fluid">
                                                        <div class="col-lg-8">
                                                            <h2>User Information</h2>
                                                            <div class="body-nest" id="Filtering">
                                                                <h3>Order # <span><?php echo e($order->order_no); ?></span> details</h3>
                                                                <br>
                                                                <table id="footable-res2" class="demo table order-uer-detail" data-filter="#filter" data-filter-text-only="true">
                                                                    <thead>
                                                                        <tr>
                                                                            <th data-toggle="true">
                                                                                <h5>Order Date :  <span> <?php echo e($order->created_at->format('d M, Y')); ?></span></h5>
                                                                            </th>

                                                                            <th>
                                                                                <h5>Status : <span><?php echo e($order->status); ?></span></h5>
                                                                            </th>

                                                                            <th>
                                                                                <h5>Payment Status : <span><?php echo e($order->payment_status); ?></span></h5>
                                                                            </th>


                                                                        </tr>
                                                                        <tr>
                                                                            <th data-toggle="true">
                                                                                Name :  <span>  <?php echo e($order->customer_name); ?></span>
                                                                            </th>
                                                                            <th>
                                                                                Email : <span><?php echo e($order->customer_email); ?></span>
                                                                            </th>

                                                                            <th data-hide="phone">
                                                                                Phone : <span> <?php echo e($order->customer_phone); ?></span>
                                                                            </th>
                                                                            <th data-hide="phone">
                                                                                Contact with user Via : <span> <?php echo e($order->contact_through); ?></span>
                                                                            </th>

                                                                        </tr>

                                                                    </thead>

                                                                </table>
                                                                <table class="demo table order-uer-detail" >
                                                                    <tr>
                                                                        <td data-toggle="true">
                                                                            <h4>   Additional Information:</h4>
                                                                            <?php echo e($order->message); ?>

                                                                        </td>

                                                                    </tr>
                                                                </table>
                                                                <h4 class="select-location">User Location</h4>
                                                                <h5>
                                                                    <a target="_blank" href="https://www.google.com/maps/place/<?php echo e(urlencode($order->location)); ?>">
                                                                    <?php echo e($order->location); ?>

                                                                    </a>
                                                                </h5>

                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="order-status">
                                                                        <form method="POST" action="<?php echo e(route('update-order-status', ['orderId' => $order->id])); ?>">
                                                                            <?php echo csrf_field(); ?>
                                                                            <?php echo method_field('PUT'); ?>

                                                                            <label for="order-status">Update the Status</label>
                                                                            <select name="status" id="order-status" class="form-control">
                                                                                <?php $__currentLoopData = ['on_hold', 'processing', 'completed', 'cancelled']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value="<?php echo e($status); ?>" <?php if($order->status === $status): ?> selected <?php endif; ?>><?php echo e(ucfirst(str_replace('_', ' ', $status))); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                            <button type="submit" class="btn btn-info">Update</button>
                                                                        </form>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="order-status">
                                                                        <form method="POST" action="<?php echo e(route('update-order-payment-status', ['orderId' => $order->id])); ?>">
                                                                            <?php echo csrf_field(); ?>
                                                                            <?php echo method_field('PUT'); ?>

                                                                            <label for="order-status">Update Payment Status</label>
                                                                            <select name="payment_status" id="order-payment-status" class="form-control">
                                                                                <?php $__currentLoopData = ['unpaid', 'paid']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value="<?php echo e($status); ?>" <?php if($order->payment_status === $status): ?> selected <?php endif; ?>><?php echo e(ucfirst(str_replace('_', ' ', $status))); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                            <button type="submit" class="btn btn-info">Update</button>
                                                                        </form>
                                                                    </div>
                                                                </div>

                                                                    <div class="col-lg-4">

                                                                        <label class="order-action">Order Action</label>
                                                                        <form action="#" class="order-action-section">
                                                                            <select name="" id="" class="form-control">
                                                                                <option value="">Email invoice / order details to customer</option>
                                                                                <option value="">Resend new order notification</option>
                                                                            </select>
                                                                            <input type="submit" value="update" class="btn btn-info">
                                                                        </form>
                                                                    </div>


                                                                      <div class="col-lg-4">

                                                                        <label class="order-action">Assigned this order </label>
                                                                        <form action="#" class="order-action-section">
                                                                  
                                                                          <select name="" id="" class="form-control">
                                                                              <option value="">Fahad</option>
                                                                              <option value="">Faisal</option>
                                                                              <option value="">Abdullah</option>

                                                                          </select>
                                                                            <input type="submit" value="update" class="btn btn-info">
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- issue detail -->
                                                        <div class="col-lg-4">
                                                            <div class="qoute-information">
                                                                <h3>Quote Information</h3>
                                                                <!-- Loop through ordered issues -->
                                                                    <ul class="main">
                                                                        <li class="item">
                                                                            <h5>Device:</h5>
                                                                            <h5><?php echo e($order->model->name); ?></h5>
                                                                        </li>
                                                                    </ul>
                                                                    <?php $__currentLoopData = $order->orderedIssues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                    <ul class="main">
                                                                        <li class="item">
                                                                            <h6>Issue:</h6>
                                                                            <h6><?php echo e($issue->issue_name); ?></h6>
                                                                        </li>
                                                                        <li class="sub-item">
                                                                            <p>Price:</p>
                                                                            <p><strong><?php echo e($issue->issue_price); ?> ADE</strong></p>
                                                                        </li>
                                                                        <li class="sub-item">
                                                                            <p>Timeframe:</p>
                                                                            <p><?php echo e($issue->issue_timeframe); ?></p>
                                                                        </li>
                                                                        <li class="sub-item">
                                                                            <p>Warranty:</p>
                                                                            <p><?php echo e($issue->issue_warranty); ?></p>
                                                                        </li>
                                                                    </ul>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <ul>    <li>
                                                            <h6>
                                                            Total Price:
                                                            </h6>
                                                            <h6><?php echo e($order->total_price); ?></h6>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <br>
                                                

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
</div>
<!-- /END OF CONTENT -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#update-status-btn').on('click', function () {
            var orderId = $('#order-id').val();
            var newStatus = $('#order-status').val();

            // Send AJAX request to update status
            $.ajax({
                type: 'PUT',
                url: '/update-order-status/' + orderId, // Adjust the route according to your actual setup
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    status: newStatus
                },
                success: function (data) {
                    // Handle success, e.g., update UI or show a success message
                    console.log('Status updated successfully:', data);
                },
                error: function (error) {
                    // Handle error, e.g., show an error message
                    console.error('Error updating status:', error);
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Development\xampp\htdocs\onsiterepair\resources\views/dashboard/edit-order.blade.php ENDPATH**/ ?>