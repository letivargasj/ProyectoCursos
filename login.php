<?php
include "conexion.php";
session_start();
if(!empty($_SESSION["usuario"])){
  header("location: index.php");
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <title>Cursos en linea</title>
    </head>
    <body>
      <div>
        <h1>Login </h1>
      </div> 
     <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

              <form method="post" action="">
                <?php
                  include "controlador/controlador_login.php";
                ?>
                <!-- Email input -->
                <div class="form-outline mb-4">

                  <input type="text" id="form3Example3" class="form-control form-control-lg"
                    name="usuario"
                    placeholder="Usuario" />
                  <label class="form-label" for="form3Example3">Ingrese nombre de usuario</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    name="password"
                    placeholder="Contraseña" />
                  <label class="form-label" for="form3Example4">Ingrese su Contraseña</label>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                  <input name="btningresar" class="btn btn-primary btn-lg " type="submit" value="Ingresar"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">
                  <p class="small fw-bold mt-2 pt-1 mb-0">No tienes una cuenta? <a href="./registrarse.php"
                      class="link-danger">Registrarse</a></p>
                </div>

              </form>
            </div>
          </div>
        </div>
        <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
          </div>
          <!-- Copyright -->

          <!-- Right -->

        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>

</html>