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
               <nav class="navbar navbar-default navbar-sticky bootsnav">
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
                        <a class="navbar-brand" href="index-default"><img src="{{ asset('templates/kkr021/images/brand/logo-black.png')}}" class="logo logo-scrolled" alt=""> </a> 
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
         <div id="map" class="half-width"></div>
         <!-- Send Us a Message -->
         <section class="pb-4 xs-pb-0">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-sm-6 mb-4">
                     <h4 class="solid-weight text-uppercase">Send Us a Message</h4>
                     <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
					 <form id="contactform" role="form" method="post" action="php/contact-form.php">
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" name="name" id="name" class="form-control" placeholder="Name*">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="email" name="email" id="email" class="form-control" placeholder="Email*">
                           </div>
                           <div class="form-group col-md-12">
                              <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject*">
                           </div>
                           <div class="form-group col-md-12">
                              <textarea name="message" id="message" class="form-control" rows="3" placeholder="Message"></textarea>
                           </div>
                           <div class="form-group col-md-12">
                              <a id="submit-btn" href="javascript:void(0)" class="btn btn-default btn-rounded fill-dark">Submit <i class="fa fa-arrow" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </form>
					<div id="ajaxloader" style="display:none"><img class="center-block" src="{{ asset('templates/kkr021/images/loading.gif')}}" alt=""></div>
				  </div>
                  <div class="col-md-4 col-sm-6 mb-4">
                     <h4 class="solid-weight text-uppercase">Contact Info</h4>
                     <ul class="icon-list2 lead">
                        <li><span class="lnr lnr-map-marker"></span><span><b>Gaharu Studio Residence</b>, <br/>Jl. Gaharu 4/6,  Jakarta 12430, Indonesia</span></li>
                        <li><span class="lnr lnr-envelope"></span>support@remotehub.id</li>
                        <li><span class="lnr lnr-phone-handset"></span>(415) 124-5678</li>
                     </ul>
                     <div class="mt-2">
                        <div class="opening_time col-sm-9">
                           <div class="clearfix bottom_border py-1">
                              <span>Monday – Friday <span class="pull-right">8.00 – 17.00</span></span>
                           </div>
                           <div class="clearfix bottom_border py-1">
                              <span>Saturday <span class="pull-right">9.30 – 17.30</span></span>
                           </div>
                           <div class="clearfix bottom_border py-1">
                              <span>Sunday <span class="pull-right">9.30 – 15.00</span></span>
                           </div>
                        </div>
                     </div>
                     <div class="social-icons animated color mt-2">
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
            </div>
         </section>
         <!-- End Send Us a Message -->
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
         <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
         <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York
                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]            
                };
                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');
                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Snazzy!'
                });
            }
         </script>
      </body>
   </html>