<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />

</head>

<body>
  <div class="login-card">
    <h1>Log-in</h1><br>
  
    {!!Form::open(array('route'=>'course.store'))!!}
    <input type="text" name="course_code" placeholder="code">
    <input type="text" name="course_title" placeholder="title">
    <input type="file" name="imag" placeholder="img">
    <input type="submit" name="login" class="login login-submit" value="login">
  {!!Form::close()!!}

  <div class="login-help">
   <a href="#">Forgot Password</a>
	
  </div>
  

</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
	
  </body>

</html>