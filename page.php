<?php
//function getDetails(){
# An HTTP GET request example
$data=$_GET['id'];

$url = 'http://localhost:8080/news/'.$data;
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

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>page</title>
  <link rel="stylesheet" href="page-style.css">
  <style type="text/css">
    .content1 {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 999;
  text-align: center;
  padding: 60px 32px;
  width: 1000px;
  transform: translate(-50%, -50%);
  background-color: #f3efe7;
  box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
}
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div id="main" class="content1">
  <div id="logo">
  <h1><b><?php echo $arr->heading;?></b></h1>
  <h3>By <?php echo $arr->authorName;?></h3>
  
  </div>
  
   <!-- <nav>
    <ul class="nav">
      <li><a href="#">About</a></li>
      <li><a href="#">Gallery</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
   </nav>
   -->
  <div class="content"> 
   
   <div class="left"><img id="image" src="images/<?php echo $arr->imageUrl;?>" style="width:50%; height: 50%;"></div>
  <div> 
  <p class="right"><?php echo $arr->description;?><p>
    </div>
    <div class="right"><h3>Dated on <?php $date=date_create($arr->date); echo date_format($date,"Y/m/d") ;?></h3></div>


</div>
</div>
<!-- partial -->
  

</body>
</html>
