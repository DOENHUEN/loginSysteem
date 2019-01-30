<?php

  session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css"
  <meta charset="utf-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Login System</title>
</head>
<body>


  <div class="wrapper fadeInDown container">
    <div id="formContent">

      <!-- Login Form -->
      <form action="handler.php" method="post" class="mb-3 pl-2 pr-2">
        <div class="form-group">
          <label for="email" class="mt-4">Username</label>
          <input type="text" id="login email" class="fadeIn second" name="email" placeholder="login">
        </div>
        <div class="form-group">
          <label for="password" class="mt-3">Password</label>
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
        </div>
        <input type="submit" class="fadeIn fourth mt-3" value="Log In">
      </form>

      <!-- Remind Password -->
      <!-- <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div> -->

<?php
if(isset($_SESSION['status'])){
  echo '<div class="col-8 offset-2 alert alert-danger mt-5">';
  if ($_SESSION['status'][0] === 'failed'){
    echo "<p>".$_SESSION['status'][1]."</p>";
  }
  echo '</div>';
}

 ?>



      <!-- <div class="col-8 offset-2 alert alert-danger mt-5">
        <p>Username unknown</p>
        <p>Wrong password</p>
      </div> -->


    </div>
  </div>



  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="main.js"></script>

</body>
</html>
