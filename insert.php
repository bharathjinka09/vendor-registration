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
			
			if (isset($_FILES["id_proof"]["name"])) {

			    $id_proof = $_FILES["id_proof"]["name"];
			    $tmp_name = $_FILES['id_proof']['tmp_name'];
			    $error = $_FILES['id_proof']['error'];

			    if (!empty($name)) {
			        $location = 'images/';

			        if  (move_uploaded_file($tmp_name, $location.rand(10,1000).$id_proof)){
			            echo '';
			        }

			    } else {
			        echo 'please choose a file';
			    }
			}

			if (isset($_FILES["driving_license"]["name"])) {

			    $driving_license = $_FILES["driving_license"]["name"];
			    // echo $driving_license;
			    $tmp_name = $_FILES['driving_license']['tmp_name'];
			    $error = $_FILES['driving_license']['error'];

			    if (!empty($name)) {
			        $location = 'images/';

			        if  (move_uploaded_file($tmp_name, $location.$driving_license)){
			            echo 'Uploaded';
			        }

			    } else {
			        echo 'please choose a file';
			    }
			}

			// Perform query

			$mysqli -> query(
				"INSERT INTO members (name,mobile,whatsapp,email,address,
				gstin,service,service_area,bank_name,beneficiary_name,account_number,
				bank_address,ifsc,payment_mode,id_proof,driving_license) VALUES('$name','$mobile','$whatsapp'
				,'$email','$address','$gstin','$service','$service_area','$bank_name','$beneficiary_name','$account_number','$bank_address','$ifsc','$payment_mode','$id_proof','$driving_license')"
			);

			$mysqli -> close();

			echo "<h2 style='color:green; text-align:center;'><i>Thank you $name. You have registered successfully!</i></h2>";
			// header("Refresh:3; url=index.html");

?>