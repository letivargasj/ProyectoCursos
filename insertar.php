<?
    #include("conexion.php");
    session_start();

    $conn = conectar();
    if(!empty($_POST["btninsertar"])){
        if (!empty($_POST["cur_nombre"]) and !empty($_POST["cur_duracion"]) and
        !empty($_POST["cur_categoria"]) and !empty($_POST["cur_imagen"]))
        {
            $usuario = $_SESSION["usuario"];
            $nombre = $_POST['cur_nombre'];
            $duracion = $_POST['cur_duracion'];
            $categoria = $_POST['cur_categoria'];
            $imagen = $_POST['cur_imagen'];
                
            $sql  = "INSERT INTO curso (cur_nombre, cur_categoria, cur_duracion, cur_imagen, cur_mae_id) 
                             VALUES('$nombre','$categoria','$duracion','images/$imagen','$usuario')";
          
            $query = mysqli_query($conn, $sql);
            if($query) {
                header("Location: index.php");
                echo $query;
            } else {
                echo $query;
            }
        } else {
            echo "<div class='alert alert-danger'>Campos vacíos</div>";
        }
    }
?>