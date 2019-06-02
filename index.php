<?php require('header.php'); ?>

<!--<div class="containerb">-->

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlidesb fadeb">
    <div class="numbertextb">1 / 3</div>
    <img src="images/img1.jpg" style="width:100%">
    <div class="textb">Ponete en contacto con los mejores profesionales</div>
  </div>

  <div class="mySlidesb fadeb">
    <div class="numbertextb">2 / 3</div>
    <img src="images/img2.jpg" style="width:100%">
    <div class="textb">Una idea innovadora para tiempos competitivos</div>
  </div>

  <div class="mySlidesb fadeb">
    <div class="numbertextb">3 / 3</div>
    <img src="images/img3.jpg" style="width:100%">
    <div class="textb">Avalado por la sociedad argentina de adoradores de Bill Gates</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prevb" onclick="plusSlides(-1)">&#10094;</a>
  <a class="nextb" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dotb" onclick="currentSlide(1)"></span>
  <span class="dotb" onclick="currentSlide(2)"></span>
  <span class="dotb" onclick="currentSlide(3)"></span>
</div> 

<br><br>

<section class="containerb">
	<article class="cuadrito">
		<h3><b>Nuestro Trabajo</b></h3>
		<p>Poner en contacto a los mejores profesionales del rubro y cooordinarlos para llevar a cabo proyectos eficientemente.</p>
		<p><a href="#">Ver mas</a></p>
	</article>
	<article class="cuadrito">
		<h3><b>Equipo</b></h3>
		<p>Somos un grupo de profesionales de las ciencias informáticas con aspiraciones de dominar el mundo comenzando por el rubro inmuebles.</p>
		<p><a href="#">Ver mas</a></p>
	</article>
	<article class="cuadrito">
		<h3><b>Blog</b></h3>
		<p>Podés seguirnos en Facebook e Instagram (@construworld)</p>
		<p><a href="#">Ver mas</a></p>
	</article>
	<article class="cuadrito">
		<h3><b>Algo más</b></h3>
		<p>Podés comprar y vender materiales, obtener asesoramiento legal y donarnos inmuebles o porcentajes de los mismos, así no laburamos más.</p>
		<p><a href="#">Ver más</a></p>
	</article>
</section>
<!--</div>-->
<script>
		var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlidesb");
  var dots = document.getElementsByClassName("dotb");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 
	</script>
	
<?php require('footer.php'); ?>
