
<?php include('footerheader.php');
if (isset($_POST['btn'])) {
    $data = $_POST['txt_search'];
    header("location:search.php?keyword=$data");
}?>

<body>
<div class="card text-center">
    <div class="card-header">
      Contact Us
    </div>
    <div class="card-body">
      <div class="container text-center">
  <div class="row">
    <div class="col">
    <div class='container-fluid mx-auto mt-5 mb-5 col-12' style="text-align: center">
    <div class="row" style="justify-content: center">
        <div class="card col-md-3 col-12">
            <div class="card-content">
                <div class="card-body"> <a href="https://maps.apple.com/?ll=17.967629,102.643327&q=%E0%B8%AB%E0%B8%A1%E0%B8%B8%E0%B8%94%E0%B8%9B%E0%B8%B1%E0%B8%81&t=m"i class="fa-solid fa-location-dot fa-2xl"></i></a>
                
                    <div class="shadow"></div><br>
                    <div class="card-title"> Address </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted"></small> </p>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div>
<div class='container-fluid mx-auto mt-5 mb-5 col-12' style="text-align: center">
    <div class="row" style="justify-content: center">
        <div class="card col-md-3 col-12">
            <div class="card-content">
                <div class="card-body"> <i class="fa-regular fa-envelope fa-2xl"></i>
                    <div class="shadow"></div>
                    <div class="card-title"> Email </div>
    
                    <div class="card-subtitle">
                        <p> <small class="text-muted">owenwowwow@gmail.com</small> </p>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div>
<div class='container-fluid mx-auto mt-5 mb-5 col-12' style="text-align: center">
    <div class="row" style="justify-content: center">
        <div class="card col-md-3 col-12">
            <div class="card-content">
                <div class="card-body"> <i class="fa-solid fa-phone fa-2xl"></i>
                    <div class="shadow"></div>
                    <div class="card-title"> tel:</div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted">20 57896023</small> </p>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="col"><br>
    <h5 class="card-title">Send message</h5>
    <form class="row g-3">
    <div class="col-12">
    <label for="inputEmail4" class="form-label">Fullname</label>
    <input type="text" class="form-control" id="name"placeholder="Enter name"name="name">
  </div>
  <div class="col-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="email"placeholder="Enter your email"name="email">
  </div>
  
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Address"name="address">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Type of comment</label>
    <textarea name="message" id="message" cols="30" rows="10"class="form-control"placeholder="Type of comment"></textarea>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary"id="btna">Send now</button>
  </div>
</form>
    </div>
  </div>
</div>
      
    </div>
    <div class="card-footer text-body-secondary">
    <a href="home.php"button type="submit" class="btn btn-primary">Back page</button></a>
    </div>
  </div>
  <script src="script.js"></script>
</body>

<footer>
<li><a href="home.php">Home</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="service.php">Our Service</a></li>
<li><a href="coffee.php">Our Product</a></li>
<li><a href="contact.php">Contact Us</a></li>

<li><a href="https://www.facebook.com/" i class="fa-brands fa-facebook fa-xl" ></i></a></li> 
<li><a href="https://www.tiktok.com/"i class="fa-brands fa-tiktok fa-xl" ></i></a></li>
<li><a href="https://www.instagram.com/"i class="fa-brands fa-instagram fa-xl"></i></a></li>

</ul>
</footer>
</html>