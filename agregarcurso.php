<?
    session_start();
    include "conexion.php";

    if(empty($_SESSION["usuario"])){
        header("location: login.php");
    }

    if($_SESSION["tipo"] == "est"){
        header("location: index.php");
    }
    #$conn = conectar();
    #$sql  = "SELECT * FROM curso";
    #$query = mysqli_query($conn, $sql);

    

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
        
        <title>ENSIGNA</title>
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
                <a class="nav" href="#" id="perfil">Perfil</a>
            </div>
            <div class="formulario">
                <div class="formulario-header">
                    <h1>Agrega un curso nuevo</h1>
                    <div class="form-img"><img src="./images/logo.png" alt="logo"></div>
                </div>
                <form method="post" action="">
                    <?php
                    include "./insertar.php" ;
                    ?>
                    <label for="cur_nombre"> Nombre del curso:</label>
                    <input type="text" name="cur_nombre" class="form-control mb-3" placeholder="Escribe el nombre" >
                    
                    <label for="cur_duracion"> Duración del curso (horas):</label>
                    <input type="text" name="cur_duracion" class="form-control mb-3" placeholder="Escribe la duración" >
                    
                    <label for="cur_categoria"> Escoge categoria</label>
                    <select type="text" name="cur_categoria" class="form-select mb-3" >
                        <option value="Ciencias exactas">Ciencias exactas</option>
                        <option value="Ciencias naturales">Ciencias naturales</option>
                        <option value="Humanidades">Humanidades</option>
                        <option value="Geografia">Geografia</option>
                        <option value="Historia">Historia</option>
                        <option value="Idiomas">Idiomas</option>
                        <option value="Arte">Arte</option>
                    </select>
                    <input type="file" name="cur_imagen" class="form-control mb-3" placeholder="Nombre del curso" >
                    
                   <div class="centrar-btn"> <input name="btninsertar" class="btn btn-primary btn-lg btn-insertar" type="submit" value="Insertar"
                          style="padding-left: 2.5rem; padding-right: 2.5rem; ">
                    </div>
                </form>
            </div>
            <footer class="footer">
                <h2>Todos los derechos reservados &copy; 2023 | <span> Ensigna </span></h2>
            </footer>
        </div>
            

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>

</html>