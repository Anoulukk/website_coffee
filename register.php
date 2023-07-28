<?php
//include('footerheader.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <script src="./bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Eleventh navbar example">
      <div class="container-sm">
        <a class="navbar-brand" href="index.html">
          <img src="./img/158 1.svg" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09"
          aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="btn" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="btn" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="btn" href="#login-container">service</a>
            </li>
            <li class="nav-item">
              <a class="btn" href="#login-container">cotact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Coffee</a></li>
                <li><a class="dropdown-item" href="#">cokkies</a></li>
                <li><a class="dropdown-item" href="#">Cakes</a></li>
              </ul>
            </li>
          </ul>
  
  
  
        </div>
        <form action="" method="post" class="navbar-nav me-auto mb-2 mb-lg-0">
          <div class="col">
            <input class="form-control col" type="text" placeholder="Search Menu" aria-label="Search" name="txt_search">
          </div>
          <div class="col">
            <input type="submit" value="search" name="btn" class="btn btn-primary mb-3 ">
          </div>
          <div class="cart">
            <a href="cart.html"><img src="./img/shopping-cart 1.svg" width="80%" alt=""></a>
          </div>
          <div class="btn"><a href="login.php"><button type="button" class="btn btn-primary">Login</button></a></div>
        </form>
      </div>
    </nav>
  </header>
<body>
    
<div class="container-sm" id="register-container">
    <div class="register-container">
        <div class="row text-center">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <h5>Register</h5>

                <form id="form" class="form">
                    <div class="form-control">
                        <label for="username">username</label>
                        <input type="" name="" id="username" placeholder="Enter your username">
                        <small>eror message</small>
                    </div>
                    <div class="form-control ">
                        <label for="Email">Email</label>
                        <input type="" name="" id="email" placeholder="Enter your Email">
                        <small>eror message</small>
                    </div>
                    <div class="form-control ">
                        <label for="password">password</label>
                        <input type="" name="" id="password" placeholder="Enter your password">
                        <small>eror message</small>
                    </div>
                    <div class="form-control ">
                        <label for="confirm password">confirm password</label>
                        <input type="" name="" id="re-password" placeholder="confirm password">
                        <small>eror message</small>

                    </div>
                    <button type="submit">register</button>

                </form>
            </div>

        </div>
    </div>
</div>
<script src="script.js"></script>

</body>
</html>