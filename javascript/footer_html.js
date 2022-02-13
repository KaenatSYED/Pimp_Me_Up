const createFooter = () => {
  const footer = document.querySelector('.footer');

  footer.innerHTML = `
  <ul class="footer__nav">
    <li class="nav__item">
      <h4 class="nav__title">Aide et Contacts</h4>
        <ul class="nav__ul ">
          <li><a href="#">Securité et Confidentialité</a></li>
          <li><a href="#">Nous Contacter</a></li>
          <li><a href="#"> Questions & Réponses</a></li>
          <li><a href="#">Plan du site</a></li>
       </ul>
     </li>
     <li class="nav__item">
       <h4 class="nav__title">Conditions</h4>
         <ul class="nav__ul">
           <li><a href="#">Politique Cookies</a></li>
           <li><a href="#">Mentions légales</a></li>
           <li><a href="#">Conditions générales de vente internet</a></li>
           <li><a href="#">Protection de vos données personnelles</a></li>
        </ul>
    </li>
    <li class="nav__item">
      <h4 class="nav__title">En Savoir Plus</h4>
        <ul class="nav__ul">
          <li><a href="#">Proposer vos services</a></li>
          <li><a href="#">Nos engagements</a></li>
          <li><a href="../html/nous.html">A Propos de Nous</a></li>
        </ul>
    </li>
     <li class="nav__item">
       <h4 class="nav__title">Réseaux sociaux</h4>
        <div class="nav__ul">
            <span> <i class="bx bxl-facebook-square bx-md"></i> </span>
            <span> <i class="bx bxl-instagram-alt bx-md"></i> </span>
            <span> <i class="bx bxl-twitter bx-md"></i> </span>
            <span> <i class="bx bxl-pinterest bx-md"></i> </span>
        </div>


        <div class="nav__ul">
            <h4 class="nav__title">Télécharger notre application</h4>
            <span> <img src="img/apple_store_app_link.svg" alt="download_link"> </span>
            <span> <img src="img/google_store_app_link.png" alt="download_link"></span>

        </div>

     </li>
  </ul>
`;
}

createFooter();
