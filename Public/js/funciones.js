function searchBox(elemnt) {
    let text = elemnt.value.trim()
    text = text.toUpperCase()
    //console.log(text)
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest()
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contentCards").innerHTML = this.responseText
        }
    };
    xmlhttp.open("GET", "../Controlador/categoria.php?buscar=" + text, true)
    xmlhttp.send()
}