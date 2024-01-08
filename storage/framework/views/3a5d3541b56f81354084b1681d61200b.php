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

                                                    <table id="footable-res2" class="demo table" data-filter="#filter" data-filter-text-only="true">
                                                        <thead>
                                                            <tr>
                                                                <th data-toggle="true">
                                                                    #
                                                                </th>
                                                                <th data-toggle="true">
                                                                    Order Id
                                                                </th>
                                                                <th>
                                                                    Customer Name
                                                                </th>
                                                                <th>
                                                                    Customer Phpne #
                                                                </th>
                                                                <th data-hide="phone,tablet">
                                                                    Device
                                                                </th>
                                                                <th data-hide="phone">
                                                                    Price
                                                                </th>
                                                                   <th data-hide="phone">
                                                                    Status
                                                                </th>
                                                                <th data-hide="phone">
                                                                    Date
                                                                </th>
                                                                <th data-hide="phone">
                                                                    edit
                                                                </th>
                                                                <th data-hide="phone">
                                                                    Delete
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td><?php echo e($loop->iteration); ?></td>
                                                                <td><a href="<?php echo e(route('order.edit', $order->id)); ?>"><?php echo e($order->order_no); ?></a></td>
                                                                <td><?php echo e($order->customer_name); ?></td>
                                                                <td><?php echo e($order->customer_phone); ?></td>
                                                                <td><?php echo e($order->model->name); ?></td>
                                                                <td><?php echo e($order->total_price); ?></td>
                                                                <td><b><?php echo e($order->status); ?></b></td>

                                                                <td><?php echo e($order->created_at->format('d M, Y')); ?></td>
                                                                <td><a href="<?php echo e(route('order.edit', $order->id)); ?>" class="btn btn-info">Edit</a></td>
                                                                <td>
                                                                    <form action="<?php echo e(route('order.destroy', $order->id)); ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this order?')">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('DELETE'); ?>
                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\work1\onsiterepair\resources\views/dashboard/order.blade.php ENDPATH**/ ?>