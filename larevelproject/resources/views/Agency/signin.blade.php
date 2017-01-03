<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Bootbusiness | Give unique title of the page here</title>
    <!-- Bootstrap -->
    <link href="assets/css1/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="assets/css1/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="assets/css1/font-awesome.css" rel="stylesheet">
    <link href="assets/css1/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="assets/css1/boot-business.css" rel="stylesheet">
  </head>
  <body>

    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome to Raiment</h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-lock"></i> Signin to Raiment</h4>
            <div class="widget-body">
              <div class="center-align">
              <?php
                 Session::forget('key');
                 Session::forget('keyadmin');
                 Session::forget('key2');
                 Session::forget('key5');
                 Session::forget('key10');
                 Session::forget('page');
                 Session::forget('suggestion');
                 Session::forget('complain');

              ?>
                   {!!Form::open(array('route'=>'signin.store','class'=>'form-horizontal form-signin-signup'))!!}
                  <input type="text" name="email" placeholder="Email">
                  <input type="password" name="password" placeholder="Password">
                  <div class="remember-me">
                    <div class="pull-left">
                      <label class="checkbox">
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                    <div class="pull-right">
                      <a href="#">Forgot password?</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <input type="submit" value="Signin" class="btn btn-primary btn-large">
            
                {!!Form::close()!!}
                <h4><i class="icon-thumbs-up"></i> Sign in with third party account</h4>
                <ul class="signin-with-list">
                  <li>
                    <a class="btn-twitter">
                      <i class="icon-twitter icon-large"></i>
                      Signin with Twitter
                    </a>
                  </li>
                  <li>
                    <a class="btn-facebook">
                      <i class="icon-facebook icon-large"></i>
                      Signin with Facebook
                    </a>
                  </li>
                  <li>
                    <a class="btn-google">
                      <i class="icon-google-plus icon-large"></i>
                      Signin with Google
                    </a>
                  </li>
                  <li>
                    <a class="btn-github">
                      <i class="icon-github icon-large"></i>
                      Signin with Github
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <!-- End: FOOTER -->
    <script type="text/javascript" src="assets/js1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js1/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js1/boot-business.js"></script>
  </body>
</html>