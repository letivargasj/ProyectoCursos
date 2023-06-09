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
            <!-- Section: Design Block -->
				<section class="">
				<!-- Jumbotron -->
					<div class="  text-center text-lg-start mt-2 " style="background-color: hsl(0, 0%, 96%)">
						<div class="  col-md-4">
							<div class="justify-content-centercard">
								<div class="card-body px-md-5">
									<form method="post" action="">
										<?php
										include "./controlador/controlador_registrarse.php" ;
										?>
										<!-- 2 column grid layout with text inputs for the first and last names -->
										<div class="row">
											<div class="col-md-6 mb-2">
												<div class="form-outline">
												<input name= "reg_nombre" type="text" id="form3Example1" class="form-control" placeholder="Ingresa tu Nombre" />
												<label class="form-label" for="form3Example1">Nombre</label>
												</div>
											</div>
											<div class="col-md-6 mb-2">
												<div class="form-outline">
												<input name= "reg_apellido" type="text" id="form3Example2" class="form-control" placeholder="Ingresa tu Apellido"/>
												<label class="form-label" for="form3Example2">Apellido</label>
												</div>
											</div>
										</div>

										<div class="form-outline mb-2">
											<input  name= "reg_usuario" type="text" id="form3Example3" class="form-control" placeholder="Elige un nombre de Usuario"/>
											<label class="form-label" for="form3Example3">Nombre de Usuario</label>
										</div>

											<!-- Email input -->
										<div class="form-outline mb-2">
											<input name= "reg_correo" type="email" id="form3Example3" class="form-control" placeholder="Ingresa tu e-mail" />
											<label class="form-label" for="form3Example3">Email</label>
										</div>

											<!-- Password input -->
										<div class="form-outline mb-2">
											<input name= "reg_password" type="password" id="form3Example4" class="form-control" placeholder="Ingresa una Contraseña" />
											<label class="form-label" for="form3Example4">Contraseña</label>
										</div>

										<div class="form-outline mb-2">
											<input name= "reg_con_password" type="password" id="form3Example4" class="form-control" placeholder="Ingresa una Contraseña" />
											<label class="form-label" for="form3Example4">Confirmar contraseña</label>
										</div>

										<div>
											<select  name="reg_tipo" class="form-select" aria-label="Default select example">
												<option value = "0" selected>Elije tu tipo de cuenta</option>
												<option value="1">Estudiante</option>
												<option value="2">Profesor</option>
											</select>
										</div>
										<input name="btnregistrarse" class="btn btn-dark btn-lg " type="submit" value="Registrarse"
												style="padding-left: 2.5rem; padding-right: 2.5rem; margin-top: 15px;">
										
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!-- Section: Design Block --> 
			<footer class="footer">
				<h2>Todos los derechos reservados &copy; 2023 | <span> Ensigna </span></h2>
			</footer>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>

</html>