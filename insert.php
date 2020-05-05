<?php 

		$mysqli = new mysqli("localhost","root","","vendor");

		// Check connection
		if ($mysqli -> connect_errno) {
		  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		  exit();
		}

		
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$whatsapp = $_POST['whatsapp'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$gstin = $_POST['gstin'];
		$service = $_POST['service'];
		$service_area = $_POST['service_area'];
		$bank_name = $_POST['bank_name'];
		$beneficiary_name = $_POST['beneficiary_name'];
		$account_number = $_POST['account_number'];
		$bank_address = $_POST['bank_address'];
		$ifsc = $_POST['ifsc'];
		$payment_mode = $_POST['payment_mode'];
		$id_proof = $_POST['id_proof'];
		// $driving_license = $_POST['driving_license'];
		
		// echo $name;
		// echo $mobile;
		// echo $whatsapp;

		// Perform query

		$mysqli -> query(
			"INSERT INTO members (name,mobile,whatsapp,email,address,
			gstin,service,service_area,bank_name,beneficiary_name,account_number,
			bank_address,ifsc,payment_mode,id_proof,driving_license) VALUES('$name','$mobile','$whatsapp'
			,'$email','$address','$gstin','$service','$service_area','$bank_name','$beneficiary_name','$account_number','$bank_address','$ifsc','$payment_mode','','')"
		);

		$mysqli -> close();

		echo "<h2 style='color:green; text-align:center;'><i>Thank you $name. You have registered successfully!</i></h2>";
		header("Refresh:3; url=index.html");

?>