<?php
//function getDetails(){
# An HTTP GET request example
$data=$_GET['id'];

$url = 'http://localhost:8080/employees/'.$data;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data);

//return $data;
//}
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
	<form class="form-horizontal content"  method="POST" enctype="multipart/form-data" action="json_edit.php?id=<?php echo $arr->id?>">
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
				    <td><input type="text" name="firstName" placeholder="Name" required  value="<?php echo $arr->firstName?>"><span class="required">*</span></td>
				    <td><input type="text" name="middleName" placeholder="Middlename" value="<?php echo $arr->middleName?>"></td>
				    <td colspan="2"><input type="text" name="lastName" placeholder="lastname" value="<?php echo $arr->lastName?>" required><span class="required">*</span></td>
				</tr>
				<tr>
			    	<td>Gender:<span class="required">*</span></td>
			    	<td><input type="radio" name="gender" value="male" required>Male</td>
			    	<td><input type="radio" name="gender" value="female" required>Female</td>
			    	<td><b>You have selected <?php echo $arr->gender?> previously</b></td>
			    </tr>
			    <tr>
			    	<td>BirthDate:<span class="required">*</span></td>
			    	<td><input type="date" name="birthDate" value="<?php $date=date_create($arr->birthDate); echo date_format($date,"Y-m-j");?>"required></td>
			    </tr>
			    <tr>
			    	<td rowspan="2">Address:</td>
			    	<td colspan="2"><input type="text" size="40" name="address" placeholder="Address Line1" value="<?php echo $arr->address?>" required><span class="required">*</span></td>
			    </tr>
			    <tr align="left">
			    	<td><input type="text" name="district" placeholder="district" value="<?php echo $arr->district?>" required><span class="required">*</span></td>
			    	<td colspan="2"><input type="text" name="state" placeholder="state" value="<?php echo $arr->state?>" required><span class="required">*</span></td>
			    	<td><input type="text" name="pincode" pattern="[0-9]{6}" placeholder="pincode" maxlength="6" value="<?php echo $arr->pincode?>" size="8"></td>
			    </tr>
			    <tr>
			    	<td><b>Employement Detail</b></td>
			    </tr>
			    <tr>
			    	<td>Job Title</td>
			    	<td><input type="text" name="jobTitle" value="<?php echo $arr->jobTitle?>"></td>
			    </tr>
			    <tr>
			    	<td>Department<span class="required">*</span></td>
			    	<td><select name="department" value="<?php echo $arr->department?>" required>
			    		<option>Information Technology</option>
			    		<option>Operations</option>
			    		<option>Product</option>
			    	    </select></td>
			    </tr>
			    <tr>
			    	<td>Commnecement Date:</td>
			    	<td><input type="date" name="commenceDate" value="<?php  $date=date_create($arr->commenceDate); echo date_format($date,"Y-m-j");?>" required></td>
			    </tr>
			    <tr>
			    	<td>Employement status<span class="required">*</span></td>
			    	<td><input type="radio" name="jobStatus" value="FTE" required> Full-Time</td>
			    	<td><input type="radio" name="jobStatus" value="Part-time" required>Part-Time</td>
			    	<td><input type="radio" name="jobStatus" value="Temporary" required>Temporary</td>
			    	<td><input type="radio" name="jobStatus" value="casual" required>Casual</td>
			    	<td><b> You have selected<?php echo $arr->jobStatus?> previously</b></td>
			    </tr>
			    <tr>
			    	<td><b>Banking Details</b><span class="required">*</span></td>
			    </tr>
			    <tr>
			    	<td>Bank:</td>
			    	<td><input type="text" name="bankName" placeholder="Bank name" value="<?php echo $arr->bankName?>" required></td>
			    	<td><input type="text" name="bankBranch" placeholder="Bank Branch" value="<?php echo $arr->bankBranch?>" required></td>
			    </tr>
			    <tr>
			    	<td>Account Number:<span class="required">*</span></td>
			    	<td><input type="text" name="accNo" value="<?php echo $arr->accno?>" required></td>
			    </tr>

			    <tr>
				<td colspan="2"><input type="submit" class="btn btn-outline-danger" name="submit">
				</td>
			    </tr>
		</table> 	
		</form>
	
</body>
</html>
