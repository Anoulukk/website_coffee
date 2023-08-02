
<?php
include('config.php'); 
include ('footerheader.php');
session_start();

?>
<body>
     <!-- login -->
     <div class="container-sm">
      <div class="login-container" id="login-container">
        <div class="row text-center">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <h5>Login</h5>
            <form action="login_check.php"  method="post">
              <div class="form-control">
        <input type="text" name="username" class="form-control" required placeholder="username">
              </div>
              <div class="form-control">
        <input type="password" name="password" class="form-control" required placeholder="password">
          </div>
        <input type="submit" name="submit" value="login" class="btn btn-primary">
      </form>
              <a href="register.php">Don't have an account? Sign up</a>
   
            <br>
          </div>
        </div>
      </div>
    </div>
</body>

</html>