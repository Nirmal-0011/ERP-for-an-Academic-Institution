<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Elite Hospital Admin Template - Hospital admin dashboard web app kit</title>
    <!-- Bootstrap Core CSS -->
   <link href="<?php echo base_url();?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url();?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- animation CSS -->
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url();?>assets/css/colors/megna.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img src="../plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><strong>elite</strong>hospital</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="../plugins/images/users/d1.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Dr. Steave</b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i>  My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i>  Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i>  Account Setting</a></li>
                            <li><a href="login.html"><i class="fa fa-power-off"></i>  Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="../plugins/images/users/d1.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">Dr. Steve Gection<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="index.html" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger"> Multipurpose <span class="fa arrow"></span> <span class="label label-rouded label-danger pull-right">HOT</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="../eliteadmin-hospital/index.html">Hospital Admin</a> </li>
                            <li> <a href="../eliteadmin-crm/index.html">CRM Admin</a> </li>
                            <li> <a href="../eliteadmin-university/index.html">University Admin</a> </li>
                            <li> <a href="../eliteadmin-music/index.html">Music Admin</a> </li>
                            <li> <a href="../eliteadmin-real-estate/index.html">Real Estate Admin</a> </li>
                            <li role="separator" class="divider"></li>
                            <li> <a href="../eliteadmin-inverse/index.html">Inverse</a></li>
                            <li> <a href="../eliteadmin-colors/index.html">Colors</a></li>
                            <li> <a href="../eliteadmin/index.html">Eliteadmin</a></li>
                            <li> <a href="../eliteadmin-wpmenu/index.html">Wpmenu</a></li>
                            <li> <a href="../eliteadmin-ecommerce/index.html">Ecommerce</a></li>
                            <li> <a href="../eliteadmin-modern/index.html">Modern</a></li>
                            <li> <a href="../eliteadmin-inverse-php/index.php">Basic PHP</a></li>
                            <li> <a href="../eliteadmin-material/index3.html">Material Design</a></li>
                            <li> <a href="../eliteadmin-dark/index.html">Dark</a></li>
                            <li> <a href="../eliteadmin-mini-sidebar/index3.html">Mini Sidebar</a></li>
                            <li> <a href="../eliteadmin-horizontal-navbar/index3.html">Horizontal Boxed Nav</a></li>
                            <li> <a href="../eliteadmin-horizontal-nav-fullwidth/index.html">Horizontal Full Nav</a></li>
                            <li> <a href="../eliteadmin-iconbar/index4.html">Iconbar</a></li>
                            <li> <a href="../eliteadmin-rtl/index.html">Eliteadmin RTL</a></li>
                            <li> <a href="../eliteadmin-inverse-rtl/index.html">Inverse RTL</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-envelope p-r-10"></i> <span class="hide-menu"> Mailbox <span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">6</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="inbox.html">Inbox</a></li>
                            <li> <a href="inbox-detail.html">Inbox detail</a></li>
                            <li> <a href="compose.html">Compose mail</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Professional</li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> Appointment <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="doctor-schedule.html">Doctor Schedule</a> </li>
                            <li> <a href="book-appointment.html">Book Appointment</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Doctors <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="doctors.html">All Doctors</a> </li>
                            <li> <a href="add-doctor.html">Add Doctor</a> </li>
                            <li> <a href="edit-doctor.html">Edit Doctor</a> </li>
                            <li> <a href="doctor-profile.html">Doctor Profile</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Patients <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="patients.html">All Patients</a> </li>
                            <li> <a href="add-patient.html">Add Patient</a> </li>
                            <li> <a href="edit-patient.html">Edit Patient</a> </li>
                            <li> <a href="patient-profile.html">Patient Profile</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu"> Reports <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="payment-report.html">Payment Report</a></li>
                            <li> <a href="income-report.html">Income Report</a></li>
                            <li> <a href="sales-report.html">Sales Report</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inr p-r-10"></i> <span class="hide-menu"> Payments <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="payments.html">Payments</a></li>
                            <li> <a href="add-payments.html">Add Payment</a></li>
                            <li> <a href="patient-invoice.html">Patient Invoice</a></li>
                        </ul>
                    </li>
                    <li> <a href="widgets.html" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
                    <li> <a href="#" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="fontawesome.html">Font awesome</a> </li>
                            <li> <a href="themifyicon.html">Themify Icons</a> </li>
                            <li> <a href="simple-line.html">Simple line Icons</a> </li>
                            <li><a href="linea-icon.html">Linea Icons</a></li>
                            <li><a href="weather.html">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap">--- Extra Components</li>
                    <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="cards.html">Cards</a></li>
                            <li><a href="panels-wells.html">Panels and Wells</a></li>
                            <li><a href="panel-ui-block.html">Panels With BlockUI</a></li>
                            <li><a href="panel-draggable.html">Draggable Panel</a></li>
                            <li><a href="portlet-draggable.html">Draggable Portlet</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="bootstrap-switch.html">Bootstrap Switch</a></li>
                            <li><a href="date-paginator.html">Date Paginator</a></li>
                            <li><a href="sweatalert.html">Sweat alert</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="grid.html">Grid</a></li>
                            <li><a href="tabs.html">Tabs</a></li>
                            <li><a href="tab-stylish.html">Stylish Tabs</a></li>
                            <li><a href="modals.html">Modals</a></li>
                            <li><a href="progressbars.html">Progress Bars</a></li>
                            <li><a href="notification.html">Notifications</a></li>
                            <li><a href="carousel.html">Carousel</a></li>
                            <li><a href="list-style.html">List & Media object</a></li>
                            <li><a href="user-cards.html">User Cards</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="timeline-horizontal.html">Horizontal Timeline</a></li>
                            <li><a href="nestable.html">Nesteble</a></li>
                            <li><a href="range-slider.html">Range Slider</a></li>
                            <li><a href="ribbons.html">Ribbons</a></li>
                            <li><a href="steps.html">Steps</a></li>
                            <li><a href="session-idle-timeout.html">Session Idle Timeout</a></li>
                            <li><a href="session-timeout.html">Session Timeout</a></li>
                            <li><a href="tooltip-stylish.html">Stylish Tooltip</a></li>
                            <li><a href="bootstrap.html">Bootstrap UI</a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Sample Pages<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">30</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="starter-page.html">Starter Page</a></li>
                            <li><a href="blank.html">Blank Page</a></li>
                            <li><a href="javascript:void(0)" class="waves-effect">Email Templates
            <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="../email-templates/basic.html">Basic</a></li>
                                    <li><a href="../email-templates/alert.html">Alert</a></li>
                                    <li><a href="../email-templates/billing.html">Billing</a></li>
                                    <li><a href="../email-templates/password-reset.html">Reset Pwd</a></li>
                                </ul>
                            </li>
                            <li><a href="lightbox.html">Lightbox Popup</a></li>
                            <li><a href="treeview.html">Treeview</a></li>
                            <li><a href="search-result.html">Search Result</a></li>
                            <li><a href="utility-classes.html">Utility Classes</a></li>
                            <li><a href="custom-scroll.html">Custom Scrolls</a></li>
                            <li><a href="login.html">Login Page</a></li>
                            <li><a href="login2.html">Login v2</a></li>
                            <li><a href="animation.html">Animations</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="register2.html">Register v2</a></li>
                            <li><a href="register3.html">3 Step Registration</a></li>
                            <li><a href="recoverpw.html">Recover Password</a></li>
                            <li><a href="lock-screen.html">Lock Screen</a></li>
                            <li><a href="400.html">Error 400</a></li>
                            <li><a href="403.html">Error 403</a></li>
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="500.html">Error 500</a></li>
                            <li><a href="503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li> <a href="forms.html" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="form-basic.html">Basic Forms</a></li>
                            <li><a href="form-layout.html">Form Layout</a></li>
                            <li><a href="form-advanced.html">Form Addons</a></li>
                            <li><a href="form-material-elements.html">Form Material</a></li>
                            <li><a href="form-float-input.html">Form Float Input</a></li>
                            <li><a href="form-upload.html">File Upload</a></li>
                            <li><a href="form-mask.html">Form Mask</a></li>
                            <li><a href="form-img-cropper.html">Image Cropping</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-dropzone.html">File Dropzone</a></li>
                            <li><a href="form-pickers.html">Form-pickers</a></li>
                            <li><a href="icheck-control.html">Icheck Form Controls</a></li>
                            <li><a href="form-wizard.html">Form-wizards</a></li>
                            <li><a href="form-typehead.html">Typehead</a></li>
                            <li><a href="form-xeditable.html">X-editable</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                            <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                        </ul>
                    </li>
                    <li> <a href="tables.html" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">7</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="basic-table.html">Basic Tables</a></li>
                            <li><a href="table-layouts.html">Table Layouts</a></li>
                            <li><a href="data-table.html">Data Table</a></li>
                            <li class="hidden"><a href="crud-table.html">Crud Table</a></li>
                            <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                            <li><a href="responsive-tables.html">Responsive Tables</a></li>
                            <li><a href="editable-tables.html">Editable Tables</a></li>
                            <li><a href="foo-tables.html">FooTables</a></li>
                            <li><a href="jsgrid.html">JsGrid Tables</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap">--- Support</li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                            <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                            <li> <a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="login.html" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    <li class="hide-menu">
                        <a href="javacript:void(0);">
                            <span>Progress Report</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                            </div>
                            <span>Leads Report</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Hospital Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Hospital</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!--row -->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-user bg-megna"></i>
                                <div class="bodystate">
                                    <h4>370</h4>
                                    <span class="text-muted">New Patient</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-shopping-cart bg-info"></i>
                                <div class="bodystate">
                                    <h4>342</h4>
                                    <span class="text-muted">OPD Patient</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-wallet bg-success"></i>
                                <div class="bodystate">
                                    <h4>13</h4>
                                    <span class="text-muted">Today's Ops.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-wallet bg-inverse"></i>
                                <div class="bodystate">
                                    <h4>$34650</h4>
                                    <span class="text-muted">Hospital Earning</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small> New Patient</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall</h6>
                                    <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6>
                                    <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6>
                                    <b>5.50%</b></div>
                            </div>
                            <div id="sparkline8" class="minus-mar"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> 18% less then last month</small>OPD Patients</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall</h6>
                                    <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6>
                                    <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6>
                                    <b>5.50%</b></div>
                            </div>
                            <div id="sparkline9" class="minus-mar"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small>Treatment</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6>
                                    <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6>
                                    <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6>
                                    <b>5.50%</b></div>
                            </div>
                            <div id="sparkline10" class="minus-mar"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!--row -->
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Patients In</h3>
                            <ul class="list-inline text-center">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>OPD</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #b4becb;"></i>ICU</h5>
                                </li>
                            </ul>
                            <div id="morris-area-chart1" style="height: 370px;"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Hospital Earning</h3>
                            <ul class="list-inline text-center">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>OPD</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #b4becb;"></i>ICU</h5>
                                </li>
                            </ul>
                            <div id="morris-area-chart2" style="height: 370px;"></div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">New Patient List</h3>
                            <p class="text-muted">this is the sample data here for crm</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Diseases</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Deshmukh</td>
                                            <td>Prohaska</td>
                                            <td>@Genelia</td>
                                            <td><span class="label label-danger">Fever</span> </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Deshmukh</td>
                                            <td>Gaylord</td>
                                            <td>@Ritesh</td>
                                            <td><span class="label label-info">Cancer</span> </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sanghani</td>
                                            <td>Gusikowski</td>
                                            <td>@Govinda</td>
                                            <td><span class="label label-warning">Lakva</span> </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Roshan</td>
                                            <td>Rogahn</td>
                                            <td>@Hritik</td>
                                            <td><span class="label label-success">Dental</span> </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Joshi</td>
                                            <td>Hickle</td>
                                            <td>@Maruti</td>
                                            <td><span class="label label-info">Cancer</span> </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Nigam</td>
                                            <td>Eichmann</td>
                                            <td>@Sonu</td>
                                            <td><span class="label label-success">Dental</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Laboratory Test</h3>
                            <p class="text-muted">this is the sample data here for crm</p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>ECG</th>
                                            <th>Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Genelia Deshmukh</td>
                                            <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#01c0c8"], "stroke":["#01c0c8"]}' data-height="40">0,-3,-2,-4,-5,-4,-3,-2,-5,-1</span> </td>
                                            <td><span class="text-danger text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 28.76%</span> </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ajay Devgan</td>
                                            <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#01c0c8"], "stroke":["#01c0c8"]}' data-height="40">0,-1,-1,-2,-3,-1,-2,-3,-1,-2</span> </td>
                                            <td><span class="text-warning text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 8.55%</span> </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Hrithik Roshan</td>
                                            <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#01c0c8"], "stroke":["#01c0c8"]}' data-height="40">0,3,6,1,2,4,6,3,2,1</span> </td>
                                            <td><span class="text-success text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 58.56%</span> </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Steve Gection</td>
                                            <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#01c0c8"], "stroke":["#01c0c8"]}' data-height="40">0,3,6,4,5,4,7,3,4,2</span> </td>
                                            <td><span class="text-info text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 35.76%</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme working">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/bootstrap/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>assets/js/waves.js"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url();?>assets/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url();?>assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- jQuery peity -->
    <script src="<?php echo base_url();?>assets/plugins/bower_components/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bower_components/peity/jquery.peity.init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dashboard1.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url();?>assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>




</body>

</html>
