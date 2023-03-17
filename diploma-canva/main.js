// Recuperamos los datos
const form = document.getElementById("diploma-form");
const canvas = document.getElementById("diploma-canvas");

// Evento del form
form.addEventListener("submit", (event) => {
  event.preventDefault();

  // Recuperamos el nombre y el curso del form
  const studentName = document.getElementById("student-name").value;
  const courseName = document.getElementById("course-name").value;

  // Guardamos en el localStorage
  localStorage.setItem("studentName", studentName);
  localStorage.setItem("courseName", courseName);

  // Abrimos otra ventana para el desplegar el diploma
  const diplomaWindow = window.open();

  // Generamos el diploma y lo dibujamos en el canvas
  const ctx = canvas.getContext("2d");
  const diplomaImage = new Image();
  diplomaImage.src = "imgs/6d3a9e7d39421a6ec2b7dc07b68185c5--diploma-online-reyes.jpeg";
  diplomaImage.onload = () => {
    canvas.width = diplomaImage.width;
    canvas.height = diplomaImage.height;

    // Se dibuja el fondo
    ctx.drawImage(diplomaImage, 0, 0, canvas.width, canvas.height);

    // Dibujamos el nombre del estudiante
    const nameX = canvas.width / 2;
    const nameY = 300;
    ctx.font = "bold 30px Arial";
    ctx.textAlign = "center";
    ctx.fillStyle = "#1c1c1c";
    ctx.fillText(studentName, nameX, nameY);

    // Dibujamos el nombre del curso
    const courseX = canvas.width / 2;
    const courseY = 230;
    ctx.font = "15px Arial";
    ctx.textAlign = "center";
    ctx.fillStyle = "#1c1c1c";
    ctx.fillText("Curso: " + courseName, courseX, courseY);

    // Dibujamos el nombre de la institucion y el logo
    const institutionX = canvas.width / 2;
    const institutionY = 210;
    ctx.font = "bold 36px Arial";
    ctx.textAlign = "center";
    ctx.fillStyle = "#1c1c1c";
    ctx.fillText(
      "Universidad Autónoma de Aguascalientes",
      institutionX,
      institutionY
    );

    // Titulo del diploma
    const titleX = canvas.width / 2;
    const titleY = 270;
    ctx.font = "bold 30px Arial";
    ctx.textAlign = "center";
    ctx.fillStyle = "#1c1c1c";
    ctx.fillText("Diploma de Honor", titleX, titleY);

    // Dibujamos el logo
    const logoX = 310;
    const logoY = 80;
    const logoImage = new Image();
    logoImage.src = "imgs/Logo_de_la_Universidad_Autónoma_de_Aguascalientes.svg.png";
    logoImage.onload = () => {
      ctx.drawImage(logoImage, logoX, logoY, 100, 100);
    };

    // Se dibuja la razon del diploma
    const reasonX = canvas.width / 4 + 180;
    const reasonY = 330;
    ctx.font = "bold 20px Arial";
    ctx.textAlign = "center";
    ctx.fillStyle = "#1c1c1c";
    ctx.fillText("Entrega: Luis Humberto Navarrete Balandrán", reasonX, reasonY);

    const firmaImg = new Image();
    const firmaX = canvas.width / 2 - 100;
    const firmaY = 380;
    firmaImg.src = "imgs/firma-en-png-firmas-en-formato-11562869799c09le16rgz.png";
    firmaImg.onload = () => {
      ctx.drawImage(firmaImg, firmaX, firmaY, 200, 80);

      // Se dibuja la razón del diploma
      const reasonX = canvas.width / 4 + 175;
      const reasonY = 350;
      ctx.font = "bold 20px Arial";
      ctx.textAlign = "center";
      ctx.fillStyle = "#1c1c1c";
      ctx.fillText(
        "Por haber finalizado el curso con éxito.",
        reasonX,
        reasonY
      );

      // Se dibuja la fecha del diploma
      const dateX = canvas.width - 80;
      const dateY = canvas.height - 145;
      const date = new Date();
      const dateString = date.toLocaleDateString();
      ctx.font = "20px Arial";
      ctx.fillStyle = "#1c1c1c";
      ctx.textAlign = "right";
      ctx.fillText(dateString, dateX, dateY);

      // Convertimos el contenido del canvas a una imagen en formato PNG
      const canvasDataUrl = canvas.toDataURL();

      // Insertamos la imagen en la ventana abierta
      const img = new Image();
      img.src = canvasDataUrl;
      diplomaWindow.document.body.appendChild(img);

      // Ocultamos el canvas en la página principal
      canvas.style.display = "none";

      // Cerramos la ventana emergente después de 10 segundos
      setTimeout(() => {
        diplomaWindow.close();
      }, 10000);
    };
  };
});
