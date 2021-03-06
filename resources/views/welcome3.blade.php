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
               <!-- Slider -->
               <section class="full-height fullscreen bg white-text header-slide">
                  <div class="owl-carousel owl-theme light-arrow" data-items="1" data-md-items="1" data-sm-items="1" data-nav-dots="false" data-nav-arrow="true" data-auto-play="false"  data-space="0">
                     <!-- Item -->
                     <div class="item"  >
                        <div class="slide-img"><img src="{{ asset('templates/kkr021/images/main/slider1.jpg')}}" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 col-md-offset-2 text-center">
                                 <h1 class="title">Global Trading</h1>
                                 <div class="slide-content">
                                    <p>Join The Global Investment Network.</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Explore More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default animated btn-radius theme-bg white-text">Join Us today <i class="fa fa-sign-in" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Item -->
                     <!-- Item -->
                     <div class="item" >
                        <div class="slide-img"><img src="{{ asset('templates/kkr021/images/main/slider2.jpg')}}" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 col-md-offset-2 text-center">
                                 <h1 class="title">Market Experts</h1>
                                 <div class="slide-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default btn-radius theme-bg white-text">Purchase Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Item -->
                     <!-- Item -->
                     <div class="item overlay" >
                        <div class="slide-img" ><img src="{{ asset('templates/kkr021/images/main/slider3.jpg')}}" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12 text-right">
                                 <h1 class="title">Expert advisers</h1>
                                 <div class="slide-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default btn-radius theme-bg white-text">Purchase Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Item -->
                  </div>
               </section>
               <!-- End Slider -->
               <!-- Welcome -->  
               <section class="theme-bg section-sm">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="heading-block text-center ">
                              <h2 class="text-uppercase light-weight mb-1">Pecto Help you to Create New Revenue Opportunities</h2>
                              <span class="text-uppercase ">New Revenue Opportunities</span> 
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 text-center">
                           <button class="btn btn-default btn-radius btn-outline white-border white-text fill-white" type="button">learn more</button>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Welcome -->  
               <!-- Why us --> 
               <section class="p-0 pos-r">
                  <div class="fullbg bg-pos-right" data-bg-img="{{ asset('templates/kkr021/images/main/bg1.jpg')}}" ></div>
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-8 col-md-6" >
                           <div class="py-7 pr-7 xs-pr-0 xs-py-3">
                              <div class="heading-block">
                                 <h2 class="text-uppercase solid-weight">Why Invest With us</h2>
                                 <span class="text-uppercase light-weight">Connect with us Directly</span>
                                 <div class="divider"></div>
                              </div>
                              <p class="lead mb-4">Eorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor abore dolore magna aliqua aut enim minim veniama nostrud exsa sed citation saboris</p>
                              <p class="mb-4">Eorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor abore dolore magna aliqua aut enim minim veniama nostrud exsa sed citation saboris</p>
                              <div class="row no-gutter">
                                 <div class="col-sm-4 text-center">
                                    <div class="rounded-skill nobottommargin" data-color="#309cea" data-size="120" data-percent="70" data-width="5" data-speed="6500">
                                       <div class="counter counter-inherit"> <span class="timer" data-from="1" data-to="70" data-refresh-interval="50" data-speed="3000"></span>% </div>
                                    </div>
                                    <h6 class="text-uppercase">Investor</h6>
                                 </div>
                                 <div class="col-sm-4 text-center">
                                    <div class="rounded-skill nobottommargin" data-color="#309cea" data-size="120" data-percent="20" data-width="5" data-speed="6500">
                                       <div class="counter counter-inherit"> <span class="timer" data-from="1" data-to="20" data-refresh-interval="50" data-speed="3000"></span>% </div>
                                    </div>
                                    <h6 class="text-uppercase">Return</h6>
                                 </div>
                                 <div class="col-sm-4 text-center">
                                    <div class="rounded-skill nobottommargin" data-color="#309cea" data-size="120" data-percent="100" data-width="5" data-speed="6500">
                                       <div class="counter counter-inherit"> <span class="timer" data-from="1" data-to="100" data-refresh-interval="50" data-speed="3000"></span>% </div>
                                    </div>
                                    <h6 class="text-uppercase">Safe</h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Why us --> 
               <!-- Faq --> 
               <section class="p-0 pos-r dark-bg">
                  <div class="fullbg" data-bg-img="{{ asset('templates/kkr021/images/main/bg-2.jpg')}}" ></div>
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6 col-sm-8 col-sm-offset-4 col-md-offset-6">
                           <div class="py-7 pl-7 xs-py-3 xs-pl-0">
                              <div class="heading-block">
                                 <h2 class="text-uppercase">FREQUENTLY ASKED QUESTION </h2>
                                 <span class="light-weight text-uppercase">Take your time before Investing</span>
                                 <div class="divider"></div>
                              </div>
                              <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                              <div class="panel-group accordion default" id="accordion1" role="tablist" aria-multiselectable="true">
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading1">
                                       <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1" aria-expanded="true" aria-controls="collapse1"><strong>01</strong> There are many variations of passages</a> </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                                       <div class="panel-body">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                    </div>
                                 </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading2">
                                       <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse2" aria-expanded="false" aria-controls="collapse2"><strong>02</strong> The first line of Lorem Ipsum</a> </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                       <div class="panel-body">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                    </div>
                                 </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading3">
                                       <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse3" aria-expanded="false" aria-controls="collapse3"><strong>03</strong> If you use this site regularly and would</a> </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                       <div class="panel-body">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Faq --> 
               <!-- Who We Are --> 
               <section class="section-pb pos-r">
                  <img src="{{ asset('templates/kkr021/images/main/image3.png')}}" class="right-img visible-md visible-lg" alt="" />
                  <div class="container">
                     <div class="row">
                        <div class="col-md-8 text-left">
                           <div class="heading-block ">
                              <h2 class="text-uppercase solid-weight"> Who We Are</h2>
                              <span class="text-uppercase light-weight">Seven Business Seven Business</span>
                              <div class="divider"></div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-4 col-xx-12">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                           <img src="{{ asset('templates/kkr021/images/main/image1.jpg')}}" class="img-responsive mb-2" alt="" /> 
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-xx-12">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                           <img src="{{ asset('templates/kkr021/images/main/image2.jpg')}}" class="img-responsive mb-2" alt="" /> 
                        </div>
                     </div>
                  </div>
                  <div class="theme-bg top-minus2 pb-5 overlay-sec">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-12 col-lg-3 col-sm-4 sm-mb-3">
                              <div class="feature icon-position-left">
                                 <div class="feature-icon"><i class="lnr lnr-license theme-text"></i></div>
                                 <div class="feature-info">
                                    <h4>Free account</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-lg-3 col-sm-4 sm-mb-3">
                              <div class="feature icon-position-left">
                                 <div class="feature-icon"><i class="lnr lnr-user theme-text"></i></div>
                                 <div class="feature-info">
                                    <h4>Expert advisors</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-lg-3 col-sm-4">
                              <div class="feature icon-position-left">
                                 <div class="feature-icon"><i class="lnr lnr-sync theme-text"></i></div>
                                 <div class="feature-info">
                                    <h4>Secure transactions</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Who We Are --> 
               <!-- Portfolio -->
               <section class="section-pb">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="heading-block text-center">
                              <h2 class="text-uppercase solid-weight">Incredible Layouts</h2>
                              <span class="text-uppercase light-weight">Limitless possibilities create</span>
                              <div class="divider"></div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 p-0">
                           <div class="b-isotope popup-gallery b-isotope-3">
                              <ul class="mt-2 mb-4 b-isotope-filter clearfix list-inline text-center">
                                 <li class="current"><a href="" data-filter="*">all</a></li>
                                 <li><a href="" data-filter=".design">Design</a></li>
                                 <li><a href="" data-filter=".photo">Photo</a></li>
                                 <li><a href="" data-filter=".app">App</a></li>
                                 <li><a href="" data-filter=".branding">Branding</a></li>
                              </ul>
                              <ul class="b-isotope-grid grid list-unstyled columns4">
                                 <li class="grid-sizer"></li>
                                 <li class="grid-item design">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('templates/kkr021/images/portfolio/design/img1.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('templates/kkr021/images/portfolio/design/img1.jpg')}}" alt="Design" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item photo">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('templates/kkr021/images/portfolio/photo/img1.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('templates/kkr021/images/portfolio/photo/img1.jpg')}}" alt="Photo" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item branding">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('templates/kkr021/images/portfolio/branding/img1.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('templates/kkr021/images/portfolio/branding/img1.jpg')}}" alt="Branding" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item app">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('templates/kkr021/images/portfolio/app/img1.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('templates/kkr021/images/portfolio/app/img1.jpg')}}" alt="App" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item design">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('templates/kkr021/images/portfolio/design/img2.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('templates/kkr021/images/portfolio/design/img2.jpg')}}" alt="Design" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item photo">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('templates/kkr021/images/portfolio/photo/img2.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('templates/kkr021/images/portfolio/photo/img2.jpg')}}" alt="Photo" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item branding">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('templates/kkr021/images/portfolio/branding/img3.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('templates/kkr021/images/portfolio/branding/img3.jpg')}}" alt="Photo" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item app">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('templates/kkr021/images/portfolio/app/img3.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('templates/kkr021/images/portfolio/app/img3.jpg')}}" alt="App" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item design">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('templates/kkr021/images/portfolio/design/img3.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('templates/kkr021/images/portfolio/design/img3.jpg')}}" alt="design" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item photo">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('templates/kkr021/images/portfolio/photo/img3.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('templates/kkr021/images/portfolio/photo/img3.jpg')}}" alt="photo" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item app">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('templates/kkr021/images/portfolio/app/img2.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('templates/kkr021/images/portfolio/app/img2.jpg')}}" alt="app" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                                 <li class="grid-item branding">
                                    <div class="isotope-img portfolio-item">
                                       <div class="item-img">
                                          <div class="overlay"> <a class="link-icon popup-img" title="Project" href="{{ asset('templates/kkr021/images/portfolio/branding/img4.jpg')}}"><i class="lnr lnr-picture"></i></a> <a class="link-icon" href="#"><i class="lnr lnr-link"></i></a> </div>
                                          <img src="{{ asset('templates/kkr021/images/portfolio/branding/img4.jpg')}}" alt="branding" /> 
                                       </div>
                                       <div class="image-info">
                                          <h3 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                          <a class="link-icon" href="#">Sed do eiusmod tempor</a> 
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- Portfolio End -->
               <!-- Step -->
               <section>
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-4 xs-mb-3">
                           <div class="feature-box feature-text1">
                              <span class="step theme-text">01.</span>
                              <h3>Planning &amp; Strategy</h3>
                              <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop.</p>
                           </div>
                        </div>
                        <div class="col-sm-4 xs-mb-3">
                           <div class="feature-box feature-text1">
                              <span class="step theme-text">02.</span>
                              <h3>Design &amp; develop</h3>
                              <p>Making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures.</p>
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="feature-box feature-text1">
                              <span class="step theme-text">03.</span>
                              <h3>Test &amp; Deliver</h3>
                              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Step -->
               <!-- News -->
               <section class="p-0 grey-bg recent-news">
                  <div class="container-fluid">
                     <div class="row gutter-10">
                        <div class="col-sm-12 col-md-6">
                           <div class="py-5 half-space">
                              <div class="heading-block">
                                 <h2 class="text-uppercase solid-weight">RECENT NEWS</h2>
                                 <span class="text-uppercase light-weight">Get updates from us</span>
                                 <div class="divider"></div>
                              </div>
                              <p class="lead">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                              <a class="btn btn-default btn-outline btn-sm btn-radius fill-theme" href="#">Read More</a> 
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-xs-6 col-xx-12">
                           <div class="post post-over">
                              <div class="post-image clearfix">
                                 <i class="fa fa-quote-right" aria-hidden="true"></i>
                                 <div class="post-overlay theme-bg"></div>
                                 <img class="img-responsive" src="{{ asset('templates/kkr021/images/blog/blog1.jpg')}}" alt="" /> 
                              </div>
                              <div class="quote-content"> <a href="#">How new financial laws can Drive Innovation</a>
                                 <label>- by John Deo</label>
                              </div>
                              <div class="post-details">
                                 <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-xs-6 col-xx-12">
                           <div class="post post-over">
                              <div class="post-image clearfix"> <i class="lnr lnr-picture"></i> <img class="img-responsive" src="{{ asset('templates/kkr021/images/blog/blog1.jpg')}}" alt="" /> </div>
                              <div class="post-details">
                                 <span class="categery text-uppercase">LIFESTYLE</span>
                                 <div class="post-date">15<span>FEB 2017</span></div>
                                 <div class="post-title">
                                    <h3 class="title"><a href="#">Our Favourite Things Q1 2017</a></h3>
                                 </div>
                                 <div class="post-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                 </div>
                                 <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row gutter-10">
                        <div class="col-sm-6 col-md-3 col-xs-6 col-xx-12">
                           <div class="post post-over">
                              <div class="post-image clearfix"> <i class="lnr lnr-picture"></i> <img class="img-responsive" src="{{ asset('templates/kkr021/images/blog/blog3.jpg')}}" alt="" /> </div>
                              <div class="post-details">
                                 <span class="categery text-uppercase">DESIGN</span>
                                 <div class="post-date">27<span>NAV 2017</span></div>
                                 <div class="post-title">
                                    <h3 class="title"><a href="#">Transitions in ux design</a></h3>
                                 </div>
                                 <div class="post-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                 </div>
                                 <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-xs-6 col-xx-12">
                           <div class="post post-over">
                              <div class="post-image clearfix"> <i class="lnr lnr-picture"></i> <img class="img-responsive" src="{{ asset('templates/kkr021/images/blog/blog2.jpg')}}" alt="" /> </div>
                              <div class="post-details">
                                 <span class="categery text-uppercase">BUSINESSES</span>
                                 <div class="post-date">20<span>FEB 2017</span></div>
                                 <div class="post-title">
                                    <h3 class="title"><a href="#">Time to Tell Our Story</a></h3>
                                 </div>
                                 <div class="post-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                 </div>
                                 <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-xs-6 col-xx-12">
                           <div class="post post-over">
                              <div class="post-image clearfix"> <i class="lnr lnr-picture"></i> <img class="img-responsive" src="{{ asset('templates/kkr021/images/blog/blog4.jpg')}}" alt="" /> </div>
                              <div class="post-details">
                                 <span class="categery text-uppercase">LIFESTYLE</span>
                                 <div class="post-date">24<span>NAV 2017</span></div>
                                 <div class="post-title">
                                    <h3 class="title"><a href="#">Working from your home?</a></h3>
                                 </div>
                                 <div class="post-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                 </div>
                                 <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-xs-6 col-xx-12">
                           <div class="post post-over light-box">
                              <div class="post-image clearfix">
                                 <div class="post-overlay"></div>
                                 <img class="img-responsive" src="{{ asset('templates/kkr021/images/blog/blog8.jpg')}}" alt="" /> 
                              </div>
                              <div class="post-details">
                                 <span class="categery text-uppercase">CULTURE</span>
                                 <div class="post-date">20<span>May 2017</span></div>
                                 <div class="post-title">
                                    <h3 class="title"><a href="#">Taken right to the edge</a></h3>
                                 </div>
                                 <div class="post-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                 </div>
                                 <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End News -->
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