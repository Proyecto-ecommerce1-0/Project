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

/**** ACORDEOOON ****/

const acordeonButtons = document.querySelectorAll('.acordeon-button');

acordeonButtons.forEach(button => {

  button.addEventListener("click", function(){
    const icon = this.querySelector('i');
    if (icon.classList.contains('fa-plus')) {
       icon.classList.remove('fa-plus');
       icon.classList.add('fa-minus');
      } else {
        icon.classList.remove('fa-minus');
        icon.classList.add('fa-plus');
      }

      this.classList.toggle("active");
      const content = this.nextElementSibling;
     
      if(content.style.height){
        content.style.height = null;
        content.style.padding = '0px';

      } else {
        const padding = 20;
        content. style.height = 
           content.scrollHeight +  padding * 2 + 'px';
        content.style.padding =  `${padding}px`;        

      }
  });
});

/**** CARD PAYMENT ****/

const valueColor = document.querySelector ('#value-color');
const colorButtons = document.querySelectorAll('.container-color');

colorButtons.forEach(button => {
   button.addEventListener ("click", e => {
      colorButtons.forEach(btn => btn.classList.remove
        ('selected'));
        e.currentTarget.classList.add('selected');
        const color = e.target.dataset.color;
        valueColor.innerText = color;
   });
});

const btnIncrement = document.querySelector ('#btn-increment');
const btnDecrement = document.querySelector ('#btn-decrement');
const countProduct = document.querySelector ('#count-product');
const totalProductsCart = document.querySelector(
   '.count-product-cart'
);
const btnAddToCart = document.querySelector('.btn-add-to-cart');
const priceProduct = document.querySelector ('.price');
const quantityProduct = document.querySelector
('#quantity-product');
const totalPrice = document.querySelector('.price-total');
const totalValue = document
.querySelector(".value")
.querySelector('p');



const updateButtonState = () => {
if (parseInt(countProduct.textContent) <= 1 ){
  btnDecrement.disabled = true;

} else {
  btnDecrement.disabled = false;
}

};

const updateValueQuantity = () => {
  let quantity = parseInt(countProduct.textContent)
  let price = parseInt(priceProduct.textContent.replace('$',
  ''));
  let total = `$${quantity * price}.00`;
  quantityProduct.textContent = quantity;
  totalValue.textContent = total;
  totalPrice.textContent = total;
};

/**** Event listener para incrementar ****/

btnIncrement.addEventListener('click', () => {
  countProduct.textContent = parseInt (countProduct.
    textContent) + 1;
    updateButtonState();
    updateValueQuantity();
});

btnDecrement.addEventListener('click', () => {
  countProduct.textContent = parseInt (countProduct.
  textContent) - 1;
  updateButtonState();
  updateValueQuantity();
});

btnAddToCart.addEventListener('click', () => {
  totalProductsCart.textContent = 
      parseInt(totalProductsCart.textContent) +
      parseInt(countProduct.textContent);
      countProduct.textContent = 1;
      updateButtonState();
      
});

/***** Actualiza el estado del boton de Decremento al cargar la pagina****/

updateButtonState ()


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

//button work

document
.getElementsByClassName('btn-buy')[0]
.addEventListener('click',buyButtonClicked);


//buy button

function buyButtonClicked(){
alert('Your Order is placed')

var cartContent = document.getElementsByClassName('cart-content')[0]
while (cartContent.hasChildNodes()){
  cartContent.removeChild(cartContent.firstChild);
}
updateTotal();
}

function removeCartItem(event){
  var buttonClicked = event.target
  buttonClicked.parentElement.remove()
  updateTotal();
}

//quantity changes

function quantityChanged(event){
  var input = event.target;
  if (isNaN(input.value)||input.value <= 0) {
    input.value = 1 ;
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
  cartsShoBox.classList.add('cart-box')
  var cartItems = document.getElementsByClassName('cart-content')[0]
  var cartItemsNames = cartItems.getElementsByClassName('cart-product-title')
  for (var i = 0; i < cartItemsName.length; i++){
    alert ('Ya has añadido este artículo en el carrito')
    return;
  }
  
}

var cartBoxContent = `

<img src="${productImg}" alt="" class="cart-img">
<div class="detail-box">
   <div class="cart-product-title">${title}</div>
   <div class="cart-price">${price}</div>
   <input type="number" value="1" class="cart-quantity">
</div>

   <!--Remover-->
<i class="fa-solid fa-trash cart-remove"></i> `

cartShopBox.innerHTML = cartBoxContent
cartItems.append(cartShopBox);
cartShopBox.getElementsByClassName('cart-remove')[0]
.addEventListener('click', removeCartItem);
cartShopBox.getElementsByClassName('cart-quantity')[0]
.addEventListener('change', quantityChanged);



//Funcion del Total//

function updateTotal(){
  var cartContent = document.getElementsByClassName('cart-content')[0]
  var cartBoxes = cartContent.getElementsByClassName('cart-box');
  var total = 0;
  for (var i = 0; i  < cartBoxes.length; i++){
    var cartBox = cartBoxes[i];
    var priceElement = cartBox.getElementsByClassName('cart-price')[0];
    var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
    var price = parseFloat(priceElement.innerText.replace("$",""));
    var quantity = quantityElement.value;
    total= total + (price * quantity);
  }
    //if price contain
    total = Math.round(total * 100) / 100;

    document.getElementsByClassName('total-price')[0].innerText = '$' + total;
  
}





