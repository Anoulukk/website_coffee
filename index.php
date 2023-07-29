
<!-- header -->
<?php include('footerheader.php');?>

<body>

  <!-- login -->
  <div class="container-sm">
    <div class="login-container" id="login-container">
      <div class="row text-center">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h5>Login</h5>
          <form id="login-form">
            <input type="text" name="username" id="login-username" class="input1" required
              placeholder="Username"><br><br>
            <input type="password" name="password" id="login-password" class="input1" required placeholder="Password">
            <br><br>
            <input type="submit" name="submit" value="login" class="btn btn-primary">
            <br>
            <p onclick="showRegisterContainer()">Don't have an account? Sign up</p>
          </form>
          <br>
        </div>
      </div>
    </div>
  </div>
  <!-- register -->
  <div class="container-sm" style="display: none;" id="register-container">
    <div class="register-container">
      <div class="row text-center">
        <div class="col-md-3"></div>

        <div class="col-md-6">
          <h5>Register</h5><br>

          <form id="signup-form">
            <input type="text" name="username" id="username" class="input1" required placeholder="Username"><br><br>
            <input type="text" name="email" id="email" class="input1" required placeholder="Email"><br><br>
            <input type="password" name="password" id="password" class="input1" required placeholder="Password"><br><br>
            <input type="password" name="password" id="repassword" class="input1" required
              placeholder="re-Password"><br><br>

            <input type="submit" name="submit" value="register" class="btn btn-primary">
            <br><br>
            <p onclick="redirectToLogin()">Already have an account? Login</p>
          </form>

        </div>
      </div>
    </div>

  </div>
  <!-- footer -->
  <script src="script.js"></script>
</body>

</html>