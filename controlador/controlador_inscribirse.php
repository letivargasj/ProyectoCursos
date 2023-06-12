<?php       

session_start();
if(!empty($_POST["btninscribirse"])){

        if(empty($_SESSION["usuario"])){
            header("location: ../login.php");
        }
        if($_SESSION["tipo"] == "mae"){
            header("location: ../index.php");
        }

    $usuario = $_SESSION["usuario"]; 
    $curso = $row['cur_nombre'] ;

    $conn = conectar();
    $sql  = "INSERT INTO detalle (det_cur_id, det_est_id) VALUES('$curso', '$usuario');";
    $query = mysqli_query($conn, $sql);
    header("location: ../miscursos.php");
}
?>