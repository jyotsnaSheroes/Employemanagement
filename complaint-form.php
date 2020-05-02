<!DOCTYPE html>
<html>
<head>
	<script src='sweetalert.min.js'></script>
	<link rel='stylesheet' href='sweetalert.min.css'>
</head>
<body>

</body>
</html>

<?php
$data = $_POST;
 $url = 'http://localhost:8080/complaint';

// Initializes a new cURL session
$curl = curl_init($url);
// Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
// Set the CURLOPT_POST option to true for POST request
curl_setopt($curl, CURLOPT_POST, true);
// Set the request data as JSON using json_encode function
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
// Set custom headers for RapidAPI Auth and Content-Type header

// Execute cURL request with all previous settings
$response = curl_exec($curl);
// Close cURL session
if($response&&isset($_POST['submit'])){
echo "<script type='text/javascript'>
swal('Complaint Registered','Please await for response','success');
</script>";	

}

curl_close($curl);
//echo "succes";
//print_r($response);
?>

<html lang="en">
<head>
	<title>Contact V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel='stylesheet' href='sweetalert.min.css'>
	<link rel="stylesheet" type="text/css" href="google-css.css">
<!--===============================================================================================-->
<style>
	.submit {
  background-color: #F16669;
  border: none;
  padding: 15px 20px;
  color: white;
  font-size: 2em;
  margin-top: 40px;
  transition: 1s;
  cursor: pointer;
  border-radius: 4px;
}
body {
  text-align: center;
  font-size: 14px;
  background-color: #DBE3E6;
}

h1 {
  font-family: 'Pacifico', cursive;
  font-size: 6em;
  color: #252E40;
  line-height: 2.0em;
}

button {
  background-color: #F16669;
  border: none;
  padding: 15px 20px;
  color: white;
  font-size: 2em;
  margin-top: 40px;
  transition: 1s;
  cursor: pointer;
  border-radius: 4px;
}

button:hover {
  background-color: #ae1013;
}

	
	.required{
		color:red;
	}
	.bg-img {
		background-color: #f3efe7;
  /*background: url("images/back.png");*/
  height: 100%;
  background-size: cover;
  background-position: center;
}
.bg-img:after {
  position: relative;
  content: "";
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.7);
}

	.content {
  position: absolute;
  top: 70%;
  left: 50%;
  z-index: 999;
  text-align: center;
  padding: 60px 32px;
  width: 1070px;
  transform: translate(-50%, -50%);
  background: rgba(255, 255, 255, 0.01);
  box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
}

</style>

</head>
<body class="bg-img">


	<div class="container-contact100 content">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="target">
				<span class="contact100-form-title">
					Send Us Your Complaint
				</span>

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="firstName" placeholder="First name" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="lastName" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="date">Enter Date*</label>
				<div class="wrap-input100 validate-input">
					<input id="date" class="input100" type="date" name="date" required>
					<span class="focus-input100"></span>
				</div>


				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="emailId" class="input100" type="email" name="emailId" placeholder="Eg. example@email.com" required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="number" name="phone" placeholder="Eg. +91 990 0000000" pattern="[0-9]{10}">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="complaint">Enter type of complaint *</label>
				<div class="wrap-input100">
					<select id="typeOfComplaint" name="typeOfComplaint" class="input100" required>
						<option value="Amenities">Amenities</option>
						<option value="Employee">Employee</option>
						<option value="Other">Other</option>
					</select>
					<span class="focus-input100"></span>
				</div>


				<label class="label-input100" for="message">Description</label>
				<div class="wrap-input100 validate-input" data-validate = "Description is required">
					<textarea id="description" name="description" class="input100" name="message" placeholder="Write us Description of complaint"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<input type="submit" name="submit" id="submit" class="contact100-form-btn">
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							16/274, First Floor, Saidulajab Westend Marg, Garden of Five Senses Road, Tehsil Mehrauli, Near Rose Café, New Delhi, Delhi 110030
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+91 9982 236879
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							madhujeet@sheroes.in
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js'></script>
	<script src="sweetalert.min.js"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-23581568-13');
	 

	   // <?php 
	   // $val=$_SESSION['firstName'];
	   // if(isset($_SESSION['firstName'])){
	   // 	echo 'swal("Success Message Title","Well done, you pressed a button", "success")';
	   // }  	
	   // ?>

// 	   $("#target").submit(function() {
//   swal('Complaint Registered',"Please await for response",'success')
// });
	 
	  </script>	
	  
	  
      

      

	 <!-- //  $('#submit').on('click', function() {

  // var dataString = 'username=' + document.getElementById('username').value + '&password=' + document.getElementById('password').value + '&rememberMe=' + document.getElementById('rememberMe').value;

  // $.ajax({
  //   type: "POST",
  //   url: "json_add_complaint.php",
  //   data: dataString,
  //   cache: false,
  //   success: function(response){
  //     //check if what response is   
  //     console.log(response);
  //     swal("Success Message Title", "Well done, you pressed a button", "success");
  //   } 
  // });
 -->
	
</body>
</html>
