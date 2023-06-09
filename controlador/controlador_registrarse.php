<?php
$conn = conectar();

if(!empty($_POST["btnregistrarse"])){
    if (!empty($_POST["reg_nombre"]) and !empty($_POST["reg_apellido"]) and
        !empty($_POST["reg_usuario"]) and !empty($_POST["reg_correo"]) and
        !empty($_POST["reg_password"]) and $_POST["reg_tipo"] != 0 and !empty($_POST["reg_con_password"]))
    {
        $nombre = $_POST["reg_nombre"];
        $apellido = $_POST["reg_apellido"];
        $usuario = $_POST["reg_usuario"];
        $correo = $_POST["reg_correo"];
        $password = $_POST["reg_password"];
        $con_password = $_POST["reg_con_password"];
        $tipo = $_POST["reg_tipo"];
        $duplicado_usu_est = mysqli_query($conn, "SELECT * FROM estudiante WHERE est_usuario = '$usuario'");
        $duplicado_usu_mae = mysqli_query($conn, "SELECT * FROM maestro WHERE mae_usuario = '$usuario'");
        $duplicado_correo_est = mysqli_query($conn, "SELECT * FROM estudiante WHERE est_correo = '$correo'");
        $duplicado_correo_mae = mysqli_query($conn, "SELECT * FROM maestro WHERE mae_correo = '$correo'");
        if(mysqli_num_rows($duplicado_usu_est) > 0 or mysqli_num_rows($duplicado_usu_mae) > 0 ){
            echo "<div class='alert alert-danger'>Usuario duplicado</div>";
        }elseif(mysqli_num_rows($duplicado_correo_est) > 0 or mysqli_num_rows($duplicado_correo_mae) > 0 ){
            echo "<div class='alert alert-danger'>Correo duplicado</div>";
        }
        else{
            if($_POST["reg_tipo"] == 1 ){
            #estudiante
                if($password == $con_password){
                    $query = "INSERT INTO estudiante(est_nombre, est_apellido, est_usuario, est_correo, est_con) VALUES ('$nombre', '$apellido', '$usuario', '$correo', '$password')";
                    mysqli_query($conn, $query);
                    header("location: login.php");
                }else{
                    echo "<div class='alert alert-danger'>Las contraseñas no coinciden</div>";
                }
            }
            else{
            #maestro
                if($password == $con_password){
                    $query = "INSERT INTO maestro(mae_nombre, mae_apellido, mae_usuario, mae_correo, mae_con) VALUES ('$nombre', '$apellido', '$usuario', '$correo', '$password')";
                    mysqli_query($conn, $query);
                    header("location: login.php");
                }else{
                    echo "<div class='alert alert-danger'>Las contraseñas no coinciden</div>";
                }
            }
        }
        # code...
    } else {
        echo "<div class='alert alert-danger'>Campos vacíos</div>";
    }
    
}
?>

