<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Event</title>
  <link rel="stylesheet" href="event-style.css">
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
<!-- partial:index.partial.html -->
<div class="main content">
  <h1>Events</h1>
  <ul class="cards">
    <?php session_start();
    if(strcasecmp($_SESSION['type'],"a")==0){

      echo '<li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="images/event-list.jpeg"></div>
        <div class="card_content">
          <h2 class="card_title">See Previous Events</h2>
          <p class="card_text">Enter date to get the event registered on that date </p>
          <form method="GET" action="event-list.php">
              <input type="date" name="date" class="btn card_btn" required>
              <input type="submit" name="submit" class="btn card_btn">
          </form>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="images/registration-desk.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Register Event</h2>
          <p class="card_text">Enter the date to register event on that date</p>
          <form method="GET" action="event-register.php">
              <input type="date" name="eventDate" class="btn card_btn" required>
              <input type="submit" name="submit" class="btn card_btn">
          </form>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="images/event-year.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Events of an year</h2>
          <p class="card_text">Enter the date to register event on that date</p>
          <form method="GET" action="event-year.php" name="year-form" onsubmit="return validateForm()">
              <input type="number" name="year" class="btn card_btn" placeholder="please enter valid year" required>
              <input type="submit" name="submit" class="btn card_btn">
          </form>
        </div>
      </div>
    </li>
    ';
    }
    else
    {
   echo '
   <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="images/event-list.jpeg"></div>
        <div class="card_content">
          <h2 class="card_title">See Previous Events</h2>
          <p class="card_text">Enter date to get the event registered on that date </p>
          <form method="GET" action="event-list.php">
              <input type="date" name="date" class="btn card_btn" required>
              <input type="submit" name="submit" class="btn card_btn">
          </form>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="images/event-year.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Events of an year</h2>
          <p class="card_text">Enter the date to register event on that date</p>
          <form method="GET" action="event-year.php" name="year-form" onsubmit="return validateForm()">
              <input type="number" name="year" class="btn card_btn" placeholder="please enter valid year" required>
              <input type="submit" name="submit" class="btn card_btn">
          </form>
        </div>
      </div>
    </li>
    ';    
    }
    ?>
    </ul>
</div>
<!-- partial -->
  <script type="text/javascript">
    function validateForm() {
      var year = document.forms["year-form"]["year"].value;
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
}</script>
</body>
</html>
