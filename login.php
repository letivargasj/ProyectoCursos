<?php
include "conexion.php";
session_start();
if(!empty($_SESSION["usuario"])){
  header("location: index.php");
}
$usuario = $_SESSION["usuario"];
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <title>Cursos en linea</title>
    </head>
    <body>
      <div class="principal">
          <div class="navegador" id="navbar" >
            <a id="logo">
                <img class="imgLogo" src="./images/logo2.png" id="logo">
            </a>
            <a class="nav" href="/index.php" id="home">Home</a>
            <a class="nav" href="/miscursos.php" id="misCursos">Mis cursos</a>
            <a class="nav" href="/agregarcurso.php" id="agregarCurso" >Agregar Curso</a>
            <a class="nav" href="/cursosimpartidos.php" id="cursosImpartidos">Cursos Impartidos</a>
            <a class="nav" href="/nosotros.php" id="nosotros">Nosotros</a>
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Perfil
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="./controlador/controlador_cerrarsession.php">Salir</a></li>
                    <li><a class="dropdown-item" href="./login.php">Login</a></li>
                </ul>
            </div>
        </div>
        <div class="contenedor">
        <section class="vh-100">
            <div class="container-fluid h-custom">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                  <img src="./images/login.jpg"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                  <form method="post" action="">
                    <?php
                      include "controlador/controlador_login.php";
                    ?>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example3">Ingrese nombre de usuario</label>
                      <input type="text" id="form3Example3" class="form-control form-control-lg"
                        name="usuario"
                        placeholder="Usuario" />
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-3">
                      <label class="form-label" for="form3Example4">Ingrese su Contraseña</label>
                      <input type="password" id="form3Example4" class="form-control form-control-lg"
                        name="password"
                        placeholder="Contraseña" />
                      
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                      <input name="btningresar" class="btn btn-dark btn-lg " type="submit" value="Ingresar"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">
                      <p class="small fw-bold mt-2 pt-1 mb-0">No tienes una cuenta? <a href="./registrarse.php"
                          class="link-danger">Registrarse</a></p>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>

        <footer class="footer">
            <h2>Todos los derechos reservados &copy; 2023 | <span> Ensigna </span></h2>
        </footer>
      </section
        
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>

</html>