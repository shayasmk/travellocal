@include('layouts.header')
 <div class="reservation_banner">
		<div class="main_title">Online Reservation Form</div>
		<div class="divider"></div>
	 </div>
	</div>
         <!------------ Start Content ---------------->
       <div class="main"> 
         <div class="reservation_top">     	
           <div class="container">    
              <h2 class="head">General Information</h2>
              <div class="reservation_grid"> 
                <div class="span2_of_1">
	 		    	<h4>Select check-out date</h4>
					<div class="book_date btm">
						<form>
							<input class="date" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						</form>
					</div>	
					<div class="sel_room">
						<h4>number of rooms</h4>
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Select a type of Room</option>
				            <option value="null">Suite room</option>         
				            <option value="AX">Single room</option>
							<option value="AX">Double room</option>
		        		</select>
					</div>	
					<div class="sel_room left">
						<h4>adults per room:</h4>
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">1</option>
				            <option value="null">2</option>         
				            <option value="AX">3</option>
							<option value="AX">4</option>
		        		</select>
					</div>	
				 </div>
				 <div class="span2_of_1">
					<h4>Select check-out date</h4>
					<div class="book_date btm">
						<form>
							<input class="date" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						</form>
					</div>	
					<div class="sel_room">
						<h4>childern 0-5:</h4>
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">0</option>
							<option value="null">1</option>
				            <option value="null">2</option>         
				            <option value="AX">3</option>
							<option value="AX">4</option>
		        		</select>
					</div>	
					<div class="sel_room left">
						<h4>childern 6-12:</h4>
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">0</option>
							<option value="null">1</option>
				            <option value="null">2</option>         
				            <option value="AX">3</option>
							<option value="AX">4</option>
		        		</select>
					</div>	
					
				 </div>
				 <div class="clearfix"></div>
			</div>
		   <div class="personal_bottom">
		   	 <h2 class="head">Personal Information</h2>
			<div class="reservation-form">
			 <div class="span2_of_1">
			    <div>
				  <span><label>Name</label></span>
				  <input type="text" class="textbox" value="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}">
				</div>
                <div>
				  <span><label>Surname</label></span>
				  <input type="text" class="textbox" value="holder name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'holder name';}">
				</div>
				 <div>
				  <span><label>Credit Card Number</label></span>
				  <input type="text" class="textbox" value="credit card number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'credit card number';}">
				</div>
                <div>
				  <span><label>Credit Card Holder</label></span>
				  <input type="text" class="textbox" value="holder name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'holder name';}">
				</div>
			 </div>
             <div class="span2_of_1">
                <div>
				  <span><label>Email</label></span>
				  <input type="text" class="textbox" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
				</div>
                <div>
				  <span><label>Phone</label></span>
				  <input type="text" class="textbox" value="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}">
				</div>
				<div>
				  <span><label>Cvv2 Code</label></span>
				  <input type="text" class="textbox" value="cvv2 code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Cvv2 Code';}">
				</div>
                <div>
				  <span><label>Additional</label></span>
				  <textarea value="Message" onfocus="this.value= '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
				</div>
			 </div>
              <div class"clearfix"></div>
              <a href="#" title="book now" class="btn btn-primary btn1 btn-normal btn-inline " target="_self">Book Now</a>
            </div>
           </div>
           </div>
        </div>

   @include('layouts.footer')