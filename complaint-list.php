<?php
//function getDetails(){
# An HTTP GET request example
$data=$_GET;
$url = 'http://localhost:8080/complaintlist';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data,true);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Complaint listing</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.0/css/font-awesome.min.css'><link rel="stylesheet" href="complaint-list-style.css">
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
  width: 14000px;
  transform: translate(-50%, -50%);
  background-color: #f3efe7;
  box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
}
</style>
</head>
<body class="content">
<!-- partial:index.partial.html -->
<script type="text/javascript" src="//use.typekit.net/uvs8amk.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<table align="center">
	<tr>
		<td>No.</td>
		<td>Nature of Complaint</td>
		<td>Complainant</td>
		<td>Date</td>
		<td>Action</td>
		<td>View</td>
	</tr>
<?php
$count=1;
	foreach ($arr as $key => $value) {
	$new_date=strtotime($value["date"]);
	echo'<tr><td>'.$count.'</td><td>'.$value["typeOfComplaint"].'</td><td>'.$value["name"].'</td><td>'.date("D/M/Y",$new_date).'</td><td><a href="complaint-delete.php?id='.$value["id"].'">DELETE</a></td><td><a href="complaint-view.php?id='.$value["id"].'">SELECT</a></td></div>';
	$count+=1;
}

?>
</table>

<!-- <div><span>The General</span><b><i>$</i>89</b><small><i>$</i>379</small><strong><em class="icon icon-chevron-down"></em>5%</strong><a href="#">SELECT</a></div> -->

<!-- <div><span>Esurance</span><b><i>$</i>92</b><small><i>$</i>432</small><strong><em class="icon icon-down icon-chevron-up"></em>4%</strong><a href="#">SELECT</a></div> -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
