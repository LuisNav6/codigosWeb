function cambios(){
    //insertar antes de un elemento
const para = document.createElement("h1");
const node = document.createTextNode("UNIVERSIDAD AUTONOMA DE AGUASCALIENTES");
para.appendChild(node);

const element = document.getElementById("div1");
const child = document.getElementById("isc");
element.insertBefore(para, child);
}
function reemplazar(){
//reemplazar elemento
const para = document.createElement("p");
const node = document.createTextNode("Luis Navarrete");
para.appendChild(node);

const parent = document.getElementById("pral");
const child = document.getElementById("p1");
parent.replaceChild(para, child);
}