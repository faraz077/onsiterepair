<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dashboard - On Site Repair</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <link rel="stylesheet" href="<?php echo e(asset('public/dashboard/assets/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/dashboard/assets/css/loader-style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/dashboard/assets/css/bootstrap.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/dashboard/assets/js/progress-bar/number-pb.css')); ?>">


    <link href="<?php echo e(asset('public/dashboard/assets/js/footable/css/footable.core.css?v=2-0-1')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/dashboard/assets/js/footable/css/footable.standalone.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/dashboard/assets/js/footable/css/footable-demos.css')); ?>" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php echo e(asset('public/dashboard/assets/js/dataTable/lib/jquery.dataTables/css/DT_bootstrap.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/dashboard/assets/js/dataTable/css/datatables.responsive.css')); ?>" />
        <style type="text/css">
        canvas#canvas4 {
        position: relative;
        top: 20px;
        }
        </style>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo e(asset('public/dashboard/assets/ico/minus.png')); ?>">
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- TOP NAVBAR -->
        <nav role="navigation" class="navbar navbar-static-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="entypo-menu"></span>
                    </button>
                    <button class="navbar-toggle toggle-menu-mobile toggle-left" type="button">
                    <span class="entypo-list-add"></span>
                    </button>
                    <div id="logo-mobile" class="visible-xs">
                        <h1>On Site
                        <span>Repair</span>
                        </h1>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">


                    <ul style="margin-right:0;" class="nav navbar-nav navbar-right">
                        <li>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="" class="admin-pic img-circle" src="http://api.randomuser.me/portraits/thumb/men/10.jpg">Hi, Faraz  <b class="caret"></b>
                            </a>
                            <ul style="margin-top:14px;" role="menu" class="dropdown-setting dropdown-menu">
                                <li>
                                    <a href="#">
                                        <span class="entypo-user"></span>&#160;&#160;My Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="entypo-vcard"></span>&#160;&#160;Account Setting</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="entypo-lifebuoy"></span>&#160;&#160;Help</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="<?php echo e(route('logout')); ?>"  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                    <span class="entypo-logout"></span>&#160;&#160;Logout</a>
                                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                                        <?php echo csrf_field(); ?>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                <span class="icon-gear"></span>&#160;&#160;Setting</a>
                                                <ul role="menu" class="dropdown-setting dropdown-menu">
                                                    <li class="theme-bg">
                                                        <div id="button-bg"></div>
                                                        <div id="button-bg2"></div>
                                                        <div id="button-bg3"></div>
                                                        <div id="button-bg5"></div>
                                                        <div id="button-bg6"></div>
                                                        <div id="button-bg7"></div>
                                                        <div id="button-bg8"></div>
                                                        <div id="button-bg9"></div>
                                                        <div id="button-bg10"></div>
                                                        <div id="button-bg11"></div>
                                                        <div id="button-bg12"></div>
                                                        <div id="button-bg13"></div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="hidden-xs">
                                                <a class="toggle-left" href="#">
                                                    <span style="font-size:20px;" class="entypo-list-add"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </div>
                                <!-- /.container-fluid -->
                            </nav>
                            <!-- /END OF TOP NAVBAR -->
                            <!-- SIDE MENU -->
                            <div id="skin-select">
                                <div id="logo">
                                  <img src="<?php echo e(asset('public/img/white-logo.png')); ?>" alt="">
                                </div>

                                <div class="skin-part">
                                    <div id="tree-wrap">
                                        <div class="side-bar">
                                            <ul class="topnav menu-left-nest">
                                                <li>
                                                    <a href="#" style="border-left:0px solid!important;" class="title-menu-left">
                                                        <span class="widget-menu"></span>
                                                        <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="tooltip-tip ajax-load" href="<?php echo e(route('home')); ?>" title="Dashboard">
                                                        <i class="icon-window"></i>
                                                        <span>Dashboard</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="tooltip-tip ajax-load" href="<?php echo e(route('devices.index')); ?>" title="Blog App">
                                                        <i class="icon-document-edit"></i>
                                                        <span>Devices</span>
                                                    </a>

                                                </li>
                                                   <li>
                                                    <a class="tooltip-tip ajax-load" href="<?php echo e(route('manufacturer.index')); ?>" title="Social">
                                                        <i class="icon-feed"></i>
                                                        <span>Manufacturer</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="tooltip-tip ajax-load" href="<?php echo e(route('models.index')); ?>" title="Social">
                                                        <i class="icon-feed"></i>
                                                        <span>Models</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="tooltip-tip ajax-load" href="<?php echo e(route('issues.index')); ?>" title="Media">
                                                        <i class="icon-camera"></i>
                                                        <span>Issues</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="topnav menu-left-nest">
                                                <li>
                                                    <a href="#" style="border-left:0px solid!important;" class="title-menu-left">
                                                        <span class="design-kit"></span>
                                                        <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                                                    </a>
                                                </li>


                                                  <li>
                                                    <a class="tooltip-tip ajax-load" href="<?php echo e(route('reg-technician.index')); ?>" title="Mail">
                                                        <i class="icon-mail"></i>
                                                        <span>Technician</span>
                                                    </a>
                                                </li>



                                                <li>
                                                    <a class="tooltip-tip ajax-load" href="<?php echo e(route('contacts.index')); ?>" title="Mail">
                                                        <i class="icon-mail"></i>
                                                        <span>Contacts</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="tooltip-tip" href="<?php echo e(route('order.index')); ?>" title="Extra Pages">
                                                        <i class="icon-document-new"></i>
                                                        <span>Order</span>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a class="tooltip-tip ajax-load" href="icon.html" title="Icons">
                                                        <i class="icon-preview"></i>
                                                        <span>Visitors</span>
                                                        <div class="noft-blue" style="display: inline-block; float: none;">New</div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="tooltip-tip " href="login.html" title="login">
                                                        <i class="icon-download"></i>
                                                        <span>Registered Users</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul id="menu-showhide" class="topnav menu-left-nest">
                                                <li>
                                                    <a href="#" style="border-left:0px solid!important;" class="title-menu-left">
                                                        <span class="component"></span>
                                                        <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="tooltip-tip" href="#" title="UI Element">
                                                        <i class="icon-monitor"></i>
                                                        <span>Website Controllers</span>
                                                    </a>
                                                    <ul>

                                                        <h3>
                                                        <span>Visitors</span>
                                                        </h3>
                                                        <div id="g1" style="height:180px" class="gauge"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END OF SIDE MENU -->

                                    <?php echo $__env->yieldContent('content'); ?>
                                    <!-- FOOTER -->
                                    <div class="footer-space"></div>
                                    <div id="footer">
                                        <div class="devider-footer-left"></div>
                                        <div class="time">
                                            <p id="spanDate"></p>
                                            <p id="clock"></p>
                                        </div>
                                        <div class="copyright">Make with Love
                                            <span class="entypo-heart"></span> 2023 <a href="http://gamatechno.com"> OnSiteRepair </a> All Rights Reserved</div>
                                            <div class="devider-footer"></div>
                                        </div>
                                        <!-- / END OF FOOTER -->
                                    </div>
                                </div>
                            </div>
                            <!--  END OF PAPER WRAP -->
                            <!-- RIGHT SLIDER CONTENT -->
                            <div class="sb-slidebar sb-right">
                                <div class="right-wrapper">
                                    <div class="row">
                                        <h3>
                                        <span><i class="entypo-gauge"></i>&nbsp;&nbsp;MAIN WIDGET</span>
                                        </h3>
                                        <div class="col-sm-12">
                                            <div class="widget-knob">
                                                <span class="chart" style="position:relative" data-percent="86">
                                                    <span class="percent"></span>
                                                </span>
                                            </div>
                                            <div class="widget-def">
                                                <b>Distance traveled</b>
                                                <br>
                                                <i>86% to the check point</i>
                                            </div>
                                            <div class="widget-knob">
                                                <span class="speed-car" style="position:relative" data-percent="60">
                                                    <span class="percent2"></span>
                                                </span>
                                            </div>
                                            <div class="widget-def">
                                                <b>The average speed</b>
                                                <br>
                                                <i>30KM/h avarage speed</i>
                                            </div>
                                            <div class="widget-knob">
                                                <span class="overall" style="position:relative" data-percent="25">
                                                    <span class="percent3"></span>
                                                </span>
                                            </div>
                                            <div class="widget-def">
                                                <b>Overall result</b>
                                                <br>
                                                <i>30KM/h avarage Result</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top:0;" class="right-wrapper">
                                    <div class="row">
                                        <h3>
                                        <span><i class="entypo-chat"></i>&nbsp;&nbsp;CHAT</span>
                                        </h3>
                                        <div class="col-sm-12">
                                            <span class="label label-warning label-chat">Online</span>
                                            <ul class="chat">
                                                <li>
                                                    <a href="#">
                                                        <span>
                                                            <img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/20.jpg">
                                                        </span><b>Dave Junior</b>
                                                        <br><i>Last seen : 08:00 PM</i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>
                                                            <img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/21.jpg">
                                                        </span><b>Kenneth Lucas</b>
                                                        <br><i>Last seen : 07:21 PM</i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>
                                                            <img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/22.jpg">
                                                        </span><b>Heidi Perez</b>
                                                        <br><i>Last seen : 05:43 PM</i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <span class="label label-chat">Offline</span>
                                            <ul class="chat">
                                                <li>
                                                    <a href="#">
                                                        <span>
                                                            <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/men/23.jpg">
                                                        </span><b>Dave Junior</b>
                                                        <br><i>Last seen : 08:00 PM</i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>
                                                            <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/women/24.jpg">
                                                        </span><b>Kenneth Lucas</b>
                                                        <br><i>Last seen : 07:21 PM</i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>
                                                            <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/men/25.jpg">
                                                        </span><b>Heidi Perez</b>
                                                        <br><i>Last seen : 05:43 PM</i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>
                                                            <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/women/25.jpg">
                                                        </span><b>Kenneth Lucas</b>
                                                        <br><i>Last seen : 07:21 PM</i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>
                                                            <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/men/26.jpg">
                                                        </span><b>Heidi Perez</b>
                                                        <br><i>Last seen : 05:43 PM</i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF RIGHT SLIDER CONTENT-->
                            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
                            <script src="<?php echo e(asset('public/dashboard/assets/js/progress-bar/src/jquery.velocity.min.js')); ?>"></script>
                            <script src="<?php echo e(asset('public/dashboard/assets/js/progress-bar/number-pb.js')); ?>"></script>
                            <script src="<?php echo e(asset('public/dashboard/assets/js/progress-bar/progress-app.js')); ?>"></script>
                            <!-- MAIN EFFECT -->
                            <script type="text/javascript" src="<?php echo e(asset('public/dashboard/assets/js/preloader.js')); ?>"></script>
                            <script type="text/javascript" src="<?php echo e(asset('public/dashboard/assets/js/bootstrap.js')); ?>"></script>
                            <script type="text/javascript" src="<?php echo e(asset('public/dashboard/assets/js/app.js')); ?>"></script>
                            <script type="text/javascript" src="<?php echo e(asset('public/dashboard/assets/js/load.js')); ?>"></script>
                            <script type="text/javascript" src="<?php echo e(asset('public/dashboard/assets/js/main.js')); ?>"></script>
                            <!-- GAGE -->
                            <script type="text/javascript" src="<?php echo e(asset('public/dashboard/assets/js/chart/jquery.flot.js')); ?>"></script>
                            <script type="text/javascript" src="<?php echo e(asset('public/dashboard/assets/js/chart/jquery.flot.resize.js')); ?>"></script>
                            <script type="text/javascript" src="<?php echo e(asset('public/dashboard/assets/js/chart/realTime.js')); ?>"></script>
                            <script type="text/javascript" src="<?php echo e(asset('public/dashboard/assets/js/speed/canvasgauge-coustom.js')); ?>"></script>
                            <script type="text/javascript" src="<?php echo e(asset('public/dashboard/assets/js/countdown/jquery.countdown.js')); ?>"></script>
                            <script src="<?php echo e(asset('public/dashboard/assets/js/jhere-custom.js')); ?>"></script>
                            <script>
                            var gauge4 = new Gauge("canvas4", {
                            'mode': 'needle',
                            'range': {
                            'min': 0,
                            'max': 90
                            }
                            });
                            gauge4.draw(Math.floor(Math.random() * 90));
                            var run = setInterval(function() {
                            gauge4.draw(Math.floor(Math.random() * 90));
                            }, 3500);
                            </script>
                            <script type="text/javascript">
                            /* Javascript
                            *
                            * See http://jhere.net/docs.html for full documentation
                            */
                            $(window).on('load', function() {
                            $('#mapContainer').jHERE({
                            center: [52.500556, 13.398889],
                            type: 'smart',
                            zoom: 10
                            }).jHERE('marker', [52.500556, 13.338889], {
                            icon: 'public/dashboard/assets/img/marker.png',
                            anchor: {
                            x: 12,
                            y: 32
                            },
                            click: function() {
                            alert('Hallo from Berlin!');
                            }
                            })
                            .jHERE('route', [52.711, 13.011], [52.514, 13.453], {
                            color: '#FFA200',
                            marker: {
                            fill: '#86c440',
                            text: '#'
                            }
                            });
                            });
                            </script>
                            <script type="text/javascript">
                            var output, started, duration, desired;
                            // Constants
                            duration = 5000;
                            desired = '50';
                            // Initial setup
                            output = $('#speed');
                            started = new Date().getTime();
                            // Animate!
                            animationTimer = setInterval(function() {
                            // If the value is what we want, stop animating
                            // or if the duration has been exceeded, stop animating
                            if (output.text().trim() === desired || new Date().getTime() - started > duration) {
                            console.log('animating');
                            // Generate a random string to use for the next animation step
                            output.text('' + Math.floor(Math.random() * 60)
                            );
                            } else {
                            console.log('animating');
                            // Generate a random string to use for the next animation step
                            output.text('' + Math.floor(Math.random() * 120)
                            );
                            }
                            }, 5000);
                            </script>
                            <script type="text/javascript">
                            $('#getting-started').countdown('2015/01/01', function(event) {
                            $(this).html(event.strftime(
                            '<span>%M</span>' + '<span class="start-min">:</span>' + '<span class="start-min">%S</span>'));
                            });
                            </script>




                              <!-- /MAIN EFFECT -->
    <!-- GAGE -->
    <script type="text/javascript" src="<?php echo e(asset('public/dashboard/assets/js/toggle_close.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dashboard/assets/js/footable/js/footable.js?v=2-0-1')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/dashboard/assets/js/footable/js/footable.sort.js?v=2-0-1')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/dashboard/assets/js/footable/js/footable.filter.js?v=2-0-1')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/dashboard/assets/js/footable/js/footable.paginate.js?v=2-0-1')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/dashboard/assets/js/footable/js/footable.paginate.js?v=2-0-1')); ?>" type="text/javascript"></script>





    <script type="text/javascript">
    $(function() {
        $('.footable-res').footable();
    });
    </script>
    <script type="text/javascript">
    $(function() {
        $('#footable-res2').footable().bind('footable_filtering', function(e) {
            var selected = $('.filter-status').find(':selected').text();
            if (selected && selected.length > 0) {
                e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
                e.clear = !e.filter;
            }
        });

        $('.clear-filter').click(function(e) {
            e.preventDefault();
            $('.filter-status').val('');
            $('table.demo').trigger('footable_clear_filter');
        });

        $('.filter-status').change(function(e) {
            e.preventDefault();
            $('table.demo').trigger('footable_filter', {
                filter: $('#filter').val()
            });
        });

        $('.filter-api').click(function(e) {
            e.preventDefault();

            //get the footable filter object
            var footableFilter = $('table').data('footable-filter');

            alert('about to filter table by "tech"');
            //filter by 'tech'
            footableFilter.filter('tech');

            //clear the filter
            if (confirm('clear filter now?')) {
                footableFilter.clearFilter();
            }
        });
    });
    </script>
<?php /**PATH E:\Development\xampp\htdocs\onsiterepair\resources\views/dashboard/layouts/app.blade.php ENDPATH**/ ?>