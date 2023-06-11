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
                <h1> USUARIO
                    <?php
                        echo $_SESSION["usuario"] ;
                    ?>
                </h1>
                
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Nombre</th>
                            <th>Duracion</th>
                            <th>Categoria</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <td>
                                    <?php echo $row['cur_nombre'] ?>
                                </td>
                                <td>
                                    <?php echo $row['cur_duracion'] ?>
                                </td>
                                <td>
                                    <?php echo $row['cur_categoria'] ?>
                                </td>
                                <td>
                                    <?php echo $row['cur_imagen'] ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary">Inscribirme</a>
                                </td>
                            </tr>

                            <?php
                            }
                        ?>
                    </tbody>
                </table>


                <div class="card" style="width: 30%">
                    <img src="" class="card-img-top imgStyle" >
                    <div class="card-body cardStyle">
                    <p class="card-text">
                    <?php
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <button type="button" class="btn btn-dark" id="btnCurso" value="Inscribir">
                            Inscribirme
                        </button>
                        <div class="cursoImagen" name="cursoImagen">
                            <?php echo $row['cur_imagen'] ?>
                        </div>
                        <div class="cursoNombre" name="cursoNombre">
                            <?php echo $row['cur_nombre'] ?>
                        </div>
                        <div class="cursoDuracion" name="cursoDuracion">
                            <?php echo $row['cur_duracion'] ?>
                        </div>
                        <div class="cursoMaestro" name="cursoMaestro">

                        </div>
                        <div class="cursoCategoria" name="cursoCategoria">
                            <?php echo $row['cur_categoria'] ?>
                        </div>
                    <?php
                        }
                    ?>
                    </p>
                    </div>
                </div>
            </div>

            <footer>
            <h2 class="title-footer">Todos los Derechos Reservados &copy; 2023 Ensigna</h2>
            </footer>

        </div>                        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>