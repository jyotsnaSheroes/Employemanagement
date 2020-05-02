
<head>
  <meta name="google-signin-client_id" content="344649308828-l4n3cgdqs43of7fp75d8t5nuhg6aocr5.apps.googleusercontent.com">
  <title>Login Form</title>
  <link rel='stylesheet' href='https://yui.yahooapis.com/pure/0.5.0/pure-min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&amp;display=swap'><link rel="stylesheet" href="index-style.css">
   <script type="text/javascript">
     
function validatePassword(){
  var password = document.getElementById("password1")
  , confirm_password = document.getElementById("password2");
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password1.onchange = validatePassword();
password2.onkeyup = validatePassword();
   </script>
</head>

<body>
<!-- partial:index.partial.html -->
<div class="bg-img">
  <div class="content">
    <header>Sign Up</header>
    <form action="sign-valid.php" method="POST" onsubmit="validatePassword();">
      <div class="field">
        <span class="fa fa-user"></span>
        <input type="email" name="email" required placeholder="Email">
      </div>
      <div class="field space">
        <span class="fa fa-user"></span>
        <input type="number" name="empId" required placeholder="Employee Id">
      </div>
      <div class="field space">
        <span class="fa fa-user"></span>
        <input type="text" name="name" required placeholder="Employee name">
      </div>
      <div class="field space">
        <span class="fa fa-lock"></span>
        <input type="password" id="password1" name="password" class="pass-key" required placeholder="Password">
        <span class="show">SHOW</span>
      </div>
      <div class="field space">
        <span class="fa fa-lock"></span>
        <input type="password" id="password2" class="pass-key" required placeholder="Confirm Password">
        <span class="show">SHOW</span>
      </div>     
      <div class="field">
        <input type="submit" name="submit" value="SUBMIT" onclick="validatePassword()">
      </div>
    </form>
  </div>
</div>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="jquery.min.js"></script>
  <script  src="index-script.js"></script>
  

 <!--  <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
        <?php required_once(setting.php);
        // session_start();
        //  $_SESSION['client_id']=CLIENT_ID;
        //  $_SESSION['CLIENT_SECRET']=CLIENT_SECRET;
        //  $_SESSION['CLIENT_REDIRECT_URL']=CLIENT_REDIRECT_URL;
        //  $_SESSION['access_token']=id_token;



        //  $data=$_GET['date'];
        $url = 'http://localhost:8080/login/client_id='.CLIENT_ID.'/id_token='.id_token;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        curl_close($ch);
        //print_r($data);
        $arr=json_decode($data,true);

         //header("location:dashboard.php");
         ?>
      }
    </script> 
 -->
</body>
</html>
<!DOCTYPE html>
