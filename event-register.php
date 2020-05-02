<!DOCTYPE html>
<html>
<head>
	<script src='sweetalert.min.js'></script>
	<link rel='stylesheet' href='sweetalert.min.css'>
</head>
<body>

</body>
</html>
<?php
# An HTTP GET request example
$data = $_POST;
if(!empty($data)){

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
if($response){
echo "<script type='text/javascript'>
swal('Event Registered','Plan for the day','success');
</script>";	
}
// Close cURL session
//session_write_close();

curl_close($curl);
}
if(!empty($_GET['eventDate'])){
$data=$_GET['eventDate'];	
}
else if(!empty($_POST['eventDate']))
{
	$data=$_POST['eventDate'];
}


$url = 'http://localhost:8080/event/'.$data;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data,true);
// kvstore API url
//unset($_POST['submit']);
//print_r($_POST);
//$arrayName = array('id'=>1, 'firstName' => $_POST['firstName']);
//die;
//echo "succes";
//print_r($response);
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Event Registration Form</title>
  <link rel="stylesheet" href="normalize.min.css">
<link rel='stylesheet' href='bootstrap.min.css'>
<link rel="stylesheet" href="event-list-style.css">
<link rel="stylesheet" href="event-register-style.css">
<link href='Englebert.css' rel='stylesheet' type='text/css'>

</head>
<body>
<!-- partial:index.partial.html -->
<!--Trigger-->
<div class="wrapper clearfix">
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
    <a  id="create" class="login-trigger"  data-target="#login" data-toggle="modal">+</a>
  </div>
  <br><br><br><br>
<a class="btn login" href="eventCalendar.php" style="background: linear-gradient(to bottom right,#F87E7B,#B05574);">Back</a>

<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-body">
        <button data-dismiss="modal" class="close">&times;</button>
        <h4>Register Event</h4>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="target">
          <input type="text" name="eventName" class="eventname form-control" placeholder="Event Name" required />
          <input type="text" name="organizerName" class="organizername form-control" placeholder="Organizer Name" required />
          <select name="typeOfEvent" id="typeOfEvent" class="typeOfEvent form-control" required>
          	<option value="Technical Event">Technical event</option>
          	<option value="Promotional Event">Promotional event</option>
          	<option value="Fun Event">Fun event</option>
          	<option value="Meeting">Meetings</option>
          </select>
          <input type="Number" name="noOfAttendees" class="noOfAttendees form-control" placeholder="Number of Attendeees" required />
          <input type="hidden" name="eventDate" value=<?php if(!empty($_GET['eventDate'])){
          	echo $_GET['eventDate'];
          }else{
          	echo $_POST['eventDate'];
          } ?>>
          <input class="btn login" type="submit" value="Submit" />
        </form>
      </div>
    </div>
  </div>  
</div>
<!-- partial -->
  <script src='jquery.min.js'></script>
<script src='bootstrap.min.js'></script>

<!-- <script type="text/javascript">
	$("#target").submit(function() {
  swal('Event Registered',"Please await for response",'success')
});
</script>
 --></body>
</html>
