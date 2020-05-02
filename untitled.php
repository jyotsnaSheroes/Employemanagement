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
	<title>Employe Details</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
     
	<style>
	body{
		background-image: url("images/one.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
	


</head>
<body>
			<table class="table">
				<tr>
					<td colspan="5"><h2>Employee Detail</h2>
					</td>
				</tr>
				
				
				<tr>
					<td><b>Personal Details</b></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td><?php echo $arr->firstName?>></td>
				    <td><?php echo $arr->middleName?>></td>
				    <td><?php echo $arr->lastName?></td>
				</tr>
				<tr>
			    	<td>Gender:</td>
			    	<td><b><?php echo $arr->gender?></b></td>
			    </tr>
			    <tr>
			    	<td>BirthDate:</td>
			    	<td><?php echo $arr->birthDate?>></td>
			    </tr>
			    <tr>
			    	<td rowspan="2">Address:</td>
			    	<td colspan="2"><?php echo $arr->address?></td>
			    </tr>
			    <tr align="left">
			    	<td><?php echo $arr->district?></td>
			    	<td><?php echo $arr->state?></td>
			    	<td><?php echo $arr->pincode?></td>
			    </tr>
			    <tr>
			    	<td><b>Employement Detail</b></td>
			    </tr>
			    <tr>
			    	<td>Job Title</td>
			    	<td><?php echo $arr->jobTitle?></td>
			    </tr>
			    <tr>
			    	<td>Department</td>
			    	<td><?php echo $arr->department?></td>
			    </tr>
			    <tr>
			    	<td>Commnecement Date:</td>
			    	<td><?php $dt=$arr->birthDate; echo date('d/m/Y',$dt)?></td>
			    </tr>
			    <tr>
			    	<td>Employement status</td>
			    	<td><?php echo $arr->jobStatus?></td>
			    </tr>
			    <tr>
			    	<td><b>Banking Details</b></td>
			    </tr>
			    <tr>
			    	<td>Bank:</td>
			    	<td><?php echo $arr->bankName?></td>
			    	<td><?php echo $arr->bankBranch?></td>
			    </tr>
			    <tr>
			    	<td>Account Number:</td>
			    	<td><?php echo $arr->accno?></td>
			    </tr>

		</table> 	
	
</body>
</html>
