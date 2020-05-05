<?php 
	
	// $con = mysqli_connect('localhost','root','','vendor');
	// // $con = mysqli_connect("localhost","my_user","my_password","my_db");
	// echo $con;

	// if (!$con) {
	// 	echo "Not connected to server";
	// }

	// if (!mysqli_select_db($con,'vendor')) {
	// 	echo "Database not selected";
	// }

	// $name = $_POST['name'];
	// $mobile = $_POST['mobile'];
	// $whatsapp = $_POST['whatsapp'];

	// $sql = "INSERT INTO members (name,mobile,whatsapp) VALUES('$name','$mobile','$whatsapp')";

	// if (!mysqli_query($con,$sql)) {
	// 	echo "Not Inserted";
	// }
	// else{
	// 	echo "Inserted";
	// }

	// header("refresh:2; url=index.html");

$mysqli = new mysqli("localhost","root","","vendor");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
	
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$whatsapp = $_POST['whatsapp'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$gstin = $_POST['gstin'];
	// $service = $_POST['service'];
	// $service_area = $_POST['service_area'];
	$bank_name = $_POST['bank_name'];
	$beneficiary_name = $_POST['beneficiary_name'];
	$account_number = $_POST['account_number'];
	$bank_address = $_POST['bank_address'];
	$ifsc = $_POST['ifsc'];
	// $payment_mode = $_POST['payment_mode'];
	// $id_proof = $_POST['id_proof'];
	// $driving_license = $_POST['driving_license'];
	
	// echo $name;
	// echo $mobile;
	// echo $whatsapp;

	$mysqli -> query(
		"INSERT INTO members (name,mobile,whatsapp,email,address,
		gstin,service,service_area,bank_name,beneficiary_name,account_number,
		bank_address,ifsc,payment_mode,id_proof,driving_license) VALUES('$name','$mobile','$whatsapp'
		,'$email','$address','$gstin','','','$bank_name','$beneficiary_name','$account_number','$bank_address','$ifsc','','','')"
	);

	$mysqli -> close();

	echo "<h2 style='color:green; text-align:center;'><i>Thank you $name. You have registered successfully!</i></h2>";
	header("Refresh:3; url=index.html");

?>