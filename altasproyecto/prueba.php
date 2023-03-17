<?php
    session_start();
    include 'php/database.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORTRNR</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="Img/logo.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Box Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Link To CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
    <!-- Navbar -->
    <header>
        <a href="" class="logo">
            <img src="Img/logo.png" alt="logo">
            <h2>SPORTRNR</h2>
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Acerca de nosotros</a></li>
            <li><a href="#menu">Tienda</a></li>
            <li><a href="#services">Servicio</a></li>
            <li><a href="#contact">Contacto</a></li>
            <?php if(isset($_SESSION['cuenta'])){ echo '<li><a href="#suscrip">Suscripciones</a></li>'; echo '<li style = "color:#FFE060;">'.$_SESSION['cuenta'].'</li> '; echo '<li><a href="#shop"><img src="Img/cart.svg" alt="cart" class="cart"></a></li>'; echo '<li><a href="php/logout.php">Logout</a></li>';}else{echo '<li><a href="#modal" class="login">Iniciar sesión</a></li>';}?>
            <!-- Dark Mode -->
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
        <?php include "php/modals.php"; ?>
        <!-- Modal carrito !-->
        <section class="modal" id="shop">
            <div class="modal_container">
                <div class="login-form">
                    <div class="login-form__logo-container">
                        <img src="Img/sportlogu.png" alt="Logo" class="login-form__logo">
                    </div>
                  <script>if(carrito.length == 0){</script>
                    <div class="login-form__content">
                        <div class="login-form__header" style ="color:green">Carrito Vacío</div>
                        <div class="login-form__button-container">
                                <a href="#home" class="btnN"> Cerrar</a> 
                        </div>
                    </div>
                  <script>}else{</script>
                    <div class="login-form__content">
                        <div class="login-form__header" style ="color:green">Carrito Vacío</div>
                        <div class="login-form__button-container">
                                <a href="#home" class="btnN"> Cerrar</a> 
                        </div>
                    </div>
                    <script>}</script>
                    
                </div>
            </div>
        </section>
    </header>

    <!-- Home  Section-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>¡Vistiendo<br> Campeones!</h1>
            <h2>Encuentra el mejor comfort<br>para tus actividades diarias.</h2>
            <a href="#menu" class="btn">Ver Productos</a>
        </div>

        <div class="home-img">
            <img src="Img/AdidasX.png" alt="">
        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="Img/tienda.jpg" alt="">
        </div>
        <div class="about-text">
            <span>Acerca de Nosotros</span>
            <h2> <br></h2>
            <p>Somos una empresa dedicada al 100% a la venta de productos deportivos, con el objetivo de ofrecerles a
                nuestros clientes un mejor comfort y sobre todo ayudar a su óptimo desempeño.</p>
            <a href="#" class="btn">Ver más</a>
        </div>
    </section>
    <!-- tienda-->
    <div class="heading" id = "filtros">
         <span>Tienda</span>
        <h2>Encuentra lo mejor para ti.</h2>
    </div>
    <section class="menu" id="menu">
          <form action="index.php#filtros" method="post" class="filtro-form">
            <div class="filtro-container">
            Selecciona los filtros deseados para encontrar los productos</div>
            <div class="filtro-form">
                <div class="filtro_list">
                    <select name="filtro">
                        <option value="todos">Todos</option>
                        <option value="Niño">Niño</option>
                        <option value="Niña">Niña</option>
                        <option value="Dama">Dama</option>
                        <option value="Caballero">Caballero</option>
                        <option value="caros">Más caros</option>
                        <option value="economicos">Más baratos</option>
                    </select>
                </div>
                <div class="buttonFiltro-cont">
                    <button type="submit" class="btnFiltro">Filtrar</button>
                </div>
            
          </form>
        </div>
        <div class="menu-container">
        <?php
        if(isset($_POST['filtro'])){
            switch($_POST['filtro']){
            case "todos":
                $sql = "select * from productos;";
            break;
            case "Niño":
                $sql = "select * from productos where categoria='Niño'";
                break;
            case "Niña":
                $sql = "select * from productos where categoria='Niña'";
                break;
            case "Dama":
                $sql = "select * from productos where categoria='Dama'";
                break;
            case "Caballero":
                $sql = "select * from productos where categoria='Caballero'";
                break;
            case "caros":
                $sql = "select * from productos order by precio desc;";
                break;
            case "economicos":
                $sql = "select * from productos order by precio asc;";
                break;
            }
            }else{
            $sql = "select * from productos;";
            }
            $resultado = $conexion -> query($sql);
          $numPro = 0;
        ?>
<script> var array=[];var arr=[]; var ar=[];</script>

<?php
       srand(time());
       $a = rand(0,17);//el limite maximo es el numero total de articulos
       $b = rand(0,17);//el limite maximo es el numero total de articulos
       $c = rand(0,17);//el limite maximo es el numero total de articulos
       $d = rand(0,17);//el limite maximo es el numero total de articulos
       $e = rand(0,17);//el limite maximo es el numero total de articulos
       $f = rand(0,17);//el limite maximo es el numero total de articulos
    while( $fila = $resultado ->  fetch_assoc()){
        $imagen = $fila['imagen'];
        $producto = $fila['nombre'];
        $precio = $fila['precio'];
        $descripcion = $fila['descripcion']; 
        $categoria = $fila['categoria'];
        $existencia = $fila['existencia'];
?>
    <script>
    array.push("<?php echo $producto ?>");
    ar.push("<?php echo $categoria ?>");
    </script>

<?php 
     if($numPro == $a || $numPro == $b || $numPro == $c || $numPro == $d || $numPro == $e || $numPro == $f){
         $newprecio = $precio*0.9;
?>
<script>
     arr.push("<?php echo number_format($newprecio,2) ?>");
</script>
            <div class="box">
                <div class="box-img">
                    <img src="Img/<?php echo $imagen ?>">
                </div>
                <h2><?php echo $producto ?></h2>
                <h3></h3>
                <span style="color: gray; text-decoration:line-through;">$<?php echo $precio ?></span>
                <span style="color: green;">$<?php echo number_format($newprecio,2)?></span>
                <span style="color: #03bb85;">Existencia: <?php echo $existencia ?></span>
                <p style="text-align:left;">Descripción: </p><span style="text-align: center;"><?php echo $descripcion ?></span>
                <button id="<?php echo $numPro ?>" onclick="agregar(this.id)">
                <i class='bx bx-cart-alt'></i>
                 </button>
            </div>
<?php
     }else{
?>
<script>
     arr.push("<?php echo $precio ?>");
</script>
            <div class="box">
                <div class="box-img">
                    <img src="Img/<?php echo $imagen ?>">
                </div>
                <h2><?php echo $producto ?></h2>
                <h3></h3>
                <span>$<?php echo $precio ?></span>
                <span style="color: #03bb85;">Existencia: <?php echo $existencia ?></span>
                <p style="text-align:left;">Descripción: </p><span style="text-align:center;"><?php echo $descripcion ?></span>
                <button id="<?php echo $numPro ?>" onclick="agregar(this.id)">
                <i class='bx bx-cart-alt'></i>
                 </button>
            </div>
<?php 
}
    $numPro = $numPro+1;
    }//fin while
?>

<script>
    console.log(array); 
    console.log(arr);
    console.log(ar);
    let carrito = [];
    var i = 0;
    function agregar(id){
        i ++;
        var indice = parseInt(id);
        console.log(`Elegiste ${array[indice]}`);
       carrito.push(`${array[indice]}`+" "+`${arr[indice]}`+" "+`${ar[indice]}`);
    }
    console.log(carrito);
</script>
</div>
</section>
    <!-- Service -->
    <section class="services" id="services">
        <div class="heading">
            <span>Servicios</span>
            <h2>Brindamos <br> el mejor servicio al cliente.</h2>
        </div>

        <div class="servives-container">
            <!-- Box 1 -->
            <div class="s-box">
                <img src="Img/seguridadpago.jpg" alt="">
                <h3>Pagos</h3>
                <p>Contamos con una de las pasarelas mas seguras en linea, que garantiza a nuestros clientes que su
                    informacion personal y sus datos bancarios están 100% protegidos.</p>
            </div>
            <!-- Box 2 -->
            <div class="s-box">
                <img src="Img/paqueteria.jpg" alt="">
                <h3>Paquetería</h3>
                <p>Contamos con el mejor servicio de paquetería, comprometiendonos con los clientes haciendoles llegar
                    sus entregas en tiempo y forma.</p>
            </div>
            <!-- Box 3 -->
            <div class="s-box">
                <img src="Img/delivery.jpg" alt="">
                <h3>Entregas</h3>
                <p>Nos encargamos de hacerles llegar a nuestros clientes cada uno de sus productos intactos.
                </p>
            </div>
        </div>
    </section>

    <!-- Connect -->
    <section class="connect">
        <div class="connect-text">
            <span>Hablemos</span>
            <h2>Conectar ahora</h2>
        </div>
        <a href="" class="btn">Contactanos</a>
    </section>

    <!-- Contact -->
    <footer class="contact" id="contact">
        <div class="contact-box">
            <h3>SPORTRNR</h3>
            <span>Conectate con nosotros</span>
            <div class="social">
                <a href="#" class="icon"><i class='bx bxl-facebook facebook'></i></a>
                <a href="#" class="icon"><i class='bx bxl-twitter twitter'></i></a>
                <a href="https://www.instagram.com/sportrnr/" class="icon"><i
                        class='bx bxl-instagram instagram'></i></a>
            </div>
        </div>

        <div class="contact-box">
            <h3>Enlaces del menú</h3>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Acerca de nosotros</a></li>
            <li><a href="#menu">Cursos</a></li>
            <li><a href="#services">Servicio</a></li>
            <li><a href="#contact">Contacto</a></li>
        </div>

        <div class="contact-box">
            <h3>Enlaces Rápidos</h3>
            <li><a href="#Contact">Contacto</a></li>
            <li><a href="#Privacy Policy">Politica y Privacidad</a></li>
            <li><a href="#Terms Of Use">Terminos de uso</a></li>
        </div>

        <div class="contact-box address">
            <h3>Contacto</h3>
            <i class='bx bxs-map'><span>Av. Universidad # 940, <br> C.P. 20100, Aguascalientes, Ags.
                    México.</span></i>
            <i class='bx bxs-phone'><span>+52 449 571 6261</span></i>
            <i class='bx bxs-envelope'><span>Example@gmail.com</span></i>
        </div>
    </footer>

    <!-- Copyright -->
    <div class="copyright">
        <p>© Derechos Reservados Por SPORTRNR.</p>
    </div>
    
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JavaScript -->
    <script src="js/script.js"></script>
    <script src="js/formularioRegistro.js"></script>
    <script src="https://kit.fontawesome.com/850ac5ea56.js" crossorigin="anonymous"></script>
</body>
</html>