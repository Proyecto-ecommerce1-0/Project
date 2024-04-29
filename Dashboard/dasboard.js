
const productoArray = [
    {
         id: "libreta-001",
         titulo: "6 Pack Cuaderno",
         Imagen: "./img/libreta01/.jpg",
         categoria: {
            nombre: "libreta",
            id: "libreta",

        },
precio: 7,99

     }

];

 const contenedorProductos = document.querySelector("#contenedor-productos");


function cargarProductos() {  
   Productos.forEach(producto => {

        const div = document.createElement("div");
        div.classList.add("producto");
        div.innerHTML = `
             <img class="producto-imagen" src="${producto.imagen}" alt="${producto.titulo}">
             <div class="producto-detalles">
                <h3 class="producto-titulo">${producto.titulo}</h3>
                <p class="producto-precio">$${producto.precio}</p>
                <button  class="producto-agregar id="${producto.id}">Agregar</button>
             </div>    
         `;

         contenedorProductos.append(div);
    })

}

cargarProductos();

