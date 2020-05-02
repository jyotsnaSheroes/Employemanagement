<?php 
//$url="http://localhost/project/validate.php";

session_start();
if (!isset($_SESSION['name'])) {
    //header('Location: noaccess.php');
    echo "<h1>Access denied</h1>";
    exit();
}
else{
$url = 'http://localhost:8080/getnews';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data,true);
//echo $_SESSION['name'];

echo '

<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" href="dashboard-style.css">

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
    .navbar{
        color: #c90016;
    }
    h2{
     font-family: medium-content-sans-serif-font,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Open Sans","Helvetica Neue",sans-serif;
    }
	</style>
</head>
<body class="bg-img">
	<div class="container-fluid">
	<div class="row">
		
			<table class="table table-borderless content">
				<tr>
					<td style="width: 25%;">
                        <img src="https://sheroes.com/img/logo.svg">
                    </td>
					<td colspan="3" align="center" style="font-family:cambria; color:crimson;"><h2>Everything We Do Benefits Women</h2>
					</td>
				</tr>
				<tr>
					<td rowspan="2" bgcolor="#ae0c00">
                    <h style="color:white;"><i>Welcome '.$_SESSION['name'].'</i></h><br><br>
						<nav class="navbar  bg-light navbar-light"> <ul class="navbar-nav">';
                        if(strcasecmp($_SESSION['type'],"a")==0){

                            echo '<li class="nav-item"><a class="nav-link" href="employee.php">Employee Details</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="eventCalendar.php">Events Details</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="complaint.php">Complaint Desk</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="news.php">Add News</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a>
                            </li>';
                        }
                        else{
                            echo '
                            <li class="nav-item"><a class="nav-link" href="eventCalendar.php">Events Details</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="complaint.php">Complaint Desk</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a>
                            </li>';
                             }

							
                       echo '</ul>
                        
                    </nav>
                </td>';
                if(strcasecmp($_SESSION['type'],"a")==0){
                    echo '<td align="center">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/employe.png" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Details</h5>
                        <p class="card-text">Quick view of employes details.</p>
                          <a href="search.php" class="btn btn-outline-danger">Search</a>
                        </div>
                    </div>
                </td>
                <td align="center">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/employe.png" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Details</h5>
                        <p class="card-text">Quick view of employes details.</p>
                          <a href="search.php" class="btn btn-outline-danger">Search</a>
                        </div>
                    </div>
                </td>';
            }
            else{
                echo '<td align="center">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/employe.png" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Details</h5>
                        <p class="card-text">View of your details.</p>
                          <a href="edit.php?id='.$_SESSION['id'].'"class="btn btn-outline-danger">Edit</a>
                        </div>
                    </div>
                </td>';
            }

                echo
                '<td align="center">	
                	<div class="card" style="width: 18rem;">
                    <img src="images/stat.png" class="card-img-top"  alt="Card image">
                    <div class="card-body">
                    	<h5 class="card-title">Stats</h5>
                    	<p class="card-text">Statistics of employees.</p>
                    	  <a href="chart.php" class="btn btn-outline-danger">Go for it</a>
                    	</div>
                    </div>
                	
                </td>
            </tr>
            <tr>
            
            	<td colspan="3">
                <h2 align="left" style="color:crimson">News Feed</h2>
                <div class="container">
                <div id="cards-container">
                          <div class="cards">';

                          foreach ($arr as $key => $value) {
                            echo '<a href="page.php?id='.$value['id'].'"><div class="card1"><img src="images/'.$value['imageUrl'].'" style="width:200; height:200;">
                            <div class="container">
                                <h4>
                                <b>'.$value['heading'].'</b>
                                </h4>
                              </div>
                            </div></a>';      
                          }
                          echo '</div>
                    </div>
                    
                </div>
                </td>

                 
               
            </tr>
			</table>
            
</body>
</html>';
}
?>