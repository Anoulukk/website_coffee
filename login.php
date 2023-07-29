
<?php include ('footerheader.php')?>
<body>
     <!-- login -->
     <div class="container-sm">
      <div class="login-container" id="login-container">
        <div class="row text-center">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <h5>Login</h5>
            <form id="login-form" class="form">
            <div class="form-control">
              <input type="text" name="username" id="login-username" required
                placeholder="Username"></div>
                <div class="form-control">
              <input type="password" name="password" id="login-password" class="form-control" required placeholder="Password">
              </div><br>
              <input type="submit" name="submit" value="login" class="btn btn-primary">
              <br>
              <a href="register.php">Don't have an account? Sign up</a>
            </form>
            <br>
          </div>
        </div>
      </div>
    </div>
</body>
<script src="script.js"></script>

</html>