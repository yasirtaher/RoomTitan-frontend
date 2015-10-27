<?php include('header.php') ?>
<div class="container">
  	<div class="row shadow_with_cross add_room">
  		<form class="">
  		<div class="col-md-5">
  			
  			<h4>PARKING DETAILS</h4>
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
				<div class="col-md-4"><label>Type of parking</label></div>
			    <div class="col-md-8">
			    	<input type="radio" name="parking" value="" checked> garage
					<input type="radio" name="parking" value=""> lot
			  	</div>
			</div>
			  
		  	<div class="row">
				<div class="col-md-4"><label>Size of car</label></div>
			    <div class="col-md-8">
			    	<div class="form-group">
			    		<select class="customfield form-control" >
	              			<option value=""></option>
	              			<option value="">Room</option>
	              			<option value="">Parking</option>
	          			</select>
	          		</div>
			  	</div>
			</div>

			<div class="row">
				<div class="col-md-4"><label>Disable friendly</label></div>
			    <div class="col-md-8">
			    	<input type="radio" name="disable" value="" checked> yes
					<input type="radio" name="disable" value=""> no
			  	</div>
			</div>


			<div class="row">
				<div class="col-md-4"><label>Credit check required</label></div>
			    <div class="col-md-8">
			    	<input type="radio" name="credit" value="" checked> yes
					<input type="radio" name="credit" value=""> no
			  	</div>
			</div>


			<div class="form-group">
				<input type="number" class="form-control customfield" id="address" placeholder="$ Rent">
			</div>
		  	
		  	<div class="form-group">
		    	<input type="date" class="form-control customfield" id="address" placeholder="Available">
		  	</div>

		  
  		</div>
  		<div class="col-md-1"></div>
  		<div class="col-md-6">
  			<h4>MORE INFORMATION</h4>
  			<div class="form-group">
				<textarea class="form-control customfield"placeholder="Description" rows="8"></textarea>
			</div>



			<h4>PHOTOS</h4>
			<div class="col-md-4 image-upload">
	    		<label for="file-input">
	        		<img src="img/withcar.png" style="width: 100%"/>
	    		</label>
	    		<input id="file-input" type="file"/>
			</div>

			<div class="col-md-4 image-upload">
	    		<label for="file-input">
	        		<img src="img/withoutcar.png" style="width: 100%"/>
	    		</label>
	    		<input id="file-input" type="file"/>
			</div>

			<div class="col-md-4 image-upload">
	    		<label for="file-input">
	        		<img src="img/morecar.png" style="width: 100%"/>
	    		</label>
	    		<input id="file-input" type="file"/>
			</div>

  			<button style="width:100%" type="submit" class="btn btn-chat">Submit</button>
  		</div>
  		</form>
	</div>
</div>

