
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
            document.getElementById("valorlike").innerHTML = this.responseText
        }
    };
    xmlhttp.open("GET", "../Controlador/categoria.php?categoria=" + element.textContent, true)
    xmlhttp.send()

    
}

function agregarCarrito(codigoL){
    console.log(codigoL);
}




































function darLike(corazon){
    console.log("Hola diste like")
    
}
