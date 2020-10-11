<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ratingapp</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('resources/css/custom.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
    <script src="<?= base_url('resources/js/select2.min.js') ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('resources/css/') ?>select2.min.css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('resources/css/') ?>dataTables.bootstrap.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"> </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"> </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"> </script>

    <style>
    .skin-blue .wrapper,
    .skin-blue .main-sidebar,
    .skin-blue .left-side {
        background-color: #B9CE71 !important;
    }

    .skin-blue .sidebar a {
        color: #101010 !important;
    }

    .skin-blue .main-header .navbar {
        background-color: #B9CE71 !important;
    }


    .skin-blue .sidebar-menu>li>.treeview-menu {
        margin: 0 1px;
        background: #fdfffd !important;
    }

    .skin-blue .sidebar-menu>li:hover>a,
    .skin-blue .sidebar-menu>li.active>a {
        color: #fff !important;
        background: #63957e !important;
        border-left-color: #000000 !important;
    }

    .skin-blue .main-header .logo {
        background-color: #ffff !important;
        color: #fff;
        border-bottom: 0 solid transparent;
    }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">ratingapp</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">
                    <img src="<?php echo site_url('/resources/img/gform.jpeg') ?>" height="60px" width="170px"/>
                </span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="user-image"
                                    alt="User Image">
                                <span class="hidden-xs"><?php echo $this->session->userdata('full_name') ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <!-- <li>
                                        <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $this->session->userdata('full_name') ?>
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                    </li> -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <!-- <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right"> -->
                                        <a href="<?php echo base_url('login/change_password/'.$this->session->userdata('id')) ?>" class="btn btn-default btn-flat"><?php echo $this->lang->line('change_password_menu'); ?></a>
                                    <a href="<?php echo base_url('login/logout') ?>"
                                        class="btn btn-default btn-flat"><?php echo $this->lang->line('signout_menu'); ?></a>
                                    <!-- </div> -->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle"
                            alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $this->session->userdata('full_name') ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <!-- <li class="header">MAIN NAVIGATION</li> -->
                    <li>
                        <a href="<?php echo site_url();?>">
                            <i class="fa fa-dashboard"></i> <span><?php echo $this->lang->line('report_menu'); ?></span>
                        </a>
                    </li>
                    <!-- <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Rating Category</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('rating_category/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('rating_category/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li> -->
                    <!-- <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Rating</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('rating/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('rating/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li> -->
                    <!-- <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Role</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('role/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('role/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li> -->
                    <li>
                        <a href="#">
                            <i class="fa fa-desktop"></i> <span><?php echo $this->lang->line('branches_menu'); ?></span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo site_url('branch/add');?>"><i class="fa fa-plus"></i>
                                    <?php echo $this->lang->line('add_menu'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('branch/index');?>"><i class="fa fa-list-ul"></i>
                                    <?php echo $this->lang->line('listing_menu'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-desktop"></i> <span><?php echo $this->lang->line('employee_menu'); ?></span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo site_url('user/add');?>"><i class="fa fa-plus"></i>
                                    <?php echo $this->lang->line('add_menu'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('user/index');?>"><i class="fa fa-list-ul"></i>
                                    <?php echo $this->lang->line('listing_menu'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>User</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('user/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('user/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li> -->
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <center>
                <strong>&copy; ratingapp, Developed By <a href="https://gdigic.com">Global Digital
                        Consultants</a></strong>
            </center>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->

            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
    <!-- FastClick -->
    <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
    <!-- DatePicker -->
    <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
    <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
    <script src="<?php echo site_url('resources/js/global.js');?>"></script>
</body>

</html>