<?php
//function getDetails(){
# An HTTP GET request example
$data=$_GET['id'];
$name=$_GET['firstName'];
?>

<html>
<head>
	<title>Delete Employe Details</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<style>
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
  width: 1270px;
  transform: translate(-50%, -50%);
  background: rgba(255, 255, 255, 0.01);
  box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
}
	</style>

</head>
<body class="bg-img">

	<div align="center">
	<h1>Delete the employee detail</h1>
	<div class="card content"  style="width: 20rem;">
		<img class="card-img-top" src="images/del.svg" alt="Card image">
		<form class="form-horizontal card-body" action="json_delete.php" method="POST" enctype="multipart/form-data">
                    	<h5 class="card-title">Enter Employee Id:</h5>
                    	<input type="text" name="id" class="card-text" value="<?php print_r(!empty($data)?$data:'') ?>" required><br>
                    	<b>Enter employee name:</b>
                    	<input type="text" name="firstName" class="card-text" value="<?php print_r(!empty($name)?$name:'') ?>" required><br>
                    	  <input type="submit" name="submit" class="btn btn-outline-danger">
                    
        </form>
    </div>
</div>
</body>
</html>
