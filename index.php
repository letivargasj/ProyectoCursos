<?
    session_start();
    include("conexion.php");
    $conn = conectar();
    $sql  = "SELECT * FROM curso";
    $query = mysqli_query($conn, $sql);

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/stylehome.css">
        <link rel="stylesheet" href="/css/cursosimpartidos.css">
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
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Perfil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="./controlador/controlador_cerrarsession.php">Salir</a></li>
                    </ul>
                </div>
                <a class="nav" href="./login.php" id="login">Login</a>
            </div>
            <div class="menuCategorias">
                <div class="cat" id="todos">Todos</div> 
                <div class="cat" id="exactas">Ciencias exactas</div>            
                <div class="cat" id="naturales">Ciencias naturales</div>
                <div class="cat" id="humanidades">Humanidades</div>
                <div class="cat" id="geografia">Geografia</div>
                <div class="cat" id="historia">Historia</div>
                <div class="cat" id="idiomas">Idiomas</div>
                <div class="cat" id="Arte">Arte</div>
            </div>

            
            <div class="contenedor">
                <div class="buscador" id="buscador" >
                    <input type="text" id="inputBuscador" class="inputBuscador" placeholder="Escribe el nombre de la materia">
                </div>
                
                <div class="cartaCurso">
                    <div class="cursos">
                        <?php 
                            while($row = mysqli_fetch_array($query)){
                        ?>
                        <div class="contenedor-card">
                        
                            <div class="img-curso">
                                <img src="<?php echo $row['cur_imagen'] ?>" class="image-curso">
                            </div>
                            <div class="titulo-curso">
                                <h2 class="titulo-curso-h2"><?php echo $row['cur_nombre'] ?></h2>
                            </div>
                            <div class="categoria-curso">
                                <h2 class="titulo-curso-h2"><?php echo $row['cur_categoría'] ?></h2>
                            </div>
                            <div class="duración-curso">
                                <h2 class="titulo-curso-h2"><?php echo $row['cur_duracion'] ?> horas</h2>
                            </div>
                            <div class="botones-curso">
                                <a href="#" class="btn-curso borrar">
                                    Inscribirme
                                </a>
                            </div>
                        </div>
                        <?php
                            }
                        ?> 
                    </div>
                </div>
            </div>
        </div>       

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>