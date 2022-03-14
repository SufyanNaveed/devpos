<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>CRM</title>
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo assets_url(); ?>crm-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo assets_url(); ?>crm-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo assets_url(); ?>crm-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo assets_url(); ?>crm-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo assets_url(); ?>crm-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="<?php echo assets_url(); ?>crm-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>crm-assets/css<?= LTR ?>/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>crm-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo assets_url(); ?>crm-assets/fonts/flag-icon-css/css<?= LTR ?>/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>crm-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>crm-assets/css<?= LTR ?>/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>crm-assets/css<?= LTR ?>/app.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>crm-assets/css<?= LTR ?>/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo assets_url(); ?>crm-assets/css<?= LTR ?>/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo assets_url(); ?>crm-assets/css<?= LTR ?>/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>crm-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" href="<?php echo assets_url('crm-assets/custom/datepicker.min.css') ?>">
    <link rel="stylesheet" href="<?php echo assets_url('crm-assets/custom/jquery.dataTables.css') ?>">
    <link rel="stylesheet" href="<?php echo assets_url('crm-assets/custom/summernote-bs4.css'); ?>">
    <link rel="stylesheet" href="<?php echo assets_url('crm-assets/custom/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo assets_url('crm-assets/css/custom_style.css'); ?>">
    <link rel="stylesheet" href="<?php echo assets_url('crm-assets/css/fullcalendar.bundle.css'); ?>">
    

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>/crm-assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>/crm-assets/css/custom.css">

    <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_dots.min.css" rel="stylesheet" type="text/css" />
    <!-- END Custom CSS-->
    <script src="<?php echo assets_url(); ?>crm-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo assets_url(); ?>crm-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="<?php echo assets_url(); ?>crm-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo assets_url(); ?>crm-assets/portjs/raphael.min.js" type="text/javascript"></script>
    <script src="<?php echo assets_url(); ?>crm-assets/portjs/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo assets_url(); ?>crm-assets/js/summernote-bs4.min.js" type="text/javascript"></script>
    <script type="text/javascript">var baseurl = '<?php echo assets_url() ?>';</script>
    <script src="<?php echo assets_url('crm-assets/js/icheck.min.js'); ?>"></script>
    <script src="<?php echo assets_url('crm-assets/js/jquery.form-validator.min.js'); ?>"></script>
    <script src="<?php echo assets_url('crm-assets/js/custom.js'); ?>"></script>
    <script src='<?php echo assets_url("crm-assets/js/moment.min.js")?>'></script>
    <script src='<?php echo assets_url("crm-assets/js/fullcalendar.min.js")?>'></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script>
</head>
<style type="text/css">
.header-navbar.navbar-semi-dark .navbar-header{
       background: #ffffff!important; 
}
.masthead {
    min-height: 30rem;
    position: relative;
    display: table;
    width: 100%;
    height: 100%;
    padding-top: 8rem;
    padding-bottom: 8rem;
    background: -webkit-gradient(linear,left top,right top,from(rgba(255,255,255,.1)),to(rgba(255,255,255,.1))),url(userfiles/bg-masthead.jpg);
    background: linear-gradient(
90deg
,rgba(255,255,255,.1) 0,rgba(255,255,255,.1) 100%),url(userfiles/bg-masthead.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
.text-secondary {
    color: #ecb807!important;
}
h1, h2, h3, h4, h5, h6 {
    font-weight: 700;
}
@media (min-width: 992px)
.masthead h1 {
    font-size: 5.5rem;
}

body{
   font-family:inherit;
}

.btn {
    color: #fff;
    font-weight: 500;
    font-size: 21px;
    min-width: 120px;
    padding: 12px 65px;
    width: 30%;
    height: 50px;
    box-shadow: none !important;
    outline: 0 !important;
}
@media only screen and (max-width: 600px) {
  .btn {
    color: #fff;
    font-weight: 500;
    font-size: 21px;
    min-width: 120px;
    padding: 12px 65px;
    width: 70%;
    height: 50px;
    box-shadow: none !important;
    outline: 0 !important;
   }
}
</style>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns"
      class="vertical-layout vertical-menu 2-columns  fixed-navbar  menu-expanded">

<!-- navbar-fixed-top-->
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <!-- <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a>
                </li>
                <li class="nav-item"><a href="<?php echo base_url() ?>" class="navbar-brand nav-link"><img
                                alt="branding logo"
                                src="<?php echo substr_replace(base_url(), '', -4); ?>userfiles/theme/logo-header.png"
                                data-expand="<?php echo substr_replace(base_url(), '', -4); ?>userfiles/theme/logo-header.png"
                                data-collapse="<?php echo substr_replace(base_url(), '', -4); ?>userfiles/theme/logo-header.png"
                                class="brand-logo height-50"></a></li>
                <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile"
                                                                    class="nav-link open-navbar-container"><i
                                class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
            </ul>
        </div> -->
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                <!-- <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i
                                    class="icon-menu5"> </i></a></li>
                    <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i
                                    class="icon icon-expand2"></i></a></li>

                </ul> -->
                <ul class="nav navbar-nav float-xs-right">



                    <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown"
                                                                   class="dropdown-toggle nav-link dropdown-user-link"><span
                                    class="avatar avatar-online"><img
                                        src="<?php echo assets_url(); ?>crm-assets/images/user.png"
                                        alt="avatar"><i></i></span></a>
                        <div class="dropdown-menu dropdown-menu-right"><a href="<?php echo base_url(); ?>user/profile"
                                                                          class="dropdown-item"><i
                                        class="icon-head"></i><?php echo $this->lang->line('Profile') ?></a>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo base_url('user/logout'); ?>" class="dropdown-item"><i
                                        class="icon-power3"></i> <?php echo $this->lang->line('Logout') ?></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->



<div class="masthead d-flex">
  <div class="container text-center my-auto"><br>
      <br><br>
      <!-- <h1 class="mb-1 text-secondary">Select Any Option</h1><br> -->
      <!-- <h3 class=" text-white mb-5 rounded"> -->
         <!-- <em>You can slect any button for next usage.</em> -->
      <!-- </h3> -->
      <a class="m-1 btn btn-info btn-xl js-scroll-trigger" href="<?php echo base_url(); ?>pets" target="_blank">
         <i class="fas fa-shopping-cart"></i> Pet Details
      </a>  <br>

      <a class="m-1 btn btn-success btn-xl js-scroll-trigger" href="<?php echo base_url(); ?>booking/schedule" target="_blank">
         <i class="fas fa-tv"></i> Book Appointment
      </a> <br>

      <a class="m-1 btn btn-warning btn-xl js-scroll-trigger" href="<?php echo base_url(); ?>invoices/invoices" target="_blank">
         <i class="fas fa-user-cog"></i> <?php echo $this->lang->line('Invoices'); ?>
      </a><br> 
   
      <a class="m-1 btn btn-info btn-xl js-scroll-trigger" href="<?php echo base_url(); ?>user/profile" target="_blank">
         <i class="fas fa-umbrella"></i> <?php echo $this->lang->line('Profile') ?>
      </a> <br> 

      

      
	 
    </div>
	
    <div class="overlay"></div>
  </div>