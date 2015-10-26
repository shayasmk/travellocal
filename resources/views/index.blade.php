@include('layouts.header')
<div id="slider">
	  <div><img src="images/2.jpg" class="img-responsive" alt="img01"/></div>
	  <div><img src="images/1.jpg" class="img-responsive" alt="img02"/></div>
	  <div><img src="images/2.jpg" class="img-responsive" alt="img03"/></div>
	  <div><img src="images/1.jpg" class="img-responsive" alt="img04"/></div>
          
	</div>
  </div>
<div class="online_reservation">
            <div class="b_room ">
		<div class="booking_room">
			<h4 >book a room online</h4>
			<p >Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
		</div>
		<div class="reservation ">
			<ul>
				<li class="span1_of_1">
					<h5>type of room:</h5>
					<!----------start section_room----------->
					<div class="section_room">
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Select a type of room</option>
				            <option value="null">Suite room</option>         
				            <option value="AX">Single room</option>
							<option value="AX">Double room</option>
		        		</select>
					</div>	
				</li>
				<li  class="span1_of_1 left">
					<h5>check-in-date:</h5>
					<div class="book_date">
						<form>
							<input class="date" id="datepicker" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						</form>

					</div>					
				</li>
				<li  class="span1_of_1 left">
					<h5>check-out-date:</h5>
					<div class="book_date">
						<form>
							<input class="date" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						</form>
					</div>		
				</li>
				<li class="span1_of_2 left">
					<h5>Adults:</h5>
					<!----------start section_room----------->
					<div class="section_room">
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">1</option>
				            <option value="null">2</option>         
				            <option value="AX">3</option>
							<option value="AX">4</option>
		        		</select>
					</div>					
				</li>
				<li class="span1_of_3">
					<div class="date_btn">
						<form>
							<input type="submit" value="book now" />
						</form>
					</div>
				</li>
				<div class="clear"></div>
			</ul>
		</div>
		<div class="clear"></div>
		</div>
	</div>  
   <!-- Ends Header -->
    <!------------ Start Content ---------------->
        <div class="main">        	
         <div class="container">   
             
	 		 <div class="row grids text-center">
				 <div class="col-md-4">
					<div class="view view-tenth">
					      <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="images/pic1.jpg" class="img-responsive" alt=""/>
								<div class="label-product">
                                <span class="new">From 150$</span> </div>
								<div class="mask" >
			                        <h2>Room with one Bedroom</h2>
			                        <h3>A wonderful serenity has taken possession of my entire soul</h3>
			                        <div class="info"><i class="fa fa-search-plus"></i> </div>
			                    </div>
			                  	</div>
			                 </div>
				            </a> 
				       </div>
				       <div class="product_container wow bounceIn" data-wow-delay="0.4s">
						  <h3><a href="#">Room with one Bedroom</a></h3>
					      <div class="underheader-line"></div>
					      <ul class="person">
					      	<h4>Max Person:</h4>
					      	<li><i class="fa fa-male"> </i></li>
					      	<li><i class="fa fa-male"> </i></li>
					      	<li><i class="fa fa-male"> </i></li>
					      </ul>
					      <p>Beds:1 Single Bed</p>
				       </div>		
		            </div>
				    <div class="col-md-4">
					  <div class="view view-tenth">
					      <a href="single.html">
						   <div class="inner_content clearfix">
							 <div class="product_image">
								<img src="images/pic3.jpg" class="img-responsive" alt=""/>
								<div class="label-product">
                                <span class="new">From 160$</span> </div>
								<div class="mask">
			                        <h2>Family Spacious Room</h2>
			                        <h3>A wonderful serenity has taken possession of my entire soul</h3>
			                         <div class="info"><i class="fa fa-search-plus"></i> </div>
			                    </div>
			                  	</div>
			                   </div>
				            </a> 
				       </div>
				       <div class="product_container wow bounceIn" data-wow-delay="0.4s">
						  <h3><a href="#">Room with two Bedroom</a></h3>
					      <div class="underheader-line"></div>
					     <ul class="person">
					      	<h4>Max Person:</h4>
					      	<li><i class="fa fa-male"> </i></li>
					      	<li><i class="fa fa-male"> </i></li>
					      	<li><i class="fa fa-male"> </i></li>
					      </ul>
					      <p>Beds:2 Single Beds</p>
				       </div>		
		            </div>
				    <div class="col-md-4">
					   <div class="view view-tenth">
					      <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="images/pic2.jpg" class="img-responsive" alt=""/>
								<div class="label-product">
                                <span class="new">From 150$</span> </div>
								<div class="mask">
			                        <h2>Room with one Bedroom</h2>
			                        <h3>A wonderful serenity has taken possession of my entire soul</h3>
			                         <div class="info"><i class="fa fa-search-plus"></i> </div>
			                    </div>
			                    </div>
			                  </div>
				            </a> 
				       </div>
				       <div class="product_container wow bounceIn" data-wow-delay="0.4s">
						  <h3><a href="#">King Size Bedroom</a></h3>
					      <div class="underheader-line"></div>
					     <ul class="person">
					      	<h4>Max Person:</h4>
					      	<li><i class="fa fa-male"> </i></li>
					      	<li><i class="fa fa-male"> </i></li>
					      	<li><i class="fa fa-male"> </i></li>
					      </ul>
					      <p>Beds:3 Single Beds</p>
				       </div>		
		            </div>
			 </div>	 
             <div class="row grids text-center">
				 <div class="col-md-4">
					<div class="view view-tenth">
					      <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="images/pic1.jpg" class="img-responsive" alt=""/>
								<div class="label-product">
                                <span class="new">From 150$</span> </div>
								<div class="mask" >
			                        <h2>Room with one Bedroom</h2>
			                        <h3>A wonderful serenity has taken possession of my entire soul</h3>
			                        <div class="info"><i class="fa fa-search-plus"></i> </div>
			                    </div>
			                  	</div>
			                 </div>
				            </a> 
				       </div>
				       <div class="product_container wow bounceIn" data-wow-delay="0.4s">
						  <h3><a href="#">Room with one Bedroom</a></h3>
					      <div class="underheader-line"></div>
					      <ul class="person">
					      	<h4>Max Person:</h4>
					      	<li><i class="fa fa-male"> </i></li>
					      	<li><i class="fa fa-male"> </i></li>
					      	<li><i class="fa fa-male"> </i></li>
					      </ul>
					      <p>Beds:1 Single Bed</p>
				       </div>		
		            </div>
				    <div class="col-md-4">
					  <div class="view view-tenth">
					      <a href="single.html">
						   <div class="inner_content clearfix">
							 <div class="product_image">
								<img src="images/pic3.jpg" class="img-responsive" alt=""/>
								<div class="label-product">
                                <span class="new">From 160$</span> </div>
								<div class="mask">
			                        <h2>Family Spacious Room</h2>
			                        <h3>A wonderful serenity has taken possession of my entire soul</h3>
			                         <div class="info"><i class="fa fa-search-plus"></i> </div>
			                    </div>
			                  	</div>
			                   </div>
				            </a> 
				       </div>
				       <div class="product_container wow bounceIn" data-wow-delay="0.4s">
						  <h3><a href="#">Room with two Bedroom</a></h3>
					      <div class="underheader-line"></div>
					     <ul class="person">
					      	<h4>Max Person:</h4>
					      	<li><i class="fa fa-male"> </i></li>
					      	<li><i class="fa fa-male"> </i></li>
					      	<li><i class="fa fa-male"> </i></li>
					      </ul>
					      <p>Beds:2 Single Beds</p>
				       </div>		
		            </div>
				    <div class="col-md-4">
					   <div class="view view-tenth">
					      <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="images/pic2.jpg" class="img-responsive" alt=""/>
								<div class="label-product">
                                <span class="new">From 150$</span> </div>
								<div class="mask">
			                        <h2>Room with one Bedroom</h2>
			                        <h3>A wonderful serenity has taken possession of my entire soul</h3>
			                         <div class="info"><i class="fa fa-search-plus"></i> </div>
			                    </div>
			                    </div>
			                  </div>
				            </a> 
				       </div>
				       <div class="product_container wow bounceIn" data-wow-delay="0.4s">
						  <h3><a href="#">King Size Bedroom</a></h3>
					      <div class="underheader-line"></div>
					     <ul class="person">
					      	<h4>Max Person:</h4>
					      	<li><i class="fa fa-male"> </i></li>
					      	<li><i class="fa fa-male"> </i></li>
					      	<li><i class="fa fa-male"> </i></li>
					      </ul>
					      <p>Beds:3 Single Beds</p>
				       </div>		
		            </div>
			 </div>	 
          
          <div class="reservation wow fadeInLeft" data-wow-delay="0.4s" id="work">
          	<div class="container">
          		<div class="row">
          			<div class="col-md-9">
          				<div id="main-reservation-text"><h3>Call us <span>+1 2547 487 8974</span> or made reservation right now!</h3>
					       <p>vestibulum eu euismod quam nullam at accumsan orci aenean ullamcorper nulla ut sapien ultrices dignissim</p>
				        </div>
          			</div>
          			<div class="col-md-3">
          			  <a href="reservation" title="Online Reservation" class="btn btn-primary btn-normal btn-inline " target="_self">Online Reservation</a>
          			</div>
          		</div>
          	</div>
          </div></div>
          <div class="content-bottom wow fadeInLeft" data-wow-delay="0.4s" id="work">   
            <div class="container">   
        	    <div class="row">
				     <div class="col-md-8">
				     	 <div class="welcome_desc">
				       		<h3>Visitor Experienced</h3>
				            <div class="course_demo">
					          <ul id="flexiselDemo3">	
								<li><img src="images/v1.jpg" class="img-responsive" /><div class="desc">
									<h3>Lorem Ipsum</h3>
									<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
								</div></li>
								<li><img src="images/v2.jpg" class="img-responsive" /><div class="desc">
									<h3>Lorem Ipsum</h3>
									<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
								</div></li>
								<li><img src="images/v3.jpg" class="img-responsive" /><div class="desc">
									<h3>Lorem Ipsum</h3>
									<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
								</div></li>
								<li><img src="images/v4.jpg" class="img-responsive" /><div class="desc">
									<h3>Lorem Ipsum</h3>
									<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
								</div></li>
								<li><img src="images/v5.jpg" class="img-responsive" /><div class="desc">
									<h3>Lorem Ipsum</h3>
									<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
								</div></li>		    	  	       	   	    	
							</ul>
				<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 2
			    		}
			    	}
			    });
			    
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	            </div>
	       </div>
		</div>
		 <div class="col-md-4 middle_right">
			<h3>Info</h3>
			<ul id="general-info">
				<li><i class="fa fa-clock-o"> </i>Check-in: 14:00; Check-out: 12:00</li>
				<li><i class="fa fa-globe"> </i>Free Wi-Fi Internet in Rooms</li>
				<li><i class="fa fa-cutlery"> </i>In Room Dining Available from <br>06:00pm to 10:30pm</li>
				<li><i class="fa fa-truck"> </i>Local Self Parking: $20-$25 per night</li>
				<li><i class="fa fa-picture-o"> </i>Walking Distance to Wall Street, Battery Park and Brooklyn Bridge</li>
			</ul>	        
		  </div>
		 </div>
		</div>
		</div>
		       <div class="company_logos wow bounceIn" data-wow-delay="0.4s">
		          	<h3>Our Gallery</h3>
		          	 <div class="ocarousel_slider">  
	      				<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
			                <div class="ocarousel_window">
			                   <a href="#" title="Hp"> <img src="images/g1.jpg" class="img-responsive" alt="" /></a>
			                   <a href="#" title="Bosch"><img src="images/g2.jpg" class="img-responsive" alt="" /></a>
			                   <a href="#" title="El pso"><img src="images/g3.jpg" class="img-responsive" alt="" /></a>
			                   <a href="#" title="Print X Press"><img src="images/g4.jpg" class="img-responsive" alt="" /></a>
			                   <a href="#" title="Arcelo mittal"><img src="images/g5.jpg" class="img-responsive" alt="" /></a>
			                    <a href="#" title="Goldware IT Services"><img src="images/g6.jpg" class="img-responsive" alt="" /></a>
			                   <a href="#" title="Lucent Technologies"><img src="images/g7.jpg" class="img-responsive" alt="" /></a>
			                   <a href="#" title="ge"><img src="images/g8.jpg" class="img-responsive" alt="" /></a>
			                </div>
			               <span>           
			                <a href="#" data-ocarousel-link="left" class="prev"><i class="fa fa-angle-left"></i> </a>
			                <a href="#" data-ocarousel-link="right" class="next"> <i class="fa fa-angle-right"></i></a>
			               </span>
					   </div>
				     </div>      		
              </div>
        </div>
    @include('layouts.footer')