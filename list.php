<?php
//function getDetails(){
# An HTTP GET request example
$data=$_GET['date'];
$url = 'http://localhost:8080/employees';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data,true);

?>
<html>
<head>
	<title>Employes List</title>
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
  top: 40%;
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
	<h1 align="center">List of all active employes</h1>
	<table class="table content">
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>last Name</th>
			<th>Gender</th>
			<th>Address</th>
			<th>State</th>
			<th>Pincode</th>
			<th>Job Status</th>
			<th>Department</th>
			<th>Job Title</th>
			<th>Edit</th>
			<th>Delete</th>
			<th>View</th>
		</tr>
		<?php
		foreach ($arr as $key => $value) {
		echo "<tr><td>".$value['id']."</td>
		<td>".$value['firstName']."</td>
		<td>".$value['middleName']."</td>
		<td>".$value['lastName']."</td>
			<td>".$value['gender']."</td>
			<td>".$value['address']."</td>
			<td>".$value['state']."</td>
			<td>".$value['pincode']."</td>
			<td>".$value['jobStatus']."</td>
			<td>".$value['department']."</td>
			<td>".$value['jobTitle']."</td>
			<td>
			<a href='edit.php?id=".$value['id']."' class='btn btn-outline-danger'>Edit</a>
			</td>
			<td><a href='delete.php?id=".$value['id']."&firstName=".$value['firstName']."'class='btn btn-outline-danger'>Delete</a></td>
			<td><a href='view.php?id=". $value['id']."' class='btn btn-outline-danger'>View</a></td>
			</tr>";
		}
		?>
	</table>
	</body>
	</html>		










				

