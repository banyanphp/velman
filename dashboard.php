<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Infobox - 1 | AdminBSB - Sensitive</title>
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />

    <!-- Animate.css Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Font Awesome Css -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <!-- iCheck Css -->
    <link href="assets/plugins/iCheck/skins/flat/_all.css" rel="stylesheet" />

    <!-- Switchery Css -->
    <link href="assets/plugins/switchery/dist/switchery.css" rel="stylesheet" />

    <!-- Metis Menu Css -->
    <link href="assets/plugins/metisMenu/dist/metisMenu.css" rel="stylesheet" />

    <!-- Pace Loader Css -->
    <link href="assets/plugins/pace/themes/white/pace-theme-flash.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/css/themes/allthemes.css" rel="stylesheet" />

    <!-- Demo Purpose Only -->
    <link href="assets/css/demo/setting-box.css" rel="stylesheet" />
</head>
<body>
    <div class="all-content-wrapper">
        <!-- Top Bar -->
        <?php include('header.php')?>
        <!-- #END# Top Bar -->
        <!-- Left Menu -->
        <?php include('sidebar.php')?>
        <!-- #END# Left Menu -->
        <!-- Right Sidebar -->
<!--        <aside class="right-sidebar">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#tab_overview" data-toggle="tab">OVERVIEW</a></li>
                <li role="presentation"><a href="#tab_settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div class="right-sidebar-close">
                    <i class="fa fa-times"></i>
                </div>
                <div role="tabpanel" class="tab-pane fade in active" id="tab_overview">
                    <div class="tab-container">
                        <label>UPCOMING EVENTS</label>
                        <ul>
                            <li>
                                <b class="display-block">Business Meeting</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Dinner With John</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Deadline Project For E-Commerce</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Last Check For E-Comerce</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Ask For Vacation</b> Lorem ipsum dolor sit amet
                            </li>
                        </ul>

                        <label>TODO LIST</label>
                        <ul>
                            <li>
                                <b class="display-block">Get To Know More HTML5</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Get To Know More CSS3 - Transitions</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Learn AngularJS</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Learn AngularJS Routing</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Get To Know More jQuery v3</b> Lorem ipsum dolor sit amet
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_settings">
                    <div class="tab-container">
                        <label>GENERAL SETTINGS</label>
                        <ul>
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" checked />
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" />
                                </div>
                            </li>
                        </ul>

                        <label>SYSTEM SETTINGS</label>
                        <ul>
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" checked />
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" checked />
                                </div>
                            </li>
                        </ul>

                        <label>ACCOUNT SETTINGS</label>
                        <ul>
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" />
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" checked />
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>-->
        <!-- #END# Right Sidebar -->
        <section class="content">
            <div class="page-heading">
                <h1>DASHBOARD</h1>
                <ol class="breadcrumb">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
            <div class="page-body">
                <!-- Counter Examples -->
<!--                <div class="block-header">
                    <h2>COUNTER ANIMATION</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1">
                            <div class="icon bg-success"><i class="material-icons">shopping_cart</i></div>
                            <div class="content">
                                <div class="text">NEW ORDERS</div>
                                <div class="number count-to" data-from="0" data-to="245" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1">
                            <div class="icon bg-primary"><i class="material-icons">face</i></div>
                            <div class="content">
                                <div class="text">NEW MEMBERS</div>
                                <div class="number count-to" data-from="0" data-to="348" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1">
                            <div class="icon bg-warning"><i class="material-icons">bookmark</i></div>
                            <div class="content">
                                <div class="text">BOOKMARKS</div>
                                <div class="number count-to" data-from="0" data-to="143" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1">
                            <div class="icon bg-danger"><i class="material-icons">favorite</i></div>
                            <div class="content">
                                <div class="text">LIKES</div>
                                <div class="number count-to" data-from="0" data-to="2158" data-speed="1500" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- #END# Counter Examples -->
                <!-- Hover Zoom Effect -->
                <div class="block-header">
                    <h2>HOVER ZOOM EFFECT</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1 hover-zoom-effect">
                            <div class="icon bg-success">
                                <i class="material-icons">email</i>
                            </div>
                            <div class="content">
                                <div class="text">MESSAGES</div>
                                <div class="number">24</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1 hover-zoom-effect">
                            <div class="icon bg-primary">
                                <i class="material-icons">devices</i>
                            </div>
                            <div class="content">
                                <div class="text">CPU USAGE</div>
                                <div class="number">97%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1 hover-zoom-effect">
                            <div class="icon bg-warning">
                                <i class="material-icons">access_alarm</i>
                            </div>
                            <div class="content">
                                <div class="text">ALARM</div>
                                <div class="number">07:30 AM</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1 hover-zoom-effect">
                            <div class="icon bg-danger">
                                <i class="material-icons">gps_fixed</i>
                            </div>
                            <div class="content">
                                <div class="text">LOCATION</div>
                                <div class="number">Turkey</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Hover Zoom Effect -->
                <!-- Hover Expand Effect -->
<!--                <div class="block-header">
                    <h2>HOVER EXPAND EFFECT</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1 hover-expand-effect">
                            <div class="icon bg-success">
                                <i class="material-icons">flight_takeoff</i>
                            </div>
                            <div class="content">
                                <div class="text">FLIGHT</div>
                                <div class="number">03:05 PM</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1 hover-expand-effect">
                            <div class="icon bg-primary">
                                <i class="material-icons">equalizer</i>
                            </div>
                            <div class="content">
                                <div class="text">BOUNCE RATE</div>
                                <div class="number">70%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1 hover-expand-effect">
                            <div class="icon bg-warning">
                                <i class="material-icons">battery_charging_full</i>
                            </div>
                            <div class="content">
                                <div class="text">BATTERY</div>
                                <div class="number">Charging</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1 hover-expand-effect">
                            <div class="icon bg-danger">
                                <i class="material-icons">brightness_low</i>
                            </div>
                            <div class="content">
                                <div class="text">BRIGHTNESS RATE</div>
                                <div class="number">60%</div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- #END# Hover Expand Effect -->
                <!-- Chart Samples -->
<!--                <div class="block-header">
                    <h2>CHART SAMPLES</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1">
                            <div class="icon bg-success">
                                <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                            </div>
                            <div class="content">
                                <div class="text">WEBSITE TRAFFICS</div>
                                <div class="number">127 526</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1">
                            <div class="icon bg-primary">
                                <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                            </div>
                            <div class="content">
                                <div class="text">WEBSITE IMPRESSIONS</div>
                                <div class="number">457 512</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1">
                            <div class="icon bg-warning">
                                <div class="chart chart-pie">30, 35, 25, 8</div>
                            </div>
                            <div class="content">
                                <div class="text">USAGE</div>
                                <div class="number">98%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1">
                            <div class="icon bg-danger">
                                <div class="chart chart-pie">30, 35, 25, 10</div>
                            </div>
                            <div class="content">
                                <div class="text">USAGE</div>
                                <div class="number">100%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1">
                            <div class="icon bg-success">
                                <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                            </div>
                            <div class="content">
                                <div class="text">DAILY SALES</div>
                                <div class="number">$12 526</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1">
                            <div class="icon bg-primary">
                                <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                            </div>
                            <div class="content">
                                <div class="text">TOTAL SALES</div>
                                <div class="number">$125 543</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1">
                            <div class="icon bg-warning">
                                <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                            </div>
                            <div class="content">
                                <div class="text">CURRENCY</div>
                                <div class="number">$1 063</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box infobox-type-1">
                            <div class="icon bg-danger">
                                <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                            </div>
                            <div class="content">
                                <div class="text">CURRENCY</div>
                                <div class="number">$1 125</div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- #END# Chart Samples -->
            </div>
        </section>
        <!-- Footer -->
        <footer>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-sm-6">
                        Copyright &copy; 2017, <b>Banyan Infotech</b>
                    </div>
                    <div class="col-sm-6 align-right">
                        Hand-crafted & Made with love :)
                    </div>
                </div>
            </div>
        </footer>
        <!-- #END# Footer -->
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Js -->
    <script src="assets/plugins/metisMenu/dist/metisMenu.js"></script>

    <!-- Pace Loader Js -->
    <script src="assets/plugins/pace/pace.js"></script>

    <!-- Screenfull Js -->
    <script src="assets/plugins/screenfull/src/screenfull.js"></script>

    <!-- Jquery Slimscroll Js -->
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Switchery Js -->
    <script src="assets/plugins/switchery/dist/switchery.js"></script>

    <!-- Jquery CountTo Js -->
    <script src="assets/plugins/jquery-countTo/jquery.countTo.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/widgets/infobox.js"></script>

    <!-- Google Analytics Code -->
    <script src="assets/js/google-analytics.js"></script>

    <!-- Demo Purpose Only -->
<!--    <script src="assets/js/demo.js"></script>-->
</body>
</html>
