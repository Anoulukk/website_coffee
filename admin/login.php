<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <script src="../bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <title>login</title>
</head>
<body>
<div class="container "><br>
  <div class="row text-center">
    <div class="col-md-3">
      <h5>Login</h5>
      <form action="login_check.php" method="post">
        <input type="text" name="username" class="form-control" required placeholder="username">
        <input type="password" name="password" class="form-control" required placeholder="password">
       <?php
       if(isset($_SESSION['error'])){
        echo "<div class='text-danger'> ";
        echo $_SESSION['error'];
       }
       ?> <br>
        <input type="submit" name="submit" value="login" class="btn btn-primary">
      </form>
     
    </div>

  </div>

</div>

</body>
</html>