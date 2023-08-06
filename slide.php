<html>
<head>
<style>
.mySlides {display: none;}
img {vertical-align: middle;}
</style>
</head>
<body>


<div class="mySlides">
  <img src="img/1.png" style="width:100">
</div>

<div class="mySlides">
  <img src="img/2.png" style="width:100">
</div>

<div class="mySlides">
  <img src="img/3.png" style="width:100">
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>