<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Complaint Desk</title>
  <link rel="stylesheet" href="complaint-style.css">
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
  top: 70%;
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
<body>
<!-- partial:index.partial.html -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">


    <!-- <link rel="stylesheet" href="css/icon-font.css">
    <link rel="stylesheet" href="css/style.css">
     -->

    <title>Rotating cards</title>
</head>

<body class="bg-img">

        <section class="section-tours content" id="section-tours">

  

            <div class="row">
              <?php session_start();
               if(strcasecmp($_SESSION['type'],"a")==0){
                echo '
                    <div class="col-1-of-3">
                    <div class="card">
                        <div class="card_side card_side--front">

                            <div class="card_picture card_picture--3">
                                &nbsp;
                            </div>
                            <h4 class="card_heading">
                                <span class="card_heading-span card_heading-span--3">
                                    Complaint <br> Registration
                                </span>
                            </h4>
                            <div class="card_details">
                                <ul>
                                    <!-- <li><strong>Species:</strong> Human</li>
                                     <li><strong>Gender:</strong> Male</li>
     -->
                                </ul>
                            </div>
                        </div>
                        <div class="card_side card_side--back card_side--back-3">
                            <div class="card_cta">
                                <div class="card_price-box">
                                    <p class="card_price-only">Register your complaint</p>
                                    <p class="card_price-value">free to say!</p>
                                </div>
                                <a href="complaint-form.php" class="btn btn--white">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card_side card_side--front">

                            <div class="card_picture card_picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card_heading">
                                <span class="card_heading-span card_heading-span--1">
                                   Active  <br> Complaints
                                </span>
                            </h4>
                            <div class="card_details">
                                <ul>
                                    <!-- <li><strong>Species:</strong> Human</li>
                                     <li><strong>Gender:</strong> Male</li>
                                     <li><strong>Height:</strong> 1.93 meters</li>
                                     <li><strong>Form IV:</strong> Ataru</li>
                                     <li><strong>Lightsaber:</strong> Green</li> -->
                                </ul>
                            </div>


                        </div>
                        <div class="card_side card_side--back card_side--back-1">
                            <div class="card_cta">
                                <div class="card_price-box">
                                    <p class="card_price-only">List of Complaints</p>
                                    <p class="card_price-value">Solve it soon!</p>
                                </div>
                                <a href="complaint-list.php" class="btn btn--white">Have a Look</a>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card_side card_side--front">

                            <div class="card_picture card_picture--2">
                                &nbsp;
                            </div>
                            <h4 class="card_heading">
                                <span class="card_heading-span card_heading-span--2">
                                    Complaint <br> Statistics
                                </span>
                            </h4>
                            <div class="card_details">
                                <ul>
                                    <!-- <li><strong>Species:</strong> Human</li>
                                     <li><strong>Gender:</strong> Male</li>
                                     <li><strong>Height:</strong> 1.92 meters</li>
                                     <li><strong>Form VII:</strong> Juyo</li>
                                     <li><strong>Lightsaber:</strong> Magenta</li> -->
                                </ul>
                            </div>


                        </div>
                        <div class="card_side card_side--back card_side--back-2">
                            <div class="card_cta">
                                <div class="card_price-box">
                                     <p class="card_price-only">Statistics of Complaint</p>
                                    <p class="card_price-value">See the Status!</p>
                                </div>
                                <a href="complaint-stat.php" class="btn btn--white">Go Ahead</a>
                            </div>
                        </div>
                    </div>
                </div>';
              }
              else
              {
                echo '<div class="col-1-of-3">
                    <div class="card">
                        <div class="card_side card_side--front">

                            <div class="card_picture card_picture--3">
                                &nbsp;
                            </div>
                            <h4 class="card_heading">
                                <span class="card_heading-span card_heading-span--3">
                                    Complaint <br> Registration
                                </span>
                            </h4>
                            <div class="card_details">
                                <ul>
                                    <!-- <li><strong>Species:</strong> Human</li>
                                     <li><strong>Gender:</strong> Male</li>
     -->
                                </ul>
                            </div>
                        </div>
                        <div class="card_side card_side--back card_side--back-3">
                            <div class="card_cta">
                                <div class="card_price-box">
                                    <p class="card_price-only">Register your complaint</p>
                                    <p class="card_price-value">free to say!</p>
                                </div>
                                <a href="complaint-form.php" class="btn btn--white">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card_side card_side--front">

                            <div class="card_picture card_picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card_heading">
                                <span class="card_heading-span card_heading-span--1">
                                   Active  <br> Complaints
                                </span>
                            </h4>
                            <div class="card_details">
                                <ul>
                                    <!-- <li><strong>Species:</strong> Human</li>
                                     <li><strong>Gender:</strong> Male</li>
                                     <li><strong>Height:</strong> 1.93 meters</li>
                                     <li><strong>Form IV:</strong> Ataru</li>
                                     <li><strong>Lightsaber:</strong> Green</li> -->
                                </ul>
                            </div>


                        </div>
                        <div class="card_side card_side--back card_side--back-1">
                            <div class="card_cta">
                                <div class="card_price-box">
                                    <p class="card_price-only">List of Complaints</p>
                                    <p class="card_price-value">Solve it soon!</p>
                                </div>
                                <a href="complaint-list.php" class="btn btn--white">Have a Look</a>
                            </div>
                        </div>
                    </div>
                </div>';
              }
              ?>
              
          
            </div>

            

        </section>
      
    </main>

   


    



    <!-- Grid
        
        <section class="grid-test"> 
           <div class="row">
               <div class="col-1-of-2">
                   col 1 of 2
               </div> 
               <div class="col-1-of-2">
                   col 1 of 2
               </div>
           </div>
           
            <div class="row">
               <div class="col-1-of-3">
                   col 1 of 3
               </div> 
               <div class="col-1-of-3">
                   col 1 of 3
               </div>
               <div class="col-1-of-3">
                   col 1 of 3
               </div>
           </div>
           
            <div class="row">
               <div class="col-1-of-3">
                   col 1 of 3
               </div> 
               <div class="col-2-of-3">
                   col 2 of 3
               </div>
           </div>
           
           <div class="row">
               <div class="col-1-of-4">
                   col 1 of 4
               </div> 
               <div class="col-1-of-4">
                   col 1 of 4
               </div>
               <div class="col-1-of-4">
                   col 1 of 4
               </div>
               <div class="col-1-of-4">
                   col 1 of 4
               </div>
           </div>
           
                <div class="row">
               <div class="col-1-of-4">
                   col 1 of 4
               </div> 
               <div class="col-1-of-4">
                   col 1 of 4
               </div>
               <div class="col-2-of-4">
                   col 2 of 4
               </div>
           </div>
           
           <div class="row">
               <div class="col-1-of-4">
                   col 1 of 4
               </div> 
               <div class="col-3-of-4">
                   col 3 of 4
               </div>
 
           </div>
        
        </section>
        -->

</body>

</html>
<!-- partial -->
  <!-- <script  src="./script.js"></script> -->

</body>
</html>
