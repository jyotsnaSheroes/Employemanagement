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

unset($_POST['submit']);
//print_r($_POST);
//$arrayName = array('id'=>1, 'firstName' => $_POST['firstName']);
//die;
$data=$_POST;

 $url = 'http://localhost:8080/signup';

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
echo $response;
// Close cURL session
curl_close($curl);
if(strcasecmp($response, "true")==0){
echo "<script type='text/javascript'>swal({
  title: 'Registered',
  text: 'Employee Login details saved',
  type: 'success',
  timer: 2000,
  showConfirmButton: false
}, function(){
      window.location.href = 'http://localhost/project/signup.php';
});</script>";	
}
else{
	echo "<script type='text/javascript'>swal({
  title: 'Error',
  text: 'Employee with this id does not exist',
  type: 'warning',
  timer: 20000,
  showConfirmButton: false
}, function(){
      window.location.href = 'http://localhost/project/signup.php';
});</script>";
}
?>