//functions declarations
function sumar(n){
  let array = [];

//llenamos
  for(var i = 0; i < n; i++){
   var aleatorio = Math.random() * (100-1) + 1;
   array.push(aleatorio);
  }
  //vemos el contenido del array
  //console.log(array);
  suma = 0;
  //sumamos
  for(var i = 0; i < array.length; i++){
     x = array[i];
     suma += x;
  }
  return suma;
}
console.log("functions declarations\n" + sumar(10));

//functions expressions
const sumar2 = function (n){
    let array = [];
    //llenamos
      for(var i = 0; i < n; i++){
       var aleatorio = Math.random() * (100-1) + 1;
       array.push(aleatorio);
      }
      //vemos el contenido del array
      //console.log(array);
      suma = 0;
      //sumamos
      for(var i = 0; i < array.length; i++){
         x = array[i];
         suma += x;
      }
      return suma;
};
console.log("functions expressions\n" + sumar2(10));

//arrow functions
const sumar3 = (n) => {
    let array = [];
    //llenamos
      for(var i = 0; i < n; i++){
       var aleatorio = Math.random() * (100-1) + 1;
       array.push(aleatorio);
      }
      //vemos el contenido del array
      //console.log(array);
      suma = 0;
      //sumamos
      for(var i = 0; i < array.length; i++){
         x = array[i];
         suma += x;
      }
      return suma;
};
console.log("arrow functions\n" + sumar3(10));
