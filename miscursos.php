<?php
    include "conexion.php";
    session_start();
    if(empty($_SESSION["usuario"])){
        header("location: login.php");
    }
    if($_SESSION["tipo"] == "mae"){
        header("location: index.php");
    }
   
    $usuario =$_SESSION["usuario"];
    $conn = conectar();
    $sql  = "SELECT * FROM curso WHERE cur_mae_id = '$usuario'";
    $query = mysqli_query($conn, $sql);
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
                
            <div class="contenedor">
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
                                <h2 class="titulo-curso-h2"><?php echo $row['cur_categoria'] ?></h2>
                            </div>
                            <div class="duracion-curso">
                                <h2 class="titulo-curso-h2"><?php echo $row['cur_duracion'] ?> horas</h2>
                            </div>
                            <div class="botones-curso">
                                <a href="#" class="btn-curso inscribirme">
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>