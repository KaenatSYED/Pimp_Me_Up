const createSlider = () => {
  const slider = document.querySelector('.slider');

  slider.innerHTML = `
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="img/vetements_promo.png" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="img/bijoux_promo.png"  style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="img/coiffure_promo.png"  style="width:100%">
    </div>
  </div>
  <br>

  <div class="slideshow-dot" style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
`;
}

createSlider();
