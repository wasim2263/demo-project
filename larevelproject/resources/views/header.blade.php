#circle {
    width: 50px;
    height: 50px;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    border-radius: 25px; 
}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Bootbusiness | Give unique title of the page here</title>
    <!-- Bootstrap -->
    {!!Html::style('css/bootstrap.min.css')!!}
    <!-- Bootstrap responsive -->
    {!!Html::style('css/bootstrap-responsive.min.css')!!}
    <!-- Font awesome - iconic font with IE7 support --> 
    {!!Html::style('css/font-awesome.css')!!}
    {!!Html::style('css/font-awesome-ie7.css')!!}
    <!-- Bootbusiness theme -->
    {!!Html::style('css/boot-business.css')!!}
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
   </head>
  <body>
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container" id="circle">
            <a href="index" class="brand brand-bootbus"><font color="white" size="60" style="opacity: 0.3"><b><i>RaR Fashion</i></b></font></a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
              <li><a href="index"><font color="white">Home</font></a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white">My Account</font><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header"></li>
                    <li><a href="customer_profile">Profile</a></li>
                    <li><a href="cust_setting">Setting</a></li>

                    </ul>   
                  </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white">Man</font><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">PRODUCTS</li>
                    <li><a href="Panjabi">Panjabi</a></li>
                    <li><a href="Pajama">Pajama</a></li>
                    <li><a href="PPSet">Panjabi  Pajama Set</a></li>
                    <li><a href="Shirt">Shirts</a></li>
                    <li><a href="TShirt">Tee Shirt</a></li>
                    <li><a href="Polo">Polo</a></li>
                    <li><a href="Fatua">Fatua</a></li>
                    <li><a href="Lungi">Lungi</a></li>
                    <li><a href="Men">All products</a></li>
                    </ul>   
                  </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white">Woman</font><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">PRODUCTS</li>
                    <li><a href="Sare">Sare</a></li>
                    <li><a href="Salwarkameez">Salwar kameez</a></li>
                    <li><a href="Nightwear">Nightwear</a></li>
                    <li><a href="Scarves">Scarves</a></li>
                    <li><a href="Dupatta">Dupatta</a></li>
                    <li><a href="Shawls">Shawls</a></li>
                    <li><a href="Fabric">Fabric</a></li>
                    <li><a href="women">All products</a></li>
                    </ul>   
                  </li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white">Kids</font><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">PRODUCTS</li>
                    <li><a href="Newborn">Newborn baby(age 0-1.5)</a></li>
                    <li><a href="Juniorgirl">Junior girls(age 2-7)</a></li>
                    <li><a href="Girl">Girls(age 8-15)</a></li>
                    <li><a href="Juniorboy">Junior boys(age 2-7)</a></li>
                    <li><a href="Boy">Boys(age 8-15)</a></li>
                    <li><a href="kids">All products</a></li>
                    </ul>   
                  </li>
                
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white">Wedding</font><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">PRODUCTS</li>
                    <li><a href="wedWoman">Woman</a></li>
                    <li><a href="wedMan">Man</a></li>
                    <li><a href="wedding">All products</a></li>
                    </ul>   
                  </li>
                                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white">About</font><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="our_works.html">Our works</a></li>
                    <li><a href="patnerships.html">Parnerships</a></li>
                    <li><a href="leadership.html">Leadership</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="blog.html">Blog</a></li>
                  </ul>
                </li>
                <li><a href="order1"><font color="white">Order</font></a></li>
                <?php     $name = session('key');
                    if($name!=null){

                      ?>
                      <li><a href="logout"><font color="white">Logout</font></a></li>
                      <?php
                    }
                    else
                    {
                ?>
                <li><a href="signup2"><font color="white">Sign up</font></a></li>
                <li><a href="signin2"><font color="white">Sign in</font></a></li>
                <?php
              }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
    @yield('content')




<!-- Start: FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="span2">
            <h4><i class="icon-star icon-white"></i> Products</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="product.html">Product1</a></li>
                <li><a href="product.html">Product2</a></li>
                <li><a href="product.html">Product3</a></li>
                <li><a href="all_products.html">All products</a></li>
              </ul>
            </nav>
            <h4><i class="icon-cogs icon-white"></i> Services</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="service.html">Service1</a></li>
                <li><a href="service.html">Service2</a></li>
                <li><a href="service.html">Service3</a></li>
                <li><a href="all_services.html">All services</a></li>              
              </ul>
            </nav>
          </div>
          <div class="span2">
            <h4><i class="icon-beaker icon-white"></i> About</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="our_works.html">Our works</a></li>
                <li><a href="patnerships.html">Patnerships</a></li>
                <li><a href="leadership.html">Leadership</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="blog.html">Blog</a></li>
              <ul>
            </nav>          
          </div>
          <div class="span2">
            <h4><i class="icon-thumbs-up icon-white"></i> Support</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact_us.html">Contact us</a></li>            
              </ul>
            </nav>
            <h4><i class="icon-legal icon-white"></i> Legal</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="#">License</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Security</a></li>      
              </ul>
            </nav>            
          </div>
          <div class="span3">
            <h4>Get in touch</h4>
            <div class="social-icons-row">
              <a href="#"><i class="icon-twitter"></i></a>
              <a href="#"><i class="icon-facebook"></i></a>
              <a href="#"><i class="icon-linkedin"></i></a>                                         
            </div>
            <div class="social-icons-row">
              <a href="#"><i class="icon-google-plus"></i></a>              
              <a href="#"><i class="icon-github"></i></a>
              <a href="mailto:soundar.rathinasamy@gmail.com"><i class="icon-envelope"></i></a>        
            </div>
            <div class="social-icons-row">
              <i class="icon-phone icon-large phone-number"></i> +919750227877
            </div>
          </div>      
          <div class="span3">
            <h4>Get updated by email</h4>
            <form>
              <input type="text" name="email" placeholder="Email address">
              <input type="submit" class="btn btn-primary" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
      <hr class="footer-divider">
      <div class="container">
        <p>
          &copy; 2012-3000 Bootbusiness, Inc. All Rights Reserved.
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/boot-business.js')!!}
  </body>
</html>
