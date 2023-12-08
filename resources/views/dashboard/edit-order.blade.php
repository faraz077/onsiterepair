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
                                                                <h3>Order # <span>7442</span> details</h3>
                                                                <br>
                                                                <table id="footable-res2" class="demo table order-uer-detail" data-filter="#filter" data-filter-text-only="true">
                                                                    <thead>
                                                                        <tr>
                                                                            <th data-toggle="true">
                                                                                <h5>Order Date :  <span> 12-2-2023</span></h5>
                                                                            </th>
                                                                            <th></th>
                                                                            <th></th>

                                                                            <th>
                                                                                <h5>Billing Detail : <span>Pending</span></h5>
                                                                            </th>
                                                                            
                                                                            
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <th data-toggle="true">
                                                                                Name :  <span>  Faraz aqeel</span>
                                                                            </th>
                                                                            <th>
                                                                                Email : <span>faraz@gmail.com</span>
                                                                            </th>
                                                                            
                                                                            <th data-hide="phone">
                                                                                Phone : <span> +03239905077</span>
                                                                            </th>
                                                                            <th data-hide="phone">
                                                                                Contact with user Via : <span> Whats App</span>
                                                                            </th>
                                                                            
                                                                        </tr>
                                                                        
                                                                    </thead>
                                                                    
                                                                </table>
                                                                <table class="demo table order-uer-detail" >
                                                                    <tr>
                                                                        <td data-toggle="true">
                                                                            <h4>   Additional Information:</h4>
                                                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                </table>
                                                                <h4 class="select-location">User Location</h4>
                                                                <h5>  <a target="_blank"href="https://www.google.com/maps/place/Value+Wireless+Phone+Trading+L.L.C/@25.2749286,55.3051651,15z/data=!4m6!3m5!1s0x3e5f4391b5daf7ad:0x937d265511aa857a!8m2!3d25.2749286!4d55.3051651!16s%2Fg%2F11pl9tjvwm?entry=ttu">Mr Fix Brooklyn
                                                                154 Montague St 1 floor, Brooklyn, NY 11201</a>
                                                            </h5>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="order-status">
                                                                        <label for="">Update the Status
                                                                            <select name="" id="" class="form-control">
                                                                                <option value="">On hold</option>
                                                                                <option value="">Progress</option>
                                                                                <option value="">Completed</option>
                                                                                <option value="">Cancelled</option>
                                                                                <option value="">Pendding Payment</option>
                                                                            </select>
                                                                        </label>
                                                                        <button class="btn btn-info">Update</button>
                                                                    </div></div>
                                                                    <div class="col-lg-6">
                                                                        
                                                                        <label class="order-action">Order Action</label>
                                                                        <form action="#" class="order-action-section">
                                                                            <select name="" id="" class="form-control">
                                                                                <option value="">Email invoice / order details to customer</option>
                                                                                <option value="">Resend new order notification</option>
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
                                                                <ul class="main">
                                                                    <li class="item">
                                                                        <h5>
                                                                        Device:
                                                                        </h5>
                                                                        <h5>iPhone Pro Max</h5>
                                                                    </li>
                                                                </ul>
                                                                <ul class="main">
                                                                    <li class="item">
                                                                        <h6>
                                                                        Issue:
                                                                        </h6>
                                                                        <h6>Screen Repair</h6>
                                                                    </li>
                                                                    <li class="sub-item"><p>
                                                                        Price:
                                                                    </p>
                                                                    <p><strong>600 ADE</strong></p>
                                                                </li>
                                                                
                                                                <li class="sub-item">
                                                                    <p>
                                                                        Timeframe:
                                                                    </p>
                                                                    <p>3 Hours</p>
                                                                </li>
                                                                <li class="sub-item">
                                                                    <p>
                                                                        Warranty:
                                                                    </p>
                                                                    <p>1 year</p>
                                                                </li>
                                                                
                                                            </ul>
                                                            <ul class="main">
                                                                <li class="item">
                                                                    <h6>
                                                                    Issue:
                                                                    </h6>
                                                                    <h6>On / Off Button</h6>
                                                                </li>
                                                                <li class="sub-item"><p>
                                                                    Price:
                                                                </p>
                                                                <p><strong>600 ADE</strong></p>
                                                            </li>
                                                            <li class="sub-item">
                                                                <p>
                                                                    Timeframe:
                                                                </p>
                                                                <p>3 Hours</p>
                                                            </li>
                                                            <li class="sub-item">
                                                                <p>
                                                                    Warranty:
                                                                </p>
                                                                <p>1 year</p>
                                                            </li>
                                                            
                                                        </ul>
                                                        <ul>    <li>
                                                            <h6>
                                                            Total Price:
                                                            </h6>
                                                            <h6>1200 ADE</h6>
                                                        </li>
                                                    </ul>
                                                    
                                                </div>
                                                <br>
                                                <form action="#">
                                                    <label for="">Private Note</label>
                                                    <br>
                                                    <textarea name="" id="" cols="50" rows="5"></textarea>
                                                    <br>
                                                    <input type="submit" value="update" class="btn btn-success">
                                                </form>
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
@endsection()