
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
  <script src="./bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <a class="btn" href="home.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="btn" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="btn" href="service.php">service</a>
          </li>
          <li class="nav-item">
            <a class="btn" href="contact.php">cotact Us</a>
          </li>

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              product
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="coffee.php">Coffee</a></li>
              <li><a class="dropdown-item" href="cookie.php">Cookie</a></li>
              <li><a class="dropdown-item" href="cake.php">Cake</a></li>
            </ul>
          </div>
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