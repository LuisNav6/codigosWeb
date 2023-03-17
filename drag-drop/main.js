function iniciar(){
    var images = document.querySelectorAll('#cajaimagenes > img');
    for(var i = 0; i < images.length; i++){
        images[i].addEventListener('dragstart', starting, false);
        images[i].addEventListener('dragend', ending, false);
    }
    release = document.getElementById('lienzo');
    lienzo = release.getContext('2d'); // para poder manipular el canvas
    release.addEventListener('dragenter',eventEnter, false);
    release.addEventListener('dragover',eventOver,false);
    release.addEventListener('drop',dropping,false);
}

function eventEnter(e){
    console.log("Soy el evento DragEnter!");
    e.preventDefault();
}

function eventOver(e){
    console.log("Soy el evento DragOver");
    e.preventDefault();
}

function ending(e){
    elemento = e.target;
    elemento.style.visibility = 'hidden';
}

function starting(e){
    elemento = e.target;
    e.dataTransfer.setData('Text',elemento.getAttribute('id'));
    e.dataTransfer.setDragImage(e.target,0,0);
}

function dropping(e){
    e.preventDefault();
    var id = e.dataTransfer.getData('Text');
    var elemento = document.getElementById(id);
    // Detectar exactamenete donde dejas la imagen
    var posx = e.pageX - release.offsetLeft; // coordenadas para soltarlo en x
    var posy = e.pageY - release.offsetTop; // coordenadas para soltarlo en y
    lienzo.drawImage(elemento,posx, posy); // se dibuja el elemento
}

window.addEventListener('load',iniciar,false);