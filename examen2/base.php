<html lang="es">
    <head>
        <meta charset="UTF-8">
        <!-- css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/c5bc837744.js" crossorigin="anonymous"></script>
        <!-- fuentes -->
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

        <style>
        .logo{
          width: 100%;
          height: 15%;
        }
        .menu{
          font-family: 'Roboto Mono', monospace;
        }
        .centro{
          color: #25D366;
        }
        .nombre{
           display: block;
           text-align:  center;
        }
        .container-fluid{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        }
        .navbar-brand{
          width: 80px;
        }
        .form-group{
          display: flex;
          flex-direction: row;
          justify-content: center;
          align-items: center;
        }
        </style>
    </head>
    <body>
<!-- header -->
<header>
<div class="menu">
 <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/Logiin.png" class="logo"></a>
    <div class="centro">
    <p class="nombre">DATA DEVELOPER</p>
    <p>Desarrollamos profesionales</p>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menú</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Registro
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" > <li class="px-3 py-2">
                           <form class="form" role="form" action="login.php" method="post">
                             <label class="label1">Iniciar sesion</label>
                                <div class="form-group">
                                    <input name="usuario" id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input name="palabra_secreta" id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block">Ingresar</button>
                                </div>
                            </form>
                        </li></a></li>
                        <hr>
              <li><a class="dropdown-item"><li class="px-3 py-2">
                           <form class="form" role="form" action="registro.php" method="post">
                             <label class="label2">Unirse</label>
                             <div class="form-group">
                                    <input name="nombre" id="text" placeholder="Nombre" class="form-control form-control-sm" type="text" required="">
                              </div>
                              <div class="form-group">
                                    <input name="usuario" id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                              </div>
                              <div class="form-group">
                                    <input name="palabra_secreta" id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                               </div>
                                 
                              <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block">Unirme</button>
                              </div>
                            </form>
                </li></a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nosotros.php">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
</div>
</header>

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>