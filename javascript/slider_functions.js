
var slideIndex = 0;

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 4 seconds
}
showSlides();

/*
const slide1 = document.querySelector("#glide1");
if (slide1){
  mew Glide(slide1, {
    type:"carousel",
    startAt:0,
    autoplay: 3000,
    gap: 0,
    hoverpause:true,
    perView:1,
    animationDuration:800,
    AnimationTimingFunc: "linear",
  }).mount()
}
*/
