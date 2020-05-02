<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Complaint Statistics</title>
  <link rel="stylesheet" href="complaint-stat-style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Complaint Statistics</title>
<link rel="stylesheet" href="style-2.css">
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
  width: 1070px;
  transform: translate(-50%, -50%);
  background: rgba(255, 255, 255, 0.01);
  box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
}
</style>
</head>
<body class="bg-img">
<div class="container content">
<div class="card">
<div class="first-card"><img src="images/comp-card-stat.png" alt="">
<h4>Enter the year</h4>
<label for="year">Enter year</label>
<p>This will show you the comparison of complaint solved and registered in a year.</p>
<form name="comp-stat" method="POST" action="complaint-chart-stat.php" onsubmit="return validateForm()">
	<input type="number" name="year" id="year" pattern="[0-9]{4}" placeholder="enter valid year" required>
	<br>
	<input type="submit" name="submit">
</form>
</div>
<div class="back-card"></div>
<div class="thid-card"></div>
</div>
</div>
<script type="text/javascript">
	function validateForm() {
	  var year = document.forms["comp-stat"]["year"].value;
		  if (year.length != 4) {
		            alert("Enter a valid year. Please check");
            return false;
         }
		   var current_year=new Date().getFullYear();
		   if((year < 1920) || (year > current_year))
		            {
            alert("Year should be in range 1920 to current year");
            return false;
            }
       return true;
}
</script>
</body>
</html>
<!-- partial -->
  
</body>
</html>
