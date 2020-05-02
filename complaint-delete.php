<?php
// kvstore API url


$data=$_GET['id'];
//$arrayName = array('id'=>1, 'firstName' => $_POST['firstName']);

$url = 'http://localhost:8080/complaint/'.$_GET['id'];

// Initializes a new cURL session
$curl = curl_init($url);


curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
'Authorization: Bearer MY_API_TOKEN'));

$result = curl_exec($curl);
//echo $result;// Set custom headers for RapidAPI Auth and Content-Type header

// Execute cURL request with all previous settings

// Close cURL session
curl_close($curl);
header("Location: http://localhost/project/complaint-list.php");

//print_r($response);
//echo ;
?>