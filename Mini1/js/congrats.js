
// Obtener el arreglo de jugadores almacenado en el LocalStorage
let players = JSON.parse(localStorage.getItem("Players")) || [];

for (var i in players) {
  var p = players[i];

  // Variables DOM
  const congratsScreen = document.getElementById("congrats-screen");
  const congratsScore = document.getElementById("congrats-score");
  const congratsTime = document.getElementById("congrats-time");
  const restartButton = document.getElementById("restart-button");
  const returnbtn = document.getElementById("Return-init");

  congratsScore.innerHTML = p.score;
  congratsTime.innerHTML = p.bestTime;

  // Función para cerrar el juego
  function closeGame() {
    if (window.confirm("¿Está seguro que desea salir del juego?")) {
      window.close();
    }
  }
  //Evento para volver al inicio
  returnbtn.addEventListener("click",function(){
      window.location.href = "../html/index.html";
  });

  // Evento para reiniciar el juego
  restartButton.addEventListener("click", function () {
    // Se reinician las variables globales y se muestra la pantalla de inicio
    score = 0;
    time = 0;
    window.location.href = "../html/game.html";
  });

  // Boton para cerrar
  const quitButton2 = document.getElementById("quit-button-2");
  quitButton2.addEventListener("click", closeGame);
}
