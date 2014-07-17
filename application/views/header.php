<!DOCTYPE html>
<html>
  <head>
      <title>Wangle-<?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link media="screen" type="text/css" href="http://scriptigniter.com/emp/css/bootstrap.css" rel="stylesheet">
<link href="http://scriptigniter.com/emp/css/jquery-ui.css" rel="stylesheet">
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
  $(function() {
    $( ".datepicker" ).datepicker({changeMonth: true,
	dateFormat: "dd-mm-yy",
	changeYear: true,
	yearRange: "1980:c+10"
	});
  });
  </script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendors/select/bootstrap-select.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendors/moment/moment.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/forms.js"></script>
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    
    <!-- styles -->
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    
  </head>
  <body class="login-bg">
  	
      <div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                <h1><a href="<?php echo site_url(); ?>" class="Bold header">Wangle</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user;?><b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
                                  <li><a href="<?php echo site_url();?>/auth/logout">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
      </div>
      <div class="page-content">
   