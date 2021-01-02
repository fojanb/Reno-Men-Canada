
<div class="row">
	<div class="container">
		<div class="centerContent">
			<div id="quoteHeader" class="sectionHeader">
				<div id="quoteImage" class="mobile"></div>
				<h1> Request a Quote </h1>
				<h3> or Email Us </h3>
			</div>

			<div class="col-xs-12 postHeader">
				<div id="quoteImage" class="desktop"></div>
				<p>Please enter a few details about your location and project. We will get back to you within 24 hours.</p>
				<p>Or use this form below to email us.</p> 
			</div>
			<div class="col-md-8 col-md-offset-2">
				<form id="quoteForm" name="quote_form" method="post">	
					<div class="col-sm-6 col-xs-12 form-group">
						<label for="first_name" width="30">First Name: <font color="red">*</font></label>
						<input type="text" class="form-control" required name="first_name" pattern="[a-zA-Z]+" title="Only alphabets" maxlength="50" size="30">
					</div>
					
					<div class="col-sm-6 col-xs-12 form-group">
						<label for="last_name">Last Name: <font color="red">*</font></label>
						<input type="text" class="form-control" required name="last_name" pattern="[a-zA-Z]+" title="Only alphabets" maxlength="50" size="30">
					</div>
					
					<div class="col-sm-6 col-xs-12 form-group">
						<label for="phone_number">Phone Number: <font color="red">*</font></label>
						<input type="tel" class="form-control" pattern="[0-9 ()-]+" title="Numbers Only" required name="phone_number" size="30">
					</div>

					<div class="col-sm-6 col-xs-12 form-group">
						<label for="email">Email: <font color="red">*</font></label>
						<input type="email" class="form-control" required name="email" maxlength="50" size="30">
					</div>

					<div class="col-xs-12 form-group">		
						<label for="address">Address: </label>
						<input type="text" class="form-control" name="address" maxlength="50" size="30">
					</div>
					
					<div class="col-xs-12 form-group">
						<label for="info">Info or Project Details: <font color="red">*</font></label>
						<textarea name="info" class="form-control" required id="quoteTextArea" maxlength="1200" rows="5" cols="30"></textarea>
					</div>
				<!-- 	<div class="col-xs-12 form-group addMarginBottom">
						<label for="pic">Project Photos</label>
						<input type="file" name="pic" multiple="multiple" buttonText="Choose Photo(s)" data-iconName="glyphicon glyphicon-picture" class="filestyle" data-input="false" accept="image/*">
					</div>	 --> 
					<div class="centerContent"> 
						<button type="submit" name="submit" class="btn btn-warning" style="width: 220px">Submit</button>
					</div>
				</form>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  	<div class="modal-dialog" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
				      	<div class="modal-body"></div>
				      	<div class="modal-footer">
				        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      	</div>
			    	</div>
			  	</div>
			</div>
		</div>
	</div>
</div>