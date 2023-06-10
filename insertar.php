<?
    session_start();
    include("conexion.php");
    $conn = conectar();
    $nombre = $_POST['cur_nombre'];
    $duracion = $_POST['cur_duracion'];
    $categoria = $_POST['cur_categoria'];
    $imagen = $_POST['cur_imagen'];

    $sql  = "INSERT INTO curso VALUES('$nombre','$duracion','$categoria','LETYV','$imagen')";
    $query = mysqli_query($conn, $sql);

    if($query) {
        Header("Location: index.php");
    } else {
        echo $query;
    }

?>