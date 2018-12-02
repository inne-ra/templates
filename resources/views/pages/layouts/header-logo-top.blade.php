<!DOCTYPE html>
<!-- 
   Template: Soerojo S.H. dan Rekan HTML Template Built With Twitter Bootstrap 3.3.7
   
   Version: 1.0.0
   
   -->
<!--[if IE 9]> 
<html lang="en" class="ie9">
   <![endif]-->
   <!--[if !IE]><!-->
   <html lang="en">
      <!--<![endif]-->
      <!-- BEGIN HEAD -->
      <head>
         <meta charset="utf-8"/>
         <title>Remote Hub Indonesia</title>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
         <meta content="" name="description"/>
         <meta content="" name="author"/>
         <!-- Bootstrap -->
         <link rel="stylesheet" type="text/css" href="{{ asset('templates/kkr021/css/bootstrap.min.css')}}" />
         <!-- /Google Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
         <!-- font-awesome -->
         <link href="{{ asset('templates/kkr021/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
         <!-- line icons -->
         <link href="{{ asset('templates/kkr021/css/linearicons.css')}}" rel="stylesheet" type="text/css" />
         <!-- simple-line-icons-->
         <link href="{{ asset('templates/kkr021/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
         <!-- owl-carousel -->
         <link href="{{ asset('templates/kkr021/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('templates/kkr021/css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
         <!-- shortcodes -->
         <link rel="stylesheet" type="text/css" href="{{ asset('templates/kkr021/css/shortcodes.css')}}" />
         <!-- base -->
         <link href="{{ asset('templates/kkr021/css/base.css')}}" rel="stylesheet" type="text/css"/>
         <!-- Bootsnav -->
         <link href="{{ asset('templates/kkr021/css/bootsnav.css')}}" rel="stylesheet">
         <!-- Responsive -->
         <link href="{{ asset('templates/kkr021/css/responsive.css')}}" rel="stylesheet">
         <!-- Favicon -->
         <link rel="shortcut icon" href="favicon.ico"/>
      </head>
      <body>
        <!-- Preloader -->
        <div id="preloader">
          <div class="clear-loading loading-effect"><img src="{{ asset('templates/kkr021/images/loading.gif')}}" width="100" alt=""></div>
        </div>
		 
		 <nav class="navbar navbar-default navbar-brand-top bootsnav">
            <div class="container">
               <!-- Start Header Navigation -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                  <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="index-default">
                  <img src="{{ asset('templates/kkr021/images/brand/logo-black.png')}}" class="logo logo-scrolled" alt="">
                  </a>
               </div>
               <!-- End Header Navigation -->
               <!-- Megamenu -->
               <div class="collapse navbar-collapse" id="navbar-menu">
                  <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                     <li class="active dropdown">
                        <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Home</a>
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
            <div class="side">
               <a href="#" class="close-side"><i class="fa fa-times"></i></a>
               <div class="widget">
                  <h6 class="title">Custom Pages</h6>
                  <ul class="link">
                     <li><a href="#">About</a></li>
                     <li><a href="#">Services</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="#">Portfolio</a></li>
                     <li><a href="#">Contact</a></li>
                  </ul>
               </div>
               <div class="widget">
                  <h6 class="title">Additional Links</h6>
                  <ul class="link">
                     <li><a href="#">Retina Homepage</a></li>
                     <li><a href="#">New Page Examples</a></li>
                     <li><a href="#">Parallax Sections</a></li>
                     <li><a href="#">Shortcode Central</a></li>
                     <li><a href="#">Ultimate Font Collection</a></li>
                  </ul>
               </div>
            </div>
            <!-- End Side Menu -->
         </nav>
         <!-- Banner -->
         <section class="inner-intro dark-bg bg bg-fixed overlay jarallax" data-jarallax='{"speed": 0.2}' data-overlay-color="dark" data-overlay="2" data-bg-img="images/banner.jpg')}}" >
            <div class="container">
               <div class="row intro-title">
                  <div class="col-sm-12 text-left">
                     <h1 class="title text-white">Header Logo Top</h1>
                  </div>
                  <div class="col-sm-12">
                     <div class="row">
                        <div class="col-sm-6 text-left"><span class="sub-title">Subtittle Goes Here</span></div>
                        <div class="col-sm-6 text-right">
                           <ul class="page-breadcrumb">
                              <li><a href="javascript:void(0)">Features</a></li>
                              <li><a href="javascript:void(0)">Header</a></li>
                              <li><span class="theme-text">Header Logo Top</span> </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Banner -->
         <!-- Our service -->
         <section class="">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center">
                     <div class="heading-block ">
                        <span class="text-uppercase">Our Sevice</span>                
                        <h2 class="text-uppercase">What We Offer</h2>
                        <div class="divider"></div>
                     </div>
                     <p class="lead">Eorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor abore dolore magna aliqua aut enim minim veniama nostrud exsa sed citation saboris</p>
                  </div>
                  <div class="col-sm-12">
                     <div class="row">
                        <div class="col-sm-4 mt-3">
                           <div class="feature">
                              <div class="feature-icon"><i class="icon-target icons theme-text"></i></div>
                              <div class="feature-info">
                                 <h5 class="solid-weight">Marketing Solution</h5>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-4 mt-3">
                           <div class="feature">
                              <div class="feature-icon"><i class="icon-people icons theme-text"></i></div>
                              <div class="feature-info">
                                 <h5  class="solid-weight">Investment Advice</h5>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-4 mt-3">
                           <div class="feature">
                              <div class="feature-icon"><i class="icon-briefcase icons theme-text"></i></div>
                              <div class="feature-info">
                                 <h5  class="solid-weight">Financial Planing</h5>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Our service -->
         <!-- Footer -->
         <footer class="footer-dark">
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-3 col-xs-6 col-xx-12 mb-4">
                        <h6 class="text-uppercase">About RemoteHub.id</h6>
                        <ul class="list-unstyled address">
                           <li><i class="lnr lnr-map-marker"></i><span>Jakarta, Indonesia</span></li>
                           <li><i class="lnr lnr-envelope"></i><a href="mailto:support@yourname.com">support@yourname.com</a></li>
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
                     <div class="col-sm-6">© 2017 Pecto All rights reserved</div>
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
         <!-- End Footer -->
         <!-- Back to Top --> 
         <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-chevron-up"></i></a></div>
         <!-- jquery  -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/jquery.min.js')}}"></script>
         <!-- bootstrap -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/bootstrap.min.js')}}"></script>
         <!-- appear -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/jquery.appear.js')}}"></script>
         <!-- owl-carousel -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/owl-carousel/owl.carousel.min.js')}}"></script>
         <!-- counter -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/counter/jquery.countTo.js')}}"></script>
         <!-- counter -->
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