<!DOCTYPE html>
<!-- 
   Template: Soerojo S.H. dan Rekan HTML Template Built With Twitter Bootstrap 3.3.7
   Version: 1.0.0
   -->
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
   <![endif]-->
   <!--[if IE 7]>         
   <html class="no-js lt-ie9 lt-ie8" lang="">
      <![endif]-->
      <!--[if IE 8]>         
      <html class="no-js lt-ie9" lang="">
         <![endif]-->
         <!--[if gt IE 8]><!--> 
         <html class="no-js" lang="en">
            <!--<![endif]-->
            <head>
               <meta charset="utf-8">
               <title>Remote Hub Indonesia</title>
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
               <meta content="" name="description"/>
               <meta content="" name="author"/>
               <!-- Google fonts -->
               <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
               <!-- Bootstrap -->
               <link rel="stylesheet" href="{{ asset('templates/kkr021/css/bootstrap.min.css')}}" type="text/css"/>
               <!-- font-awesome -->
               <link rel="stylesheet" href="{{ asset('templates/kkr021/css/font-awesome.min.css')}}" type="text/css" />
               <!-- line icons -->
               <link rel="stylesheet" href="{{ asset('templates/kkr021/css/linearicons.css')}}" type="text/css" />
               <!-- simple-line-icons-->
               <link rel="stylesheet" href="{{ asset('templates/kkr021/css/simple-line-icons.css')}}" type="text/css"/>
               <!-- owl-carousel -->
               <link rel="stylesheet" href="{{ asset('templates/kkr021/css/owl.carousel.css')}}" type="text/css" />
               <link rel="stylesheet" href="{{ asset('templates/kkr021/css/owl.theme.css')}}" type="text/css" />
               <!-- Magnific Popup -->
               <link rel="stylesheet" href="{{ asset('templates/kkr021/css/magnific-popup/magnific-popup.css')}}" type="text/css" />
               <!-- shortcodes -->
               <link rel="stylesheet" href="{{ asset('templates/kkr021/css/shortcodes.css')}}" type="text/css" />
               <!-- base -->
               <link rel="stylesheet" href="{{ asset('templates/kkr021/css/base.css')}}" type="text/css"/>
               <!-- Bootsnav -->
               <link rel="stylesheet" href="{{ asset('templates/kkr021/css/bootsnav.css')}}" type="text/css"/>
               <!-- Responsive -->
               <link rel="stylesheet" href="{{ asset('templates/kkr021/css/responsive.css')}}" type="text/css" />
               <!-- Skin -->
               <link rel="stylesheet" href="{{ asset('templates/kkr021/css/skin-gym.css')}}" type="text/css"/>
               <!-- Favicon -->
               <link rel="shortcut icon" href="favicon.ico"/>
            </head>
            <body>
               <!-- Preloader -->
               <div id="preloader">
                  <div class="clear-loading loading-effect"><img src="{{ asset('templates/kkr021/images/loading.gif')}}" width="100" alt=""></div>
               </div>
               <!-- Start Navigation -->
               <nav class="navbar navbar-default navbar-fixed navbar-transparent dark bootsnav">
                  <!-- Start Top Search -->
                  <div class="top-search">
                     <div class="container">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-search"></i></span>
                           <input type="text" class="form-control" placeholder="Search">
                           <span class="input-group-addon close-search"><i class="fa fa-times"></i></span> 
                        </div>
                     </div>
                  </div>
                  <!-- End Top Search -->
                  <div class="container">
                     <!-- Start Atribute Navigation -->
                     <div class="attr-nav">
                        <ul>
                           <li class="search"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                           <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                        </ul>
                     </div>
                     <!-- End Atribute Navigation -->
                     <!-- Start Header Navigation -->
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
                        <a class="navbar-brand" href="index-default">
                        <img src="{{ asset('templates/kkr021/images/brand/logo-white.png')}}" class="logo logo-display" alt="">
                        <img src="{{ asset('templates/kkr021/images/brand/logo-black.png')}}" class="logo logo-scrolled" alt="">
                        </a> 
                     </div>
                     <!-- End Header Navigation -->
                     <!-- Megamenu -->
                     <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                     <li class="active dropdown">
                        <a href="{{ url('/')}}" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu">
                           <li><a href="index-default">Default</a></li>
                           <li><a href="corporate">Corporate</a></li>
                           <li><a href="consultant">Consultant</a></li>
                           <li><a href="construction">Construction</a></li>
                           <li><a href="medical">Medical</a></li>
                           <li><a href="gym">Fitness</a></li>
                           <li><a href="mobile-app">App</a></li>
                           <li><a href="personal">Personal</a></li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Features</a>                            
                        <ul class="dropdown-menu">
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Header</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="header-default">Header Default</a></li>
                                 <li><a href="header-fixed">Header Fixed</a></li>
                                 <li><a href="header-transparent">Header Transparent</a></li>
                                 <li><a href="header-fullwidth">Header Full Width</a></li>
                                 <li><a href="header-topbar">Header Topbar</a></li>
                                 <li><a href="header-logo-center">Header Logo Center</a></li>
                                 <li><a href="header-logo-top">Header Logo Top</a></li>
                                 <li><a href="header-side-left">Side Menu Left</a></li>
                                 <li><a href="header-fullscreen">Header Fullscreen</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Banner</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="banner-owl-slider">Owl Slider</a></li>
                                 <li><a href="banner-youtube">Youtube Video</a></li>
                                 <li><a href="banner-vimeo">Vimeo Video</a></li>
                                 <li><a href="banner-html-video">HTML5 Video</a></li>
                                 <li><a href="banner-text-rotator">Text Rotator</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Footer</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="footer1">Footer 1</a></li>
                                 <li><a href="footer2">Footer 2</a></li>
                                 <li><a href="footer3">Footer 3</a></li>
                                 <li><a href="footer4">Footer 4</a></li>
                                 <li><a href="footer5">Footer 5</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Page Tittle</a>                                    
                              <ul class="dropdown-menu">
                                 <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Size</a>                                            
                                    <ul class="dropdown-menu">
                                       <li><a href="page-title-sm">Page Title Small</a></li>
                                       <li><a href="page-title-md">Page Title Medium</a></li>
                                       <li><a href="page-title-lg">Page Title Large</a></li>
                                       <li><a href="page-title-xlg">Page Title Extra Large</a></li>
                                    </ul>
                                 </li>
                                 <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Alignment</a>                                            
                                    <ul class="dropdown-menu">
                                       <li><a href="page-title-left">Align Left</a></li>
                                       <li><a href="page-title-right">Align Right</a></li>
                                       <li><a href="page-title-center">Align Center</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="page-title-bg">White Background</a></li>
                                 <li><a href="page-title-grey">Grey Background</a></li>
                                 <li><a href="page-title-dark">Dark Background</a></li>
                                 <li><a href="page-title-theme">Theme Background</a></li>
                                 <li><a href="page-title-parallax">Parallax</a></li>
                                 <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Video</a>                                            
                                    <ul class="dropdown-menu">
                                       <li><a href="page-title-youtube">Youtube</a></li>
                                       <li><a href="page-title-vimeo">Vimeo</a></li>
                                       <li><a href="page-title-html5">HTML5</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>                            
                        <ul class="dropdown-menu">
                           <li><a href="about-company">About Company</a></li>
                           <li><a href="about-me">About Me</a></li>
                           <li><a href="about-team">About Team</a></li>
                           <li><a href="service">Service</a></li>
                           <li><a href="contact">Contact 1</a></li>
                           <li><a href="contact2">Contact 2</a></li>
                           <li><a href="contact3">Contact 3</a></li>
                           <li><a href="maintenance">Maintenance</a></li>
                           <li><a href="coming-soon">Coming Soon</a></li>
                           <li><a href="404">404</a></li>
                        </ul>
                     </li>
                     <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Elements</a>                            
                        <ul class="dropdown-menu megamenu-content" role="menu">
                           <li>
                              <div class="row">
                                 <div class="col-menu col-md-3">
                                   <h6 class="title">Elements 1</h6>
                                    <div class="content">
                                       <ul class="menu-col">
                                          <li><a href="element-accordions">Accordion</a></li>
                                          <li><a href="element-button">Button</a></li>
                                          <li><a href="element-blockquote">Blockquote</a></li>
                                          <li><a href="element-client">Client</a></li>
                                          <li><a href="element-columns">Columns</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-menu col-md-3">
                                   <h6 class="title">Elements 2</h6>                                 
                                    <div class="content">
                                       <ul class="menu-col">
                                          <li><a href="element-counter">Counter</a></li>
                                          <li><a href="element-dropcap">Dropcap</a></li>
                                          <li><a href="element-feature-box">Feature Box</a></li>
                                          <li><a href="element-form">Form</a></li>
                                          <li><a href="element-heading">Heading Style</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-menu col-md-3">
                                   <h6 class="title">Elements 3</h6>                                 
                                    <div class="content">
                                       <ul class="menu-col">
                                          <li><a href="element-list">List Style</a></li>
                                          <li><a href="element-price-table">Price Table</a></li>
                                          <li><a href="element-post">Post Style</a></li>
                                          <li><a href="element-skill">Skill</a></li>
                                          <li><a href="element-social">Social icons</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-menu col-md-3">
                                   <h6 class="title">Elements 4</h6>                                 
                                    <div class="content">
                                       <ul class="menu-col">
                                          <li><a href="element-step-feature">Step Feature</a></li>
                                          <li><a href="element-tab">Tabs</a></li>
                                          <li><a href="element-team">Team</a></li>
                                          <li><a href="element-testimonials">Testimonials</a></li>
                                          <li><a href="element-timeline">Timelines</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown dropdown-left">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog</a>                            
                        <ul class="dropdown-menu">
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Classic</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="blog-left-side">Left Sidebar</a></li>
                                 <li><a href="blog-right-side">Right Sidebar</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Grid</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="blog-grid-left-side">Left Sidebar</a></li>
                                 <li><a href="blog-grid-right-side">Right Sidebar</a></li>
                                 <li><a href="blog-grid-boxed">Boxed</a></li>
                                 <li><a href="blog-grid-fullwidth">Fullwidth</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Masonry</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="blog-masonry-boxed">Boxed</a></li>
                                 <li><a href="blog-masonry-fullwidth">Fullwidth</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Single Post</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="blog-single-left-side">Left Sidebar</a></li>
                                 <li><a href="blog-single-right-side">Right Sidebar</a></li>
                                 <li><a href="blog-single-no-side">No Sidebar</a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown dropdown-left">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>                            
                        <ul class="dropdown-menu">
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Grid</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="portfolio-grid-2-col">2 Columns</a></li>
                                 <li><a href="portfolio-grid-3-col">3 Columns</a></li>
                                 <li><a href="portfolio-grid-4-col">4 Columns</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Masonry</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="portfolio-masonry-2-col">2 Columns</a></li>
                                 <li><a href="portfolio-masonry-3-col">3 Columns</a></li>
                                 <li><a href="portfolio-masonry-4-col">4 Columns</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Standard</a>                                    
                              <ul class="dropdown-menu">
                                 <li><a href="portfolio-standard-2-col">2 Columns</a></li>
                                 <li><a href="portfolio-standard-3-col">3 Columns</a></li>
                                 <li><a href="portfolio-standard-4-col">4 Columns</a></li>
                              </ul>
                           </li>
                           <li><a href="portfolio-details">Single Post</a></li>
                        </ul>
                     </li>
                  </ul>
                     </div>
                     <!-- /.navbar-collapse -->
                  </div>
                  <!-- Start Side Menu -->
                  <div class="side dark-bg">
                     <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                     <div class="widget">
                        <p class="text-center my-3"><img src="{{ asset('templates/kkr021/images/brand/logo-white.png')}}" class="logo" alt="" /></p>
                        <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     </div>
                     <div class="widget">
                        <h6 class="text-uppercase">OFFICE 01</h6>
                        <ul class="list-unstyled address">
                           <li><i class="lnr lnr-map-marker"></i><span>Jakarta, Indonesia</span></li>
                           <li><i class="lnr lnr-envelope"></i><span>support@remotehub.id</span></li>
                           <li><i class="icon-phone"></i><span>(+91) 123-456-7890</span></li>
                        </ul>
                     </div>
                     <div class="widget">
                        <div class="social-icons animated color">
                           <ul class="clearfix">
                              <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                              <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                              <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- End Side Menu -->
               </nav>
               <!-- End Navigation -->
         <!-- Banner -->  
         <section class="full-height bg white-text header-slide gym-slider single-image" data-bg-img="{{ asset('templates/kkr021/images/gym/slide2.jpg')}}">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center">
                     <h1 class="title">Be An Athlete</h1>
                     <p>Make your body pixel perfect, Save money with our membership card.</p>
                     <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default animated btn-radius">Purchase Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                  </div>
               </div>
            </div>
         </section>
         <!-- End Banner --> 
         <!-- Opening Time -->
         <section class="p-0 gym-rules">
            <div class="container-fluid">
               <div class="row row-eq-height no-gutter">
                  <div class="col-md-4 theme-bg" data-bg-color="#e54747">
                     <div class="py-5 px-5 white-text sm-px-4 sm-py-4">
                        <div class="feature icon-position-left">
                           <div class="feature-icon"> <i class="lnr lnr-clock"></i> </div>
                           <div class="feature-info">
                              <h4 class="text-uppercase">Opening Time</h4>
                           </div>
                        </div>
                        <div class="separator">
                           <div class="divider"></div>
                        </div>
                        <div class="opening_time">
                           <div class="clearfix bottom_border py-1"> <span>Sunday-Wednesday <span class="pull-right">06:30 - 10:00</span></span> </div>
                           <div class="clearfix bottom_border py-1"> <span>Thursday <span class="pull-right">08:00 - 11:30</span></span> </div>
                           <div class="clearfix bottom_border py-1"> <span>Friday <span class="pull-right">Closed</span></span> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 grey-bg">
                     <div class="py-5 px-5 sm-px-4 sm-py-4">
                        <div class="feature icon-position-left">
                           <div class="feature-icon"> <i class="lnr lnr-file-empty"></i> </div>
                           <div class="feature-info">
                              <h4 class="text-uppercase">Yearly Membership</h4>
                           </div>
                        </div>
                        <div class="separator">
                           <div class="divider"></div>
                        </div>
                        <h5 class="theme-text solid-weight text-uppercase mb-2 mt-2">25% discount for new members</h5>
                        <p class="mb-0">Get discount on services and treatments at the GymBase on new registration on yearly subscription.</p>
                        <a href="#" class="btn btn-default btn-outline  btn-radius btn-xs fill-theme mt-4">learn more</a> 
                     </div>
                  </div>
                  <div class="col-md-4 dark-bg overlay" data-bg-img="{{ asset('templates/kkr021/images/gym/carousel-item2.jpg')}}" data-overlay-color="dark" data-overlay="7">
                     <div class="py-5 px-5 sm-px-4 sm-py-4">
                        <div class="feature icon-position-left white-text">
                           <div class="feature-icon"> <i class="lnr lnr-calendar-full"></i> </div>
                           <div class="feature-info">
                              <h4 class="text-uppercase">Personal Training</h4>
                           </div>
                        </div>
                        <div class="separator">
                           <div class="divider"></div>
                        </div>
                        <h5 class="theme-text solid-weight text-uppercase mb-2 mt-2">Join Us today</h5>
                        <p class="mb-0">we offer personal training with a certified and experienced personal trainer. </p>
                        <a href="#" class="btn btn-default btn-outline white-border white-text btn-radius btn-xs fill-white mt-4">learn more</a> 
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Opening Time -->
         <!-- about us -->
         <section class="bg gym-about" data-bg-img="{{ asset('templates/kkr021/images/gym/girl-fit_bg.jpg')}}">
            <div class="container">
               <div class="row row-eq-height">
                  <div class="col-sm-8 col-md-7 mb-7 xs-mb-1">
                     <div class="xs-px-0 mb-7 xs-mb-0">
                        <div class="heading-block">
                           <h2 class="text-uppercase solid-weight">A few words about us</h2>
                           <span class="text-uppercase">GET TO KNOW US</span>
                           <div class="divider"></div>
                        </div>
                        <p class="mb-2">We have been the authorized fiteness center since 1965. It was then that fitness legend Kevin O'brien took the knowledge and expertise</p>
                        <p class="lead">Today We are the most recognized name in fitness serving more than 10 thousand members.</p>
                        <div class="row">
                           <div class="col-xs-6 col-xx-12 xs-mb-3">
                              <div class="feature">
                                 <div class="feature-icon"> <i class="lnr lnr-bicycle theme-text"></i> </div>
                                 <div class="feature-info">
                                    <h5 class="light-weight text-uppercase">One-on-One Training</h5>
                                    <p>Block out time to focus purely on you. We offer 25- and 50-minute sessions that...</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-6 col-xx-12">
                              <div class="feature">
                                 <div class="feature-icon"> <i class="lnr lnr-users theme-text"></i> </div>
                                 <div class="feature-info">
                                    <h5 class="light-weight text-uppercase">Partner Training</h5>
                                    <p>Keep your promise to more than just you. Partner up with a friend or family...</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End about us -->
         <!-- OUR CLASSES -->
         <section class="p-0 gym-our-classes">
            <div class="container-fluid">
               <div class="row row-eq-height no-gutter">
                  <div class="col-lg-4 col-md-6 theme-bg" >
                     <div class="pxy-5 xs-px-3 xs-py-3 text-white pos-r">
                        <div class="heading-block">
                           <h2 class="solid-weight">OUR CLASSES</h2>
                           <span class="text-uppercase light-weight">Limitless possibilities create</span>
                           <div class="divider"></div>
                        </div>
                        <p>Take a BaseGym's fitness class and learn from world-class instructors in a fun, fast paced environment. Whether you’re looking to kick your fitness into high gear with Kickboxing or achieve inner and outer peace with Yoga, we offer classes that appeal to all interests and fitness levels.</p>
                        <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">learn more</a> 
                     </div>
                  </div>
                  <div class="col-lg-8 col-md-6 dark-bg">
                     <div class="container-fluid">
                        <div class="row no-gutter">
                           <div class="col-sm-4 col-xs-6 col-xx-12">
                              <div class="team classes">
                                 <div class="member-image clearfix"> <img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/classes-img1.jpg')}}" alt="" /></div>
                                 <div class="team-info">
                                    <h5 class="member-position theme-text mb-1">Every Mon, 07:00 AM to 08:00 AM</h5>
                                    <h4 class="member-name mb-2">Yoga</h4>
                                    <div class="social"> Achieve physical, emotional and spiritual well-being while strengthening your body. With Erica Tan </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-4 col-xs-6 col-xx-12">
                              <div class="team classes">
                                 <div class="member-image clearfix"> <img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/classes-img2.jpg')}}" alt="" /></div>
                                 <div class="team-info">
                                    <h5 class="member-position theme-text mb-1">Mon, 09:00 AM to 10:30 AM</h5>
                                    <h3 class="member-name mb-2">Zumba</h3>
                                    <div class="social"> Zumba infuses Latin rhythms with cardiovascular exercise to create an aerobic routine that is fun </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-4 col-xs-6 col-xx-12">
                              <div class="team classes">
                                 <div class="member-image clearfix"> <img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/classes-img3.jpg')}}" alt="" /></div>
                                 <div class="team-info">
                                    <h5 class="member-position theme-text mb-1">Mon, 10:00 AM to 12:00 PM</h5>
                                    <h3 class="member-name mb-2">Mixed Martial Arts</h3>
                                    <div class="social"> MMA fighters are among the fittest athletes in the world, and you’ll be just as strong  with our mixed martial arts </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-4 col-xs-6 col-xx-12">
                              <div class="team classes">
                                 <div class="member-image clearfix"> <img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/classes-img4.jpg')}}" alt="" /></div>
                                 <div class="team-info">
                                    <h5 class="member-position theme-text mb-1">Mon, 12:30 PM to 02:00 PM</h5>
                                    <h4 class="member-name mb-2">Aerobic</h4>
                                    <div class="social"> Learn proper aerobic techniques with Sam Oconal Learn proper aerobic techniques with Sam Oconal </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-4 col-xs-6 col-xx-12">
                              <div class="team classes">
                                 <div class="member-image clearfix"> <img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/classes-img5.jpg')}}" alt="" /></div>
                                 <div class="team-info">
                                    <h5 class="member-position theme-text mb-1">Mon,03:00 PM to 04:00 PM</h5>
                                    <h3 class="member-name mb-2">Streching</h3>
                                    <div class="social"> Learn proper aerobic techniques with Sam Oconal Learn proper aerobic techniques with Sam Oconal </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-4 col-xs-6 col-xx-12">
                              <div class="team classes">
                                 <div class="member-image clearfix"> <img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/classes-img6.jpg')}}" alt="" /></div>
                                 <div class="team-info">
                                    <h5 class="member-position theme-text mb-1">Mon-Fri, 09:00 AM to 11:00 AM</h5>
                                    <h3 class="member-name mb-2">Gymnastics</h3>
                                    <div class="social"> Our gymnastics program teaches gymnastics skills in a fun and safe environment. In addition </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End OUR CLASSES -->
         <!-- Our Trainers -->
         <section class="">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 text-center">
                     <div class="heading-block">
                        <h2 class="text-uppercase">Our Trainers</h2>
                        <span class="text-uppercase light-weight">Praesent placerat ultrices justo</span>
                        <div class="divider"></div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                  <div class="owl-carousel owl-theme light-arrow" data-items="4" data-md-items="3" data-sm-items="3" data-xs-items="2" data-nav-dots="false" data-nav-arrow="false" data-auto-play="true"  data-space="10">
                  <div class="item">
                     <div class="team team-4">
                        <div class="member-image clearfix"> <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a> <img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/member5.jpg')}}" alt="" /></div>
                        <div class="team-info theme-bg">
                           <h4 class="member-name">Kevin O’Brien</h4>
                           <h5 class="member-position">Founder</h5>
                           <div class="social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="team team-4">
                        <div class="member-image clearfix"> <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a> <img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/member2.jpg')}}" alt="" /></div>
                        <div class="team-info theme-bg">
                           <h4 class="member-name">Mark Williams</h4>
                           <h5 class="member-position">Lead Trainer</h5>
                           <div class="social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="team team-4">
                        <div class="member-image clearfix"> <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a> <img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/member3.jpg')}}" alt="" /></div>
                        <div class="team-info theme-bg">
                           <h4 class="member-name">Max Miller</h4>
                           <h5 class="member-position">Nutritionist</h5>
                           <div class="social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="team team-4">
                        <div class="member-image clearfix"> <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a> <img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/member4.jpg')}}" alt="" /></div>
                        <div class="team-info theme-bg">
                           <h4 class="member-name">John Lee</h4>
                           <h5 class="member-position">Yoga Guru</h5>
                           <div class="social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> </div>
                        </div>
                     </div>
                  </div>
                 </div></div>
               </div>
            </div>
         </section>
         <!-- End Our Trainers -->
         <!-- GET TO KNOW US -->
         <section class="dark-bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 pull-right sm-mb-4">
                     <div class="video-info"> <img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/video-bg.jpg')}}" alt=""> <a class="popup-vimeo video-btn theme-bg" href="video/video.mp4"><i class="icon-control-play icons"></i></a> </div>
                  </div>
                  <div class="col-md-6">
                     <div class="heading-block ">
                        <h3 class="text-uppercase solid-weight">Lorem ipsum dolor consectetuer adipiscing elit</h3>
                        <span class="text-uppercase">GET TO KNOW US</span>
                        <div class="divider"></div>
                     </div>
                     <p class="mb-0">Take a BaseGym's fitness class and learn from world-class instructors in a fun, fast paced environment. Whether you’re looking to kick your fitness into high gear with Kickboxing or achieve inner and outer peace with Yoga, we offer classes that appeal to all interests and fitness levels.</p>
                     <div class="row mt-4">
                        <div class="col-sm-4 col-xs-6 col-xx-12 xs-mb-3">
                           <div class="counter icon-position-left">
                              <div class="counter-icon"> <i class="lnr lnr-user theme-text"></i> </div>
                              <div class="counter-info"> <span class="timer" data-to="250" data-speed="1000">250</span>
                                 <label>Experience</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-4 col-xs-6 col-xx-12 xs-mb-3">
                           <div class="counter icon-position-left">
                              <div class="counter-icon"> <i class="lnr lnr-camera-video theme-text"></i> </div>
                              <div class="counter-info"> <span class="timer" data-to="500" data-speed="1000">500</span>
                                 <label>Subscribers</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-4 col-xs-6 col-xx-12">
                           <div class="counter icon-position-left">
                              <div class="counter-icon"> <i class="lnr lnr-thumbs-up theme-text"></i> </div>
                              <div class="counter-info"> <span class="timer" data-to="4000" data-speed="10000">4000</span>
                                 <label>People Likes</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End GET TO KNOW US -->
         <!-- OUR PRICING PLAN -->
         <section>
            <div class="container">
               <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 text-center">
                     <div class="heading-block ">
                        <h2 class="text-uppercase solid-weight">OUR PRICING PLAN</h2>
                        <span class="text-uppercase">GET TO KNOW US</span>
                        <div class="divider"></div>
                     </div>
                     <p class="lead mb-5">Eorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor abore dolore magna aliqua aut enim minim veniama nostrud exsa sed citation saboris</p>
                  </div>
                  <div class="col-sm-4 xs-mb-4">
                     <div class="pricing-table">
                        <div class="pricing-table-header">
                           <span class="lnr lnr-clock"></span>
                           <h3 class="heading">Silver</h3>
                           <p>Per month</p>
                        </div>
                        <div class="pricing-content">
                           <div class="pricing-number"> <span class="price-value"> <span class="currency">$</span> 25 <span class="month">/ Mon</span> </span> </div>
                           <ul>
                              <li><i class="fa fa-check"></i> List item here</li>
                              <li><i class="fa fa-check"></i> List item here</li>
                              <li><i class="fa fa-check"></i> List item here</li>
                              <li><i class="fa fa-check"></i> List item here</li>
                              <li><i class="fa fa-check"></i> List item here</li>
                           </ul>
                           <a href="#" class="btn btn-default animated btn-outline btn-radius">Join Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4 xs-mb-4">
                     <div class="pricing-table active">
                        <div class="pricing-table-header theme-bg">
                           <span class="lnr lnr-clock"></span>
                           <h3 class="heading">Gold</h3>
                           <p>Per month</p>
                        </div>
                        <div class="pricing-content">
                           <div class="pricing-number"> <span class="price-value"> <span class="currency">$</span> 50 <span class="month">/ Mo</span> </span> </div>
                           <ul>
                              <li><i class="fa fa-check"></i> List item here</li>
                              <li><i class="fa fa-check"></i> List item here</li>
                              <li><i class="fa fa-check"></i> List item here</li>
                              <li><i class="fa fa-check"></i> List item here</li>
                              <li><i class="fa fa-check"></i> List item here</li>
                           </ul>
                           <a href="#" class="btn btn-default animated btn-radius">Let's Do It <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="pricing-table">
                        <div class="pricing-table-header">
                           <span class="lnr lnr-clock"></span>
                           <h3 class="heading">Platium</h3>
                           <p>Per month</p>
                        </div>
                        <div class="pricing-content">
                           <div class="pricing-number"> <span class="price-value"> <span class="currency">$</span> 75 <span class="month">/ Mo</span> </span> </div>
                           <ul>
                              <li><i class="fa fa-check"></i> List item here</li>
                              <li><i class="fa fa-check"></i> List item here</li>
                              <li><i class="fa fa-check"></i> List item here</li>
                              <li><i class="fa fa-check"></i> List item here</li>
                              <li><i class="fa fa-check"></i> List item here</li>
                           </ul>
                           <a href="#" class="btn btn-default animated btn-outline btn-radius">Let Me in <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End OUR PRICING PLAN -->
         <!-- OUR GALLERY -->
         <section class="p-0">
            <div class="container-fluid">
               <div class="row no-gutter">
                  <div class="col-sm-12">
                     <div class="owl-carousel popup-gallery" data-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-space="0">
                        <div class="item"><a class="popup-img" href="{{ asset('templates/kkr021/images/gym/carousel-item1.jpg')}}"><img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/carousel-item1.jpg')}}" alt=""></a></div>
                        <div class="item"><a class="popup-img" href="{{ asset('templates/kkr021/images/gym/carousel-item2.jpg')}}"><img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/carousel-item2.jpg')}}" alt=""></a></div>
                        <div class="item"><a class="popup-img" href="{{ asset('templates/kkr021/images/gym/carousel-item3.jpg')}}"><img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/carousel-item3.jpg')}}" alt=""></a></div>
                        <div class="item"><a class="popup-img" href="{{ asset('templates/kkr021/images/gym/carousel-item4.jpg')}}"><img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/carousel-item4.jpg')}}" alt=""></a></div>
                        <div class="item"><a class="popup-img" href="{{ asset('templates/kkr021/images/gym/carousel-item5.jpg')}}"><img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/carousel-item5.jpg')}}" alt=""></a></div>
                        <div class="item"><a class="popup-img" href="{{ asset('templates/kkr021/images/gym/carousel-item6.jpg')}}"><img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/carousel-item6.jpg')}}" alt=""></a></div>
                        <div class="item"><a class="popup-img" href="{{ asset('templates/kkr021/images/gym/carousel-item7.jpg')}}"><img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/carousel-item7.jpg')}}" alt=""></a></div>
                        <div class="item"><a class="popup-img" href="{{ asset('templates/kkr021/images/gym/carousel-item8.jpg')}}"><img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/carousel-item8.jpg')}}" alt=""></a></div>
                        <div class="item"><a class="popup-img" href="{{ asset('templates/kkr021/images/gym/carousel-item9.jpg')}}"><img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/carousel-item9.jpg')}}" alt=""></a></div>
                        <div class="item"><a class="popup-img" href="{{ asset('templates/kkr021/images/gym/carousel-item10.jpg')}}"><img class="img-responsive" src="{{ asset('templates/kkr021/images/gym/carousel-item10.jpg')}}" alt=""></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End OUR GALLERY -->
         <!-- Footer -->
         <footer class="footer-dark">
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-3 col-xs-6 col-xx-12 mb-4">
                        <h6 class="text-uppercase">About RemoteHub.id</h6>
                        <ul class="list-unstyled address">
                           <li><i class="lnr lnr-map-marker"></i><span>Jakarta, Indonesia</span></li>
                           <li><i class="lnr lnr-envelope"></i><a href="mailto:support@remotehub.id">support@remotehub.id</a></li>
                           <li><i class="lnr lnr-phone-handset"></i><span>(+91) 123-456-7890</span></li>
                        </ul>
                     </div>
                     <div class="col-sm-3 col-xs-6 col-xx-12 mb-4">
                        <h6 class="text-uppercase">Categories</h6>
                        <ul class="list-unstyled">
                           <li><a href="#">Printing </a></li>
                           <li><a href="#">Specimen book</a></li>
                           <li><a href="#">Simply random</a></li>
                           <li><a href="#">Embarrassing</a></li>
                           <li><a href="#">Making </a></li>
                        </ul>
                     </div>
                     <div class="col-sm-3 col-xs-6 col-xx-12 mb-4">
                        <h6 class="text-uppercase">ARCHIVES</h6>
                        <ul class="list-unstyled">
                           <li><a href="#">May 2017</a></li>
                           <li><a href="#">April 2017</a></li>
                           <li><a href="#">March 2017</a></li>
                           <li><a href="#">February 2017</a></li>
                           <li><a href="#">January 2017</a></li>
                        </ul>
                     </div>
                     <div class="col-sm-3 col-xs-6 col-xx-12 mb-4">
                        <h6 class="text-uppercase">RECENT POSTS</h6>
                        <ul class="list-unstyled recent-post">
                           <li><a href="#">Be My Guest<span>May 10,2017</span></a></li>
                           <li><a href="#">Ownage In The Mountains<span>February 14,2017</span></a></li>
                           <li><a href="#">The Field<span>March 23,2017</span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Copy right -->
            <div class="footer-bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-6">© 2018 <a href="http://www.soerojo.com" target="_blank">Soerojo S.H. & Rekan</a> - All rights reserved</div>
                     <div class="col-sm-6 text-right">
                        <ul class="list-unstyled list-inline footer-social">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fa fa-facebook"></i> </a> </li>
                           <li><a href="#"> <i class="fa fa-google-plus"></i> </a> </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- End footer -->
         <!-- Back to Top --> 
         <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-chevron-up"></i></a></div>
         <!-- jquery  -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/jquery.min.js')}}"></script>
         <!-- Bootstrap -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/bootstrap.min.js')}}"></script>
         <!-- Appear -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/jquery.appear.js')}}"></script>
         <!-- owl-carousel -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/owl-carousel/owl.carousel.min.js')}}"></script>
         <!-- counter -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/counter/jquery.countTo.js')}}"></script>
         <!-- countdown -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/countdown/jquery.downCount.js')}}"></script>
         <!-- Piechart -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/jquery.piechart.js')}}"></script>
         <!-- magnific popup -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
         <!-- isotope -->
         <script src="{{ asset('templates/kkr021/js/isotope/isotope.pkgd.min.js')}}"></script>
         <script src="{{ asset('templates/kkr021/js/isotope/imagesLoaded.js')}}"></script>
         <!-- jarallax -->
         <script src="{{ asset('templates/kkr021/js/jarallax/jarallax.js')}}"></script>
         <script src="{{ asset('templates/kkr021/js/jarallax/jarallax-video.js')}}"></script>
         <!-- Bootsnavs -->
         <script src="{{ asset('templates/kkr021/js/bootsnav.js')}}"></script>
         <!-- custom -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/custom.js')}}"></script>
      </body>
   </html>