<!DOCTYPE html>
<html>
<head>
  <script src='sweetalert.min.js'></script>
  <link rel='stylesheet' href='sweetalert.min.css'>
</head>
<body>

</body>
</html>

<?php session_start();

$url2="http://localhost/project/dashboard.php";

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
         //echo "File is not an image.";
      echo "<script type='text/javascript'>swal({
  title: 'Error occured',
  text: 'News cannot be added',
  type: 'warning',
  timer: 2000,
  showConfirmButton: false
});</script>";  
        $uploadOk = 0;
    }
}
//echo $target_file;
 //echo $_POST['imageUrl'];

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
//echo $uploadOk;
// Execute cURL request with all previous settings
if($uploadOk==1){
  $response = curl_exec($curl);
  //echo $response;
 // echo "hello";
}
// Close cURL session
//echo $response;
if(strcmp($response, 'true')==0&&isset($_POST['submit'])){
  unset($_POST['submit']);
echo "<script type='text/javascript'>swal({
  title: 'News Added',
  text: 'Look at your dashboard',
  type: 'success',
  showConfirmButton: true
});</script>"; 
}


curl_close($curl);
//echo "succes";
//print_r($response);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>News form</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:300,400'><link rel="stylesheet" href="news-style.css">
<style type="text/css">
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
  background: #f3efe7;;
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
  background-color: #f3efe7;
  box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
}
</style>
<script>
function myFunction() {
  var x = document.getElementById("file").value;
  document.getElementById("demo").innerHTML = x;
}
</script>
</head>
<body class="bg-img">
<!-- partial:index.partial.html -->
<div class="section-form content">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
    <div class="intro"> 
      <h1>Ready to go?</h1>
      <h2>Spread the news</h2>
    </div>
    <input type="text" placeholder="Heading" name="heading" tabindex="1" required/>
    <input type="text" placeholder="Author-name" name="authorName" tabindex="2" value="<?php echo $_SESSION['name'];?>" readonly/>
    <input  class="btn btn-outline-primary"   name="imageUrl" type="file" id="imageUrl"  accept="image/*" tabindex="3" multiple/><br>
    <textarea placeholder="Detail" name="description" id="description" tabindex="5" rows="10" required></textarea>
    <input type="submit" name="submit" value="Submit" tabindex="6"/>
  </form>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>
