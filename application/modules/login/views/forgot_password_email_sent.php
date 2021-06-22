<?php

/**
 * @author Owner
 * @copyright 2015
 */



?>
<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">

    <title>Organization | Log in</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(''); ?>templates/AdminLTE-2.1.1//bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme style -->
    <link href="<?php echo base_url(''); ?>templates/AdminLTE-2.1.1/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- iCheck -->
    <link href="<?php echo base_url(''); ?>templates/AdminLTE-2.1.1/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="login-page">

    <div class="login-box">

      <div class="login-logo">

        <a href="#">Organization <b>For</b>got</a>

      </div><!-- /.login-logo -->

      <div class="login-box-body">

        

         <div class="form-group has-feedback">

         
            <p>An Email has been sent to your account please check it procede as the email says</p>

        
            <div class="col-md-6">
         
          
          <a class="btn btn-info btn-sm btn-block" href="<?php echo base_url('index.php'); ?>"login" role="button">Go to Login</a>

        </div>
       

      </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(''); ?>templates/AdminLTE-2.1.1//plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(''); ?>templates/AdminLTE-2.1.1//bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url(''); ?>templates/AdminLTE-2.1.1//plugins/iCheck/icheck.min.js" type="text/javascript"></script>

    <script>

      $(function () {

        $('input').iCheck({

          checkboxClass: 'icheckbox_square-blue',

          radioClass: 'iradio_square-blue',

          increaseArea: '20%' // optional

        });

      });

    </script>

  </body>
  
</html>