<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- start: Meta -->
      <meta charset="utf-8">
      <title>Admmin Login Panel</title>
      <!-- end: Meta -->
      <!-- start: Mobile Specific -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- end: Mobile Specific -->
      <!-- start: CSS -->
      <link id="bootstrap-style" href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url()?>assets/admin/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link id="base-style" href="<?php echo base_url()?>assets/admin/css/style.css" rel="stylesheet">
      <link id="base-style-responsive" href="<?php echo base_url()?>assets/admin/css/style-responsive.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
      <!-- end: Favicon -->
      <style type="text/css">
         body { background: url(<?php echo base_url()?>assets/admin/img/bg-login.jpg) !important; }
      </style>
   </head>
   <body>
      <div class="container-fluid-full">
         <div class="row-fluid">
            <div class="row-fluid">
               <div class="login-box">
                  <div class="icons">
                     <a href="<?php echo base_url();?>"><i class="halflings-icon home"></i></a>
                  </div>
                  <h2>Login to your account</h2>
                  <style type="text/css">
                     #result{color:red}
                     #result p{color:red}
                  </style>
                  <div id="result">
                     <p><?php echo $this->session->flashdata('message');?></p>
                  </div>
                  <form id="adminlogincheck" class="form-horizontal" method="post">
                     <fieldset>
                        <div class="input-prepend" title="User Email">
                           <span class="add-on"><i class="halflings-icon user"></i></span>
                           <input class="input-large span10" value="<?php echo set_value('user_email');?>" name="user_email" id="user_email" type="text" placeholder="type useremail"/>
                           <?php echo form_error('user_email'); ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="input-prepend" title="User Password">
                           <span class="add-on"><i class="halflings-icon lock"></i></span>
                           <input class="input-large span10" name="user_password" id="user_password" type="password" placeholder="type password"/>
                           <?php echo form_error('user_password'); ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="button-login">  
                           <button type="submit" class="btn btn-primary adminlogincheck" name="admin_login">Login</button>
                        </div>
                        <div class="clearfix"></div>
                     </fieldset>
                  </form>
               </div>
               <!--/span-->
            </div>
            <!--/row-->
         </div>
         <!--/.fluid-container-->
      </div>
      <!--/fluid-row-->
      <script src="<?php echo base_url()?>assets/admin/js/jquery-1.9.1.min.js"></script>
      <script src="<?php echo base_url()?>assets/admin/js/jquery-migrate-1.0.0.min.js"></script>
   </body>
</html>