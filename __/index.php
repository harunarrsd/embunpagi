<?php
  session_start(); //memulai session
  $error = '';
  if( isset($_SESSION['error']) ) 
  { //menangani error
    $error = $_SESSION['error']; //set error
    unset($_SESSION['error']);
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Komunitas Embun Pagi</title>
  <link rel="icon" type="image/x-icon" href="../assets/images/logo-embun.png"/>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
  <div class="col-md-4 col-md-offset-4 panel panel-default" style="margin-top: 100px;">
    <form action="ceklogin.php" method="post" class="panel-body">
      <h3 style="text-align: center;">Please sign in</h3>
      <?php echo $error;?>
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" class="form-control" placeholder="Username"\>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="pass" class="form-control" placeholder="Password"\>
      </div>
      <button class="btn btn-primary" type="submit">Login</button>
    </form>
  </div>
</body>
</html>