<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Raiment</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/docs.css" rel="stylesheet">
<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<script type="text/javascript" src="layout/scripts/piecemaker/swfobject/swfobject.js"></script>
<script type="text/javascript">
var flashvars = {};
flashvars.cssSource = "layout/scripts/piecemaker/piecemaker.css";
flashvars.xmlSource = "layout/scripts/piecemaker/piecemaker.xml";
var params = {};
params.play = "false";
params.menu = "false";
params.scale = "showall";
params.wmode = "transparent";
params.allowfullscreen = "true";
params.allowscriptaccess = "sameDomain";
params.allownetworking = "all";
swfobject.embedSWF('layout/scripts/piecemaker/piecemaker.swf', 'piecemaker', '960', '430', '10', null, flashvars, params, null);
</script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.ico">

</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
<!-- Navbar
    ================================================== -->
<div class="jumbotron masthead">
  <div class="splash"> <img src="assets/img/home-banner-bg.jpg" alt="Banner" /> </div>
  <div class="splash"> <img src="assets/img/home-banner-bg2.jpg" alt="Banner" /> </div>
  <div class="splash"> <img src="assets/img/home-banner-bg3.jpg" alt="Banner" /> </div>
  <div class="nav-agency">
    <div class="navbar navbar-static-top"> 
      <!-- navbar-fixed-top -->
      <div class="navbar-inner">
        <div class="container"> <a class="brand" href="index"> <img src="assets/img/Logo.png" alt="Logo"></a>
          <div id="main-nav">
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="index2">Home</a> </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:"> Achievement <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="Our_Company_achieve">Our Company</a></li>
                    <li><a href="memberachieve">Member</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:"> My Account <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="Profile">Profile</a></li>
                    <li><a href="setting">Setting</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="javascript:" class="dropdown-toggle" data-toggle="dropdown"> Update <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                 <?php     $name = session('keyadmin');
                    if($name!=0){

                      ?>
                    <li><a href="Create_Employee">Create Employee</a></li>
                    <li><a href="Update_employee">Update Employee</a></li>
                     <?php
                    }?>
                    <li><a href="Update_Product">Update Product</a></li>
                    <li><a href="Update_Achieve">Update Achievement</a></li>
                    
                  </ul>
                </li>
                <li class="dropdown"><a href="javascript:" class="dropdown-toggle" data-toggle="dropdown"> Order <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="Orderlist">New Order</a></li>
                    <li><a href="Payment">PayMent</a></li>
                    <li><a href="Shipment">Shipment</a></li>
                     
                  </ul>
                </li>
                 <?php     $name = session('keyadmin');
                    if($name!=0){

                      ?>
                 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:"> Notification <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="Complain">Complain</a></li>
                    <li><a href="Suggestion">Suggestion</a></li>
                  </ul>
                </li>
                     <?php
                    }
                    else
                    {
                ?>
                 <li><a href="message">message</a> </li>
            <?php
              }
                ?>
                
                <li><a href="signin">LogOut</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @yield('content')

<footer class="footer">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <blockquote>
          <p class="testimonial">Working with Agency has been a refreshing experience. They listened to our needs and came up with a great solution.</p>
          <p class="name">Sarfraz Shoukat, <b>Owner - Greepit.com</b></p>
        </blockquote>
      </div>
    </div>
    <hr class="soften1">
    <div class="row-fluid">
      <div class="span3">
        <h4>Navigation</h4>
        <ul class="footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Work</a></li>
          <li><a href="#">Elements</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
      <div class="span3 MT70">
        <h4>Useful Links</h4>
        <ul class="footer-links">
          <li><a href="#">eGrappler.com</a></li>
          <li><a href="#">Greepit.com</a></li>
          <li><a href="#">WordPress.com</a></li>
          <li><a href="#">ThemeForest.net</a></li>
          <li><a href="#">Free Vector Icons</a></li>
        </ul>
      </div>
      <div class="span3 MT70">
        <h4>Something from Flickr</h4>
        <div id="flickr-wrapper"> 
          <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=10133335@N08"></script> 
        </div>
      </div>
      <div class="span3 MT70">
        <h4>Who We Are</h4>
        <p>We are a creative production studio specialising in all things digital. Find us, connect & collaborate.</p>
        <ul class="footer_social clearfix">
          <li><a href="http://www.facebook.com/" class="footer_facebook">Facebook</a></li>
          <li><a href="#" class="footer_twitter">Twitter</a></li>
          <li><a href="#" class="footer_googleplus">Google+</a></li>
          <li><a href="#" class="footer_rss">RSS</a></li>
        </ul>
      </div>
    </div>
    <hr class="soften1 copyhr">
    <div class="row-fluid copyright">
      <div class="span12">Copyright &copy; 2012. Greepit.com</div>
    </div>
  </div>

  </footer>
<!-- Le javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> 
<script src="assets/js/jquery.js" type="text/javascript"></script> 
<script src="assets/js/google-code-prettify/prettify.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-transition.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-alert.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-modal.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-dropdown.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-scrollspy.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-tab.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-tooltip.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-popover.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-button.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-collapse.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-carousel.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-typeahead.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-affix.js" type="text/javascript"></script> 
<script src="assets/js/application.js" type="text/javascript"></script> 
<script src="assets/js/superfish.js" type="text/javascript"></script> 
<script src="assets/js/custom.js" type="text/javascript"></script> 
<script type="text/javascript">
        $(document).ready(function () {

            var showCaseItems = $('.show-case-item').hide();

            var splashes = $('.splash').hide();
            //get each image for each slide and set it as a background of the slide
            //            splashes.each(function () {
            //                var img = $(this).find('img');
            //                var imgSrc = img.attr('src');
            //                img.css('visibility', 'hidden');
            //                $(this).css({ 'background-image': 'url(' + imgSrc + ')', 'background-repeat': 'no-repeat' });
            //            });

            splashes.eq(0).show();
            showCaseItems.eq(0).show();

            var prevIndex = -1;
            var nextIndex = 0;
            var currentIndex = 0;

            $('#banner-pagination li a').click(function () {

                nextIndex = parseInt($(this).attr('rel'));

                if (nextIndex != currentIndex) {
                    $('#banner-pagination li a').html('<img src="assets/img/slidedot.png" alt="slide"/>');
                    $(this).html('<img src="assets/img/slidedot-active.png" alt="slide"/>');
                    currentIndex = nextIndex;
                    if (prevIndex < 0) prevIndex = 0;

                    splashes.eq(prevIndex).css({ opacity: 1 }).animate({ opacity: 0 }, 500, function () {
                        $(this).hide();
                    });
                    splashes.eq(nextIndex).show().css({ opacity: 0 }).animate({ opacity: 1 }, 500, function () { });

                    showCaseItems.eq(prevIndex).css({ opacity: 1 }).animate({ opacity: 0 }, 500, function () {
                        $(this).hide();
                        showCaseItems.eq(nextIndex).show().css({ opacity: 0 }).animate({ opacity: 1 }, 200, function () { });
                    });

                    prevIndex = nextIndex;
                }

                return false;
            });

        });
    </script>
</body>
</html>
