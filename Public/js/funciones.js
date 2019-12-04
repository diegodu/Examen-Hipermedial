


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