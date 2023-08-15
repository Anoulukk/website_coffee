<?php 
  include ('config.php');
  include('footerheader.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body><br>
<div class="container-sm" id="register-container">
    <div class="register-container">
        <div class="row text-center">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <h5>Register</h5>

                <form id="form" class="form" method="POST">
                    <div class="form-control">
                        <label for="username">username</label>
                        <input type="" name="username" id="username" placeholder="Enter your username">
                        <small>eror message</small>
                    </div>
                    
                    <div class="form-control">
                        <label for="lastname">lastname</label>
                        <input type="" name="lastname" id="lastname" placeholder="Enter your lastname">
                        <small>eror message</small>
                    </div>
                    <div class="form-control ">
                        <label for="Email">Email</label>
                        <input type="" name="email" id="email" placeholder="Enter your Email">
                        <small>eror message</small>
                    </div>
                    <div class="form-control ">
                        <label for="password">password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                        <small>eror message</small> 
                    </div>
                    <div class="form-control ">
                        <label for="confirm password">confirm password</label>
                        <input type="password" name="re-password" id="re-password" placeholder="confirm password">
                        <small>eror message</small>

                    </div>

                    <button type="submit" name="submit" value="register" class="btn btn-outline-primary">register</button>

                    

                </form>

            </div>

        </div>
    </div>
</div>
<script src="script.js"></script>
<script src="script1.js"></script>

</body>
</html>
