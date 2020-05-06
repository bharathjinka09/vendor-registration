<!DOCTYPE html>
<html>
<head>
	<title>Vendors Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
	<table class="table table-responsive table-striped table-bordered">
		<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Vendor ID</th>
			<th scope="col">Name</th>
			<th scope="col">Mobile</th>
			<th scope="col">WhatsApp Number</th>
			<th scope="col">Email</th>
			<th scope="col">Address</th>
			<th scope="col">GSTIN</th>
			<th scope="col">Service</th>
			<th scope="col">Service Area</th>
			<th scope="col">Bank Name</th>
			<th scope="col">Beneficiary Name</th>
			<th scope="col">Account Number</th>
			<th scope="col">Bank Address</th>
			<th scope="col">IFSC Code</th>
			<th scope="col">Payment Method</th>
			<th scope="col">ID Proof</th>
			<th scope="col">Driving License</th>
		</tr>
	</thead>
		<?php 
			$conn = mysqli_connect('localhost','root','','vendor');
			if ($conn-> connect_error) {
				die('connection failed'. $conn->connect_error);
			}

			$sql = "select * from members";
			$result = $conn-> query($sql);

			if ($result-> num_rows > 0) {
				while ($row = $result-> fetch_assoc()) {
					echo "<tbody>
							<tr>
							<td>".$row['id']."</td>
							<td>".$row['vendor_id']."</td>
							<td>".$row['name']."</td>
							<td>".$row['mobile']."</td>
							<td>".$row['whatsapp']."</td>
							<td>".$row['email']."</td>
							<td>".$row['address']."</td>
							<td>".$row['gstin']."</td>
							<td>".$row['service']."</td>
							<td>".$row['service_area']."</td>
							<td>".$row['bank_name']."</td>
							<td>".$row['beneficiary_name']."</td>
							<td>".$row['account_number']."</td>
							<td>".$row['bank_address']."</td>
							<td>".$row['ifsc']."</td>
							<td>".$row['payment_mode']."</td>
							<td><a href=".$row['id_proof']."><img width=100 src=".$row['id_proof']."></a></td>
							<td><a href=".$row['driving_license']."><img width=100 src=".$row['driving_license']."></a></td>
						</tr>
						</tbody>";
				}
				echo "</table>";
			}
			else{
				echo "0 result";
			}

			$conn-> close(); 
		?>
		
</body>
</html>