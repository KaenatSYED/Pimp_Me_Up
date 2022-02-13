
const createProduitCategorie = () => {
  const produits = document.querySelector('.produit-par-theme');

  produits.innerHTML = `
  <section class="product">
      <h2 class="product-category">Vêtements</h2>
      <button class="pre-btn"><img src="../img/arrow.png" alt=""></button>
      <button class="nxt-btn"><img src="../img/arrow.png" alt=""></button>
      <div class="product-container">
          <div class="product-card">
              <div class="product-image"> <span class="discount-tag">-50% promo</span> <a href="../html/detail.html"> <img src="../img/vetements2.jpg" class="product-thumb" alt=""></a> <button class="card-btn">Ajouter aux favoris <i class='bx bx-heart bx-tada'></i><button> </div>
              <div class="product-info">
                  <h2 class="product-brand">Magasin</h2>
                  <p class="product-short-des">Lorem ipsum dolor sit amet..</p> <span class="price">20 €</span> <span class="actual-price">59,99 €</span>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image"> <span class="discount-tag">-20% promo</span> <img src="../img/robe2.jpg" class="product-thumb" alt=""> <button class="card-btn">Ajouter aux favoris <i class='bx bx-heart bx-tada'></i><button> </div>
              <div class="product-info">
                  <h2 class="product-brand">Magasin</h2>
                  <p class="product-short-des">Lorem ipsum dolor sit amet..</p> <span class="price">20 €</span> <span class="actual-price">59,99 €</span>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image"> <span class="discount-tag">-20% promo</span> <img src="../img/robe3.jpg" class="product-thumb" alt=""> <button class="card-btn">Ajouter aux favoris <i class='bx bx-heart bx-tada'></i><button> </div>
              <div class="product-info">
                  <h2 class="product-brand">Magasin</h2>
                  <p class="product-short-des">Lorem ipsum dolor sit amet..</p> <span class="price">20 €</span> <span class="actual-price">59,99 €</span>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image"> <span class="discount-tag">-20% promo</span> <img src="../img/kimono.jpg" class="product-thumb" alt=""> <button class="card-btn">Ajouter aux favoris <i class='bx bx-heart bx-tada'></i><button> </div>
              <div class="product-info">
                  <h2 class="product-brand">Magasin</h2>
                  <p class="product-short-des">Lorem ipsum dolor sit amet..</p> <span class="price">20 €</span> <span class="actual-price">59,99 €</span>
              </div>
          </div>
          <div class="product-card" id="fade-img">
              <div class="product-image"> <span class="discount-tag">-20% promo</span> <img src="../img/robe4.jpg" class="product-thumb" alt=""> <button class="card-btn">Ajouter aux favoris <i class='bx bx-heart bx-tada'></i><button> </div>
              <div class="product-info">
                  <h2 class="product-brand">Magasin</h2>
                  <p class="product-short-des">Lorem ipsum dolor sit amet..</p> <span class="price">20 €</span> <span class="actual-price">59,99 €</span>
              </div>
          </div>
      </div>
  </section>
  <section class="product">
      <h2 class="product-category">Bijoux</h2>
      <button class="pre-btn"><img src="../img/arrow.png" alt=""></button>
      <button class="nxt-btn"><img src="../img/arrow.png" alt=""></button>
      <div class="product-container">
          <div class="product-card">
              <div class="product-image"> <span class="discount-tag">-50% promo</span> <a href="../html/detail.html"> <img src="../img/bijou3.jpg" class="product-thumb" alt=""> </a> <button class="card-btn">Ajouter aux favoris <i class='bx bx-heart bx-tada'></i><button> </div>
              <div class="product-info">
                  <h2 class="product-brand">Magasin</h2>
                  <p class="product-short-des">Lorem ipsum dolor sit amet..</p> <span class="price">20 €</span> <span class="actual-price">59,99 €</span>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image"> <span class="discount-tag">-20% promo</span> <img src="../img/bijou1.jpg" class="product-thumb" alt=""> <button class="card-btn">Ajouter aux favoris <i class='bx bx-heart bx-tada'></i><button> </div>
              <div class="product-info">
                  <h2 class="product-brand">Magasin</h2>
                  <p class="product-short-des">Lorem ipsum dolor sit amet..</p> <span class="price">20 €</span> <span class="actual-price">59,99 €</span>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image"> <span class="discount-tag">-20% promo</span> <img src="../img/bijou2.jpg" class="product-thumb" alt=""> <button class="card-btn">Ajouter aux favoris <i class='bx bx-heart bx-tada'></i><button> </div>
              <div class="product-info">
                  <h2 class="product-brand">Magasin</h2>
                  <p class="product-short-des">Lorem ipsum dolor sit amet..</p> <span class="price">20 €</span> <span class="actual-price">59,99 €</span>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image"> <span class="discount-tag">-20% promo</span> <img src="../img/Bijoux.jpg" class="product-thumb" alt=""> <button class="card-btn">Ajouter aux favoris <i class='bx bx-heart bx-tada'></i><button> </div>
              <div class="product-info">
                  <h2 class="product-brand">Magasin</h2>
                  <p class="product-short-des">Lorem ipsum dolor sit amet..</p> <span class="price">20 €</span> <span class="actual-price">59,99 €</span>
              </div>
          </div>
          <div class="product-card" id="fade-img">
              <div class="product-image"> <span class="discount-tag">-20% promo</span> <img  src="../img/bijou3.jpg" class="product-thumb" alt=""> <button class="card-btn">Ajouter aux favoris <i class='bx bx-heart bx-tada'></i><button> </div>
              <div class="product-info">
                  <h2 class="product-brand">Magasin</h2>
                  <p class="product-short-des">Lorem ipsum dolor sit amet..</p> <span class="price">20 €</span> <span class="actual-price">59,99 €</span>
              </div>
          </div>
      </div>
  </section>
`;
}

createProduitCategorie();
