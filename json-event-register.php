<?php
// kvstore API url
//unset($_POST['submit']);
//print_r($_POST);
//$arrayName = array('id'=>1, 'firstName' => $_POST['firstName']);
//die;
$data = $_POST;
 $url = 'http://localhost:8080/event';

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
//session_write_close();
curl_close($curl);
//echo "succes";
header("Location: http://localhost/project/event-register.php");
//print_r($response);
?>
