const createNav = () => {
  const nav = document.querySelector('.navbar');

  nav.innerHTML = `
  <div class="nav">
    <a class="navbar-brand" href="#"> <img src="img/black_logo.png" class="brand-logo" alt="logo"></a>
    <a class="navbar-title" href="#"> <h1 class="brand-title"> Pimp Me Up</h1></a>
    <div class="nav-items">
        <div class="search">
          <input  type="text" class="searchInput" name="find" placeholder="search product">
          <button type="submit" class="searchBtn">
              <img src="img/search.png" alt="logo">
          </button>
        </div>
   </div>
   <div class ="nav-menu-items"  style="width:100%">
    <div class ="nav-menu-items-center">
     <ul class="menu-containers">
            <li class="menu menu1"><a href=# class="category">Boutique</a></li>
            <li class="menu dropdown1"><a href=# class="category">Vêtements</a>
                <ul class="dropdown">
                  <li class="dropdown-sub-menu1"><a href="#">Robes</a></li>
                  <li class="dropdown-sub-menu2"><a href="#">Jupes</a></li>
                  <li class="dropdown-sub-menu3"><a href="#">Pantalons</a></li>
                  <li class="dropdown-sub-menu4"><a href="#">Foulards</a></li>
                </ul>
             </li>
            <li class="menu dropdown2"><a href=# class="category">Accessoires</a>
              <ul class="dropdown">
                <li class="dropdown-sub-menu1"><a href="#">Bijoux</a></li>
                <li class="dropdown-sub-menu2"><a href="#">Sacs</a></li>
                <li class="dropdown-sub-menu3"><a href="#">Chaussures</a></li>
              </ul>
            </li>
            <li class="menu dropdown3"><a href=# class="category">Services</a>
              <ul class="dropdown">
                <li class="dropdown-sub-menu1"><a href="#">Coiffure</a></li>
                <li class="dropdown-sub-menu2"><a href="#">Maquillage</a></li>
                <li class="dropdown-sub-menu3"><a href="#">Soin</a></li>
                <li class="dropdown-sub-menu4"><a href="#">Bien-Être</a></li>
              </ul>
            </li>
            <li class="menu menu2"><a href=# class="category">Nous</a></li>
            <li class="menu menu3">
             <a href="Choix.html">
              <img src="img/user.png" alt="user"></a>
            </li>
            <li class="menu menu4">
             <a href="html/panier.html"> <img src="img/cart.png" alt="panier"></a>
             <span class="nb-cart-items">0</span>
           </li>
           <li class="menu menu5">
            <a href="#"> <img src="img/calendar.png" alt="rdv"></a>
            <span class="nb-cart-items">0</span>
          </li>
        </ul>
    </div>
   </div>
  </div>
`;
}
function rating(params) {
  var today = new Date(params.created_at);
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = dd + '/' + mm+ '/' + yyyy;
  const comment = document.querySelector('.comment-section');
  comment.innerHTML=`<div class="d-flex justify-content-between align-items-center">
  <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/o5uMfKo.jpg" class="rounded-circle profile-image">
      <div class="d-flex flex-column ml-1 comment-profile">
          <div class="comment-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="username">Lori Benneth</span>
          <p>${params.comment}</p>
      </div>
  </div>
  <div class="date"> <span class="text-muted">${today}</span> </div>
</div>
<hr>
`
}

createNav();
