//---Variable que mantiene el estado visoble del carrito//
var cartVisible = false;

//Esperamos a que tosdos lo elementos de la pagina  se carguen para continuar con el scrip//
if(document.readyState=='loading'){
    document.addEventListener('DOMContentLoaded' ,ready)
}else{
    ready();
}

document.getElementsByClassName('btn-pagar')[0].addEventListener('click', pagarClickend);

//Funcionalidad  a los botones eliminar carrito//

function ready(){
    var botonesEliminarItem = document.getElementsByClassName('btn-eliminar');
    for(var i = 0; i < botonesEliminarItem.length;i++){
        var button = botonesEliminarItem[i];
        button.addEventListener('click', eliminarItemCart)
    }

    //Agg funcionalidad al boton sumar cantidad //
    var botonesSumarCantidad = document.getElementsByClassName('sumar-cantidad');
    for(var i = 0; i < botonesSumarCantidad.length;i++){
        var button = botonesSumarCantidad[i];
        button.addEventListener('click', sumarCantidad);
    }

    //Agg funcionalidad al boton restar cantidad //

    var botonesRestarCantidad = document.getElementsByClassName('restar-cantidad');
    for(var i = 0; i < botonesRestarCantidad.length;i++){
        var button = botonesRestarCantidad[i];
        button.addEventListener('click', restarCantidad);
    }
    console.log("Aqui")

    //Agg funcionalidad a los botones para agg al cart //
    var botonesAgregarAlCart =document.getElementsByClassName('boton-item');
    for(var i = 0; i < botonesAgregarAlCart.length;i++){
        var button = botonesAgregarAlCart [i];
        button.addEventListener('click' , AgregarAlCartClikend);
        
    }
}

//Elimino el item seleccionado en el cart//
function eliminarItemCart(event){
    var buttonClickend = event.target;
    buttonClickend.parentElement.parentElement.remove();

    //Actualizar el valor del total cuado se elimina un item//
    actualizarTotalcart();

//La siguiente funcion ()  si hay elementos en el cart una vez que se elimino 
//Si no hay debo ocultar el cart 
    ocultarCart();
}
 
function actualizarTotalcart() {
    var cartContenedor = document.getElementsByClassName('cart') [0];
    var cartItems = cartContenedor.getElementsByClassName('cart-item');
    var total = 0 ;

    //Recorremos cada elemento del cart para actualizar el total //
    // Convertimos los int y los simbolos ($) (.) en string  para poder sumar los valores //
    for (var i = 0; i < cartItems.length;i++){
        var item = cartItems [i];
        var precioElemento = item.getElementsByClassName('cart-item-precio')[0];
        var precio = parseFloat(precioElemento.innerText.replace('$', '').replace('.',''));
        var cantidadItem = item.getElementsByClassName('cart-item-cantidad')[0];
        var cantidad = cantidadItem.value;
        total = total + (precio * cantidad);
    }
    total = Math.round(total*100)/100;
    document.getElementsByClassName('cart-precio-total')[0].innerText = '$' +  total.toLocaleString("es") + ',00';
}

function ocultarCart(){
    var cartItems = document.getElementsByClassName('cart-items') [0];
    if(cartItems.childElementCount==0){
        var cart = document.getElementsByClassName('cart')[0];
        cart.style.marginRight = '-100%';
        cart.style.opacity = '0';
        cartVisible = false;
//Ahora maximixo el contenedor de los elementos//
 var items = document.getElementsByClassName('contenedor-items') [0];
 items.style.width = '100%';
    }
}

//Aumento la cantidad de los elementos seleccionados

function sumarCantidad(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    var cantidadActual = selector.getElementsByClassName('cart-item-cantidad')[0].value;
    cantidadActual++;
    selector.getElementsByClassName('cart-item-cantidad')[0].value = cantidadActual;

    //Actulizar el total//
    actualizarTotalcart();
}

//Restar la cantidad de los elementos seleccionado//
function restarCantidad(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    var cantidadActual = selector.getElementsByClassName('cart-item-cantidad')[0].value;
    cantidadActual--;
    
    //Controles que no sea menos que 1 //
    if(cantidadActual>=1){
    selector.getElementsByClassName('cart-item-cantidad')[0].value = cantidadActual;
    actualizarTotalcart();
    }
}

function AgregarAlCartClikend(event){
    var button = event.target;
    var item = button.parentElement;
    var titulo = item.getElementsByClassName('titulo-item')[0].innerText;
    var precio = item.getElementsByClassName ('precio-item')[0].innerText;
    var imagenSrc = item.getElementsByClassName('img-item')[0].src;

    //La siguiente funcion agg el elemento al carrito, le mando por parametros los valores //
    agregarItemAlCart(titulo, precio, imagenSrc);

    hacerVisibleCart();
}

function agregarItemAlCart(titulo, precio, imagenSrc){
    var item = document.createElement('div');
    item.classList.add = 'item';
    var itemsCart = document.getElementsByClassName('cart-items')[0];

    // Vamos a controlar que le item que este ingresqando no se encutre ya en el cart//
    var nombreItemsCart = itemsCart.getElementsByClassName('cart-item-titulo');
    for(var i = 0; i < nombreItemsCart.length;i++){
        if(nombreItemsCart[i].innerText==titulo){
            alert("La PELI ya se encuentra en el carrito");
            return;
        }
    }

    //Funcionalidad para agregar nuevas PELIS al cart //
    var itemCartContenido =`
        <div class="cart-item">
                <img src="${imagenSrc}" alt="" width="80px">
            <div class="cart-item-detalles">
                    <span class="cart-item-titulo">${titulo}</span>
                <div class="selector-cantidad">
                    <i class="fa-solid fa-minus restar-cantidad"></i>
                    <input type="text" value="1" class="cart-item-cantidad" disabled > 
                    <i class="fa-solid fa-plus sumar-cantidad"></i>
                </div>
                <span class="cart-item-precio">${precio}</span>
            </div>
                <span class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
                </span>
        </div>
    `
    item.innerHTML = itemCartContenido;
    itemsCart.append(item);

    // Funcionalidad para eliminar la peli //
    item.getElementsByClassName('btn-eliminar')[0].addEventListener ('click', eliminarItemCart);

    var botonSumarCantidad = item.getElementsByClassName('sumar-cantidad')[0];
    botonSumarCantidad.addEventListener('click', sumarCantidad);

    var botonRestarCantidad = item.getElementsByClassName('restar-cantidad')[0];
    botonRestarCantidad.addEventListener('click', restarCantidad);

}

function pagarClickend(event){
    alert("Gracias por su compra");
    var cartItems = document.getElementsByClassName ('cart-items')[0];
    while(cartItems.hasChildNodes()){
        cartItems.removeChild(cartItems.firstChild);
    }
    actualizarTotalcart();

    ocultarCart();
}

function hacerVisibleCart(){
    cartVisible = true;
    var cart = document.getElementsByClassName ('cart')[0];
    cart.style.marginRight = '0';
    cart.style.opacity = '1';

    var items = document.getElementsByClassName('contenedor-items')[0];
    items.style.width = '60%';

}





