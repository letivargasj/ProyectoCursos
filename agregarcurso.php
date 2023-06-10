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
                <a class="nav" href="#" id="perfil">Perfil</a>
            </div>
            <div class="formulario">
                <h1>Agrega un curso nuevo</h1>
                <form action="insertar.php" method="post">
                    <input type="text" name="cur_nombre" class="form-control mb-3" placeholder="Escribe el nombre" >
                    <input type="text" name="cur_duracion" class="form-control mb-3" placeholder="Escribe la duración" >
                    <select type="text" name="cur_categoria" class="form-select mb-3" >
                        <option selected>Escoge una categoria...</option>
                        <option value="Ciencias exactas">Ciencias exactas</option>
                        <option value="Ciencias naturales">Ciencias naturales</option>
                        <option value="Humanidades">Humanidades</option>
                        <option value="Geografia">Geografia</option>
                        <option value="Historia">Historia</option>
                        <option value="Idiomas">Idiomas</option>
                        <option value="Arte">Arte</option>
                    </select>
                    <input type="file" name="cur_imagen" class="form-control mb-3" placeholder="Nombre del curso" >
                    <input type="submit" value="Insertar" class="btn btn-primary">
                </form>
            </div>
        </div>
            
                <form action="agregarcurso.php" method="get"></form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>

</html>