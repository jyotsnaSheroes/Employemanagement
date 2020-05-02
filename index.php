
<head>
  <title>Login Form</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&amp;display=swap'><link rel="stylesheet" href="index-style.css">
</head>

<body>
<!-- partial:index.partial.html -->
<div class="bg-img">
  <div class="content">
    <header>Login Form</header>
    <form action="validate.php" method="POST">
      <div class="field">
        <span class="fa fa-user"></span>
        <input type="text" name="email" required placeholder="Email">
      </div>
      <div class="field space">
        <span class="fa fa-lock"></span>
        <input type="password" name="password"class="pass-key" required placeholder="Password">
        <span class="show">SHOW</span>
      </div>
      <div class="pass">
        <a href="#">Forgot Password?</a>
      </div>
      <div class="field">
        <input type="submit" name="submit" value="LOGIN">
      </div>
    </form>
    <div class="signup">Don't have account?
      <a href="#">Signup Now</a>
    </div>
  </div>
</div>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script><script  src="index-script.js"></script>
  

 
</body>
</html>
