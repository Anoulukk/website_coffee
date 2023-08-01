<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
  <script src="./bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="coffee.php">Coffee</a></li>
              <li><a class="dropdown-item" href="cookie.php">cokkies</a></li>
              <li><a class="dropdown-item" href="cake.php">Cakes</a></li>
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
        <li class="nav-item">
          <a class="btn btn-primary mb-3" href="login.php">Login</a>
        </li>
      </form>
    </div>
  </nav>
</header>



<footer>
<li><a href="#">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Our Service</a></li>
<li><a href="#">Our Product</a></li>
<li><a href="#">Contact Us</a></li>

<li><a href="https://www.facebook.com/" i class="fa-brands fa-facebook fa-2xl" style="color: #1877f2;"></i></a></li> 
<li><a href="https://www.tiktok.com/"i class="fa-brands fa-tiktok fa-2xl" style="color: #000000;"></i></a></li>
<li><a href="https://www.instagram.com/"i class="fa-brands fa-instagram fa-2xl"></i></a></li>

</ul>
</footer>
</html>