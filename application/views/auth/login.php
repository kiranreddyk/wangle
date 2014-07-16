
<!DOCTYPE html>
<html>
  <head>
    <title>Wangle-Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

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
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
                          <h1><a href="<?php echo site_url(); ?>" class="Bold header">Wangle</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
                                        <h1 class="h1"><?php echo lang('login_heading');?></h1>
<hr>

<div id="infoMessage" ><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

<div class="action">         <input class="form-control" type="text" placeholder="E-mail address" name="identity"><br>
    <input class="form-control" type="password" placeholder="Password" name="password">
     </div>
 
  <br>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  

<br>

  <input type="submit" class="btn btn-primary signup" value="Login" name="submit">

<?php echo form_close();?>

  <p><a href="forgot_password" class="btn"><?php echo lang('login_forgot_password');?></a></p>
			                </div>                
			            </div>
			        </div>

			       
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
  </body>
</html>
