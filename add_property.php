<?php include('header.php') ?>
<div class="container">
  	<div class="row shadow_with_cross add_room">
  		<form class="">
  		<div class="col-md-5">
  			
  			<h4>ROOM DETAILS</h4>
			<div class="form-group">
			    <input type="text" class="form-control customfield" id="address" placeholder="Major intersection">
			</div>
			
			<div class="form-group">
			    <select class="customfield form-control">
	              	<option value="" selected>Select state</option>
	              	<option value="">Room</option>
	              	<option value="">Parking</option>
	          	</select>
			</div>
			
			<div class="form-group">
			    <select class="customfield form-control">
	            	<option value="" selected>Select city</option>
	             	<option value="">Room</option>
	            	<option value="">Parking</option>
	          	</select>
			</div>
			
			<div class="form-group">
			    <input type="number" class="form-control customfield" id="zipcode" placeholder="Zip code">
			</div>
			  
		  	<div class="row">
				<div class="col-md-4"><label>Existing occupants</label></div>
			    <div class="col-md-8">
			    	<div class="form-group">
			    		<select class="customfield form-control" placeholder="Major intersection">
	              			<option value="">Listing Type</option>
	              			<option value="">Room</option>
	              			<option value="">Parking</option>
	          			</select>
	          		</div>
			  	</div>
			</div>

			<div class="row">
				<div class="col-md-4"><label>Occupation</label></div>
			    <div class="col-md-8">
			    	<div class="form-group">
			    		<select class="customfield form-control" placeholder="Major intersection">
	              			<option value="" selected>Select occupation</option>
	              			<option value="">Work</option>
	              			<option value="">Study</option>
	          			</select>
	          		</div>
			  	</div>
			</div>

			<div class="row">
				<div class="col-md-6"><label>Who are you looking to rent you property?</label></div>
			    <div class="col-md-6">
			    	<input type="radio" name="gender" value="" checked> Male
					<input type="radio" name="gender" value=""> Female
					<input type="radio" name="gender" value=""> Both
			  	</div>
			</div>

			<div class="row">
				<div class="col-md-6"><label>Credit check required</label></div>
			    <div class="col-md-6">
			    	<input type="radio" name="credit" value="" checked> yes
					<input type="radio" name="credit" value=""> no
			  	</div>
			</div>

			<div class="row">
				<div class="col-md-6"><label>Pet-friendly</label></div>
			    <div class="col-md-6">
			    	<input type="radio" name="pet" value="" checked> yes
					<input type="radio" name="pet" value=""> no
			  	</div>
			</div>

			<div class="form-group">
				<input type="number" class="form-control customfield" id="address" placeholder="$ Rent">
			</div>
			
			<div class="row">
				<div class="col-md-4"><label>Utilities included:</label></div>
			    <div class="col-md-8">
			    	<input type="radio" name="utilities" value="" checked> Water
					<input type="radio" name="utilities" value=""> Electricity
					<input type="radio" name="utilities" value=""> Wifi
					<input type="radio" name="utilities" value=""> none
			  	</div>
			</div>

		  	<div class="form-group">
		    	<input type="date" class="form-control customfield" id="address" placeholder="Available">
		  	</div>

		  	<div class="form-group">
		    	<input type="number" class="form-control customfield" id="address" placeholder="$ Deposit">
		  	</div>

			<div class="row">
				<div class="col-md-6"><label>Furnished</label></div>
			    <div class="col-md-6">
			    	<input type="radio" name="furnished" value="" checked> yes
					<input type="radio" name="furnished" value=""> no
			  	</div>
			</div>


		  
  		</div>
  		<div class="col-md-1"></div>
  		<div class="col-md-6">
  			<h4>MORE INFORMATION</h4>
  			<div class="form-group">
				<textarea class="form-control customfield"placeholder="Description" rows="5"></textarea>
			</div>
			<div class="form-group">
				<textarea class="form-control customfield"placeholder="Any special rule?" rows="3"></textarea>
			</div>


			<h4>PHOTOS</h4>
			<div class="col-md-4 image-upload">
	    		<label for="file-input">
	        		<img src="img/front.png" style="width: 100%"/>
	    		</label>
	    		<input id="file-input" type="file"/>
			</div>

			<div class="col-md-4 image-upload">
	    		<label for="file-input">
	        		<img src="img/room.png" style="width: 100%"/>
	    		</label>
	    		<input id="file-input" type="file"/>
			</div>

			<div class="col-md-4 image-upload">
	    		<label for="file-input">
	        		<img src="img/bathroom.png" style="width: 100%"/>
	    		</label>
	    		<input id="file-input" type="file"/>
			</div>
			<div class="col-md-4 image-upload">
	    		<label for="file-input">
	        		<img src="img/kitchen.png" style="width: 100%"/>
	    		</label>
	    		<input id="file-input" type="file"/>
			</div>

			<div class="col-md-4 image-upload">
	    		<label for="file-input">
	        		<img src="img/livingroom.png" style="width: 100%"/>
	    		</label>
	    		<input id="file-input" type="file"/>
			</div>

			<div class="col-md-4 image-upload">
	    		<label for="file-input">
	        		<img src="img/more.png" style="width: 100%"/>
	    		</label>
	    		<input id="file-input" type="file"/>
			</div>
			<br>
  			<button style="width:100%" type="submit" class="btn btn-chat">Submit</button>
  		</div>
  		</form>
	</div>
</div>

