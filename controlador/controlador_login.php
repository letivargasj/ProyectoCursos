<?php
session_start();
if(!empty($_POST["btningresar"])){
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $conn = conectar();
        $sql_mae= $conn->query("SELECT * FROM maestro WHERE mae_usuario='$usuario' AND mae_con='$password'") ;
        $sql_est= $conn->query("SELECT * FROM estudiante WHERE est_usuario='$usuario' AND est_con='$password'") ;
        if($datos_mae=$sql_mae->fetch_object()){
            $_SESSION["usuario"] = $datos_mae->mae_usuario;
            $_SESSION["nombre"] = $datos_mae->mae_nombre;
            $_SESSION["apellido"] = $datos_mae->mae_apellido;
            $_SESSION["correo"] = $datos_mae->mae_correo;
            $_SESSION["tipo"] = $datos_mae->mae_tipo;

            header("location: index.php");
            # code...
        }elseif($datos_est=$sql_est->fetch_object()){
            $_SESSION["usuario"] = $datos_est->est_usuario;
            $_SESSION["nombre"] = $datos_est->est_nombre;
            $_SESSION["apellido"] = $datos_est->est_apellido;
            $_SESSION["correo"] = $datos_est->est_correo;
            $_SESSION["tipo"] = $datos_est->est_tipo;

            header("location: index.php");
        }
         else {
            echo "<div class='alert alert-danger'> Credenciales incorrectas</div>";
            # code...
        }
        
        # code...
    } else {
        echo "<div class='alert alert-danger'>Campos vacíos</div>";
    }
    
}
?>

