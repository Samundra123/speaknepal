<?php

/**
 * @author Owner
 * @copyright 2015
 */
 
?>


<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8" />

    <title>Register | Log in</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport' />

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
    <script type="text/javascript">
      function verifyuser(str)
      {
        if(str.length ==0){
          document.getElementById("txtHint").innerHTML ="";

          return;
        }

        else{

          var xmlhttp=new XMLHttpRequest();

          xmlhttp.onreadystatechange= function(){

            if(xmlhttp.readyState == 4 && xmlhttp.status==200) {

              document.getElementById("txtHint").innerHTML = xmlhttp.responseText;

            }

          }

          xmlhttp.open("POST","checkorguser",true);
          xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

          xmlhttp.send("s="+str);

        }


        }


        function verifyorg(str)
      {
        if(str.length ==0){
          document.getElementById("returnMessageOrg").innerHTML ="";

          return;
        }

        else{

          var xmlhttp=new XMLHttpRequest();

          xmlhttp.onreadystatechange= function(){

            if(xmlhttp.readyState == 4 && xmlhttp.status==200) {

              document.getElementById("returnMessageOrg").innerHTML = xmlhttp.responseText;

            }

          }

          xmlhttp.open("POST","checkorg",true);
          xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

          xmlhttp.send("s="+str);

        }


        }

      

    </script>
  </head>
  <body class="register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="../../index2.html"><b>REG</b>ISTER</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
         <span style="color:red;"><?php echo validation_errors(); ?></span>
        <?php echo form_open_multipart('login/insert_registered_user') ?>


         

          <div class="form-group has-feedback">
            <input type="text" class="form-control"  onchange="verifyorg(this.value)" id="org" value="<?php echo set_value('orgname'); ?>" name="fullname" placeholder="FULL NAME"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <p id="returnMessageOrg" style="color:red"></p>
          </div>

          <div class="form-group has-feedback">
            <input type="text" class="form-control"   onchange="verifyuser(this.value)" value="<?php echo set_value('username'); ?>" name="username" placeholder="USER NAME"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <p id="txtHint" style="color:red"></p>
          </div>

          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="cpassword" value="<?php echo set_value('cpassword'); ?>" placeholder="Retype password"/>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="file" name="userfile" size="20"  />
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="row">
           
            <div class="col-xs-8">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- / hello .col -->
          </div>
        </form>        


        <a href="<?php echo base_url('index.php'); ?>/login" class="text-center">I already have a membership</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

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