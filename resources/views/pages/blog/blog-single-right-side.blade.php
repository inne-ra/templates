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
         <meta http-equiv="Content-type" content="text/html; charset=utf-8">
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
      <body class="blog-with-sidebar">
         <!-- Preloader -->
         <div id="preloader">
            <div class="clear-loading loading-effect"><img src="{{ asset('templates/kkr021/images/loading.gif')}}" width="100" alt=""></div>
         </div>
         <!-- Start Navigation -->
         <nav class="navbar navbar-default navbar-fixed white  no-background bootsnav on no-full">
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
                  <a class="navbar-brand" href="index-default"> <img src="{{ asset('templates/kkr021/images/brand/logo-white.png')}}" class="logo logo-display" alt="" /> <img src="{{ asset('templates/kkr021/images/brand/logo-black.png')}}" class="logo logo-scrolled" alt="" /> </a> 
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
         <section class="inner-intro dark-bg bg bg-fixed overlay jarallax" data-jarallax='{"speed": 0.2}' data-overlay-color="dark" data-overlay="2" data-bg-img="{{ asset('templates/kkr021/images/banner.jpg')}}" >
            <div class="container">
               <div class="row intro-title">
                  <div class="col-sm-12 text-left">
                     <h1 class="title text-white">Single Post</h1>
                  </div>
                  <div class="col-sm-12">
                     <div class="row">
                        <div class="col-sm-6 text-left"><span class="sub-title">Subtittle Goes Here</span></div>
                        <div class="col-sm-6 text-right">
                           <ul class="page-breadcrumb">
                              <li><a href="index-default">Blog</a></li>
                              <li><a href="javascript:void(0)">Single Post</a></li>
                              <li><span class="theme-text">Right Sidebar</span> </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="blog-post blog-post-single">
            <div class="container">
               <div class="row row-eq-height">
                  <div class="col-md-9 sm-mb-5">
                     <div class="post">
                        <div class="post-image clearfix"><img class="img-responsive" src="{{ asset('templates/kkr021/images/blog/blog-single2.jpg')}}" alt="" /></div>
                        <div class="post-details">
                           <div class="post-title">
                              <h3 class="title"><a href="#"><i class="lnr lnr-camera"></i> Construction industry</a></h3>
                           </div>
                           <div class="post-meta"> <a href="#"><i class="lnr lnr-clock"></i> 27 NAV 2017</a> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                           <div class="post-content mt-2">
                              <p><span class="dropcap  dropcap-fill dropcap-theme-border">H</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. <br>
                                 <br>
                                 During the summer, our rabbit, Tonto, began to have severe redness and itching on his belly and feet. Through diagnostic testing, we learned that Tonto is severely allergic to over a dozens kinds of grass pollens. We've now been doing allergy injections for several months, and his itching and redness have nearly gone away. I'm very thankful to the veterinarians and staff at Wisdom for the excellent care Tonto received, and for nipping his allergies in the bud, so to speak.
                              </p>
                           </div>
                        </div>
                     </div>
                     <blockquote class="pullquote">
                        <p>Design is the fundamental soul of a man-made creation that ends up expressing itself in successive outer layers of the product or service. The iMac is not just the color or translucence or the shape of the shell. The essence of the iMac is to be the finest possible consumer computer in which each element plays together.</p>
                        <p><small>Steve Jobs</small></p>
                     </blockquote>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                     <div class="img-block mb-2"><img class="img-responsive" src="{{ asset('templates/kkr021/images/blog/blog-single1.jpg')}}" alt="" /></div>
                     <p><i>Tonto, began to have severe redness and itching on his belly and feet. Through diagnostic testing, I'm very thankful to the veterinarians and staff at Wisdom for the excellent care Tonto received, and for nipping his allergies in the bud, so to speak.</i></p>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                     <div class="row share-block mb-3">
                        <div class="col-sm-6 xs-mb-2"><span>Did You Like This Post?  Share it :</span></div>
                        <div class="col-sm-6">
                           <div class="social-icons animated color rounded pull-right xs-pull-left">
                              <ul>
                                 <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                 <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                 <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                 <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <hr>
                     <div class="comments-media media mt-4 mb-1">
                        <div class="media-left"> <a href="#"><img alt="64x64" class="media-object img-circle" style="width:80px; height:80px;" src="{{ asset('templates/kkr021/images/blog/avatar-3.jpg')}}" data-holder-rendered="true" alt="" /></a> </div>
                        <div class="media-body">
                           <h5 class="media-heading">Kevin Martin</h5>
                           <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        </div>
                     </div>
                     <hr>
                     <div class="related-pro mt-4">
                        <h4>Related posts</h4>
                        <div class="owl-carousel blog-carousel" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2" data-space="10">
                           <div class="item">
                              <div class="post">
                                 <div class="post-image clearfix">
                                    <div class="post-info">
                                       <span class="categery text-uppercase">LIFESTYLE</span>
                                       <div class="post-date">15<span>FEB 2017</span></div>
                                    </div>
                                    <img class="img-responsive" src="{{ asset('templates/kkr021/images/blog/blog-list1.jpg')}}" alt="" /> 
                                 </div>
                                 <div class="post-details">
                                    <div class="post-title">
                                       <h5 class="title"><a href="#">Our Favourite Things Q1 2017</a></h5>
                                    </div>
                                    <div class="post-content"> </div>
                                    <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="post">
                                 <div class="post-image clearfix">
                                    <div class="post-info">
                                       <span class="categery text-uppercase">BUSINESSES</span>
                                       <div class="post-date">20<span>FEB 2017</span></div>
                                    </div>
                                    <img class="img-responsive" src="{{ asset('templates/kkr021/images/blog/blog-list2.jpg')}}" alt="" /> 
                                 </div>
                                 <div class="post-details">
                                    <div class="post-title">
                                       <h5 class="title"><a href="#">Time to Tell Our Story</a></h5>
                                    </div>
                                    <div class="post-content"> </div>
                                    <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="post">
                                 <div class="post-image clearfix">
                                    <div class="post-info">
                                       <span class="categery text-uppercase">DESIGN</span>
                                       <div class="post-date">27<span>NAV 2017</span></div>
                                    </div>
                                    <img class="img-responsive" src="{{ asset('templates/kkr021/images/blog/blog-list3.jpg')}}" alt="" /> 
                                 </div>
                                 <div class="post-details">
                                    <div class="post-title">
                                       <h5 class="title"><a href="#">Transitions in ux design</a></h5>
                                    </div>
                                    <div class="post-content"> </div>
                                    <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="post">
                                 <div class="post-image clearfix">
                                    <div class="post-info">
                                       <span class="categery text-uppercase">LIFESTYLE</span>
                                       <div class="post-date">27<span>NAV 2017</span></div>
                                    </div>
                                    <img class="img-responsive" src="{{ asset('templates/kkr021/images/blog/blog-list4.jpg')}}" alt="" /> 
                                 </div>
                                 <div class="post-details">
                                    <div class="post-title">
                                       <h5 class="title"><a href="#">Working from your home?</a></h5>
                                    </div>
                                    <div class="post-content"> </div>
                                    <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="comment-box">
                        <h4 class="mb-0">Comments
                           <label class="theme-text">(03)</label>
                        </h4>
                        <ol class="list-inline comment-list">
                           <li>
                              <div class="comments-media">
                                 <div class="comments-photo media-left"><a href="#"><img alt="" class="media-object" src="{{ asset('templates/kkr021/images/blog/avatar-1.jpg')}}" style="width:80px; height:80px;" alt="" /></a></div>
                                 <div class="comments-info media-body">
                                    <h5 class="title">Kevin Martin</h5>
                                    <div class="comment-metadata"><a href="#"><i class="icon-calendar icons"></i>
                                       <time>July 18, 2014 at 1:26 pm</time>
                                       </a>
                                    </div>
                                    <a href="#" class="reply"><i class="icon-action-undo icons"></i> <span>Reply</span></a>
                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. .</p>
                                 </div>
                              </div>
                              <ul class="list-inline">
                                 <li>
                                    <div class="comments-media">
                                       <div class="comments-photo media-left"><a href="#"><img alt="" class="media-object" src="{{ asset('templates/kkr021/images/blog/avatar-2.jpg')}}" style="width:80px; height:80px;" alt="" /></a></div>
                                       <div class="comments-info media-body">
                                          <h5 class="title">Kevin Martin</h5>
                                          <div class="comment-metadata"><a href="#"><i class="icon-calendar icons"></i>
                                             <time>July 18, 2014 at 1:26 pm</time>
                                             </a>
                                          </div>
                                          <a href="#" class="reply"><i class="icon-action-undo icons"></i> <span>Reply</span></a>
                                          <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best.</p>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <div class="comments-media">
                                 <div class="comments-photo media-left"><a href="#"><img alt="" class="media-object" src="{{ asset('templates/kkr021/images/blog/avatar-3.jpg')}}" style="width:80px; height:80px;" alt="" /></a></div>
                                 <div class="comments-info media-body">
                                    <h5 class="title">Kevin Martin</h5>
                                    <div class="comment-metadata"><a href="#"><i class="icon-calendar icons"></i>
                                       <time>July 18, 2014 at 1:26 pm</time>
                                       </a>
                                    </div>
                                    <a href="#" class="reply"><i class="icon-action-undo icons"></i> <span>Reply</span></a>
                                    <p>The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
                                 </div>
                              </div>
                           </li>
                        </ol>
                     </div>
                     <div class="comment-reply mt-5">
                        <h4>Leave a Reply</h4>
                        <form role="form">
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <input name="first_name" id="first_name" class="form-control" placeholder="First Name" type="text">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <input name="last_name" id="last_name" class="form-control" placeholder="Last Name" type="text">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <textarea id="comment" class="form-control" name="comment" cols="45" rows="4" maxlength="65525" aria-required="true" required placeholder="Comments"></textarea>
                           </div>
                           <a href="#" class="btn btn-default white-text theme-bg icon-left animated btn-radius"><i class="icon-action-undo icons"></i> Leave Replay</a>
                        </form>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="post-sidebar">
                        <div class="sidebar-widget widget-search">
                           <div class="search-area"> <i class="icon-magnifier icons"></i>
                              <input type="search" placeholder="Search...." class="form-control placeholder">
                           </div>
                        </div>
                        <div class="sidebar-widget">
                           <h5 class="widget-title solid-weight">About Blog</h5>
                           <p>Lorem ipsum dolor sit ametLorem Ipsum Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,<br>
                              <br>
                              lorem quis bibendum auctor, consequat ipsum, nec sagittis sem nibh id elit nibh vel velit auctor aliquet. sem nibh Aenean sollicitudin,
                           </p>
                        </div>
                        <div class="sidebar-widget widget-categories">
                           <h5 class="widget-title solid-weight">Categories</h5>
                           <ul class="widget-ul list-unstyled list-hand">
                              <li><a href="#">Photoshop
                                 <span>(5)</span>
                                 </a>
                              </li>
                              <li><a href="#">CSS
                                 <span>(3)</span>
                                 </a>
                              </li>
                              <li><a href="#">HTML
                                 <span>(8)</span>
                                 </a>
                              </li>
                              <li><a href="#">Jquery
                                 <span>(12)</span>
                                 </a>
                              </li>
                              <li><a href="#">Java
                                 <span>(2)</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="sidebar-widget widget-post">
                           <h5 class="widget-title solid-weight">Recent Posts</h5>
                           <div class="recent-post media">
                              <div class="media-left"><a href="#"><img alt="" class="media-object" src="{{ asset('templates/kkr021/images/blog/post-1.jpg')}}" alt="" /></a></div>
                              <div class="media-body">
                                 <a href="#">Custom post 2</a>
                                 <div class="meta-info"> <span><i class="lnr lnr-clock"></i> 5,05,2016</span> <span><i class="icon-bubble icons"></i> 3</span> <span><i class="fa fa-heart-o"></i>20</span> </div>
                              </div>
                           </div>
                           <div class="recent-post media">
                              <div class="media-left"><a href="#"><img alt="" class="media-object" src="{{ asset('templates/kkr021/images/blog/post-2.jpg')}}" alt="" /></a></div>
                              <div class="media-body">
                                 <a href="#">Standard gallery post</a>
                                 <div class="meta-info"> <span><i class="lnr lnr-clock"></i> 12,06,2016</span> <span><i class="icon-bubble icons"></i> 3</span> <span><i class="fa fa-heart-o"></i>20</span> </div>
                              </div>
                           </div>
                           <div class="recent-post media">
                              <div class="media-left"><a href="#"><img alt="" class="media-object" src="{{ asset('templates/kkr021/images/blog/post-3.jpg')}}" alt="" /></a></div>
                              <div class="media-body">
                                 <a href="#">Fullwidth post</a>
                                 <div class="meta-info"> <span><i class="lnr lnr-clock"></i> 20,08,2016</span> <span><i class="icon-bubble icons"></i> 3</span> <span><i class="fa fa-heart-o"></i>20</span> </div>
                              </div>
                           </div>
                        </div>
                        <div class="sidebar-widget social-widget">
                           <h5 class="widget-title solid-weight">Follow Us</h5>
                           <ul class="list-unstyled">
                              <li><a class="fb" href="#"><i class="icon-social-facebook icons"></i> Facebook</a></li>
                              <li><a class="tw" href="#"><i class="icon-social-twitter icons"></i> Twitter</a></li>
                              <li><a class="li" href="#"><i class="icon-social-linkedin icons"></i> LinkedIn</a></li>
                              <li><a class="ig" href="#"><i class="icon-social-instagram icons"></i> Instagram</a></li>
                           </ul>
                        </div>
                        <div class="sidebar-widget archives-widget">
                           <h5 class="widget-title solid-weight">Archives</h5>
                           <ul class="widget-ul list-unstyled list-hand">
                              <li><a href="#"><span><i class="icon-calendar icons"></i> June</span> <span class="number pull-right">12</span></a></li>
                              <li><a href="#"><span><i class="icon-calendar icons"></i> January</span> <span class="number pull-right">28</span></a></li>
                              <li><a href="#"><span><i class="icon-calendar icons"></i> March</span> <span class="number pull-right">08</span></a></li>
                              <li><a href="#"><span><i class="icon-calendar icons"></i> November</span> <span class="number pull-right">04</span></a></li>
                              <li><a href="#"><span><i class="icon-calendar icons"></i> Desember</span> <span class="number pull-right">13</span></a></li>
                           </ul>
                        </div>
                        <div class="sidebar-widget">
                           <h5 class="widget-title solid-weight">Tags</h5>
                           <ul class="tags list-inline">
                              <li><a href="#">Bootstrap</a></li>
                              <li><a href="#">HTML5</a></li>
                              <li><a href="#">Wordpress</a></li>
                              <li><a href="#">CSS3</a></li>
                              <li><a href="#">Creative</a></li>
                              <li><a href="#">Multipurpose</a></li>
                              <li><a href="#">Bootstrap</a></li>
                              <li><a href="#">HTML5</a></li>
                              <li><a href="#">Wordpress</a></li>
                           </ul>
                        </div>
                        <div class="sidebar-widget widget-tweets">
                           <h5 class="widget-title solid-weight">Tweets</h5>
                           <div class="tweets-carousel">
                              <i class="icon-social-twitter icons"></i>
                              <div class="owl-carousel" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-space="0" data-nav-dots="true">
                                 <div class="item">
                                    <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit</p>
                                 </div>
                                 <div class="item">
                                    <p>It has survived not only five centuries, but also the leap electronic typesetting</p>
                                 </div>
                                 <div class="item">
                                    <p>but also the leap electronic  sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Footer -->
         <footer class="footer-dark">
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-3">
                        <h6 class="text-uppercase">About RemoteHub.id</h6>
                        <ul class="list-unstyled address">
                           <li><i class="lnr lnr-map-marker"></i><span>Jakarta, Indonesia</span></li>
                           <li><i class="lnr lnr-envelope"></i><span>support@remotehub.id</span></li>
                           <li><i class="lnr lnr-phone-handset"></i><span>(+91) 123-456-7890</span></li>
                        </ul>
                     </div>
                     <div class="col-sm-3">
                        <h6 class="text-uppercase">Categories</h6>
                        <ul class="list-unstyled">
                           <li><a href="#">Printing </a></li>
                           <li><a href="#">Specimen book</a></li>
                           <li><a href="#">Simply random</a></li>
                           <li><a href="#">Embarrassing</a></li>
                           <li><a href="#">Making </a></li>
                        </ul>
                     </div>
                     <div class="col-sm-3">
                        <h6 class="text-uppercase">ARCHIVES</h6>
                        <ul class="list-unstyled">
                           <li><a href="#">May 2017</a></li>
                           <li><a href="#">April 2017</a></li>
                           <li><a href="#">March 2017</a></li>
                           <li><a href="#">February 2017</a></li>
                           <li><a href="#">January 2017</a></li>
                        </ul>
                     </div>
                     <div class="col-sm-3">
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
         <!-- Footer End -->
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
         <!-- Counter -->
         <script type="text/javascript" src="{{ asset('templates/kkr021/js/counter/jquery.countTo.js')}}"></script>
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