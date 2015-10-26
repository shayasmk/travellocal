<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Vintage Bootstarp Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300:700' rel='stylesheet' type='text/css'>
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/js/modernizr.custom.js" type="text/javascript"></script>
<script src="/js/jquery.openCarousel.js" type="text/javascript"></script>
<script src="/js/fwslider.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	    $('#slider').fwslider({
	        auto:     true,  //auto start
	        speed:    300,   //transition speed
	        pause:    4000,  //pause duration
	        panels:   5,     //number of image panels
	        width:    1680,
	        height:   500,
	        nav:      true   //show navigation
	    });
	});
	</script>		
 <!---- animated-css ---->
 <!---strat-date-piker---->
<link rel="stylesheet" href="/css/jquery-ui.css" />
<script src="/js/jquery-ui.js"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<!---/End-date-piker---->
<link href="/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
	<script>
		$(function() {
	    var button = $('#loginButton');
	    var box = $('#loginBox');
	    var form = $('#loginForm');
	    button.removeAttr('href');
	    button.mouseup(function(login) {
	        box.toggle();
	        button.toggleClass('active');
	    });
	    form.mouseup(function() { 
	        return false;
	    });
	    $(this).mouseup(function(login) {
	        if(!($(login.target).parent('#loginButton').length > 0)) {
	            button.removeClass('active');
	            box.hide();
	        }
	    });
	});
   </script>
   <!----font-Awesome----->
<link rel="stylesheet" href="/fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
   <!-- Header -->
	<div class="header">    
		<div class="header_top">
			<div class="container">
			  <div class="headertop_nav">
				<ul>
					<li><a href="#">Contact</a> /</li>
					<li><a href="#">Sitemap</a> /</li> 
					<li><a href="#l">Feedback</a> /</li> 
					<li><a href="#">Worldwide Locations</a></li> 
				</ul>
			</div>
		    <div class="header-top-right">
		        <div class="login_box">
	    		   <div id="loginContainer">
	                  <a id="loginButton" class="active"><span class="active"><i class="search-icon"></i>Search</span></a>               
	                <div id="loginBox">                
	                    <form id="loginForm">
	                        <div class="search_box">
								<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
								<input type="submit" value="">
							</div>
	                    </form>
	                </div>
	              </div>
	           </div> 
			 </div>
			 <div class="clearfix"></div>
            </div>
		  </div>
		</div>
 	    <div class="header_bottom">
		 	  <div class="container">	 			
				<div class="logo">
                                    <h1><a href="/">Travel Local<span>online hotel booking</span></a></h1>
				</div>				
			<div class="navigation">	
			<div>
              <label class="mobile_menu" for="mobile_menu">
              <span>Menu</span>
              </label>
              <input id="mobile_menu" type="checkbox">
				<ul class="nav">
              <li><a href="/">Home</a></li>                  
              <li class="dropdown"><a href="room">Reservation</a>
                <ul class="dropdown2">
                  <li><a href="room">Room 1</a></li>
                  <li><a href="room">Room 2</a></li>
                  <li><a href="room">Single Room</a></li>
                  <li><a href="room">Double Room</a></li>
                  <li><a href="room">Room 3</a></li>
                </ul>
              </li>             
              <li class="dropdown"><a href="about-us">About</a></li>
           </li>           
           <li class=""><a href="blog">Blog</a>
<!--           	  <ul>
	           	  <li><a href="blog.html">Blog 1</a></li>
	              <li><a href="blog.html">Blog 2</a></li>
	          </ul>-->
            </li>        
            <li><a href="contact">Contact</a></li>
            <div class="clearfix"></div>
          </ul>
		</div>			
	 </div>
     <div class="clearfix"></div>		   
    </div>
   </div>