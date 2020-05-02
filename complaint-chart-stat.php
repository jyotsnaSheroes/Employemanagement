<?php 

$data=$_POST['year'];

$url = 'http://localhost:8080/complaintyear/'.$data;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data,true);
$totalcomplaint=array();
$solvedcomplaint=array();
foreach($arr as $key => $value) {
array_push($totalcomplaint,$value['label']);
array_push($solvedcomplaint,$value['y']);
}
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Complaint Comparison</title>
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
  top: 50%;
  left: 50%;
  z-index: 999;
  text-align: center;
  padding: 60px 32px;
  width: 1350px;
  transform: translate(-50%, -50%);
  background-color: #f3efe7;
    box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
}
</style>
</head>
<body class="content">
<!-- partial:index.partial.html -->

<canvas id="myChart"></canvas>
<!-- partial -->
  <script src='Chart.js'></script>
  <script type="text/javascript">
  	var ctx = document.getElementById("myChart").getContext('2d');

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["January",	"February",	"March",	"April",	"May",	"June",	"July","August",	"September","October", "November", "December"],
        datasets: [{
            label: 'Total Complaints', // Name the series
            data: [<?php echo implode($totalcomplaint, ',');?>] , // Specify the data values array
            fill: false,
            borderColor: '#2196f3', // Add custom color border (Line)
            backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
            borderWidth: 1 // Specify bar border width
        },
                  {
            label: 'Complaints Resolved', // Name the series
            data: [<?php echo implode($solvedcomplaint, ','); ?>], // Specify the data values array
            fill: false,
            borderColor: '#4CAF50', // Add custom color border (Line)
            backgroundColor: '#4CAF50', // Add custom color background (Points and Fill)
            borderWidth: 1 // Specify bar border width
        }]
    },
    options: {
      responsive: true, // Instruct chart js to respond nicely.
      maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
    }
});
  </script>


</body>
</html>
