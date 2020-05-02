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
//$arrayName = array('id'=>1, 'firstName' => $_POST['firstName']);

$url = 'http://localhost:8080/employees/'.$_POST['id'].'/'.$_POST['firstName'];

// Initializes a new cURL session
$curl = curl_init($url);


curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
'Authorization: Bearer MY_API_TOKEN'));

$result="hello";
$result=curl_exec($curl);
echo $result;// Set custom headers for RapidAPI Auth and Content-Type header

// Execute cURL request with all previous settings
if(strcmp("true",curl_exec($curl))==0){
echo "<script type='text/javascript'>swal({
  title: 'Deleted',
  text: 'done',
  type: 'success',
  showConfirmButton: true
}, function(){
      window.location.href = 'http://localhost/project/delete.php';
});</script>";	
}
else if(strcmp("false",curl_exec($curl))==0)
{
	echo "<script type='text/javascript'>swal({
  title: 'Error',
  text: 'Employee with this id does not exist ',
  type: 'warning',
  timer: 2000,
  showConfirmButton: false
}, function(){
      window.location.href = 'http://localhost/project/delete.php';
});</script>";	
}
else{
	echo "<script type='text/javascript'>swal({
  title: 'Error',
  text: 'Employee id and name does not match ',
  type: 'warning',
  timer: 2000,
  showConfirmButton: false
}, function(){
      window.location.href = 'http://localhost/project/delete.php';
});</script>";	
}
// Close cURL session
curl_close($curl);

//print_r($response);
//echo ;
?>