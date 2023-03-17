var indice = -1;      
var libros=localStorage.getItem("libros");
libros=JSON.parse(libros);

if(libros==null) libros=[];
function lista(){
    var aLength = libros.length;
    
    document.getElementById("listado").innerHTML="";
    document.getElementById("total").innerHTML="0";
    document.getElementById("precioT").innerHTML="$0.00";
    
    var tabla="<tr><td colspan='3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CARRITO</td><tr><th>Articulo</th><th>Precio</th><th>Borrar</th></tr>";
    var numero = 0;;
    var suma = 0;
    for(var i in libros){
        var libro = JSON.parse(libros[i]);
        numero = libro.precio;
        suma += numero;
        tabla += "<tr><td>"+libro.nombre+"</td>";
        tabla += "<td>$"+libro.precio+".00</td>";
        tabla += "<td><input type='button' value='X' onClick='borrar("+i+")' id='btn'</td>";
       // tabla += "<td><input type='button' value='editar' onClick='editar("+i+")' id='btn'></td>";
        tabla += "</tr>";
    }
    
    document.getElementById("listado").innerHTML=tabla;
    document.getElementById("total").innerHTML="Total de articulos: "+aLength;
    document.getElementById("precioT").innerHTML="Total a pagar:$"+suma+".00";

}

function alta(nombre,precio){
    var libro = JSON.stringify({
        nombre:nombre,
        precio:precio,
    });
        libros.push(libro);
        localStorage.setItem("libros",JSON.stringify(libros));
        document.getElementById("alert").innerHTML = "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Producto agregado correctamente</strong><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
   
    lista();
     

/*            var libro = JSON.stringify(
        { titulo:titulo, 
          autor:autor,  
          editorial:editorial, 
          anio:anio  });
     
    
    libros.push(libro);
     

    localStorage.setItem("libros",JSON.stringify(libros));
    alert("libro anadido exitosamente");
     
    lista();*/

    //borramos lo que previamente se habia capturado
}

//Este codigo comentado es equivalente  a window.onload=lista;
/*window.onload = function(){
    lista();
}*/
function borrar(i){
   indice = i;
   var libro = JSON.parse(libros[indice]);
    var nombre=libro.nombre;
        libros.splice(indice,1);
        localStorage.setItem("libros",JSON.stringify(libros));
        document.getElementById("alert").innerHTML = "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Producto eliminado correctamente</strong><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    lista();
}
window.onload = function(){
    lista();
}