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
//function getDetails(){
# An HTTP GET request example
$data=$_GET['id'];
//$data2=$_GET['firstName'];

$url = 'http://localhost:8080/employees/'.$data.'/'.$_GET['firstName'];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data);
 $date=date_create($arr->commenceDate);
 $date1=date_create($arr->birtDate);
   
//return $data;
//}
?>
<html>
<head>
	<title>Employe Details</title>
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
  top: 50%;
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
	<div class="content">
	<?php if(is_null($arr->id))
	echo "swal('Error','Employe does not exist',warning);";
	else echo "
			<table class='table'>
				<tr>
					<td colspan='5'><h2>Employee Detail</h2>
					</td>
				</tr>
				
				
				<tr>
					<td><b>Personal Details</b></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td>".$arr->firstName.' '.$arr->middleName.' '.$arr->lastName."</td>
	
				    
				</tr>
				<tr>
			    	<td>Gender:</td>
			    	<td>".$arr->gender."</td>
			    </tr>
			    <tr>
			    	<td>BirthDate:</td>
			    	<td>" .date_format($date1,"Y-m-j")."</td>
			    </tr>
			    <tr>
			    	<td rowspan='2'>Address:</td>
			    	<td colspan='2'>".$arr->address."</td>
			    </tr>
			    <tr align='left'>
			    	<td>".$arr->district.' ,'.$arr->state .' ,'.$arr->pincode."</td>
			   
			    </tr>
			    <tr>
			    	<td><b>Employement Detail</b></td>
			    </tr>
			    <tr>
			    	<td>Job Title</td>
			    	<td>".$arr->jobTitle."</td>
			    </tr>
			    <tr>
			    	<td>Department</td>
			    	<td>".$arr->department."</td>
			    </tr>
			    <tr>
			    	<td>Commnecement Date:</td>
			    	<td>".date_format($date,"Y-m-j")."</td>
			    </tr>
			    <tr>
			    	<td>Employement status</td>
			    	<td>".$arr->jobStatus."</td>
			    </tr>
			    <tr>
			    	<td><b>Banking Details</b></td>
			    </tr>
			    <tr>
			    	<td>Bank:</td>
			    	<td>". $arr->bankName."</td>
			    	<td>" .$arr->bankBranch."</td>
			    </tr>
			    <tr>
			    	<td>Account Number:</td>
			    	<td>".$arr->accno."</td>
			    </tr>

		</table>";
	?>
</div>
</body>
</html>
