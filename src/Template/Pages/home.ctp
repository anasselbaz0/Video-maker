<?php $this->layout= false ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Video Maker : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/logo.png"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Cabin for Title -->
    <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
    <!-- Pacifico for Logo   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>  

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  
  <!-- Start menu area -->
  <div class="nav-area">
 
</div>
  <div class="nav-area">    
    <a id="menu-btn" href="#"><i class="fa fa-bars"></i></a>

    <nav class="main-nav" id="main-menu">

      <span class="fa fa-remove" id="close"></span>
      <ul>  
        <li>
          <!-- <?= $this->Html->link('Login', '/users/login') ?> -->
          <a href="" data-toggle="modal" data-target="#modal1"><i class="fa fa-user"></i><span>Login</span></a></li>
        <li><a href="" data-toggle="modal" data-target="#modal2"><i class="fa fa-registered"></i><span>Register</span></a></li>
        <li><a href="#header"><i class="fa fa-home" aria-hidden="true"></i></i><span>Home</span></a></li>
        <li><a href="#features"><i class="fa fa-server"></i><span>Services</span></a></li>
        <li><a href="#howit-works"><i class="fa fa-hourglass"></i><span>How it Works</span></a></li>
        <li><a href="#download-app"><i class="fa fa-download"></i><span>Download</span></a></li>
        <li><a href="#testimonial"><i class="fa fa-certificate"></i><span>Testimonials</span></a></li>
        <li><a href="#contact"><i class="fa fa-envelope-o"></i><span>Contact</span></a></li>  
      </ul>      
    </nav>
  </div>  






<section id="form-log">
   <div><a href="file:///C:/Users/jira-/Desktop/MarkUps-App-Landy/app-landy/Login/index.html"></a></div>
</section>
  <!-- End menu area -->

  <!-- Start header section --> 
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->

         <video autoplay muted loop id="myVideo" style="height: 100%;">
              <source src="web.mp4" type="video/mp4">
            </video>

      <div class="overlay">
        <div class="header-content">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="header-top">
                  <!-- Start logo area -->
                  <div class="logo-area">
                    <!-- Image based logo -->
                    <a class="logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                    <!-- Text based logo -->
                    <!-- <a class="logo" href="index.html">App Landy.</a> -->
                  </div>
                  <!-- End logo area -->                 
                </div>
              </div>
              <div class="col-md-12">
                <div class="header-bottom">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="header-bottom-left"  style="margin-left: 300px;">
                     <h1>Make your own story</h1>
                      <center><p>Make outstanding social videos in minutes with the power of video maker<br>
                                      Be a video superhero</p></center>
                      <?php echo $this->Html->link('GET STARTED', ['controller'=>'users','action'=>'login'],['class'=>'download-btn']) ?>
                    </div>
                  </div>
                  
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </header>
  <!-- End header section --> 

  <!-- Start Features -->
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Our <span>Services</span></h2>
            <p>Video maker lets you trim clips, cut, crop, add text and emojis. Also, import videos from anywhere and start editing. With our innate editing options, you’ll be producing great videos in no time.</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="features-area">
            <div class="row">
              <!-- Start features left -->
              <div class="col-md-4">
                <div class="features-left">
                  <ul class="features-list features-list-left">
                    <li class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                      <i class="fa fa-film" aria-hidden="true"></i>
                      <div class="features-content">
                        <h4>Edit Video</h4>
                        <p>Edit videos with minimal effort as you prefer</p>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0.75s">
                      <i class="fa fa-magic" aria-hidden="true"></i>
                      <div class="features-content">
                        <h4>Edit Video Effects</h4>
                        <p>Enhance videos with a lot of stunning effects</p>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                      <i class="fa fa-camera-retro" aria-hidden="true"></i>
                      <div class="features-content">
                        <h4>Edit Pictures</h4>
                        <p>Edit pictures with minimal effort as you prefer</p>
                      </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                      <i class="fa fa-magic" aria-hidden="true"></i>
                      <div class="features-content">
                        <h4>Edit Picture Effects</h4>
                        <p>Enhance pictures with a lot of stunning effects</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- End features left -->
              <!-- Start features img -->
              <div class="col-md-4">
                <div class="feature-img wow fadeInUp">
                  <img src="" alt="">
                </div>
              </div>
              <!-- End features img -->
              <!-- Start features right -->
              <div class="col-md-4">
                <div class="features-right">
                  <ul class="features-list features-list-right">
                    <li class="wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <i class="fa fa-video-camera" aria-hidden="true"></i>
                      <div class="features-content">
                        <h4>Insert Videos</h4>
                        <p>Import & Export videos in almost any format </p>
                      </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-duration="0.75s" data-wow-delay="0.75s">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                      <div class="features-content">
                        <h4>Insert Pictuters</h4>
                        <p>Import & Export pictures in almost any format</p>
                      </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                      <i class="fa fa-music" aria-hidden="true"></i>
                      <div class="features-content">
                        <h4>Insert songs</h4>
                        <p>Import or use songs from our website.</p>
                      </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                      <i class="fa fa-file-text" aria-hidden="true"></i>
                      <div class="features-content">
                        <h4>insert text</h4>
                        <p>Express what you feel and write what it</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>   
              <!-- End features right -->                 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Features -->

  <!-- Start how it works -->
  <section id="howit-works">
    <div class="howit-works-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-area wow fadeInLeft">
              <h2 class="title">How it <span>Works</span></h2>
            </div>
          </div>  
          <div class="col-md-12">
            <div class="howit-works-video">
              <iframe src="https://player.vimeo.com/video/33790882" width="428" height="276" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>                  
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End how it works -->

  <!-- start pricing table -->
  
  <!-- End pricing table -->

  <!-- Start download app -->
  <section id="download-app">
    <div class="download-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-area wow fadeInUp">
              <h2 class="title">Download <span>App</span></h2>
              <p>Start your video project now by purchasing our editor video or downloading the trial.</p>
            </div>
          </div>
          <!-- Start download app content -->
          <div class="col-md-12" >
            <div class="download-app-content">
              <!-- Start single download -->
              <a class="single-download wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" href="#">
                <div class="download-icon">
                  <i class="fa fa-windows"></i>
                </div>
                <div class="download-content">
                  <p>Available on the</p>
                  <span>Windows Store</span>
                </div>
              </a>
              <!-- Start single download -->
              <a class="single-download wow fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0.75s" href="#">
                <div class="download-icon">
                  <i class="fa fa-play"></i>
                </div>
                <div class="download-content">
                  <p>Available on the</p>
                  <span>Play Store</span>
                </div>
              </a>
              <!-- Start single download -->
              <a class="single-download wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" href="#">
                <div class="download-icon">
                  <i class="fa fa-apple"></i>
                </div>
                <div class="download-content">
                  <p>Available on the</p>
                  <span>Apple Store</span>
                </div>
              </a>

               <a class="single-download wow fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0.75s" href="#">
                <div class="download-icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="download-content">
                    <p></p>
                  <span>Try Free</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End download app -->

  <!-- Start testimonial -->
  <section id="testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area wow fadeInLeft">
            <h2 class="title">Clients <span>Feedback</span></h2>
            <p></p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="testimonial-slider">
            <!-- single slide -->
            <div class="testimonial-single-slide">               
              <img class="testi-avatar" src="assets/images/testi1.jpg" alt="testimonial img">
              <p class="testi-name">Samantha</p>
              <p class="testi-company">Google.com</p>
              <p class="testi-text">VM is an essential creative tool, in my graphic design toolbox. It allows me to bring my ideas to life in a quick and convenient format.There are endless high-quality video templates to choose from in various categories, each with a unique look and feel.</p>
            </div>
            <!-- single slide -->
            <div class="testimonial-single-slide">               
              <img class="testi-avatar" src="assets/images/testi3.jpg" alt="testimonial img">
              <p class="testi-name">Alexander</p>
              <p class="testi-company">Twitter.com</p>
              <p class="testi-text">Excellent tool to get professional videos in few minutes even if you are not a professional video producer :) You do not need to be an expert to use this tool.</p>
            </div>
            <!-- single slide -->
            <div class="testimonial-single-slide">               
              <img class="testi-avatar" src="assets/images/testi2.jpg" alt="testimonial img">
              <p class="testi-name">Victoria</p>
              <p class="testi-company">Facebook.com</p>
              <p class="testi-text">VM is an amazing platform for creating social media videos.A feature we love is the ability to change the dimensions of the video.</p>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </section>
  <!-- End testimonial -->

  <!-- Start subscribe -->
  <section id="subscribe">
    <div class="download-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-area wow fadeInUp">
              <h2 class="title">Subscribe Our <span>Newsletter</span></h2>
              <p>Join VM newsletter and be among the first ones to receive our latest news and offers.<br>
                    You can easily unsubscribe at any time.</p>
            </div>
          </div>
          <!-- Start download app content -->
          <div class="col-md-12">
            <div class="subscribe-content wow fadeInLeft">
              <form action="" class="subcr-form">
                <i class="fa fa-envelope-o"></i>
                <input type="text" name="" id="" placeholder="Type your mail address..">
                <button type="submit" class="subcr-btn">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End download app -->

  <!-- Start contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
              <h2 class="title">Get in <span>Touch</span></h2>
              <p>The customer support response time is under 60 minutes in most cases. We work closely with our designers and engineers to help you succeed in your video creation. Get in touch whenever is needed and we'll give you a careful support through email.</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-area">
            <form action="" class="contact-form">
              <div class="form-group">                  
                <input type="text" class="form-control" placeholder="Your name">
              </div>
              <div class="form-group">                  
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">                  
                <textarea class="form-control" rows="3" placeholder="Your Message"></textarea>
              </div>
              <div class="send-area">
                <button type="submit" class="send-btn">Send Now</button>
              </div>  
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End contact -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
          </div>
          <div class="footer-text">
            <p> <a href="http://www.markups.io/"></a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End -->

 <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="container" style="width: 100%; margin-top: 10%">
    <style type="text/css">
         /*body{
            background-image: url('../img/bg_login.jpeg');
          }
          html,body{
              position: relative;
              height: 100%;
          }*/

          .login-container{
              position: relative;
              width: 100%;
              margin: 9px auto;
              padding: 50px 40px 40px;
              text-align: center;
              background: #fff;
              border: 1px solid #ccc;
          }

          #output{
              position: absolute;
              width: 300px;
              top: -75px;
              left: 0;
              color: #fff;
          }

          #output.alert-success{
              background: rgb(25, 204, 25);
          }

          #output.alert-danger{
              background: rgb(228, 105, 105);
          }


          .login-container::before,.login-container::after{
              content: "";
              position: absolute;
              width: 100%;height: 100%;
              top: 3.5px;left: 0;
              background: #fff;
              z-index: -1;
              -webkit-transform: rotateZ(4deg);
              -moz-transform: rotateZ(4deg);
              -ms-transform: rotateZ(4deg);
              border: 1px solid #ccc;

          }

          .login-container::after{
              top: 5px;
              z-index: -2;
              -webkit-transform: rotateZ(-2deg);
               -moz-transform: rotateZ(-2deg);
                -ms-transform: rotateZ(-2deg);

          }

          .avatar{
              width: 100px;height: 100px;
              margin: 10px auto 30px;
              border-radius: 100%;
              border: 2px solid #aaa;
              background-size: cover;
          }

          .form-box input{
              width: 100%;
              padding: 10px;
              text-align: center;
              height:40px;
              border: 1px solid #ccc;;
              background: #fafafa;
              transition:0.2s ease-in-out;

          }

          .form-box input:focus{
              outline: 0;
              background: #eee;
          }

          .form-box input[type="text"]{
              border-radius: 5px 5px 0 0;
              text-transform: lowercase;
          }

          .form-box input[type="password"]{
              border-radius: 0 0 5px 5px;
              border-top: 0;
          }

          .form-box button.login{
              margin-top:15px;
              padding: 10px 20px;
          }

          .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
          }

          @-webkit-keyframes fadeInUp {
            0% {
              opacity: 0;
              -webkit-transform: translateY(20px);
              transform: translateY(20px);
            }

            100% {
              opacity: 1;
              -webkit-transform: translateY(0);
              transform: translateY(0);
            }
          }

          @keyframes fadeInUp {
            0% {
              opacity: 0;
              -webkit-transform: translateY(20px);
              -ms-transform: translateY(20px);
              transform: translateY(20px);
            }

            100% {
              opacity: 1;
              -webkit-transform: translateY(0);
              -ms-transform: translateY(0);
              transform: translateY(0);
            }
          }

          .fadeInUp {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
          } 
 </style>
    <div class="login-container" style="width: 50%;">
        <!-- <div id="output"></div> -->
     
        <div class="form-box">
            <?= $this->Form->create(null,['url'=>['controller'=>'users','action'=>'login']]) ?>
        <fieldset style="margin-bottom: 20px;">
            <legend><?= __('LOGIN') ?></legend>
            
              
          <?= $this->Form->control('email') ?>
          <?= $this->Form->control('password') ?>
            
        </fieldset>
        <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
        </div>
    </div>
</div>
    </div>

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="container" style="width: 100%; margin-top: 10%">
  
    <div class="login-container" style="width: 50%;">
        <!-- <div id="output"></div> -->
     
        <div class="form-box">
            <?= $this->Form->create(null,['url'=>['controller'=>'users','action'=>'add']]) ?>
        <fieldset style="margin-bottom: 20px;">
            <legend><?= __('Register') ?></legend>
            
              
          <?= $this->Form->control('email') ?>
          <?= $this->Form->control('password') ?>
          <?= $this->Form->control('name') ?>
            
        </fieldset>
        <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
        </div>
    </div>
</div>
    </div>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>   
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- Off-canvas Menu -->   
  <script src="assets/js/classie.js"></script>
 
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>