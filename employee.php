<?php include 'charts.php';?>
<html>
<head>

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
	<div class="container-fluid content">
	<div class="row">
		
			<table class="table">
				<tr align="center">
                <td>
                	<div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/edit.png" alt="Card image">
                    <div class="card-body">
                    	<h5 class="card-title">Add</h5>
                    	<p class="card-text">Add new employee details</p>
                    	  <a href="add.php" class="btn btn-outline-danger">Add</a>
                    	</div>
                    </div>
                </td>
                <td>	
                	<div class="card" style="width: 18rem; height: 27rem;">
                    <img src="images/list.jpg" class="card-img-top"  alt="Card image" height="60%">
                    <div class="card-body">
                    	<h5 class="card-title">List</h5>
                    	<p class="card-text">List of Employees</p>
                    	  <a href="list.php" class="btn btn-outline-danger">List</a>
                    	</div>
                    </div>
                	
                </td>
                <td>    
                    <div class="card" style="width: 18rem;">
                    <img src="images/del.svg" class="card-img-top"  alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Delete</h5>
                        <p class="card-text">Delete an Employee</p>
                          <a href="delete.php" class="btn btn-outline-danger">Delete</a>
                        </div>
                    </div>
                    
                </td>
            </tr>
            
			</table>
</body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</html>