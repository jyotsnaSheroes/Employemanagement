<?php
# An HTTP GET request example

$data=$_GET['date'];
$url = 'http://localhost:8080/event/'.$data;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data,true);
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Events</title>
  <link rel="stylesheet" href="normalize.min.css">
<link rel="stylesheet" href="event-list-style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>event list</title>
	<meta name="viewport" content="width=device-width">
	<link href='Englebert.css' rel='stylesheet' type='text/css'>
	<style>
	
	.required{
		color:red;
	}
	.bg-img {
		background-color: #f3efe7;
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
	<br>
	<p style="font-family: Englebert; font-size: 40px;" align="center"> Events of date <?php echo $_GET['date'];?></p>
	<div class="wrapper clearfix content">
		<?php $size=4; $val='';$count=1;foreach ($arr as $key => $value){
			if($count==0)
				$val="note-yellow";
			else if($count==1)
				$val="note-blue";
			else if($count==2)
				$val="note-pink";
			else $val="note-green";

			$count=($count+1)%$size;
			?>

		<aside class="note-wrap <?php echo $val;?>">
			<a><?php echo $value['eventName'];?></a>
			<p>"Event Date": <?php echo $value['eventDate'];?></p>
			<p>"Number Of Attendants": <?php echo $value['noOfAttendees'];?></p>
			<p>"Type Of Event": <?php echo $value['typeOfEvent'];?></p>
			<p>"Organizer Name": <?php echo $value['organizerName'];?></p>
		</aside>
		<?php }?>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
