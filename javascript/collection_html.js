const createCollections = () => {
  const collection = document.querySelector('.collection-category');

  collection.innerHTML = `
  <section class="collection-container">
    <a href="#" class="collection">
      <img src="../img/Bijoux.jpg" alt="">
      <button class="collection-title">Acessoires</button>
    </a>
    <a href="#" class="collection">
      <img src="../img/kimono.jpg" alt="">
      <button class="collection-title">Vêtements</button>
    </a>
    <a href="#" class="collection">
      <img src="../img/coiffure2.jpg" alt="">
      <button class="collection-title">Coiffure</button>
    </a>
    <a href="#" class="collection">
      <img src="../img/maquillage1.jpg" alt="">
      <button class="collection-title">Maquillage</button>
    </a>
  </section>
`;
}

createCollections();
