<?php       
    #include("conexion.php");
    mysqli_close($mysqli);
    session_start();
    if(empty($_SESSION["usuario"])){
        header("location: ../login.php");
    }
    if($_SESSION["tipo"] == "mae"){
        header("location: ../index.php");
    }
    #$conn = conectar();
    #$id = $_GET['id'];
    #echo $id;
    #$usuario = $_SESSION["usuario"]; 
    #echo $usuario;
    #$sql  = "SELECT * FROM curso";

    #$sql  = "INSERT INTO detalle(det_cur_id, det_est_id) VALUES('$id', '$usuario')";
    #$query2 = mysqli_query($conn, $sql);
    header("Location: ../miscursos.php");
#    if($query) {
        #header("Location: ../miscursos.php");

    #} else {
        #header("Location: ../miscursos.php");

    #}


?>