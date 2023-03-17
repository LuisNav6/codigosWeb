const canvas = document.getElementById('myCanvas');
const ctx = canvas.getContext('2d');

// Dibujar el tronco del árbol
ctx.fillStyle = 'brown';
ctx.fillRect(175, 300, 50, 100);

// Dibujar las ramas del árbol
ctx.fillStyle = 'green';
ctx.beginPath();
ctx.moveTo(200, 100);
ctx.lineTo(100, 300);
ctx.lineTo(300, 300);
ctx.closePath();
ctx.fill();

ctx.beginPath();
ctx.moveTo(200, 150);
ctx.lineTo(125, 325);
ctx.lineTo(275, 325);
ctx.closePath();
ctx.fill();

ctx.beginPath();
ctx.moveTo(200, 200);
ctx.lineTo(150, 350);
ctx.lineTo(250, 350);
ctx.closePath();
ctx.fill();

// Dibujar las bolas del árbol
ctx.fillStyle = 'red';
ctx.beginPath();
ctx.arc(200, 150, 20, 0, Math.PI * 2);
ctx.fill();

ctx.fillStyle = 'yellow';
ctx.beginPath();
ctx.arc(250, 250, 20, 0, Math.PI * 2);
ctx.fill();

ctx.fillStyle = 'blue';
ctx.beginPath();
ctx.arc(150, 250, 20, 0, Math.PI * 2);
ctx.fill();
