<?php
//function getDetails(){
//# An HTTP GET request example
$data=$_GET;

$url = 'http://localhost:8080/chart';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data);

$url = 'http://localhost:8080/chartpie';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data2 = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr2=json_decode($data);


//return $data;
//}
?>

<script>
window.onload = function () {
	
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	
	title:{
		text:"Number of employes joined in last 5 Year"
	},
	axisX:{
		interval: 1,
		title: "Months"
	},
	axisY2:{
		interlacedColor: "rgba(1,77,101,.2)",
		gridColor: "rgba(1,77,101,.1)",
		title: "Number of Employes"
	},
	data: [{
		type: "bar",
		name: "Year",
		axisYType: "secondary",
		color: "#014D65",
		 dataPoints:<?php echo $data?>,
		 // [
		// 	{ y: 3, label: "January" },
		// 	{ y: 7, label: "February" },
		// 	{ y: 5, label: "March" },
		// 	{ y: 9, label: "April" },
		// 	{ y: 7, label: "May" },
		// 	{ y: 7, label: "June" },
		// 	{ y: 9, label: "July" },
		// 	{ y: 8, label: "August" },
		// 	{ y: 25, label: "September" },
		// 	{ y: 30, label: "October" },
		// 	{ y: 52, label: "November" },
		// 	{ y: 103, label: "December" },
		// 	// { y: 25, label: "Britain" },
		// 	// { y: 28, label: "Germany" },
		// 	// { y: 29, label: "France" },
		// 	// { y: 52, label: "Japan" },
		// 	// { y: 103, label: "China" },
		// 	// { y: 134, label: "US" }
		// ]
	}]
});
chart.render();
var chart = new CanvasJS.Chart("chartPie", {
	animationEnabled: true,
	title: {
		text: "Employes in each department"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: <?php echo $data2?>
	}]
});
chart.render();

}
</script>