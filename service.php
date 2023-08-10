<?php include('footerheader.php');
// Handle search form submission
if (isset($_POST['btn'])) {
    $data = $_POST['txt_search'];
    header("location:search.php?keyword=$data");
}?>

<!-- Start of HTML body -->
<body>
<div class='container-fluid mx-auto mt-5 mb-5 col-12' style="text-align: center">
    <div class="hd">Why People Believe in Us</div>
    <p><small class="text-muted">Always render more and better service than <br />is expected of you, no matter what your ask may be.</small></p>
    <div class="row" style="justify-content: center">
        <!-- Card 1: We're Free -->
        <div class="card col-md-3 col-12">
            <div class="card-content">
                <div class="card-body">
                    <img class="img" src="https://i.imgur.com/S7FJza5.png" />
                    <div class="shadow"></div>
                    <div class="card-title"> We're Free </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted">We spent thousands of hours creating an algorithm that does this for you in seconds. We collect a small fee from the professional after they meet your</small> </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 2: We're Unbiased -->
        <div class="card col-md-3 col-12 ml-2">
            <div class="card-content">
                <div class="card-body">
                    <img class="img" src="https://i.imgur.com/xUWJuHB.png" />
                    <div class="card-title"> We're Unbiased </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted"> We don't accept ads from anyone. We use actual data to match you with the best person for each job </small> </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 3: We Guide you -->
        <div class="card col-md-3 col-12 ml-2">
            <div class="card-content">
                <div class="card-body">
                    <img class="img" src="https://i.imgur.com/rG3CGn3.png" /><br><br>
                    <div class="card-title"> We Guide you </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted">Buying or selling a home is often the largest transaction anyone does in their life. We guide you through the process so that you can be confident in reaching your dream outcome.</small> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer section -->
    <div class="ft">
        <p class="chk"><small class="text-muted">Thank you everyone for visiting our website</small></p>
        <a href="home.php" class="btn btn-primary">Back to Home</a>
    </div>
</div>
<!-- Include JavaScript -->
<script src="script.js"></script>
<footer>
<!-- Footer links -->
<li><a href="home.php">Home</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="service.php">Our Service</a></li>
<li><a href="coffee.php">Our Product</a></li>
<li><a href="contact.php">Contact Us</a></li>
<!-- Social media links -->
<li><a href="https://www.facebook.com/" i class="fa-brands fa-facebook fa-xl" ></i></a></li> 
<li><a href="https://www.tiktok.com/" i class="fa-brands fa-tiktok fa-xl" ></i></a></li>
<li><a href="https://www.instagram.com/" i class="fa-brands fa-instagram fa-xl"></i></a></li>
</ul>
</footer>
</html>
