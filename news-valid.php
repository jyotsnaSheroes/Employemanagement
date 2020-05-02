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

$url2="http://localhost/project/news.php";

 $url = 'http://localhost:8080/news';


$target_file = basename($_FILES['imageUrl']['name']);
//echo $target_file;	
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(empty($target_file)){
  $_POST['imageUrl']="news.jpg";
}
else{
$_POST['imageUrl']=$target_file;  
}

if(isset($_POST["submit"])&&!empty($target_file)) {
    $check = getimagesize($_FILES["imageUrl"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        // echo "File is not an image.";
        $uploadOk = 0;
    }
}
echo $target_file;
 echo $_POST['imageUrl'];

$data=$_POST;
// move_uploaded_file($_FILES["imageUrl"]["tmp_name"], $target_file);

$response='false';
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
echo $uploadOk;
// Execute cURL request with all previous settings
if($uploadOk==1){
	$response = curl_exec($curl);
	echo $response;
	echo "hello";
}
// Close cURL session
echo $response;
if(strcmp($response, 'true')==0&&isset($_POST['submit'])){
	unset($_POST['submit']);
echo "<script type='text/javascript'>swal({
  title: 'News Added',
  text: 'Look at your dashboard',
  type: 'success',
  timer: 2000,
  showConfirmButton: true
}, function(){
      window.location.href = 'http://localhost/project/news.php';
});</script>"; 
}
else if(strcmp($response,'false')==0)
{
	unset($_POST['submit']);
echo "<script type='text/javascript'>swal({
  title: 'Error occured',
  text: 'News can't be added,
  type: 'image is not in required format',
  timer: 2000,
  showConfirmButton: false
}, function(){
      window.location.href = 'http://localhost/project/news.php';
});</script>"; 	
}

curl_close($curl);
//echo "succes";
//print_r($response);
?>
