<?
    session_start();
    include("conexion.php");
    $conn = conectar();
    $sql  = "SELECT * FROM estudiante";
    $query = mysqli_query($conn, $sql);

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/stylehome.css">
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
                <a class="nav" href="#" id="home">Home</a>
                <a class="nav" href="#" id="misCursos">Mis cursos</a>
                <a class="nav" href="#" id="agregarCurso" >Agregar Curso</a>
                <a class="nav" href="#" id="cursosImpartidos">Cursos Impartidos</a>
                <a class="nav" href="#" id="nosotros">Nosotros</a>
                <a class="nav" href="#" id="perfil">Perfil</a>
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
                <h1> USUARIO
                    <?php
                        echo $_SESSION["usuario"] ;
                    ?>
                </h1>
                <div class="card" style="width: 20%">
                    <img src="" class="card-img-top imgStyle" >
                    <div class="card-body cardStyle">
                    <p class="card-text">
                        <button type="button" class="btn btn-dark" id="btnCurso" value="Inscribir">
                            Inscribirme
                        </button>
                        <div class="cursoNombre" name="cursoNombre">Matematicas</div>
                        <div class="cursoDuracion" name="cursoDuracion">20hrs</div>
                        <div class="cursoMaestro" name="cursoMaestro">Juan Lopez</div>
                        <div class="cursoCategoria" name="cursoCategoria">Ciencias exactas</div>
                    </p>
                    </div>
                </div>
            </div>

        </div>                        
        <template id="cardCursos">
            <div class="card" style="width: 20%">
                <img src="" class="card-img-top imgStyle" >
                <div class="card-body cardStyle">
                <p class="card-text">
                    <button type="button" class="btn btn-dark" id="btnCurso">
                        Inscribirme
                    </button>
                    <div class="cursoNombre"></div>
                    <div class="cursoDuracion"></div>
                    <div class="cursoMaestro"></div>
                    <div class="cursoCategoria"></div>
                </p>
                </div>
            </div>
        </template>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>

</html>