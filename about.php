<title>Document</title>
<?php include('footerheader.php'); 
if (isset($_POST['btn'])) {
  $data = $_POST['txt_search'];
  header("location:search.php?keyword=$data");
}?>

</head>

<body>
  
  <div class="card text-center">
    <div class="card-header">
      about Us
    </div>
    <div class="card-body">
      <h5 class="card-title">About Us</h5>
      <div class="container text-center">
  <div class="row">
    <div class="col">
    
    </div>
    <div class="col">
    Thank you for your interest in Cafe Coffee Day. We are glad to expand our existing (Company owned or company operated) cafes. However, We do NOT franchise.We would be glad to partner with you, if you own a commercial or commercially converted/convertible retail space on a rental/revenue share basis with the following specifications:
1) Retail Space Area: 1000 - 1500Sqft (Ground Floor)
2) Minimum Frontage: 25 running feet
3) Ample Parking space
If you meet our specifications mentioned above, please write to us with the following (mandatory) details and we?ll get back to you soon.
a. Name(s) of one or all the owners of the retail space.
b. Postal Residential Address, Contact Numbers and email id of t   he owner/owners
c. Postal Address of the Retail Space
d. Retail Space Area (square feet)
e. Frontage of the Retail Space
f. Photographs of your location
g. Demographics of the catchment area 
    </div>
    <div class="col">
      
    </div>
  </div>
</div>
      
    </div>
    <div class="card-footer text-body-secondary">
    <a href="home.php" class="btn btn-custom">back</a>
    </div>
  </div>
  <script src="script.js"></script>

</body>
<script src="script.js"></script>
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