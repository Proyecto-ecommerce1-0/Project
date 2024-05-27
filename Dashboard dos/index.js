/*  *************** */
/*  MENU RESPONSIVE */
/*  ***************  */

let overlay = document.querySelector('#overlay');
let menuHamburger = document.querySelector('.menu-hamburger');
let menuResponsive = document.querySelector('.menu-responsive');
let menuClose = document.querySelector('.btn-close-responsive');

menuHamburger.addEventListener('click', () => {
  menuResponsive.classList.add('active');
  overlay.style.display = 'block' ;
  document.body.style.overflow = 'hidden';

});

menuClose.addEventListener("click", () => {
    menuResponsive.classList.remove('active');
    overlay.style.display = "none";
    document.body.style.overflow = 'auto';
});


/***************/
/*  CARRITO    */
/***************/

let cartIcon = document.querySelector('#cart-icon');
let cart = document.querySelector('.cart');
let closeCart = document.querySelector('#close-cart');

cartIcon.onclick = () => {
  cart.classList.add("active");
};

closeCart.onclick = () => {
  cart.classList.remove("active");
};

            //Informacion Carrito//

if(document.readyState == 'loading') {
  document.addEventListener('DOMContentLoaded', ready)
} else {
  ready();

}

//funcion de marcado//

function ready(){
  var reomveCartButtons = document.getElementsByClassName('cart-remove')
  console.log (reomveCartButtons)
  for (var i = 0; i < reomveCartButtons.length; i++){
    var button = reomveCartButtons[i]
    button.addEventListener('click', removeCartItem)
  }
  //quantity
  var quantityInputs = document.getElementsByClassName('cart-quantity')
  for (var i = 0; i < quantityInputs.length; i++){
    var input = quantityInputs[i]
    input.addEventListener('change', quantityChanged);
  }

  //add to cart
  var addCart = document.getElementsByClassName('add-cart')
  for (var i = 0; i < addCart.length; i++){
    var button = addCart[i]
    button.addEventListener('click', addCartClicked);
  }
}



function removeCartItem(event){
  var buttonClicked = event.target
  buttonClicked.parentElement.remove()
  updateTotal();
}

//quantity changes

function quantityChanged(event){
  var input = event.target
  if (isNaN(input.value)||input.value <= 0) {
    input.value = 1 
  }
  updateTotal();
}
//Add To cart
function addCartClicked(event){
  var button = event.target;
  var shopProducts = button.parentElement;
  var title = shopProducts.getElementsByClassName('product-title')[0].innerText;
  var price = shopProducts.getElementsByClassName('price')[0].innerText;
  var productImg = shopProducts.getElementsByClassName('product-img')[0].src;

  addProductToCart(title, price, productImg);
  updateTotal();
}

function addProductToCart(title, price, productImg){
  var cartShoBox = document.createElement('div');
  //cartsShoBox.classList.add('cart-box')
  var cartItems = document.getElementsByClassName('card-producto-relacionado')[0]
  var cartItemsNames = cartItems.getElementsByClassName('product-title')
  for (var i = 0; i < cartItemsName.length; i++){
    alert ('Ya has añadido este artículo en el carrito')
    return;
  }
  
}

var cartBoxContent = `

<img src="/imagenes/negro04.jpg" alt="" class="cart-img">
<div class="detail-box">
   <div class="cart-product-title">libreta</div>
   <div class="cart-price">$2.04</div>
   <input type="number" value="1" class="cart-quantity">
</div>

   <!--Remover-->
<i class="fa-solid fa-trash cart-remove"></i> `

cartShopBox.innerHTML = cartBoxContent
cartItems.append(cartShopBox)
cartShopBox.getElementsByClassName('cart-remove')[0]
.addEventListener('click', removeCartItem)
cartShopBox.getElementsByClassName('cart-quantity')[0]
.addEventListener('change', removeCartItem)



//Funcion del Total//

function updateTotal(){
  var cartContent = document.getElementsByClassName('cart-content')[0]
  var cartBoxes = cartContent.getElementsByClassName('cart-box')
  var total = 0
  for (var i = 0; i  < cartBoxes.length; i++){
    var cartBox = cartBoxes[i]
    var priceElement = cartBox.getElementsByClassName('cart-price')[0]
    var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0]
    var quantity = quantityElement.value
    var price = parseFloat(priceElement.innerText.replace("$",""))
    total= total + (price * quantity);
    
    //if price contain
    total = Math.round(total * 100) / 100;

    document.getElementsByClassName('total-price')[0].innerText = '$' + total;
  }
}
