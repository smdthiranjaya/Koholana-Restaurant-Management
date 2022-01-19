<!doctype html>
<html lang="en">
<?php
include("connection/connect.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Koholana Restaurant</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bistro-icons.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/navigation.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/zerogrid.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<link rel="shortcut icon" href="images/favicon.PNG">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

<!--Loader-->
<div class="loader"> 
   <div class="cssload-container">
     <div class="cssload-circle"></div>
     <div class="cssload-circle"></div>
   </div>
</div>

<!--Topbar-->
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs">Koholana Restaurant, The Best in Town</p>
        <p class="pull-right"><i class="fa fa-phone"></i>Order Online +94372278123</p>
      </div>
    </div>
  </div>
</div>

<!--Header-->
<header id="main-navigation">
  <div id="navigation" data-spy="affix" data-offset-top="20">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false"> 
            <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> 
            </button>
           <a class="navbar-brand" href="index.php"><img src="images/logo.PNG" alt="logo" class="img-responsive"></a> 
         </div>
        
          <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                <li>
                   <a href="index.php">Home</a>
                </li>
                <li><a href="menu.php">Menu</a></li>
					<?php
						if(empty($_SESSION["user_id"])) // if user is not login
						{
						  echo '<li class="dropdown"><a data-toggle="dropdown" href="#." class="dropdown-toggle">Order Now</a>
                          <ul class="dropdown-menu">
                          <li><a href="login.php">Login</a></li>
                           <li><a href="registration.php">Signup</a></li>
                           </ul>
                            </li>';
						}
						else
						{
					      echo '<li class="dropdown"> <a data-toggle="dropdown" href="#." class="dropdown-toggle">Order Now</a>
                          <ul class="dropdown-menu">
                           <li><a href="logout.php">Logout</a></li>
                           <li><a href="your_orders.php">My Order</a></li>
                           </ul>
                           </li>';
						}
					?>
               <li><a href="restaurants.php">Our Restaurants</a></li> 
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="about.php">About Us</a></li>
               
		         </ul>
            </div>
          </nav>
         </div>
       </div>
     </div>
  </div>
</header>




<!-- REVOLUTION SLIDER -->			

				<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
					<div id="rev_slider_34_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
						<ul>	<!-- SLIDE  -->
							<li data-index="rs-129" data-transition="fade" data-slotamount="default" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"  data-title="Fish &nbsp; Steak" data-description="The Flavors Of Sea Nature">
								<!-- MAIN IMAGE -->
								<img src="images/banner2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
								<!-- LAYER NR. 2 -->
								<h1 class="tp-caption tp-resizeme" 
                          data-x="left" data-hoffset="15"
                          data-y="70" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="500" 
                          data-splitin="none" 
                          data-splitout="none" 
                          style="z-index: 6;">
                          <span class="small_title">Yes We Have</span> <br> The &nbsp; Best &nbsp; Fish &nbsp;<span class="color">Steak</span>
                       </h1>
								<!-- LAYER NR. 2 -->
                        <p class="tp-caption tp-resizeme"
                          data-x="left" data-hoffset="15"
                          data-y="210" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="800"
                          style="z-index: 9;">From the sea into the fire.
                          
                        </p>
                        <div class="tp-caption fade tp-resizeme"
                           data-x="left" data-hoffset="15"
                           data-y="280"
                           data-width = "full"  
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="1200"
                           style="z-index: 12;">
                       <a href="login.php" class="btn-common btn-white page-scroll">Order Now</a>
                       </div>
                        
                       
							</li>
							
							<li class="text-center" data-index="rs-130" data-transition="slideleft" data-slotamount="default" data-rotate="0"  data-title="Bakery &nbsp; Items" data-description="Freshly baked all Day. Every day">
								<img src="images/banner1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <h1 class="tp-caption tp-resizeme" 
                          data-x="center" data-hoffset="15"
                          data-y="70" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="500" 
                          data-splitin="none" 
                          data-splitout="none" 
                          style="z-index: 6;">
                          <span class="small_title">  Delicious Bakery Items</span> <br> Coconut &nbsp; with &nbsp; <span class="color">Lemon &nbsp; Grass</span>
                        </h1>
                        <p class="tp-caption tp-resizeme"
                          data-x="center" data-hoffset="15"
                          data-y="210" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="800"
                          style="z-index: 9;">Great taste in every bite.
                        </p>
							
                            
                          <div class="tp-caption fade tp-resizeme"
                           data-x="center" data-hoffset="15"
                           data-y="280"
                           data-width = "full"  
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="1200"
                           style="z-index: 12;">
                          <a href="#specialities" class="btn-common btn-white page-scroll">Learn &nbsp; More</a> &nbsp; <a href="login.php" class="btn-common btn-orange page-scroll">Order &nbsp; Now</a>
                       </div>  
                            
                            
                            
                            </li>
						
							<li class="text-right" data-index="rs-131" data-transition="slideleft"   data-rotate="0" data-title="Fresh &nbsp; Food" data-description="Get the Fresh, Eat the Fresh">
								<img src="images/banner4.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <h1 class="tp-caption tp-resizeme" 
                          data-x="right" data-hoffset="" 
                          data-y="70" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="500" 
                          data-splitin="none" 
                          data-splitout="none" 
                          style="z-index: 6;">
                          <span class="small_title">We Prepare</span> <br> Fresh &nbsp; Food &nbsp; <span class="color">Vegies</span>
                        </h1>
                        <p class="tp-caption tp-resizeme"
                          data-x="right" data-hoffset="" 
                          data-y="210" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="800"
                          style="z-index: 9;">Eat healthy, Live more
                        </p>
							
                           <div class="tp-caption fade tp-resizeme"
                           data-x="right" data-hoffset=""
                           data-y="280"
                           data-width = "full" 
                           data-transform_idle="o:1;"
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="1200"
                           style="z-index: 12;">
                       <a href="login.php" class="btn-common btn-white page-scroll">Order Now</a>
                       </div>  
                            </li>
							<!-- SLIDE  -->
						</ul>
					</div>
				</div>
 <!-- END REVOLUTION SLIDER -->

<!--Features Section-->
<section class="feature_wrap padding-half" id="specialities">
  <div class="container">
    <div class="row">
     <div class="col-md-12 text-center">
        <h2 class="heading ">Our &nbsp; Specialities</h2>
        <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 feature text-center">
        <i class="icon-glass"></i>
        <h3><a href="menu.php">Mains</a></h3>
        <p>The world on your plate delivered right to your door.</p>
      </div>
      <div class="col-md-3 col-sm-6 feature text-center">
        <i class="icon-coffee"></i>
        <h3><a href="menu.php">Savoury</a></h3>
        <p>Hot and fresh straight from the oven.</p>
      </div>
      <div class="col-md-3 col-sm-6 feature text-center">
        <i class="icon-glass"></i>
        <h3><a href="menu.php">Cakes</a></h3>
        <p>The perfect cake for any occasion.</p>
      </div>
      <div class="col-md-3 col-sm-6 feature text-center">
        <i class="icon-coffee"></i>
        <h3><a href="menu.php">Beverges &amp; Dessert</a></h3>
        <p>Treat your self to a sweet surprise with our famous desserts.</p>
      </div>
    </div>
    
  </div>
</section>
						
<!-- banner part starts -->
<section class="info_section paralax" data-image-src="images/img/main2.jpg">
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <h1>Order&nbsp;&nbsp; Delivery &nbsp;& &nbsp;Take-Out </h1>
                    
                    <div class="banner-form">
                        <form class="form-inline">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">I would like to eat....</label>
                               <!-- <div class="form-group">
                                    <input type="search" class="form-control form-control-lg" id="exampleInputAmount" placeholder="I would like to eat...." required> </div>
									<button onclick="location.href='food-search.php'" type="submit" name="search" class="btn theme-btn btn-lg">Search food</button>
                            </div> -->
                            
                        </form>
                    </div>
                    <div class="steps">
                        <div class="step-item step1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 483 483" width="512" height="512">
                                <g fill="#FFF">
                                    <path d="M467.006 177.92c-.055-1.573-.469-3.321-1.233-4.755L407.006 62.877V10.5c0-5.799-4.701-10.5-10.5-10.5h-310c-5.799 0-10.5 4.701-10.5 10.5v52.375L17.228 173.164a10.476 10.476 0 0 0-1.22 4.938h-.014V472.5c0 5.799 4.701 10.5 10.5 10.5h430.012c5.799 0 10.5-4.701 10.5-10.5V177.92zM282.379 76l18.007 91.602H182.583L200.445 76h81.934zm19.391 112.602c-4.964 29.003-30.096 51.143-60.281 51.143-30.173 0-55.295-22.139-60.258-51.143H301.77zm143.331 0c-4.96 29.003-30.075 51.143-60.237 51.143-30.185 0-55.317-22.139-60.281-51.143h120.518zm-123.314-21L303.78 76h86.423l48.81 91.602H321.787zM97.006 55V21h289v34h-289zm-4.198 21h86.243l-17.863 91.602h-117.2L92.808 76zm65.582 112.602c-5.028 28.475-30.113 50.19-60.229 50.19s-55.201-21.715-60.23-50.19H158.39zM300 462H183V306h117v156zm21 0V295.5c0-5.799-4.701-10.5-10.5-10.5h-138c-5.799 0-10.5 4.701-10.5 10.5V462H36.994V232.743a82.558 82.558 0 0 0 3.101 3.255c15.485 15.344 36.106 23.794 58.065 23.794s42.58-8.45 58.065-23.794a81.625 81.625 0 0 0 13.525-17.672c14.067 25.281 40.944 42.418 71.737 42.418 30.752 0 57.597-17.081 71.688-42.294 14.091 25.213 40.936 42.294 71.688 42.294 24.262 0 46.092-10.645 61.143-27.528V462H321z"></path>
                                    <path d="M202.494 386h22c5.799 0 10.5-4.701 10.5-10.5s-4.701-10.5-10.5-10.5h-22c-5.799 0-10.5 4.701-10.5 10.5s4.701 10.5 10.5 10.5z"></path>
                                </g>
                            </svg>
                            <h4><span>1. </span>Choose Restaurant</h4> </div>
                        <!-- end:Step -->
                        <div class="step-item step2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 380.721 380.721">
                                <g fill="#FFF">
                                    <path d="M58.727 281.236c.32-5.217.657-10.457 1.319-15.709 1.261-12.525 3.974-25.05 6.733-37.296a543.51 543.51 0 0 1 5.449-17.997c2.463-5.729 4.868-11.433 7.25-17.01 5.438-10.898 11.491-21.07 18.724-29.593 1.737-2.19 3.427-4.328 5.095-6.46 1.912-1.894 3.805-3.747 5.676-5.588 3.863-3.509 7.221-7.273 11.107-10.091 7.686-5.711 14.529-11.137 21.477-14.506 6.698-3.724 12.455-6.982 17.631-8.812 10.125-4.084 15.883-6.141 15.883-6.141s-4.915 3.893-13.502 10.207c-4.449 2.917-9.114 7.488-14.721 12.147-5.803 4.461-11.107 10.84-17.358 16.992-3.149 3.114-5.588 7.064-8.551 10.684-1.452 1.83-2.928 3.712-4.427 5.6a1225.858 1225.858 0 0 1-3.84 6.286c-5.537 8.208-9.673 17.858-13.995 27.664-1.748 5.1-3.566 10.283-5.391 15.534a371.593 371.593 0 0 1-4.16 16.476c-2.266 11.271-4.502 22.761-5.438 34.612-.68 4.287-1.022 8.633-1.383 12.979 94 .023 166.775.069 268.589.069.337-4.462.534-8.97.534-13.536 0-85.746-62.509-156.352-142.875-165.705 5.17-4.869 8.436-11.758 8.436-19.433-.023-14.692-11.921-26.612-26.631-26.612-14.715 0-26.652 11.92-26.652 26.642 0 7.668 3.265 14.558 8.464 19.426-80.396 9.353-142.869 79.96-142.869 165.706 0 4.543.168 9.027.5 13.467 9.935-.002 19.526-.002 28.926-.002zM0 291.135h380.721v33.59H0z" /> </g>
                            </svg>
                            <h4><span>2. </span>Order Food</h4> </div>
                        <!-- end:Step -->
                        <div class="step-item step3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 612.001 612">
                                <path d="M604.131 440.17h-19.12V333.237c0-12.512-3.776-24.787-10.78-35.173l-47.92-70.975a62.99 62.99 0 0 0-52.169-27.698h-74.28c-8.734 0-15.737 7.082-15.737 15.738v225.043h-121.65c11.567 9.992 19.514 23.92 21.796 39.658H412.53c4.563-31.238 31.475-55.396 63.972-55.396 32.498 0 59.33 24.158 63.895 55.396h63.735c4.328 0 7.869-3.541 7.869-7.869V448.04c-.001-4.327-3.541-7.87-7.87-7.87zM525.76 312.227h-98.044a7.842 7.842 0 0 1-7.868-7.869v-54.372c0-4.328 3.541-7.869 7.868-7.869h59.724c2.597 0 4.957 1.259 6.452 3.305l38.32 54.451c3.619 5.194-.079 12.354-6.452 12.354zM476.502 440.17c-27.068 0-48.943 21.953-48.943 49.021 0 26.99 21.875 48.943 48.943 48.943 26.989 0 48.943-21.953 48.943-48.943 0-27.066-21.954-49.021-48.943-49.021zm0 73.495c-13.535 0-24.472-11.016-24.472-24.471 0-13.535 10.937-24.473 24.472-24.473 13.533 0 24.472 10.938 24.472 24.473 0 13.455-10.938 24.471-24.472 24.471zM68.434 440.17c-4.328 0-7.869 3.543-7.869 7.869v23.922c0 4.328 3.541 7.869 7.869 7.869h87.971c2.282-15.738 10.229-29.666 21.718-39.658H68.434v-.002zm151.864 0c-26.989 0-48.943 21.953-48.943 49.021 0 26.99 21.954 48.943 48.943 48.943 27.068 0 48.943-21.953 48.943-48.943.001-27.066-21.874-49.021-48.943-49.021zm0 73.495c-13.534 0-24.471-11.016-24.471-24.471 0-13.535 10.937-24.473 24.471-24.473s24.472 10.938 24.472 24.473c0 13.455-10.938 24.471-24.472 24.471zm117.716-363.06h-91.198c4.485 13.298 6.846 27.54 6.846 42.255 0 74.28-60.431 134.711-134.711 134.711-13.535 0-26.675-2.045-39.029-5.744v86.949c0 4.328 3.541 7.869 7.869 7.869h265.96c4.329 0 7.869-3.541 7.869-7.869V174.211c-.001-13.062-10.545-23.606-23.606-23.606zM118.969 73.866C53.264 73.866 0 127.129 0 192.834s53.264 118.969 118.969 118.969 118.97-53.264 118.97-118.969-53.265-118.968-118.97-118.968zm0 210.864c-50.752 0-91.896-41.143-91.896-91.896s41.144-91.896 91.896-91.896c50.753 0 91.896 41.144 91.896 91.896 0 50.753-41.143 91.896-91.896 91.896zm35.097-72.488c-1.014 0-2.052-.131-3.082-.407L112.641 201.5a11.808 11.808 0 0 1-8.729-11.396v-59.015c0-6.516 5.287-11.803 11.803-11.803 6.516 0 11.803 5.287 11.803 11.803v49.971l29.614 7.983c6.294 1.698 10.02 8.177 8.322 14.469-1.421 5.264-6.185 8.73-11.388 8.73z" fill="#FFF" /> </svg>
                            <h4><span>3. </span>Delivery or take out</h4> </div>
                        <!-- end:Step -->
                    </div>
                    <!-- end:Steps -->
                </div>
            </div>
            <!--end:Hero inner -->
        </section>
        <!-- banner part ends -->


        <section class="feature_wrap padding-half"></section>





<!--Services plus working hours-->
<section id="services" class="padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
         <h2 class="heading">Featured &nbsp; Food</h2>
         <hr class="heading_space">
         <div class="slider_wrap">
        <div id="service-slider" class="owl-carousel">
          <div class="item">
            <div class="item_inner">
            <div class="image">
              <img src="images/Hot Butter Cuttlefish2.jpg" alt="Services Image">
              <a  href="menu.php"></a>
            </div>
              <h3><a href="menu.php">Hot Butter Cuttlefish (With Steamed Rice)</a></h3>
              <p> Cuttlefish in Hot Butter Sauce with Dried Red Chili & Spring Onion Served with Steamed Rice</p>
            </div>
          </div>
          <div class="item">
            <div class="item_inner">
              <div class="image">
              <img src="images/Lemon & Blueberry.jpg" alt="Services Image">
              <a  href="menu.php"></a>
              </div>
              <h3><a href="menu.php">Lemon & Blueberry (1kg)</a></h3>
              <p> Butter Cake layers sandwiched with Butter Icing, cream & Blueberry filling with layer of Lemon, Caramelized Cashew, covered with Pink & Violet Butter cream Garnished with Chocolate Feathers.</p>
            </div>
          </div>
          <div class="item">
            <div class="item_inner">
              <div class="image">
              <img src="images/Deviled Pork Roti.jpg" alt="Services Image">
              <a  href="menu.php"></a>
              </div>
              <h3><a href="menu.php">Deviled Pork Roti (10 Pcs)</a></h3>
              <p>Enjoy Delicious Food!</p>
            </div>
          </div>
          <div class="item">
            <div class="item_inner">
              <div class="image">
              <img src="images/Salted Caramel Date Fudge.jpg" alt="Services Image">
              <a  href="menu.php"></a>
              </div>
              <h3><a href="menu.php">Salted Caramel Date Fudge</a></h3>
              <p> Dark Harlem Sponge with Royal Chocolate Mousse, Salted Caramel, Chocolate Sauce & Caramelized Cashew.
              </p>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <h2 class="heading">Our &nbsp; Menu</h2>
        <hr class="heading_space">
        <ul class="menu_widget">
          <li><a href=menu.php#pricing>Mains</a></li>
          <li><a href=menu.php#pricing>Savoury</a></li>
          <li><a href=menu.php#pricing>Breakfast</a></li>
          <li><a href=menu.php#pricing>Lunch & Dinner</a></li>
          <li><a href=menu.php#pricing>Dessert</a></li>
          <li><a href=menu.php#pricing>Beverages</a></li>
          <li><a href=menu.php#pricing>Cakes</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- facts counter  -->
<section id="facts">
  <div class="container">
    <div class="row number-counters"> 
      <!-- first count item -->
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
        <div class="counters-item row">
        <i class="icon-smile"></i> 
        <h2><strong data-to="4680">0</strong></h2>
          <p>Happy Customers</p>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
        <div class="counters-item  row"> 
        <i class="icon-food"></i>
        <h2><strong data-to="865">0</strong></h2>
          <p>Dishes Served</p>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="900ms">
        <div class="counters-item  row"> 
        <i class="icon-glass"></i>
        <h2><strong data-to="510">0</strong></h2>
          <p>Total Beverages</p>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1200ms">
        <div class="counters-item  row"> 
        <i class="icon-coffee"></i>
        <h2><strong data-to="1350">0</strong></h2>
          <p>Cup of coffees</p>
        </div>
      </div>
    </div>  
  </div>
</section>





<!-- testinomial -->
<section id="testinomial" class="padding">
  <div class="container">
  <div class="row">
      <div class="col-md-12 text-center">
      <h2 class="heading">Our &nbsp; happy &nbsp; Customers</h2>
      <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
      <div id="testinomial-slider" class="owl-carousel text-center">
        <div class="item">
          <h3>We went for a meal to celebrate a birthday, and as usual had a fantastic meal. Great service, great food and great value for money. We recommend Koholana to people.</h3>
          <p>Vajira Subhasinghe</p>
        </div>
        <div class="item">
          <h3>Excellent environment, friendly service, great menu choices and really decent food and at affordable prices. Will be back.</h3>
          <p>Nilu Perera</p>
        </div>
        <div class="item">
          <h3>Just to say “thank you” for our meal last Saturday. We all enjoyed your delicious food and the evening was everything we hoped it would be. Thank you so much.</h3>
          <p>Janaka Kasthuri</p>
        </div>
       </div>
      </div>
    </div>
  </div>
</section>


<!--Footer-->
<footer class="padding-top bg_black">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Who are we?</h4>
        <hr class="half_space">
        <p class="half_space"></p>
        <p>Launched in Koholana, KB has grown from from a home project to one of the largest food aggregators in Kurunegala district. We are present in Kurunegala & Kegalle districts for the time being & we hope to further expand our branches in other districts. Our vision is to serve only the highest quality product, prepare it in a clean and sparkling environment, & serve it in a warm and friendly manner.</p>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Quick Links</h4>
        <hr class="half_space">
        <ul class="widget_links">
        <li><a href="index.php">Home</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="login.php">Order Now</a></li>
          <li><a href="faq.php">Faq's</a></li>    
         </ul>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Newsletter</h4>
        <hr class="half_space">
        <p class="icon"><i class="icon-dollar"></i>Sign up with your name and email to get updates fresh updates.</p>
        <div id="result1" class="text-center"></div>        
        
       <form  method="post" class="newsletter">
          <div class="form-group">
            <input type="email" placeholder="E-mail Address"  id="email_data" class="form-control" />
          </div>
          <div class="form-group">
            <span class="email-message" id="email_msg"></span>
            <button type="button" id="email_submit" class="btn-submit button3">Subscribe</button>
          </div>
        </form>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Get in Touch</h4>
        <hr class="half_space">
        <p></p>
        <p class="address"><i class="icon-location"><a href="https://www.google.com/maps/place/Koholana+Bakery/@7.3091465,80.2511517,16z/data=!4m19!1m13!4m12!1m4!2m2!1d80.0328781!2d7.463606!4e1!1m6!1m2!1s0x3ae318474dfd7d8d:0x99ed66b1554f3d04!2sKoholana+Bakery,+Koholana,+Alawwa.!2m2!1d80.2538095!2d7.3050169!3m4!1s0x3ae318474dfd7d8d:0x99ed66b1554f3d04!8m2!3d7.3050169!4d80.2538095"></i>Koholana Restaurent,Koholana Rd, Alawwa 60280, Sri Lanka.</a></p>
        <p class="address"><i class="fa fa-phone"></i>(+94) 372278575</p>
        <p class="address"><i class="icon-dollar"></i><a href="mailto:koholanaofficial@gmail.com">koholanaofficial@gmail.com</a></p>
    </div>
    <div class="row">
     <div class="col-md-12">
        <div class="copyright clearfix">
          <p>Copyright &copy; 2021 KR. All Right Reserved</p>
          <ul class="social_icon">
               <li><a href="https://www.facebook.com/koholanabakery/" class="facebook"><i class="icon-facebook5"></i></a></li>
               <li><a href="https://twitter.com/koholanabakery/" class="twitter"><i class="icon-twitter4"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<script src="js/jquery-2.2.3.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/slider.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/jquery.appear.js"></script>  
<script src="js/jquery.fancybox.js"></script>
<script src="js/functions.js" type="text/javascript"></script>
 
</body>
</html>
<script type="text/javascript">
	
$(document).ready(function ()
{
	$("#email_submit").click(function ()
  {
    var $email_data_var;
		$email_data_var = $("#email_data").val();
		if($email_data_var == '')
    {
			$("#email_msg").html("Please Enter a Email Address");
		}
		else{
      $.ajax(
        {
        	type:'POST',
				  url:"email-submit.php",
				  data:{email_data_values : $email_data_var},
				  success:function(response)
          {
				  	$("#email_msg").html(response);
			  	}
  	    }
      );
    }
  });
});
</script>