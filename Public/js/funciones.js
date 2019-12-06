
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



































function darLike(corazon){ 
    document.getElementById("icono").scr;
}
