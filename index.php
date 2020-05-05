<!DOCTYPE html>
<html>

<head>
	<title>Vendor Registration Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<h2 class="text-center">Vendor Registration Form</h2>
			<div class="row">
				<div class="col-md-6">
					<form action="insert.php" method="POST">
							<div class="col-xs-4">
							    <label>Name*</label>
							    <input class="form-control" type="text" required>
							</div><br>
							<div class="col-xs-4">
							    <label>Mobile*</label>
							    <input class="form-control" type="text" required>
							</div><br>
							<div class="col-xs-4">
							    <label>WhatsApp number*:</label>
							    <input class="form-control" type="text" required>
							</div><br>
							<div class="col-xs-4">
							    <label>Email</label>
							    <input class="form-control" type="email">
							</div><br>
							<div class="col-xs-4">
							    <label>Address</label>
							    <input class="form-control" type="text-area">
							</div><br>
							<div class="col-xs-4">
							    <label>GSTIN</label>
							    <input class="form-control" type="text">
							</div><br>
							<div class="col-xs-4">
							    <label>Services</label>
							    <select class="form-control">
							    	<option>AC Repair</option>
							    	<option>AC Repair</option>
							    </select>
							</div><br>
							<div class="col-xs-4">
							    <label>Service Area</label>
							    <select class="form-control">
							    	<option>Marathahalli</option>
							    	<option>Koramangala</option>
							    </select>
							</div><br>
							<label><b>Bank Information:</b></label>
							<div class="col-xs-4">
							    <label>Bank Name</label>
							    <input class="form-control" type="text">
							</div><br>
							<div class="col-xs-4">
							    <label>Beneficiary Name</label>
							    <input class="form-control" type="text">
							</div><br>
							<div class="col-xs-4">
							    <label>Account Number</label>
							    <input class="form-control" type="text">
							</div><br>
							<div class="col-xs-4">
							    <label>Bank Address</label>
							    <input class="form-control" type="text-area">
							</div><br>
							<div class="col-xs-4">
							    <label>IFSC</label>
							    <input class="form-control" type="text">
							</div><br>
							<div class="col-xs-4">
							    <label>Mode of payments</label>
							    <select class="form-control">
							    	<option>Cash</option>
							    	<option>Gpay</option>
							    	<option>Phonepe</option>
							    	<option>Paytm</option>
							    </select>
							</div><br>

						    <label><b>Identity Proof:</b></label>
							<div class="col-xs-4">
							    AADHAAR/PASSPORT/VOTER CARD*: 
							    <div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <span class="input-group-text">Upload</span>
								  </div>
								  <div class="custom-file">
								    <input type="file" class="custom-file-input" required>
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
								    <input type="file" class="custom-file-input" required>
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
</body>
</html>