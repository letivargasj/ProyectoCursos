<?php
    include "conexion.php";
    session_start();
    if(empty($_SESSION["usuario"])){
        header("location: login.php");
    }
    if($_SESSION["tipo"] == "est"){
        header("location: index.php");
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos en Línea</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/cursosimpartidos.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="principal">
        <div class="navegador" id="navbar" >
            <a id="logo">
                <img class="imgLogo" src="./images/logo2.png" id="logo">
            </a>
            <a class="nav" href="./index.php" id="home">Home</a>
            <a class="nav" href="./miscursos.php" id="misCursos">Mis cursos</a>
            <a class="nav" href="./agregarcurso.php" id="agregarCurso" >Agregar Curso</a>
            <a class="nav" href="./cursosimpartidos.php" id="cursosImpartidos">Cursos Impartidos</a>
            <a class="nav" href="./nosotros.php" id="nosotros">Nosotros</a>
            <a class="nav" href="#" id="perfil">Perfil</a>
        </div>
        <div class="clearfix"></div>

        <div class="clearfix"></div>

        <div class="clearfix"></div>

        <section class="cursos">
            <div class="titulo">
                <h2 class="titulo-h2">Cursos Impartidos</h2>
            </div>

            <div class="clearfix"></div>

            <div class="contenedor-card">
                <div class="img-curso">
                    <img src="./images/math.jpg" alt="Matemáticas" class="image-curso">
                </div>
                <div class="titulo-curso">
                    <h2 class="titulo-curso-h2">Matemáticas 1° Grado</h2>
                </div>
                <div class="descripcion-curso">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, voluptates?</p>
                    <p>Duración: <span class="duracion"> 30 horas </span></p>
                </div>
                <div class="botones-curso">
                    <a href="#" class="btn-curso info">
                        Información
                    </a>

                    <a href="#" class="btn-curso borrar">
                        Quitar Curso
                    </a>
                </div>
            </div>

        </section>

        <footer>
            <h2 class="title-footer">Todos los Derechos Reservados &copy; 2023 Ensigna</h2>
        </footer>
    </div>
</body>
</html>