<?php
  session_start();
  session_unset();
?>

<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="login_files/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="login_files/font-awesome.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <title>Nguyễn Cao Thiêm - Mobile Developer Resume</title>
    <script src="https://use.fontawesome.com/303a8145d6.js"></script>
  </head>
  <body class="  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Thiem Jason - A mobile developer</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="../controllers/process-login.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input name="login-username" class="form-control" type="text" placeholder="Email" autofocus="" value="admin@admin.com">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input name="login-pass" class="form-control" type="password" placeholder="Password" value="">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
              <p class="semibold-text mb-2"><a href="../index.php"> Back to CV Page</a></p>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button id="login-btn-sigin" name="login-btn-sigin" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="login_files/jquery-3.js"></script>
    <script src="login_files/popper.js"></script>
    <script src="login_files/bootstrap.js"></script>
    <script src="login_files/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="login_files/pace.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });

      $('login-btn-signin').click(()=>{
        if($('login-username').val() == "" ||  $('login-pass').val() == "" ){
          alert("Fill the contents");
        }
      });
    </script>
  
</body></html>