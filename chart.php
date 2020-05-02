<?php include 'charts.php';?>
<html>
<head>  
<title>Statistics</title>
<style type="text/css">
	*/.required{
		color:red;
	}
	.bg-img {
		background-color: #f3efe7;
  /*background: url("images/back.png");*/
  height: 100%;
  background-size: cover;
  background-position: center;
}
/*.bg-img:after {
  position: relative;
  content: "";
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.7);
}
*/
	.content {
  position: absolute;
  top: 70%;
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
</head>
<body class="bg-img content">
<div id="chartContainer" style="height: 300px; width: 100%;"></div><br>
<div id="chartPie" style="height: 300px; width: 100%;"></div>
<div id="chartLine" style="height: 300px; width: 100%;"></div><br>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>