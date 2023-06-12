<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de nosotros | Ensigna </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/nosotros.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

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
        <div class="clearfix"></div>
        <div class="header-nosotros">
            <div class="titulo-nosotros">
                <h1>Acerca de nosotros</h1>
                <h2>Ensigna | <span> La mejor forma de predecir tu futuro es creándolo. </span></h2>
            </div>
            <div class="fondo-nosotros">
                <img src="./images/2.jpg" alt="Cursos en Línea">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="mid-nosotros">
            <p>
                Todas las personas tienen el potencial de generar cambios, ya sea en su vida, su comunidad o el mundo. Y
                es el poder transformador de la educación lo que revela ese potencial. Sin embargo, únicamente los
                miembros de grupos privilegiados han tenido acceso a una educación de alta calidad. Nos dimos
                cuenta de que era el momento de hacer un cambio radical en el aprendizaje. De lo ya probado a lo
                novedoso. De un acceso "limitado" a un acceso "ilimitado". Al abrir el aula a través del aprendizaje en
                línea, <span> Ensigna </span>permite que millones de estudiantes liberen su potencial y se conviertan en agentes de
                cambio.
            </p>

        </div>
        <div class="mid-fondo">
            <img src="./images/1.jpg" alt="">
        </div>
        <div class="clearfix"></div>

        <div class="mision">

            <div class="mision-imagen">
                <img src="./images/3.png" alt="Escuela Virtual">
            </div>

            <div class="mision-texto">
                <h2 class="title-mision">Nuestra Misión</h2>
                <p>Existen tres compromisos que hemos asumido con el mundo. Nos hemos basado en ellos desde el primer día:</p>
                <ul>
                    <li>Aumentar el acceso a la educación de alta calidad para todos, en todas partes</li>
                    <li>Mejorar la enseñanza y el aprendizaje en línea</li>
                    <li>Mejorar la enseñanza y el aprendizaje a través de la investigación</li>
                </ul>
            </div>
        </div>

        <footer class="footer">
            <h2>Todos los derechos reservados &copy; 2023 | <span> Ensigna </span></h2>
        </footer>

    </div>
</body>

</html>