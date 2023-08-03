<script>
    // Function to hide the error message after 3 seconds
    function hideErrorMessage() {
      var errorMessage = document.getElementById('error-message');
      if (errorMessage) {
        setTimeout(function() {
          errorMessage.style.display = 'none';
        }, 3000); // 3 seconds
      }
    }

    // Call the function on page load
    window.onload = function() {
      hideErrorMessage();
    };
  </script>
   <style>
    /* Add the CSS style to change the color of the error message to red */
    .error-message {
      color: red;
    }
    </style>
<?php
include('config.php'); 
include ('footerheader.php');
$error_message = '';
if (isset($_SESSION['error'])) {
  $error_message = $_SESSION['error'];
  unset($_SESSION['error']);
}
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
          <div class="error-message" id="error-message">
              <?php
              // Display the error message if set
              echo $error_message;
              ?>
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