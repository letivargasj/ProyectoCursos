<?php       
    session_start();

    $id = $_GET['id'];
    echo $id;
    $usuario = $_SESSION["usuario"]; 
    echo $usuario;
    
    if(empty($_SESSION["usuario"])){
        header("location: ../login.php");
    }
    if($_SESSION["tipo"] == "mae"){
        header("location: ../index.php");
    }

    $conn = conectar();
    $sql  = "INSERT INTO detalle (det_cur_id, det_est_id) 
            VALUES('$id', '$usuario')";
    
    $query = mysqli_query($conn, $sql);
    if($query) {
        header("Location: ../miscursos.php");
        echo $query;
        echo "<script>alert('yyyyy');</script>";
    } else {
        echo $query;
        echo "<script>alert('bbbbbbbbbb');</script>";
    }


?>