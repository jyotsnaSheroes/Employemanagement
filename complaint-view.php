<?php
//function getDetails(){
# An HTTP GET request example
$data=$_GET['id'];
//$data2=$_GET['firstName'];
$url = 'http://localhost:8080/complaint/'.$data;
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
  <title>Complaint View</title>
  <link rel="stylesheet" href="complaint-view-style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" href="reset.min.css">
  <style type="text/css">
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
<!-- partial:index.partial.html -->

<div id="notebook-paper">	
	<div id="content">
	<header>
    <h1>
    	<img id="image-sheroes" src="images/logo.svg">
    </h1>
  </header>
    <h3>SHEROES</h3>
    <br>
    <h2><b>Subject: Complaint Regarding <?php echo $arr->typeOfComplaint;?></b></h2>
    <br>
    <h4><b>Date: <?php $new_date=strtotime($arr->date);echo date("D/M/Y",$new_date);?></b></h4>
    <br>
    <h3>Dear HR</h3><br>

    <p>I am writing this to state that:<br>
     "<?php echo $arr->description;?>"
    </p>
    <br>
    <p> I hope you would take action as soon as possible.</p>
    <br>
    <h4>Warm Regards<br></h4>
    	<h3><?php echo $arr->name;?><br></h3>
    	<h3><?php echo $arr->emailId;?><br></h3>
    	<h3><?php echo $arr->phone;?></h3>
   </div>
</div>
<div id="editor"></div>
<div id="cmd" align="center">
<button class="btn btn-danger btn-rounded">Generate PDF</button></div>
<!--Add External Libraries - JQuery and jspdf 
check out url - https://scotch.io/@nagasaiaytha/generate-pdf-from-html-using-jquery-and-jspdf
-->
<script src="jquery-1.12.3.min.js"></script>
<script src="jspdf.min.js"></script>
<!-- partial -->
  <script  src="complaint-view-script.js"></script>
<script src='bootstrap.min.js'></script>
<script src='html2canvas.min.js'></script>

</body>
</html>
