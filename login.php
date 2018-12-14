<!DOCTYPE html>
<html>
  <head>
    <title>Login to G-LMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
  </head>
  <body>
    <center>
      <div class="jumbotron login-panel">
        <h1 style="font-family: 'Raleway', sans-serif">Login to G-LMS</h1>
        <!-- Google Login Button -->
      </div>
    </center>

    <div class="login">
      <form class="login-form" action="index.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>

    <?php
    include 'includes/footer.php' 
    ?>

  </body>
