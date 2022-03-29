<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
     	<meta content="width=device-width, initial-scale=1.0" name="viewport">
     	<meta name="description" content="STORY - Responsive HTML Wedding Template">
      	<meta name="author" content="www.dethemes.com">
      	<title>STORY TIME</title>
        
        <!-- Favicon -->
        <link rel="icon" href="images/favicon.jpg">
        <!-- Bootstrap -->
    	<link rel="stylesheet" href="{{asset('assets/landing/css/bootstrap/bootstrap.min.css')}}" type="text/css" media="screen" />
        <!-- Pace -->
        <link rel="stylesheet" href="{{asset('assets/landing/css/preloader/preloader.css')}}"  media="screen">
        <!-- Flexslider -->
        <link rel="stylesheet" href="{{asset('assets/landing/css/flexslider/flexslider.css')}}" type="text/css">
        <!-- Animate -->
        <link rel="stylesheet" href="{{asset('assets/landing/css/animate/animate.css')}}" type="text/css">       
        <!-- Countdown -->
        <link rel="stylesheet" href="{{asset('assets/landing/css/countdown/jquery.countdown.css')}}" type="text/css"> 
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{asset('assets/landing/css/magnific-popup/magnific-popup.css')}}" type="text/css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{asset('assets/landing/css/owlcarousel/owl.carousel.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/landing/css/owlcarousel/owl.theme.css')}}" type="text/css">
        <!-- Icon -->
        <link rel="stylesheet" href="{{asset('assets/landing/css/fonts/fontello/css/fontello.css')}}" type="text/css" media="screen" /> 
        <!-- Font -->
        <link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100' rel='stylesheet' type='text/css'>
     
        <!-- Theme CSS -->
    	<link href="{{asset('assets/landing/css/style.css')}}" rel="stylesheet" media="screen">
    </head>
    <body>
            
     
     <!-- NAVIGATION -->
     <header id="nav-header">
         <nav id="nav-bar" class="sticky-nav animation fadeInDown">
             
             <!-- LOGO -->
             <div id="logo-wrapper">

                     <!-- CSS LOGO --> 
                     <a href="index.html">              
                         <div id="css-logo" >
                                       
                             <strong>Tourism Stories</strong>                   		
                         
                         </div>
                     </a>
                     <!-- IMG LOGO 
                     <a href="index.html">
                         <div id="img-logo">
                             <img src="images/slide1.jpg">
                         </div>
                     </a>
                     -->
             </div>
             <!-- END of LOGO -->
                     
             <!-- MENU ICON -->
             <div id="menu-wrapper">
                 <div id="mobile-nav">
                     <i class="de-icon-menu"></i>
                 </div>
                 
                 <ul id="top-nav-menu" class="main-menu">
                     <li>
                         <a href="/">Home</a>
                     </li>
                     <li>
                         <a href="#">About Us</a>
                     </li>
                     <li>
                         <a href="/register">Sign Up</a>
                     </li>
                     <li>
                         <a href="/login">Sign In</a> 
                     </li>
                 </ul>
             </div>
             
             <!-- RESET FLOAT -->        
             <div class="clearboth"></div>
            
         </nav>
        
     </header><!-- END of NAVIGATION -->   
     
     
        <!-- MAIN SLIDER -->
     <section id="main-slider" class="flexslider fullscreen">      	
         
         <!-- MAIN SLIDER TITLE OUTTER WRAPPER -->
         <div class="slide-title-outter-wrapper">
             
             <!-- MAIN SLIDER TITLE INNER WRAPPER -->
             <div class="slide-title-inner-wrapper">
                             
                 <!-- TITLE -->
                 <div class="slide-title align-middle">
                 
                     <div class="container">
                         <div class="row">
                             <div class="col-md-12">
                                 
                                 <div class="heart-divider animation delay2 fadeInUp">
                                     <i class="de-icon-heart white-heart"></i>
                                     <i class="de-icon-heart pink-heart"></i>
                                 </div>
                                 <h1 class="font-oswald animation delay3 fadeInUp">
                                 Aberdeen Marine Museum 
                                 </h1>
                                 <div class="slide-desc animation delay4 fadeInUp">
                                     - This is My Story -
                                 </div>
                                                         
                             </div> 
                         </div>
                     </div>
                     
                     <!-- DOWN ARROW -->
                     <div id="slide-arrow">
                          <div class="bounceloop">
                             <a href="#page-content" class="animation delay5 fadeIn smooth-scroll"><i class="de-icon-down-open-big"></i></a>
                         </div>
                     </div>
                      <!-- DOWN ARROW -->   
                     
                 </div> 
                             
             </div><!-- END of MAIN SLIDER TITLE INNER WRAPPER -->
             
         </div> <!-- END of MAIN SLIDER TITLE OUTTER WRAPPER -->
                     
                      
         <!-- MAIN SLIDER IMAGES -->
         
           <ul class="slides">
             
             
             <li>
                 <!-- SLIDE IMAGE -->
                 <div data-stellar-ratio="0.5" class="slide-image" style="background-image:url({{asset('/assets/landing/images/main-him.jpg')}});">
                 </div>
                 
                 <!-- SLIDE OVERLAY -->
                 <div class="slide-overlay" style="opacity:0.1"> </div> 
                                                   
             </li>     
      
             
           </ul><!-- END of MAIN SLIDER IMAGES -->
        
         
     </section><!-- ENF of MAIN SLIDER -->
     
     
     <!-- START PAGE CONTENT -->
     <section id="page-content">
     
         <!-- HIS STORY -->
         <section id="his-story" class="section-padding">
             <div class="container">
                 <div class="row">
                     <div class="col-md-5">
                        <img src="{{asset('assets/landing/images/aberdmus.jpg')}}" style="width: 500px" class="img-fluid img-responsive"/>
                     </div>

                     <div class="col-md-7 text-center">
                         <h3 class="animation fadeInUp">Aberdeen Marine Museum</h3>
                            <div class="blurb animation fadeInUp">
                            <p>History says, Aberdeen had a long relation with the North Sea. If you wish to know some captivating stories related to the sea, visit this award winning museum named Aberdeen Marine Museum. Situated on the historic Shiprow, this beautiful museum was built in 1593. A visit to this museum will take you on a historical journey of the booming fishing industry of the city to the present flourishing oil industry of the city. Within the museum, you can see displays belonging to the North Boats, oil industry and marine industry and clipper ships. The new section of the exhibition includes Aberdeen Harbour gallery and displays belonging to the fishing techniques and also techniques related to parking ship at the harbour.
                                    A great place for visitors belonging to different age groups and to get a stunning view of the busy harbour!
                            </p> 
                             
                         </div>                        
                     </div>
                 </div>
             </div>
         </section>
            <!-- END of HIS STORY -->
     
     </section>
     <!-- END of PAGE CONTENT -->      
         
     <!-- jQuery -->
     <script src="{{asset('assets/landing/js/jquery-1.11.1.min.js')}}"></script>
     <!-- Pace -->
     <script src="{{asset('assets/landing/js/pace/pace.min.js')}}"></script> 
     <!-- Bootstrap -->
     <script src="{{asset('assets/landing/js/bootstrap/bootstrap.min.js')}}"></script>     
     <!-- Device JS -->
     <script src="{{asset('assets/landing/js/devicejs/device.min.js')}}"></script> 

     <script src="{{asset('assets/landing/js/smoothscroll/jquery.smooth-scroll.min.js')}}"></script>
     <!-- Flexslider -->
     <script src="{{asset('assets/landing/js/flexslider/jquery.flexslider-min.js')}}"></script>   
     <!-- Waypoint -->
     <script src="{{asset('assets/landing/js/waypoint/jquery.waypoints.min.js')}}"></script>
     <!-- DoubleTapToGo -->
     <script src="{{asset('assets/landing/js/jquery-ui-widget/jquery.ui.widget.min.js')}}"></script>
     <script src="{{asset('assets/landing/js/jquery-doubletaptogo/jquery.dcd.doubletaptogo.min.js')}}"></script>
     <!-- Stellar -->
     <script src="{{asset('assets/landing/js/stellar/jquery.stellar.min.js')}}"></script>
     <!-- Masonry -->
     <script src="{{asset('assets/landing/js/masonry/masonry.pkgd.min.js')}}"></script>
     <!-- Countdown -->
     <script src="{{asset('assets/landing/js/countdown/jquery.plugin.min.js')}}"></script>
     <script src="{{asset('assets/landing/js/countdown/jquery.countdown.min.js')}}"></script>
     <!-- Magnific Popup -->
     <script src="{{asset('assets/landing/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
     <!-- Owl Carousel -->
     <script src="{{asset('assets/landing/js/owlcarousel/owl.carousel.min.js')}}"></script>
     
     <!-- Custom Core Script -->
     <script type="text/javascript" src="{{asset('assets/landing/js/script.js')}}"></script>        
     <!-- Custom Additional Script -->
     <script type="text/javascript" src="{{asset('assets/landing/js/main-slider.js')}}"></script>
     
 </body>
</html>
