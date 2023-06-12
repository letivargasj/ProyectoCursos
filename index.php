<?
    session_start();
    include("conexion.php");
    $conn = conectar();
    $sql  = "SELECT * FROM curso";
    $query = mysqli_query($conn, $sql);

    $categoria = $_POST['filtroCategoria'];
    $nombre = $_POST['buscar'];

    if(!empty($_POST["btnFiltro"])) {
        if ((empty($_POST['filtroCategoria'])) && (empty($_POST['buscar']))){
            $sql  = "SELECT * FROM curso";
            $query = mysqli_query($conn, $sql);

        }else if((empty($_POST['filtroCategoria'])) && (!empty($_POST['buscar']))){    
            $sql  = "SELECT * FROM curso WHERE cur_nombre LIKE '%$nombre%'";
            $query = mysqli_query($conn, $sql);

        }else if ((!empty($_POST['filtroCategoria'])) && (empty($_POST['buscar']))){
            $sql  = "SELECT * FROM curso WHERE cur_categoria = '$categoria'";
            $query = mysqli_query($conn, $sql);
            
        }else if((!empty($_POST['filtroCategoria'])) && (!empty($_POST['buscar']))){
            $sql  = "SELECT * FROM curso WHERE cur_categoria = '$categoria' AND cur_nombre LIKE '%$nombre%'";
            $query = mysqli_query($conn, $sql); 
        } 
    }
    
    if(!empty($_POST["btnReset"])) {
        $sql  = "SELECT * FROM curso";
        $query = mysqli_query($conn, $sql);
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
           
            <div class="filtros">
                <form action="index.php" method="post" >
                <label for="filtroCategoria" id="labelCategoria">Buscar por categoria: </label> 
                <select type="text" name="filtroCategoria" id="inputCategorias" >
                        <option value="">Todos</option>
                        <option value="Ciencias exactas">Ciencias exactas</option>
                        <option value="Ciencias naturales">Ciencias naturales</option>
                        <option value="Humanidades">Humanidades</option>
                        <option value="Geografia">Geografia</option>
                        <option value="Historia">Historia</option>
                        <option value="Idiomas">Idiomas</option>
                        <option value="Arte">Arte</option>
                    </select>
                    <input 
                    type="text" 
                    name="buscar" 
                    placeholder="Busca nombre del curso"
                    class="inputBuscar"
                    id="inputBuscar"
                    >  
                    <input type="submit" name="btnFiltro" class="btn btn-dark mr-3" id="btnFiltrar" value="Buscar">

                    <input type="submit" name="btnReset" class="btn btn-white " id="btnReset" value="">
                    <label for="btnReset"><i class="fa-solid fa-rotate-left"></i></label>

                </form>
            </div>
                
            <div class="contenedorHome">
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
        <script src="https://kit.fontawesome.com/e8f8d6036e.js" crossorigin="anonymous"></script>
    </body>

</html>