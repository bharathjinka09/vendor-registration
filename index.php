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
		var data = ['A F Station Yelahanka','Agram','Air Force Hospital', 
					'Amruthahalli', 
					'Anandanagar', 
					'Arabic College', 
					'Attur', 
					'Austin Town', 
					'Banaswadi', 
					'Bellandur', 
					'Bengaluru International Airport', 
					'Benson Town', 
					'Bhattarahalli', 
					'Bidrahalli', 
					'BSF Campus Yelahanka', 
					'Byatarayanapura', 
					'C V Raman Nagar', 
					'CMM Court Complex',
					'CMP Centre And School', 
					'CRPF Campus Yelahanka', 
					'Devanagundi', 
					'Devasandra', 
					'Doddadunnasandra', 
					'Doddagubbi', 
					'Doddanekkundi', 
					'Domlur', 
					'Doorvaninagar', 
					'Dr. Ambedkar Veedhi', 
					'Dr. Shivarama Karanth Nagar', 
					'E P I P', 
					'Fraser Town',
					'G K V K', 
					'Gunjur', 
					'H A Farm', 
					'H A L II Stage', 
					'H K P Road', 
					'Halasur Bazar', 
					'Hebbal Kempapura', 
					'HighCourt', 
					'Hoodi',
					'Horamavu', 
					'Indiranagar  (Bengaluru)',
					'ISRO Anthariksha Bhavan', 
					'J C Nagar', 
					'Jakkur', 
					'Jalavayuvihar',
					'Jeevanbhimanagar', 
					'Kadugodi', 
					'Kalkunte', 
					'Kalyananagar', 
					'Kannamangala', 
					'Kodigehalli', 
					'Kothanur', 
					'Krishnarajapuram R S', 
					'Krishnarajapuram', 
					'Kundalahalli', 
					'Legislators Home', 
					'Lingarajapuram', 
					'Mahadevapura', 
					'Mahatma Gandhi Road', 
					'Mandur', 
					'Marathahalli Colony', 
					'Maruthi Sevanagar',
					'Medimallasandra', 
					'Museum Road', 
					'Muthsandra', 
					'N A L', 
					'Naduvathi', 
					'New Thippasandra', 
					'P and T Colony Kavalbyrasandra', 
					'Panathur', 
					'R M V Extension II Stage', 
					'R T Nagar', 
					'Rajanakunte', 
					'Rajbhavan', 
					'Ramamurthy Nagar', 
					'Rameshnagar', 
					'Richmond Town', 
					'Sadashivanagar', 
					'Sahakaranagar', 
					'Samethanahalli', 
					'Singanayakanahalli', 
					'Sivan Chetty Gardens', 
					'St. Thomas Town', 
					'Training Command IAF', 
					'Varthur', 
					'Vasanthanagar', 
					'Vidhana Soudha', 
					'Vimanapura', 
					'Virgonagar', 
					'Viveknagar  (Bengaluru)',
					'Whitefield',
					'Yelahanka',
					'Yelahanka Satellite Town', 
					'Adugodi', 
					'Agara', 
					'Anjanapura', 
					'Ashoknagar  (Bengaluru)',
					'B Sk II Stage', 
					'Banashankari III Stage', 
					'Banashankari', 
					'Bannerghatta Road', 
					'Bannerghatta', 
					'Basavanagudi', 
					'Begur',
					'Bengaluru Corporation Building', 
					'Bangalore Vishwavidyalaya',
					'Bolare', 
					'Bommanahalli  (Bengaluru)',
					'Bommasandra Industrial Estate', 
					'Carmelram', 
					'Chamrajpet  (Bengaluru)',
					'Chandapura', 
					'Channasandra PO',
					'Chickpet', 
					'Chikkalasandra', 
					'Chudenapura', 
					'Dasarahalli(Srinagar)', 
					'Deepanjalinagar', 
					'Dharmaram College', 
					'Doddakallasandra', 
					'Electronics City', 
					'Gaviopuram Extension', 
					'Girinagar  (Bengaluru)',
					'Goripalya',
					'Gottigere', 
					'Government Electric Factory', 
					'Haragadde', 
					'Hennagara', 
					'HSR Layout', 
					'Hulimangala', 
					'Hulimavu', 
					'Huskur', 
					'J P Nagar', 
					'Jayanagar East', 
					'Jayanagar', 
					'Jayangar III Block', 
					'Jigani', 
					'JP Nagar III Phase', 
					'JP Nagar VIII phase', 
					'Kaggalipura P.O',
					'Kalkere', 
					'Kallubalu', 
					'Kathriguppe', 
					'Kengeri', 
					'Konanakunte' ,
					'Koramangala I Block', 
					'Koramangala', 
					'Koramangala VI Block', 
					'Kumaraswamy Layout', 
					'Kumbalagodu', 
					'Kumbalgodu Gollahalli', 
					'Madhavan Park', 
					'Madivala', 
					'Mallathahalli', 
					'Mavalli', 
					'Mico Layout', 
					'Mount St Joseph', 
					'Muthanallur', 
					'Nayandahalli', 
					'Padmanabhnagar', 
					'Pampamahakavi Road', 
					'Pattanagere P.O',
					'Ragihalli', 
					'Rajarajeshwarinagar', 
					'Ramohalli', 
					'Rv Niketan', 
					'Sakalavara', 
					'Sampangiramnagar', 
					'Shanthinagar', 
					'Singasandra', 
					'Somanhalli', 
					'St. Johns Medical College', 
					'State Bank Of Mysuru Colony', 
					'Subramanyapura', 
					'Sulikere', 
					'Taralu' ,
					'Tavarekere' ,
					'Thalaghattapura', 
					'Thataguni' ,
					'Thattekuppe' ,
					'Thyagarajnagar' ,
					'Tilaknagar  (Bengaluru)',
					'Udaypura',
					'Ullalu Upanagar',
					'Wilson Garden', 
					'Yelachenahalli', 
					'Achitnagar', 
					'Bagalgunte', 
					'BAGALGUNTE', 
					'Bapagrama', 
					'Basaveshwaranagar', 
					'Bengaluru City', 
					'Bengaluru Dist Offices Bldg', 
					'Byatha', 
					'Chandra Lay Out', 
					'Chikkabanavara', 
					'Chikkabidarkal' ,
					'Gayathrinagar' ,
					'Hampinagar' ,
					'Herohalli' ,
					'Hessarghatta Lake' ,
					'Hessarghatta' ,
					'Industrial Estate  (Bengaluru)',
					'Jalahalli East',
					'Jalahalli',
					'Jalahalli West', 
					'K H B Colony',
					'K. G. Road',
					'Kakolu',
					'Kamakshipalya', 
					'Kodigehalli' ,
					'Laggere' ,
					'Magadi Road', 
					'Mahalakshmipuram Layout' ,
					'Malleswaram' ,
					'Malleswaram West', 
					'Mathikere',
					'Msrit' ,
					'Nagarbhavi II Stage PO',
					'Nagarbhavi' ,
					'Nagasandra  (Bengaluru)',
					'Nandinilayout' ,
					'Nelakadiranahalli', 
					'Palace Guttahalli' ,
					'Peenya Dasarahalli', 
					'Peenya I Stage' ,
					'Peenya Small Industries', 
					'Rajajinagar' ,
					'Rajajinagar IVth Block', 
					'Science Institute' ,
					'Seshadripuram' ,
					'Shivakote' ,
					'Silvepura' ,
					'Sri Chowdeshwari', 
					'Srirampuram' ,
					'Swimming Pool Extn', 
					'Vidyaranyapura' ,
					'Vijayanagar East', 
					'Vijayanagar  (Bengaluru)',
					'Viswaneedam' ,
					'Vyalikaval Extn', 
					'West of Chord Road II stage', 
					'Yeshwanthpur Bazar' ,
					'Yeswanthpura'

		];
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