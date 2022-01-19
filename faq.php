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
<title>KR | FAQ</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/JKS-icons.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/zerogrid.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<link rel="stylesheet" type="text/css" href="css/bistro-icons.css">
<link rel="shortcut icon" href="images/favicon.png">

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
                <li><a href="about.php">About Us</a></li>
               
		         </ul>
            </div>
          </nav>
         </div>
       </div>
     </div>
  </div>
</header>

<!--Page header & Title-->
<section id="page_header">
<div class="page_title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="title">FAQ’s</h2>
         <p>Anything we can help you with?</p>
      </div>
    </div>
  </div>
</div>  
</section>



<section id="faq" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h2 class="heading">Frequently ask Questions</h2>
      <hr class="heading_space">
        <div class='faq_wrapper'>
          <ul class='items'>
            <li>
              <a href='#'> How do I edit my order after placing it?</a>
              <ul class='sub-items'>
                <li>
                  <p class="half_space"> When the you placing your order, you can't edit your order. But can  delete your order. After that you can place your new order as required.</p>
                </li>
              </ul>
            </li>
            <li>
              <a href='#'>How do I cancel my order?</a>
              <ul class='sub-items'>
                <li>
                  <p>If you want to cancel your order, Go to Order Now & select My Order and delete your order.</p>
                </li>
              </ul>
            </li>
            <li>
              <a href='#'>How will be my orders delivered?</a>
              <ul class='sub-items'>
                <li>
                  <p class="half_space">Orders are delivered directly by our suppliers . Different items in an order could be fulfilled by different suppliers. We will share the contact details and amount payable for all deliveries via email and SMS.</p>
                </li>
              </ul>
            </li>
            
            <li>
              <a href='#'>When is the order delivered?</a>
              <ul class='sub-items'>
                <li>
                  <p>our suppliers are always ready to deliver your order by 30 minutes within 1km of distance.</p>
                </li>
              </ul>
            </li>
            <li>
              <a href='#'>Is delivery free?</a>
              <ul class='sub-items'>
                <li>
                  <p>Yes. There are no delivery or handling charges.</p>
                </li>
              </ul>
            </li>
          </ul>
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