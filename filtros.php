<?
    include("conexion.php");
    session_start();

    $conn = conectar();
    
    if(!empty($_POST["btnFiltro"])){

        $categoria = $_POST['filtroCategoria'];
        $nombre = $_POST['buscar'];
        if (empty($_POST['filtroCategoria']) && (empty($_POST['buscar']))){
            
            $sql  = "SELECT * FROM curso";
            $query = mysqli_query($conn, $sql);
            if($query) {
                header("Location: index.php");
                echo $query;
            } else {
                echo $query;
            }
        
        }else if (empty($_POST['filtroCategoria'])){

            $sql  = "SELECT * FROM curso WHERE cur_nombre = '$nombre'";
            $query = mysqli_query($conn, $sql);
            if($query) {
                header("Location: index.php");
                echo $query;
            } else {
                echo $query;
            }
            
        }else if (empty($_POST['buscar'])){
            
            $sql  = "SELECT * FROM curso WHERE cur_categoria = '$categoria'";
            $query = mysqli_query($conn, $sql);
            if($query) {
                header("Location: index.php");
                echo $query;
            } else {
                echo $query;
            }
            
        } else{
            $sql  = "SELECT * FROM curso WHERE cur_categoria = '$categoria' AND cur_nombre = '$nombre'";
            $query = mysqli_query($conn, $sql);
            if($query) {
                header("Location: index.php");
                echo $query;
            } else {
                echo $query;
            }
        }

    }


?>