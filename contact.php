<?php include('footerheader.php');
// if user enter button search let send data to search.php
if (isset($_POST['btn'])) {
    $data = $_POST['txt_search'];
    header("location:search.php?keyword=$data");
}?>

<body>
        <!-- Card for the contact information -->
<div class="card text-center">
    <div class="card-header">
     <h4>Contact us</h4>
    </div>
    <div class="card-body">
      <div class="container text-center">
  <div class="row">
    <!-- Contact information sections -->
    <div class="col">
         <!-- Address section -->
    <div class='container-fluid mx-auto mt-5 mb-5 col-12' style="text-align: center">
    <div class="row" style="justify-content: center">
        <div class="card col-md-3 col-12">
            <div class="card-content">
                <div class="card-body"> <a href="https://maps.apple.com/?ll=17.967629,102.643327&q=%E0%B8%AB%E0%B8%A1%E0%B8%B8%E0%B8%94%E0%B8%9B%E0%B8%B1%E0%B8%81&t=m"i class="fa-solid fa-location-dot fa-2xl"></i></a>
                
                    <div class="shadow"></div><br>
                    <div class="card-title"> Address </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted">Asean mall</small> </p>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div>
<!-- Email section -->
<div class='container-fluid mx-auto mt-5 mb-5 col-12' style="text-align: center">
    <div class="row" style="justify-content: center">
        <div class="card col-md-3 col-12">
            <div class="card-content">
                <div class="card-body"><a href="https://mail.google.com/mail/u/0/#inbox"i class="fa-regular fa-envelope fa-2xl"></a></i>
                    <div class="shadow"></div><br>
                    <div class="card-title"> Email </div>
    
                    <div class="card-subtitle">
                        <p> <small class="text-muted">owenwowwow@gmail.com</small> </p>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div>
<!-- Email section -->
<div class='container-fluid mx-auto mt-5 mb-5 col-12' style="text-align: center">
    <div class="row" style="justify-content: center">
        <div class="card col-md-3 col-12">
            <div class="card-content">
                <div class="card-body"> <a href="https://web.whatsapp.com/"i class="fa-solid fa-phone fa-2xl"></i></a>
                    <div class="shadow"></div><br>
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
    <!-- Form to send a message -->
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
    <!-- button back to home page -->
    <div class="card-footer text-body-secondary">
    <a href="home.php"button type="submit" class="btn btn-primary">Back page</button></a>
    </div>
  </div>
  <script src="script.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
var btna=document.getElementById('btna');
btna.addEventListener('click',function(e){
    e.preventDefault()
    var name=document.getElementById('name').value;
    var email=document.getElementById('email').value;
    var address=document.getElementById('address').value;
    var message=document.getElementById('message').value;
    var body='name:'+name+'<br/> email:'+email+'<br/> address :'+address+'<br/> message:'+message;
    swal("Success", "send information to coffee shop success", "success");
    
    Email.send({
    Host : "smtp.elasticemail.com",
    Username : "tarcoinbit@gmail.com",
    Password : "725433D77FD5782421713333FA3E5E20B8B3",
    To : 'tinartiktok1@gmail.com',
    From :"tarcoinbit@gmail.com",
    Subject : address,
    Body : body
    
   
})
})
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Footer section  -->
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