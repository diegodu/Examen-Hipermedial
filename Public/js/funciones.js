
function buscarCategoria(element) {

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest()
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("categorias-lista").innerHTML = this.responseText
        }
    };
    xmlhttp.open("GET", "../Controlador/categoria.php?categoria=" + element.textContent, true)
    xmlhttp.send()
    
}
function like() {
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest()
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("NotificaCarrito").innerHTML = this.responseText
        }
    };
    xmlhttp.open("GET", "../Controlador/agregar_carrito.php?codigoproducto=" + codigoL, true)
    xmlhttp.send()
}

function agregarCarrito(codigoL){
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest()
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("NotificaCarrito").innerHTML = this.responseText
        }
    };
    xmlhttp.open("GET", "../Controlador/agregar_carrito.php?codigoproducto=" + codigoL, true)
    xmlhttp.send()
}

function actualizarCarrito(codCarrito, element) {

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest()
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("carritoDetalle").innerHTML = this.responseText
        }
    };
    xmlhttp.open("GET", "../Controlador/actuallizarCarrito.php?codCarrito=" + codCarrito+"&carritoCantidad="+element.value, true)
    xmlhttp.send()
}

function realizarPedido(){
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest()
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("carritoDetalle").innerHTML = this.responseText
        }
    };
    xmlhttp.open("GET", "../Controlador/agregarPedido.php", true)
    xmlhttp.send()
}


function darLike(element, codProducto){ 
    if(element.classList.contains("far")){
        element.classList.remove("far");
        element.classList.add("fas");
    }else{
        element.classList.add("far");
        element.classList.remove("fas");
    }
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest()
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("calificacionLibro").innerHTML = this.responseText
        }
    };
    xmlhttp.open("GET", "../Controlador/calificar.php?codProducto="+codProducto, true)
    xmlhttp.send()
}

function comentar(codProducto){
    let comentario = document.getElementById('comentario')
    

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest()
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("comentarioslibro").innerHTML = this.responseText
            comentario.value = ""
        }
    };
    xmlhttp.open("GET", "../Controlador/comentar.php?codProducto="+codProducto+"&comentario="+comentario.value, true)
    xmlhttp.send()
}
function buscarlibro() {
    let buscador = document.getElementById('buscador')
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest()
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenedor-libros").innerHTML = this.responseText
            comentario.value = ""
        }
    };
    xmlhttp.open("GET", "../Controlador/buscar.php?texto="+buscador.value, true)
    xmlhttp.send()
    
}
