<?php
    function conectar(){
        $host = "localhost:3306";
        $user = "root";
        $pass = "root";
        $bd = "cursos_db";
        $conn = mysqli_connect($host, $user, $pass);
        mysqli_select_db($conn, $bd);
        
        return $conn; 
    }
?>