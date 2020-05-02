<html lang="en" >
<html>
<head>
  <script src='sweetalert.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js'></script>
  <link rel='stylesheet' href='sweetalert.min.css'>
</head>
<body>

</body>
</html>

<?php
// kvstore API url
//print_r($_POST);
//$arrayName = array('id'=>1, 'firstName' => $_POST['firstName']);
//die;
$data = $_POST;
 $url = 'http://localhost:8080/employees';

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
if($_POST['submit']&&$response){

unset($_POST['submit']);
echo "<script type='text/javascript'>swal({
  title: 'Employee Registered',
  text: 'done',
  type: 'success',
  showConfirmButton: true
});</script>";	
}
// Close cURL session
curl_close($curl);
?>
<html>
<head>
	<title>Add Employe Details</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
     
	<style>
	
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
  background-color: #f3efe7;
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
  background-color: #f3efe7;
  box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
}
/*td{
	color:#707070;
}
*/	</style>
	


</head>
<body class="bg-img">	
	
	<form class="form-horizontal content"  method="POST" enctype="multipart/form-data" action="?php echo $_SERVER['PHP_SELF']; ?>"<?php echo $arr['id']?>>
			<table class="table">
				<tr>
					<td colspan="5"><h2>Employee Detail Form</h2>
					</td>
				</tr>
				
				
				<tr>
					<td><b>Personal Details</b></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td>
						<select>
						<option>Mr.</option>
						<option>Ms.</option>
					</select>
				    </td>
				    <td><input type="text" name="firstName" placeholder="Name" required  value="<?php echo !empty($arr->firstName)?$arr->firstName:''?>"><span class="required">*</span></td>
				    <td><input type="text" name="middleName" placeholder="Middlename"></td>
				    <td><input type="text" name="lastName" placeholder="lastname" required><span class="required">*</span></td>
				</tr>
				<tr>
			    	<td>Gender:<span class="required">*</span></td>
			    	<td><input type="radio" name="gender" value="male" required>Male</td>
			    	<td><input type="radio" name="gender" value="female" required>Female</td>
			    </tr>
			    <tr>
			    	<td>BirthDate:<span class="required">*</span></td>
			    	<td><input type="date" name="birthDate" required></td>
			    </tr>
			    <tr>
			    	<td rowspan="2">Address:</td>
			    	<td colspan="2"><input type="text" size="40" name="address" placeholder="Address Line1" required><span class="required">*</span></td>
			    	<td colspan="2"><input type="text" size="40" name="address2" placeholder="Address line2"></td>
			    </tr>
			    <tr align="left">
			    	<td><input type="text" name="district" placeholder="district" required><span class="required">*</span></td>
			    	<td><input type="text" name="state" placeholder="state" required><span class="required">*</span></td>
			    	<td><input type="text" name="pincode" pattern="[0-9]{6}" placeholder="pincode" maxlength="6" size="8"></td>
			    </tr>
			    <tr>
			    	<td><b>Employement Detail</b></td>
			    </tr>
			    <tr>
			    	<td>Job Title</td>
			    	<td><input type="text" name="jobTitle"></td>
			    </tr>
			    <tr>
			    	<td>Department<span class="required">*</span></td>
			    	<td><select name="department" required>
			    		<option value="Information Technology">Information Technology</option>
			    		<option value="Operations">Operations</option>
			    		<option value="Product">Product</option>
			    	    </select></td>
			    </tr>
			    <tr>
			    	<td>Commnecement Date:<span class="required">*</span></td>
			    	<td><input type="date" name="commenceDate" required></td>
			    </tr>
			    <tr>
			    	<td>Employement status<span class="required">*</span></td>
			    	<td><input type="radio" name="jobStatus" value="FTE" required> Full-Time</td>
			    	<td><input type="radio" name="jobStatus" value="Part-time" required>Part-Time</td>
			    	<td><input type="radio" name="jobStatus" value="Temporary" required>Temporary</td>
			    	<td><input type="radio" name="jobStatus" value="casual" required>Casual</td>
			    </tr>
			    <tr>
			    	<td><b>Banking Details</b></td>
			    </tr>
			    <tr>
			    	<td>Bank:<span class="required">*</span></td>
			    	<td><input type="text" name="bankName" placeholder="Bank name" required></td>
			    	<td><input type="text" name="bankBranch" placeholder="Bank Branch" required></td>
			    </tr>
			    <tr>
			    	<td>Account Number:<span class="required">*</span></td>
			    	<td><input type="text" name="accNo" required></td>
			    </tr>

			    <tr>
				<td colspan="2"><input type="submit" class="btn btn-outline-danger" name="submit">
				</td>
			    </tr>
		</table> 	
		</form>
		
    <script src="jquery.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap.min.js"></script>		
	</body>
	</html>
				

		
