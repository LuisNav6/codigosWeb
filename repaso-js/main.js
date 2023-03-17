//alertas
alert("Hola soy Luis Navarrete")
//variables
let nombre = "LUIS NAVARRETE"
nombre = "LUIS"
//mostrar en consola
console.log(nombre)
//constantes
const altura = 169
console.log(altura)
const apellido = "NAVARRETE"
//concatenacion
let concatenacion = nombre + " " + apellido
//seleccionar elementos del dom
let datos = document.querySelector("#datos")
datos.innerHTML = `
<hr/>
<h1>soy la caja de datos</h1>
<h2>mi nombre es: ${concatenacion} </h2>
<h3>mi altura es: ${altura} centimetros</h3>
`
//condiciones
if(altura >= 185)
datos.innerHTML += "<h1>eres una persona alta</h1>"
else
datos.innerHTML += "<h1>eres una persona bajita</h1>"

//bucles
for(let year=2000; year <= 2023;year++)
datos.innerHTML += `<h2>estamos en el año: ${year}</h2>`

//arrays
let nombres = ["luis","pepe","tony"]
let divnombres = document.querySelector("#nombres")
divnombres.innerHTML = "<h1>listado de nombres</h1><ul>"
nombres.forEach(nombre =>{
 divnombres.innerHTML += "<li>"+nombre+"</li>"
})
/*
for(let nombre of nombres){
    divnombres.innerHTML += "<li>"+nombre+"</li>"
}*/
divnombres.innerHTML += "</ul>"

//funciones
const info = (nombre,altura) => {//funcion de flecha
 let misdatos = `<hr/>
 <h1>soy la caja de datos</h1>
 <h2>mi nombre es: ${concatenacion} </h2>
 <h3>mi altura es: ${altura} centimetros</h3>`
 return misdatos
}
console.log(info("LUIS NAVARETE",169))
const imprimir = () => { //ejemplo parecido a un callback
    let datos = document.querySelector("#datos")
    datos.innerHTML += info("LUIS NAVARETE",169)
}
imprimir()
