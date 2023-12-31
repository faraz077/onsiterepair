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
                            <span>Add Model
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
                <li><a href="#" title="Sample page 1">Add Model</a>
                </li>
                <li class="pull-right">
                    <div class="input-group input-widget">

                        <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                    </div>
                </li>
            </ul>

            <!-- END OF BREADCRUMB -->



            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nest" id="validationClose">
                            <div class="title-alt">
                                <h6>
                                    Add Model</h6>
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
                                <div class="form_center">

                                    <form action="contact" id="contact-form" class="form-horizontal">
                                        <fieldset>


                                            <div class="control-group">
                                                <label class="control-label" for="name">Model Name</label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="name" id="name">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="email">Upload Image</label>
                                                <div class="controls">
                                                    <input type="file" class="form-control" name="email" id="email">
                                                </div>
                                            </div>
                                       
                                            <div class="control-group">
                                                <label class="control-label" for="message">Your Message</label>
                                                <div class="controls">
                                                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-actions" style="margin:20px 0 0 0;">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn">Cancel</button>
                                            </div>
                                        </fieldset>
                                    </form>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>



           


            <!-- /END OF CONTENT -->
@endsection()