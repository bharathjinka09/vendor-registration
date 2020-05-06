		<?php include('navbar.php') ?>

	<div class="container">
		<h2 class="text-center"><i>Vendor Registration Form</i></h2>
			<div class="row">
				<div class="col-md-6">
					<form action="insert.php" method="POST" enctype="multipart/form-data">
							
						<div class="col-xs-4">
						    <label>Name*</label>
						    <input class="form-control" type="text" name="name" required>
						</div><br>
						
						<div class="col-xs-4">
						    <label>Mobile*</label>
						    <input class="form-control" type="text" name="mobile" required>
						</div><br>
						
						<div class="col-xs-4">
						    <label>WhatsApp number*:</label>
						    <input class="form-control" type="text" name="whatsapp" required>
						</div><br>
						
						<div class="col-xs-4">
						    <label>Email</label>
						    <input class="form-control" type="email" name="email">
						</div><br>
						
						<div class="col-xs-4">
						    <label>Address</label>
						    <textarea class="form-control" cols="5" rows="5" name="address"></textarea>
						</div><br>
						
						<div class="col-xs-4">
						    <label>GSTIN</label>
						    <input class="form-control" type="text" name="gstin">
						</div><br>
						
						<div class="col-xs-4">
						    <label><b>Services</b></label><br>
						    <input type="checkbox" name="services[]" value="AC Repair">AC Repair <br>
						    <input type="checkbox" name="services[]" value="Plumber">Plumber<br>
						    <input type="checkbox" name="services[]" value="Painter">Painter
						    <br>
						    <input type="checkbox" name="services[]" value="Electrician">Electrician
						    <br>
						    <input type="checkbox" name="services[]" value="Carpenter">Carpenter
						    <br>
						    <input type="checkbox" name="services[]" value="Cleaning Services">Cleaning Services
						    <br>
						    <input type="checkbox" name="services[]" value="Pest Control">Pest Control
						    <br>
						    <input type="checkbox" name="services[]" value="Geyser Repair">Geyser Repair
						    <br>
						    <input type="checkbox" name="services[]" value="Washing Machine">Washing Machine
						</div><br>

						<div class="col-xs-4">
						    <label><b>Service Areas:</b></label><br>
							<select class="service_areas" name="service_areas[]" multiple="multiple" style="width: 100%">
      						</select>
						</div><br>
						
						<label><b>Bank Information:</b></label>
						<div class="col-xs-4">
						    <label>Bank Name</label>
						    <input class="form-control" type="text" name="bank_name">
						</div><br>
						
						<div class="col-xs-4">
						    <label>Beneficiary Name</label>
						    <input class="form-control" type="text" name="beneficiary_name">
						</div><br>
						
						<div class="col-xs-4">
						    <label>Account Number</label>
						    <input class="form-control" type="text" name="account_number">
						</div><br>
						
						<div class="col-xs-4">
						    <label>Bank Address</label>
						    <input class="form-control" type="text-area" name="bank_address">
						</div><br>
						
						<div class="col-xs-4">
						    <label>IFSC</label>
						    <input class="form-control" type="text" name="ifsc">
						</div><br>
						
						<div class="col-xs-4">
						    <label>Mode of payments</label>
						    <select class="form-control" name="payment_mode">
						    	<option>Cash</option>
						    	<option>Gpay</option>
						    	<option>Phonepe</option>
						    	<option>Paytm</option>
						    </select>
						</div><br>

					    <label><b>Identity Proof:</b></label>
						<div class="col-xs-4">
						    Aadhar / Passport / Voter Card*: 
						    <div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text">Upload</span>
							  </div>
							  <div class="custom-file">
							    <input type="file" class="custom-file-input" name="id_proof" required>
							    <label class="custom-file-label">Choose file</label>
							  </div>
							</div>
						</div><br>

						<div class="col-xs-4">
						    DRIVING LICENSE*:
						    <div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text">Upload</span>
							  </div>
							  <div class="custom-file">
							    <input type="file" class="custom-file-input" name="driving_license" required>
							    <label class="custom-file-label">Choose file</label>
							  </div>
							</div>
						</div><br>

						<div class="col-xs-4">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</form><br><br>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		var data = ["Apple", "Banana", "Cherry", "Date", "ElderberriesElderberry"];
		var placeholder = "Select Service Areas";
		$(".service_areas").select2({
		    data: data,
		    placeholder: placeholder,
		    allowClear: false,
		    minimumResultsForSearch: 5
		});
	</script>
</body>
</html>